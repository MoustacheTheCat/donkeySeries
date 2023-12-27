<?php

namespace App\DataFixtures;
use App\Entity\Program;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Cocur\Slugify\Slugify;

class ProgramFixtures extends Fixture implements DependentFixtureInterface
{
    const PROGRAM_WALKING_DEAD = 'walkingDead';
    const PROGRAM_HAUNTING_HILL_HOUSE = 'hauntingHillHouse';
    const PROGRAM_AMERICAN_HORROR_STORY = 'americanHorrorStory';
    const PROGRAM_LOVE_DEATH_AND_ROBOTS = 'loveDeathAndRobots';
    const PROGRAM_PENNY_DREADFUL = 'pennyDreadful';
    const PROGRAM_FEAR_THE_WALKING_DEAD = 'fearTheWalkingDead';
    const PROGRAM_THE_BIG_BANG_THEORY = 'theBigBangTheory';
    const PROGRAM_BRERAKING_BAD = 'breakingBad';
    const PROGRAM_THE_WIRE = 'theWire';
    const PROGRAM_TWIN_PEAKS = 'twinPeaks';
    const PROGRAM_KAAMELOTT = 'kaamelott';
    const PROGRAM_MALCOLM = 'malcolm';
    const PROGRAM_SOUTH_PARK = 'southPark';
    const PROGRAM_PEAKY_BLINDERS = 'peakyBlinders';
    const PROGRAM_SCRUBS = 'scrubs';
    const PROGRAM_MAD_MEN = 'madMen';

