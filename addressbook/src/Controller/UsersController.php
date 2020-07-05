<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Core\Configure;
use Cake\Event\Event;
use Cake\Utility\Hash;

class UsersController extends AppController
{
    public $paginate = [
        'limit' => 10,
        'order' => [
            'Users.id' => 'desc',
        ],
    ];

    public function beforeFilter(Event $event)
    {
        $sexOptions = Hash::combine(Configure::read('Users.sex'), '{n}.id', '{n}.name');
        $this->set(compact('sexOptions'));
        parent::beforeFilter($event);
    }

    public function index()
    {
        $this->loadComponent('Paginator');
        $users = $this->paginate($this->Users);
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

    public function delete($id = 0)
    {
        $this->request->allowMethod(['post', 'delete']);

        $user = $this->Users->findById($id)->firstOrFail();
        if ($this->Users->delete($user)) {
            $this->Flash->success('Deleted');
            return $this->redirect(['action' => 'index']);
        }
    }
}
