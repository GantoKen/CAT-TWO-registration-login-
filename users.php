<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>USERS</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">

    <style>
        body
        {
            background-color: rgba(255,144,112,0.84);
        }
        table
        {
            background-color: rgba(198,210,255,0.84);
        }
        table,th,td
        {
            border-radius: 2px;
            border: 1px solid black;
            border-collapse: collapse;
        }
        th,td
        {
            padding: 2px;
        }
        .lg
        {
            padding-right: 90%;
        }
    </style>
</head>
<body>
<h1>USERS</h1>
<a href="logout.php" class="lg"><button>LOG OUT</button></a>

<hr>
<table>
<tr>

    <th>Fname</th>
    <th>Sname</th>
    <th>Username</th>
    <th>email</th>
    <th>ID Number</th>
    <th>D.O.B</th>
    <th>Phone No</th>
    <th>Gender</th>
    <th>Update</th>
    <th>Delete</th>

</tr>
    <?php
    /**
     * Created by PhpStorm.
     * User: ganto
     * Date: 10/26/2018
     * Time: 11:22 PM
     */
    $connected = mysqli_connect ("localhost","root","","port");
    $fetch = mysqli_query($connected, "select * from details");

    while($row = mysqli_fetch_assoc($fetch)){

        extract($row);

        echo "
        <tr>
        <td>$Firstname</td>
        <td>$SecondName</td>
        <td>$UserName</td>
        <td>$email</td>
        <td>$IDNumber</td>
        <td>$Date</td>
        <td>$PhoneNumber</td>
        <td>$Gender</td>
        <td><a href='update.php?x=$id'><button class='btn-danger'>UPDATE</button></a></td>
        <td><a href='delete.php?x=$id'><button class='btn btn-secondary'>DELETE</button></a></td>
</tr>
        ";

    }



    ?>
</table>
</body>
</html>