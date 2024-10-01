<?php

    include 'Connection.php';
    if(isset($_POST['submit']))
    {
        $empid=$_POST['empid'];
        $empname=$_POST['empname'];
        $emppassword=$_POST['emppassword'];
        $empgender=$_POST['empgender'];
        $empsal=$_POST['empsal'];
        $empage=$_POST['empage'];
        $sql="insert into employee(empid, empname, emppassword,empgender,empsal,empage) values('$empid', '$empname', '$emppassword','$empgender','$empsal','$empage')";
        if(mysqli_query($conn, $sql))
        {
            echo "<script>alert('new record inserted')</script>";
            echo "<script>window.open('homepage.php','_self')</script>";
        }
        else
        {
            echo "error".mysqli_error($conn);
        }
        mysqli_close($conn);
        header('Location: homepage.php');
    }
?>