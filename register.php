<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="Bootstrap/custom.css">
    <style>
        body
        {
            background-image:url("image/back2.png");
            background-repeat: no-repeat;
        }
        .rg
        {
            top: 80px;
            width: 30%;

            background: rgb(247, 247, 247);
            border-radius: 6px;
        }
        .for
        {
            place-content: center;
            padding-top: 20px;
        }

    </style>
</head>
<body>
<h1>REGISTER HERE</h1>
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6 rg">
        <form action="registrationprocess.php" method="POST" class="for">

            <label for="">First Name</label>
            <input type="text" name="fname" placeholder="First Name">

            <label for="">Second Name</label>
            <input type="text" name="sname" placeholder="Second Name"><br><br>

            <label for="">User Name</label>
            <input type="text"name="user" placeholder="User Name">


            <label for="">Email</label>
            <input type="email" name="email" placeholder="email"><br><br>

            <label for="">ID Number</label>
            <input type="text" name="idn" placeholder="ID Number">

            <label for="">Date of Birth</label>
            <input type="date" name="birth" value="date"><br><br>

            <label for="">Phone Number</label>
            <input type="number" name="phone" placeholder="phone number">
            <label for="">Gender</label>
            <input type="radio" name="gender" value="male" >Male
            <input type="radio" name="gender" value="female">Female
            <br><br>

            <label for="">Password</label><br>
            <input type="text" name="password" placeholder="password"><br><br>


            <button class="btn-primary float-lg-right"> <input type="submit" name="btnsubmit" value="save"></button>
        </form></div>

    <div class="col-md-3"></div>
</div>
