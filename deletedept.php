<?php

    include("Connection.php");
    error_reporting(0);

    $id = $_GET['rn'];
    $query = "DELETE FROM department WHERE ID = '$id'";

    $data = mysqli_query($conn,$query);
    if($data)
    {
        echo "<script>alert('Data deleted successfully')</script>";
        echo "<script>window.open('homepage.php','_self')</script>";
    }
    else{
        echo "Failed";
    }
    header('Location: homepage.php');

?>