<?php
 require_once('db.php');
 
 $name = $_POST['name'];
 //$con = new DB();
 //$data = $con->searchData($name);
 
 //echo json_encode($data);
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width initial-scale=1.8">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	
	<link rel="stylesheet" href="css/style.css"></link>
	
	<!-- Add icon library -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<title>Search Record</title>
</head>

<body>

<div class="form">
<a href="index.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true"><i class="fa fa-home">ome</i></a>
</div>

<h1>Search Record</h1>
<table border="1">
<thead>
<tr>
<th><strong>Q.ID</strong></th>
<th><strong>Quote</strong></th>
<th><strong>Short Msg</strong></th>
<th><strong>Long Msg</strong></th>
<th><strong>Trans Date</strong></th>
</tr>
</thead>

<tbody>
<?php

//echo ($_POST['name']);

?>

<br /><br />

<?php
$count=1;
$temp = $_POST['name'];
$query = "SELECT * FROM quote WHERE quote LIKE '%$temp%' OR short_msg LIKE '%$temp%' OR long_msg LIKE '%$temp%' ";
$result= mysqli_query($con, $query) or die (mysqli_error($con));

while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
<td align=""><?php echo $row["quote_id"]; ?> </td>
<td align=""><?php echo $row["quote"]; ?> </td>
<td align=""><?php echo $row["short_msg"]; ?> </td>
<td align=""><?php echo $row["long_msg"]; ?> </td>
<td align=""><?php echo $row["trans_date"]; ?> </td>
</tr>
<?php $count++; } ?>
</tbody>
</table>

</body>
</html>