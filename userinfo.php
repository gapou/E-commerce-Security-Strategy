<?php
// Initialize the session
include('dbconnect.php');
$id = $_COOKIE["user"];
$file = $_COOKIE["file"];
$type = $_COOKIE["type"];

$filename= "profile/$file";
$result = mysqli_query($mysqli,"SELECT * FROM users WHERE username='$id'");
$row= mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>User info | <?php echo $row["username"] ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


<div>
    <?php include('usernav.php'); ?>
    <div class="container container-card2" data-aos="zoom-in" data-aos-duration="1500">
    <div class="card">
    <div class= "leftuser">
        <img class="profile" src=<?php echo $filename; ?> alt="" width="100" height="100"width="100" height="100">
    </div>


    <div class= "rightuser">
        <table class="info-table">
        <tr>
            <th>Username:</th>
            <td><?php echo $row["username"]; ?></td>
        </tr>
        <tr>
            <th>Nick Name:</th>
            <td><?php echo $row["nick_name"]; ?></td>
        </tr>
        <tr>
            <th>Email:</th>
            <td><?php echo $row["email"]; ?></td>
        </tr>
        <tr>
            <th>User Type:</th>
            <td><?php echo $row["type"]; ?></td>
        </tr>
        <tr>
            <th>Address:</th>
            <td><?php echo $row["address"]; ?></td>
        </tr>
        </table>
        <br>
        <button class="btn"><a href="updateinfo.php?userid=<?php echo $row["uid"]; ?>">Update Info</a></button>
        

</div>
    </div>
    </div>
    

</div>


</body>
</html>