<?php

    include "Connection.php";
    $query = "select * from logs";
    $data = mysqli_query($conn,$query);
    $total = mysqli_num_rows($data);
    $result = $data;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Departments</title>
    <link rel="stylesheet" href="DISPLAY.css">
</head>
<body>

    <table class="tbl">
        <thead>
            <tr>
                <th scope="col" class="table1">Sl No</th>
                <th scope="col" class="table1">Employee ID</th>
                <th scope="col" class="table1">Action</th>
                <th scope="col" class="table1">Date and Time</th>
            </tr>

            <?php 
            if($result){
                $i=1;
                while($result = mysqli_fetch_assoc($data))
                {
                    echo "
                    <tr>
                        <td class='c1'>".$i++."</td>
                        <td class='c1'>".$result['emp_id']."</td>
                        <td class='c1'>".$result['action']."</td>
                        <td class='c1'>".$result['cdate']."</td>
                    </tr>
                    ";
                }
            }
            else{
                echo "No data found";
            }
            ?>
        </thead>
    </table>
</body>
</html>
