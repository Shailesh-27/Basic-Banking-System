<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./css/table.css">
    <title>Transfer History</title>
</head>
<body>
    <?php
        include 'navbar.php';
    ?>
    <div class="container">
        <br><br>
        <br><br>
        <br>
        <h2 class="text-center">Transaction History</h2>
        <br>
        <div>
            <table style="width:70%">
            <tr>
                <th class="text-center">S.No.</th>
                <th class="text-center">SENDER</th>
                <th class="text-center">RECEIVER</th>
                <th class="text-center">AMOUNT</th>
                <th class="text-center">DATE & TIME</th>
            </tr>
            <?php

            include 'config.php';

            $sql ="SELECT * FROM transcation";

            $result =mysqli_query($con, $sql);

            while($rows = mysqli_fetch_assoc($result))
            {
           ?>
            <tr>
                <td><?php echo $rows['s.no']; ?></td>
                <td><?php echo $rows['sender']; ?></td>
                <td><?php echo $rows['receiver']; ?></td>
                <td><?php echo $rows['balance']; ?> </td>
                <td><?php echo $rows['datetime']; ?> </td>
            </tr>
                     
        <?php
            }

        ?>
            </table>
        </div>
        </div>



</body>
</html>