<?php
include 'db_connect.php';

$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$gender = $_POST['gender'];
$address = $_POST['address'];

$sql = "INSERT INTO `members`(`firstname`, `middlename`, `lastname`, `gender`, `contact`, `address`, `email`) VALUES ('$firstname','$middlename','$lastname','$gender','$contact','$address','$email')";

if(mysqli_query($conn, $sql)) {
    header("Location: index.php?page=members");
    exit();
} else {
    header("Location: index.php?page=404Error.html");
    exit();
}
?>
