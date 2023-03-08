<!DOCTYPE html>
<html>
<head>
	<title>Instagram Clone</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="script.js"></script>
</head>
<body>
	<div class="container">
		<div class="header">
			<h1>Instagram Clone</h1>
			<a href="#" class="btn-upload">Upload Photo</a>
		</div>
		<div class="gallery">
			<?php
				$images = scandir("images");
				$ignore = array(".", "..");
				foreach ($images as $image) {
					if (!in_array($image, $ignore)) {
						echo "<div class='image'>";
						echo "<img src='images/$image'>";
						echo "<div class='overlay'>";
						echo "<a href='#' class='btn-like'>Like</a>";
						echo "<a href='#' class='btn-comment'>Comment</a>";
						echo "</div>";
						echo "</div>";
					}
				}
			?>
		</div>
	</div>
</body>
</html>
