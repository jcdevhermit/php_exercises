<!DOCTYPE html>
<html>
<head>
	<title>Solution 7</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="main.css" />
</head>
<body>
	<!-- start of header -->
	<div class="row">
		<div id="header" class="col-sm-12">
			<div class="container">
				<a href="index.php"><h3><span id="php-name">php</span> exercises</h3></a>
			</div>
		</div>
	</div>
	<div class="row">
		<div id="header-b" class="col-sm-12">
		</div>
	</div>
	<!-- end of header -->
	
	<!-- start of navigation -->
	<div class="container">
	<div class="row">
		<div id="nav" class="col-lg-2">
			<br />
			<ul>
				<li><a href="solution-1.php" target="_blank">Solution 1</a></li>
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
		<!-- end of navigation -->
		<div id="solution" class="col-lg-10">
			<br/ >
			<?php
				$path = "PHP Exercises/solution-7.php";
				echo basename($path) ."<br/>";
				echo basename($path,".php");
			?>
		</div>
	</div>
	</div>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js" integrity="sha384-feJI7QwhOS+hwpX2zkaeJQjeiwlhOP+SdQDqhgvvo1DsjtiSQByFdThsxO669S2D" crossorigin="anonymous"></script>
</body>
</html>