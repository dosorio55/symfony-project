<?php

namespace App\Controller;

use App\Entity\Character;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Mapping\Id;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController 

{
    #[Route("/insert/character")]
    public function insertCharapter(EntityManagerInterface $doctrine) {

        $character1 = new Character();
        $character1->setName("Lawyer Morty");
        $character1->setImage("https://rickandmortyapi.com/api/character/avatar/200.jpeg");
        $character1->setStatus("unknown");

        $doctrine->persist($character1);

        $doctrine->flush();

        return new Response('insertados correctamente');

    }

}
