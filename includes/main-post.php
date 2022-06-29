<?php
	include_once __DIR__ . '/../db/data.php';

	$found = false;
	$_i = 0;
	$n_posts = count($arr_posts);

	while ($found === false && $_i < $n_posts) {
		if ($arr_posts[$_i]['id'] == $post_id) {
			$post = $arr_posts[$_i];
			$found = true;
		}
		$_i++;
	}
?>

<main><?php

	if ($found) { ?>
		<h1><?= $post['title'] ?></h1>
		<img src="<?= $post['image'] ?>" alt="<?= $post['title'] ?>">
		<p><?= $post['content'] ?></p><?php
	} else {
		echo '<h1>404 - post non trovato</h1>';
	} ?>

</main>