<?php

namespace App\DataFixtures;

use App\Entity\Actor;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Cocur\Slugify\Slugify;

class ActorFixtures extends Fixture implements DependentFixtureInterface
{
    const ACTOR_NORMAN_REEDUS = 'normanReedus';
    const ACTOR_JON_BERNTHAL = 'jonBernthal';
    const ACTOR_ANDREW_LINCOLN = 'andrewLincoln';
    const ACTOR_JEFFREY_DEAN_MORGAN = 'jeffreyDeanMorgan';
    const ACTOR_HILARIE_BURTON = 'hilarieBurton';
    const ACTOR_Cillian_Murphy = 'cillianMurphy';
    const ACTOR_Paul_Anderson = 'PaulAnderson';
    const ACTOR_Bryan_Cranston = 'BryanCranston';
    const ACTOR_Aaron_Paul = 'AaronPaul';
    const ACTOR_Dominic_West = 'DominicWest';
    const ACTOR_John_Doman = 'JohnDoman';
    const ACTOR_Kyle_MacLachlan = 'KyleMacLachlan';
    const ACTOR_Michael_Ontkean = 'MichaelOntkean';
    const ACTOR_Alexandre_Astier = 'AlexandreAstier';
    const ACTOR_Lionnel_Astier = 'LionnelAstier';
    const ACTOR_Frankie_Muniz = 'FrankieMuniz';
    const ACTOR_Justin_Berfield = 'JustinBerfield';
    const ACTOR_CHRISTOPHER_MELONI = 'christopherMeloni';
    const ACTOR_MARISKA_HARGITAY = 'mariskaHargitay';
    const ACTOR_CHRISTHOPHE_LEMOINE = 'christopheLemoine';
    const ACTOR_THIERRY_WERMUTH = 'thierryWermuth';
    const ACTOR_WILLIAM_CORYN = 'williamCoryn';
    const ACTOR_HENRI_COURSEAUX = 'henriCourseaux';
    const ACTOR_JIM_PARSONS = 'jimParsons';
    const ACTOR_KALEY_CUOCO = 'kaleyCuoco';
    const ACTOR_JOHNNY_GALECKI = 'johnnyGalecki';
    const ACTOR_MELISSA_RAUCH = 'melissaRauch';
    const ACTOR_SIMON_HELMBERG = 'simonHelberg';
    const ACTOR_ZACH_BRAFF = 'zachBraff';
    const ACTOR_DONALD_FAISON = 'donaldFaison';
    const ACTOR_JON_HAMM = 'jonHamm';
    const ACTOR_ELISABETH_MOSS = 'elisabethMoss';

