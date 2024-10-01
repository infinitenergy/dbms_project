<?php

    include 'Connection.php';
    if(isset($_POST['submit']))
    {
        $projid=$_POST['projid'];
        $projname=$_POST['projname'];
        $projloc=$_POST['projloc'];
        $sql="insert into project(projid, projname, projloc) values('$projid', '$projname', '$projloc')";
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