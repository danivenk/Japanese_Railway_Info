<?php

$site = "http://ressha.hakkajiten.com/";

?>

<!Doctype HTML>
<html>
<head>
	<title>
		JR East
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

		include '../../nav.php';

		?>
		<!--Website content-->
		<div class="content">
			<h1>JR East</h1>
			JR East is the JR part of the JR Group mostly in the East part of Japan.<br>
			It contains the whole Kanto and Tohoku Region and Parts of the Shizuoka and Niigata Prefeture.<br>
			See futher:
			<ul class="content">
				<li><a href="<?php echo $site?>JR_Group/JR_East/Lines/">JR East Lines</a></li>
				<li><a href="<?php echo $site?>JR_Group/JR_East/Stations/">JR East Stations</a></li>
				<li><a href="<?php echo $site?>JR_Group/JR_East/Sounds/">JR East Sounds</a></li>
			</ul>
		</div>
	</div>
</body>
</html>