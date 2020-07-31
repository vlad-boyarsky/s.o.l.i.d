<?php

class User
{
    public function login()
    {

    }
}

class Client extends User
{

}

$user = new User();
$client = new Client();

function result(User $user){
    return $user->login();
}

result($user); // $user = $client