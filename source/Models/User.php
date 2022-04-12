<?php

namespace Source\Models;

use CoffeeCode\DataLayer\Datalayer;

class User extends DataLayer{
    public function __construct(){
        /* construct(
            tabela, 
            campos não nulos, 
            chave primaria quando não AI, 
            true(possui timestamp na tabela) ou false (não possui)
        )*/
        parent::__construct("users", ["first_name", "last_name"]);
    }

    // inserindo o id do user na tabela addresses como chave estrangeira
    public function addresses(){
        /* find/select(
            WHERE,
            BIND_VALUE
        )->fetch()
         */
        return (new Address())->find("user_id = :uid", ":uid={$this->id}")->fetch(true);
        
    }
}

?>