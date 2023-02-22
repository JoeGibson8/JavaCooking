<?php
	require_once("header.php");
?>
<html>
	<head>
		<link rel="stylesheet" href="styles.css">
	</head>
	<body>
		<div class="mealContainer">
			<?php
				include("recipeGrid.php");
				$mainCourse = new recipeGrid("Drinks");
				$mainCourse ->printGrid();
			?>
		</div>
	</body>
</html>
		<?php
	require_once("footer.php");
?>