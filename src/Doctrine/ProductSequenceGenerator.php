<?php

namespace App\Doctrine;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Id\AbstractIdGenerator;

class ProductSequenceGenerator extends AbstractIdGenerator
{
    private static int $nextId = 3000;

    public function generateId(EntityManagerInterface $em, ?object $entity): int
    {
        return self::$nextId++;
    }
}