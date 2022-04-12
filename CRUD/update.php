<?php

require_once __DIR__.'/../vendor/autoload.php';

use Source\Models\User;

$user = (new User())->findById(1);
$user->first_name = 'Adonilton';
$user->last_name = 'Rosa';
$user->save();

var_dump($user);

?>