<main><?php

	foreach ($arr_posts as $post) { ?>
		<h2><a href="<?= '?id=' . $post['id'] ?>"><?= $post['title'] ?></a></h2>
		<p><?= $post['excerpt'] ?></p><?php
	} ?>

</main>