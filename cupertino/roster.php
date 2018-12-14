<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../otfstyle.css"> 
	<script type="text/javascript" src="../otfscripts.js"></script> 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://momentjs.com/downloads/moment.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate"/>
	<meta http-equiv="Pragma" content="no-cache"/>
	<meta http-equiv="Expires" content="0"/>
	<link rel="icon" href="../img/splat.png">
	<title>OTF Cupertino: Class Layout</title>
</head>
<body>
<div class="container">
	<div class="row">
<?php

$time = $_POST['times']; 

require_once '../otflg/Constants.php';
$con = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

date_default_timezone_set('America/Los_Angeles');
$today = date("Ymd");
$todayDay = date("j");
$count = 0;

$sql = "SELECT * FROM Cupertino WHERE Day = '$today' AND Hour = '$time';";
$result = mysqli_query($con, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
	while ($row = mysqli_fetch_assoc($result)) {
	if(empty($row['Floor1']) && empty($row['Floor2']) && empty($row['Floor3']) && empty($row['Floor4']) && empty($row['Floor5']) && empty($row['Floor6']) && empty($row['Floor7']) && empty($row['Floor8']) && empty($row['Floor9']) && empty($row['Floor10']) && empty($row['Floor11']) && empty($row['Floor12'])){
		for($i = 1; $i <= 12; $i++) {
			$check = "Tread".$i;
			if(!empty($row[$check])) {
				$count++;
			}
		}
		for($i = 1; $i <= 12; $i++) {
			$check = "Rower".$i;
			if(!empty($row[$check])) {
				$count++;
			}
		}
		echo "<div id='roster'>";
		echo "<table id='names'>";
		echo "<tr>";
			echo "<th>Treads <img id='icons' src='../img/treads.png'></th>";
			echo "<th>Rowers <img id='icons' src='../img/rowers.png'></th>";
		echo "</tr>";
		echo "<tr>";
			echo "<td id='t1'>1:&nbsp;&nbsp;&nbsp;&nbsp;" . $row['Tread1'] . "</td>"; 
			echo "<td id='r1'>1:&nbsp;&nbsp;&nbsp;&nbsp;" . $row['Rower1'] . "</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td id='t2'>2:&nbsp;&nbsp;&nbsp;&nbsp;" . $row['Tread2'] . "</td>"; 
			echo "<td id='r2'>2:&nbsp;&nbsp;&nbsp;&nbsp;" . $row['Rower2'] . "</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td id='t3'>3:&nbsp;&nbsp;&nbsp;&nbsp;" . $row['Tread3'] . "</td>"; 
			echo "<td id='r3'>3:&nbsp;&nbsp;&nbsp;&nbsp;" . $row['Rower3'] . "</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td id='t4'>4:&nbsp;&nbsp;&nbsp;&nbsp;" . $row['Tread4'] . "</td>"; 
			echo "<td id='r4'>4:&nbsp;&nbsp;&nbsp;&nbsp;" . $row['Rower4'] . "</td>"; 
		echo "</tr>";
		echo "<tr>";
			echo "<td id='t5'>5:&nbsp;&nbsp;&nbsp;&nbsp;" . $row['Tread5'] . "</td>"; 
			echo "<td id='r5'>5:&nbsp;&nbsp;&nbsp;&nbsp;" . $row['Rower5'] . "</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td id='t6'>6:&nbsp;&nbsp;&nbsp;&nbsp;" . $row['Tread6'] . "</td>"; 
			echo "<td id='r6'>6:&nbsp;&nbsp;&nbsp;&nbsp;" . $row['Rower6'] . "</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td id='t7'>7:&nbsp;&nbsp;&nbsp;&nbsp;" . $row['Tread7'] . "</td>"; 
			echo "<td id='r7'>7:&nbsp;&nbsp;&nbsp;&nbsp;" . $row['Rower7'] . "</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td id='t8'>8:&nbsp;&nbsp;&nbsp;&nbsp;" . $row['Tread8'] . "</td>"; 
			echo "<td id='r8'>8:&nbsp;&nbsp;&nbsp;&nbsp;" . $row['Rower8'] . "</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td id='t9'>9:&nbsp;&nbsp;&nbsp;&nbsp;" . $row['Tread9'] . "</td>"; 
			echo "<td id='r9'>9:&nbsp;&nbsp;&nbsp;&nbsp;" . $row['Rower9'] . "</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td id='t10'>10: &nbsp;" . $row['Tread10'] . "</td>"; 
			echo "<td id='r10'>10: &nbsp;" . $row['Rower10'] . "</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td id='t11'>11: &nbsp;" . $row['Tread11'] . "</td>"; 
			echo "<td id='r11'>11: &nbsp;" . $row['Rower11'] . "</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td id='t12'>12: &nbsp;" . $row['Tread12'] . "</td>"; 
			echo "<td id='r12'>12: &nbsp;" . $row['Rower12'] . "</td>";
		echo "</tr>";
		echo "</table>";
		echo "</div>";
		echo "<div id='container'>";
		echo "<span id='time'>" . $time . "</span>";
		echo "<button class='rosterButton'><a href='https://adamgolab.com/cupertino/otf.php'>Go Back</a></button>";
		echo "<button class='rosterButton' id='2GRotate' onclick='twoGroupRotate()'>Rotate</button>";
		echo "<button class='rosterButton btn btn-default' style='display: none' id='twoG' onclick=\"document.getElementById('templateRoster').src='../cupertino/2G/" . $todayDay . ".pdf'; switchVisible();\">Switch to 2G</button>";
		echo "<button class='rosterButton btn btn-default' id='threeG' onclick=\"document.getElementById('templateRoster').src='../cupertino/3G/" . $todayDay . ".pdf'; switchVisible();\">Switch to 3G</button>";
		$day = date("Ymj");
		$dayName = date('l', $day);
		if(date($dayName === 'Wednesday')) {
			echo "<button class='rosterButton btn btn-default' id='fourty' onclick=\"document.getElementById('templateRoster').src='../cupertino/45/" . $todayDay . ".pdf'\">Switch to 45</button>";
		}
		echo "<span id='time'>" . $count . " out of 24</span>";
		echo "</div>";
	} else {
		for($i = 1; $i <= 12; $i++) {
			$check = "Tread".$i;
			if(!empty($row[$check])) {
				$count++;
			}
		}
		for($i = 1; $i <= 12; $i++) {
			$check = "Rower".$i;
			if(!empty($row[$check])) {
				$count++;
			}
		}
		for($i = 1; $i <= 12; $i++) {
			$check = "Floor".$i;
			if(!empty($row[$check])) {
				$count++;
			}
		}
		echo "<div id='roster'>";
		echo "<table id='names'>";
		echo "<tr>";
			echo "<th>Treads <img id='icons' src='../img/treads.png'></th>";
			echo "<th>Rowers <img id='icons' src='../img/rowers.png'></th>";
			echo "<th>Floor <img id='icons' src='../img/floor.png'></th>";
		echo "</tr>";
		echo "<tr>";
		echo "<td id='t1'>1:&nbsp;&nbsp;&nbsp;&nbsp;" . $row['Tread1'] . "</td>"; 
			echo "<td id='r1'>1:&nbsp;&nbsp;&nbsp;&nbsp;" . $row['Rower1'] . "</td>";
			echo "<td id='f1'>1:&nbsp;&nbsp;&nbsp;&nbsp;" . $row['Floor1'] . "</td>"; 
		echo "</tr>";
		echo "<tr>";
			echo "<td id='t2'>2:&nbsp;&nbsp;&nbsp;&nbsp;" . $row['Tread2'] . "</td>"; 
			echo "<td id='r2'>2:&nbsp;&nbsp;&nbsp;&nbsp;" . $row['Rower2'] . "</td>";
			echo "<td id='f2'>2:&nbsp;&nbsp;&nbsp;&nbsp;" . $row['Floor2'] . "</td>"; 
		echo "</tr>";
		echo "<tr>";
			echo "<td id='t3'>3:&nbsp;&nbsp;&nbsp;&nbsp;" . $row['Tread3'] . "</td>"; 
			echo "<td id='r3'>3:&nbsp;&nbsp;&nbsp;&nbsp;" . $row['Rower3'] . "</td>";
			echo "<td id='f3'>3:&nbsp;&nbsp;&nbsp;&nbsp;" . $row['Floor3'] . "</td>"; 
		echo "</tr>";
		echo "<tr>";
			echo "<td id='t4'>4:&nbsp;&nbsp;&nbsp;&nbsp;" . $row['Tread4'] . "</td>"; 
			echo "<td id='r4'>4:&nbsp;&nbsp;&nbsp;&nbsp;" . $row['Rower4'] . "</td>";
			echo "<td id='f4'>4:&nbsp;&nbsp;&nbsp;&nbsp;" . $row['Floor4'] . "</td>"; 
		echo "</tr>";
		echo "<tr>";
			echo "<td id='t5'>5:&nbsp;&nbsp;&nbsp;&nbsp;" . $row['Tread5'] . "</td>"; 
			echo "<td id='r5'>5:&nbsp;&nbsp;&nbsp;&nbsp;" . $row['Rower5'] . "</td>";
			echo "<td id='f5'>5:&nbsp;&nbsp;&nbsp;&nbsp;" . $row['Floor5'] . "</td>"; 
		echo "</tr>";
		echo "<tr>";
			echo "<td id='t6'>6:&nbsp;&nbsp;&nbsp;&nbsp;" . $row['Tread6'] . "</td>"; 
			echo "<td id='r6'>6:&nbsp;&nbsp;&nbsp;&nbsp;" . $row['Rower6'] . "</td>";
			echo "<td id='f6'>6:&nbsp;&nbsp;&nbsp;&nbsp;" . $row['Floor6'] . "</td>"; 
		echo "</tr>";
		echo "<tr>";
			echo "<td id='t7'>7:&nbsp;&nbsp;&nbsp;&nbsp;" . $row['Tread7'] . "</td>"; 
			echo "<td id='r7'>7:&nbsp;&nbsp;&nbsp;&nbsp;" . $row['Rower7'] . "</td>";
			echo "<td id='f7'>7:&nbsp;&nbsp;&nbsp;&nbsp;" . $row['Floor7'] . "</td>"; 
		echo "</tr>";
		echo "<tr>";
			echo "<td id='t8'>8:&nbsp;&nbsp;&nbsp;&nbsp;" . $row['Tread8'] . "</td>"; 
			echo "<td id='r8'>8:&nbsp;&nbsp;&nbsp;&nbsp;" . $row['Rower8'] . "</td>";
			echo "<td id='f8'>8:&nbsp;&nbsp;&nbsp;&nbsp;" . $row['Floor8'] . "</td>"; 
		echo "</tr>";
		echo "<tr>";
			echo "<td id='t9'>9:&nbsp;&nbsp;&nbsp;&nbsp;" . $row['Tread9'] . "</td>"; 
			echo "<td id='r9'>9:&nbsp;&nbsp;&nbsp;&nbsp;" . $row['Rower9'] . "</td>";
			echo "<td id='f9'>9:&nbsp;&nbsp;&nbsp;&nbsp;" . $row['Floor9'] . "</td>"; 
		echo "</tr>";
		echo "<tr>";
			echo "<td id='t10'>10: &nbsp;" . $row['Tread10'] . "</td>"; 
			echo "<td id='r10'>10: &nbsp;" . $row['Rower10'] . "</td>";
			echo "<td id='f10'>10: &nbsp;" . $row['Floor10'] . "</td>"; 
		echo "</tr>";
		echo "<tr>";
			echo "<td id='t11'>11: &nbsp;" . $row['Tread11'] . "</td>"; 
			echo "<td id='r11'>11: &nbsp;" . $row['Rower11'] . "</td>";
			echo "<td id='f11'>11: &nbsp;" . $row['Floor11'] . "</td>"; 
		echo "</tr>";
		echo "<tr>";
			echo "<td id='t12'>12: &nbsp;" . $row['Tread12'] . "</td>"; 
			echo "<td id='r12'>12: &nbsp;" . $row['Rower12'] . "</td>";
			echo "<td id='f12'>12: &nbsp;" . $row['Floor12'] . "</td>"; 
		echo "</tr>";
		echo "</table>";
		echo "</div>";
		echo "<div id='container'>";
		echo "<span id='time'>" . $time . "</span>";
		echo "<button class='rosterButton'><a href='https://adamgolab.com/cupertino/otf.php'>Go Back</a></button>";
		echo "<button class='rosterButton' id='3GRotate' onclick='threeGroupRotate()'>Rotate</button>";
		echo "<button class='rosterButton btn btn-default' id='twoG' onclick=\"document.getElementById('templateRoster').src='../cupertino/2G/" . $todayDay . ".pdf'; switchVisible();\">Switch to 2G</button>";
		echo "<button class='rosterButton btn btn-default' style='display: none' id='threeG' onclick=\"document.getElementById('templateRoster').src='../cupertino/3G/" . $todayDay . ".pdf'; switchVisible();\">Switch to 3G</button>";
		$day = date("Ymj");
		$dayName = date('l', $day);
		if(date($dayName === 'Wednesday')) {
			echo "<button class='rosterButton btn btn-default' id='fourty' onclick=\"document.getElementById('templateRoster').src='../cupertino/45/" . $todayDay . ".pdf'\">Switch to 45</button>";
		}
		echo "<span id='time'>" . $count . " out of 33</span>";
		echo "</div>";
	}
}
}


