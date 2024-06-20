<?php

namespace App\Entity;

use App\Config\DiscountType;
use App\Config\Manufacturer;
use App\Repository\DiscountRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\Range;

#[ORM\Entity(repositoryClass: DiscountRepository::class)]
class Discount
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?Product $product = null;

    #[ORM\Column(nullable: true, enumType: Manufacturer::class)]
    private ?Manufacturer $manufacturer = null;

    #[ORM\Column(nullable: true)]
    private ?int $discountAmount = null;

    #[ORM\Column(nullable: true)]
    #[Range(min: 0, max: 1)]
    private ?float $discountPercent = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(enumType: DiscountType::class)]
    private ?DiscountType $type = null;

    /**
     * @param Product|null $product
     * @param Manufacturer|null $manufacturer
     * @param int|null $discountAmount
     * @param float|null $discountPercent
     * @param string $name
     * @param DiscountType $type
     */
    public function __construct(?Product $product, ?Manufacturer $manufacturer, ?int $discountAmount, ?float $discountPercent, string $name, DiscountType $type)
    {
        $this->product = $product;
        $this->manufacturer = $manufacturer;
        $this->discountAmount = $discountAmount;
        $this->discountPercent = $discountPercent;
        $this->name = $name;
        $this->type = $type;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProduct(): ?Product
    {
        return $this->product;
    }

    public function setProduct(?Product $product): static
    {
        $this->product = $product;

        return $this;
    }

    public function getManufacturer(): ?Manufacturer
    {
        return $this->manufacturer;
    }

    public function setManufacturer(?Manufacturer $manufacturer): static
    {
        $this->manufacturer = $manufacturer;

        return $this;
    }

    public function getDiscountAmount(): ?int
    {
        return $this->discountAmount;
    }

    public function setDiscountAmount(?int $discountAmount): static
    {
        $this->discountAmount = $discountAmount;

        return $this;
    }

    public function getDiscountPercent(): ?float
    {
        return $this->discountPercent;
    }

    public function setDiscountPercent(?float $discountPercent): static
    {
        $this->discountPercent = $discountPercent;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getType(): ?DiscountType
    {
        return $this->type;
    }

    public function setType(DiscountType $type): static
    {
        $this->type = $type;

        return $this;
    }
}
