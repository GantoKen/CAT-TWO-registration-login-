<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>UPDATE</h1>
<hr>
<form action="updateprocess.php" method="post">
    <?php
    /**
     * Created by PhpStorm.
     * User: ganto
     * Date: 10/28/2018
     * Time: 11:06 AM
     */



    $connected = mysqli_connect("localhost","root","","port");

    $id = $_GET['x'];
    $fetch = mysqli_query($connected,"select * from details where id = $id");
    $row = mysqli_fetch_assoc($fetch);
    extract($row);




    ?>

    <label for="">id</label>
    <input type="number" name="id" value="<?php echo $id?>">

    <label for="">First Name</label>
    <input type="text" name="fname" placeholder="First Name" value="<?php echo $Firstname ?>">

    <label for="">Second Name</label>
    <input type="text" name="sname" placeholder="Second Name" value="<?php echo $SecondName ?>"><br><br>

    <label for="">User Name</label>
    <input type="text"name="user" placeholder="User Name" value="<?php echo $UserName?>">


    <label for="">Email</label>
    <input type="email" name="email" placeholder="email" value="<?php echo $email?>"><br><br>

    <label for="">ID Number</label>
    <input type="text" name="idn" placeholder="ID Number" value="<?php echo $IDNumber ?>">

    <label for="">Date of Birth</label>
    <input type="date" name="birth" value="date <?php echo $Date ?>"><br><br>

    <label for="">Phone Number</label>
    <input type="number" name="phone" placeholder="phone number" value="<?php  echo $PhoneNumbe?>">
    <label for="">Gender</label>
    <input type="radio" name="gender" value="male <?php echo $Gender?>" >Male
    <input type="radio" name="gender" value="female <?php echo $Gender?>">Female
    <br><br>

    <label for="">Password</label><br>
    <input type="text" name="password" placeholder="password"><br><br>


    <input type="submit" name="submit" value="update">





</body>
</html>