<?php
if(isset($_POST["dob"]))
{
    extract($_POST);
    //echo "$names $dob $scholarship $course";
    //$scholarship = isset($scholarship) ? "Yes" : "No";
    $conn=mysqli_connect("localhost", "root","","shule");
    $sql="INSERT INTO `employee`(`id`, `names`, `email`, `address`, `dob`, `department`, `gender`, `kra_pin`, `salary`)
 VALUES (null ,'$names','$email','$address','$dob','$department','$gender','$kra_pin','$salary')";

    mysqli_query($conn, $sql)or die(mysqli_error($conn));
    $message="Employee $names has been registered";
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
<?php
require 'navbar.php';
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-5">
            <h3>Register Employee</h3>
            <p class="text-success">
                <?php
                 if(isset($message))
                     echo $message;
                ?>
            </p>
            <form action="employee_form.php" method="post">
                <!--names,email,gender,course,dob,scholarship_status,school_id-->
                <div class="form-group">
                    <input type="text" required class="form-control" name="names" placeholder="Names">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="text"  required class="form-control" name="address" placeholder="Address">
                </div>
                <div class="form-group">
                    <input type="date" class="form-control" name="dob" placeholder="Dob">
                </div><div class="form-group">

                    <div class="form-group">
                        <select name="department" class="form-control">
                            <option value="Finance">Finance</option>
                            <option value="Human Resource">Human Resource</option>
                            <option value="Developer">Developer</option>
                            <option value="Marketing">Marketing</option>
                            <option value="Front Office">Front Office</option>
                            <option value="Accounts">Accounts</option>
                            <option value="Public Relation">Public Relation</option>
                        </select>
                    </div>

                    <div class="radio">
                        <label><input type="radio" value="Female" name="gender">Female
                        </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" value="Male" name="gender">Male
                        </label>
                    </div>

                    <input type="text" class="form-control" name="kra_pin" placeholder="Kra_pin">
                </div><div class="form-group">
                    <input type="number" class="form-control" name="salary" placeholder="Salary">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

</body>
