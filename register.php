<?php
$mainurl="http://localhost/Task/";
$baseurl="http://localhost/Task/assets";
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Student Registration</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>

    <!-- Bootstrat Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Bootstrat Link End -->

    <!-- CSS link  -->
    <link rel="stylesheet" href="/assets/style.css">
    <!-- CSS link  -->


</head>

<body>
    <center>
        <h1>Student Registeration Form</h1>
    </center> <br><br>
    <div class="container-fluid frm">
        <form method="post" enctype="multipart/form-data">

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">First name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="firstname" id="inputEmail3" required>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Last name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="lastname" id="inputPassword3" required>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Date of Birth</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" name="dateofbirth" id="inputEmail3" required>
                </div>
            </div>

            <div class="col-md-12 form-group">
                <h4 class="gender-title">Gender</h4>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Male" required>
                    <label class="form-check-label" for="inlineRadio1">Male</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Female">
                    <label class="form-check-label" for="inlineRadio2">Female</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio3"
                        value="Prefer not to say">
                    <label class="form-check-label" for="inlineRadio3">Prefer not to say</label>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Standard</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name="standard" id="inputPassword3" required>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Email ID</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" name="emailid" id="inputEmail3" required>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Image</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" name="image" id="inputPassword3" required>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Contact</label>
                <div class="col-sm-10">
                    <input type="tel" class="form-control" name="contact" id="inputPassword3" required>
                </div>
            </div>

            <center>
                <button type="submit" name="Register" class="btn btn-primary">Register</button>
            </center>
            
        </form>
    </div> <br><br><br><br>



</body>

</html>