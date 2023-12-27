<?php

namespace App\DataFixtures;

use App\Entity\Season;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Cocur\Slugify\Slugify;

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
    const SEASON_1_BREAKING_BAD = 'season1BreakingBad';
    const SEASON_2_BREAKING_BAD = 'season2BreakingBad';
    const SEASON_1_THE_WIRE = 'season1SurEcoute';
    const SEASON_2_THE_WIRE = 'season2SurEcoute';
    const SEASON_1_TWIN_PEAKS = 'season1TwinPeaks';
    const SEASON_2_TWIN_PEAKS = 'season2TwinPeaks';
    const SEASON_1_KAAMELOTT = 'season1Kaamelott';
    const SEASON_2_KAAMELOTT = 'season2Kaamelott';
    const SEASON_1_MALCOLM = 'season1Malcolm';
    const SEASON_2_MALCOLM = 'season2Malcolm';
    const SEASON_1_SOUTH_PARK = 'season1SouthPark';
    const SEASON_2_SOUTH_PARK = 'season2SouthPark';
    const SEASON_1_PEAKY_BLINDERS = 'season1PeakyBlinders';
    const SEASON_2_PEAKY_BLINDERS = 'season2PeakyBlinders';
    const SEASON_1_SCRUBS = 'season1Scrubs';
    const SEASON_2_SCRUBS = 'season2Scrubs';
    const SEASON_1_MAD_MEN = 'season1MadMen';
    const SEASON_2_MAD_MEN = 'season2MadMen';

    public function load(ObjectManager $manager): void
    {
        $slugify = new Slugify();

        $season1WalkingDead = new Season();
        $season1WalkingDead->setNumber(1);
        $season1WalkingDead->setYear(2010);
        $season1WalkingDead->setName('Season 1');
        $season1WalkingDead->setSlug($slugify->slugify($season1WalkingDead->getName()));
        $season1WalkingDead->setSynopsis("La population entière a été ravagée par une épidémie d'origine inconnue, qui est envahie par les morts-vivants. Parti sur les traces de sa femme Lori et de son fils Carl, Rick arrive à Atlanta où, avec un groupe de rescapés, il va devoir apprendre à survivre et à tuer tout en cherchant une solution ou un remède.");
        $season1WalkingDead->setProgram($this->getReference(ProgramFixtures::PROGRAM_WALKING_DEAD));
        $manager->persist($season1WalkingDead);
        $this->addReference(self::SEASON_1_WALKING_DEAD, $season1WalkingDead);

        $season2WalkingDead = new Season();
        $season2WalkingDead->setNumber(2);
        $season2WalkingDead->setYear(2011);
        $season2WalkingDead->setName('Season 2');
        $season2WalkingDead->setSlug($slugify->slugify($season2WalkingDead->getName()));
        $season2WalkingDead->setSynopsis("Lors de la deuxième saison le groupe de survivants mené par Rick Grimes tente de survivre dans un monde envahi par les rôdeurs, arrivant dans une ferme et découvrant peu à peu des éléments expliquant l'épidémie. La famille Greene rejoint le groupe car de nouveaux liens se sont tissés entre certains personnages mais tous ne resteront pas indemnes, leur avenir étant incertain et de plus en plus hostile, dévasté au fil du temps. ");
        $season2WalkingDead->setProgram($this->getReference(ProgramFixtures::PROGRAM_WALKING_DEAD));
        $manager->persist($season2WalkingDead);
        $this->addReference(self::SEASON_2_WALKING_DEAD, $season2WalkingDead);

        $season1HauntingHillHouse = new Season();
        $season1HauntingHillHouse->setNumber(1);
        $season1HauntingHillHouse->setYear(2018);
        $season1HauntingHillHouse->setName('Season 1');
        $season1HauntingHillHouse->setSlug($slugify->slugify($season1HauntingHillHouse->getName()));
        $season1HauntingHillHouse->setSynopsis("Lors de l'été 1992, Hugh et Olivia Crain s'installent temporairement dans un ancien manoir, Hill House, avec leurs cinq enfants : Shirley, Steven, Theodora, Luke et Eleanor. Mais d'étranges événements commencent à se dérouler au sein du manoir et affectent principalement Olivia dont le comportement devient de plus en plus étrange.");
        $season1HauntingHillHouse->setProgram($this->getReference(ProgramFixtures::PROGRAM_HAUNTING_HILL_HOUSE));
        $manager->persist($season1HauntingHillHouse);
        $this->addReference(self::SEASON_1_HAUNTING_HILL_HOUSE, $season1HauntingHillHouse);

        $season1AmericanHorrorStory = new Season();
        $season1AmericanHorrorStory->setNumber(1);
        $season1AmericanHorrorStory->setYear(2011);
        $season1AmericanHorrorStory->setName('Season 1');
        $season1AmericanHorrorStory->setSlug($slugify->slugify($season1AmericanHorrorStory->getName()));
        $season1AmericanHorrorStory->setSynopsis("Une jolie petite famille emménage dans une maison évidemment hantée. Il y a le père, psychiatre et infidèle, dont la libido dégouline de ses pores ; la femme, endeuillée par la mort de son enfant en couche ; et leur fille dépressive, qui respire la mélancolie.");
        $season1AmericanHorrorStory->setProgram($this->getReference(ProgramFixtures::PROGRAM_AMERICAN_HORROR_STORY));
        $manager->persist($season1AmericanHorrorStory);
        $this->addReference(self::SEASON_1_AMERICAN_HORROR_STORY, $season1AmericanHorrorStory);

        $season1LoveDeathAndRobots = new Season();
        $season1LoveDeathAndRobots->setNumber(1);
        $season1LoveDeathAndRobots->setYear(2019);
        $season1LoveDeathAndRobots->setName('Season 1');
        $season1LoveDeathAndRobots->setSlug($slugify->slugify($season1LoveDeathAndRobots->getName()));
        $season1LoveDeathAndRobots->setSynopsis("Un yaourt susceptible, des soldats lycanthropes, des robots déchaînés, des monstres-poubelles, des chasseurs de primes cyborgs, des araignées extraterrestres et des démons de l'enfer assoiffés de sang : tout ce beau monde est réuni dans 18 courts d'animation déconseillés aux âmes sensibles.");
        $season1LoveDeathAndRobots->setProgram($this->getReference(ProgramFixtures::PROGRAM_LOVE_DEATH_AND_ROBOTS));
        $manager->persist($season1LoveDeathAndRobots);
        $this->addReference(self::SEASON_1_LOVE_DEATH_AND_ROBOTS, $season1LoveDeathAndRobots);

        $season1PennyDreadful = new Season();
        $season1PennyDreadful->setNumber(1);
        $season1PennyDreadful->setYear(2014);
        $season1PennyDreadful->setName('Season 1');
        $season1PennyDreadful->setSlug($slugify->slugify($season1PennyDreadful->getName()));
        $season1PennyDreadful->setSynopsis("Londres, 1891. Vanessa Ives, une jeune femme aux pouvoirs puissants et hypnotiques, s’allie à Ethan Chandler, un homme rebelle et violent, ainsi qu’à Sir Malcolm, un homme riche d’un certain âge aux ressources intarissables. Ensemble, ils combattent une menace quasi invisible qui massacre la population.");
        $season1PennyDreadful->setProgram($this->getReference(ProgramFixtures::PROGRAM_PENNY_DREADFUL));
        $manager->persist($season1PennyDreadful);
        $this->addReference(self::SEASON_1_PENNY_DREADFUL, $season1PennyDreadful);

        $season1FearTheWalkingDead = new Season();
        $season1FearTheWalkingDead->setNumber(1);
        $season1FearTheWalkingDead->setYear(2015);
        $season1FearTheWalkingDead->setName('Season 1');
        $season1FearTheWalkingDead->setSlug($slugify->slugify($season1FearTheWalkingDead->getName()));
        $season1FearTheWalkingDead->setSynopsis("A Los Angeles, Nick Clark, un jeune toxicomane qui accumule les problèmes, se réveille dans une église abandonnée et découvre son amie en train de dévorer la mâchoire d’un cadavre. Révélant ce qu’il a vu, sa famille pense qu’il s’agit d’hallucinations liées à sa consommation de drogue, même si de nombreux phénomènes étranges se produisent en ville. Mais Madison, sa mère, qui ne croit pas les histoires de son fils et encore moins les rumeurs d’épidémie mortelle qui courent dans le lycée où elle travaille, se rend vite compte que l’apocalypse vient de débuter.");
        $season1FearTheWalkingDead->setProgram($this->getReference(ProgramFixtures::PROGRAM_FEAR_THE_WALKING_DEAD));
        $manager->persist($season1FearTheWalkingDead);
        $this->addReference(self::SEASON_1_FEAR_THE_WALKING_DEAD, $season1FearTheWalkingDead);

        $season1TheBigBangTheory = new Season();
        $season1TheBigBangTheory->setNumber(1);
        $season1TheBigBangTheory->setYear(2007);
        $season1TheBigBangTheory->setName('Season 1');
        $season1TheBigBangTheory->setSlug($slugify->slugify($season1TheBigBangTheory->getName()));
        $season1TheBigBangTheory->setSynopsis("Leonard et Sheldon pourraient vous dire tout ce que vous voudriez savoir à propos de la physique quantique. Mais ils seraient bien incapables de vous expliquer quoi que ce soit sur la vie « réelle », le quotidien ou les relations humaines... Mais tout va changer avec l'arrivée de la superbe Penny, leur voisine. Ce petit bout de femme, actrice à ses heures et serveuse pour le beurre, va devenir leur professeur de vie !");
        $season1TheBigBangTheory->setProgram($this->getReference(ProgramFixtures::PROGRAM_THE_BIG_BANG_THEORY));
        $manager->persist($season1TheBigBangTheory);
        $this->addReference(self::SEASON_1_THE_BIG_BANG_THEORY, $season1TheBigBangTheory);

        $season2TheBigBangTheory = new Season();
        $season2TheBigBangTheory->setNumber(2);
        $season2TheBigBangTheory->setYear(2008);
        $season2TheBigBangTheory->setName('Season 2');
        $season2TheBigBangTheory->setSlug($slugify->slugify($season2TheBigBangTheory->getName()));
        $season2TheBigBangTheory->setSynopsis("Alors que les obsessions de Sheldon s’intensifient, Leonard et Penny se rapprochent. Pendant ce temps, Howard multiplie les tentatives pour séduire des femmes et Raj est nommé dans la catégorie '30 to watch under 30' du magazine People. De leur côté, Sheldon et Penny posent lentement les bases de leur amitié.");
        $season2TheBigBangTheory->setProgram($this->getReference(ProgramFixtures::PROGRAM_THE_BIG_BANG_THEORY));
        $manager->persist($season2TheBigBangTheory);
        $this->addReference(self::SEASON_2_THE_BIG_BANG_THEORY, $season2TheBigBangTheory);

        $season3TheBigBangTheory = new Season();
        $season3TheBigBangTheory->setNumber(3);
        $season3TheBigBangTheory->setYear(2009);
        $season3TheBigBangTheory->setName('Season 3');
        $season3TheBigBangTheory->setSlug($slugify->slugify($season3TheBigBangTheory->getName()));
        $season3TheBigBangTheory->setSynopsis("Sheldon et ses amis sont de retour de leur expédition au pôle Nord. Alors que Penny et Leonard débutent leur relation, Howard commence à fréquenter Bernadette Rostenkowski.");
        $season3TheBigBangTheory->setProgram($this->getReference(ProgramFixtures::PROGRAM_THE_BIG_BANG_THEORY));
        $manager->persist($season3TheBigBangTheory);
        $this->addReference(self::SEASON_3_THE_BIG_BANG_THEORY, $season3TheBigBangTheory);

        $season4TheBigBangTheory = new Season();
        $season4TheBigBangTheory->setNumber(4);
        $season4TheBigBangTheory->setYear(2010);
        $season4TheBigBangTheory->setName('Season 4');
        $season4TheBigBangTheory->setSlug($slugify->slugify($season4TheBigBangTheory->getName()));
        $season4TheBigBangTheory->setSynopsis("Sheldon entame une relation platonique avec Amy Farrah Fowler, une brillante neuroscientifique. Pendant ce temps, Leonard fréquente Priya, ce qui déplaît fortement à son frère Raj. Penny, quant à elle, se rend compte de ses véritables sentiments pour Leonard.");
        $season4TheBigBangTheory->setProgram($this->getReference(ProgramFixtures::PROGRAM_THE_BIG_BANG_THEORY));
        $manager->persist($season4TheBigBangTheory);
        $this->addReference(self::SEASON_4_THE_BIG_BANG_THEORY, $season4TheBigBangTheory);

        $season5TheBigBangTheory = new Season();
        $season5TheBigBangTheory->setNumber(5);
        $season5TheBigBangTheory->setYear(2011);
        $season5TheBigBangTheory->setName('Season 5');
        $season5TheBigBangTheory->setSlug($slugify->slugify($season5TheBigBangTheory->getName()));
        $season5TheBigBangTheory->setSynopsis("Alors que Penny regrette d’avoir passé la nuit avec Raj, Leonard décide de rompre avec Priya. Dans le même temps, la relation d’Amy et Sheldon passe un nouveau cap et Howard se prépare à partir en mission dans l’espace.");
        $season5TheBigBangTheory->setProgram($this->getReference(ProgramFixtures::PROGRAM_THE_BIG_BANG_THEORY));
        $manager->persist($season5TheBigBangTheory);
        $this->addReference(self::SEASON_5_THE_BIG_BANG_THEORY, $season5TheBigBangTheory);

        $season6TheBigBangTheory = new Season();
        $season6TheBigBangTheory->setNumber(6);
        $season6TheBigBangTheory->setYear(2012);
        $season6TheBigBangTheory->setName('Season 6');
        $season6TheBigBangTheory->setSlug($slugify->slugify($season6TheBigBangTheory->getName()));
        $season6TheBigBangTheory->setSynopsis("Alors que tous ses amis sont heureux et en couple, Raj doit faire face à sa solitude. En parallèle, Amy est jalouse de la nouvelle assistante de Sheldon. De son côté, Stuart est invité à participer aux soirées de la bande, tandis que la mission d’Howard dans l’espace ne se passe pas comme prévu.");
        $season6TheBigBangTheory->setProgram($this->getReference(ProgramFixtures::PROGRAM_THE_BIG_BANG_THEORY));
        $manager->persist($season6TheBigBangTheory);
        $this->addReference(self::SEASON_6_THE_BIG_BANG_THEORY, $season6TheBigBangTheory);

        $season7TheBigBangTheory = new Season();
        $season7TheBigBangTheory->setNumber(7);
        $season7TheBigBangTheory->setYear(2013);
        $season7TheBigBangTheory->setName('Season 7');
        $season7TheBigBangTheory->setSlug($slugify->slugify($season7TheBigBangTheory->getName()));
        $season7TheBigBangTheory->setSynopsis("Parti en expédition durant tout l’été, Leonard a laissé ses amis à Pasadena. En son absence, Sheldon et Penny ont renforcé leur lien d’amitié. Après ses déboires avec Lucy, Raj repart en quête du grand amour alors que Sheldon traverse une mauvaise passe à cause de l’une de ses découvertes scientifiques. Howard envisage pour sa part de retourner dans l’espace.");
        $season7TheBigBangTheory->setProgram($this->getReference(ProgramFixtures::PROGRAM_THE_BIG_BANG_THEORY));
        $manager->persist($season7TheBigBangTheory);
        $this->addReference(self::SEASON_7_THE_BIG_BANG_THEORY, $season7TheBigBangTheory);

        $season8TheBigBangTheory = new Season();
        $season8TheBigBangTheory->setNumber(8);
        $season8TheBigBangTheory->setYear(2014);
        $season8TheBigBangTheory->setName('Season 8');
        $season8TheBigBangTheory->setSlug($slugify->slugify($season8TheBigBangTheory->getName()));
        $season8TheBigBangTheory->setSynopsis("Désormais fiancés, Leonard et Penny sont plus épanouis que jamais. Alors que Raj découvre quelques défauts à sa nouvelle petite amie, Amy trouve que sa relation avec Sheldon n’avance pas assez vite. De leur côté, Howard et Bernadette sont confrontés à une situation délicate lorsque Stuart emménage avec la mère d’Howard.");
        $season8TheBigBangTheory->setProgram($this->getReference(ProgramFixtures::PROGRAM_THE_BIG_BANG_THEORY));
        $manager->persist($season8TheBigBangTheory);
        $this->addReference(self::SEASON_8_THE_BIG_BANG_THEORY, $season8TheBigBangTheory);

        $season9TheBigBangTheory = new Season();
        $season9TheBigBangTheory->setNumber(9);
        $season9TheBigBangTheory->setYear(2015);
        $season9TheBigBangTheory->setName('Season 9');
        $season9TheBigBangTheory->setSlug($slugify->slugify($season9TheBigBangTheory->getName()));
        $season9TheBigBangTheory->setSynopsis("Après être parti pour se retrouver, Sheldon doit faire face aux répercussions de son départ. A Las Vegas, le mariage de Penny et Leonard approche, mais a-t-elle digéré l’infidélité de Leonard ? Pendant ce temps, Howard dépend de plus en plus de Bernadette à la suite du décès de sa mère, et la relation entre Raj et Emily devient plus sérieuse.");
        $season9TheBigBangTheory->setProgram($this->getReference(ProgramFixtures::PROGRAM_THE_BIG_BANG_THEORY));
        $manager->persist($season9TheBigBangTheory);
        $this->addReference(self::SEASON_9_THE_BIG_BANG_THEORY, $season9TheBigBangTheory);

        $season10TheBigBangTheory = new Season();
        $season10TheBigBangTheory->setNumber(10);
        $season10TheBigBangTheory->setYear(2016);
        $season10TheBigBangTheory->setName('Season 10');
        $season10TheBigBangTheory->setSlug($slugify->slugify($season10TheBigBangTheory->getName()));
        $season10TheBigBangTheory->setSynopsis("Léonard et Penny renouvellent leurs voeux de mariage devant leurs familles et leurs amis. Sheldon, quant à lui, rédige un nouvel accord de colocation lorsqu’Amy et lui s’engagent dans une cohabitation expérimentale. Pendant ce temps, Howard et Bernadette se préparent à l’arrivée de Baby Wolowitz, et Raj s’émancipe en refusant l’argent de son père.");
        $season10TheBigBangTheory->setProgram($this->getReference(ProgramFixtures::PROGRAM_THE_BIG_BANG_THEORY));
        $manager->persist($season10TheBigBangTheory);
        $this->addReference(self::SEASON_10_THE_BIG_BANG_THEORY, $season10TheBigBangTheory);

        $season11TheBigBangTheory = new Season();
        $season11TheBigBangTheory->setNumber(11);
        $season11TheBigBangTheory->setYear(2017);
        $season11TheBigBangTheory->setName('Season 11');
        $season11TheBigBangTheory->setSlug($slugify->slugify($season11TheBigBangTheory->getName()));
        $season11TheBigBangTheory->setSynopsis("près avoir accepté la demande en mariage de Sheldon, Amy et son futur mari se lancent dans les préparatifs de la cérémonie. Au même moment, Bernadette et Howard doivent affronter les conséquences d’une nouvelle inattendue, et Leonard découvre que sa mère et Penny passent beaucoup de temps ensemble au téléphone. De son côté, Raj s’éloigne d’Howard.");
        $season11TheBigBangTheory->setProgram($this->getReference(ProgramFixtures::PROGRAM_THE_BIG_BANG_THEORY));
        $manager->persist($season11TheBigBangTheory);
        $this->addReference(self::SEASON_11_THE_BIG_BANG_THEORY, $season11TheBigBangTheory);

        $season12TheBigBangTheory = new Season();
        $season12TheBigBangTheory->setNumber(12);
        $season12TheBigBangTheory->setYear(2018);
        $season12TheBigBangTheory->setName('Season 12');
        $season12TheBigBangTheory->setSlug($slugify->slugify($season12TheBigBangTheory->getName()));
        $season12TheBigBangTheory->setSynopsis("A la suite de leur voyage de noces à New York, Sheldon et Amy travaillent ensemble sur un projet de recherche scientifique. En parallèle, Raj décide de mettre fin à son célibat d’une manière inattendue, tandis que Penny et Leonard s’interrogent sur leur désir d’avoir des enfants.");
        $season12TheBigBangTheory->setProgram($this->getReference(ProgramFixtures::PROGRAM_THE_BIG_BANG_THEORY));
        $manager->persist($season12TheBigBangTheory);
        $this->addReference(self::SEASON_12_THE_BIG_BANG_THEORY, $season12TheBigBangTheory);

        $season1BreakingBad = new Season();
        $season1BreakingBad->setNumber(1);
        $season1BreakingBad->setYear(2008);
        $season1BreakingBad->setName('Season 1');
        $season1BreakingBad->setSlug($slugify->slugify($season1BreakingBad->getName()));
        $season1BreakingBad->setSynopsis("Walter White, 50 ans, est professeur de chimie dans un lycée du Nouveau-Mexique. Son quotidien est bouleversé lorsqu’il apprend qu’il est atteint d’un cancer des poumons incurable. Il n’a plus qu’une seule solution pour mettre rapidement sa famille à l’abri du besoin : fabriquer et vendre une drogue de synthèse. Commence alors une longue descente aux enfers.");
        $season1BreakingBad->setProgram($this->getReference(ProgramFixtures::PROGRAM_BRERAKING_BAD));
        $manager->persist($season1BreakingBad);
        $this->addReference(self::SEASON_1_BREAKING_BAD, $season1BreakingBad);

        $season2BreakingBad = new Season();
        $season2BreakingBad->setNumber(2);
        $season2BreakingBad->setYear(2009);
        $season2BreakingBad->setName('Season 2');
        $season2BreakingBad->setSlug($slugify->slugify($season2BreakingBad->getName()));
        $season2BreakingBad->setSynopsis("Après les mésaventures rencontrées avec Krazy-8 et Tuco Salamanca, Walter et Jesse décident de monter leur propre affaire. Mais alors que l’empire d'Heisenberg s’étend de plus en plus, un deal tourne mal et les ennuis commencent. Sur les conseils de Saul Goodman, son avocat véreux, Walter entre en contact avec le propriétaire d’une chaîne de restaurant qui pourrait l’aider à écouler ses stocks de drogue. Pendant ce temps, Skyler commence à avoir des doutes sur son mari tandis que Jesse sombre peu à peu dans l’héroïne.");
        $season2BreakingBad->setProgram($this->getReference(ProgramFixtures::PROGRAM_BRERAKING_BAD));
        $manager->persist($season2BreakingBad);
        $this->addReference(self::SEASON_2_BREAKING_BAD, $season2BreakingBad);

        $season1SurEcoute = new Season();
        $season1SurEcoute->setNumber(1);
        $season1SurEcoute->setYear(2002);
        $season1SurEcoute->setName('Season 1');
        $season1SurEcoute->setSlug($slugify->slugify($season1SurEcoute->getName()));
        $season1SurEcoute->setSynopsis("À la suite d’un retournement de situation, pour le moins suspect, lors du procès du frère d’un membre de la pègre de Baltimore, le maire décide de faire le ménage dans sa ville. Outre la surveillance des dealers, les infiltrations à l’intérieur même des organisations criminelles et les flagrants délits qui constituent leur quotidien, les policiers d’une unité spéciale doivent également composer avec les pressions politiques venant de toutes parts.");
        $season1SurEcoute->setProgram($this->getReference(ProgramFixtures::PROGRAM_THE_WIRE));
        $manager->persist($season1SurEcoute);
        $this->addReference(self::SEASON_1_THE_WIRE, $season1SurEcoute);

        $season2SurEcoute = new Season();
        $season2SurEcoute->setNumber(2);
        $season2SurEcoute->setYear(2003);
        $season2SurEcoute->setName('Season 2');
        $season2SurEcoute->setSlug($slugify->slugify($season2SurEcoute->getName()));
        $season2SurEcoute->setSynopsis("Rien ne va plus à Baltimore. Alors que l’inspecteur Jimmy McNulty a été rétrogradé aux affaire maritimes, le Major Valchek confie au lieutenant Cedric Daniels la mission de mettre en place une brigade chargée d'enquêter en profondeur sur les activités du syndicat des dockers. Pendant ce temps, Dragon et Bodie vont chercher une nouvelle cargaison de drogue à Philadelphie sans savoir qu’ils sont suivis par les hommes de main de Stringer Bell.");
        $season2SurEcoute->setProgram($this->getReference(ProgramFixtures::PROGRAM_THE_WIRE));
        $manager->persist($season2SurEcoute);
        $this->addReference(self::SEASON_2_THE_WIRE, $season2SurEcoute);

        $season1TwinPeaks = new Season();
        $season1TwinPeaks->setNumber(1);
        $season1TwinPeaks->setYear(1990);
        $season1TwinPeaks->setName('Season 1');
        $season1TwinPeaks->setSlug($slugify->slugify($season1TwinPeaks->getName()));
        $season1TwinPeaks->setSynopsis("Un meurtre a été commis à Twin Peaks, une petite bourgade de l'Etat de Washington en apparence tranquille. La jeune Laura Palmer est retrouvée morte nue au bord d'un lac, enveloppée dans du plastique. L'agent spécial du FBI, Dale Cooper, envoyé sur place pour démasquer le coupable, mène l'enquête avec le soutien du shérif local, Harry Truman.");
        $season1TwinPeaks->setProgram($this->getReference(ProgramFixtures::PROGRAM_TWIN_PEAKS));
        $manager->persist($season1TwinPeaks);
        $this->addReference(self::SEASON_1_TWIN_PEAKS, $season1TwinPeaks);

        $season2TwinPeaks = new Season();
        $season2TwinPeaks->setNumber(2);
        $season2TwinPeaks->setYear(1991);
        $season2TwinPeaks->setName('Season 2');
        $season2TwinPeaks->setSlug($slugify->slugify($season2TwinPeaks->getName()));
        $season2TwinPeaks->setSynopsis("Cooper est blessé. Alors qu'il attend les secours, il voit apparaître un géant qui lui transmet d'étranges messages.");
        $season2TwinPeaks->setProgram($this->getReference(ProgramFixtures::PROGRAM_TWIN_PEAKS));
        $manager->persist($season2TwinPeaks);
        $this->addReference(self::SEASON_2_TWIN_PEAKS, $season2TwinPeaks);

        $season1Kaamelott = new Season();
        $season1Kaamelott->setNumber(1);
        $season1Kaamelott->setYear(2005);
        $season1Kaamelott->setName('Season 1');
        $season1Kaamelott->setSlug($slugify->slugify($season1Kaamelott->getName()));
        $season1Kaamelott->setSynopsis("Britannia, Ve siècle après Jésus-Christ. Arthur, fils du brutal Roi Uther Pendragon, a retiré l’épée magique Excalibur du rocher sacré. Reconnu comme l’élu des Dieux, il est investi d’une noble mission envers son peuple. Devenu Roi de Bretagne, il installe le siège du royaume au château de Kaamelott, avec l’ambition de fédérer les clans bretons au sein d’un même gouvernement. Constitué de seigneurs, rois et chevaliers, ils se réuniront autour de la Table Ronde, où ils devront jurer de trouver le Saint Graal, qui recueillit le sang du Christ sur la croix. Arthur a épousé la jeune Guenièvre, fille du Roi de Carmélide Léodagan, pour des raisons stratégiques et politiques, et tarde à donner un héritier au Royaume. Les tentatives d’invasion se multiplient aux frontières bretonnes, l’ordre est préservé par la guerre et les alliances diplomatiques. Un matin, le Roi Arthur réunit ses chevaliers dans la plus grande salle de Kaamelott.");
        $season1Kaamelott->setProgram($this->getReference(ProgramFixtures::PROGRAM_KAAMELOTT));
        $manager->persist($season1Kaamelott);
        $this->addReference(self::SEASON_1_KAAMELOTT, $season1Kaamelott);

        $season2Kaamelott = new Season();
        $season2Kaamelott->setNumber(2);
        $season2Kaamelott->setYear(2005);
        $season2Kaamelott->setName('Season 2');
        $season2Kaamelott->setSlug($slugify->slugify($season2Kaamelott->getName()));
        $season2Kaamelott->setSynopsis("Le Roi Arthur se heurte à l’incompréhension et aux réticences de ses chevaliers. Le doute s’installe, les querelles sont fréquentes et les échecs se multiplient. Inquiets, les Dieux ont délégué la Dame du lac pour maintenir la foi d’Arthur en sa noble mission. Pendant ce temps, le Royaume est de nouveau assailli par les peuples ennemis et la révolte gronde chez des paysans bretons hostiles à la politique du gouvernement. Léodagan et son épouse Séli, hauts dignitaires de Carmélide, tentent d’asseoir leur place politique aux côtés du Roi. Ils l’incitent à donner un enfant à leur fille Guenièvre et à accepter leur fils Yvain à la Table Ronde. De son côté, Lancelot du Lac ne peut avouer son amour à Guenièvre, et prend lentement ses distances avec les autres chevaliers et son Roi. Alors que la quête du Graal semble s’enliser, Arthur convoque ses chevaliers à la Table Ronde.");
        $season2Kaamelott->setProgram($this->getReference(ProgramFixtures::PROGRAM_KAAMELOTT));
        $manager->persist($season2Kaamelott);
        $this->addReference(self::SEASON_2_KAAMELOTT, $season2Kaamelott);

        $season1Malcolm = new Season();
        $season1Malcolm->setNumber(1);
        $season1Malcolm->setYear(2000);
        $season1Malcolm->setName('Season 1');
        $season1Malcolm->setSlug($slugify->slugify($season1Malcolm->getName()));
        $season1Malcolm->setSynopsis("Petit génie malgré lui, Malcolm vit dans une famille hors du commun. Le jeune surdoué n'hésite pas à se servir de son intelligence pour faire les 400 coups avec ses frères : Francis, l'aîné, envoyé dans une école militaire après une bêtise de trop, Reese, une brute pas très maligne, et Dewey, le petit dernier, souffre douleur général. Les parents tentent tant bien que mal de canaliser l'énergie de ces petits démons. Si Loïs est despotique et veut tout contrôler, Hal, en revanche, est irresponsable et ne pense qu'à s'amuser.");
        $season1Malcolm->setProgram($this->getReference(ProgramFixtures::PROGRAM_MALCOLM));
        $manager->persist($season1Malcolm);
        $this->addReference(self::SEASON_1_MALCOLM, $season1Malcolm);

        $season2Malcolm = new Season();
        $season2Malcolm->setNumber(2);
        $season2Malcolm->setYear(2000);
        $season2Malcolm->setName('Season 2');
        $season2Malcolm->setSlug($slugify->slugify($season2Malcolm->getName()));
        $season2Malcolm->setSynopsis("Lois se faisait une fête de la petite cérémonie qui devait marquer son anniversaire. Mais quand elle comprend que ses enfants ont dépensé l'argent destiné à son cadeau pour s'acheter des bonbons, elle se montre très déçue. Malcolm, qui a compris qu'il ne pourrait pas s'amuser avec ses copains pour Halloween, est aussi très triste. A l'école, il tente de se défaire d'une nouvelle camarade, un peu trop collante à son goût. Sa rivalité avec son frère Reese provoque de fréquentes disputes.");
        $season2Malcolm->setProgram($this->getReference(ProgramFixtures::PROGRAM_MALCOLM));
        $manager->persist($season2Malcolm);
        $this->addReference(self::SEASON_2_MALCOLM, $season2Malcolm);

        $season1SouthPark = new Season();
        $season1SouthPark->setNumber(1);
        $season1SouthPark->setYear(1997);
        $season1SouthPark->setName('Season 1');
        $season1SouthPark->setSlug($slugify->slugify($season1SouthPark->getName()));
        $season1SouthPark->setSynopsis("Quatre gamins insolents tournent joyeusement en ridicule célébrités et autres personnalités politiques.");
        $season1SouthPark->setProgram($this->getReference(ProgramFixtures::PROGRAM_SOUTH_PARK));
        $manager->persist($season1SouthPark);
        $this->addReference(self::SEASON_1_SOUTH_PARK, $season1SouthPark);

        $season2SouthPark = new Season();
        $season2SouthPark->setNumber(2);
        $season2SouthPark->setYear(1998);
        $season2SouthPark->setName('Season 2');
        $season2SouthPark->setSlug($slugify->slugify($season2SouthPark->getName()));
        $season2SouthPark->setSynopsis("Quatre gamins insolents tournent joyeusement en ridicule célébrités et autres personnalités politiques.");
        $season2SouthPark->setProgram($this->getReference(ProgramFixtures::PROGRAM_SOUTH_PARK));
        $manager->persist($season2SouthPark);
        $this->addReference(self::SEASON_2_SOUTH_PARK, $season2SouthPark);

        $season1PeakyBlinders = new Season();
        $season1PeakyBlinders->setNumber(1);
        $season1PeakyBlinders->setYear(2013);
        $season1PeakyBlinders->setName('Season 1');
        $season1PeakyBlinders->setSlug($slugify->slugify($season1PeakyBlinders->getName()));
        $season1PeakyBlinders->setSynopsis("Dans le Birmingham industriel de l’après Grande Guerre, les anciens soldats, mais aussi les révolutionnaires et les criminels luttent pour subsister. Alors qu’une féroce révolte ouvrière est sur le point d’éclater, le Parlement anglais dépêche ses forces spéciales pour maintenir l’ordre. De leur côté, les Peaky Blinders, une organisation criminelle particulièrement redoutée dans la ville, ont pris possession par erreur d’une cargaison d’armes à feu volées. Mais l’arrivée de Chester Campbell, un policier de Belfast aux méthodes expéditives, dont la mission est de purger la ville de ses gangs sanguinaires, pourrait bien compromettre les ambitions de leur impitoyable chef, Tommy Shelby.");
        $season1PeakyBlinders->setProgram($this->getReference(ProgramFixtures::PROGRAM_PEAKY_BLINDERS));
        $manager->persist($season1PeakyBlinders);
        $this->addReference(self::SEASON_1_PEAKY_BLINDERS, $season1PeakyBlinders);

        $season2PeakyBlinders = new Season();
        $season2PeakyBlinders->setNumber(2);
        $season2PeakyBlinders->setYear(2014);
        $season2PeakyBlinders->setName('Season 2');
        $season2PeakyBlinders->setSlug($slugify->slugify($season2PeakyBlinders->getName()));
        $season2PeakyBlinders->setSynopsis("Après avoir pris le contrôle de Birmingham, la famille Shelby, plus puissante que jamais, cherche à étendre son influence. Pour obtenir une place de choix dans les courses hippiques, Tommy Shelby décide de partir à la conquête de Londres, mais Darby Sabini, le chef d’un gang local, ne compte pas laisser son territoire lui échapper, quitte à entrer en conflit ouvert. Pendant ce temps, Polly intensifie ses recherches pour retrouver son fils disparu, tandis que Chester Campbell refait surface pour tendre un piège à Tommy.");
        $season2PeakyBlinders->setProgram($this->getReference(ProgramFixtures::PROGRAM_PEAKY_BLINDERS));
        $manager->persist($season2PeakyBlinders);
        $this->addReference(self::SEASON_2_PEAKY_BLINDERS, $season2PeakyBlinders);

        $season1Scrubs = new Season();
        $season1Scrubs->setNumber(1);
        $season1Scrubs->setYear(2001);
        $season1Scrubs->setName('Season 1');
        $season1Scrubs->setSlug($slugify->slugify($season1Scrubs->getName()));
        $season1Scrubs->setSynopsis("J.D., Turk et Elliot font leur internat de médecine à l'hôpital du Sacré Coeur. Ils y découvrent que la vie n'y est pas facile et se retrouvent bien souvent dans des situations des plus loufoques.");
        $season1Scrubs->setProgram($this->getReference(ProgramFixtures::PROGRAM_SCRUBS));
        $manager->persist($season1Scrubs);
        $this->addReference(self::SEASON_1_SCRUBS, $season1Scrubs);

        $season2Scrubs = new Season();
        $season2Scrubs->setNumber(2);
        $season2Scrubs->setYear(2002);
        $season2Scrubs->setName('Season 2');
        $season2Scrubs->setSlug($slugify->slugify($season2Scrubs->getName()));
        $season2Scrubs->setSynopsis("Les révélations de Jordan ont jeté un froid. Plus personne ne se parle dans les couloirs de l'hôpital. Mais les soins passent avant tout, si bien que Carla finit toujours par tomber sur Turk et qu'Elliot a bien du mal à éviter JD.");
        $season2Scrubs->setProgram($this->getReference(ProgramFixtures::PROGRAM_SCRUBS));
        $manager->persist($season2Scrubs);
        $this->addReference(self::SEASON_2_SCRUBS, $season2Scrubs);

        $season1MadMen = new Season();
        $season1MadMen->setNumber(1);
        $season1MadMen->setYear(2007);
        $season1MadMen->setName('Season 1');
        $season1MadMen->setSlug($slugify->slugify($season1MadMen->getName()));
        $season1MadMen->setSynopsis("En 1960, à New York, Don Draper, directeur créatif de l'agence de publicité Sterling Cooper, domine avec talent un univers tout aussi impitoyable que glamour.");
        $season1MadMen->setProgram($this->getReference(ProgramFixtures::PROGRAM_MAD_MEN));
        $manager->persist($season1MadMen);
        $this->addReference(self::SEASON_1_MAD_MEN, $season1MadMen);

        $season2MadMen = new Season();
        $season2MadMen->setNumber(2);
        $season2MadMen->setYear(2008);
        $season2MadMen->setName('Season 2');
        $season2MadMen->setSlug($slugify->slugify($season2MadMen->getName()));
        $season2MadMen->setSynopsis("Comme l'agence de publicité Sterling Cooper évolue, le brillant Don Draper comprend qu'il doit travailler plus s'il veut garder une longueur d'avance... et le contrôle.");
        $season2MadMen->setProgram($this->getReference(ProgramFixtures::PROGRAM_MAD_MEN));
        $manager->persist($season2MadMen);
        $this->addReference(self::SEASON_2_MAD_MEN, $season2MadMen);


        $manager->flush();
    }
        public function getDependencies(): array
        {
            return [
                ProgramFixtures::class,
            ];
        }
}
