<?php

namespace Fuel\Migrations;

class Create_posts
{
	public function up()
	{
		\DBUtil::create_table('posts', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'post_author' => array('constraint' => 11, 'type' => 'int'),
			'post_title' => array('type' => 'text'),
			'post_content' => array('type' => 'text'),
			'post_excerpt' => array('type' => 'text'),
			'post_status' => array('constraint' => 11, 'type' => 'int'),
			'post_type' => array('constraint' => 11, 'type' => 'int'),
			'comment_status' => array('constraint' => 11, 'type' => 'int'),
			'menu_order' => array('constraint' => 11, 'type' => 'int'),
			'post_parent' => array('constraint' => 11, 'type' => 'int'),
			'start_date' => array('type' => 'datetime'),
			'end_date' => array('type' => 'datetime'),
			'feature_start_date' => array('type' => 'datetime'),
			'feature_end_date' => array('type' => 'datetime'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('posts');
	}
}