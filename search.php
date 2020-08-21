<?php
//Connnect DB
require('dbconnect.php');
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Search Records</title>
</head>

<body>

<div class="form">
<p><a href="view.php"> View |</a></p>
</div>

<h2>View Records</h2>
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

echo ($_POST['search']);

?>

<br /><br />

<?php
$count=1;
$temp = $_POST['search'];
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
