<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>fetch</title>
    <link rel="stylesheet" href="bootstrap-4.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">

    <script src="bootstrap-4.2/js/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
</head>
<body>
<?php
require 'navbar.php';
?>
<div class="container">
    <table class="table table-success"  id="employee">
        <thead>
        <tr>
            <th>ID</th>
            <th>NAMES</th>
            <th>EMAILS</th>
            <th>ADDRESS</th>
            <th>DOB</th>
            <th>DEPARTMENT</th>
            <th>GENDER</th>
            <th>KRA_PIN</th>
            <th>SALARY</th>
            <th>Action</th>
        </tr>
        </thead>

        <tbody>
<!--        <tr>-->
<!--            <td>1</td>-->
<!--            <td>john</td>-->
<!--            <td>john@yahoo.com</td>-->
<!--            <td>24-westlands</td>-->
<!--            <td>1980-4-5</td>-->
<!--            <td>finance</td>-->
<!--            <td>male</td>-->
<!--            <td>A98990</td>-->
<!--            <td>90,000</td>-->
<!--        </tr>-->
        <?php
        $conn =  mysqli_connect("localhost","root","",'shule');
        $sql = "select * from employee";
        $results = mysqli_query($conn, $sql);

        while ($row =mysqli_fetch_assoc($results))
        {
//            var_dump($row);
//            die();
            extract($row);
            echo
            "<tr>
            <td>$id</td>
            <td>$names</td>
            <td>$email</td>
            <td>$address</td>
            <td>$dob</td>
            <td>$department</td>
            <td>$gender</td>
            <td>$kra_pin</td>
            <td>$salary</td>
            <td><a class='btn btn-danger btn-sm' href='delete.php?id=$id'>Delete</a></td>
        </tr>";
        }
        ?>
        </tbody>
    </table>


    </div>

<script>
    $(document).ready(function() {
        $('#employee').DataTable();
    } );
</script> //it triggers the datatables

</body>
</html>