<?php


namespace App\Controller;

class AccountsController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('RequestHandler');
    }

    public function index()
    {
        $accounts = $this->Accounts->find('all');
        $this->set([
            'accounts' => $accounts,
            '_serialize' => ['accounts']
        ]);
    }

    public function view($id)
    {
        $account = $this->Accounts->get($id);
        $this->set([
            'account' => $account,
            '_serialize' => ['account']
        ]);
    }

    public function add()
    {
        $this->request->allowMethod(['post', 'put']);
        $account = $this->Accounts->newEntity($this->request->getData());
        if ($this->Accounts->save($account)) {
            $message = 'Saved';
        } else {
            $message = 'Error';
        }
        $this->set([
            'message' => $message,
            'account' => $account,
            '_serialize' => ['message', 'account']
        ]);
    }

    public function edit($id)
    {
        $this->request->allowMethod(['patch', 'post', 'put']);
        $account = $this->Accounts->get($id);
        $account = $this->Accounts->patchEntity($account, $this->request->getData());
        if ($this->Accounts->save($account)) {
            $message = 'Saved';
        } else {
            $message = 'Error';
        }
        $this->set([
            'message' => $message,
            '_serialize' => ['message']
        ]);
    }

    public function delete($id)
    {
        $this->request->allowMethod(['delete']);
        $account = $this->Accounts->get($id);
        $message = 'Deleted';
        if (!$this->Accounts->delete($account)) {
            $message = 'Error';
        }
        $this->set([
            'message' => $message,
            '_serialize' => ['message']
        ]);
    }
}