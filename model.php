<?php
    class Model
    {
        public $connection="";
        public function __construct()
        {
            try 
            {
                $this->connection=new mysqli("localhost","root","","task");
            }
            catch(Exception $e)
            {
                die(mysqli_error($this->connection));
            }
        }

        // Create a member function for insert data 
        public function insertalldata($data,$table)
        {
            $column=array_keys($data);
            $column1=implode(",",$column);
            
            $value=array_values($data);
            $value1=implode("','",$value);

            $insert="insert into $table ($column1) values('$value1')";
            $exe=mysqli_query($this->connection,$insert);
            return $exe;
        }


        
        // Create a member function for Display data
        public function displayalldata($table)
        {
            $select="select * from $table";
            $exe=mysqli_query($this->connection,$select);
            while($fetch=mysqli_fetch_array($exe))
            {
                $arr[]=$fetch;
            }
            return $arr;
        }

        // Create a member function for update data
        public function updatedata($table,$fnm,$lnm,$dob,$gen,$std,$email,$path,$con,$column,$id)
        {
            $id=$_GET ['st_id'];
            $update="update $table set firstname='$fnm',lastname='$lnm',dateofbirth='$dob',gender='$gen',standard='$std',emailid='$email',image='$path',contact='$con' where $column='$id'";
            $exe=mysqli_query($this->connection,$update);
            return $arr;
        }

                // Create a member function for delet data 
                public function deletdata($table,$id)
                {
                    $column=array_keys($id);
                    $column1=implode(",",$column);
                    
                    $value=array_values($id);
                    $value1=implode("','",$value);
        
                    $delet="delete from $table where $column1 = '$value1'";
                    $exe=mysqli_query($this->connection,$delet);
                    return $exe;
                }

    }
?>