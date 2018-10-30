<?php
/**
 * Created by PhpStorm.
 * User: ganto
 * Date: 10/28/2018
 * Time: 7:23 PM
 */


$conneted = mysqli_connect("localhost","root","","port");

if (!$conneted){
    echo "failed to connect";

}

if (isset($_POST['id'])){

    extract($_POST);
    mysqli_query($conneted,"UPDATE `details` SET Firstname='$fname',SecondName='$sname', UserName ='$username',email='$email',IDNumber= '$idn',`Date`='$birth',PhoneNumber ='$phone',Gender= '$gender',password='$password' WHERE id=$id");
    header("location:users.php");
}





?>