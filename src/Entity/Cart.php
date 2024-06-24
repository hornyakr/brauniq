<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

class Cart
{
    /**
     * @var Collection<int, ProductInCart>
     */
    private Collection $products;

    public function __construct()
    {
        $this->products = new ArrayCollection();
    }

    /**
     * @return Collection<int, ProductInCart>
     */
    public function getProducts(): Collection
    {
        return $this->products;
    }

    public function addProduct(ProductInCart $product): static
    {
        if (!$this->products->contains($product)) {
            $this->products->add($product);
        }

        return $this;
    }

    public function removeProduct(ProductInCart $product): static
    {
        $this->products->removeElement($product);

        return $this;
    }
}
