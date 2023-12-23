<?php

namespace App\DataFixtures;

use App\Entity\Season;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class SeasonFixtures extends Fixture implements DependentFixtureInterface
{

    const SEASON_1_WALKING_DEAD = 'season1WalkingDead';
    const SEASON_2_WALKING_DEAD = 'season2WalkingDead';
    const SEASON_1_HAUNTING_HILL_HOUSE = 'season1HauntingHillHouse';
    const SEASON_1_AMERICAN_HORROR_STORY = 'season1AmericanHorrorStory';
    const SEASON_1_LOVE_DEATH_AND_ROBOTS = 'season1LoveDeathAndRobots';
    const SEASON_1_PENNY_DREADFUL = 'season1PennyDreadful';
    const SEASON_1_FEAR_THE_WALKING_DEAD = 'season1FearTheWalkingDead';
    const SEASON_1_THE_BIG_BANG_THEORY = 'season1TheBigBangTheory';
    const SEASON_2_THE_BIG_BANG_THEORY = 'season2TheBigBangTheory';
    const SEASON_3_THE_BIG_BANG_THEORY = 'season3TheBigBangTheory';
    const SEASON_4_THE_BIG_BANG_THEORY = 'season4TheBigBangTheory';
    const SEASON_5_THE_BIG_BANG_THEORY = 'season5TheBigBangTheory';
    const SEASON_6_THE_BIG_BANG_THEORY = 'season6TheBigBangTheory';
    const SEASON_7_THE_BIG_BANG_THEORY = 'season7TheBigBangTheory';
    const SEASON_8_THE_BIG_BANG_THEORY = 'season8TheBigBangTheory';
    const SEASON_9_THE_BIG_BANG_THEORY = 'season9TheBigBangTheory';
    const SEASON_10_THE_BIG_BANG_THEORY = 'season10TheBigBangTheory';
    const SEASON_11_THE_BIG_BANG_THEORY = 'season11TheBigBangTheory';
    const SEASON_12_THE_BIG_BANG_THEORY = 'season12TheBigBangTheory';

    public function load(ObjectManager $manager): void
    {
        $season1WalkingDead = new Season();
        $season1WalkingDead->setNumber(1);
        $season1WalkingDead->setYear(2010);
        $season1WalkingDead->setDescription('Season 1');
        $season1WalkingDead->setProgram($this->getReference(ProgramFixtures::PROGRAM_WALKING_DEAD));
        $manager->persist($season1WalkingDead);
        $this->addReference(self::SEASON_1_WALKING_DEAD, $season1WalkingDead);

        $season2WalkingDead = new Season();
        $season2WalkingDead->setNumber(2);
        $season2WalkingDead->setYear(2011);
        $season2WalkingDead->setDescription('Season 2');
        $season2WalkingDead->setProgram($this->getReference(ProgramFixtures::PROGRAM_WALKING_DEAD));
        $manager->persist($season2WalkingDead);
        $this->addReference(self::SEASON_2_WALKING_DEAD, $season2WalkingDead);

        $season1HauntingHillHouse = new Season();
        $season1HauntingHillHouse->setNumber(1);
        $season1HauntingHillHouse->setYear(2018);
        $season1HauntingHillHouse->setDescription('Season 1');
        $season1HauntingHillHouse->setProgram($this->getReference(ProgramFixtures::PROGRAM_HAUNTING_HILL_HOUSE));
        $manager->persist($season1HauntingHillHouse);
        $this->addReference(self::SEASON_1_HAUNTING_HILL_HOUSE, $season1HauntingHillHouse);

        $season1AmericanHorrorStory = new Season();
        $season1AmericanHorrorStory->setNumber(1);
        $season1AmericanHorrorStory->setYear(2011);
        $season1AmericanHorrorStory->setDescription('Season 1');
        $season1AmericanHorrorStory->setProgram($this->getReference(ProgramFixtures::PROGRAM_AMERICAN_HORROR_STORY));
        $manager->persist($season1AmericanHorrorStory);
        $this->addReference(self::SEASON_1_AMERICAN_HORROR_STORY, $season1AmericanHorrorStory);

        $season1LoveDeathAndRobots = new Season();
        $season1LoveDeathAndRobots->setNumber(1);
        $season1LoveDeathAndRobots->setYear(2019);
        $season1LoveDeathAndRobots->setDescription('Season 1');
        $season1LoveDeathAndRobots->setProgram($this->getReference(ProgramFixtures::PROGRAM_LOVE_DEATH_AND_ROBOTS));
        $manager->persist($season1LoveDeathAndRobots);
        $this->addReference(self::SEASON_1_LOVE_DEATH_AND_ROBOTS, $season1LoveDeathAndRobots);

        $season1PennyDreadful = new Season();
        $season1PennyDreadful->setNumber(1);
        $season1PennyDreadful->setYear(2014);
        $season1PennyDreadful->setDescription('Season 1');
        $season1PennyDreadful->setProgram($this->getReference(ProgramFixtures::PROGRAM_PENNY_DREADFUL));
        $manager->persist($season1PennyDreadful);
        $this->addReference(self::SEASON_1_PENNY_DREADFUL, $season1PennyDreadful);

        $season1FearTheWalkingDead = new Season();
        $season1FearTheWalkingDead->setNumber(1);
        $season1FearTheWalkingDead->setYear(2015);
        $season1FearTheWalkingDead->setDescription('Season 1');
        $season1FearTheWalkingDead->setProgram($this->getReference(ProgramFixtures::PROGRAM_FEAR_THE_WALKING_DEAD));
        $manager->persist($season1FearTheWalkingDead);
        $this->addReference(self::SEASON_1_FEAR_THE_WALKING_DEAD, $season1FearTheWalkingDead);

        $season1TheBigBangTheory = new Season();
        $season1TheBigBangTheory->setNumber(1);
        $season1TheBigBangTheory->setYear(2007);
        $season1TheBigBangTheory->setDescription('Season 1');
        $season1TheBigBangTheory->setProgram($this->getReference(ProgramFixtures::PROGRAM_THE_BIG_BANG_THEORY));
        $manager->persist($season1TheBigBangTheory);
        $this->addReference(self::SEASON_1_THE_BIG_BANG_THEORY, $season1TheBigBangTheory);

        $season2TheBigBangTheory = new Season();
        $season2TheBigBangTheory->setNumber(2);
        $season2TheBigBangTheory->setYear(2008);
        $season2TheBigBangTheory->setDescription('Season 2');
        $season2TheBigBangTheory->setProgram($this->getReference(ProgramFixtures::PROGRAM_THE_BIG_BANG_THEORY));
        $manager->persist($season2TheBigBangTheory);
        $this->addReference(self::SEASON_2_THE_BIG_BANG_THEORY, $season2TheBigBangTheory);

        $season3TheBigBangTheory = new Season();
        $season3TheBigBangTheory->setNumber(3);
        $season3TheBigBangTheory->setYear(2009);
        $season3TheBigBangTheory->setDescription('Season 3');
        $season3TheBigBangTheory->setProgram($this->getReference(ProgramFixtures::PROGRAM_THE_BIG_BANG_THEORY));
        $manager->persist($season3TheBigBangTheory);
        $this->addReference(self::SEASON_3_THE_BIG_BANG_THEORY, $season3TheBigBangTheory);

        $season4TheBigBangTheory = new Season();
        $season4TheBigBangTheory->setNumber(4);
        $season4TheBigBangTheory->setYear(2010);
        $season4TheBigBangTheory->setDescription('Season 4');
        $season4TheBigBangTheory->setProgram($this->getReference(ProgramFixtures::PROGRAM_THE_BIG_BANG_THEORY));
        $manager->persist($season4TheBigBangTheory);
        $this->addReference(self::SEASON_4_THE_BIG_BANG_THEORY, $season4TheBigBangTheory);

        $season5TheBigBangTheory = new Season();
        $season5TheBigBangTheory->setNumber(5);
        $season5TheBigBangTheory->setYear(2011);
        $season5TheBigBangTheory->setDescription('Season 5');
        $season5TheBigBangTheory->setProgram($this->getReference(ProgramFixtures::PROGRAM_THE_BIG_BANG_THEORY));
        $manager->persist($season5TheBigBangTheory);
        $this->addReference(self::SEASON_5_THE_BIG_BANG_THEORY, $season5TheBigBangTheory);

        $season6TheBigBangTheory = new Season();
        $season6TheBigBangTheory->setNumber(6);
        $season6TheBigBangTheory->setYear(2012);
        $season6TheBigBangTheory->setDescription('Season 6');
        $season6TheBigBangTheory->setProgram($this->getReference(ProgramFixtures::PROGRAM_THE_BIG_BANG_THEORY));
        $manager->persist($season6TheBigBangTheory);
        $this->addReference(self::SEASON_6_THE_BIG_BANG_THEORY, $season6TheBigBangTheory);

        $season7TheBigBangTheory = new Season();
        $season7TheBigBangTheory->setNumber(7);
        $season7TheBigBangTheory->setYear(2013);
        $season7TheBigBangTheory->setDescription('Season 7');
        $season7TheBigBangTheory->setProgram($this->getReference(ProgramFixtures::PROGRAM_THE_BIG_BANG_THEORY));
        $manager->persist($season7TheBigBangTheory);
        $this->addReference(self::SEASON_7_THE_BIG_BANG_THEORY, $season7TheBigBangTheory);

        $season8TheBigBangTheory = new Season();
        $season8TheBigBangTheory->setNumber(8);
        $season8TheBigBangTheory->setYear(2014);
        $season8TheBigBangTheory->setDescription('Season 8');
        $season8TheBigBangTheory->setProgram($this->getReference(ProgramFixtures::PROGRAM_THE_BIG_BANG_THEORY));
        $manager->persist($season8TheBigBangTheory);
        $this->addReference(self::SEASON_8_THE_BIG_BANG_THEORY, $season8TheBigBangTheory);

        $season9TheBigBangTheory = new Season();
        $season9TheBigBangTheory->setNumber(9);
        $season9TheBigBangTheory->setYear(2015);
        $season9TheBigBangTheory->setDescription('Season 9');
        $season9TheBigBangTheory->setProgram($this->getReference(ProgramFixtures::PROGRAM_THE_BIG_BANG_THEORY));
        $manager->persist($season9TheBigBangTheory);
        $this->addReference(self::SEASON_9_THE_BIG_BANG_THEORY, $season9TheBigBangTheory);

        $season10TheBigBangTheory = new Season();
        $season10TheBigBangTheory->setNumber(10);
        $season10TheBigBangTheory->setYear(2016);
        $season10TheBigBangTheory->setDescription('Season 10');
        $season10TheBigBangTheory->setProgram($this->getReference(ProgramFixtures::PROGRAM_THE_BIG_BANG_THEORY));
        $manager->persist($season10TheBigBangTheory);
        $this->addReference(self::SEASON_10_THE_BIG_BANG_THEORY, $season10TheBigBangTheory);

        $season11TheBigBangTheory = new Season();
        $season11TheBigBangTheory->setNumber(11);
        $season11TheBigBangTheory->setYear(2017);
        $season11TheBigBangTheory->setDescription('Season 11');
        $season11TheBigBangTheory->setProgram($this->getReference(ProgramFixtures::PROGRAM_THE_BIG_BANG_THEORY));
        $manager->persist($season11TheBigBangTheory);
        $this->addReference(self::SEASON_11_THE_BIG_BANG_THEORY, $season11TheBigBangTheory);

        $season12TheBigBangTheory = new Season();
        $season12TheBigBangTheory->setNumber(12);
        $season12TheBigBangTheory->setYear(2018);
        $season12TheBigBangTheory->setDescription('Season 12');
        $season12TheBigBangTheory->setProgram($this->getReference(ProgramFixtures::PROGRAM_THE_BIG_BANG_THEORY));
        $manager->persist($season12TheBigBangTheory);
        $this->addReference(self::SEASON_12_THE_BIG_BANG_THEORY, $season12TheBigBangTheory);

        $manager->flush();
    }
        public function getDependencies(): array
        {
            return [
                ProgramFixtures::class,
            ];
        }
}
