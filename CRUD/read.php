<?php

require_once __DIR__.'/../vendor/autoload.php';
use Source\Models\User;

$user = new User();
$list = $user->find()->fetch(true); // Select e fetchAll

foreach ($list as $userItem ) {
    var_dump($userItem->data());

    foreach($userItem->addresses as $address) {
        var_dump($address->data());
    }
}

?>