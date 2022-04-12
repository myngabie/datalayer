<?php

require_once __DIR__.'/../vendor/autoload.php';
use Source\Models\User;
use Source\Models\Address;

$user = new User();

// Criando um novo usuário
$user->first_name = 'Roberto';
$user->last_name = 'Cruz';
$user->genre = 'M';
$user->save();

// Criando um novo usuário
$user->first_name = 'Savalo';
$user->last_name = 'Horse';
$user->genre = 'M';
$user->save();

// Passando o endereço desse usuário
$addr = new Address();
$addr->add($user, "Rua 11 de Agosto", "1500");
$addr->save();

$addr = new Address();
$addr->add($user, "Manuel de Lara", "1500");
$addr->save();


var_dump($user);
var_dump($addr);

?>