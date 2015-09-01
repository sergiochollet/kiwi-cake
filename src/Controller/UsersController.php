<?php
# /app/Controller/UsersController.php
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;

class UsersController extends AppController{
	
	public function login(){
		$info = 'hola mundo';
		$this->set('info', $info);
		//Render de view in /View/Users/login.ctp
		$this->render();
	}

	public function view(){

	}

}
?>