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

    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());

            if ($this->Users->save($user)) {
                $this->Flash->success('Saved');
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error('Failed');
        }
        $this->set(compact('user'));    
    }

    public function edit($id = 0)
    {
        $user = $this->Users->findById($id)->firstOrFail();
        if ($this->request->is(['post', 'put'])) {
            $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success('Updated');
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error('Failed');
        }
        $this->set(compact('user'));    
    }
}
