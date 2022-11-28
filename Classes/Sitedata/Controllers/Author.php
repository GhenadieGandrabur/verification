<?php

namespace Sitedata\Controllers;
use \Main\DatabaseTable;
use \Main\Authentication;

class Author
{

    private $userstable;
    private $authentication;

    public function __construct(DatabaseTable $userstable, Authentication $authentication)
    {
        $this->userstable = $userstable;
        $this->authentication = $authentication;
       
    }

    public function list()
    {
        $result = $this->userstable->findAll();

        $users = [];
        foreach ($result as $user) {
            $users[] = [
                'id' => $user->id,
                'date' => $user->date,
                'name' => $user->name,
                'email' => $user->email,
                'priority' => $user->priority                
            ];
        }

        $title = 'Users';

        $totalUsers = $this->userstable->total();

        return [
                'template' => 'users.html.php',
                'title' => $title,
                'variables' => [
                'totalUsers' => $totalUsers,
                'users' => $users                    
                ]
            ];
    }

    /*public function home()
    {
        $title = 'Internet Joke Database';

        return ['template' => 'home.html.php', 'title' => $title];
    }*/

    public function delete()
    {

        $user = $this->authentication->getUser();

        $usersdata = $this->userstable->findById($_POST['id']);

        if ($usersdata['userId'] != $user['id']) {
            return;
        }

        $this->userstable->delete($_POST['id']);

        header('location: /users/list');
    }
    public function saveEdit()
    {
        $user = $this->authentication->getUser();

        if (isset($_GET['id'])) {
            $usersdata = $this->userstable->findById($_GET['id']);

            if ($usersdata['userId'] != $user['id']) {
                return;
            }
        }

        $usersdata = $_POST['users'];        
        $usersdata['userId'] = $user['id'];
        $usersdata['name'] = $user['name'];
        $usersdata['priority'] = $user['priority'];

        $this->userstable->save($usersdata);

        header('location: /users/list');
    }

    public function edit()
    {
        $user = $this->authentication->getUser();

        if (isset($_GET['id'])) {
            $usersdata = $this->userstable->findById($_GET['id']);
        }

        $title = 'Edit joke';

        return [
            'template' => 'edituser.html.php',
            'title' => $title,
            'variables' => [
                'usersdata' => $usersdata ?? null,
                'userId' => $user->id ?? null
            ]
        ];
    }
    
}
