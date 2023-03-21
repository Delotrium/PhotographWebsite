<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Scrolling Image</title>
	<style>
		.container {
			height: 1000px; /* Set a height to create a scrollable area */
			position: relative; /* Set position relative to contain the image */
		}
		.image {
			position: absolute; /* Set position absolute to move the image */
			bottom: 0; /* Set initial position at the bottom of the container */
			left: 0; /* Set initial position at the left of the container */
			width: 100%; /* Set width to fill the container */
			height: auto; /* Set height to adjust to the image aspect ratio */
			transition: bottom 0.1s ease-out; /* Set transition for smooth animation */
            object-position: 50% 100%;
		}
	</style>
</head>
<body>
	<div class="container">
		<img class="image" src="./img/camera.png" alt="Scrolling Image">
	</div>
    <div class="container">
		<img class="image" src="./img/photoone.png" alt="Scrolling Image">
	</div>
    <div class="container">
		<img class="image" src="./img/photoSunrise.png" alt="Scrolling Image">
	</div>

	<script>
		window.addEventListener('scroll', function() {
			var image = document.querySelector('.image');
			var container = document.querySelector('.container');
			var scrollPosition = window.scrollY;
			var containerHeight = container.offsetHeight;
			var imageHeight = image.offsetHeight;
			var scrollOffset = containerHeight - imageHeight;

			// Calculate the new position of the image
			var newPosition = scrollPosition / containerHeight * scrollOffset;

			// Update the position of the image
			image.style.bottom = newPosition + 'px';
		});
	</script>
</body>
</html>
