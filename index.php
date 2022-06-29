<?php

include_once __DIR__ . '/db/data.php';

$post_id = !isset($_GET['id']) ? 'home' : $_GET['id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="assets/style.css">
</head>
<body><?php
	include __DIR__ . '/includes/header.php';

	if ($post_id === 'home') {
		include __DIR__ . '/includes/main-home.php';
	} else {
		include __DIR__ . '/includes/main-post.php';
	}

	include __DIR__ . '/includes/footer.php'; ?>
</body>
</html>