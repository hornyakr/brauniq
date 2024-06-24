<?php

namespace App\Entity;

class ProductInCart
{
    private ?Product $product = null;

    private ?int $amount = null;

    /**
     * @param Product|null $product
     * @param int|null $amount
     */
    public function __construct(?Product $product, ?int $amount)
    {
        $this->product = $product;
        $this->amount = $amount;
    }

    public function getProduct(): ?Product
    {
        return $this->product;
    }

    public function setProduct(Product $product): static
    {
        $this->product = $product;

        return $this;
    }

    public function getAmount(): ?int
    {
        return $this->amount;
    }

    public function setAmount(int $amount): static
    {
        $this->amount = $amount;

        return $this;
    }
}
