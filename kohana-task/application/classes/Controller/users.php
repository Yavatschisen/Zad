<?php defined('SYSPATH') or die('No direct script access.');

class Controller_users extends Controller {

	public function action_index()
	{		
		$v = new View("users/index");
		$v->users= ORM::factory("user")->find_all();
		echo $v->render();
	}
	public function action_new()
	{			
		$user = new Model_user();
		
		$v = new View("users/edit");
		$v->set("user",$user);
		//echo $v->render();
		$this->response->body($v);
	}
	public function action_edit()
	{	
		$user_id = $this->request->param('id');
		$user = new Model_user($user_id);
		
		$v = new View("users/edit");
		$v->set("user",$user);
		//echo $v->render();
		$this->response->body($v);
	}

	public function action_delete()
	{	
		$user_id = $this->request->param('id');
		$user = new Model_user($user_id);
		
		$user->delete();
		$this->redirect('users');
	}	
	
	public function action_delete_all()
	{	
		if(!empty($_POST['idi']))
		{
			foreach($_POST['idi'] as $i)
			{
				ORM::factory("user")->find($i)->delete();				
			}
			
			$this->redirect('users');
		}
		else
		{
			echo "Choose items to delete";
		}
			
	}	
	
    public function action_post() 
	{
        $user_id = $this->request->param('id');
        
				
		$validate = Validation::factory($_POST);
		$validate->rule("name","not_empty")
				->rule("surname","not_empty")
				->rule("job_position","not_empty")
				->rule("personal_number","not_empty")
				->rule("personal_number","numeric");
					
		if($validate->check())
		{
			$user = new Model_user($user_id);			
			$user->values($_POST); 
			$user->save(); 
         
			$this->redirect('users');
		}
		else
		{
			echo "Type correct all fields.";
		}	
		
    }	

} 
