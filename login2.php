<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADMIN</title>
    <style>
        body
        {
            background-image:url("image/back2.png") ;
            background-repeat: no-repeat;
        }
        .rg {

            top: 80px;
            width: 30%;

            background: rgb(247, 247, 247);
            border-radius: 9px;

        }
        .for
        {
            padding-top: 10px;
            padding-bottom: 10px;
        }
        .gt {
            padding: 10px;
            padding-right: 70%;

        }
    </style>
</head>
<body>
<h1>ADMIN LOGIN</h1>
<hr>

<div>
    <div class="col-xl-5"></div>
    <div class="col-xl-2 rg"><form action="" method="post" class="for">

            <label for="">Username</label><br>
            <input type="text" name="username" placeholder="Username"> <br><br>

            <label for="">Password</label><br>
            <input type="text" name="password" placeholder="password"><br><br>

            <input type="submit" name="login" value="login">

        </form>


    </div>
    <div class="col-xl-5">
    </div>
</div>

<?php

$connected=mysqli_connect("localhost","root","","port");

if (isset($_POST['username'])){

    $user =$_POST['username'];
    $password =$_POST['password'];

    while ($user=='kenkibs' and $password=='3222')
    {



    $sql = "SELECT * FROM `details` WHERE UserName='".$user."' AND password='".$password."'limit 1";

    $result=mysqli_query($connected,$sql);
    $count = mysqli_num_rows($result);
    if ($count==1)
    {
        echo "You are successfully logged in";
        header("location:users.php");
    }else
    {
        echo"You entered incorrect login details";
    }
}

}


?>

</body>
</html>