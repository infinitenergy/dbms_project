<?php

    include "Connection.php";
    $query = "CALL `getdept`();"; //STORED PROCEDURE
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
                <th scope="col" class="table1">Dept Name</th>
                <th scope="col" class="table1">Dept Id</th>
                <th scope="col" class="table1">Floor number</th>
                <th scope="col" class="table1">Delete</th>
            </tr>

            <?php 
            if($result){
                $i=1;
                while($result = mysqli_fetch_assoc($data))
                {
                    echo "
                    <tr>
                        <td class='c1'>".$i++."</td>
                        <td class='c1'>".$result['deptid']."</td>
                        <td class='c1'>".$result['deptname']."</td>
                        <td class='c1'>".$result['deptloc']."</td>
                        <td class='c1'><a href='deletedept.php?rn=$result[id]' onclick='return
                        checkdelete()' class='btn2'>Delete</a></td>
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
