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
    <form action="processdept.php" method="POST">
        <div class="div1">
            <label for="Name">Department ID</label><br>
            <input type="text" name="deptid" required><br>
            <label for="Name">Department Name</label><br>
            <input type="text" name="deptname" required><br>
            <label for="Name">Floor number</label><br>
            <input type="text" name="deptloc" required><br>
            <button type="submit" name="submit" value="submit" id="i1">Submit</button>
        </div>
    </form>
</body>
</html>