<?php
if(isset($_POST["dob"]))
{
    extract($_POST);
    //echo "$names $dob $scholarship $course";
    $scholarship = isset($scholarship) ? "Yes" : "No";
    $conn=mysqli_connect("localhost", "root","","shule");
    $sql="INSERT INTO `students`(`id`, `names`, `school_id`, `email`, `dob`, `gender`, `course`, `scholarship`)
 VALUES  (null ,'$names','$school_id','$email','$dob','$gender','$course','$scholarship')";

    mysqli_query($conn, $sql)or die(mysqli_error($conn));
    $message="Student $names has been registered";
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="bootstrap-4.2/css/bootstrap.css">
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-5">
            <h3>Register Student</h3>
            <p class="text-success">
                <?php
                 if(isset($message))
                     echo $message;
                ?>
            </p>
            <form action="register.php" method="post">
                <!--names,email,gender,course,dob,scholarship_status,school_id-->
                <div class="form-group">
                    <input type="text" required class="form-control" name="names" placeholder="Names">
                </div>
                <div class="form-group">
                    <input type="text"  required class="form-control" name="school_id" placeholder="school_id">
                </div>


                <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="date" class="form-control" name="dob" placeholder="Email">
                </div>

                <div class="radio">
                    <label><input type="radio" value="Female" name="gender">Female
                    </label>
                </div>
                <div class="radio">
                    <label><input type="radio" value="Male" name="gender">Male
                    </label>
                </div>

                <div class="form-group">
                    <select name="course" class="form-control">
                        <option value="Medicine">Medicine</option>
                        <option value="Computer Science">Computer Science</option>
                        <option value="Criminology">Criminology</option>
                        <option value="BBIT">BBIT</option>
                        <option value="Electrical Engineering">Electrical Eng</option>
                        <option value="Bsc Arts">Bsc Arts</option>
                        <option value="Phamacy">Phamacy</option>
                    </select>
                </div>
                <div class="form-group form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" value="Yes" name="scholarship" type="checkbox">Scholarship?
                    </label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>












</body>
</html>