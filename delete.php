<?php
include('db_connect.php');


// Check connection
if ($conn->connect_error) {
    header("Location: 404Error.html");
    exit();
}

$id = $_GET['id'];

$query = "DELETE FROM `members` WHERE id='$id' ";

$data = mysqli_query($conn, $query);

    if($data){
        header("Location: index.php?page=members");
        exit();
    }
    else
    {
        header("Location: 404Error.html");
        exit();
    }

?>
