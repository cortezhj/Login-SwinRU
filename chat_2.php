<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
	  rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,100&display=swap" rel="stylesheet">
	<link href="css/custom.css" rel="stylesheet">
	<title>Messages</title>
</head>
<body>

<div class="layout">
	<?php require_once('components/nav.php'); ?>
	<?php require_once('components/sidebar_msj.php'); ?>
	<?php require_once('components/main_chat2.php'); ?>
</div>

<?php require_once('components/dropzone.php'); ?>        
        
<?php require_once('components/modal_1.php'); ?>

<script src="js/libs/jquery.min.js"></script>
<script src="js/bootstrap/bootstrap.bundle.min.js"></script>
<script src="js/plugins/plugins.bundle.js"></script>
<script src="js/template.js"></script>
</body>
</html>