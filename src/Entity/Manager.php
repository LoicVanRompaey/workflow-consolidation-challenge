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
        parent::__construct($this->setName($Name), $this->setEmail($Email), $this->setPassword($password));
        // neemt de construct van de parent class over en gebruikt die voor zijn eigen constructor
        $this->Role = 'Manager';
    }
}