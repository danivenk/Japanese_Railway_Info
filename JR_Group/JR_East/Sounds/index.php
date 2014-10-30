<?php

$site = "http://ressha.hakkajiten.com/";

?>

<!Doctype HTML>
<html>
<head>
	<title>
		JR East Sounds
	</title>
	<meta charset="utf-8"/>
	<meta name="viewport" content="initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="../../../css/css.css">
	<link rel="stylesheet" media="screen and (orientation: landscape)" href="../../../css/landscape_css.css" />
	<link rel="shortcut icon" type="image/png" href="../../../../IMG/JRグループ.png">
</head>
<body>
	<div class="container">
		<!--Navigation Include-->
		<?php

		include '../../../nav.php';

		?>
		<!--Website content-->
		<div class="content">
			<h1>JR East Sounds</h1>
			<p>On each station of JR East a sound is played if a train is approaching.<br>
			Here are some of them.</p>
			<h2>Holiday</h2>
			<audio controls>
  				<source src="../../../Audio/JR Holiday V1.mp3" type="audio/mpeg">
				Your browser does not support the audio element.
			</audio><br>
			This sound is played for arrival the Yamanote line at <a href="<?php echo $site?>JR_Group/JR_East/Stations/#kanda" class="intext">Kanda Station</a>.<br>
			<h2>Seseragi</h2>
			<audio controls>
  				<source src="../../../Audio/JR Babble.mp3" type="audio/mpeg">
				Your browser does not support the audio element.
			</audio><br>
			This sound is played for arrival the Yamanote line at <a href="#" class="intext">Tamachi Station</a>.<br>
			<h2>SH-1</h2>
			<audio controls>
  				<source src="../../../Audio/JR SH-1.mp3" type="audio/mpeg">
				Your browser does not support the audio element.
			</audio><br>
			This sound is played for arrival the Chuo line Rapid Service at <a href="<?php echo $site?>JR_Group/JR_East/Stations/#tokyo" class="intext">Tokyo Station</a>, <a href="<?php echo $site?>JR_Group/JR_East/Stations/#ochanomizu" class="intext">Ochanomizu Station</a><br>
			<h2>SH-3</h2>
			<audio controls>
  				<source src="../../../Audio/JR SH-3.mp3" type="audio/mpeg">
				Your browser does not support the audio element.
			</audio><br>
			This sound is played for arrival the Yamanote line at <a href="<?php echo $site?>JR_Group/JR_East/Stations/#tokyo" class="intext">Tokyo Station</a>.<br>
			<h2>Spring</h2>
			<audio controls>
  				<source src="../../../Audio/JR Spring.mp3" type="audio/mpeg">
				Your browser does not support the audio element.
			</audio><br>
			This sound is played for arrival the Chuo line Rapid Service at <a href="<?php echo $site?>JR_Group/JR_East/Stations/#yotsuya" class="intext">Yotsuya Station</a>.<br>
			<h2>Waking of the Trees</h2>
			<audio controls>
  				<source src="../../../Audio/JR Waking of the Trees V1.mp3" type="audio/mpeg">
				Your browser does not support the audio element.
			</audio><br>
			This sound is played for arrival the Chuo line Rapid Service at <a href="<?php echo $site?>JR_Group/JR_East/Stations/#shinjuku" class="intext">Shinjuku Station</a>.<br>
		</div>
	</div>
</body>
</html>