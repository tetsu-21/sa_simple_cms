<h2>Listing Posts</h2>
<br>
<?php if ($posts): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Post author</th>
			<th>Post title</th>
			<th>Post content</th>
			<th>Post excerpt</th>
			<th>Post status</th>
			<th>Post type</th>
			<th>Comment status</th>
			<th>Menu order</th>
			<th>Post parent</th>
			<th>Start date</th>
			<th>End date</th>
			<th>Feature start date</th>
			<th>Feature end date</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($posts as $item): ?>		<tr>

			<td><?php echo $item->post_author; ?></td>
			<td><?php echo $item->post_title; ?></td>
			<td><?php echo $item->post_content; ?></td>
			<td><?php echo $item->post_excerpt; ?></td>
			<td><?php echo $item->post_status; ?></td>
			<td><?php echo $item->post_type; ?></td>
			<td><?php echo $item->comment_status; ?></td>
			<td><?php echo $item->menu_order; ?></td>
			<td><?php echo $item->post_parent; ?></td>
			<td><?php echo $item->start_date; ?></td>
			<td><?php echo $item->end_date; ?></td>
			<td><?php echo $item->feature_start_date; ?></td>
			<td><?php echo $item->feature_end_date; ?></td>
			<td>
				<?php echo Html::anchor('admin/post/view/'.$item->id, 'View'); ?> |
				<?php echo Html::anchor('admin/post/edit/'.$item->id, 'Edit'); ?> |
				<?php echo Html::anchor('admin/post/delete/'.$item->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Posts.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('admin/post/create', 'Add new Post', array('class' => 'btn btn-success')); ?>

</p>
