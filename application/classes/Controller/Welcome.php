<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {

	public function action_index()
	{
		if(!Auth::instance()->get_user())
			$this->redirect('Welcome/auth');
		$this->response->body(View::factory('index'));
	}





	public function action_com()
	{
		if(!Auth::instance()->get_user())
			$this->redirect('Welcome/auth');
		$t = new Model_Community();
		$v = View::factory('community');
		$v->communities =  json_decode($t->getCommunities());
		$this->response->body($v);
	}

	public function action_c()
	{

		$t = new Model_Invoice();
		$this->response->body($t->create());
	}

	public function action_bilan()
	{
		if(!Auth::instance()->get_user())
			$this->redirect('Welcome/auth');
		$t = new Model_CommunityInvoice();
		$this->response->body($t->getBilan());
	}

	public function action_test()
	{
		if(!Auth::instance()->get_user())
			$this->redirect('Welcome/auth');
		$t = new Model_Invoice();
		$this->response->body($t->getInvoicesOrderByCategory());
	}

	public function action_test2()
	{
		if(!Auth::instance()->get_user())
			$this->redirect('Welcome/auth');
		$t = new Model_Invoice();
		$this->response->body($t->getInvoicesOrderByDate());
	}

	public function action_test3()
	{
		if(!Auth::instance()->get_user())
			$this->redirect('Welcome/auth');
		$t = new Model_Invoice();
		$this->response->body($t->getInvoices());
	}


	public function action_test4()
	{
		if(!Auth::instance()->get_user())
			$this->redirect('Welcome/auth');
		$t = new Model_CommunityInvoice();
		$this->response->body($t->getCommunityInvoices());
	}

	public function action_test5()
	{
		if(!Auth::instance()->get_user())
			$this->redirect('Welcome/auth');
		$t = new Model_CommunityInvoice();
		$this->response->body($t->getCommunityInvoicesOrderByDate());
	}

	public function action_test6()
	{
		if(!Auth::instance()->get_user())
			$this->redirect('Welcome/auth');
		$t = new Model_CommunityInvoice();
		$this->response->body($t->getCommunityInvoicesOrderByCategory());
	}

	public function action_test7()
	{
		if(!Auth::instance()->get_user())
			$this->redirect('Welcome/auth');
		$t = new Model_CommunityInvoice();
		$this->response->body($t->getCommunityInvoicesOrderByMembers());
	}


	public function action_getCommunityMembers()
	{
		if(!Auth::instance()->get_user())
			$this->redirect('Welcome/auth');
		$t = new Model_Community();
		$this->response->body($t->getMembers());
	}


	public function action_category()
	{
		if(!Auth::instance()->get_user())
			$this->redirect('Welcome/auth');
		$v = View::factory('createCategory');
		$category = new Model_Category();
		if(!is_null(Request::current()->post('label')) && Request::current()->post('label')!='')
		{
			$category->create();
			$v->okMessage = "Communauté ajoutée !";
		}

		
		$this->response->body($v);
	}

	public function action_community()
	{
		if(!Auth::instance()->get_user())
			$this->redirect('Welcome/auth');
		$v = View::factory('createCommunity');
		$community = new Model_Community();
		if(!is_null(Request::current()->post('label')) && Request::current()->post('label')!='')
		{
			$community->create();
			$v->okMessage = "Communauté ajoutée !";
		}

		$t = new Model_Userc();
		$c = new Model_Community();
		$v->users = $t->getUsers();
		if(!is_null(Request::current()->post('communityId')))
			$v->members = $c->getMembers();
		else
			$v->members = '[]';
		$this->response->body($v);
	}



	public function action_invoice()
	{
		if(!Auth::instance()->get_user())
			$this->redirect('Welcome/auth');
		$v = View::factory('createInvoice');
		$invoice = new Model_Invoice();
		if(!is_null(Request::current()->post('date')) )
		{
			$invoice->create();
			$v->okMessage = "Facture ajoutée !";
		}

		$o = new Model_Category();
		$c = new Model_Community();
		$v->user = Auth::instance()->get_user();
		$v->categories = json_decode($o->getCategories());
		$v->communities = json_decode($c->getCommunities());
		$this->response->body($v);
	}

	public function action_createAccount()
	{
		$message = null;
		$err = false;
		if(!is_null(Request::current()->post('username')) && !is_null(Request::current()->post('password')) && !is_null(Request::current()->post('confirmPassword')) && !is_null(Request::current()->post('email')))
		{
			$err = true;
			if(Request::current()->post('password') == Request::current()->post('confirmPassword'))
			{
			try{
				$user = ORM::factory('user');
				$user->username = Request::current()->post('username');
				$user->email = Request::current()->post('email');
				$user->password = Request::current()->post('password');
				$user->save();
				$user->add('roles', ORM::factory('role', array('name' => 'login')));
				if(Auth::instance()->login(Request::current()->post('username'), Request::current()->post('password'), true))
					$this->redirect('');
			
			} catch (ORM_Validation_Exception $e) {
			//$errors = $e->errors('models');
			$message = $e->errors('models');
			print_r($e->errors('models')) ;
			}
			}
			else
			{
				$message = "Les deux mots de passes ne correspondent pas.";
			}
				
		}
		
		$view = View::factory('createAccount');
		$view->error = $err;
		$view->message = $message;
		$this->response->body($view);		
		
		
	}

	public function action_logout()
	{
		Auth::instance()->logout();
		$this->redirect('Welcome/auth');
	}

	public function action_auth()
	{

		if(Auth::instance()->get_user())
			$this->redirect('');

		$user = false;
		$loginAttempt = false;
		if(!is_null(Request::current()->post('username')) && !is_null(Request::current()->post('password')))
		{
			$loginAttempt = true;
			$user = Auth::instance()->login(Request::current()->post('username'), Request::current()->post('password'), true);
		}
			
	
		
		
		
			
			// If successful, redirect user
			if ($user) 
			{
				$this->redirect('');

			} 
			else 
			{
				$this->response->body(View::factory('auth')->set('error',$loginAttempt));
			}

		
	}

} // End Welcome
