<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CartController extends BaseController
{
    #[Route('/cart', name: 'app_cart_show', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('cart/show.html.twig');
    }
}