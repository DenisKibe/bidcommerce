<?php
	session_start();
	if(!(isset($_SESSION['login'])&&$_SESSION['login']!=""&&$_COOKIE['Login']!="")){header("location:http://localhost/bidcommerce/index.html");
	}
	?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-compatible" content="IE=edge"/>
	<meta http-equiv="content-Type" content="text/html;charset=utf-8"/>
	<meta http-equiv="content-style-Type" content="text/css"/>
	<meta name="author" content=""/>
	<meta name="viewport" content="width=device-width,initial-scale=1"/>

	<title>Bid ecommerce</title>

	<link rel="icon" type="image/png" href="">

			<!--Bootstrap-->
	<link rel="stylesheet" href="css/bootstrap.css">


			<!--custom css-->
	<link type="text/css" href="css/index.css" rel="stylesheet">


  
</head>
<body>
			<!--jumbotron-->
	
	<div class="jumbotron-fluid">
		<div class="container-fluid">
			<div class="float-right" id="logout">
				<span class="glyphicon glyphicon-log-out"></span>
			</div>
			<div class="float-right " id="notify">
				<button class=" btn bg-transparent" id="pos" data-toggle="modal" data-target="#modalnotify">
					<span class="glyphicon glyphicon-bell" id="pos" data-toggle="modal" data-target="#modalnotify"></span><span class="badge badge-pill badge-danger" style="position:absolute;left:0px;top:0;margin-top:7px;font-size:10px;">5</span>
				</button>
			</div>
			<h1 class="float-left" style="color:white;">Name</h1>
			<div class="text-center">
				<div class="dropdown">
					<span class="glyphicon glyphicon-user dropdown-toggle" data-toggle="dropdown"></span>
					<div class="dropdown-menu dropdown-menu-left">
						<ul>
							<li class="dropdown-header">Your Account</li>

							<li class="dropdown-item">Balance<br><?php echo $_SESSION['balance'];?> Denari</li>
						</ul>
					</div>
				</div>

			</div>
			<br>
			<form class="form-inline">
				<div class="input-group text-center">
					<input type="text" class="form-control"size="100%" id="autocomplete" placeholder="Search">
					<div class="input-group-btn">
						<button class="btn" type="button"><span class="glyphicon glyphicon-search"></span></button>
					</div>
				</div>
			</form>
		</div>
	</div>

		<!-- The notify modal-->
	<div class="modal fade" id="modalnotify">
		<div class="modal-dialog">
			<div class="modal-content">
				<!--modalhead-->
				<div class="modal-header">
					<h4 class="modal-title">Your Notifications</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<!--modal body-->
				<div class="modal-body">
					some notification
				</div>
				<!--modal footer-->
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

			<!--navigation bar-->
	<nav class="navbar " role="navigation">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu">
			<span class="glyphicon glyphicon-align-justify"></span>Menu
		</button>
		<div class="collapse navbar-collapse" id="menu">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="#">link</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">link</a>
				</li>
			</ul>
		</div>
	</nav>

<a href="logout.php">logout</a>
<div id="mainbody">
	<div class="container">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 colsm" style="margin-bottom:15px;">
				<div class="border">
					<img src="images/slide1.jpg" alt="" width="100%" height="250px" class="rounded">
				</div>
				<div class="caption border">
					<div class="float-right" id="space">
						<span id="like1p" class="glyphicon glyphicon-heart-empty"></span><span id="badge1p" class="badge"style="font-size:10px;">132</span>
					</div>
					<h4>Product Name</h4>
					<p>some content</p>
					<h5 class="text-center">Price</h5>
					<div class="text-center"><span class="glyphicon glyphicon-time"style="color:red;"></span>Time</div>
					<div class="text-center"><button type="button" class="btn" data-toggle="modal" data-target="#prod1">BID NOW</button></div>
				</div>
			</div>
			<div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 colsm" style="margin-bottom:15px;">
				<div class="border">
					<img src="images/slide1.jpg" alt="" width="100%" height="250px" class="rounded">
				</div>
				<div class="caption border">
					<div class="float-right" id="space">
						<span id="like2p" class="glyphicon glyphicon-heart-empty"></span><span id="badge2p" class="badge" style="font-size:10px;">132</span>
					</div>
					<h4>Product Name</h4>
					<p>some content</p>
					<h5 class="text-center">Price</h5>
					<div class="text-center"><span class="glyphicon glyphicon-time" style="color:red;"></span>Time</div>
					<div class="text-center"><button type="button" class="btn">BID NOW</button></div>
				</div>
			</div>
			<div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 colsm" style="margin-bottom:15px;">
				<div class="border">
					<img src="images/slide1.jpg" alt="" width="100%" height="250px" class="rounded">
				</div>
				<div class="caption border">
					<div class="float-right" id="space">
						<span id="like2p" class="glyphicon glyphicon-heart-empty"></span><span id="badge2p" class="badge" style="font-size:10px;">132</span>
					</div>
					<h4>Product Name</h4>
					<p>some content</p>
					<h5 class="text-center">Price</h5>
					<div class="text-center"><span class="glyphicon glyphicon-time" style="color:red;"></span>Time</div>
					<div class="text-center"><button type="button" class="btn">BID NOW</button></div>
				</div>
			</div>
			<div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3" style="margin-bottom:15px;" >
				<div class="border">
					<img src="images/slide1.jpg" alt="" width="100%" height="250" class="rounded">
				</div>
				<div class="caption border">
					<div class="float-right" id="space">
						<span id="like2p" class="glyphicon glyphicon-heart-empty"></span><span id="badge2p" class="badge" style="font-size:10px;">132</span>
					</div>
					<h4>Product Name</h4>
					<p>some content</p>
					<h5 class="text-center">Price</h5>
					<div class="text-center"><span class="glyphicon glyphicon-time" style="color:red;"></span>Time</div>
					<div class="text-center"><button type="button" class="btn">BID NOW</button></div>
				</div>
			</div>
		</div>
	</div>
