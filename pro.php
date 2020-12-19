<!DOCTYPE html>
<html>
<head>
	<title>Products</title>
</head>
<body>
	
<?php include 'header.php'; 
	include 'config.php';?>
	<div class="container-fluid">
		<?php
	foreach ($products as $key1 => $value1) {
		echo "<div class='container-fluid rounded text-center py-3 bg-dark text-light'><h1><b>$key1</b><h1></div>";
		foreach ($value1 as $key2 => $value2) {
		echo "<div class='container text-center rounded py-1 bg-warning my-3 text-light'><h4><b>$key2</b><h4></div>";
		echo "<div class=' row mb-3'>";
		foreach ($value2 as $value3) {
	echo '<div class="col border round text-center p-3 ">
	<img src="'.$value3['urr'].'" alt="image">
	<h5> '.$value3['id'].'</h5>
	<h5 >'.$value3['name'].'</h5>
	<h5 >'.$value3['brand'].'</h5>
	<button type="button" class="btn btn-primary btn-lg">Add Cart</button>
	</div>
	';	
}
echo "</div>";

}
}
?>

</div>
<?php include 'footer.php'?>
</body>
</html>

