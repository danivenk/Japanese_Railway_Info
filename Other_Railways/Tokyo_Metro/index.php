<?php

$site = "http://ressha.hakkajiten.com/";

?>

<!Doctype HTML>
<html>
<head>
	<title>
		Tokyo Metro
	</title>
	<meta charset="utf-8"/>
	<meta name="viewport" content="initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="../../css/css.css">
	<link rel="stylesheet" media="screen and (orientation: landscape)" href="../../../css/landscape_css.css" />
	<link rel="shortcut icon" type="image/png" href="../../../IMG/東京メトロ.png">
</head>
<body>
	<div class="container">
		<!--Navigation Include-->
		<?php

		include '../../nav.php';

		?>
		<!--Website content-->
		<div class="content">
			<h1>Tokyo Metro</h1>
			Tokyo Metro is the operator of the subway in the special wards of Tokyo Prefecture<br>
			See futher:
			<ul class="content">
				<li><a href="<?php echo $site?>Other_Railways/Tokyo_Metro/Lines/">Tokyo Metro Lines</a></li>
				<li><a href="<?php echo $site?>Other_Railways/Tokyo_Metro/Stations/">Tokyo Metro Stations</a></li>
			</ul>
		</div>
	</div>
</body>
</html>