    public function load(ObjectManager $manager): void
    {
        $slugify = new Slugify();
        $walkingDead = new Program();
        $walkingDead->setTitle('The Walking Dead');
        $walkingDead->setSlug($slugify->slugify($walkingDead->getTitle()));
        $walkingDead->setSummary('Le policier Rick Grimes se réveille après un long coma. Il découvre avec effarement que le monde, ravagé par une épidémie, est envahi par les morts-vivants.');
        $walkingDead->setPoster('https://m.media-amazon.com/images/M/MV5BZmFlMTA0MmUtNWVmOC00ZmE1LWFmMDYtZTJhYjJhNGVjYTU5XkEyXkFqcGdeQXVyMTAzMDM4MjM0._V1_.jpg');
        $walkingDead->setCategory($this->getReference(CategoryFixtures::CATEGORIES_HORREUR));
        $manager->persist($walkingDead);
        $this->addReference(self::PROGRAM_WALKING_DEAD, $walkingDead);

        $hauntingHillHouse = new Program();
        $hauntingHillHouse->setTitle('The Haunting Of Hill House');
        $hauntingHillHouse->setSlug($slugify->slugify($hauntingHillHouse->getTitle()));
        $hauntingHillHouse->setSummary('Plusieurs frères et sœurs qui, enfants, ont grandi dans la demeure qui allait devenir la maison hantée la plus célèbre des États-Unis, sont contraints de se réunir pour finalement affronter les fantômes de leur passé.');
        $hauntingHillHouse->setPoster('https://m.media-amazon.com/images/M/MV5BMTU4NzA4MDEwNF5BMl5BanBnXkFtZTgwMTQxODYzNjM@._V1_SY1000_CR0,0,674,1000_AL_.jpg');
        $hauntingHillHouse->setCategory($this->getReference(CategoryFixtures::CATEGORIES_HORREUR));
        $manager->persist($hauntingHillHouse);
        $this->addReference(self::PROGRAM_HAUNTING_HILL_HOUSE, $hauntingHillHouse);

        $americanHorrorStory = new Program();
        $americanHorrorStory->setTitle('American Horror Story');
        $americanHorrorStory->setSlug($slugify->slugify($americanHorrorStory->getTitle()));
        $americanHorrorStory->setSummary('A chaque saison, son histoire. American Horror Story nous embarque dans des récits à la fois poignants et cauchemardesques, mêlant la peur, le gore et le politiquement correct.');
        $americanHorrorStory->setPoster('https://m.media-amazon.com/images/M/MV5BODZlYzc2ODYtYmQyZS00ZTM4LTk4ZDQtMTMyZDdhMDgzZTU0XkEyXkFqcGdeQXVyMzQ2MDI5NjU@._V1_SY1000_CR0,0,666,1000_AL_.jpg');
        $americanHorrorStory->setCategory($this->getReference(CategoryFixtures::CATEGORIES_HORREUR));
        $manager->persist($americanHorrorStory);
        $this->addReference(self::PROGRAM_AMERICAN_HORROR_STORY, $americanHorrorStory);

        $loveDeathAndRobots = new Program();
        $loveDeathAndRobots->setTitle('Love Death And Robots');
        $loveDeathAndRobots->setSlug($slugify->slugify($loveDeathAndRobots->getTitle()));
        $loveDeathAndRobots->setSummary('Un yaourt susceptible, des soldats lycanthropes, des robots déchaînés, des monstres-poubelles, des chasseurs de primes cyborgs, des araignées extraterrestres et des démons assoiffés de sang : tout ce beau monde est réuni dans 18 courts métrages animés déconseillés aux âmes sensibles.');
        $loveDeathAndRobots->setPoster('https://m.media-amazon.com/images/M/MV5BMTc1MjIyNDI3Nl5BMl5BanBnXkFtZTgwMjQ1OTI0NzM@._V1_SY1000_CR0,0,674,1000_AL_.jpg');
        $loveDeathAndRobots->setCategory($this->getReference(CategoryFixtures::CATEGORIES_HORREUR));
        $manager->persist($loveDeathAndRobots);
        $this->addReference(self::PROGRAM_LOVE_DEATH_AND_ROBOTS, $loveDeathAndRobots);

        $pennyDreadful = new Program();
        $pennyDreadful->setTitle('Penny Dreadful');
        $pennyDreadful->setSlug($slugify->slugify($pennyDreadful->getTitle()));
        $pennyDreadful->setSummary('Dans le Londres ancien, Vanessa Ives, une jeune femme puissante aux pouvoirs hypnotiques, allie ses forces à celles d Ethan, un garçon rebelle et violent aux allures de cowboy, et de Sir Malcolm, un vieil homme riche aux ressources inépuisables.  Ensemble, ils combattent un ennemi inconnu, presque invisible, qui ne semble pas humain et qui massacre la population.');
        $pennyDreadful->setPoster('https://m.media-amazon.com/images/M/MV5BNmE5MDE0ZmMtY2I5Mi00Y2RjLWJlYjMtODkxODQ5OWY1ODdkXkEyXkFqcGdeQXVyNjU2NjA5NjM@._V1_SY1000_CR0,0,695,1000_AL_.jpg');
        $pennyDreadful->setCategory($this->getReference(CategoryFixtures::CATEGORIES_HORREUR));
        $manager->persist($pennyDreadful);
        $this->addReference(self::PROGRAM_PENNY_DREADFUL, $pennyDreadful);

        $fearTheWalkingDead = new Program();
        $fearTheWalkingDead->setTitle('Fear The Walking Dead');
        $fearTheWalkingDead->setSlug($slugify->slugify($fearTheWalkingDead->getTitle()));
        $fearTheWalkingDead->setSummary('La série se déroule au tout début de l épidémie relatée dans la série-mère The Walking Dead et se passe dans la ville de Los Angeles, et non à Atlanta. Madison est conseillère dans un lycée de Los Angeles. Depuis la mort de son mari, elle élève seule ses deux enfants : Alicia, excellente élève qui découvre les premiers émois amoureux, et son grand frère Nick qui a quitté la fac et a sombré dans la drogue.');
        $fearTheWalkingDead->setPoster('https://m.media-amazon.com/images/M/MV5BYWNmY2Y1NTgtYTExMS00NGUxLWIxYWQtMjU4MjNkZjZlZjQ3XkEyXkFqcGdeQXVyMzQ2MDI5NjU@._V1_SY1000_CR0,0,666,1000_AL_.jpg');
        $fearTheWalkingDead->setCategory($this->getReference(CategoryFixtures::CATEGORIES_HORREUR));
        $manager->persist($fearTheWalkingDead);
        $this->addReference(self::PROGRAM_FEAR_THE_WALKING_DEAD, $fearTheWalkingDead);
        
        $theBigBangTheory = new Program();
        $theBigBangTheory->setTitle('The Big Bang Theory');
        $theBigBangTheory->setSlug($slugify->slugify($theBigBangTheory->getTitle()));
        $theBigBangTheory->setSummary("Leonard Hofstadter et Sheldon Cooper vivent en colocation à Pasadena, ville de l'agglomération de Los Angeles. Ce sont tous deux des physiciens surdoués, « geeks » de surcroît. C'est d'ailleurs autour de cela qu'est axée la majeure partie comique de la série. Ils partagent quasiment tout leur temps libre avec leurs deux amis Howard Wolowitz et Rajesh Koothrappali pour jouer à des jeux vidéo comme Halo, organiser un marathon de la saga Star Wars, jouer à des jeux de société comme le Boggle klingon ou de rôles tel que Donjons et Dragons, voire discuter de théories scientifiques très complexes.Leur univers routinier est perturbé lorsqu'une jeune femme, Penny, s'installe dans l'appartement d'en face. Leonard a immédiatement des vues sur elle et va tout faire pour la séduire ainsi que l'intégrer au groupe et à son univers, auquel elle ne connaît rien.");
        $theBigBangTheory->setPoster('https://upload.wikimedia.org/wikipedia/fr/6/69/BigBangTheory_Logo.png');
        $theBigBangTheory->setCategory($this->getReference(CategoryFixtures::CATEGORIES_COMEDIE));
        $manager->persist($theBigBangTheory);
        $this->addReference(self::PROGRAM_THE_BIG_BANG_THEORY, $theBigBangTheory);

        $breakingBad = new Program();
        $breakingBad->setTitle('Breaking Bad');
        $breakingBad->setSlug($slugify->slugify($breakingBad->getTitle()));
        $breakingBad->setSummary("Walter White, 50 ans, est professeur de chimie dans un lycée du Nouveau-Mexique. Pour subvenir aux besoins de Skyler, sa femme enceinte, et de Walt Junior, son fils handicapé, il est obligé de travailler doublement. Son quotidien déjà morose devient carrément noir lorsqu'il apprend qu'il est atteint d'un incurable cancer des poumons. Les médecins ne lui donnent pas plus de deux ans à vivre. Pour réunir rapidement beaucoup d'argent afin de mettre sa famille à l'abri, Walter ne voit plus qu'une solution : mettre ses connaissances en chimie à profit pour fabriquer et vendre du crystal meth, une drogue de synthèse qui rapporte beaucoup. Il propose à Jesse, un de ses anciens élèves devenu un petit dealer de seconde zone, de faire équipe avec lui. Le duo improvisé met en place un labo itinérant dans un vieux camping-car. Cette association inattendue va les entraîner dans une série de péripéties tant comiques que pathétiques.");
        $breakingBad->setPoster('https://images5.alphacoders.com/111/thumb-1920-1111276.jpg');
        $breakingBad->setCategory($this->getReference(CategoryFixtures::CATEGORIES_DRAME));
        $manager->persist($breakingBad);
        $this->addReference(self::PROGRAM_BRERAKING_BAD, $breakingBad);

        $surEcoute = new Program();
        $surEcoute->setTitle('The Wire');
        $surEcoute->setSlug($slugify->slugify($surEcoute->getTitle()));
        $surEcoute->setSummary("Dans la ville à majorité afro-américaine de Baltimore, la série suit une équipe de la police de la ville et les affaires criminelles liées au trafic de drogue, au port de la ville, au système éducatif et politique de la ville, au milieu carcéral et à la presse locale.");
        $surEcoute->setPoster('https://image.tmdb.org/t/p/original/kEtuIJ2vlfDAiN575f1zRjUJ0zo.jpg');
        $surEcoute->setCategory($this->getReference(CategoryFixtures::CATEGORIES_DRAME));
        $manager->persist($surEcoute);
        $this->addReference(self::PROGRAM_THE_WIRE, $surEcoute);

        $twinPeaks = new Program();
        $twinPeaks->setTitle('Twin Peaks');
        $twinPeaks->setSlug($slugify->slugify($twinPeaks->getTitle()));
        $twinPeaks->setSummary("La mort mystérieuse de Teresa Banks dans la tranquille petite ville de Twin Peaks va donner bien du fil à retordre aux agents Dale Cooper et Chester Desmond qui vont mener une enquête en forme de charade et découvrir que bien des citoyens de la ville sont impliqués dans cette affaire. Un an plus tard, ce sont les sept derniers jours de Laura Palmer, qui se termineront par la mort brutale de cette dernière, annonçant ainsi le début d'une longue série de meurtres qui auront lieu à Twin Peaks...");
        $twinPeaks->setPoster('https://es.web.img2.acsta.net/pictures/15/10/12/14/18/321118.jpg');
        $twinPeaks->setCategory($this->getReference(CategoryFixtures::CATEGORIES_DRAME));
        $manager->persist($twinPeaks);
        $this->addReference(self::PROGRAM_TWIN_PEAKS, $twinPeaks);

        $kaamelott = new Program();
        $kaamelott->setTitle('Kaamelott');
        $kaamelott->setSlug($slugify->slugify($kaamelott->getTitle()));
        $kaamelott->setSummary("Le quotidien banal et burlesque du roi Arthur et des chevaliers de la Table ronde : quête du Graal, repas en famille et problèmes de voisinage.");
        $kaamelott->setPoster('https://thumb.canalplus.pro/http/unsafe/%7BresolutionXY%7D/filters:quality(%7BimageQualityPercentage%7D)/img-hapi.canalplus.pro/ServiceImage/ImageID/96994955');
        $kaamelott->setCategory($this->getReference(CategoryFixtures::CATEGORIES_COMEDIE));
        $manager->persist($kaamelott);
        $this->addReference(self::PROGRAM_KAAMELOTT, $kaamelott);

        $malcolm = new Program();
        $malcolm->setTitle('Malcolm');
        $malcolm->setSlug($slugify->slugify($malcolm->getTitle()));
        $malcolm->setSummary("Petit génie malgré lui, Malcolm vit dans une famille hors du commun. Le jeune surdoué n'hésite pas à se servir de son intelligence pour faire les 400 coups avec ses frères : Francis, l'aîné, envoyé dans une école militaire après une bêtise de trop, Reese, une brute pas très maligne, et Dewey, le petit dernier, souffre douleur général. Les parents tentent tant bien que mal de canalyser l'énergie de ces petits démons. Si Loïs est despotique et veut tout contrôler, Hal, en revanche, est irresponsable et ne pense qu'à s'amuser.");
        $malcolm->setPoster('https://images-na.ssl-images-amazon.com/images/S/pv-target-images/42a531daae28c9d28c390eae845583ba4ba402e776f6d38c2f5aa4490445e45c._RI_V_TTW_.jpg');
        $malcolm->setCategory($this->getReference(CategoryFixtures::CATEGORIES_COMEDIE));
        $manager->persist($malcolm);
        $this->addReference(self::PROGRAM_MALCOLM, $malcolm);

        $southPark = new Program();
        $southPark->setTitle('South Park');
        $southPark->setSlug($slugify->slugify($southPark->getTitle()));
        $southPark->setSummary("La petite ville de South Park dans le Colorado est le théâtre des aventures de Cartman, Stan, Kyle et Kenny, quatre enfants qui ont un langage un peu... décalé !");
        $southPark->setPoster('https://bandbent.files.wordpress.com/2011/05/south-park1.jpg');
        $southPark->setCategory($this->getReference(CategoryFixtures::CATEGORIES_COMEDIE));
        $manager->persist($southPark);
        $this->addReference(self::PROGRAM_SOUTH_PARK, $southPark);

        $peakyBlinders = new Program();
        $peakyBlinders->setTitle('Peaky Blinders');
        $peakyBlinders->setSlug($slugify->slugify($peakyBlinders->getTitle()));
        $peakyBlinders->setSummary("En 1919, à Birmingham, soldats, révolutionnaires politiques et criminels combattent pour se faire une place dans le paysage industriel de l'après-Guerre. Le Parlement s'attend à une violente révolte, et Winston Churchill mobilise des forces spéciales pour contenir les menaces. La famille Shelby compte parmi les membres les plus redoutables. Surnommés les \"Peaky Blinders\" par rapport à leur utilisation de lames de rasoir cachées dans leurs casquettes, ils tirent principalement leur argent de paris et de vol. Tommy Shelby, le plus dangereux de tous, va devoir faire face à l'arrivée de Campbell, un impitoyable chef de la police qui a pour mission de nettoyer la ville. Ne doit-il pas se méfier tout autant la ravissante Grace Burgess ? Fraîchement installée dans le voisinage, celle-ci semble cacher un mystérieux passé et un dangereux secret.");
        $peakyBlinders->setPoster('https://starsmydestination.files.wordpress.com/2020/08/peaky_blinders_4.jpg');
        $peakyBlinders->setCategory($this->getReference(CategoryFixtures::CATEGORIES_DRAME));
        $manager->persist($peakyBlinders);
        $this->addReference(self::PROGRAM_PEAKY_BLINDERS, $peakyBlinders);

        $scrubs = new Program();
        $scrubs->setTitle('Scrubs');
        $scrubs->setSlug($slugify->slugify($scrubs->getTitle()));
        $scrubs->setSummary("La série suit au jour le jour les vies personnelles et professionnelles de plusieurs internes du Sacré-Cœur, un hôpital fictif situé à San Diego en Californie. Le personnage principal est John Dorian, dit « J.D. », interne en médecine. Il est entouré de son meilleur ami, l'interne chirurgien Christopher Turk, de son ancienne petite amie et néanmoins confidente Elliot Reid, ainsi que de Perry Cox, docteur en médecine interne et mentor de J.D. et Elliot. Les personnages secondaires sont le concierge de l'hôpital, qui trouve toujours un moyen de se moquer de J.D., et Bob Kelso, le directeur de l'hôpital, qui n'a que faire de la vie de ses employés.");
        $scrubs->setPoster('http://images2.fanpop.com/images/photos/7500000/Scrubs-scrubs-7589936-1280-1024.jpg');
        $scrubs->setCategory($this->getReference(CategoryFixtures::CATEGORIES_COMEDIE));
        $manager->persist($scrubs);
        $this->addReference(self::PROGRAM_SCRUBS, $scrubs);

        $madMen = new Program();
        $madMen->setTitle('Mad Men');
        $madMen->setSlug($slugify->slugify($madMen->getTitle()));
        $madMen->setSummary("Dans le New York des années 60, Don Draper est l'un des grands noms de la pub. Maître manipulateur, il compte dans son entourage des ennemis qui attendent sa chute.");
        $madMen->setPoster('https://www.blog-note.com/wp-content/uploads/2016/02/mad-men.jpg');
        $madMen->setCategory($this->getReference(CategoryFixtures::CATEGORIES_DRAME));
        $manager->persist($madMen);
        $this->addReference(self::PROGRAM_MAD_MEN, $madMen);

        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            CategoryFixtures::class,
        ];
    }

}
