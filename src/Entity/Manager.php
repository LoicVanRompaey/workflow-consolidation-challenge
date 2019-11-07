<?php

//TODO test functions wanneer alles is samengevoegd

namespace App\Entity;


use PhpParser\Node\Name;

class Manager extends User
{


    /**
     * Manager constructor.
     * @param $Name
     * @param $Email
     * @param $password
     */
    public function __construct($Name, $Email, $password)
    {
        parent::__construct($Name,$Email,$password);
        $this->Role = 'Manager';
    }




}