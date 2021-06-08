<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./css/style.css">
    <title>Basic Banking System</title>
</head>
<body>
    <?php
        include 'navbar.php';
    ?>
    <div class="title">
   	   <h1>Basic Banking System</h1>
   </div>
	 <div class="grid">
      <div class="grid-item">
        <div class="card">
          <img class="card-img" src="./assets/customer.jpg" alt="Customer images" />
          <div class="card-content">
            <h1 class="card-header">View All Customer</h1>
            <button class="card-btn"><a href="view_all_customer.php">View Customer</a> <span>&rarr;</span></button>
          </div>
        </div>
      </div>
		 <div class="grid-item">
	        <div class="card">
	          <img class="card-img" src="./assets/history.jpg" alt="History images" />
	          <div class="card-content">
	            <h1 class="card-header">Transaction Histoy</h1>
	            <button class="card-btn"><a href="Transfer_history.php">View Customer</a> <span>&rarr;</span></button>
	          </div>
	        </div>
	      </div>
	  </div>
      
      <?php
        include 'footer.php';
      ?>
</body>
</html>