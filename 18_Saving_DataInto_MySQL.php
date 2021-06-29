<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <title>Contact Us</title>
</head>

<body>


<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
     
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "contacts";
        $conn = mysqli_connect($servername, $username, $password, $database);
        if (!$conn) {
            die("we are failed to connect");
        } else{
            $sql = "INSERT INTO `contact us` (`name`, `mail`, `password`, `date`) VALUES ('$name', '$email', '$pass', current_timestamp())";
             $result = mysqli_query($conn, $sql); // executed

        if ($result) {
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Success!</strong> Your entry has been submitted successfully!!
            </div>';
        } else{
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error!</strong> Can"nt accept your request! We are facing some technical issue! Sorry for this inconvenience!!
            </div>';
        }
        }
         
    }   
    ?>

    <div class="container mt-4">
        <form action="/Php Course/18_Saving_DataInto_MYSQL.php" method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
            </div>
             
            <div class="mb-3">
                <label for="pass" class="form-label">Password</label>
                <input type="password" class="form-control" id="pass" name="pass">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script>
    <src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous">
    </script>
</body>

</html>