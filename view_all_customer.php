<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="./css/table.css">
    <title>View All Customer</title>
</head>
<body>
    <?php
        include 'navbar.php';
    ?>
    <?php
        include 'config.php';
        $sql = "SELECT * FROM user";
        $result = mysqli_query($con,$sql);
    ?>

    <div class="container">
            <br><br>
            <br><br>
            <br>

            <h2>All Customers</h2><br>
            <table style="width:70%">
                <tr>
                    <th style="text-align: center;">ID</th>
                    <th style="text-align: center;">NAME</th>
                    <th style="text-align: center;">EMAIL</th>
                    <th style="text-align: center;">BALANCE</th>
                    <th style="text-align: center;">OPERATION</th>
                </tr>
                <?php
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr style='text-align: center;'>
                        <td><?php echo $rows['id'] ?></td>
                        <td><?php echo $rows['name']?></td>
                        <td><?php echo $rows['email']?></td>
                        <td><?php echo $rows['balance']?></td>
                        <td><a href="Transfer_money.php?id= <?php echo $rows['id'] ;?>"><button type="button" class="btn">Transfer</button></a></td>
                    </tr>
                <?php
                    }
                ?>
            </table>
    </div>

    


</body>
</html>