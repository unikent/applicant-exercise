<h1><?php echo $post->title ?></h1>

<p class="date"><?php echo date('j F Y',strtotime($post->date)); ?></p>

<img src="<?php echo $post->featured_image->sizes->full->url ?>">

<p><?php echo $post->content; ?></p>
		
<p><strong>Tags</strong>: <?php echo implode(', ', array_map(function ($tag){return $tag->name;}, (array) $post->tags)); ?></p>