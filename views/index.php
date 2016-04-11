<h1>Latest blog posts</h1>

<label>Sort by</label>
<select>
	<option>Date (ASC)</option>
	<option>Date (DSC)</option>
</select>

<label>From</label>
<select>
	<option>All blogs</option>
	<option>KBS</option>
	<option>Music matters</option>
	<option>Staff/student news</option>
</select>

<p></p>

<ul>
	<?php foreach ($all_posts as $post): ?>
	<li>
		<a href="post.php">
			<img src="<?php echo $post->featured_image->sizes->full->url ?>">
			<h2><?php echo $post->title ?></h2>
		</a>
		<p class="date"><?php echo date('j F Y',strtotime($post->date)); ?></p>
		<p><?php echo $post->excerpt; ?></p>
		<p><strong>Tags</strong>: <?php echo implode(', ', array_map(function ($tag){return $tag->name;}, (array) $post->tags)); ?></p>
	</li>
<?php endforeach; ?>
</ul>