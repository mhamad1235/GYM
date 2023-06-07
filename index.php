<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table V05</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver1">
					<div class="table100-firstcol">
						<table>
							<thead>
							    <tr>
									<th scope="col">Id</th>
									<th scope="col">Name</th>
								  </tr>
							</tbody>
							<?php 
									  include "db.connection.php";
									  $sql="SELECT * FROM `crud2`";
									  $result=mysqli_query($con,$sql);
									  if($result){
									  while ($row=mysqli_fetch_assoc($result)) {
										  $id=$row['id'];
										  $name=$row['name'];
										  $password=$row['password'];
										  $location=$row['location'];
										  $phone=$row['phone_number'];
										  $gender=$row['gender'];
										  echo ' <tr>
										  <th scope="row">'.$id.'</th>
										  <td>'.$name.'</td>
									
										</tr>';
									  }
									  
									  }
									  
									  ?>
						</table>
					</div>
					
					<div class="wrap-table100-nextcols js-pscroll">
						<div class="table100-nextcols">
							<table>
								<thead>
								    <tr>
									
										<th scope="col">Location</th>
										<th scope="col">Email</th>
										<th scope="col">Phone number</th>
										<th scope="col">Gender</th>
									  </tr>
									  <?php 
									  include "db.connection.php";
									  $sql="SELECT * FROM `crud2`";
									  $result=mysqli_query($con,$sql);
									  if($result){
									  while ($row=mysqli_fetch_assoc($result)) {
									
										  $location=$row['location'];
										  $phone=$row['phone_number'];
										  $gender=$row['gender'];
										  echo ' <tr>
										  
										  <td>'.$location.'</td>
										  <td>'.$password.'</td>
										  <td>'.$phone.'</td>
										  <td>'.$gender.'</td>
										</tr>';
									  }
									  
									  }
									  
									  ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			var ps = new PerfectScrollbar(this);

			$(window).on('resize', function(){
				ps.update();
			})

			$(this).on('ps-x-reach-start', function(){
				$(this).parent().find('.table100-firstcol').removeClass('shadow-table100-firstcol');
			});

			$(this).on('ps-scroll-x', function(){
				$(this).parent().find('.table100-firstcol').addClass('shadow-table100-firstcol');
			});

		});

		
		
		
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>