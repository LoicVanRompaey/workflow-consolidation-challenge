<?php


namespace App\Entity;


/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 * @ORM\Table(name="user")
 */

class Agent extends User
{

    public function __construct(string $name, string $email, string $password)
    {
        parent::__construct($name, $email, $password);
        $this->role= 'Agent';
    }

}