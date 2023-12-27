<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Cocur\Slugify\Slugify;

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
        $slugify = new Slugify();

        $horreur = new Category();
        $horreur->setName('Horreur');
        $horreur->setSlug($slugify->slugify($horreur->getName()));
        $manager->persist($horreur);
        $this->addReference(self::CATEGORIES_HORREUR, $horreur);

        $comedie = new Category();
        $comedie->setName('Comedies');
        $comedie->setSlug($slugify->slugify($comedie->getName()));
        $manager->persist($comedie);
        $this->addReference(self::CATEGORIES_COMEDIE, $comedie);

        $drame = new Category();
        $drame->setName('Drame');
        $drame->setSlug($slugify->slugify($drame->getName()));
        $manager->persist($drame);
        $this->addReference(self::CATEGORIES_DRAME, $drame);

        $action = new Category();
        $action->setName('Action');
        $action->setSlug($slugify->slugify($action->getName()));
        $manager->persist($action);
        $this->addReference(self::CATEGORIES_ACTION, $action);

        $fantastique = new Category();
        $fantastique->setName('fantastique');
        $fantastique->setSlug($slugify->slugify($fantastique->getName()));
        $manager->persist($fantastique);
        $this->addReference(self::CATEGORIES_FANTASTIQUE, $fantastique);

        $scienceFiction = new Category();
        $scienceFiction->setName('Science-Fiction');
        $scienceFiction->setSlug($slugify->slugify($scienceFiction->getName()));
        $manager->persist($scienceFiction);
        $this->addReference(self::CATEGORIES_SCIENCE_FICTION, $scienceFiction);

        $thriller = new Category();
        $thriller->setName('Thriller');
        $thriller->setSlug($slugify->slugify($thriller->getName()));
        $manager->persist($thriller);
        $this->addReference(self::CATEGORIES_THRILLER, $thriller);

        $policier = new Category();
        $policier->setName('policier');
        $policier->setSlug($slugify->slugify($policier->getName()));
        $manager->persist($policier);
        $this->addReference(self::CATEGORIES_POLICIER, $policier);

        $animation = new Category();
        $animation->setName('Animation');
        $animation->setSlug($slugify->slugify($animation->getName()));
        $manager->persist($animation);
        $this->addReference(self::CATEGORIES_ANIMATION, $animation);

        $aventure = new Category();
        $aventure->setName('Aventure');
        $aventure->setSlug($slugify->slugify($aventure->getName()));
        $manager->persist($aventure);
        $this->addReference(self::CATEGORIES_AVENTURE, $aventure);

        $fantasy = new Category();
        $fantasy->setName('Fantasy');
        $fantasy->setSlug($slugify->slugify($fantasy->getName()));
        $manager->persist($fantasy);
        $this->addReference(self::CATEGORIES_FANTASY, $fantasy);

        $manager->flush();
    }
}
