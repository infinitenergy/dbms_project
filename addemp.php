<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Department</title>
    <link rel="website icon" type="png" href="">
    <link rel="stylesheet" href="ADD.css">
</head>
<body>
    <form action="processemp.php" method="POST">
        <div class="div1">
            <label for="Name">Employee ID</label><br>
            <input type="text" name="empid" required><br>
            <label for="Name">Employee Name</label><br>
            <input type="text" name="empname" required><br>
            <label for="Name">Employee Password</label><br>
            <input type="text" name="emppassword" required><br>
            <label for="Name">Employee Gender</label><br>
            <input type="text" name="empgender" required><br>
            <label for="Name">Employee Salary</label><br>
            <input type="text" name="empsal" required><br>
            <label for="Name">Employee Age</label><br>
            <input type="text" name="empage" required><br>
            <button type="submit" name="submit" value="submit" id="i1">Submit</button>
        </div>
    </form>
</body>
</html>