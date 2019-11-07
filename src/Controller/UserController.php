<?php

namespace App\Controller;

use App\Entity\Manager;
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
        $manager = new Manager('Loïc','loic.test@becode', 'password1');
      //TODO manager constructor is voor errors aan het zorgen, zie waar het verkeerd is gegaan.
       //$user->addUser(new User('Mahmut', 'mahmut@test.org', 'password'));

       $this->getDoctrine()->getManager()->persist($user);
      // $this->getDoctrine()->getManager()->persist($manager);
       $this->getDoctrine()->getManager()->flush();


        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }





}
