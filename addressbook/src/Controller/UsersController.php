<?php
namespace App\Controller;

use App\Controller\AppController;

class UsersController extends AppController
{
    public function index()
    {
        $this->loadComponent('Paginator');
        $users = $this->Paginator->paginate($this->Users->find());
        $this->set(compact('users'));
    }

    public function view($id = null)
    {
        $user = $this->Users->findById($id)->firstOrFail();
        $this->set(compact('user'));    
    }
}
