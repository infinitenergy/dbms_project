<?php
    session_start();
    include "Connection.php";

    if(isset($_POST['uname']) && isset($_POST['password'])) {
        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $uname = validate($_POST['uname']);
        $pass = validate($_POST['password']);

        if(empty($uname)){
            header("Location: index.php?error=User Name is required");
            exit();
        }else if(empty($pass)){
            header("Location: index.php?error=Password is required");
            exit();
        }else{
            $sql = "SELECT * FROM employee WHERE empid='$uname' AND emppassword='$pass' ";
            $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result) === 1){
                $row = mysqli_fetch_assoc($result);
                if($row['empid'] === $uname && $row['emppassword'] === $pass) {
                    $_SESSION['empid'] = $row['empid'];
                    $_SESSION['id'] = $row['id'];
                    header("Location: homepage.php");
                    exit();
                }else{
                    header("Location: index.php?error=Incorrect username or password");
                    exit();
                }
            }else{
                header("Location: index.php");
                exit();
            }
        }
    }
?>