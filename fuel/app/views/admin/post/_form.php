<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('Post author', 'post_author', array('class'=>'control-label')); ?>

				<?php echo Form::input('post_author', Input::post('post_author', isset($post) ? $post->post_author : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Post author')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Post title', 'post_title', array('class'=>'control-label')); ?>

				<?php echo Form::textarea('post_title', Input::post('post_title', isset($post) ? $post->post_title : ''), array('class' => 'col-md-8 form-control', 'rows' => 8, 'placeholder'=>'Post title')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Post content', 'post_content', array('class'=>'control-label')); ?>

				<?php echo Form::textarea('post_content', Input::post('post_content', isset($post) ? $post->post_content : ''), array('class' => 'col-md-8 form-control', 'rows' => 8, 'placeholder'=>'Post content')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Post excerpt', 'post_excerpt', array('class'=>'control-label')); ?>

				<?php echo Form::textarea('post_excerpt', Input::post('post_excerpt', isset($post) ? $post->post_excerpt : ''), array('class' => 'col-md-8 form-control', 'rows' => 8, 'placeholder'=>'Post excerpt')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Post status', 'post_status', array('class'=>'control-label')); ?>

				<?php echo Form::input('post_status', Input::post('post_status', isset($post) ? $post->post_status : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Post status')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Post type', 'post_type', array('class'=>'control-label')); ?>

				<?php echo Form::input('post_type', Input::post('post_type', isset($post) ? $post->post_type : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Post type')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Comment status', 'comment_status', array('class'=>'control-label')); ?>

				<?php echo Form::input('comment_status', Input::post('comment_status', isset($post) ? $post->comment_status : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Comment status')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Menu order', 'menu_order', array('class'=>'control-label')); ?>

				<?php echo Form::input('menu_order', Input::post('menu_order', isset($post) ? $post->menu_order : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Menu order')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Post parent', 'post_parent', array('class'=>'control-label')); ?>

				<?php echo Form::input('post_parent', Input::post('post_parent', isset($post) ? $post->post_parent : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Post parent')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Start date', 'start_date', array('class'=>'control-label')); ?>

				<?php echo Form::input('start_date', Input::post('start_date', isset($post) ? $post->start_date : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Start date')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('End date', 'end_date', array('class'=>'control-label')); ?>

				<?php echo Form::input('end_date', Input::post('end_date', isset($post) ? $post->end_date : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'End date')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Feature start date', 'feature_start_date', array('class'=>'control-label')); ?>

				<?php echo Form::input('feature_start_date', Input::post('feature_start_date', isset($post) ? $post->feature_start_date : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Feature start date')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Feature end date', 'feature_end_date', array('class'=>'control-label')); ?>

				<?php echo Form::input('feature_end_date', Input::post('feature_end_date', isset($post) ? $post->feature_end_date : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Feature end date')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>