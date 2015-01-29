<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>API App</title>
	
	<link rel="stylesheet" href="node_modules/jquery-mobile/dist/jquery.mobile.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	
			<?php include 'inc/page01.inc.php';?>
				<?php include 'inc/page02.inc.php';?>
					<?php include 'inc/page03.inc.php';?>

	<script src="node_modules/jquery/dist/jquery.js"></script>
	<script src="node_modules/jquery-mobile/dist/jquery.mobile.js"></script>
	<script src="js/custom.js"></script>
	<script src="http://veratech.co.nz/blog/?json=1&count=10&callback=listPosts"></script>
</body>
</html>
