<?php

namespace App\Controller;

use App\Entity\Cart;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class BaseController extends AbstractController
{
    protected Cart $cart;
    protected SessionInterface $session;

    public function __construct(RequestStack $requestStack)
    {
        $this->session = $requestStack->getSession();

        if (!$this->session->get('cart')) {
            $this->cart = new Cart();

            $this->session->set('cart', $this->cart);
        } else {
            $this->cart = $this->session->get('cart');
        }
    }
}