?>
<script>
	$("#names td").css("font-weight","normal");
	$("#names td").css('color', 'black');
	$("#names td:contains('*')").css("font-weight","Bold");
	$("#names td:contains('*')").css("color", "green");
</script>
	<div>
	<?php
	$time = $_POST['times']; 

	require_once '../otflg/Constants.php';
	$con = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

	date_default_timezone_set('America/Los_Angeles');
	$today = date("Ymd");
	$todayDay = date("j");

	$sql = "SELECT * FROM Cupertino WHERE Day = '$today' AND Hour = '$time';";
	$result = mysqli_query($con, $sql);
	$resultCheck = mysqli_num_rows($result);

	if ($resultCheck > 0) {
	while ($row = mysqli_fetch_assoc($result)) {
	if(empty($row['Floor1']) && empty($row['Floor2']) && empty($row['Floor3']) && empty($row['Floor4']) && empty($row['Floor5']) && empty($row['Floor6']) && empty($row['Floor7']) && empty($row['Floor8']) && empty($row['Floor9']) && empty($row['Floor10']) && empty($row['Floor11']) && empty($row['Floor12']) && empty($row['Floor13'])){
		echo "</div>";
		echo "<div>";
		echo "<iframe id='templateRoster' src='../cupertino/2G/" . $todayDay . ".pdf' width='850' height='450'></iframe>";
		}
		else {
		echo "</div>";
		echo "<div>";
		echo "<iframe id='templateRoster' src='../cupertino/3G/" . $todayDay . ".pdf' width='850' height='450'></iframe>";
		}
		echo "</div>";
		echo "";
	}
}
	?>
</div>
</div>
</div>
</body>
</html>