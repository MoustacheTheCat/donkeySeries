<?php

namespace App\DataFixtures;
use App\Entity\Program;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class ProgramFixtures extends Fixture implements DependentFixtureInterface
{
    const PROGRAM_WALKING_DEAD = 'walkingDead';
    const PROGRAM_HAUNTING_HILL_HOUSE = 'hauntingHillHouse';
    const PROGRAM_AMERICAN_HORROR_STORY = 'americanHorrorStory';
    const PROGRAM_LOVE_DEATH_AND_ROBOTS = 'loveDeathAndRobots';
    const PROGRAM_PENNY_DREADFUL = 'pennyDreadful';
    const PROGRAM_FEAR_THE_WALKING_DEAD = 'fearTheWalkingDead';
    const PROGRAM_THE_BIG_BANG_THEORY = 'theBigBangTheory';

    public function load(ObjectManager $manager): void
    {
        $walkingDead = new Program();
        $walkingDead->setTitle('The Walking Dead');
        $walkingDead->setSummary('Le policier Rick Grimes se réveille après un long coma. Il découvre avec effarement que le monde, ravagé par une épidémie, est envahi par les morts-vivants.');
        $walkingDead->setPoster('https://m.media-amazon.com/images/M/MV5BZmFlMTA0MmUtNWVmOC00ZmE1LWFmMDYtZTJhYjJhNGVjYTU5XkEyXkFqcGdeQXVyMTAzMDM4MjM0._V1_.jpg');
        $walkingDead->setCategory($this->getReference(CategoryFixtures::CATEGORIES_HORREUR));
        $manager->persist($walkingDead);
        $this->addReference(self::PROGRAM_WALKING_DEAD, $walkingDead);

        $hauntingHillHouse = new Program();
        $hauntingHillHouse->setTitle('The Haunting Of Hill House');
        $hauntingHillHouse->setSummary('Plusieurs frères et sœurs qui, enfants, ont grandi dans la demeure qui allait devenir la maison hantée la plus célèbre des États-Unis, sont contraints de se réunir pour finalement affronter les fantômes de leur passé.');
        $hauntingHillHouse->setPoster('https://m.media-amazon.com/images/M/MV5BMTU4NzA4MDEwNF5BMl5BanBnXkFtZTgwMTQxODYzNjM@._V1_SY1000_CR0,0,674,1000_AL_.jpg');
        $hauntingHillHouse->setCategory($this->getReference(CategoryFixtures::CATEGORIES_HORREUR));
        $manager->persist($hauntingHillHouse);
        $this->addReference(self::PROGRAM_HAUNTING_HILL_HOUSE, $hauntingHillHouse);

        $americanHorrorStory = new Program();
        $americanHorrorStory->setTitle('American Horror Story');
        $americanHorrorStory->setSummary('A chaque saison, son histoire. American Horror Story nous embarque dans des récits à la fois poignants et cauchemardesques, mêlant la peur, le gore et le politiquement correct.');
        $americanHorrorStory->setPoster('https://m.media-amazon.com/images/M/MV5BODZlYzc2ODYtYmQyZS00ZTM4LTk4ZDQtMTMyZDdhMDgzZTU0XkEyXkFqcGdeQXVyMzQ2MDI5NjU@._V1_SY1000_CR0,0,666,1000_AL_.jpg');
        $americanHorrorStory->setCategory($this->getReference(CategoryFixtures::CATEGORIES_HORREUR));
        $manager->persist($americanHorrorStory);
        $this->addReference(self::PROGRAM_AMERICAN_HORROR_STORY, $americanHorrorStory);

        $loveDeathAndRobots = new Program();
        $loveDeathAndRobots->setTitle('Love Death And Robots');
        $loveDeathAndRobots->setSummary('Un yaourt susceptible, des soldats lycanthropes, des robots déchaînés, des monstres-poubelles, des chasseurs de primes cyborgs, des araignées extraterrestres et des démons assoiffés de sang : tout ce beau monde est réuni dans 18 courts métrages animés déconseillés aux âmes sensibles.');
        $loveDeathAndRobots->setPoster('https://m.media-amazon.com/images/M/MV5BMTc1MjIyNDI3Nl5BMl5BanBnXkFtZTgwMjQ1OTI0NzM@._V1_SY1000_CR0,0,674,1000_AL_.jpg');
        $loveDeathAndRobots->setCategory($this->getReference(CategoryFixtures::CATEGORIES_HORREUR));
        $manager->persist($loveDeathAndRobots);
        $this->addReference(self::PROGRAM_LOVE_DEATH_AND_ROBOTS, $loveDeathAndRobots);

        $pennyDreadful = new Program();
        $pennyDreadful->setTitle('Penny Dreadful');
        $pennyDreadful->setSummary('Dans le Londres ancien, Vanessa Ives, une jeune femme puissante aux pouvoirs hypnotiques, allie ses forces à celles d Ethan, un garçon rebelle et violent aux allures de cowboy, et de Sir Malcolm, un vieil homme riche aux ressources inépuisables.  Ensemble, ils combattent un ennemi inconnu, presque invisible, qui ne semble pas humain et qui massacre la population.');
        $pennyDreadful->setPoster('https://m.media-amazon.com/images/M/MV5BNmE5MDE0ZmMtY2I5Mi00Y2RjLWJlYjMtODkxODQ5OWY1ODdkXkEyXkFqcGdeQXVyNjU2NjA5NjM@._V1_SY1000_CR0,0,695,1000_AL_.jpg');
        $pennyDreadful->setCategory($this->getReference(CategoryFixtures::CATEGORIES_HORREUR));
        $manager->persist($pennyDreadful);
        $this->addReference(self::PROGRAM_PENNY_DREADFUL, $pennyDreadful);

        $fearTheWalkingDead = new Program();
        $fearTheWalkingDead->setTitle('Fear The Walking Dead');
        $fearTheWalkingDead->setSummary('La série se déroule au tout début de l épidémie relatée dans la série-mère The Walking Dead et se passe dans la ville de Los Angeles, et non à Atlanta. Madison est conseillère dans un lycée de Los Angeles. Depuis la mort de son mari, elle élève seule ses deux enfants : Alicia, excellente élève qui découvre les premiers émois amoureux, et son grand frère Nick qui a quitté la fac et a sombré dans la drogue.');
        $fearTheWalkingDead->setPoster('https://m.media-amazon.com/images/M/MV5BYWNmY2Y1NTgtYTExMS00NGUxLWIxYWQtMjU4MjNkZjZlZjQ3XkEyXkFqcGdeQXVyMzQ2MDI5NjU@._V1_SY1000_CR0,0,666,1000_AL_.jpg');
        $fearTheWalkingDead->setCategory($this->getReference(CategoryFixtures::CATEGORIES_HORREUR));
        $manager->persist($fearTheWalkingDead);
        $this->addReference(self::PROGRAM_FEAR_THE_WALKING_DEAD, $fearTheWalkingDead);
        
        $theBigBangTheory = new Program();
        $theBigBangTheory->setTitle('The Big Bang Theory');
        $theBigBangTheory->setSummary("Leonard Hofstadter et Sheldon Cooper vivent en colocation à Pasadena, ville de l'agglomération de Los Angeles. Ce sont tous deux des physiciens surdoués, « geeks » de surcroît. C'est d'ailleurs autour de cela qu'est axée la majeure partie comique de la série. Ils partagent quasiment tout leur temps libre avec leurs deux amis Howard Wolowitz et Rajesh Koothrappali pour jouer à des jeux vidéo comme Halo, organiser un marathon de la saga Star Wars, jouer à des jeux de société comme le Boggle klingon ou de rôles tel que Donjons et Dragons, voire discuter de théories scientifiques très complexes.Leur univers routinier est perturbé lorsqu'une jeune femme, Penny, s'installe dans l'appartement d'en face. Leonard a immédiatement des vues sur elle et va tout faire pour la séduire ainsi que l'intégrer au groupe et à son univers, auquel elle ne connaît rien.");
        $theBigBangTheory->setPoster('https://upload.wikimedia.org/wikipedia/fr/6/69/BigBangTheory_Logo.png');
        $theBigBangTheory->setCategory($this->getReference(CategoryFixtures::CATEGORIES_COMEDIE));
        $manager->persist($theBigBangTheory);
        $this->addReference(self::PROGRAM_THE_BIG_BANG_THEORY, $theBigBangTheory);

        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            CategoryFixtures::class,
        ];
    }

}
