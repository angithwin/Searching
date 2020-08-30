<?php
	require_once('db.php');
	
	//$db = new DB();
	//$data = $db->viewData();
	
	//$data = $db->searchData('bu');
	//$data = $db->viewData();
	//var_dump($data);
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width initial-scale=1.8">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	
	<link rel="stylesheet" href="css/style.css"></link>
	
	<title>Content Search</title>
</head>

<body>

<h1>Content Search</h1>

<form action="search.php" method="POST">
	<input type="text" name="name" placeholder="Search Here ..." 
	id="searchBox" oninput=search(this.value)>
</form>

<script src="js/main.js"></script>


</body>

</html>