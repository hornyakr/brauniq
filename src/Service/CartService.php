<?php

namespace App\Service;

use App\Entity\Cart;
use App\Entity\ProductInCart;

class CartService
{
    /**
     * Adding product to cart.
     *
     * @param ProductInCart $product The product to add.
     * @param Cart $cart The cart of the user.
     * @return void
     */
    public function addToCart(ProductInCart $product, Cart $cart): void
    {
        $cart->addProduct($product);
    }
}