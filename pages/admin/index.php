<?php
// session_start();
// include("db_conx.php");

// if(!isset($_SESSION["admin_id"]))
// {
//   header("location: ../signin.php");
//   exit();
// }
?>
<html >
<head>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Admin Panel-Dashboard</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="styles.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	<script>
		$(document).ready(function(){
			$(".toggleArrow").click(function(){
			  $(".wrapper").toggleClass("active")
			})
		});
	</script>
	<link rel="icon" type="img/ico" href="../../images/One1.ico">
</head>
<body>

<div class="wrapper">

	<div class="top_navbar">
		<div class="logo">
			<a href="../../index.php" class="icon">
			<span class="icon"><img src="../../images/One1.png"></i></span></a>
		</div>
		<div class="top_menu">
			<span style="font-size: 24px;">Admin Panel</span>
			<div class="right_info">
				<div class="icon_wrap">
					<div class="icon">
						
						<div class="dropdown">
						  <button class="dropbtn"><i class="fas fa-user"></i></button>
						  <div class="dropdown-content">

						   

						    <a href="profile.php">My Profile</a>
						    <a href="logout_admin.php">Logout</a>

						  </div>
						</div>
						<span id="adminID">Welcome,Admin</span>
					</div>
				</div>
				
			</div>
		</div>
	</div>

	<div class="main_body">
		
		<div class="sidebar_menu">
	        <div class="inner__sidebar_menu">
	        	
	        	<ul>
		          <li>
		            <a href="index.php" class="active" title="Dashboard">
		              <span class="icon">
		              	<i class="fas fa-border-all"></i></span>
		              <span class="list">Dashboard</span>
		            </a>
		          </li>
		          <li>
		            <a href="customerdetail.php" title="Customer Details">
		              <span class="icon"><i class="fas fa-users"></i></span>
		              <span class="list">Customer Details</span>
		            </a>
		          </li>
		          <!-- <li>
		            <a href="dboydetail.php" title="Delivery Boy Details">
		              <span class="icon"><i class="fas fa-shipping-fast"></i></span>
		              <span class="list">Delivery Boy Details</span>
		            </a>
		          </li> -->
		         <li>
		            <a href="Categories" title="Categories" >
		              <span class="icon"><i class="fa fa-list-alt" aria-hidden="true"></i></span>
		              <span class="list">Categories</span>
		            </a>
		          </li>
		          <li>
		            <a href="products.php" title="Products">
		              <span class="icon"><i class="fas fa-box"></i></span>
		              <span class="list">Products</span>
		            </a>
		          </li>
		          <li>
		            <a href="orders.php" title="Orders">
		              <span class="icon"><i class="fas fa-dolly"></i></span>
		              <span class="list">Orders</span>
		            </a>
		          </li>
		          <li>
		            <a href="report.php" class="icon" title="Report">
		              <span class="icon"><i class="fas fa-chart-pie"></i></span>
		              <span class="list">Report</span>
		            </a>
		          </li>
		          
		        </ul>

		        <div class="toggleArrow">
			        <div class="inner_toggleArrow">
			            <span class="arrow">
			                <i class="fas fa-long-arrow-alt-left"></i>
			                <i class="fas fa-long-arrow-alt-right"></i>
			            </span>
			        </div>
			    </div>

	        </div>
	    </div>

	    <div class="container">
	    	
	    	<p style="font-size: 24px; margin-bottom: 20px;">  Dashboard</p>
	    	<div class="item_wrap">
	    		<br><div class="item"><p style="font-size: 24px; margin-bottom:20px;">Analytics (Demo)</p>
	    			<hr class="my-4">
	    			<img src="https://storage.googleapis.com/support-forums-api/attachment/thread-14878988-12395096927049930770.png">
	    		</div>
	    	
	    	</div>
	    	<div class="item_wrap">
	    		<div class="item"><p style="font-size: 24px; margin-bottom:20px;">Report Chart (Demo)</p>
	    			<hr class="my-4">
	    			<img src="https://www.unstoppableprofits.com/wp-content/uploads/2014/11/analytics-oct-nov.png">
	    		</div>

	    	</div>
	    	
	    </div>
	</div>
</div>
	

</body>
</html>