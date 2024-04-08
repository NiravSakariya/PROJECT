<?php
require_once("model/model.php");

    class Controller extends Model
    {
        public function __construct()
        {
            parent :: __construct();
            
        // insert data logic
        if(isset($_POST["Register"]))
        {
            $fnm=$_POST["firstname"];
            $lnm=$_POST["lastname"];
            $dob=$_POST["dateofbirth"];
            $gen=$_POST["gender"];
            $std=$_POST["standard"];
            $email=$_POST["emailid"];
            $tmp_name=$_FILES["image"]["tmp_name"];
            $path="uploads/Student Images/".$_FILES["image"]["name"];
            move_uploaded_file($tmp_name,$path);
            $con=$_POST["contact"];
            $data=array("firstname"=>$fnm,"lastname"=>$lnm,"dateofbirth"=>$dob,"gender"=>$gen,"standard"=>$std,"emailid"=>$email,"image"=>$path,"contact"=>$con);
            // $data=array("firstname"=>$fnm,"lastname"=>$lnm,"dateofbirth"=>$dob,"standard"=>$std,"emailid"=>$email,"contact"=>$con);
            $chk=$this->insertalldata($data,'register_student');
            if($chk)
            {
                echo"<script>
                alert('Thanks For Register Here')
                window.location='./';
                </script>";
            }
        }


        // display registration student information logic
        $show=$this->displayalldata('register_student');

        // update registration student information
        if(isset($_POST['updatedata']))
        {
            $id=$_POST['updatedata'];
            $fnm=$_POST["firstname"];
            $lnm=$_POST["lastname"];
            $dob=$_POST["dateofbirth"];
            $gen=$_POST["gender"];
            $std=$_POST["standard"];
            $email=$_POST["emailid"];
            $tmp_name=$_FILES["image"]["tmp_name"];
            $path="uploads/Student Images/".$_FILES["image"]["name"];
            move_uploaded_file($tmp_name,$path);
            $con=$_POST["contact"];
            $chk=$this->updatedata('register_student',$fnm,$lnm,$dob,$gen,$std,$email,$path,$con,'st_id',$id);
            if($chk)
            {
                echo"<script>
                alert('Data updated successfully')
                window.location='./';
                </script>";
            }
        }

        // delete data
        if(isset($_GET['deletid']))
        {
            $delid=$_GET["deletid"];
            $id=array("st_id"=>$delid);
            $chk=$this->deletdata('register_student',$id);
            if($chk)
            {
                echo "<script>
                alert('Deleted successfully')
                window.location='./';
                </script>";
            }
        }


        if($_SERVER["PATH_INFO"])
        {
            switch($_SERVER["PATH_INFO"])
            {
                case'/':
                    require_once("index.php");
                    require_once("register.php");
                    require_once("showdata.php");
                break;

                case'/updatedetails':
                    require_once("index.php");
                    require_once("updatedata.php");
                break;
                
                default:
                    require_once("index.php");
                    require_once("register.php");
                break;

            }
        }

        }
    }
    $obj=new Controller;

?>