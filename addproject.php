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
    <form action="processproject.php" method="POST">
        <div class="div1">
            <label for="Name">Project ID</label><br>
            <input type="text" name="projid" required><br>
            <label for="Name">Project Name</label><br>
            <input type="text" name="projname" required><br>
            <label for="Name">Project Location</label><br>
            <input type="text" name="projloc" required><br>
            <button type="submit" name="submit" value="submit" id="i1">Submit</button>
        </div>
    </form>
</body>
</html>