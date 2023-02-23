<?php
require_once("header.php");
?>
<html>
	<head>
		<link rel="stylesheet" href="styles.css">
	</head>
	<body>
		<div id='kitchenBackground'>
		</div>
		<div id='addRecipe'>
			<p> I'm considering adding a preview to the right hand side. I'll spend some time trying to make it happen, but I'll pivot back to my original design if not</p><br><br>
			<form action="/action_page.php">
 				<label for="recipeName">Recipe Name:</label><br>
 				<input type="text" id="recipeName" name="recipeName"><br><br>
 				<label for="radio">Meal Type:</label><br>
 				<input type="radio" id="mainCourse" name="mealType" value="mainCourse">
				<label for="mainCourse">Main Course</label><br>
				<input type="radio" id="dessert" name="mealType" value="dessert">
				<label for="dessert">Dessert</label><br>
				<input type="radio" id="drink" name="mealType" value="drink">
				<label for="drink">Drink</label><br><br>
				<label for="ingredients">Ingredient List(Comma delimited):</label><br><br>
 				<input type="text" id="ingredients" name="ingredients"><br><br>
 				<label for="instructions">Instruction File Upload:</label>
				<input type="file" id="instructions" name="instructions"><br><br>
				<label for="displayImage">Display Image File Upload:</label>
				<input type="file" id="displayImage" name="displayImage"><br><br>
				<input type="submit" id="submit" name="submit">
			</form>
		</div>
	</body>
</html>
<?php
require_once("footer.php");
?>