
<?php 
$con = mysqli_connect("localhost","root","","nisha");
 if(isset($_GET['id'])){

 	$id = $_GET['id'];



 	$query = mysqli_query($con,"DELETE FROM `employee` WHERE id=$id");
 	if($query){

         echo "<script>alert('Successful');window.location.href='show.php';</script>";		
 		}
 		else{

 			echo "<script>alert('Failed')</script>";
 		}
 }






 ?>