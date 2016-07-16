<h2>Viewing #<?php echo $post->id; ?></h2>

<p>
	<strong>Post author:</strong>
	<?php echo $post->post_author; ?></p>
<p>
	<strong>Post title:</strong>
	<?php echo $post->post_title; ?></p>
<p>
	<strong>Post content:</strong>
	<?php echo $post->post_content; ?></p>
<p>
	<strong>Post excerpt:</strong>
	<?php echo $post->post_excerpt; ?></p>
<p>
	<strong>Post status:</strong>
	<?php echo $post->post_status; ?></p>
<p>
	<strong>Post type:</strong>
	<?php echo $post->post_type; ?></p>
<p>
	<strong>Comment status:</strong>
	<?php echo $post->comment_status; ?></p>
<p>
	<strong>Menu order:</strong>
	<?php echo $post->menu_order; ?></p>
<p>
	<strong>Post parent:</strong>
	<?php echo $post->post_parent; ?></p>
<p>
	<strong>Start date:</strong>
	<?php echo $post->start_date; ?></p>
<p>
	<strong>End date:</strong>
	<?php echo $post->end_date; ?></p>
<p>
	<strong>Feature start date:</strong>
	<?php echo $post->feature_start_date; ?></p>
<p>
	<strong>Feature end date:</strong>
	<?php echo $post->feature_end_date; ?></p>

<?php echo Html::anchor('admin/post/edit/'.$post->id, 'Edit'); ?> |
<?php echo Html::anchor('admin/post', 'Back'); ?>