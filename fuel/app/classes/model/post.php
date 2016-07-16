<?php
class Model_Post extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'post_author',
		'post_title',
		'post_content',
		'post_excerpt',
		'post_status',
		'post_type',
		'comment_status',
		'menu_order',
		'post_parent',
		'start_date',
		'end_date',
		'feature_start_date',
		'feature_end_date',
		'created_at',
		'updated_at',
	);

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => false,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_save'),
			'mysql_timestamp' => false,
		),
	);

	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('post_author', 'Post Author', 'required|valid_string[numeric]');
		$val->add_field('post_title', 'Post Title', 'required');
		$val->add_field('post_content', 'Post Content', 'required');
		$val->add_field('post_excerpt', 'Post Excerpt', 'required');
		$val->add_field('post_status', 'Post Status', 'required|valid_string[numeric]');
		$val->add_field('post_type', 'Post Type', 'required|valid_string[numeric]');
		$val->add_field('comment_status', 'Comment Status', 'required|valid_string[numeric]');
		$val->add_field('menu_order', 'Menu Order', 'required|valid_string[numeric]');
		$val->add_field('post_parent', 'Post Parent', 'required|valid_string[numeric]');
		$val->add_field('start_date', 'Start Date', 'required');
		$val->add_field('end_date', 'End Date', 'required');
		$val->add_field('feature_start_date', 'Feature Start Date', 'required');
		$val->add_field('feature_end_date', 'Feature End Date', 'required');

		return $val;
	}

}
