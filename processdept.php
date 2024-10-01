<?php

    include 'Connection.php';
    if(isset($_POST['submit']))
    {
        $deptid=$_POST['deptid'];
        $deptname=$_POST['deptname'];
        $deptloc=$_POST['deptloc'];
        $sql="insert into department(deptid, deptname, deptloc) values('$deptid', '$deptname', '$deptloc')";
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