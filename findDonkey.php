<!DOCTYPE html>
<html lang="en">

<head>
	<!--Link to style sheet-->
	<link rel="stylesheet" href="mainStyles.css" type="text/css">
	
	<title>Donkey</title>
	
</head>

<body>
	<header>
		<div>
			<h1>Laing Industries</h1>
		</div>
		<!--Menu Bar completed but subject to change in design-->
		<ul>
			<li><a href="www.daniellaing.com/">Home</a></li>
			<li><a href="findDonkey">Donkey</a></li>
			<li><a href="adventCalendar">Advent Calendar</a></li>
			<li><a href="#link">Page 3</a></li>
			<li><a href="#link">Page 4</a></li>
			<li><a href="#link">Page 5</a></li>

		</ul>
		

	</header>
	<div style="text-align: center;">
		<h2>Find The Invisible Donkey</h2>
	</div>
	
		<!-- importing audio and giving it an id -->
		<audio id="donkeyShout">
			<source src="sfx/DONKEY!.mp3" type="audio/mpeg">
		</audio>

	<!-- importing audio and giving it an id -->
	<audio id="donkeyShout">
		<source src="sfx/DONKEY!.mp3" type="audio/mpeg">
	</audio>

	<img id="donkeyImg" src="images/donkey.jpg" onmouseover="found()">
	
	<!-- code to play audio -->
	<script>
		function found() {
			//declaring variable using ID tag
			let yell = document.getElementById("donkeyShout");
			yell.play();
		}
	</script>
</body>
</html>
