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
		<div id='homeContainer'>
			<ul class= 'column' id='recipesToTry'>
				<li>
					<img src="https://bigoven-res.cloudinary.com/image/upload/h_320,w_320,c_fill/spaghetti-8.jpg">
					<h2>Spaghetti</h2>
					<p> test </p>
				</li>
				<li>
					<img src="https://bigoven-res.cloudinary.com/image/upload/h_320,w_320,c_fill/quick-ramen-bowl.jpg">
					<h2>Ramen</h2>
				</li>
				<li>
					<img src="https://www.readyseteat.com/sites/g/files/qyyrlu501/files/uploadedImages/img_2070_1452.JPEG">
					<h2>Chicken Parmesan</h2>
				</li>
				<li>
					<img src="https://bigoven-res.cloudinary.com/image/upload/h_320,w_320,c_fill/pumpkin-cheesecake-pie-2615a8.jpg">
					<h2>Pumpkin Cheesecake</h2>
				</li>
				<li>
					<img src="https://bigoven-res.cloudinary.com/image/upload/h_320,w_320,c_fill/drink-mojito-e327ed.jpg"></td>
					<h2>Mojito</h2>
				</li>
			</ul>
			<div class= 'column' id='announcementsColumn'>
				<ul id='announcements'>
					<li id="news">
						<h1><b>ANNOUNCEMENTS</b></h1>
					</li>
					<li>
						<h2>Announcement A</td>
					</li>
					<li>
						<h2>Announcement B</td>
					</li>
				</ul>
				<div id="recipeOfTheMonth">
					<img src="https://bigoven-res.cloudinary.com/image/upload/h_320,w_320,c_fill/pumpkin-cheesecake-pie-2615a8.jpg">
				</div>
			</div>
		</div>
		<?php
			require_once("footer.php");
		?>
	</body>
</html>
