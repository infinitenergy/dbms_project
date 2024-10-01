<?php

    include "Connection.php";
    $query = "select * from employee";
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
                <th scope="col" class="table1">Id</th>
                <th scope="col" class="table1">Name</th>
                <th scope="col" class="table1">Gender</th>
                <th scope="col" class="table1">Salary</th>
                <th scope="col" class="table1">Age</th>
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
                        <td class='c1'>".$result['empid']."</td>
                        <td class='c1'>".$result['empname']."</td>
                        <td class='c1'>".$result['empgender']."</td>
                        <td class='c1'>".$result['empsal']."</td>
                        <td class='c1'>".$result['empage']."</td>
                        <td class='c1'><a href='deleteemp.php?rn=$result[id]' onclick='return
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
