<?php

session_start();
$conn = mysqli_connect("localhost","root","","nisha") or die("error");

if(isset($_GET['id'])){
	$id = $_GET['id'];

	$user = mysqli_query($conn,"SELECT * FROM `employee` WHERE id = $id");
	foreach ($user ->fetch_array() as $k => $v) {
		$meta[$k] = $v;
	}
} 

 foreach($user as $key => $value){
 	$meta[$key] = $value;
 }

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Updated Form</title>

	<link rel="stylesheet" href="css/bootstrap.min.css">
 <script src="js/bootstrap.min.js"></script>

 <style >
 	.card-body{
 		margin: 50px 40px;
 	}

 </style>
</head>
<body>

<div class="container-fluid">
	<div class="row row-cols-sm-1 text-primary">
		<div class="col">
			<h1 class="text-center">Updated Employee Management System</h1>
			<div class="card">
				<div class="card-body">

			<form method="post" class="text-primary">
			  
			  <input type="hidden" name="id" value="<?php echo isset($meta['id']) ? $meta['id']: '' ?>">

			    <label for="exampleInputEmail1" class="form-label">Your Name</label>
			    <input type="text"  name="name" class="form-control" id="exampleInputEmail1" value="<?php echo isset($meta['name']) ? $meta['name']: '' ?>">
			 
			  
			    <label for="exampleInputPassword1" class="form-label">Your Email</label>
			    <input type="email" name="email" class="form-control" id="exampleInputPassword1" value="<?php echo isset($meta['email']) ? $meta['email']: '' ?>">

			    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
			  
			    <label for="exampleInputPassword1" class="form-label">Password</label>
			    <input type="password" name="pass" class="form-control" id="exampleInputPassword1" value="<?php echo isset($meta['pass']) ? $meta['pass']: '' ?>">

			    <label for="exampleInputPassword1" class="form-label">Salary</label>
			    <input type="number" name="num" class="form-control" id="exampleInputPassword1" value="<?php echo isset($meta['salary']) ? $meta['salary']: '' ?>">

			  <br>

			 <div id="cityHelp" class="form-text">Enter your city here</div>

			<select name="default" class="form-select" aria-label="Default select example">
			  <option selected>Select City</option>
			  <option value="delhi">Delhi</option>
			  <option value="mumbai">Mumbai</option>
			  <option value="pune">Pune</option>
			   <option value="jaipur">Jaipur</option>
			</select>

			<br><br>

			  <input type="submit" class="btn btn-primary" name="button">
			</form>

		     </div>
	      </div>
		</div>
	</div>
</div>


</body>
</html>

<?php


$con = mysqli_connect("localhost","root","","nisha") or die("error");

if(isset($_REQUEST['button'])){
	$id = $_GET['id'];
	$name=$_POST['name'];
	$email=$_POST['email'];
	$pass=$_POST['pass'];
	$salary=$_POST['num'];
	$city=$_POST['default'];


$query = mysqli_query($con,"UPDATE `employee` SET name='$name',email='$email',pass='$pass',salary='$salary',city='$city' WHERE id = $id");

if($query){
		echo "<script>alert('Successful');window.location.href='show.php';</script>";
	}
	else{
		echo "<script>alert('error')</script>";
	}

}
?>