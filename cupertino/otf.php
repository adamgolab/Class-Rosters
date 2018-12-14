<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../otfstyle.css"> 
	<script type="text/javascript" src="../otfscripts.js"></script> 
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate"/>
	<meta http-equiv="Pragma" content="no-cache"/>
	<meta http-equiv="Expires" content="0"/>
	<link rel="icon" href="../img/splat.png">
	<title>OTF Cupertino: Class Rosters</title>
</head>
<body>
<div id='selectClass'>
	<h1>
		<img src="../img/splat.png" id="splatImg">
		Class Roster
	</h1>
	<form method="POST" action="../cupertino/roster.php">
	<input type="button" value="Refresh" onclick="window.location.reload()">
  	<select name="times">
		<?php

			require_once '../otflg/Constants.php';
			$con = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

			date_default_timezone_set('America/Los_Angeles');
			$today = date("Ymd");

			$sql = "SELECT * FROM Cupertino WHERE Day = $today;";
			$result = mysqli_query($con, $sql);
			$resultCheck = mysqli_num_rows($result);

			if ($resultCheck > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
				echo "<option value=" . $row['Hour'] . ">" . $row['Hour'] . "</option>";
			}
			} else {
				echo "<option>No Classes Submitted Today</option>";
			}
		?>
	</select>
  	<input type="submit">
  	<p id='refreshInstruct'>After 5 minutes, tap Refresh</p>
	</form>
</div>
<div>
	<?php
		date_default_timezone_set('America/Los_Angeles');
		$todayDay = date("j");
		echo "<button id='landingButton' class='btn btn-default' id='twoG' onclick=\"document.getElementById('templateLanding').src='../cupertino/2G/" . $todayDay . ".pdf'; switchVisible();\">Switch to 2G</button>";
		echo "<button id='landingButton' class='btn btn-default' style='display: none' id='threeG' onclick=\"document.getElementById('templateLanding').src='../cupertino/3G/" . $todayDay . ".pdf'; switchVisible();\">Switch to 3G</button>";
		$dayName = date('l', strtotime(date("Ymj")));
		//timestamp is off, Saturday matches Wednesday (on thurs $dayName prints out Sunday)
		if(date($dayName === 'Saturday')) {
			echo "<button id='landingButton' class='btn btn-default' onclick=\"document.getElementById('templateLanding').src='../cupertino/45/" . $todayDay . ".pdf'\">Switch to 45</button>";
		}
		echo "<a href='https://adamgolab.com/cupertino/templates.html' class='btn btn-default'>Fitbook</a>";
		echo "<br>";
		echo "<iframe id='templateLanding' src='../cupertino/3G/" . $todayDay . ".pdf' width='850' height='700'></iframe>";
	?>
</div>
</body>
</html>