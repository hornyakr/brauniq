<?php

namespace App\Twig\Components\Product;

use App\Repository\ProductRepository;
use Symfony\UX\LiveComponent\Attribute\AsLiveComponent;
use Symfony\UX\LiveComponent\Attribute\LiveProp;
use Symfony\UX\LiveComponent\DefaultActionTrait;

#[AsLiveComponent(template: 'components/Product/Search.html.twig')]
final class Search
{
    use DefaultActionTrait;

    #[LiveProp(writable: true)]
    public string $orderBy = '';

    public function __construct(private readonly ProductRepository $productRepository)
    {
    }

    public function getProducts(): array
    {
        return $this->productRepository->findBy([],$this->orderBy ? [ $this->orderBy => 'ASC'] : []);
    }
}
