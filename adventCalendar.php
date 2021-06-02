<!DOCTYPE html>
<html lang="en">

<head>
	<!--Link to style sheet-->
	<link rel="stylesheet" href="mainStyles.css" type="text/css">
	
	<title>Advent Calendar</title>
	
</head>

<body onload="updatePage()">
	<header>
		<div>
			<h1>Laing Industries</h1>
		</div>
		<!--Menu Bar completed but subject to change in design-->
		<ul>
			<li><a href="/">Home</a></li>
			<li><a href="findDonkey">Donkey</a></li>
			<li><a href="adventCalendar">Advent Calendar</a></li>
		</ul>
	</header>
	<h3>Each Day there will be a new bible reading. So come back each day till christmas for a new bible reading!</h3>
	<h5><a href="https://www.esv.org/" target="_blank">Click Here for a Bible</a></h5>
	<div class = info>
		<p id="dailyReading"></p>
		<p id="dailyNotes"></p>
	</div>
	<!-- link to script -->
	<script src="Scripts/adventCalendarScript.js">
	</script>
</body>

</html>
