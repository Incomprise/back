<?php

namespace App\Controller;

use App\Form\ModifierMDPType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class PasswordController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager){
        $this->entityManager = $entityManager;
    }
    /**
     * @Route("/compte_modifier", name="compte_modifier")
     */
    public function index(Request $request, UserPasswordEncoderInterface $encoder)
    {

        $user = $this->getUser();
        $form = $this->createForm(ModifierMDPType::class, $user);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $old_password = $form->get('old_password')->getData();
         
            if($encoder->isPasswordValid($user, $old_password)){
                $new_password = $form->get('new_password')->getData();
                $password = $encoder->encodePassword($user, $new_password);

                $user->setPassword($password);
                $this->entityManager->persist($user);
                $this->entityManager->flush();
            }
        }

        return $this->render('compte/password.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
