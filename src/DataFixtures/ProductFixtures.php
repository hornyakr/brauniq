<?php

namespace App\DataFixtures;

use App\Config\Manufacturer;
use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ProductFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $product = new Product(
            "ASUS ROG STRIX Z690-A GAMING WIFI D4",
            136590,
            Manufacturer::ASUS
        );
        $manager->persist($product);

        $product = new Product(
            "LOGITECH HD Pro Webcam C920",
            28990,
            Manufacturer::Logitech
        );
        $manager->persist($product);
        $this->addReference('product_3002', $product);

        $product = new Product(
            "WD Blue 1TB 3.5” 7200rpm 64MB SATA WD10EZEX",
            12990,
            Manufacturer::WesternDigital
        );
        $manager->persist($product);

        $product = new Product(
            "GeForce GTX 1660 Ti 6GB GDDR6 TUF Gaming Evo PCIE",
            208690,
            Manufacturer::ASUS
        );
        $manager->persist($product);
        $this->addReference('product_3004', $product);

        $product = new Product(
            "WD Red Plus 2TB 3.5” 5400rpm 128MB SATA WD20EFZX",
            25190,
            Manufacturer::WesternDigital
        );
        $manager->persist($product);

        $product = new Product(
            "Kingston Fury 32GB Beast DDR4 3200MHz CL16 KF432C16BB/32",
            48990,
            Manufacturer::Kingston
        );
        $manager->persist($product);

        $product = new Product(
            "LOGITECH K120 Magyar fekete OEM",
            5790,
            Manufacturer::Logitech
        );
        $manager->persist($product);

        $product = new Product(
            "LOGITECH B100 fekete OEM",
            3590,
            Manufacturer::Logitech
        );
        $manager->persist($product);

        $manager->flush();
    }
}
