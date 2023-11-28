


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>show here</title>

	<link rel="stylesheet" href="css/bootstrap.min.css">
 <script src="js/bootstrap.min.js"></script>

</head>
<body>
<div class="container-fluid">
<table class="table table-bordered ">
  <thead class="table-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Pass</th>
      <th scope="col">Salary</th>
      <th scope="col">City</th>
    </tr>
 </thead>
   <tbody>
   	<tr>

<?php


$con=mysqli_connect("localhost","root","","nisha");

$query = mysqli_query($con, "SELECT * FROM employee");


	// code...

	while ($row = mysqli_fetch_array($query)) {
		// code...

?>


    
      <th><?php echo $row['id']; ?></th>
      <td><?php echo $row['name']; ?></td>
      <td><?php echo $row['email']; ?></td>
      <td><?php echo $row['pass']; ?></td>
      <td><?php echo $row['salary']; ?></td>
      <td><?php echo $row['city']; ?></td>
      <td><a href="update.php?id=<?php echo $row['id'];?>" class="btn btn-primary">Update</a></td>
      <td><a href="delete.php?id=<?php echo $row['id'];?>" class="btn btn-danger">Delete</a></td>


</tr>


<?php 

	}
 ?>

  </tbody>
</table>
<a href="add.php"> Add Your Employee Data</a>
</div>

</body>
</html>