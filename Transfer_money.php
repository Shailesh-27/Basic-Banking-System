<?php
include 'config.php';

if(isset($_POST['submit']))
{
    $from = $_GET['id'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];

    $sql = "SELECT * from user where id=$from";
    $q1 = mysqli_query($con,$sql);
    $sql_1 = mysqli_fetch_array($q1);

    $sql = "SELECT * from user where id=$to";
    $q1 = mysqli_query($con,$sql);
    $sql_2 = mysqli_fetch_array($q1);

    if (($amount)<0)
   {
        echo '<script type="text/javascript">';
        echo ' alert("Oops! Negative values cannot be trasferrred")'; 
        echo '</script>';
    }

    else if($amount > $sql_1['balance']) 
    {
        
        echo '<script type="text/javascript">';
        echo ' alert("You do not have sufficient balance to transfer")';  
        echo '</script>';
    }
    
    else if($amount == 0){

         echo "<script type='text/javascript'>";
         echo "alert('You have to transfer some money')";
         echo "</script>";
     }


    else {
                $recentbalance = $sql_1['balance'] - $amount;
                $sql = "UPDATE user set balance=$recentbalance where id=$from";
                mysqli_query($con,$sql);    
             

                $recentbalance = $sql_2['balance'] + $amount;
                $sql = "UPDATE user set balance=$recentbalance where id=$to";
                mysqli_query($con,$sql);
                
                $sender = $sql_1['name'];
                $receiver = $sql_2['name'];
                $sql = "INSERT INTO transcation(`sender`, `receiver`, `balance`) VALUES ('$sender','$receiver','$amount')";
                $query=mysqli_query($con,$sql);

                if($query){
                     echo "<script> alert('Transaction Successful');
                                     window.location='Transfer_history.php';
                           </script>";
                    
                }

                $recentbalance= 0;
                $amount =0;
        }
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./css/table.css">
    <title>Transfer Money</title>
    <style>
        select{
            width: 200px;
            height: 30px;
        }
        label{
            color: blue;
            font-weight: bold;
            font-size: 25px;
        }
        input{
            width: 240px;
            height: 30px;
        }
        #btn{
            padding: 10px 30px;
        }
    </style>
</head>
<body>
    <?php
        include 'navbar.php';
    ?>
   

    <div class="container">
        <br><br>
        <br><br>
        <br>

        <h2>Transfer Money</h2>
        <br>
        <?php
                include 'config.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM  user where id=$sid";
                $result = mysqli_query($con,$sql);
                if(!$result)
                {
                    echo "Error : ".$sql."<br>".mysqli_error($con);
                }
                $rows=mysqli_fetch_assoc($result);
            ?>
    
    <form method = "post">
        <table table style="width:70%">
            <tr>
                    <th class="text-center">ID</th>
                    <th class="text-center">NAME</th>
                    <th class="text-center">EMAIL</th>
                    <th class="text-center">BALANCE</th>
            </tr>
            <tr>
                    <td><?php echo $rows['id'] ?></td>
                    <td><?php echo $rows['name'] ?></td>
                    <td><?php echo $rows['email'] ?></td>
                    <td><?php echo $rows['balance'] ?></td>
           </tr>
        </table>
    <br>
    <label>Transfer To:</label>
        <select name="to" class="form-control" required>
            <option value="" disabled selected>Choose</option>
            <?php
                include 'config.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM user where id!=$sid";
                $result=mysqli_query($con,$sql);
                if(!$result)
                {
                    echo "Error ".$sql."<br>".mysqli_error($con);
                }
                while($rows = mysqli_fetch_assoc($result)) {
            ?>
                <option class="table" value="<?php echo $rows['id'];?>" >
                
                    <?php echo $rows['name'] ;?> 
               
                </option>
            <?php 
                } 
            ?>
        </select>
        <br><br>
        <label>Amount to be transferred:</label>
        <input type="number" class="form-control" name="amount" required>   
        <br><br>
        <div>
            <button name="submit" type="submit" id="btn">Transfer</button>
        </div>
     </form>
     </div>
</body>
</html>