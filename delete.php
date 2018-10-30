<?php
/**
 * Created by PhpStorm.
 * User: ganto
 * Date: 10/28/2018
 * Time: 11:07 AM
 */

$connected = mysqli_connect("localhost","root","","port");

if (isset($_GET['x'])){

    $id = $_GET ['x'];

    mysqli_query($connected," DELETE FROM details WHERE id = $id");

    header("location:users.php");
}







?>

