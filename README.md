rent-a-student
==============

A Symfony project created on March 27, 2015, 9:57 am.

# Git structuur #
[http://nvie.com/posts/a-successful-git-branching-model/](http://nvie.com/posts/a-successful-git-branching-model/)

1. In de `master` komt alleen code uit de `develop` branch die klaar is om live te gaan
2. In de `develop` branch mergen we alle feature-branches tot er een versie is die klaar is om te mergen met de `master`
3. Bij het werken aan een nieuwe feature altijd een nieuw branch aanmaken vanuit de `develop` branch met een beschrijvende naam `mijnCooleAdminFeature`
4. Klaar met `mijnCooleAmdinFeature`? --> Mergen met develop
5. Develop klaar om live te gaan? --> In team bespreken en naar master mergen

Master en develop zijn branches die altijd blijven verder gaan. Alle feature branches worden verwijdert na de merge met develop.

# How to install #
1. Clone project
2. Run composer install to load dependecies

# Sass --> css? #
1. Install gulp `$ npm install gulp -g`
2. Install node_modules `$ npm install`
3. Run gulp `$ gulp`

# Quick DB Syntax #

1. Genereer getters & setters

		$ php app/console doctrine:generate:entities Imd/AppBundle/Entity


2. Update de databank

		$ php app/console doctrine:schema:update --force



# Problemen? #
1. Clear cache in cmd:

		$ php app/console cache:clear
		$ php app/console cache:clear env=prod
