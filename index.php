<?php
    include "Connection.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Database</title>
    <link rel="stylesheet" href="style.css">
    
    <script src="script.js"></script>
</head>

<body>
    <div class="wrapper">
        <form action="emplogin.php" method="POST">
            <style>
            h1{color: black}</style>;<h1>Employee Login</h1>
            <?php if(isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
            <div class="inputbox">
                <input type="text" name="uname" placeholder="Username" required>
            </div>
            
            <div class="inputbox">
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <button type="submit" class="btn">Login</button>
        </form>
    </div>

</body>

</html>