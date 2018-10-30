<?php
/**
 * Created by PhpStorm.
 * User: ganto
 * Date: 10/26/2018
 * Time: 5:13 PM
 */


if (isset($_POST['fname'])) {

    $connected = mysqli_connect("localhost", "root", "", "port");
    if (!$connected) {

        echo "failed to connect";
    } else {
        $fname = $_POST['fname'];
        $sname = $_POST['sname'];
        $username = $_POST['user'];
        $email = $_POST['email'];
        $idn = $_POST['idn'];
        $date = $_POST ['birth'];
        $phone = $_POST['phone'];
        $gender = $_POST['gender'];
        $password = $_POST['password'];
        $insert = "INSERT INTO `details`(`id`, `Firstname`, `SecondName`, `UserName`, `email`, `IDNumber`, `Date`, `PhoneNumber`, `Gender`, `password`) VALUES (null ,'$fname','$sname','$username','$email','$idn','$date','$phone','$gender','$password')";
        $query = mysqli_query($connected,$insert);
        if ($query){

            echo "saved successfully";
            header("location:login.php");
        }else
        {
            echo "failed";
        }


    }

}










?>

