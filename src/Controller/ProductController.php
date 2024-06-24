<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends BaseController
{
    #[Route('/products', name: 'app_product_index', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('product/index.html.twig');
    }
}