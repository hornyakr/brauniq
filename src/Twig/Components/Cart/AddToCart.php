<?php

namespace App\Twig\Components\Cart;

use App\Controller\BaseController;
use App\Entity\Product;
use App\Entity\ProductInCart;
use App\Service\CartService;
use Symfony\UX\LiveComponent\Attribute\AsLiveComponent;
use Symfony\UX\LiveComponent\Attribute\LiveAction;
use Symfony\UX\LiveComponent\Attribute\LiveProp;
use Symfony\UX\LiveComponent\DefaultActionTrait;

#[AsLiveComponent(template: 'components/Cart/AddToCart.html.twig')]
final class AddToCart extends BaseController
{
    use DefaultActionTrait;

    #[LiveProp(writable: true)]
    public int $amount = 1;

    #[LiveProp(writable: false)]
    public ?Product $product;

    #[LiveAction]
    public function addToCart(CartService $cartService): void
    {
        $productInCart = new ProductInCart($this->product, $this->amount);

        $cartService->addToCart($productInCart, $this->cart);
    }
}
