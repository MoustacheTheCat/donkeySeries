# donkeySeries

step 0

Homepage Wireframe & Style Guide 

    https://www.figma.com/file/OFQV2GcleVArGfCOcjn6S7/Untitled?type=design&node-id=0%3A1&mode=design&t=yt135aEcmfMvRDGr-1

creatiion du projet symfony 

    composer create-project symfony/skeleton:"7.0.*" donkey_series

creation du repository git et first commit 

    git@github.com:MoustacheTheCat/donkeySeries.git

step 1

installation des dependances 

    composer require symfony/maker-bundle --dev

    composer require --dev symfony/var-dumper

    composer require symfony/orm-pack

    composer require symfony/maker-bundle --dev

    composer require form validator

création de la db

    symfony console doctrine:database:create

step 2

création de ProgramController et DefaultController

step 3

    composer require symfony/webpack-encore-bundle
    npm install @symfony/webpack-encore --save-dev
    composer require symfonycasts/sass-bundle
    composer require twbs/bootstrap
    npm install sass-loader@^13.0.0 sass --save-dev
    npm install bootstrap --save-dev
    npm install file-loader@^6.0.0 --save-dev

step 4 

création des deux Entity

step 5

creation de la relation entre category et program

step 6

    composer require orm-fixtures --dev

création de fixtures

doc trés utiles 

https://phpdox.net/demo/Symfony2/classes/Doctrine_ORM_PersistentCollection.xhtml


step 7

ajout de catgeorie avec les fictures

step 8

création de la function showSeason dans le Programcontroller et de la template season_show.html.twig

step 9 

utilsation de #[MapEntity]
création de la function showSeasonEpidode dans le Programcontroller et de la template season_episode_show.html.twig

step 10

    composer require symfony/form

step 11

crud de Season et Episode



