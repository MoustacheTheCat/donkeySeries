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
    const CATEGORIES_FANTASTIQUE = 'fantastique';
    const CATEGORIES_SCIENCE_FICTION = 'science-fiction';
    const CATEGORIES_THRILLER = 'thriller';
    const CATEGORIES_POLICIER = 'policier';
    const CATEGORIES_ANIMATION = 'animation';
    const CATEGORIES_AVENTURE = 'aventure';
    const CATEGORIES_FANTASY = 'fantasy';

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

        $fantastique = new Category();
        $fantastique->setName('fantastique');
        $manager->persist($fantastique);
        $this->addReference(self::CATEGORIES_FANTASTIQUE, $fantastique);

        $scienceFiction = new Category();
        $scienceFiction->setName('science-fiction');
        $manager->persist($scienceFiction);
        $this->addReference(self::CATEGORIES_SCIENCE_FICTION, $scienceFiction);

        $thriller = new Category();
        $thriller->setName('thriller');
        $manager->persist($thriller);
        $this->addReference(self::CATEGORIES_THRILLER, $thriller);

        $policier = new Category();
        $policier->setName('policier');
        $manager->persist($policier);
        $this->addReference(self::CATEGORIES_POLICIER, $policier);

        $animation = new Category();
        $animation->setName('animation');
        $manager->persist($animation);
        $this->addReference(self::CATEGORIES_ANIMATION, $animation);

        $aventure = new Category();
        $aventure->setName('aventure');
        $manager->persist($aventure);
        $this->addReference(self::CATEGORIES_AVENTURE, $aventure);

        $fantasy = new Category();
        $fantasy->setName('fantasy');
        $manager->persist($fantasy);
        $this->addReference(self::CATEGORIES_FANTASY, $fantasy);

        $manager->flush();
    }
}
