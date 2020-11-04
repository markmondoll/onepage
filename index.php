<?php 
include "config.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Landing Page</title>
<!--Bootstrap Section-->		
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!--End Bootstrap Section-->		
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
		<h1>Welcome to Landing Page Website</h1>
<!--Header Section-->		

<!--End Header Section-->		

<!--Logo Section-->		

<!--End Logo Section-->		

<!--Menu Section-->		

<!--End Menu Section-->		

<!--Hero Section-->		
<section id=hero>
	<div class="hero container">
		<div>
			<h1>Hello,</h1>
			<h1>My Name is </h1>
			<h1>Mark Mondoll</h1>
			<a href="#" type="button" class="cta">Portfolio</a>
		</div>
	</div>
</section>


<!--End Hero Section-->		


<!--Login Section-->		

<!--End Login Section-->		

<!--Service Section-->		
<section id="services">
	<div class="services container">
		<div class="services-top">
			<h1 class="services-title">Services</h1>
		</div>
		<div class="services-bottom"></div>
	</div> 
</section>
<!--End Service Section-->	

<!--Registration Section-->		

<!--End Registration Section-->		

<!--Employee Section-->		
<section id="employee">
	<div class="employee container">
		<div class="employee-top">
			<h1 class="employee-title">Employee List</h1>
		</div>
<!--Employee Table-->		
		<div>
		<table border="1" align="center" class="table table-primary table-striped table-hover" style="text-align: center">
			<thead class="thead-dark">
				<tr class="bg-primary">
					<th colspan="7"><h1>Emoloyee Details</h1></th>
				</tr>
				<tr>
					<th>ID</th>
					<th>Employee Name</th>
					<th>Gender</th>
					<th>Phone</th>
					<th>Email</th>
					<th>Address</th>
					<th>Username</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				if($conn){
					$a="SELECT id,name,gender,phone,email,address,username FROM `employee`";
					$x=mysqli_query($conn, $a);
					if (mysqli_num_rows($x) > 0) { 
						while ($row=mysqli_fetch_assoc($x)) {?>
							<tr>
								<td><?php echo $row['id']; ?></td>
								<td><?php echo $row['name']; ?></td>
								<td><?php echo $row['gender']; ?></td>
								<td><?php echo $row['phone']; ?></td>
								<td><?php echo $row['email']; ?></td>
								<td><?php echo $row['address']; ?></td>
								<td><?php echo $row['username']; ?></td>
							</tr>
							<?php
						}
					}
				}
				?>
			</tbody>
		</table>
<!-- End Employee Table-->		

		</div>
		<div class="employee-bottom"></div>
	</div> 
</section>
<!--End Employee Section-->		

<!--Contact Us Section-->		
<section id="contact">
	<div class="contact container">
		<div class="contact-top">
			<h1 class="contact-title">Contact Us</h1>
		</div>
		<div class="contact-bottom"></div>
	</div> 
</section>
<!--End Contact Us Section-->		

<!--Footer Section-->		

<!--End Footer Section-->		

<!--Copyright Section-->

<!--End Copyright Section-->	

</body>
</html>