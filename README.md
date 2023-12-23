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
 
    