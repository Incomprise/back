<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Classe\Cart;
use App\Entity\Ticket;
use Doctrine\ORM\EntityManagerInterface;

class CartController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @Route("/panier", name="cart")
     */
    public function index(Cart $cart)
    {
        $cartComplete = [];

        foreach($cart->get() as $id => $quantity)
        {
            $cartComplete[] = [
                'ticket' => $this->entityManager->getRepository(Ticket::class)->findOneById($id),
                'quantity' => $quantity
            ];
        }

        dd($cartComplete);

        return $this->render('cart/index.html.twig', [
            'cart' => $cartComplete
        ]);
    }



    /**
     * @Route("/cart/add/{id}", name="add_cart")
     */
    public function add(Cart $cart, $id)
    {
        $cart->add($id);

        return $this->redirectToRoute('cart');
    }


    /**
     * @Route("/cartremove", name="remove_cart")
     */
    public function remove(Cart $cart)
    {
        $cart->remove();

        return $this->redirectToRoute('accueil');
    }
}
