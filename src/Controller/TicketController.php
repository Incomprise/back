<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Ticket;
use Doctrine\ORM\EntityManagerInterface;

class TicketController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager){
        $this->entityManager = $entityManager;
    }


    /**
     * @Route("/ticket", name="ticket")
     */
    public function index(): Response
    {

        $ticket = $this->entityManager->getRepository(Ticket::class)->findAll();

        return $this->render('ticket/index.html.twig', [
            'ticket' => $ticket
        ]);
    }

}
