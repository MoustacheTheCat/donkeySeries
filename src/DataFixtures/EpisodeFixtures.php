<?php

namespace App\DataFixtures;

use App\Entity\Episode;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Cocur\Slugify\Slugify;

class EpisodeFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $seasonsData = [
            SeasonFixtures::SEASON_1_THE_BIG_BANG_THEORY => [
                'season' => 1,
                'episodes' => [
                    ['season' => 1, 'number' => 0, 'title' => 'Unaired Pilot', 'synopsis' => "The first Pilot of what will become The Big Bang Theory. Leonard and Sheldon are two awkward scientists who share an apartment. They meet a drunk girl called Katie and invite her to stay at their place, because she has nowhere to stay. The two guys have a female friend, also a scientist, called Gilda."],
                    ['season' => 1, 'number' => 1, 'title' => 'Pilot', 'synopsis' => "A pair of socially awkward theoretical physicists meet their new neighbor Penny, who is their polar opposite."],
                    ['season' => 1, 'number' => 2, 'title' => 'The Big Bran Hypothesis', 'synopsis' => "Penny is furious with Leonard and Sheldon when they sneak into her apartment and clean it while she is sleeping."],
                    ['season' => 1, 'number' => 3, 'title' => 'The Fuzzy Boots Corollary', 'synopsis' => "Leonard gets upset when he discovers that Penny is seeing a new guy, so he tries to trick her into going on a date with him."],
                    ['season' => 1, 'number' => 4, 'title' => 'The Luminous Fish Effect', 'synopsis' => "Sheldon's mother is called to intervene when he delves into numerous obsessions after being fired for being disrespectful to his new boss."],
                    ['season' => 1, 'number' => 5, 'title' => 'The Hamburger Postulate', 'synopsis' => "Leslie seduces Leonard, but afterwards tells him that she is only interested in a one-night stand."],
                    ['season' => 1, 'number' => 6, 'title' => 'The Middle Earth Paradigm', 'synopsis' => "The guys are invited to Penny's Halloween party, where Leonard has yet another run-in with Penny's ex-boyfriend Kurt."],
                    ['season' => 1, 'number' => 7, 'title' => 'The Dumpling Paradox', 'synopsis' => "When Howard hooks up with Penny's old friend, his absence in the gang causes problems for the rest of the guys."],
                    ['season' => 1, 'number' => 8, 'title' => 'The Grasshopper Experiment', 'synopsis' => "When Raj's parents set him up on a blind date, he finds he can talk to women with the aid of alcohol."],
                    ['season' => 1, 'number' => 9, 'title' => 'The Cooper-Hofstadter Polarization', 'synopsis' => "Leonard and Sheldon's friendship is put to the test when Leonard wants to present a paper they co-authored at a physics convention, but Sheldon doesn't."],
                    ['season' => 1, 'number' => 10, 'title' => 'The Loobenfeld Decay', 'synopsis' => "Leonard lies to Penny so that he and Sheldon can get out of watching her perform. However, Sheldon believes that the lie has too many loose ends, so he comes up with a new, unnecessarily complex one to replace it."],
                    ['season' => 1, 'number' => 11, 'title' => 'The Pancake Batter Anomaly', 'synopsis' => "When Sheldon gets sick, Leonard, Howard and Raj go AWOL, leaving a reluctant Penny to deal with him."],
                    ['season' => 1, 'number' => 12, 'title' => 'The Jerusalem Duality', 'synopsis' => "Sheldon decides to give up his work and focus on other tasks when a 15-year-old prodigy joins the university, so the other guys come up with a plan to get rid of him."],
                    ['season' => 1, 'number' => 13, 'title' => 'The Bat Jar Conjecture', 'synopsis' => "Sheldon becomes so intent on demonstrating his intellectual superiority over the other guys that they kick him off the Physics Bowl team and replace him with his nemesis, Leslie."],
                    ['season' => 1, 'number' => 14, 'title' => 'The Nerdvana Annihilation', 'synopsis' => "Penny gets mad at the guys when their full scale model of a time machine causes her to miss work, which prompts Leonard to give up all of his nerd memorabilia."],
                    ['season' => 1, 'number' => 15, 'title' => 'The Pork Chop Indeterminacy', 'synopsis' => "Leonard, Howard and Raj fight over Sheldon's twin sister when she arrives in town. Raj takes part in a drug trial to suppress his selective mutism."],
                    ['season' => 1, 'number' => 16, 'title' => 'The Peanut Reaction', 'synopsis' => "When Penny learns that Leonard has never had a birthday party, she and the rest of the guys plan a surprise party for him."],
                    ['season' => 1, 'number' => 17, 'title' => 'The Tangerine Factor', 'synopsis' => "After a bad breakup, Penny finally agrees to go out on a date with Leonard, however they both develop doubts and turn to Sheldon for advice."],
                ],
            ],
            
            SeasonFixtures::SEASON_2_THE_BIG_BANG_THEORY => [
                'season' => 2,
                'episodes' => [
                    ['season' => 2, 'number' => 1, 'title' => 'The Bad Fish Paradigm', 'synopsis' => "Leonard becomes concerned when his date with Penny ends abruptly and she starts blowing him off. When told the truth, Sheldon would rather move out than keep Penny's reasons a secret from Leonard."],
                    ['season' => 2, 'number' => 2, 'title' => 'The Codpiece Topology', 'synopsis' => "Sheldon is annoyed when Leonard turns to Leslie for comfort after seeing Penny with another guy."],
                    ['season' => 2, 'number' => 3, 'title' => 'The Barbarian Sublimation', 'synopsis' => "Sheldon introduces Penny to online gaming, however she refuses to quit after becoming addicted."],
                    ['season' => 2, 'number' => 4, 'title' => 'The Griffin Equivalency', 'synopsis' => "The guys struggle to cope with Raj's arrogance after he is featured in a People magazine article."],
                    ['season' => 2, 'number' => 5, 'title' => 'The Euclid Alternative', 'synopsis' => "Sheldon annoys the gang when Leonard can't drive him to and from work, so they try to teach him how to drive."],
                    ['season' => 2, 'number' => 6, 'title' => 'The Cooper-Nowitzki Theorem', 'synopsis' => "Sheldon is flattered when a graduate student takes a shine to him, however her extreme devotion becomes too much to handle."],
                    ['season' => 2, 'number' => 7, 'title' => 'The Panty Piñata Polarization', 'synopsis' => "Penny plans revenge when Sheldon bans her from his and Leonards apartment, while Howard and Raj use the latest technology to try to find the house being used in America's Next Top Model."],
                    ['season' => 2, 'number' => 8, 'title' => 'The Lizard-Spock Expansion', 'synopsis' => "Leonard and Howard's friendship is jeopardised when Leonard steals a girl from Howard."],
                    ['season' => 2, 'number' => 9, 'title' => 'The White Asparagus Triangulation', 'synopsis' => "Sheldon believes that Leonard will wreck his relationship with Stephanie, so he decides to take matters into his own hands."],
                    ['season' => 2, 'number' => 10, 'title' => 'The Vartabedian Conundrum', 'synopsis' => "Leonard tries to slow down his relationship with Stephanie when he realizes that they are living together, while Sheldon becomes convinced that he has an untraceable disease."],
                    ['season' => 2, 'number' => 11, 'title' => 'The Bath Item Gift Hypothesis', 'synopsis' => "Leonard is disappointed when Penny develops an interest in an attractive physicist at the university. Meanwhile, Sheldon struggles to find an appropriate Christmas gift for Penny."],
                    ['season' => 2, 'number' => 12, 'title' => 'The Killer Robot Instability', 'synopsis' => "Howard becomes depressed after Penny makes a cruel statement about his love life, while the rest of the guys prepare for a grudge killer robot duel against an obnoxious colleague at the university."],
                    ['season' => 2, 'number' => 13, 'title' => 'The Friendship Algorithm', 'synopsis' => "Sheldon tries to make friends with Kripke in the hope that it will get him access to a coveted computer at the university."],
                    ['season' => 2, 'number' => 14, 'title' => 'The Financial Permeability', 'synopsis' => "Leonard and Sheldon try to help out Penny when she can't afford to pay her rent."],
                    ['season' => 2, 'number' => 15, 'title' => 'The Maternal Capacitance', 'synopsis' => "Sheldon hits it off with Leonard's psychoanalyst mother, but she drives Leonard and Penny to the bottle."],
                    ['season' => 2, 'number' => 16, 'title' => 'The Cushion Saturation', 'synopsis' => "Howard hooks up with Leslie, while Penny accidentally ruins Sheldon's spot on the couch."],
                    ['season' => 2, 'number' => 17, 'title' => 'The Terminator Decoupling', 'synopsis' => "On a train to San Francisco, Howard, Raj and Leonard fight for the affections of sci-fi star Summer Glau, while Sheldon is forced to turn to Penny for help when he leaves his flash drive behind."],
                    ['season' => 2, 'number' => 18, 'title' => 'The Work Song Nanocluster', 'synopsis' => "Sheldon's assistance with Penny's home-based business leads to chaos."],
                    ['season' => 2, 'number' => 19, 'title' => 'The Dead Hooker Juxtaposition', 'synopsis' => "Penny becomes jealous when a gorgeous new neighbor attracts the guys' attention."],
                    ['season' => 2, 'number' => 20, 'title' => 'The Hofstadter Isotope', 'synopsis' => "Leonard is upset when the owner of the comic book store goes on a date with Penny, so he convinces Howard and Raj to take him to a bar so that he can pick up a woman of his own."],
                    ['season' => 2, 'number' => 21, 'title' => 'The Vegas Renormalization', 'synopsis' => "After being dumped by Leslie, Howard heads to Las Vegas with Leonard and Raj. Meanwhile, Penny is forced to take in Sheldon after he locks himself out of his apartment."],
                    ['season' => 2, 'number' => 22, 'title' => 'The Classified Materials Turbulence', 'synopsis' => "Penny's second date with Stuart has significant implications for Leonard. Howard enlists the guys' help with one of his NASA projects."],
                    ['season' => 2, 'number' => 23, 'title' => 'The Monopolar Expedition', 'synopsis' => "Penny gets upset when she finds out Leonard and the guys plan to work at the North Pole for the summer."],
                ],
            ],
            
            SeasonFixtures::SEASON_3_THE_BIG_BANG_THEORY => [
                'season' => 3,
                'episodes' => [
                    ['season' => 3, 'number' => 1, 'title' => 'The Electric Can Opener Fluctuation', 'synopsis' => "After returning from the North Pole, a conflict among the guys sends Sheldon back to Texas and interferes with Leonard's reunion with Penny."],
                    ['season' => 3, 'number' => 2, 'title' => 'The Jiminy Conjecture', 'synopsis' => "Leonard and Penny's first night together goes awkwardly. Sheldon and Howard wager on the species of a cricket."],
                    ['season' => 3, 'number' => 3, 'title' => 'The Gothowitz Deviation', 'synopsis' => "Sheldon attempts to covertly alter Penny's habits, while Howard and Raj try their luck meeting women at a Goth-style club."],
                    ['season' => 3, 'number' => 4, 'title' => 'The Pirate Solution', 'synopsis' => "When Raj has to find a new job or be sent back to India, Sheldon's solution leaves Leonard and Penny dealing with Howard as the third wheel."],
                    ['season' => 3, 'number' => 5, 'title' => 'The Creepy Candy Coating Corollary', 'synopsis' => "Leonard is forced to ask Penny to set Howard up with one of her friends, while Sheldon seeks payback against sci-fi star Wil Wheaton."],
                    ['season' => 3, 'number' => 6, 'title' => 'The Cornhusker Vortex', 'synopsis' => "Leonard tries to learn about football to fit in with Penny's friends. Meanwhile, a loss in a kite war threatens to end Raj and Howard's friendship."],
                    ['season' => 3, 'number' => 7, 'title' => 'The Guitarist Amplification', 'synopsis' => "Sheldon is caught in the middle when Leonard and Penny argue about Penny's friend staying at her apartment."],
                    ['season' => 3, 'number' => 8, 'title' => 'The Adhesive Duck Deficiency', 'synopsis' => "Penny is forced to turn to Sheldon for help when she dislocates her shoulder in the bathtub. Meanwhile, the rest of the guys accidentally get stoned in the desert while waiting for a meteor shower."],
                    ['season' => 3, 'number' => 9, 'title' => 'The Vengeance Formulation', 'synopsis' => "Sheldon plans revenge after Kripke humiliates him on the radio. Howard develops doubts about his relationship with Bernadette."],
                    ['season' => 3, 'number' => 10, 'title' => 'The Gorilla Experiment', 'synopsis' => "Sheldon attempts to help Penny understand physics to impress Leonard, while Howard becomes jealous when Bernadette takes an interest in Leonard's research."],
                    ['season' => 3, 'number' => 11, 'title' => 'The Maternal Congruence', 'synopsis' => "Leonard's mother makes a visit to his dismay and Sheldon's delight."],
                    ['season' => 3, 'number' => 12, 'title' => 'The Psychic Vortex', 'synopsis' => "Raj talks Sheldon into being his wingman at a university mixer. Leonard has trouble dealing with Penny consulting a psychic."],
                    ['season' => 3, 'number' => 13, 'title' => 'The Bozeman Reaction', 'synopsis' => "When their apartment is robbed, Leonard and Sheldon turn to Howard and Raj to create a state-of-the-art security system."],
                    ['season' => 3, 'number' => 14, 'title' => 'The Einstein Approximation', 'synopsis' => "Sheldon wreaks havoc when he is stumped by a difficult physics question."],
                    ['season' => 3, 'number' => 15, 'title' => 'The Large Hadron Collision', 'synopsis' => "When Leonard is offered a trip to Switzerland on Valentine's Day to visit the CERN laboratory, Sheldon uses any and all means to be his guest instead of Penny."],
                    ['season' => 3, 'number' => 16, 'title' => 'The Excelsior Acquisition', 'synopsis' => "Sheldon misses an opportunity to get Stan Lee's autograph because he has to make an appearance in traffic court."],
                    ['season' => 3, 'number' => 17, 'title' => 'The Precious Fragmentation', 'synopsis' => "The guys' friendship is threatened when they find a ring from the Lord of the Rings trilogy."],
                    ['season' => 3, 'number' => 18, 'title' => 'The Pants Alternative', 'synopsis' => "Sheldon seeks help from the rest of the gang in overcoming his fear of public speaking when he receives an award."],
                    ['season' => 3, 'number' => 19, 'title' => 'The Wheaton Recurrence', 'synopsis' => "Sheldon takes on Wil Wheaton in a game of bowling. Leonard and Penny's relationship comes to a crossroad."],
                    ['season' => 3, 'number' => 20, 'title' => 'The Spaghetti Catalyst', 'synopsis' => "Sheldon is forced to go behind Leonard's back to spend time with Penny following their breakup."],
                    ['season' => 3, 'number' => 21, 'title' => 'The Plimpton Stimulation', 'synopsis' => "Chaos ensues when a nymphomaniac physicist visiting Sheldon hooks up with Leonard."],
                    ['season' => 3, 'number' => 22, 'title' => 'The Staircase Implementation', 'synopsis' => "Leonard tells Penny about how he and Sheldon became roommates and what happened to the elevator."],
                    ['season' => 3, 'number' => 23, 'title' => 'The Lunar Excitation', 'synopsis' => "Penny has a night of angry, drunken sex with Leonard, much to his confusion. Meanwhile, Howard and Raj search for Sheldon's perfect match online."],
                ],
            ],
            
            SeasonFixtures::SEASON_4_THE_BIG_BANG_THEORY => [
                'season' => 4,
                'episodes' => [
                    ['season' => 4, 'number' => 1, 'title' => 'The Robotic Manipulation', 'synopsis' => "Penny ends up tagging along on Sheldon's first ever date with Amy, while Howard finds an unusual use for a robotic arm."],
                    ['season' => 4, 'number' => 2, 'title' => 'The Cruciferous Vegetable Amplification', 'synopsis' => "When Sheldon calculates the technology to download his consciousness into a robot won't be invented soon enough, he desperately tries to find a way to increase his lifespan."],
                    ['season' => 4, 'number' => 3, 'title' => 'The Zazzy Substitution', 'synopsis' => "Following his 'breakup' with Amy, the gang become concerned with Sheldon's obsessive search for non-human companionship and call his mother to intervene."],
                    ['season' => 4, 'number' => 4, 'title' => 'The Hot Troll Deviation', 'synopsis' => "Howard tries to get Penny's help in winning back Bernadette, but first has to confess the embarrassing reason why they broke up in the first place. Raj and Sheldon clash over a desk."],
                    ['season' => 4, 'number' => 5, 'title' => 'The Desperation Emanation', 'synopsis' => "Sheldon is scared that he is in a relationship when Amy asks him to meet her mother, and Leonard asks Howard and Bernadette to set him up because he is the only person in the group without a girlfriend."],
                    ['season' => 4, 'number' => 6, 'title' => 'The Irish Pub Formulation', 'synopsis' => "Leonard tries to keep everyone from finding out that he spent the night with Raj's sister, but Sheldon finds out and concocts an elaborate story to help him keep the secret from Raj."],
                    ['season' => 4, 'number' => 7, 'title' => 'The Apology Insufficiency', 'synopsis' => "An FBI agent interviews the guys when Howard needs to obtain a security clearance."],
                    ['season' => 4, 'number' => 8, 'title' => 'The 21-Second Excitation', 'synopsis' => "The guys camp out all night waiting to see an extended cut of Indiana Jones, while Amy joins in on girls' night with Penny and Bernadette."],
                    ['season' => 4, 'number' => 9, 'title' => 'The Boyfriend Complexity', 'synopsis' => "Penny asks Leonard to pose as her boyfriend when her father visits. Howard, Raj and Bernadette have an awkward encounter when they spend the evening together."],
                    ['season' => 4, 'number' => 10, 'title' => 'The Alien Parasite Hypothesis', 'synopsis' => "Amy finds she has sexual feelings for Penny's ex-boyfriend Zack, while Raj and Howard try to prove who would be the better superhero."],
                    ['season' => 4, 'number' => 11, 'title' => 'The Justice League Recombination', 'synopsis' => "The guys enter a costume contest as members of the Justice League and convince Penny and Zack to join them."],
                    ['season' => 4, 'number' => 12, 'title' => 'The Bus Pants Utilization', 'synopsis' => "Leonard has an idea for a new smartphone app and asks the guys for help, however Sheldon tries to take over the project, and Leonard fires him."],
                    ['season' => 4, 'number' => 13, 'title' => 'The Love Car Displacement', 'synopsis' => "Chaos ensues when the gang spend the weekend together at a science convention."],
                    ['season' => 4, 'number' => 14, 'title' => 'The Thespian Catalyst', 'synopsis' => "To improve his skills as an instructor, Sheldon asks Penny to give him acting lessons. Meanwhile, Raj begins having impure fantasies about Bernadette."],
                    ['season' => 4, 'number' => 15, 'title' => 'The Benefactor Factor', 'synopsis' => "To secure needed funding for the university, Sheldon convinces Leonard to get friendly with a wealthy benefactor."],
                    ['season' => 4, 'number' => 16, 'title' => 'The Cohabitation Formulation', 'synopsis' => "Bernadette makes Howard choose between herself and his mother, while Penny and Raj become upset when Priya returns to town and resumes her relationship with Leonard."],
                    ['season' => 4, 'number' => 17, 'title' => 'The Toast Derivation', 'synopsis' => "Sheldon becomes concerned when everybody begins to hang out at Raj's apartment and discovers Leonard is the center of the group."],
                    ['season' => 4, 'number' => 18, 'title' => 'The Prestidigitation Approximation', 'synopsis' => "Priya forces Leonard to choose between a relationship with her or a friendship with Penny. A magic trick by Howard has Sheldon fooled."],
                    ['season' => 4, 'number' => 19, 'title' => 'The Zarnecki Incursion', 'synopsis' => "The guys go all out to help Sheldon find the person responsible for hacking his online gaming account, while the girls' hatred for Priya increases."],
                    ['season' => 4, 'number' => 20, 'title' => 'The Herb Garden Germination', 'synopsis' => "Sheldon and Amy secretly experiment on the gang by spreading rumors when they hear that Bernadette is thinking about breaking up with Howard."],
                    ['season' => 4, 'number' => 21, 'title' => 'The Agreement Dissection', 'synopsis' => "When Priya finds a loophole in the roommate agreement to throw Sheldon out for the night, Penny, Amy and Bernadette take him to a nightclub."],
                    ['season' => 4, 'number' => 22, 'title' => 'The Wildebeest Implementation', 'synopsis' => "Sheldon invents a three-player chess game, Penny and Amy use Bernadette to spy on Leonard and Priya, and Raj tries a new drug to treat his social anxiety."],
                    ['season' => 4, 'number' => 23, 'title' => 'The Engagement Reaction', 'synopsis' => "Howard believes that his mom suffered a heart attack because he told her that he's marrying Bernadette, Sheldon freaks out over germs, and Penny and Priya compare notes on Leonard."],
                    ['season' => 4, 'number' => 24, 'title' => 'The Roommate Transmogrification', 'synopsis' => "Raj moves in with Sheldon after hearing Leonard and Priya engage in a Star Trek fantasy in his apartment. Bernadette receives her doctorate."],
                ],
            ],
            
            SeasonFixtures::SEASON_5_THE_BIG_BANG_THEORY => [
                'season' => 5,
                'episodes' => [
                    ['season' => 5, 'number' => 1, 'title' => 'The Skank Reflex Analysis', 'synopsis' => "The gang deal with the fallout from Penny and Raj's night together."],
                    ['season' => 5, 'number' => 2, 'title' => 'The Infestation Hypothesis', 'synopsis' => "Amy gets inadvertently caught in the middle of a fight between Sheldon and Penny over a chair. Leonard tries to add some spice to his long-distance relationship with Priya."],
                    ['season' => 5, 'number' => 3, 'title' => 'The Pulled Groin Extrapolation', 'synopsis' => "Leonard accompanies Amy to a colleague's wedding. Howard tries to convince Bernadette to live with his mother after they get married."],
                    ['season' => 5, 'number' => 4, 'title' => 'The Wiggly Finger Catalyst', 'synopsis' => "Penny sets up Raj with a deaf friend, not knowing that she's actually a gold digger, and Sheldon decides to let his minor decisions rest on the roll of the dice."],
                    ['season' => 5, 'number' => 5, 'title' => 'The Russian Rocket Reaction', 'synopsis' => "Sheldon takes offense when Leonard wants to attend a party with Wil Wheaton, while Bernadette tries to block Howard's opportunity to go into outer space."],
                    ['season' => 5,'number' => 6,'title' => 'The Rhinitis Revelation','synopsis' => 'Sheldon gets upset when his mother comes to visit but refuses to cook for him and attend physics lectures.'],
                    ['season' => 5,'number' => 7,'title' => 'The Good Guy Fluctuation','synopsis' => "Sheldon tries to get into the spirit of Halloween by trying to scare the guys after they prank him. Leonard seeks Penny's advice when an attractive comic book artist takes an interest in him."],
                    ['season' => 5,'number' => 8,'title' => 'The Isolation Permutation','synopsis' => 'Amy is hurt when Penny and Bernadette go bridesmaid dress shopping without her, so she turns to a reluctant Sheldon for comfort.'],
                    ['season' => 5, 'number' => 9, 'title' => 'The Ornithophobia Diffusion', 'synopsis' => "Sheldon tries to overcome his fear of birds, while Leonard and Penny attempt to hang out together strictly as friends."],
                    ['season' => 5, 'number' => 10, 'title' => 'The Flaming Spittoon Acquisition', 'synopsis' => "When Stuart asks Amy on a date, Sheldon considers having a more serious relationship with her. Meanwhile, the guys become obsessed with a new card game involving Wild West heroes and witches."],
                    ['season' => 5, 'number' => 11, 'title' => 'The Speckerman Recurrence', 'synopsis' => "Leonard confronts the man who bullied him in high school, while Penny realizes she did her fair share of tormenting in the past."],
                    ['season' => 5, 'number' => 12, 'title' => 'The Shiny Trinket Maneuver', 'synopsis' => "Penny helps Sheldon work on his relationship with Amy when he trivializes one of her accomplishments. Howard is irked by Bernadette's dislike of children."],
                    ['season' => 5, 'number' => 13, 'title' => 'The Recombination Hypothesis', 'synopsis' => "Leonard and Penny contemplate reviving their romantic relationship."],
                    ['season' => 5, 'number' => 14, 'title' => 'The Beta Test Initiation', 'synopsis' => "Leonard and Penny develop a system to ensure their dates go smoothly. Raj finally finds a woman he can talk to - the virtual assistant on his mobile phone."],
                    ['season' => 5, 'number' => 15, 'title' => 'The Friendship Contraction', 'synopsis' => "Leonard signs out of his roommate agreement, reducing himself and Sheldon to mere acquaintances, while Howard tries to think of a cool astronaut nickname for himself."],
                    ['season' => 5, 'number' => 16, 'title' => 'The Vacation Solution', 'synopsis' => "When the university forces Sheldon to use vacation days, he decides to hang out in Amy's lab. Howard becomes upset when he hears Bernadette wants him to sign a prenuptial agreement."],
                    ['season' => 5, 'number' => 17, 'title' => 'The Rothman Disintegration', 'synopsis' => "Sheldon battles Kripke for a coveted office at the university. Penny receives a very unusual gift from Amy."],
                    ['season' => 5, 'number' => 18, 'title' => 'The Werewolf Transformation', 'synopsis' => "Sheldon wreaks havoc when he tries to get a haircut from his regular barber, who is ill. Howard runs into a few problems with astronaut training."],
                    ['season' => 5, 'number' => 19, 'title' => 'The Weekend Vortex', 'synopsis' => "Sheldon has to choose between joining Amy at her aunt's birthday party or playing videogames all weekend with the guys."],
                    ['season' => 5, 'number' => 20, 'title' => 'The Transporter Malfunction', 'synopsis' => "Raj gets quite a surprise when he asks his parents to set him up on a date. Penny buys Leonard and Sheldon a pair of Star Trek keepsake collectibles."],
                    ['season' => 5, 'number' => 21, 'title' => 'The Hawking Excitation', 'synopsis' => "Sheldon uses any and all means to meet his hero, Dr. Stephen Hawking."],
                    ['season' => 5, 'number' => 22, 'title' => 'The Stag Convergence', 'synopsis' => "The guys throw Howard a bachelor party, and some embarrassing details about his life get posted on the Internet."],
                    ['season' => 5, 'number' => 23, 'title' => 'The Launch Acceleration', 'synopsis' => "NASA cancel, and later reinstate Howard's mission into space, coinciding with his wedding. Leonard inadvertently jeopardizes his relationship with Penny."],
                    ['season' => 5, 'number' => 24, 'title' => 'The Countdown Reflection', 'synopsis' => " As Howard prepares for his mission into space, flashbacks show the recent events leading up to his and Bernadette's wedding. "]
                ],
            ],
            
            SeasonFixtures::SEASON_6_THE_BIG_BANG_THEORY => [
                'season' => 6,
                'episodes' => [
                    ['season' => 6, 'number' => 1, 'title' => 'The Date Night Variable', 'synopsis' => "Raj crashes Sheldon and Amy's second anniversary and interferes in Leonard and Penny's relationship. Howard gets caught in the middle of an argument between Bernadette and his mother."],
                    ['season' => 6, 'number' => 2, 'title' => 'The Decoupling Fluctuation', 'synopsis' => "Penny continues to have doubts about her relationship with Leonard. Meanwhile, Howard becomes the target of practical jokes on the space station."],
                    ['season' => 6, 'number' => 3, 'title' => 'The Higgs Boson Observation', 'synopsis' => "When Sheldon hires a female grad student to assist him, a jealous Amy asks Penny to help her spy on them. On the space station, Howard begins behaving erratically."],
                    ['season' => 6, 'number' => 4, 'title' => 'The Re-Entry Minimization', 'synopsis' => "Howard is offended when his return from space is met with little fanfare. Penny and Amy take on Sheldon and Leonard during game night."],
                    ['season' => 6, 'number' => 5, 'title' => 'The Holographic Excitation', 'synopsis' => "While Raj plans Stuart's Halloween party at the comic book store, Howard annoys the rest of the gang by constantly talking about space, and Penny tries to take more of an interest in Leonard's work."],
                    ['season' => 6, 'number' => 6, 'title' => 'The Extract Obliteration', 'synopsis' => "Penny enrolls in a college class and keeps it a secret from Leonard. Sheldon causes conflict with Dr. Stephen Hawking over an online game."],
                    ['season' => 6, 'number' => 7, 'title' => 'The Habitation Configuration', 'synopsis' => "Howard makes a decision whether or not to move out of his mother's house, while Sheldon is caught in the middle of an argument between Amy and Wil Wheaton."],
                    ['season' => 6, 'number' => 8, 'title' => 'The 43 Peculiarity', 'synopsis' => "Leonard feels threatened after hearing about Penny's study partner at school, while Howard and Raj become determined to find out one of Sheldon's secrets."],
                    ['season' => 6, 'number' => 9, 'title' => 'The Parking Spot Escalation', 'synopsis' => "The gang are drawn into a fight between Howard and Sheldon over Sheldon's vacant parking spot at the university."],
                    ['season' => 6, 'number' => 10, 'title' => 'The Fish Guts Displacement', 'synopsis' => "Howard tries to bond with Bernadette's father during a fishing trip. When Sheldon is obligated to take care of a sick Amy, she finds ways to take advantage of the situation."],
                    ['season' => 6, 'number' => 11, 'title' => 'The Santa Simulation', 'synopsis' => "The girls take Raj out to a nightclub to find him a date. A game of Dungeons and Dragons rekindle old memories of Santa for Sheldon."],
                    ['season' => 6, 'number' => 12, 'title' => 'The Egg Salad Equivalency', 'synopsis' => "When Penny finds out Alex has a crush on Leonard, Sheldon gets himself and the rest of the guys in trouble with Human Resources whilst trying to solve the problem."],
                    ['season' => 6, 'number' => 13, 'title' => 'The Bakersfield Expedition', 'synopsis' => "The guys are stranded in the middle of nowhere when Leonard's car is stolen on the way to the Bakersfield Comic-Con. Back home, the girls try to figure out why the guys are so fascinated with comic books."],
                    ['season' => 6, 'number' => 14, 'title' => 'The Cooper/Kripke Inversion', 'synopsis' => "Sheldon is forced to work with Kripke on a project and must concoct an elaborate lie when he can't hold up his end of the work. Howard and Raj get superhero figurines made of themselves."],
                    ['season' => 6, 'number' => 15, 'title' => 'The Spoiler Alert Segmentation', 'synopsis' => "Leonard moves in with Penny after a fight with Sheldon, which causes Amy to want to move in with Sheldon. Meanwhile, Raj has a frightening experience with Howard's mother."],
                    ['season' => 6, 'number' => 16, 'title' => 'The Tangible Affection Proof', 'synopsis' => "Sheldon gets Alex to buy a Valentine's Day gift for Amy. Leonard, Penny, Howard and Bernadette have a disastrous dinner together. Raj and Stuart host a 'Lonely People party' at the comic book store."],
                    ['season' => 6, 'number' => 17, 'title' => 'The Monster Isolation', 'synopsis' => "Raj falls apart after his date sneaks out on him, and Sheldon reluctantly returns the favor after Penny helps him out with his 'Fun With Flags' program."],
                    ['season' => 6, 'number' => 18, 'title' => 'The Contractual Obligation Implementation', 'synopsis' => "Leonard, Sheldon and Howard give lectures on science to junior high students. The girls ditch work to go to Disneyland. Raj devises a date for Lucy that fixes their social anxiety problems."],
                    ['season' => 6, 'number' => 19, 'title' => 'The Closet Reconfiguration', 'synopsis' => "Howard becomes upset when Sheldon finds a letter from his estranged father whilst cleaning out his and Bernadette's closet."],
                    ['season' => 6, 'number' => 20, 'title' => 'The Tenure Turbulence', 'synopsis' => "Leonard, Sheldon, Raj and Kripke battle for tenure at the university."],
                    ['season' => 6, 'number' => 21, 'title' => 'The Closure Alternative', 'synopsis' => "Amy tries to help a depressed Sheldon find closure when one of his favorite TV shows is canceled. Raj becomes paranoid when he finds Lucy's blog."],
                    ['season' => 6, 'number' => 22, 'title' => 'The Proton Resurgence', 'synopsis' => "Bernadette and Howard offer to watch Raj's dog and live to regret it. Leonard and Sheldon hire their favorite childhood star to make an appearance."],
                    ['season' => 6, 'number' => 23, 'title' => 'The Love Spell Potential', 'synopsis' => "A date between Raj and Lucy takes both of them out of their comfort zones. After a trip to Las Vegas goes awry, the girls join in on a Dungeons and Dragons game, which causes Amy and Sheldon to re-evaluate their relationship."],
                    ['season' => 6, 'number' => 24, 'title' => 'The Bon Voyage Reaction', 'synopsis' => "Penny is thrown for a loop when Leonard is offered a job overseas, but the news is an even bigger shock to Sheldon. Raj and Lucy's relationship comes to a crossroad."],
                ],
            ],
            
            SeasonFixtures::SEASON_7_THE_BIG_BANG_THEORY => [
                'season' => 7,
                'episodes' => [
                    ['season' => 7, 'number' => 1, 'title' => 'The Hofstadter Insufficiency', 'synopsis' => "Sheldon and Penny bond over missing Leonard. Howard tries to help Raj get over his breakup with Lucy. Amy and Bernadette take a trip together to a biology convention."],
                    ['season' => 7, 'number' => 2, 'title' => 'The Deception Verification', 'synopsis' => "Sheldon feels betrayed when Leonard returns from the North Sea and wants to spend his time with Penny instead of him. Howard's latest foray into helping his mother has some disastrous side effects."],
                    ['season' => 7, 'number' => 3, 'title' => 'The Scavenger Vortex', 'synopsis' => "The gang get competitive when they are forced to take part in Raj's scavenger hunt."],
                    ['season' => 7, 'number' => 4, 'title' => 'The Raiders Minimization', 'synopsis' => "Sheldon gets mad at Amy for ruining one of his favorite movies, Raj and Stuart try to make their online dating profiles more appealing, and Leonard tries to play the sympathy card with Penny."],
                    ['season' => 7, 'number' => 5, 'title' => 'The Workplace Proximity', 'synopsis' => "After a fight with Bernadette, Howard ends up on Raj's couch. Sheldon and Amy clash when Amy takes a job at the university."],
                    ['season' => 7, 'number' => 6, 'title' => 'The Romance Resonance', 'synopsis' => "Howard plans something special to celebrate the anniversary of his first date with Bernadette. Sheldon is conflicted when he makes a major scientific breakthrough but some details have to be corrected."],
                    ['season' => 7, 'number' => 7, 'title' => 'The Proton Displacement', 'synopsis' => "Sheldon seeks payback when Arthur 'Professor Proton' Jeffries asks Leonard for help on a project instead of him. Raj gets upset at Howard for crashing his night with the girls."],
                    ['season' => 7, 'number' => 8, 'title' => 'The Itchy Brain Simulation', 'synopsis' => "Sheldon demands Leonard make up for a mistake from their past. Penny confronts Raj's ex-girlfriend, Lucy."],
                    ['season' => 7, 'number' => 9, 'title' => 'The Thanksgiving Decoupling', 'synopsis' => "The gang spend Thanksgiving at Mrs. Wolowitz's house. Howard tries to bond with his father-in-law, and a mistake from Penny's past comes back to haunt her."],
                    ['season' => 7, 'number' => 10, 'title' => 'The Discovery Dissipation', 'synopsis' => "Leonard has to deal with the fallout of disproving Sheldon's new scientific discovery. Raj spends a week at Howard and Bernadette's apartment."],
                    ['season' => 7, 'number' => 11, 'title' => 'The Cooper Extraction', 'synopsis' => "While Sheldon is at home in Texas, the rest of the gang decorate for Christmas and think about how much he has affected their lives."],
                    ['season' => 7, 'number' => 12, 'title' => 'The Hesitation Ramification', 'synopsis' => "After Leonard tries to help Penny following a failed role on a TV show, she makes an important decision. Meanwhile, Raj and Stuart try to practice their social skills, and Sheldon navigates the intricacies of being funny."],
                    ['season' => 7, 'number' => 13, 'title' => 'The Occupation Recalibration', 'synopsis' => "Sheldon tries to relax after he is forced to take a vacation. Leonard struggles to be supportive of Penny after she quits her job. Amy receives unwanted attention from a co-worker. Bernadette seeks Stuart's help in replacing one of Howard's comic books."],
                    ['season' => 7, 'number' => 14, 'title' => 'The Convention Conundrum', 'synopsis' => "When the guys can't get hold of any Comic-Con tickets, Sheldon tries to hold his own convention and ends up spending a wild night with James Earl Jones. Meanwhile, the girls try to feel more mature by going to a fancy hotel for tea."],
                    ['season' => 7, 'number' => 15, 'title' => 'The Locomotive Manipulation', 'synopsis' => 'Sheldon and Amy take a train ride to Napa Valley with Howard and Bernadette on Valentine\'s Day. Leonard and Penny take Raj\'s dog to the vet when she accidentally eats some chocolate.'],
                    ['season' => 7, 'number' => 16, 'title' => 'The Table Polarization', 'synopsis' => 'Leonard\'s purchase of a dining room table causes Sheldon to reevaluate the changes in his life. Meanwhile, Howard is offered a chance to go back to space and Bernadette struggles with whether or not to encourage him.'],
                    ['season' => 7, 'number' => 17, 'title' => 'The Friendship Turbulence', 'synopsis' => 'After arguing with Sheldon, Howard tries to make amends by taking him to NASA headquarters in Houston. Penny has second thoughts about quitting her waitressing job when her car dies. Amy gets involved in trying to find Raj a date.'],
                    ['season' => 7, 'number' => 18, 'title' => 'The Mommy Observation', 'synopsis' => 'When Sheldon visits his mother in Houston, he is forced to confront a new reality. Back in Pasadena, the rest of the gang reluctantly take part in Raj\'s Murder Mystery party.'],
                    ['season' => 7, 'number' => 19, 'title' => 'The Indecision Amalgamation', 'synopsis' => 'While Raj is wracked with guilt when he tries to date Lucy and Emily at the same time, Penny wrestles with whether to take a role in a cheesy movie and Sheldon is torn trying to choose between two gaming systems.'],
                    ['season' => 7, 'number' => 20, 'title' => 'The Relationship Diremption', 'synopsis' => 'Penny tries to help Sheldon when he reconsiders his \'relationship\' with String Theory. During a dinner with Howard and Bernadette, Raj discovers Howard once embarrassed himself on a date with Emily.'],
                    ['season' => 7, 'number' => 21, 'title' => 'The Anything Can Happen Recurrence', 'synopsis' => 'When Sheldon tries to be spontaneous, it leads to unexpected friction between the girls. Meanwhile, Raj seeks Howard\'s help in preparing for a date with Emily.'],
                    ['season' => 7, 'number' => 22, 'title' => 'The Proton Transmogrification', 'synopsis' => 'As the gang celebrate Star Wars Day, Sheldon has difficulty dealing with the recent death of Arthur \'Professor Proton\' Jeffries.'],
                    ['season' => 7, 'number' => 23, 'title' => 'The Gorilla Dissolution', 'synopsis' => 'Penny gets fired from her movie and takes a serious look at her life. Raj sees Emily on a date with another man at the movies. Howard and Bernadette have to take care of his mother after she breaks her leg.'],
                    ['season' => 7, 'number' => 24, 'title' => 'The Status Quo Combustion', 'synopsis' => 'Sheldon gets upset about his career, the destruction of the comic book store and Leonard and Penny\'s future living arrangements. Howard and Bernadette struggle to keep hold of a caregiver for Mrs. Wolowitz.']
                ],
            ],
            
            SeasonFixtures::SEASON_8_THE_BIG_BANG_THEORY => [
                'season' => 8,
                'episodes' => [
                    ['season' => 8, 'number' => 1, 'title' => 'The Locomotion Interruption', 'synopsis' => 'Sheldon\'s trip comes to an end when he is robbed, Penny interviews for a job at Bernadette\'s company, and Howard is weirded out by his mother\'s relationship with Stuart.'],
                    ['season' => 8, 'number' => 2, 'title' => 'The Junior Professor Solution', 'synopsis' => 'Sheldon is forced to teach a class as a Junior Professor. Meanwhile, Amy plays both sides when tension arises between Penny and Bernadette.'],
                    ['season' => 8, 'number' => 3, 'title' => 'The First Pitch Insufficiency', 'synopsis' => 'Howard becomes nervous after NASA asks him to throw out the first pitch at a Los Angeles Angels game. Meanwhile, Leonard and Penny try to prove Sheldon wrong when he says that he and Amy have a "superior" relationship.'],
                    ['season' => 8, 'number' => 4, 'title' => 'The Hook-up Reverberation', 'synopsis' => 'Raj\'s honesty about his past comes back to haunt him after Emily takes a dislike to Penny. Meanwhile, the guys consider investing in the comic book store.'],
                    ['season' => 8, 'number' => 5, 'title' => 'The Focus Attenuation', 'synopsis' => 'The girls head to Las Vegas, while the guys try to invent something cool, but only come up with new ways to procrastinate.'],
                    ['season' => 8, 'number' => 6, 'title' => 'The Expedition Approximation', 'synopsis' => 'Sheldon and Raj test whether they could survive a dark-matter research expedition in a salt mine by simulating the conditions in a steam tunnel. Meanwhile, Leonard and Penny seek advice from Howard and Bernadette when they argue about money.'],
                    ['season' => 8, 'number' => 7, 'title' => 'The Misinterpretation Agitation', 'synopsis' => 'The guys befriend one of Penny\'s clients when he shows up at her apartment. Meanwhile, Bernadette gets upset when Amy torpedoes an article about her for a local magazine.'],
                    ['season' => 8, 'number' => 8, 'title' => 'The Prom Equivalency', 'synopsis' => 'The girls decide to re-enact their high school proms with the guys. While Sheldon feels under pressure to commit to his relationship with Amy, Howard worries about who Stuart will bring as his date.'],
                    ['season' => 8, 'number' => 9, 'title' => 'The Septum Deviation', 'synopsis' => 'Sheldon panics when Leonard announces he has to go into the hospital for surgery. Raj discovers his parents have divorced.'],
                    ['season' => 8, 'number' => 10, 'title' => 'The Champagne Reflection', 'synopsis' => 'While Sheldon retires "Fun With Flags", Leonard, Howard and Raj look for something significant in a dead professor\'s research, and Bernadette finds out what her colleagues really think of her.'],
                    ['season' => 8, 'number' => 11, 'title' => 'The Clean Room Infiltration', 'synopsis' => 'Amy hosts a traditional Victorian Christmas Eve dinner as Raj\'s father comes to visit, while the guys try to shoo out a bird they let into the university clean room.'],
                    ['season' => 8, 'number' => 12, 'title' => 'The Space Probe Disintegration', 'synopsis' => 'Raj worries a probe he designed will not work in outer space, while Leonard and Sheldon go shopping with Penny and Amy.'],
                    ['season' => 8, 'number' => 13, 'title' => 'The Anxiety Optimization', 'synopsis' => 'When Sheldon becomes stuck in a rut with his work, the gang try to help him by raising his stress levels. Howard teases Raj with a game called "Emily or Cinnamon."'],
                    ['season' => 8, 'number' => 14, 'title' => 'The Troll Manifestation', 'synopsis' => 'Leonard and Sheldon defend themselves against criticism from an online bully, while the girls confront embarrassing moments from their pasts.'],
                    ['season' => 8, 'number' => 15, 'title' => 'The Comic Book Store Regeneration', 'synopsis' => 'Howard receives some shocking news as everyone prepares for the re-opening of the comic book store. Meanwhile, Penny tries to teach Sheldon how to "let it go," but can\'t follow her own advice when she learns something infuriating about Amy.'],
                    ['season' => 8, 'number' => 16, 'title' => 'The Intimacy Acceleration', 'synopsis' => 'As a joke, Sheldon and Penny try an experiment designed to make participants fall in love. Howard and Bernadette get into a fight when Howard buys a new car without consulting her.'],
                    ['season' => 8, 'number' => 17, 'title' => 'The Colonization Application', 'synopsis' => 'A trip to the pet store ends in a fight after Amy learns Sheldon has applied for a one-way mission to colonize Mars. Meanwhile, Leonard surprises Penny with a very "adult" purchase, and Raj gets into trouble when he snoops around Emily\'s apartment.'],
                    ['season' => 8, 'number' => 18, 'title' => 'The Leftover Thermalization', 'synopsis' => 'Tension arises when a magazine fails to mention Leonard in an article about the paper he co-wrote with Sheldon, and a blackout at Mrs. Wolowitz\'s home leads to a final family dinner in her honor.'],
                    ['season' => 8, 'number' => 19, 'title' => 'The Skywalker Incursion', 'synopsis' => 'When Leonard and Sheldon are invited to speak at UC Berkeley, they take a detour to try and meet one of their idols. Meanwhile, while cleaning out Mrs. Wolowitz\'s house, a ping pong battle ensues when Howard and Bernadette argue over the fate of his TARDIS.'],
                    ['season' => 8, 'number' => 20, 'title' => 'The Fortification Implementation', 'synopsis' => 'Howard meets the half-brother he never knew he had. Penny is invited to appear on Wil Wheaton\'s podcast.'],
                    ['season' => 8, 'number' => 21, 'title' => 'The Communication Deterioration', 'synopsis' => 'When Raj is asked to create a message on the off chance a NASA mission discovers alien life, the guys fight over what he should do, while Penny contemplates returning to acting.'],
                    ['season' => 8, 'number' => 22, 'title' => 'The Graduation Transmission', 'synopsis' => 'Howard questions his engineering abilities when he and Sheldon can\'t get a toy drone to fly. A cancelled flight nearly prevents Leonard from giving the commencement address at his former high school. Raj pits his parents against each other when his father cuts him off financially.'],
                    ['season' => 8, 'number' => 23, 'title' => 'The Maternal Combustion', 'synopsis' => 'Personalities collide when Leonard and Sheldon\'s mothers meet for the first time. Bernadette reaches her limit with Howard and Stuart.'],
                    ['season' => 8, 'number' => 24, 'title' => 'The Commitment Determination', 'synopsis' => 'As Sheldon presses Leonard and Penny to set a wedding date, he encounters major changes in his relationship with Amy. Meanwhile, Raj wonders if he should break up with Emily, and Howard and Bernadette struggle to ask Stuart to move out.'],
                ],
            ],
            
            SeasonFixtures::SEASON_9_THE_BIG_BANG_THEORY => [
                'season' => 9,
                'episodes' => [
                    ['season' => 9, 'number' => 1, 'title' => 'The Matrimonial Momentum', 'synopsis' => 'Penny struggles with Leonard\'s confession that he kissed another woman as they prepare to get married in Las Vegas. Meanwhile, Sheldon doesn\'t know what to do after Amy pushes pause on their relationship.'],
                    ['season' => 9, 'number' => 2, 'title' => 'The Separation Oscillation', 'synopsis' => 'Leonard and Penny try to work through their marital issues. Meanwhile, Sheldon films a special episode of \'Fun with Flag\' after his breakup with Amy, and Bernadette feels guilty about withholding a secret from Penny.'],
                    ['season' => 9, 'number' => 3, 'title' => 'The Bachelor Party Corrosion', 'synopsis' => 'The guys\' skills are put to the test when they get a flat tire on the way to Mexico for Leonard\'s bachelor party. The girls throw Penny a mini-bachelorette party.'],
                    ['season' => 9, 'number' => 4, 'title' => 'The 2003 Approximation', 'synopsis' => 'An impending change to his living arrangements inspires Sheldon to revert to 2003, before he met Penny and Leonard. Raj and Howard form a band for the comic book store.'],
                    ['season' => 9, 'number' => 5, 'title' => 'The Perspiration Implementation', 'synopsis' => 'Kripke expresses interest in Amy while leading a fencing lesson for the guys. Meanwhile, Stuart seeks help from the girls in getting more women interested in the comic book store.'],
                    ['season' => 9, 'number' => 6, 'title' => 'The Helium Insufficiency', 'synopsis' => 'Leonard and Sheldon go to great lengths to secure the helium they need during a nation-wide shortage. Meanwhile, the rest of the gang try to find Amy a new boyfriend on a dating app.'],
                    ['season' => 9, 'number' => 7, 'title' => 'The Spock Resonance', 'synopsis' => 'While being interviewed for a documentary about Spock from Star Trek (1966), Sheldon struggles to suppress his emotions about his recent break-up from Amy. Meanwhile, Howard and Bernadette butt heads over renovating his mother\'s house.'],
                    ['season' => 9, 'number' => 8, 'title' => 'The Mystery Date Observation', 'synopsis' => 'Sheldon, Howard and Raj post an ad online to find a new girlfriend for Sheldon. Penny and Bernadette decide to spy when Amy is secretive about who she is dating.'],
                    ['season' => 9, 'number' => 9, 'title' => 'The Platonic Permutation', 'synopsis' => 'On Thanksgiving, Sheldon and Amy try to spend time together as friends and go to an aquarium, Howard reluctantly agrees to volunteer at the soup kitchen with Bernadette, Raj and Emily, and Penny discovers that Leonard knows more about her than she thought.'],
                    ['season' => 9, 'number' => 10, 'title' => 'The Earworm Reverberation', 'synopsis' => 'Sheldon has a revelation when he realizes why a song was stuck in his head. Meanwhile, Amy invites Dave over for dinner despite their previously awkward date, and Howard and Raj become obsessed with a fan of their band.'],
                    ['season' => 9, 'number' => 11, 'title' => 'The Opening Night Excitation', 'synopsis' => 'Leonard, Howard and Raj have to decide who will take their extra Star Wars movie ticket, while Sheldon plans something special for Amy\'s birthday.'],
                    ['season' => 9, 'number' => 12, 'title' => 'The Sales Call Sublimation', 'synopsis' => 'Penny gets more than she bargained for when Leonard agrees to meet with a psychiatrist on her behalf to make a sale. Meanwhile, Sheldon and Raj collaborate on an astronomical discovery, and Howard and Bernadette\'s happiness is short-lived after Stuart moves out.'],
                    ['season' => 9, 'number' => 13, 'title' => 'The Empathy Optimization', 'synopsis' => 'After being forced to deal with a sick Sheldon, the rest of the gang try to treat themselves to a Sheldon-free weekend.'],
                    ['season' => 9, 'number' => 14, 'title' => 'The Meemaw Materialization', 'synopsis' => 'Sheldon is thrilled when his Meemaw comes to visit, but his excitement quickly fades when she butts heads with Amy. Meanwhile, Raj meets a girl at the comic book store who makes him question his relationship with Emily.'],
                    ['season' => 9, 'number' => 15, 'title' => 'The Valentino Submergence', 'synopsis' => 'Sheldon and Amy host a Valentine\'s Day episode of \'Fun with Flags\', Leonard and Penny grapple with getting older, Howard and Bernadette find a surprise in their hot tub and Raj is torn between Emily and Claire.'],
                    ['season' => 9, 'number' => 16, 'title' => 'The Positive Negative Reaction', 'synopsis' => 'Bernadette reveals her pregnancy to Howard and the rest of the gang.'],
                    ['season' => 9, 'number' => 17, 'title' => 'The Celebration Experimentation', 'synopsis' => 'The gang convince Sheldon to celebrate his birthday and throw him a party.'],
                    ['season' => 9, 'number' => 18, 'title' => 'The Application Deterioration', 'synopsis' => 'Leonard, Sheldon, and Howard run into problems when they file for a patent for their infinite persistence gyroscope. Meanwhile, the girls give Raj dating advice when Emily reaches out to him after their breakup.'],
                    ['season' => 9, 'number' => 19, 'title' => 'The Solder Excursion Diversion', 'synopsis' => 'Amy is shocked at a revelation from Sheldon after she buys him a new laptop. Meanwhile, Raj sells out Leonard and Howard after they lie to their wives in order to attend an early screening of a movie.'],
                    ['season' => 9, 'number' => 20, 'title' => 'The Big Bear Precipitation', 'synopsis' => 'Secrets are revealed when Amy and Sheldon join Penny and Leonard on a weekend cabin trip. Raj is more excited about Howard\'s and Bernadette\'s impending parenthood than they are.'],
                    ['season' => 9, 'number' => 21, 'title' => 'The Viewing Party Combustion', 'synopsis' => 'The gang pick sides when a small argument between Leonard and Sheldon erupts into a heated fight during a \'Game of Thrones\' viewing party.'],
                    ['season' => 9, 'number' => 22, 'title' => 'The Fermentation Bifurcation', 'synopsis' => 'Sheldon and Bernadette spend the evening together while the rest of the gang go to a wine tasting party, but things get uncomfortable for Raj when Penny\'s ex-boyfriend Zack shows up and takes an interest in Claire.'],
                    ['season' => 9, 'number' => 23, 'title' => 'The Line Substitution Solution', 'synopsis' => 'Sheldon hires Stuart to spend the day with Amy when he would rather go to the movies. Meanwhile, Penny struggles to make a connection with Leonard\'s mother when she comes to visit.'],
                    ['season' => 9, 'number' => 24, 'title' => 'The Convergence Convergence', 'synopsis' => 'Leonard and Penny try to have a wedding ceremony that everyone can attend, but it creates serious conflict among Sheldon\'s mother and Leonard\'s divorced parents. Meanwhile, Howard and Raj become convinced the government is out to get them.'],
                ],
            ],
            
            SeasonFixtures::SEASON_10_THE_BIG_BANG_THEORY => [
                'season' => 10,
                'episodes' => [
                    ['season' => 10, 'number' => 0, 'title' => 'Recap', 'synopsis' => 'A collection of some of last season\'s hilarious and most memorable moments.'],
                    ['season' => 10, 'number' => 1, 'title' => 'The Conjugal Conjecture', 'synopsis' => 'As Leonard and Penny attempt to hold another wedding ceremony everyone can attend, they have to deal with Penny\'s family arriving and Leonard\'s father spending the night with Sheldon\'s mother.'],
                    ['season' => 10, 'number' => 2, 'title' => 'The Military Miniaturization', 'synopsis' => 'Howard is visited by an Air Force colonel regarding his invention. Penny accidentally lets it slip about Bernadette\'s pregnancy to their co-workers.'],
                    ['season' => 10, 'number' => 3, 'title' => 'The Dependence Transcendence', 'synopsis' => 'Bernadette confesses to Raj that she isn\'t sure if she\'s ready to be a mother, Penny accompanies Amy to a university mixer, and Sheldon goes to unusual extremes to assist Howard with his military project.'],
                    ['season' => 10, 'number' => 4, 'title' => 'The Cohabitation Experimentation', 'synopsis' => 'When Amy must vacate her apartment for repairs, living arrangements are made with Leonard, Sheldon, and Penny. Howard and Bernadette don\'t want to know the sex of their baby, but Raj finds out.'],
                    ['season' => 10, 'number' => 5, 'title' => 'The Hot Tub Contamination', 'synopsis' => 'Sheldon and Amy go through a period of adjustment with their new living arrangement. Howard and Bernadette are forced to vacation at home when she falls ill and keep it a secret, unaware Raj and Stuart planned to use their hot tub.'],
                    ['season' => 10, 'number' => 6, 'title' => 'The Fetal Kick Catalyst', 'synopsis' => 'Sheldon and Amy host a brunch. Penny is surprised by her popularity when her movie, \'Serial Ape-Ist\' is featured at a Van Nuys comic book convention. Howard starts to freak out about parenthood after feeling the baby kick for the first time.'],
                    ['season' => 10, 'number' => 7, 'title' => 'The Veracity Elasticity', 'synopsis' => 'Amy doesn\'t tell Sheldon her apartment has been repaired. Leonard finds out Penny is slowly moving all of his collectible toys into storage.'],
                    ['season' => 10, 'number' => 8, 'title' => 'The Brain Bowl Incubation', 'synopsis' => 'A successful gene experimentation leaves Sheldon excited to procreate with Amy, and he pulls out all stops to get her on board. Meanwhile, Raj takes an interest in the cleaning lady at the university.'],
                    ['season' => 10, 'number' => 9, 'title' => 'The Geology Elevation', 'synopsis' => 'Sheldon can\'t contain his jealousy when Bert wins a grant for his geology research. A distasteful toy built by Howard faces judgement from the gang.'],
                    ['season' => 10, 'number' => 10, 'title' => 'The Property Division Collision', 'synopsis' => 'Dividing up their possessions becomes an all-out war between Leonard and Sheldon. Stuart asks to live with Howard and Bernadette and tries to supplant Raj\'s efforts to help with the new baby.'],
                    ['season' => 10, 'number' => 11, 'title' => 'The Birthday Synchronicity', 'synopsis' => 'Amy\'s desire to have an intimate night with Sheldon on her birthday is interrupted by Bernadette going into labor.'],
                    ['season' => 10, 'number' => 12, 'title' => 'The Holiday Summation', 'synopsis' => 'After spending the holidays apart, the gang get together to hear about Sheldon\'s and Amy\'s trip to Texas, Leonard\'s and Penny\'s Christmas tree adventure, and Howard\'s and Bernadette\'s first days as parents.'],
                    ['season' => 10, 'number' => 13, 'title' => 'The Romance Recalibration', 'synopsis' => 'Penny and Leonard organize a paintball game that results in mayhem when Sheldon is jealous of Amy. Raj catches Anu with her ex-boyfriend. Stuart doesn\'t want to move in with Denise.'],
                    ['season' => 10, 'number' => 14, 'title' => 'The Emotion Detection Automation', 'synopsis' => 'Sheldon invents a machine that can detect human emotions, but is less than enthusiastic when he realizes it has a negative effect on his friends. Meanwhile, Raj takes an interest in the cleaning lady at his apartment building.'],
                    ['season' => 10, 'number' => 15, 'title' => 'The Locomotion Reverberation', 'synopsis' => 'Leonard and Howard turn to Raj for help in dealing with a work emergency when they nearly come to blows after blaming each other for a potential disaster at the university. Amy throws an authentic Victorian Christmas party, while Sheldon seeks revenge on her for making him celebrate the holidays.'],
                    ['season' => 10, 'number' => 16, 'title' => 'The Allowance Evaporation', 'synopsis' => 'Sheldon and Amy have their first fight since moving in together and Koothrappali is shocked at the realities of financial independence when he stops receiving support from his father.'],
                    ['season' => 10, 'number' => 17, 'title' => 'The Comic-Con Conundrum', 'synopsis' => 'The guys\' annual trip to Comic-Con is in doubt when Raj can\'t afford to go. Penny becomes jealous when she thinks Leonard is attracted to a co-worker.'],
                    ['season' => 10, 'number' => 18, 'title' => 'The Escape Hatch Identification', 'synopsis' => 'When Raj moves out of his apartment, Leonard and Penny offer him Sheldon\'s old room. Christine Baranski returns as Leonard\'s mother.'],
                    ['season' => 10, 'number' => 19, 'title' => 'The Collaboration Fluctuation', 'synopsis' => 'Leonard, Penny and Raj adjust to their new living arrangement, while Sheldon takes an interest in Amy\'s work.'],
                    ['season' => 10, 'number' => 20, 'title' => 'The Recollection Dissipation', 'synopsis' => 'Sheldon pushes himself to the limit when he collaborates on projects with Leonard and Wolowitz as well as Amy on the same day. Bernadette nears the end of her maternity leave and must return to work.'],
                    ['season' => 10, 'number' => 21, 'title' => 'The Separation Agitation', 'synopsis' => 'Howard and Bernadette have a hard time leaving Halley in daycare when Bernadette returns to work. Also, Bert introduces the gang to his new girlfriend, Rebecca.'],
                    ['season' => 10, 'number' => 22, 'title' => 'The Cognition Regeneration', 'synopsis' => 'Leonard isn\'t thrilled when Penny considers taking a new job offered by her ex-boyfriend, Zack. Raj uncovers secret information about Sheldon.'],
                    ['season' => 10, 'number' => 23, 'title' => 'The Gyroscopic Collapse', 'synopsis' => 'After Leonard, Sheldon and Wolowitz celebrate the completion of the top secret air force project, they are met with an unpleasant surprise. Also, Amy is offered a summer position as a visiting researcher.'],
                    ['season' => 10, 'number' => 24, 'title' => 'The Long Distance Dissonance', 'synopsis' => 'The gang is concerned when Sheldon\'s former admirer, Dr. Ramona Nowitzki, resurfaces while Amy is away at Princeton.']
                ],
            ],
            
            SeasonFixtures::SEASON_11_THE_BIG_BANG_THEORY => [
                'season' => 11,
                'episodes' => [
                    ['season' => 11, 'number' => 1, 'title' => 'The Proposal Proposal', 'synopsis' => 'Amy gives Sheldon an answer to his proposal while Howard and Bernadette struggle with some unexpected news.'],
                    ['season' => 11, 'number' => 2, 'title' => 'The Retraction Reaction', 'synopsis' => 'Leonard angers the university – and the entire physics community – after he gives an embarrassing interview. Also, Amy and Bernadette bond over having to hide their success from Sheldon and Howard.'],
                    ['season' => 11, 'number' => 3, 'title' => 'The Relaxation Integration', 'synopsis' => 'As Sheldon stresses about picking a wedding date, Amy tries to convince him he has a more laid-back side. Also, Koothrappali and Stuart compete to win the heart of Bernadette\'s new coworker, Ruchi.'],
                    ['season' => 11, 'number' => 4, 'title' => 'The Explosion Implosion', 'synopsis' => 'Howard and Sheldon bond when they drive to the desert to shoot off a model rocket. Also, when Leonard\'s mom, Beverly, finds a new best friend in Penny, it rubs Leonard the wrong way.'],
                    ['season' => 11, 'number' => 5, 'title' => 'The Collaboration Contamination', 'synopsis' => 'Sheldon and Koothrappali confide in Bernadette when they can\'t handle Amy and Wolowitz working together. Also, Penny and Leonard learn new tactics for how to deal Sheldon from an unlikely source.'],
                    ['season' => 11, 'number' => 6, 'title' => 'The Proton Regeneration', 'synopsis' => 'Sheldon goes head-to-head with Wil Wheaton for the role of the new Professor Proton. Also, Penny steps in to take care of Halley when Bernadette and Wolowitz both wind up on bed rest.'],
                    ['season' => 11, 'number' => 7, 'title' => 'The Geology Methodology', 'synopsis' => 'When Bert asks Sheldon to collaborate on a project with him, Sheldon becomes worried about others finding out because he thinks geology is beneath him. Raj seeks advice after reconnecting with Ruchi.'],
                    ['season' => 11, 'number' => 8, 'title' => 'The Tesla Recoil', 'synopsis' => 'Howard and Leonard become upset after they discover that Sheldon has been working with the military without telling them; Bernadette asks Raj to investigate her suspicions that Ruchi is attempting to take her job away from her.'],
                    ['season' => 11, 'number' => 9, 'title' => 'The Bitcoin Entanglement', 'synopsis' => 'Sheldon tries to teach the other guys a lesson after they cut him out of a potentially valuable Bitcoin investment seven years ago.'],
                    ['season' => 11, 'number' => 10, 'title' => 'The Confidence Erosion', 'synopsis' => 'Sheldon and Amy try to eliminate stress from wedding planning by applying math to the process. Raj and Howard come to blows when Raj begins to feel like Howard hurts his confidence.'],
                    ['season' => 11, 'number' => 11, 'title' => 'The Celebration Reverberation', 'synopsis' => 'Raj and Howard\'s feud continues as the gang plan Halley\'s first birthday party. Sheldon\'s surprise for Amy\'s birthday goes awry when they get food poisoning.'],
                    ['season' => 11, 'number' => 12, 'title' => 'The Matrimonial Metric', 'synopsis' => 'Sheldon and Amy pick their best-man and maid of honor by experimenting on the gang. Meanwhile, Leonard\'s self-confidence is still badly damaged after reading his brother\'s Christmas letter.'],
                    ['season' => 11, 'number' => 13, 'title' => 'The Solo Oscillation', 'synopsis' => 'Sheldon kicks Amy out of the apartment to work solo, and she and Leonard end up bonding during a series of science experiments; Howard is replaced by Bert in Footprints on the Moon.'],
                    ['season' => 11, 'number' => 14, 'title' => 'The Separation Triangulation', 'synopsis' => 'Raj meets a girl at the Planetarium, but soon after finds out she is married. Sheldon rents out his old room to use for his work.'],
                    ['season' => 11, 'number' => 15, 'title' => 'The Novelization Correlation', 'synopsis' => 'Leonard\'s book raises questions, and Amy guest stars on the new Professor Proton show.'],
                    ['season' => 11, 'number' => 16, 'title' => 'The Neonatal Nomenclature', 'synopsis' => 'When Bernadette won\'t go into labor, the gang try different tactics to get things started. Also, Wolowitz confronts Bernadette after Amy accidentally reveals she\'s already chosen their son\'s name.'],
                    ['season' => 11, 'number' => 17, 'title' => 'The Athenaeum Allocation', 'synopsis' => 'Leonard jumps through hoops to help secure the perfect wedding venue for Sheldon and Amy. Also, Bernadette and Wolowitz have a hard time deciding who should stay at home with the kids and who should go back to work.'],
                    ['season' => 11, 'number' => 18, 'title' => 'The Gates Excitation', 'synopsis' => 'Leonard, Howard and Raj try to meet Bill Gates, who\'s meeting with Penny to merge their companies; Sheldon thinks he\'s the victim of an April Fool\'s prank.'],
                    ['season' => 11, 'number' => 19, 'title' => 'The Tenant Disassociation', 'synopsis' => 'Leonard runs against Sheldon to be president of the tenants association; Wolowitz and Koothrappali find a drone in the backyard.'],
                    ['season' => 11, 'number' => 20, 'title' => 'The Reclusive Potential', 'synopsis' => 'Sheldon takes the guys to a cabin in the middle of nowhere to meet a reclusive scientist; Penny and Bernadette improvise Amy\'s bachelorette party.'],
                    ['season' => 11, 'number' => 21, 'title' => 'The Comet Polarization', 'synopsis' => 'Sheldon\'s comic book store experience changes when writer Neil Gaiman puts Stuart\'s store on the map; friendships are threatened when Koothrappali takes credit for Penny\'s astronomical discovery.'],
                    ['season' => 11, 'number' => 22, 'title' => 'The Monetary Insufficiency', 'synopsis' => 'Sheldon goes to Vegas to win money for science. Also, Penny and Bernadette take Amy wedding dress shopping, but her terrible choice entangles them in a web of lies.'],
                    ['season' => 11, 'number' => 23, 'title' => 'The Sibling Realignment', 'synopsis' => 'Sheldon and Leonard make a road trip to wrangle a reluctant wedding guest.'],
                    ['season' => 11, 'number' => 24, 'title' => 'The Bow Tie Asymmetry', 'synopsis' => 'When Amy\'s parents and Sheldon\'s family arrive, everybody is focused to make sure all wedding arrangements go according to plan - everyone except the bride and groom.'],
                ],
            ],
            
            SeasonFixtures::SEASON_12_THE_BIG_BANG_THEORY => [
                'season' => 12,
                'episodes' => [
                    ['season' => 12, 'number' => 1, 'title' => 'The Conjugal Configuration', 'synopsis' => 'After their wedding, Amy and Sheldon go on their honeymoon.'],
                    ['season' => 12, 'number' => 2, 'title' => 'The Wedding Gift Wormhole', 'synopsis' => 'Leonard and Penny give Sheldon and Amy a baffling wedding gift.'],
                    ['season' => 12, 'number' => 3, 'title' => 'The Procreation Calculation', 'synopsis' => 'The Wolowitzes\' life gets complicated when Stuart starts bringing his new girlfriend home. Also, Penny and Leonard talk about starting a family while Koothrappali explores an arranged marriage.'],
                    ['season' => 12, 'number' => 4, 'title' => 'The Tam Turbulence', 'synopsis' => 'Sheldon won\'t tell anyone why he\'s never mentioned Tam, his childhood best friend, so Leonard takes matters into his own hands. Also, Bernadette and Penny take out Raj\'s fiancée, Anu, for dinner to get the skinny on her.'],
                    ['season' => 12, 'number' => 5, 'title' => 'The Planetarium Collision', 'synopsis' => 'Amy doesn\'t have time to work with Sheldon on super asymmetry, so he goes to great lengths to ensure she\'s available. Koothrappali doesn\'t want Wolowitz to join him in hosting a show at the planetarium.'],
                    ['season' => 12, 'number' => 6, 'title' => 'The Imitation Perturbation', 'synopsis' => 'When Wolowitz dresses up as Sheldon for Halloween, Sheldon seeks retaliation at Leonard and Penny\'s Halloween party. Also, Leonard is shocked that Penny doesn\'t remember their first kiss.'],
                    ['season' => 12, 'number' => 7, 'title' => 'The Grant Allocation Derivation', 'synopsis' => 'Leonard is caught between a rock and a hard place when he\'s responsible for distributing extra grant money. Also, Bernadette turns the backyard playhouse into a hideaway from her husband and kids.'],
                    ['season' => 12, 'number' => 8, 'title' => 'The Consummation Deviation', 'synopsis' => 'Sheldon tries to bond with Amy\'s father, but when Wolowitz lures Mr. Fowler away with magic tricks, Sheldon has no choice but to bond with Mrs. Fowler. Also, Koothrappali and Anu try to get physical for the first time.'],
                    ['season' => 12, 'number' => 9, 'title' => 'The Citation Negation', 'synopsis' => 'Sheldon and Amy are devastated after learning from a Russian paper that super asymmetry has already been theorized and disproved. Bernadette wants to beat Howard in a popular video game.'],
                    ['season' => 12, 'number' => 10, 'title' => 'The VCR Illumination', 'synopsis' => 'A VHS tape from Sheldon\'s past inspires him and Amy not to give up when they\'re still feeling down about their theory being disproven. Bernadette turns into a pageant mom when she tries to help Howard with his Magic Castle audition.'],
                    ['season' => 12, 'number' => 11, 'title' => 'The Paintball Scattering', 'synopsis' => 'Penny and Leonard organize a paintball game, which results in mayhem when Sheldon becomes jealous of Amy. Raj catches Anu with her ex-boyfriend. Stuart doesn\'t want to move in with Denise.'],
                    ['season' => 12, 'number' => 12, 'title' => 'The Propagation Proposition', 'synopsis' => 'Penny\'s ex-boyfriend Zack learns that he is infertile, so he asks Leonard for help; Koothrappali attempts to mend things with his ex-fiancee Anu.'],
                    ['season' => 12, 'number' => 13, 'title' => 'The Confirmation Polarization', 'synopsis' => 'Sheldon and Amy are thrilled when their super asymmetry theory is proven by two physicists, until they try to kick Amy off the Nobel nomination. Bernadette gets one of her drugs approved and wants a reluctant Penny to head the sales team.'],
                    ['season' => 12, 'number' => 14, 'title' => 'The Meteorite Manifestation', 'synopsis' => 'Sheldon is thrilled to help Bernadette and Howard navigate bureaucracy concerning a neighbor\'s non-compliant balcony until he learns they too have ignored codes. Leonard is disappointed when his friends are uninterested in his new laser.'],
                    ['season' => 12, 'number' => 15, 'title' => 'The Donation Oscillation', 'synopsis' => 'Penny tries to throw a wrench into Leonard\'s plan to be a sperm donor for her ex-boyfriend; Wolowitz, Bernadette, Anu and Koothrappali turn Koothrappali\'s canceled bachelor party into a couple\'s trip aboard the \'vomit comet.\''],
                    ['season' => 12, 'number' => 16, 'title' => 'The D & D Vortex', 'synopsis' => 'The gang finds out Wil Wheaton hosts a celebrity Dungeons and Dragons game involving William Shatner, Joe Manganiello, Kareem Abdul-Jabbar and Kevin Smith. Deception and betrayal are the path to make it to the one open seat.'],
                    ['season' => 12, 'number' => 17, 'title' => 'The Conference Valuation', 'synopsis' => 'Bernadette and Penny travel to San Diego for a pharmaceutical sales convention. Back home, Amy and the guys experiment on the Wolowitz children when Sheldon finds a book on it.'],
                    ['season' => 12, 'number' => 18, 'title' => 'The Laureate Accumulation', 'synopsis' => 'Rivals Pemberton and Campbell charm America on a publicity tour so Sheldon and Amy try to win over Nobel laureates Kip Thorne, George Smoot and Frances Arnold. Halley\'s fear of the dark causes opportunity and conflict at the Wolowitz home.'],
                    ['season' => 12, 'number' => 19, 'title' => 'The Inspiration Deprivation', 'synopsis' => 'Contemplating what it would mean to all women if she were to win a Nobel Prize causes Amy to have a meltdown. Koothrappali and Wolowitz try to relive the good old days after Wolowitz buys a scooter that looks like the one he had years ago.'],
                    ['season' => 12, 'number' => 20, 'title' => 'The Decision Reverberation', 'synopsis' => 'Koothrappali is worried people won\'t take him seriously in his own field after publishing a paper that suggests he may have discovered alien life. Leonard wants to be the principal investigator on a plasma physics study.'],
                    ['season' => 12, 'number' => 21, 'title' => 'The Plagiarism Schism', 'synopsis' => 'Kripke has proof that Dr. Pemberton plagiarized his thesis in college, and Sheldon and Amy aren\'t sure if they should turn him in. Wolowitz learns that Bernadette wasn\'t the only waitress at the Cheesecake Factory who had a crush on him.'],
                    ['season' => 12, 'number' => 22, 'title' => 'The Maternal Conclusion', 'synopsis' => 'Leonard is pleasantly surprised when Beverly comes to visit and she\'s genuinely kind to him, until he finds out the real reason she\'s there. Also, Denise and Stuart overstay their welcome at the Wolowitz house.'],
                    ['season' => 12, 'number' => 23, 'title' => 'The Change Constant', 'synopsis' => 'Sheldon and Amy await big news.'],
                    ['season' => 12, 'number' => 24, 'title' => 'The Stockholm Syndrome', 'synopsis' => 'Bernadette and Wolowitz leave their kids for the first time; Penny and Leonard try to keep a secret; Sheldon and Amy stick together; and Koothrappali makes a new friend, as the gang travels together into an uncharted future.'],
                ],
            ],
            SeasonFixtures::SEASON_1_BREAKING_BAD => [
                'season' => 1,
                'episodes' => [
                    ['season' => 1, 'number' => 1, 'title' => 'Pilot', 'synopsis' => "A high school chemistry teacher turned methamphetamine manufacturer teams up with a former student to secure his family's financial future."],
                    ['season' => 1, 'number' => 2, 'title' => "Cat's in the Bag...", 'synopsis' => "Walter and Jesse try to dispose of the two bodies in the RV, but are dragged into Tuco's criminal activities."],
                    ['season' => 1, 'number' => 3, 'title' => "...And the Bag's in the River", 'synopsis' => "Walter tries to bond with his new partner and Jesse is given an ultimatum after a confrontation with Krazy-8."],
                    ['season' => 1, 'number' => 4, 'title' => 'Cancer Man', 'synopsis' => "Walter's secret is in jeopardy when Skyler thanks Gretchen for paying for his treatment."],
                    ['season' => 1, 'number' => 5, 'title' => 'Gray Matter', 'synopsis' => "Walter and Skyler attend a former colleague's party. Jesse tries to free himself from Krazy-8."],
                    ['season' => 1, 'number' => 6, 'title' => 'Crazy Handful of Nothin', 'synopsis' => "Walter accepts his new identity as a drug manufacturer after a PTA meeting. Jesse's relationship with Jane develops."],
                    ['season' => 1, 'number' => 7, 'title' => 'A No-Rough-Stuff-Type Deal', 'synopsis' => "Walter and Jesse face difficulties in their drug production. Hank tries to track down the RV that belongs to the mysterious 'Heisenberg'."],
                ],
            ],
            SeasonFixtures::SEASON_2_BREAKING_BAD => [
                'season' => 2,
                'episodes' => [
                    ['season' => 2, 'number' => 1, 'title' => 'Seven Thirty-Seven', 'synopsis' => "Walter and Jesse deal with the aftermath of their first drug deal. Skyler's frustration with Walter's secrecy continues to grow."],
                    ['season' => 2, 'number' => 2, 'title' => 'Grilled', 'synopsis' => "Walter and Jesse are held captive by a drug distributor, Tuco Salamanca, who is dangerously unstable."],
                    ['season' => 2, 'number' => 3, 'title' => 'Bit by a Dead Bee', 'synopsis' => "Walter and Jesse try to cover their tracks as they deal with the fallout from their encounter with Tuco. Skyler grows more suspicious of Walter's behavior."],
                    ['season' => 2, 'number' => 4, 'title' => 'Down', 'synopsis' => "Walter's cancer takes a turn for the worse, leading to a series of drastic decisions. Jesse's relationship with Jane intensifies."],
                    ['season' => 2, 'number' => 5, 'title' => 'Breakage', 'synopsis' => "Walter and Jesse's drug business expands, but so does the danger. Skyler's involvement deepens as she seeks to protect her family."],
                    ['season' => 2, 'number' => 6, 'title' => 'Peekaboo', 'synopsis' => "Jesse comes face to face with the brutal reality of the drug trade. Walter tries to make amends with his family."],
                    ['season' => 2, 'number' => 7, 'title' => 'Negro y Azul', 'synopsis' => "The fallout from the deaths of two drug dealers continues to affect Walter and Jesse's operation. Hank investigates a new lead in the drug trade."],
                    ['season' => 2, 'number' => 8, 'title' => 'Better Call Saul', 'synopsis' => "Walter and Jesse seek legal advice from a colorful attorney named Saul Goodman. Skyler's suspicions about Walter's behavior grow stronger."],
                    ['season' => 2, 'number' => 9, 'title' => '4 Days Out', 'synopsis' => "Walter and Jesse's RV breaks down in the desert, leading to a life-or-death situation. Skyler confronts Walter about his lies."],
                    ['season' => 2, 'number' => 10, 'title' => 'Over', 'synopsis' => "Walter's world unravels as his secrets come to light. Jesse is caught in the crossfire of a deadly confrontation."],
                    ['season' => 2, 'number' => 11, 'title' => 'Mandala', 'synopsis' => "Walter and Jesse's drug business continues to grow, leading to new partnerships and new challenges. Skyler's involvement deepens."],
                    ['season' => 2, 'number' => 12, 'title' => 'Phoenix', 'synopsis' => "Walter's actions have tragic consequences, and Jesse spirals into a dark place. Skyler makes a shocking discovery."],
                    ['season' => 2, 'number' => 13, 'title' => 'ABQ', 'synopsis' => "The season finale brings several storylines to a head, with life-changing consequences for Walter and those around him."],
                ],
            ],
            SeasonFixtures::SEASON_1_THE_WIRE => [
                'season' => 1,
                'episodes' => [
                    ['season' => 1, 'number' => 1, 'title' => 'The Target', 'synopsis' => "The police set up surveillance on Avon Barksdale's drug operation. McNulty and his team try to build a case against him."],
                    ['season' => 1, 'number' => 2, 'title' => 'The Detail', 'synopsis' => "McNulty and his team continue to gather evidence on Barksdale's drug empire. The street-level dealers face increased police pressure."],
                    ['season' => 1, 'number' => 3, 'title' => 'The Buys', 'synopsis' => "McNulty and his team try to get the wiretap up and running. Barksdale's crew expands its territory."],
                    
                ],
            ],
            SeasonFixtures::SEASON_2_THE_WIRE => [
                'season' => 2,
                'episodes' => [
                    ['season' => 2, 'number' => 1, 'title' => 'Ebb Tide', 'synopsis' => "The focus shifts to the docks as the police investigate smuggling operations. McNulty and Bunk deal with the aftermath of a murder."],
                    ['season' => 2, 'number' => 2, 'title' => 'Collateral Damage', 'synopsis' => "The investigation into the smuggling ring continues. The longshoremen deal with changes at the docks."],
                    ['season' => 2, 'number' => 3, 'title' => 'Hot Shots', 'synopsis' => "McNulty and Bunk continue their murder investigation. The drug trade on the streets faces new challenges."],
                ],
            ],
            SeasonFixtures::SEASON_1_TWIN_PEAKS => [
                'season' => 1,
                'episodes' => [
                    ['season' => 1, 'number' => 1, 'title' => 'Pilot', 'synopsis' => "The investigation into the murder of Laura Palmer begins in the small town of Twin Peaks."],
                    ['season' => 1, 'number' => 2, 'title' => 'Traces to Nowhere', 'synopsis' => "Agent Cooper and the local police continue to unravel the mystery surrounding Laura's death."],
                    ['season' => 1, 'number' => 3, 'title' => 'Zen, or the Skill to Catch a Killer', 'synopsis' => "Cooper employs unorthodox methods to gain insight into Laura's murder. Secrets are revealed."],
                ],
            ],
            SeasonFixtures::SEASON_2_TWIN_PEAKS => [
                'season' => 2,
                'episodes' => [
                    ['season' => 2, 'number' => 1, 'title' => 'May the Giant Be with You', 'synopsis' => "Cooper investigates a new murder case, and the mysteries of Twin Peaks deepen."],
                    ['season' => 2, 'number' => 2, 'title' => 'Coma', 'synopsis' => "Cooper encounters supernatural elements in his investigation. Audrey becomes entangled in her own mystery."],
                    ['season' => 2, 'number' => 3, 'title' => 'The Man Behind Glass', 'synopsis' => "The search for the killer intensifies. Nadine undergoes a transformation."],
                ],
            ],
            SeasonFixtures::SEASON_1_KAAMELOTT => [
                'season' => 1,
                'episodes' => [
                    ['season' => 1, 'number' => 1, 'title' => 'La Table Ronde', 'synopsis' => "Le roi Arthur tente de réunir les chevaliers de la Table Ronde, mais cela ne se passe pas comme prévu."],
                    ['season' => 1, 'number' => 2, 'title' => 'Le Chevalier Errant', 'synopsis' => "Le roi Arthur rencontre un chevalier errant en quête de travail."],
                    ['season' => 1, 'number' => 3, 'title' => "L'Assemblée des Rois", 'synopsis' => "Le roi Arthur participe à une assemblée de rois, mais les discussions prennent une tournure inattendue."],
                ],
            ],
            SeasonFixtures::SEASON_2_KAAMELOTT => [
                'season' => 2,
                'episodes' => [
                    ['season' => 2, 'number' => 1, 'title' => 'Le Royaume Inconnu', 'synopsis' => "Le roi Arthur décide d'explorer un royaume inconnu et rencontre des personnages étranges en cours de route."],
                    ['season' => 2, 'number' => 2, 'title' => 'La Scandaleuse Aventure', 'synopsis' => "Le roi Arthur et ses chevaliers se retrouvent impliqués dans une aventure scandaleuse."],
                    ['season' => 2, 'number' => 3, 'title' => 'Le Passage', 'synopsis' => "Le roi Arthur tente de trouver un passage secret vers un territoire ennemi."]
                ],
            ],
            SeasonFixtures::SEASON_1_MALCOLM => [
                'season' => 1,
                'episodes' => [
                    ['season' => 1, 'number' => 1, 'title' => 'Pilot', 'synopsis' => "The family is introduced, and Malcolm begins attending a gifted class at school."],
                    ['season' => 1, 'number' => 2, 'title' => 'Red Dress', 'synopsis' => "Malcolm tries to buy a red dress for a girl but runs into a series of problems."],
                    ['season' => 1, 'number' => 3, 'title' => 'Home Alone 4', 'synopsis' => "Malcolm is left home alone, and chaos ensues."],
                ],
            ],
            SeasonFixtures::SEASON_2_MALCOLM => [
                'season' => 2,
                'episodes' => [
                    ['season' => 2, 'number' => 1, 'title' => 'Traffic Jam', 'synopsis' => "The family gets stuck in a traffic jam, leading to various adventures."],
                    ['season' => 2, 'number' => 2, 'title' => "Lois's Birthday", 'synopsis' => "The family tries to plan a surprise birthday party for Lois."],
                    ['season' => 2, 'number' => 3, 'title' => 'Dinner Out', 'synopsis' => "The family goes out to dinner and experiences a series of mishaps."],
                ],
            ],
            SeasonFixtures::SEASON_1_SOUTH_PARK => [
                'season' => 1,
                'episodes' => [
                    ['season' => 1, 'number' => 1, 'title' => 'Cartman Gets an Anal Probe', 'synopsis' => "The boys encounter strange occurrences after an alien abduction."],
                    ['season' => 1, 'number' => 2, 'title' => 'Weight Gain 4000', 'synopsis' => "Cartman competes in a weight loss contest, while Mr. Garrison attempts to become more physically fit."],
                    ['season' => 1, 'number' => 3, 'title' => 'Volcano', 'synopsis' => "The town faces a volcanic eruption, leading to various absurd situations."],
                ],
            ],
            SeasonFixtures::SEASON_2_SOUTH_PARK => [
                'season' => 2,
                'episodes' => [
                    ['season' => 2, 'number' => 1, 'title' => 'Terrance and Phillip in Not Without My Anus', 'synopsis' => "Terrance and Phillip go on a wacky adventure."],
                    ['season' => 2, 'number' => 2, 'title' => "Cartman's Mom Is Still a Dirty Slut", 'synopsis' => "The boys try to uncover the truth about Cartman's parentage."],
                    ['season' => 2, 'number' => 3, 'title' => 'Chickenlover', 'synopsis' => "Officer Barbrady faces an unusual case involving chickens."],
                ],
            ],
            SeasonFixtures::SEASON_1_PEAKY_BLINDERS => [
                'season' => 1,
                'episodes' => [
                    ['season' => 1, 'number' => 1, 'title' => 'Episode 1', 'synopsis' => "Thomas Shelby leads the Peaky Blinders, a gang in post-World War I Birmingham, England, known for their distinctive flat caps and razor blades sewn into their peaky hats."],
                    ['season' => 1, 'number' => 2, 'title' => 'Episode 2', 'synopsis' => "Thomas Shelby's plan to take over the betting pitches in Birmingham gains momentum, but his activities draw unwanted attention from both the police and a rival gang."],
                    ['season' => 1, 'number' => 3, 'title' => 'Episode 3', 'synopsis' => "As Thomas Shelby's power and influence grow, he faces betrayal from within his own family."],
                ],
            ],
            SeasonFixtures::SEASON_2_PEAKY_BLINDERS => [
                'season' => 2,
                'episodes' => [
                    ['season' => 2, 'number' => 1, 'title' => 'Episode 1', 'synopsis' => "Thomas Shelby is drawn into a dangerous web of intrigue involving a beautiful and mysterious woman."],
                    ['season' => 2, 'number' => 2, 'title' => 'Episode 2', 'synopsis' => "The Peaky Blinders are under threat from a rival gang and government agents, and Thomas Shelby is forced to make difficult decisions to protect his family and empire."],
                    ['season' => 2, 'number' => 3, 'title' => 'Episode 3', 'synopsis' => "As Thomas Shelby faces more danger and betrayal, he must navigate a treacherous world of politics and crime to protect his interests."],
                ],
            ],
            SeasonFixtures::SEASON_1_SCRUBS => [
                'season' => 1,
                'episodes' => [
                    ['season' => 1, 'number' => 1, 'title' => 'My First Day', 'synopsis' => "John 'J.D.' Dorian starts his first day as an intern at Sacred Heart Hospital and quickly learns the ropes of working in a hospital."],
                    ['season' => 1, 'number' => 2, 'title' => 'My Mentor', 'synopsis' => "J.D. seeks advice from Dr. Cox while struggling with the demands of his new job."],
                    ['season' => 1, 'number' => 3, 'title' => 'My Best Friend\'s Mistake', 'synopsis' => "J.D.'s friendship with Turk is tested when he realizes Turk made a mistake during surgery."],
                ],
            ],
            SeasonFixtures::SEASON_2_SCRUBS => [
                'season' => 2,
                'episodes' => [
                    ['season' => 2, 'number' => 1, 'title' => 'My Overkill', 'synopsis' => "J.D. and Turk face challenges in their personal and professional lives, leading to difficult decisions."],
                    ['season' => 2, 'number' => 2, 'title' => 'My Nightingale', 'synopsis' => "J.D. clashes with Dr. Cox while trying to prove himself as a doctor."],
                    ['season' => 2, 'number' => 3, 'title' => 'My Case Study', 'synopsis' => "J.D. takes on the case of a patient who has been in a coma for years."],
                ],
            ],
            SeasonFixtures::SEASON_1_MAD_MEN => [
                'season' => 1,
                'episodes' => [
                    ['season' => 1, 'number' => 1, 'title' => 'Smoke Gets in Your Eyes', 'synopsis' => "Don Draper, a creative director at an advertising agency in the 1960s, deals with personal and professional challenges."],
                    ['season' => 1, 'number' => 2, 'title' => 'Ladies Room', 'synopsis' => "Don struggles to juggle his work and personal life, while Peggy Olson starts her career at the agency."],
                    ['season' => 1, 'number' => 3, 'title' => 'Marriage of Figaro', 'synopsis' => "Don's home life begins to unravel, and the agency works on a campaign for a new client."],
                ],
            ],
            SeasonFixtures::SEASON_2_MAD_MEN => [
                'season' => 2,
                'episodes' => [
                    ['season' => 2, 'number' => 1, 'title' => 'For Those Who Think Young', 'synopsis' => "The agency faces changes and challenges in the 1960s advertising world."],
                    ['season' => 2, 'number' => 2, 'title' => 'Flight 1', 'synopsis' => "The agency works on an airline account while dealing with personal issues and crises."],
                    ['season' => 2, 'number' => 3, 'title' => 'The Benefactor', 'synopsis' => "The agency tries to secure an important client while navigating complex relationships."],
                ],
            ],
            SeasonFixtures::SEASON_1_WALKING_DEAD => [
                'season' => 1,
                'episodes' => [
                    ['episode' => 1,'number' => 1, 'title' => 'Days Gone Bye', 'synopsis' => 'Rick Grimes wakes up in a deserted hospital and discovers a world overrun by the undead. He teams up with a group of survivors to search for his family.'],
                    ['episode' => 2,'number' => 2, 'title' => 'Guts', 'synopsis' => 'Rick and the group venture into a large city to search for essential supplies. They must employ daring tactics to escape from the walkers.'],
                    ['episode' => 3,'number' => 3, 'title' => 'Tell It to the Frogs', 'synopsis' => 'Rick is reunited with his family, but tensions and conflicts arise within the group as they struggle to adapt to the new reality.'],
                ],
            ],
            SeasonFixtures::SEASON_2_WALKING_DEAD => [
                'season' => 2,
                'episodes' => [
                    ['episode' => 1,'number' => 1, 'title' => 'What Lies Ahead', 'synopsis' => 'The survivor group leaves Atlanta in search of a safe haven. Secrets are revealed, and disagreements about the direction to take begin to surface.'],
                    ['episode' => 2,'number' => 2, 'title' => 'Bloodletting', 'synopsis' => 'A group member is gravely injured, and Rick and the others desperately seek medical help at a nearby farm.'],
                    ['episode' => 3,'number' => 3, 'title' => 'Save the Last One', 'synopsis' => 'The group faces heart-wrenching losses, and difficult decisions must be made to survive.'],
                ],
            ],
            SeasonFixtures::SEASON_1_HAUNTING_HILL_HOUSE => [
                'season' => 1,
                'episodes' => [
                    ['episode' => 1,'number' => 1, 'title' => 'Steven Sees a Ghost', 'synopsis' => 'The Crain family returns to Hill House, where they once lived, to confront their traumatic past and the haunted house that still haunts them.'],
                    ['episode' => 2,'number' => 2, 'title' => 'Open Casket', 'synopsis' => 'As the Crain family members deal with the aftermath of their experiences in Hill House, dark secrets are revealed.'],
                    ['episode' => 3,'number' => 3, 'title' => 'Touch', 'synopsis' => 'The story alternates between the past and the present, focusing on the family dynamics and the supernatural events that occurred in Hill House.'],
                ],
            ],
            SeasonFixtures::SEASON_1_AMERICAN_HORROR_STORY => [
                'season' => 1,
                'episodes' => [
                    ['episode' => 1,'number' => 1, 'title' => 'Pilot', 'synopsis' => 'The Harmon family moves into a haunted mansion in Los Angeles, unaware of the supernatural horrors that await them.'],
                    ['episode' => 2,'number' => 2, 'title' => 'Home Invasion', 'synopsis' => 'The Harmons deal with unsettling events in their new home, including a home invasion and strange occurrences.'],
                    ['episode' => 3,'number' => 3, 'title' => 'Murder House', 'synopsis' => 'The history of the Murder House is revealed as the Harmon family continues to be tormented by the spirits that inhabit it.'],
                ],
            ],
            SeasonFixtures::SEASON_1_LOVE_DEATH_AND_ROBOTS => [
                'season' => 1,
                'episodes' => [
                    ['episode' => 1,'number' => 1, 'title' => 'Sonnie\'s Edge', 'synopsis' => 'In a world where human fighters control bio-engineered monsters, Sonnie enters an underground fight club with a dangerous secret.'],
                    ['episode' => 2,'number' => 2, 'title' => 'Three Robots', 'synopsis' => 'Three robots tour a post-apocalyptic city and try to understand humanity\'s downfall while cracking jokes along the way.'],
                    ['episode' => 3,'number' => 3, 'title' => 'The Witness', 'synopsis' => 'A woman witnesses a murder from her apartment window, but things take a surreal and mysterious turn as she becomes the target of a pursuit.'],
                ],
            ],
            SeasonFixtures::SEASON_1_PENNY_DREADFUL => [
                'season' => 1,
                'episodes' => [
                    ['episode' => 1,'number' => 1, 'title' => 'Night Work', 'synopsis' => 'Explorer Sir Malcolm Murray and the mysterious Vanessa Ives recruit American sharpshooter Ethan Chandler to help them track down Vanessa\'s missing friend.'],
                    ['episode' => 2,'number' => 2, 'title' => 'Séance', 'synopsis' => 'Vanessa participates in a séance to contact the spirit of her deceased friend, but the results are chilling.'],
                    ['episode' => 3,'number' => 3, 'title' => 'Resurrection', 'synopsis' => 'Dr. Victor Frankenstein is introduced, and his work on reanimating the dead takes center stage.'],
                ],
            ],
            SeasonFixtures::SEASON_1_FEAR_THE_WALKING_DEAD => [
                'season' => 1,
                'episodes' => [
                    ['episode' => 1,'number' => 1, 'title' => 'Pilot', 'synopsis' => 'High school guidance counselor Madison Clark and her fiancé, Travis Manawa, become aware of a rapidly spreading infection that threatens Los Angeles.'],
                    ['episode' => 2,'number' => 2, 'title' => 'So Close, Yet So Far', 'synopsis' => 'Madison and Travis try to protect their families as the situation in the city deteriorates rapidly.'],
                    ['episode' => 3,'number' => 3, 'title' => 'The Dog', 'synopsis' => 'As panic and chaos grip Los Angeles, Madison and Travis make difficult decisions to ensure their survival.'],
                ],
            ],
        ];
        $slugify = new Slugify();
        foreach ($seasonsData as $seasonReference => $seasonData) {
            $season = $this->getReference($seasonReference);
            foreach ($seasonData['episodes'] as $episodeData) {
                $episode = new Episode();
                $episode->setSeason($season);
                $episode->setNumber($episodeData['number']);
                $episode->setTitle($episodeData['title']);
                $episode->setSlug($slugify->slugify($episodeData['title']));
                $episode->setSynopsis($episodeData['synopsis']);

                $manager->persist($episode);
            }
        }
        $manager->flush();
    }

    public function getDependencies(): array
    {
        return [
            SeasonFixtures::class,
        ];
    }
}
