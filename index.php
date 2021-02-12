<?php

if(isset($_POST['name'])){
    $server ="localhost";
$username="root";
$password="";

$con = mysqli_connect($server,$username,$password);

if(!$con){
    die("connect to this database failed due to" .mysqli_connect_error());
}

// echo "Success connectiong to the db";
$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$sql = " INSERT INTO `basic_form`.`form` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`)
 VALUES ( '$name', '$age', '$gender', '$email', '$phone', '$message',
  current_timestamp());";
    // echo $sql;

    if($con->query($sql) == true){
        // echo "Successfully Inserted";
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    $con->close();
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Tutorial</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Welcome To IIT BOMBAY</h1>
        <p>please enter your details and submit this
            form to conirm participation in the trip</p>

        <form action="index.php" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Enter Your name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Age</label>
                <input type="text" name="age" class="form-control" id="age" placeholder="Enter Your Age">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Gender</label>
                <input type="text" name="gender" class="form-control" id="gender" placeholder="Enter Your Gender">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Enter Your Email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Phone</label>
                <input type="phone" name="phone" class="form-control" id="phone" placeholder="Enter Your phone no">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Message</label>
                <textarea type="mesaage" name="message" class="form-control" id="message" cols="30" rows="5"
                    placeholder="Enter Description">

                </textarea>
            </div>
            <div class="btns">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
    <script src="index.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"
        crossorigin="anonymous"></script>
</body>

</html>

<!-- -->