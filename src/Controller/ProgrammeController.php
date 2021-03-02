<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Programme;
use Doctrine\ORM\EntityManagerInterface;
use App\Classe\Search;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Form\SearchType;

class ProgrammeController extends AbstractController
{
    private $entityManager;
    
    public function __construct(EntityManagerInterface $entityManager){
        $this->entityManager = $entityManager;
    }
    /**
     * @Route("/programme", name="programme")
     */
    public function index()
    {

        $programme = $this->entityManager->getRepository(Programme::class)->findAll();


        
     

        return $this->render('programme/index.html.twig', [
            'programme' => $programme
        ]);
    }
}
