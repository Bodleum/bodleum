<?php
	$root = $_SERVER['DOCUMENT_ROOT'];
	include($root."/include/arrays.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- <link href="mainStyles.css" rel="stylesheet" type="text/css"> -->
</head>

<body id="final example">

	<div class="wrapper">

		<div id="banner">
			<a href="/" title="Return to Home">Return to Home</a>
		</div> <!-- banner -->

		<div id="nav">
			<?php
				$root = $_SERVER['DOCUMENT_ROOT'];
				include($root."/include/nav.php");
			?>
		</div> <!-- nav -->

		<div class="content">