    public function load(ObjectManager $manager): void
    {
        $slugify = new Slugify();

        $normanReedus = new Actor();
        $normanReedus->setName('Norman Reedus');
        $normanReedus->setSlug($slugify->slugify($normanReedus->getName()));
        $normanReedus->addProgram($this->getReference(ProgramFixtures::PROGRAM_WALKING_DEAD));
        $manager->persist($normanReedus);
        $this->addReference(self::ACTOR_NORMAN_REEDUS, $normanReedus);

        $jonBernthal = new Actor();
        $jonBernthal->setName('Jon Bernthal');
        $jonBernthal->setSlug($slugify->slugify($jonBernthal->getName()));
        $jonBernthal->addProgram($this->getReference(ProgramFixtures::PROGRAM_WALKING_DEAD));
        $manager->persist($jonBernthal);
        $this->addReference(self::ACTOR_JON_BERNTHAL, $jonBernthal);

        $andrewLincoln = new Actor();
        $andrewLincoln->setName('Andrew Lincoln');
        $andrewLincoln->setSlug($slugify->slugify($andrewLincoln->getName()));
        $andrewLincoln->addProgram($this->getReference(ProgramFixtures::PROGRAM_WALKING_DEAD));
        $manager->persist($andrewLincoln);
        $this->addReference(self::ACTOR_ANDREW_LINCOLN, $andrewLincoln);


        $jeffreyDeanMorgan = new Actor();
        $jeffreyDeanMorgan->setName('Jeffrey Dean Morgan');
        $jeffreyDeanMorgan->setSlug($slugify->slugify($jeffreyDeanMorgan->getName()));
        $jeffreyDeanMorgan->addProgram($this->getReference(ProgramFixtures::PROGRAM_WALKING_DEAD));
        $manager->persist($jeffreyDeanMorgan);
        $this->addReference(self::ACTOR_JEFFREY_DEAN_MORGAN, $jeffreyDeanMorgan);

        $hilarieBurton = new Actor();
        $hilarieBurton->setName('Hilarie Burton');
        $hilarieBurton->setSlug($slugify->slugify($hilarieBurton->getName()));
        $hilarieBurton->addProgram($this->getReference(ProgramFixtures::PROGRAM_WALKING_DEAD));
        $manager->persist($hilarieBurton);
        $this->addReference(self::ACTOR_HILARIE_BURTON, $hilarieBurton);

        $cillianMurphy = new Actor();
        $cillianMurphy->setName('Cillian Murphy');
        $cillianMurphy->setSlug($slugify->slugify($cillianMurphy->getName()));
        $cillianMurphy->addProgram($this->getReference(ProgramFixtures::PROGRAM_PEAKY_BLINDERS));
        $manager->persist($cillianMurphy);
        $this->addReference(self::ACTOR_Cillian_Murphy, $cillianMurphy);

        $PaulAnderson = new Actor();
        $PaulAnderson->setName('Paul Anderson');
        $PaulAnderson->setSlug($slugify->slugify($PaulAnderson->getName()));
        $PaulAnderson->addProgram($this->getReference(ProgramFixtures::PROGRAM_PEAKY_BLINDERS));
        $manager->persist($PaulAnderson);
        $this->addReference(self::ACTOR_Paul_Anderson, $PaulAnderson);

        $bryanCranston = new Actor();
        $bryanCranston->setName('Bryan Cranston');
        $bryanCranston->setSlug($slugify->slugify($bryanCranston->getName()));
        $bryanCranston->addProgram($this->getReference(ProgramFixtures::PROGRAM_BRERAKING_BAD));
        $manager->persist($bryanCranston);
        $this->addReference(self::ACTOR_Bryan_Cranston, $bryanCranston);

        $aaronPaul = new Actor();
        $aaronPaul->setName('Aaron Paul');
        $aaronPaul->setSlug($slugify->slugify($aaronPaul->getName()));
        $aaronPaul->addProgram($this->getReference(ProgramFixtures::PROGRAM_BRERAKING_BAD));
        $manager->persist($aaronPaul);
        $this->addReference(self::ACTOR_Aaron_Paul, $aaronPaul);

        $dominicWest = new Actor();
        $dominicWest->setName('Dominic West');
        $dominicWest->setSlug($slugify->slugify($dominicWest->getName()));
        $dominicWest->addProgram($this->getReference(ProgramFixtures::PROGRAM_THE_WIRE));
        $manager->persist($dominicWest);
        $this->addReference(self::ACTOR_Dominic_West, $dominicWest);

        $johnDoman = new Actor();
        $johnDoman->setName('John Doman');
        $johnDoman->setSlug($slugify->slugify($johnDoman->getName()));
        $johnDoman->addProgram($this->getReference(ProgramFixtures::PROGRAM_THE_WIRE));
        $manager->persist($johnDoman);
        $this->addReference(self::ACTOR_John_Doman, $johnDoman);

        $kyleMacLachlan = new Actor();
        $kyleMacLachlan->setName('Kyle MacLachlan');
        $kyleMacLachlan->setSlug($slugify->slugify($kyleMacLachlan->getName()));
        $kyleMacLachlan->addProgram($this->getReference(ProgramFixtures::PROGRAM_TWIN_PEAKS));
        $manager->persist($kyleMacLachlan);
        $this->addReference(self::ACTOR_Kyle_MacLachlan, $kyleMacLachlan);

        $michaelOntkean = new Actor();
        $michaelOntkean->setName('Michael Ontkean');
        $michaelOntkean->setSlug($slugify->slugify($michaelOntkean->getName()));
        $michaelOntkean->addProgram($this->getReference(ProgramFixtures::PROGRAM_TWIN_PEAKS));
        $manager->persist($michaelOntkean);
        $this->addReference(self::ACTOR_Michael_Ontkean, $michaelOntkean);

        $alexandreAstier = new Actor();
        $alexandreAstier->setName('Alexandre Astier');
        $alexandreAstier->setSlug($slugify->slugify($alexandreAstier->getName()));
        $alexandreAstier->addProgram($this->getReference(ProgramFixtures::PROGRAM_KAAMELOTT));
        $manager->persist($alexandreAstier);
        $this->addReference(self::ACTOR_Alexandre_Astier, $alexandreAstier);

        $lionnelAstier = new Actor();
        $lionnelAstier->setName('Lionnel Astier');
        $lionnelAstier->setSlug($slugify->slugify($lionnelAstier->getName()));
        $lionnelAstier->addProgram($this->getReference(ProgramFixtures::PROGRAM_KAAMELOTT));
        $manager->persist($lionnelAstier);
        $this->addReference(self::ACTOR_Lionnel_Astier, $lionnelAstier);

        $frankieMuniz = new Actor();
        $frankieMuniz->setName('Frankie Muniz');
        $frankieMuniz->setSlug($slugify->slugify($frankieMuniz->getName()));
        $frankieMuniz->addProgram($this->getReference(ProgramFixtures::PROGRAM_MALCOLM));
        $manager->persist($frankieMuniz);
        $this->addReference(self::ACTOR_Frankie_Muniz, $frankieMuniz);

        $justinBerfield = new Actor();
        $justinBerfield->setName('Justin Berfield');
        $justinBerfield->setSlug($slugify->slugify($justinBerfield->getName()));
        $justinBerfield->addProgram($this->getReference(ProgramFixtures::PROGRAM_MALCOLM));
        $manager->persist($justinBerfield);
        $this->addReference(self::ACTOR_Justin_Berfield, $justinBerfield);

        $christopherMeloni = new Actor();
        $christopherMeloni->setName('Christopher Meloni');
        $christopherMeloni->setSlug($slugify->slugify($christopherMeloni->getName()));
        $christopherMeloni->addProgram($this->getReference(ProgramFixtures::PROGRAM_SCRUBS));
        $manager->persist($christopherMeloni);
        $this->addReference(self::ACTOR_CHRISTOPHER_MELONI, $christopherMeloni);

        $mariskaHargitay = new Actor();
        $mariskaHargitay->setName('Mariska Hargitay');
        $mariskaHargitay->setSlug($slugify->slugify($mariskaHargitay->getName()));
        $mariskaHargitay->addProgram($this->getReference(ProgramFixtures::PROGRAM_SCRUBS));
        $manager->persist($mariskaHargitay);
        $this->addReference(self::ACTOR_MARISKA_HARGITAY, $mariskaHargitay);

        $christopheLemoine = new Actor();
        $christopheLemoine->setName('Christophe Lemoine');
        $christopheLemoine->setSlug($slugify->slugify($christopheLemoine->getName()));
        $christopheLemoine->addProgram($this->getReference(ProgramFixtures::PROGRAM_SOUTH_PARK));
        $manager->persist($christopheLemoine);
        $this->addReference(self::ACTOR_CHRISTHOPHE_LEMOINE, $christopheLemoine);

        $thierryWermuth = new Actor();
        $thierryWermuth->setName('Thierry Wermuth');
        $thierryWermuth->setSlug($slugify->slugify($thierryWermuth->getName()));
        $thierryWermuth->addProgram($this->getReference(ProgramFixtures::PROGRAM_SOUTH_PARK));
        $manager->persist($thierryWermuth);
        $this->addReference(self::ACTOR_THIERRY_WERMUTH, $thierryWermuth);

        $williamCoryn = new Actor();
        $williamCoryn->setName('William Coryn');
        $williamCoryn->setSlug($slugify->slugify($williamCoryn->getName()));
        $williamCoryn->addProgram($this->getReference(ProgramFixtures::PROGRAM_SOUTH_PARK));
        $manager->persist($williamCoryn);
        $this->addReference(self::ACTOR_WILLIAM_CORYN, $williamCoryn);

        $henriCourseaux = new Actor();
        $henriCourseaux->setName('Henri Courseaux');
        $henriCourseaux->setSlug($slugify->slugify($henriCourseaux->getName()));
        $henriCourseaux->addProgram($this->getReference(ProgramFixtures::PROGRAM_SOUTH_PARK));
        $manager->persist($henriCourseaux);
        $this->addReference(self::ACTOR_HENRI_COURSEAUX, $henriCourseaux);

        $jimParsons = new Actor();
        $jimParsons->setName('Jim Parsons');
        $jimParsons->setSlug($slugify->slugify($jimParsons->getName()));
        $jimParsons->addProgram($this->getReference(ProgramFixtures::PROGRAM_THE_BIG_BANG_THEORY));
        $manager->persist($jimParsons);
        $this->addReference(self::ACTOR_JIM_PARSONS, $jimParsons);

        $kaleyCuoco = new Actor();
        $kaleyCuoco->setName('Kaley Cuoco');
        $kaleyCuoco->setSlug($slugify->slugify($kaleyCuoco->getName()));
        $kaleyCuoco->addProgram($this->getReference(ProgramFixtures::PROGRAM_THE_BIG_BANG_THEORY));
        $manager->persist($kaleyCuoco);
        $this->addReference(self::ACTOR_KALEY_CUOCO, $kaleyCuoco);

        $johnnyGalecki = new Actor();
        $johnnyGalecki->setName('Johnny Galecki');
        $johnnyGalecki->setSlug($slugify->slugify($johnnyGalecki->getName()));
        $johnnyGalecki->addProgram($this->getReference(ProgramFixtures::PROGRAM_THE_BIG_BANG_THEORY));
        $manager->persist($johnnyGalecki);
        $this->addReference(self::ACTOR_JOHNNY_GALECKI, $johnnyGalecki);

        $melissaRauch = new Actor();
        $melissaRauch->setName('Melissa Rauch');
        $melissaRauch->setSlug($slugify->slugify($melissaRauch->getName()));
        $melissaRauch->addProgram($this->getReference(ProgramFixtures::PROGRAM_THE_BIG_BANG_THEORY));
        $manager->persist($melissaRauch);
        $this->addReference(self::ACTOR_MELISSA_RAUCH, $melissaRauch);

        $simonHelberg = new Actor();
        $simonHelberg->setName('Simon Helberg');
        $simonHelberg->setSlug($slugify->slugify($simonHelberg->getName()));
        $simonHelberg->addProgram($this->getReference(ProgramFixtures::PROGRAM_THE_BIG_BANG_THEORY));
        $manager->persist($simonHelberg);
        $this->addReference(self::ACTOR_SIMON_HELMBERG, $simonHelberg);

        $zachBraff = new Actor();
        $zachBraff->setName('Zach Braff');
        $zachBraff->setSlug($slugify->slugify($zachBraff->getName()));
        $zachBraff->addProgram($this->getReference(ProgramFixtures::PROGRAM_SCRUBS));
        $manager->persist($zachBraff);
        $this->addReference(self::ACTOR_ZACH_BRAFF, $zachBraff);

        $donaldFaison = new Actor();
        $donaldFaison->setName('Donald Faison');
        $donaldFaison->setSlug($slugify->slugify($donaldFaison->getName()));
        $donaldFaison->addProgram($this->getReference(ProgramFixtures::PROGRAM_SCRUBS));
        $manager->persist($donaldFaison);
        $this->addReference(self::ACTOR_DONALD_FAISON, $donaldFaison);

        $jonHamm = new Actor();
        $jonHamm->setName('Jon Hamm');
        $jonHamm->setSlug($slugify->slugify($jonHamm->getName()));
        $jonHamm->addProgram($this->getReference(ProgramFixtures::PROGRAM_MAD_MEN));
        $manager->persist($jonHamm);
        $this->addReference(self::ACTOR_JON_HAMM, $jonHamm);

        $elisabethMoss = new Actor();
        $elisabethMoss->setName('Elisabeth Moss');
        $elisabethMoss->setSlug($slugify->slugify($elisabethMoss->getName()));
        $elisabethMoss->addProgram($this->getReference(ProgramFixtures::PROGRAM_MAD_MEN));
        $manager->persist($elisabethMoss);
        $this->addReference(self::ACTOR_ELISABETH_MOSS, $elisabethMoss);

        $manager->flush();
    }

    public function getDependencies()
    {
        return [ProgramFixtures::class];
    }
}



