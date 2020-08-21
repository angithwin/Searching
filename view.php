<?php
// Connect DB
require('dbconnect.php');
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Records </title>
</head>

<body>
<div class="form">

<form action="search.php" method="POST">
<input id="search" name="search" type="text" placeholder="Type Here...">
<input id="submit" type="submit" value="SEARCH">
</form>

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
$count=1;
$query = "select * from quote order by quote_id asc;";
$result = mysqli_query($con, $query);
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

</div>
</body>
</html>