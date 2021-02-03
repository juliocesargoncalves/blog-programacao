<?php
	
	require_once('templates/header.php');

if(isset($_GET['id'])){

	$id_post = $_GET['id'];
    $post_new;

	foreach ($posts as $post) {
		
		if($post['id'] == $id_post) {
			
			$post_new = $post;
		}
	}

}

?>

<main id="post-container">
	
	<div class="content-container">
		
		<h1 id="main-title"><?= $post_new['title']?></h1>
		<p id="post-description"><?= $post_new['description']?></p>
		<div class="img-container">
				<img src="<?= $BASE_URL ?>/img/<?= $post_new['img']?>" alt="<?= $post['title']?>">
		</div>
		<p class="post-container">

			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer pulvinar purus quis pellentesque vestibulum. Aliquam varius pretium odio, dignissim finibus enim sollicitudin id. Quisque fringilla, metus et tincidunt facilisis, diam neque aliquet tortor, eu tincidunt risus nulla a lectus. Morbi dapibus pulvinar metus in tincidunt. Suspendisse in mattis ex. Fusce nec lectus ut ex sagittis fringilla id quis neque. Quisque sit amet neque luctus, dictum tellus nec, laoreet odio. Vivamus leo lacus, ullamcorper in massa nec, facilisis feugiat ex. Integer nec tincidunt magna. Vivamus auctor nulla massa, eu varius arcu sagittis porttitor. Pellentesque non libero est. Aenean viverra aliquet odio eu luctus. Aenean id iaculis ipsum. Etiam vitae venenatis elit. Nulla a porttitor nulla.

			Nam sagittis tellus et turpis varius, nec accumsan justo imperdiet. Ut urna diam, suscipit a lorem eu, pretium aliquet lorem. Vestibulum a diam consequat, tristique nulla ac, scelerisque purus. Cras dolor leo, dignissim sed urna ac, pretium malesuada sapien. Curabitur libero ante, pulvinar ac leo vitae, fermentum iaculis sem. Suspendisse libero tellus, viverra quis nisl ut, semper porta libero. Integer a aliquet lorem, sit amet feugiat magna. Aenean lorem justo, placerat a justo sed, efficitur pharetra lacus.

			Nullam ut massa magna. Nulla semper turpis non ipsum suscipit, ut semper sapien dignissim. Curabitur elementum diam sed dui tristique rhoncus. Morbi ut dapibus nunc. Vivamus hendrerit id ante quis blandit. Nulla maximus velit mauris. Aliquam efficitur interdum ultrices. Curabitur ut accumsan felis, ut tempus lacus. Nulla elementum aliquam auctor.

			Sed nisl elit, condimentum et tellus vitae, mattis varius libero. Aenean gravida turpis eget risus semper vulputate. Aliquam eleifend nibh et feugiat vulputate. Phasellus id consectetur massa, non convallis magna. Nam at libero vitae nulla sagittis varius ac non ligula. Ut maximus nec quam ut pharetra. Nullam eu nunc at libero hendrerit sollicitudin. Sed sollicitudin ac risus vitae hendrerit. Integer eleifend fermentum tortor sed gravida. Nam sagittis nulla eros, eu porttitor sem rhoncus eget.

			Sed et enim accumsan, tincidunt eros non, scelerisque purus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Morbi gravida volutpat bibendum. Sed dignissim arcu et purus cursus, non dignissim lorem rutrum. Maecenas sit amet lectus nunc. Mauris fringilla consequat finibus. In lacinia turpis ac sapien ornare, eu finibus orci iaculis. Nunc malesuada, nibh quis tempus facilisis, tortor elit dictum velit, sit amet imperdiet dui risus id dolor. </p>

</div>


<aside class="nav-container">

	<h3 id="tags-title">Tags</h3>
	<ul id="tag-list">

		<?php foreach($post_new['tags'] as $tag): ?>

			<li><a href=""><?= $tag;?></a></li>	

		<?php endforeach;?>

	</ul>

	<h3 id="tags-categorias">Categorias</h3>
	<ul id="categorias-list">

		<?php foreach($categories as $cat): ?>

			<li><a href=""><?= $cat;?></a></li>	

		<?php endforeach;?>

	</ul>

</aside>

</main>


<?php

	require_once("templates/footer.php");
?>