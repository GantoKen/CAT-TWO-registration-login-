
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LOGIN</title>
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
<h1>LOGIN</h1>
<P class="gt">Do not have an account? <a href="register.php">Register</a></P>
<hr>


<div>
    <div class="col-md-5"></div>
    <div class="col-md-2 rg"><form action="" method="post" class="for">

            <label for="">Username</label><br>
            <input type="text" name="username" placeholder="Username"> <br><br>

            <label for="">Password</label><br>
            <input type="text" name="password" placeholder="password"><br><br>

            <input type="submit" name="login" value="login">
        </form>
        <a href="login2.php?x=$id==2"><button>ADMIN LOGIN</button></a>

    </div>
    <div class="col-md-5">
    </div>
</div>

<?php

$connected=mysqli_connect("localhost","root","","port");

if (isset($_POST['username'])){

    $user =$_POST['username'];
    $password =$_POST['password'];

    $sql = "SELECT * FROM `details` WHERE UserName='".$user."' AND password='".$password."'limit 1";

    $result=mysqli_query($connected,$sql);
    $count = mysqli_num_rows($result);
    if ($count==1)
    {
        echo "You are successfully logged in";
        header("location:welcome.html");
    }else
    {
        echo"You entered incorrect login details";
    }
}




?>
</body>
</html>
