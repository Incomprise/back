<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Infos;
use Doctrine\ORM\EntityManagerInterface;

class InformationsController extends AbstractController
{
    private $entityManager;
    
    public function __construct(EntityManagerInterface $entityManager){
        $this->entityManager = $entityManager;
    }
    /**
     * @Route("/informations", name="informations")
     */
    public function index()
    {
        $infos = $this->entityManager->getRepository(Infos::class)->findAll();

        return $this->render('informations/index.html.twig', [
            'infos' => $infos
        ]);
    }
}
