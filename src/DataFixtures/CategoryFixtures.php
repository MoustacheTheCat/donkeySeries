<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
{
    const CATEGORIES_HORREUR = 'horreur';
    const CATEGORIES_COMEDIE = 'comedie';
    const CATEGORIES_DRAME = 'drame';
    const CATEGORIES_ACTION = 'action';

    public function load(ObjectManager $manager): void
    {
        $horreur = new Category();
        $horreur->setName('horreur');
        $manager->persist($horreur);
        $this->addReference(self::CATEGORIES_HORREUR, $horreur);

        $comedie = new Category();
        $comedie->setName('comedy');
        $manager->persist($comedie);
        $this->addReference(self::CATEGORIES_COMEDIE, $comedie);

        $drame = new Category();
        $drame->setName('drama');
        $manager->persist($drame);
        $this->addReference(self::CATEGORIES_DRAME, $drame);

        $action = new Category();
        $action->setName('action');
        $manager->persist($action);
        $this->addReference(self::CATEGORIES_ACTION, $action);
        

        $manager->flush();
    }
}
