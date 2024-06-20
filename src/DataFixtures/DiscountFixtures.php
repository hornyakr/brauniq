<?php

namespace App\DataFixtures;

use App\Config\DiscountType;
use App\Config\Manufacturer;
use App\Entity\Discount;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class DiscountFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
         $discount = new Discount($this->getReference("product_3004"),null, 1000,null,"termék, 1000 kedvezmény a termék árából",DiscountType::Amount);
         $manager->persist($discount);

        $discount = new Discount($this->getReference("product_3002"),null, null,0.15,"15%-os kedvezmény a termék árából",DiscountType::Percent);
        $manager->persist($discount);

        $discount = new Discount(null,Manufacturer::ASUS, null,0.05,"5%-os kedvezmény",DiscountType::Percent);
        $manager->persist($discount);

        $discount = new Discount(null,Manufacturer::Logitech, null,null,"2+1 kedvezmény (a csomagban található legolcsóbb termék ingyen lesz megvásárolható)",DiscountType::TwoPlusOne);
        $manager->persist($discount);

        $manager->flush();
    }

    public function getDependencies(): array
    {
        return [
            ProductFixtures::class
        ];
    }
}
