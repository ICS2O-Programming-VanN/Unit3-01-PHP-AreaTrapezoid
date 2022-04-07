<html>
  <head>
    <!-- 	Meta Data	 -->
		<meta charset="UTF-8">
		<meta name="Van" content="My website in PHP">
		<meta name="keywords" content="immaculata, ics2o">
		<meta name="DESCRIPTION" content="Website for calculating area of a trapezoid">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png" />
    <link rel="manifest" href="./fav_index/site.webmanifest" />
    <title>My PHP website calculating area for a Trapezoid</title>
    <!-- Links to style.css file -->
		<link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
		<!-- Heading and paragraph -->
    <?php
			echo '<center><h1>Area of a Trapezoid in PHP</h1></center><br>';
			echo "<p>This website allows you to calculate the area of a Trapezoid! <br> Enter the Height and both Bases below:</p>";
		?>
		<!-- Text field and button (Takes Input) -->
		<form method = "post">
			Height: <input type="number" name="height">   
			<br><br>   
			Base-A: <input type="number" name="base-a">
			<br><br>
      Base-B: <input type="number" name="base-b"> <br>
			<br><br>
			<input type = "submit" name = "submit" value="Calculate Area">
		<!-- Calculations for area (With User Input) -->
		<?php
			if(isset($_POST['submit'])) {
				$height = $_POST['height']; // Input for Height
				$baseA = $_POST['base-a']; // Input for Base-A
        $baseB = $_POST['base-b']; // Input for Base-B
				$area = ($baseA + $baseB) / 2 * $height; // Calculations for area
				$area = number_format($area, 2); // Rounds to nearest hundredth 
				echo "<br><br><h4>The area of a Trapezoid with " . $height . "cm for a height, one base with " . $baseA . "cm" . " and the other base at " . $baseB . "cm has an area of " . $area . "cm<sup>2</sup></h4> <br>"; // Outputs Area
			}
		?>
  </body>
</html>