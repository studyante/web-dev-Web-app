<?php 
	include_once("config.php");

	$result = mysqli_query($mysqli, "SELECT * FROM country");
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="indexstylesheet.css">
	<title>Homepage</title>
</head>
<body>
	<a href="add.html" class="addbtn"style="position:fixed;right:5px;top:0px; background-color:black;">Add new Data</a><br/><br/>

	<table class="table">
	<thead class="thead-dark"> 
		<tr bgcolor='#cccccc'>
			<th>ISO </td>
			<th>Name </td>
			<th>Nice Name</td>
			<th>ISO3</td>
			<th>Num code</td>
			<th>Phone Code</td>
			<th>Update</td>
		</tr>
	<thead>

		<?php 

		while( $res = mysqli_fetch_array($result)){
			echo "<tr>";
			echo "<td>".$res['iso']."</td>";

			echo "<td>".$res['name']."</td>";
			echo "<td>".$res['nicename']."</td>";
			echo "<td>".$res['iso3']."</td>";
			echo "<td>".$res['numcode']."</td>";
			echo "<td>".$res['phonecode']."</td>";
			echo "<td><a href=\"edit.php?id=$res[id]\" style=\"background-color: blue;color:white;text-transform: uppercase;border-radius: 10px;padding: 1em 1.5em; \">Edit</a> | <a href=\"delete.php?id=$res[id]\" style=\"background-color: red;text-transform: uppercase;border-radius: 10px;padding: 1em 1.5em;color:white; \" onClick=\"return confirm('Are you sure you want to delete this record?')\">Delete</a></td>";
			echo "</tr>";
		} 

		?>



	</table>

	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>