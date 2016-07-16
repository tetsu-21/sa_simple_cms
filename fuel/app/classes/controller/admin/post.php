<?php
class Controller_Admin_Post extends Controller_Admin
{

	public function action_index()
	{
		$data['posts'] = Model_Post::find('all');
		$this->template->title = "Posts";
		$this->template->content = View::forge('admin/post/index', $data);

	}

	public function action_view($id = null)
	{
		$data['post'] = Model_Post::find($id);

		$this->template->title = "Post";
		$this->template->content = View::forge('admin/post/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Post::validate('create');

			if ($val->run())
			{
				$post = Model_Post::forge(array(
					'post_author' => Input::post('post_author'),
					'post_title' => Input::post('post_title'),
					'post_content' => Input::post('post_content'),
					'post_excerpt' => Input::post('post_excerpt'),
					'post_status' => Input::post('post_status'),
					'post_type' => Input::post('post_type'),
					'comment_status' => Input::post('comment_status'),
					'menu_order' => Input::post('menu_order'),
					'post_parent' => Input::post('post_parent'),
					'start_date' => Input::post('start_date'),
					'end_date' => Input::post('end_date'),
					'feature_start_date' => Input::post('feature_start_date'),
					'feature_end_date' => Input::post('feature_end_date'),
				));

				if ($post and $post->save())
				{
					Session::set_flash('success', e('Added post #'.$post->id.'.'));

					Response::redirect('admin/post');
				}

				else
				{
					Session::set_flash('error', e('Could not save post.'));
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Posts";
		$this->template->content = View::forge('admin/post/create');

	}

	public function action_edit($id = null)
	{
		$post = Model_Post::find($id);
		$val = Model_Post::validate('edit');

		if ($val->run())
		{
			$post->post_author = Input::post('post_author');
			$post->post_title = Input::post('post_title');
			$post->post_content = Input::post('post_content');
			$post->post_excerpt = Input::post('post_excerpt');
			$post->post_status = Input::post('post_status');
			$post->post_type = Input::post('post_type');
			$post->comment_status = Input::post('comment_status');
			$post->menu_order = Input::post('menu_order');
			$post->post_parent = Input::post('post_parent');
			$post->start_date = Input::post('start_date');
			$post->end_date = Input::post('end_date');
			$post->feature_start_date = Input::post('feature_start_date');
			$post->feature_end_date = Input::post('feature_end_date');

			if ($post->save())
			{
				Session::set_flash('success', e('Updated post #' . $id));

				Response::redirect('admin/post');
			}

			else
			{
				Session::set_flash('error', e('Could not update post #' . $id));
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$post->post_author = $val->validated('post_author');
				$post->post_title = $val->validated('post_title');
				$post->post_content = $val->validated('post_content');
				$post->post_excerpt = $val->validated('post_excerpt');
				$post->post_status = $val->validated('post_status');
				$post->post_type = $val->validated('post_type');
				$post->comment_status = $val->validated('comment_status');
				$post->menu_order = $val->validated('menu_order');
				$post->post_parent = $val->validated('post_parent');
				$post->start_date = $val->validated('start_date');
				$post->end_date = $val->validated('end_date');
				$post->feature_start_date = $val->validated('feature_start_date');
				$post->feature_end_date = $val->validated('feature_end_date');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('post', $post, false);
		}

		$this->template->title = "Posts";
		$this->template->content = View::forge('admin/post/edit');

	}

	public function action_delete($id = null)
	{
		if ($post = Model_Post::find($id))
		{
			$post->delete();

			Session::set_flash('success', e('Deleted post #'.$id));
		}

		else
		{
			Session::set_flash('error', e('Could not delete post #'.$id));
		}

		Response::redirect('admin/post');

	}

}