</div><!--mainbody-->
			<!--footer-->
	<div class="container-fluid" id="footer">
		<div class="row">
			<div class="col">
				<h4 class="text-center" style="color:#00ff00;font-weight:bolder;">Stay Connected</h4>
				<hr style="background-color:white;">
			</div>
		</div>
		<div class="row text-center">
			<div class="col-4 col-sm-4 col-md-4 col-lg-4">
				<img src="images/img1.jpg" class="rounded-circle" alt="facebook logo" height="40px" width="40px">
			</div>
			<div class="col-4 col-sm-4 col-md-4 col-lg-4">
				<img src="images/img2.jpg" class="rounded-circle" alt="instagram logo" height="40px" width="40px">
			</div>
			<div class="col-4 col-sm-4 col-md-4 col-lg-4">
				<img src="images/img3.jpg" class="rounded-circle" alt="youtube logo" height="40px" width="40px">
			</div>
		</div>
		<div class="row">
			<div class="col text-center">
				<p style="color:#f0f8ff;">About us</p>
				<p style="color:#f0f8ff;">Terms and Conditions</p>
				<p style="color:#f0f8ff;">privacy policy</p>
				<p style="color:#f0f8ff;">Contact us</p>
				<h4><a href="mailto:something@something.com">something@something.com</a></h4>
				<hr style="background-color:white;">
			</div>
		</div>
		<div class="row">
			<div class="col text-center">
				<p style="color:#deb887;font-size:14px;">&#169 copyright 2018</p>
				<p style="color:#deb887;font-size:14px;">All Rights Reserved</p>
				<p style="color:#deb887;font-size:14px;">Powered by techlet</p>
				<p style="color:#deb887;font-size:14px;">Maintained by Optimus Pirates</p>
			</div>
		</div>

	</div>

	<br>
	<div class="container fixed-bottom">
		<div class="row">
			<div class="col">
				<a href="#"> 
					<button class="btn float-right" type="button"><span class="glyphicon glyphicon-arrow-up"style="font-size:20px;color:black;"></span></button>
				</a>
			</div>
		</div>
	</div>
	
	
	<!-- The modal-->
	<div class="modal fade" id="prod1">
		<div class="modal-dialog">
			<div class="modal-content">
				<!--modalhead-->
				<div class="modal-header">
					<h4 class="modal-title">Select amount</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<!--modal body-->
				<div class="modal-body">
					<form role="form" method="post">
					<label for="amount">Amount</label>
					<input type="number" id="bidmount" name="bidmount" required>
				</div>
				<!--modal footer-->
				<div class="modal-footer">
					<button type="Submit" class="btn btn-primary" id="prod1" name="prod1">BID</button>
				</div>
				</form>
			</div>
		</div>
	</div>
			<!--popper.js-->
	<script type="text/javascript" src="js/popper.min.js"></script>
			<!--Jquery-->
	<script type="text/javascript" src="js/jquery.js"></script>

			<!--jquery-ui-->
	<script src="js/jquery-ui.js"></script>


			<!--custom js-->
	<script type="text/javascript" src="js/indexfuncs.js"></script>

			<!--bootstrap js-->
	<script type="text/javascript" src="js/bootstrap.js"></script>
	
	
	
	

</body>
</html>


