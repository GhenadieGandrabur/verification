<?php

namespace Sitedata\Controllers;
use \Main\DatabaseTable;

class Users
{

    private $UsersTable;

    public function __construct(DatabaseTable $UsersTable)
    {
        $this->UsersTable = $UsersTable;
       
    }

    public function list()
    {
        $result = $this->UsersTable->findAll();

        $users = [];
        foreach ($result as $user) {
            $users[] = [
                'id' => $user['id'],
                'date' => $user['date'],
                'name' => $user['name'],
                'priority' => $user['priority']                
            ];
        }

        $title = 'Users';

        $totalUsers = $this->UsersTable->total();

        return [
                'template' => 'users.html.php',
                'title' => $title,
                'variables' => [
                'totalUsers' => $totalUsers,
                'users' => $users                    
                ]
            ];
    }

    public function home()
    {
        $title = 'Internet Joke Database';

        return ['template' => 'home.html.php', 'title' => $title];
    }

    public function delete()
    {

        $author = $this->authentication->getUser();

        $joke = $this->jokesTable->findById($_POST['id']);

        if ($joke['authorId'] != $author['id']) {
            return;
        }

        $this->jokesTable->delete($_POST['id']);

        header('location: /joke/list');
    }
    public function saveEdit()
    {
        $author = $this->authentication->getUser();

        if (isset($_GET['id'])) {
            $joke = $this->jokesTable->findById($_GET['id']);

            if ($joke['authorId'] != $author['id']) {
                return;
            }
        }

        $joke = $_POST['joke'];
        $joke['jokedate'] = new \DateTime();
        $joke['authorId'] = $author['id'];

        $this->jokesTable->save($joke);

        header('location: /joke/list');
    }

    public function edit()
    {
        $author = $this->authentication->getUser();

        if (isset($_GET['id'])) {
            $joke = $this->jokesTable->findById($_GET['id']);
        }

        $title = 'Edit joke';

        return [
            'template' => 'editjoke.html.php',
            'title' => $title,
            'variables' => [
                'joke' => $joke ?? null,
                'userId' => $author['id'] ?? null
            ]
        ];
    }
    
}
