<!DOCTYPE html>
<html>
<head>
	<title>Solution 10</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container">	
		<div class="row">
		<div class="col-sm-12" style="background-color: grey; color:white; padding: 10px 10px 10px 10px;"><h1 >PHP EXERCISES</h1></div>	
	</div>
	<div class="row">
		<div class="col-sm-12" style="height: 10px;">
		</div>
	</div>
	<div class="row">
		<div class="col-lg-4">
		<ul>
			<li><a href="solution-1.php">Solution 1</a></li>
			<li><a href="solution-2.php">Solution 2</a></li>
			<li><a href="solution-3.php">Solution 3</a></li>
			<li><a href="solution-4.php">Solution 4</a></li>
			<li><a href="solution-5.php">Solution 5</a></li>
			<li><a href="solution-6.php">Solution 6</a></li>
			<li><a href="solution-7.php">Solution 7</a></li>
			<li><a href="solution-8.php">Solution 8</a></li>
			<li><a href="solution-9.php">Solution 9</a></li>
			<li><a href="solution-10.php">Solution 10</a></li>
		</ul>
		</div>
		<div class="col-lg-8">	
	<?php
		if(!empty($_SERVER['HTTPS'])){
			echo "This is HTTPS";
		}
		else{
			echo "This is HTTP";
		}
	?>
</div>
</div>s
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js" integrity="sha384-feJI7QwhOS+hwpX2zkaeJQjeiwlhOP+SdQDqhgvvo1DsjtiSQByFdThsxO669S2D" crossorigin="anonymous"></script>
</body>
</html>