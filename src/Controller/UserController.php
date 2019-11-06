<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    /**
     * @Route("/user", name="user")
     */
    public function index()
    {

        $user = new User('Mahmut', 'mahmut@test.org', 'password');

       //$user->addUser(new User('Mahmut', 'mahmut@test.org', 'password'));

       $this->getDoctrine()->getManager()->persist($user);
       $this->getDoctrine()->getManager()->flush();


        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }


}
