<?php
/**
 * Created by PhpStorm.
 * User: ganto
 * Date: 10/26/2018
 * Time: 5:53 PM
 */


$connect = mysqli_connect("localhost","root","","port");
if (isset($_POST)& !empty($_GET)){
    $username = $_GET['username'];
    $password = $_GET['password'];

//    echo $name. $email . $number;
    $sql = "SELECT UserName FROM `details` WHERE UserName='$username' ";
    $result =mysqli_query($connect,$sql);
    $count =mysqli_num_rows ($result);
//    $sql = $mysqli->query("SELECT * FROM users WHERE email='$email'");
//    $sql= "SELECT jina FROM details WHERE jina='$name'";

    if($count == 1){
//        echo "Welcome ". $name;
        $sql2="SELECT password FROM `details` WHERE password='$password' ";
        $result2 =mysqli_query($connect,$sql2);
        $count2 =mysqli_num_rows ($result2);
        if($count2==1){
            echo "Welcome ". $username;

        }
        else{
            echo "invalid credentials";
        }
    }else{
        echo "invalid credentials";
    }
}


?>