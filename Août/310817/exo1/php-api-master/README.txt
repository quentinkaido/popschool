TP PHP pour POPSchool Lens, promotion Jimmy Wales

Rudy Malcherczyk <malcherczykrudy@gmail.com>

# Licence



# Installation

1. Copiez les fichiers dans votre dossier web
2. Installer la base de donnée avec le fichier database-empty (structure seule) ou database_sample qui possède déjà une base de données.
3. Copier le fichier config/db-sample.php en config/db.php et modifier les valeurs
4. Lancer la commande `$ yarn install` pour installer les dépendances
5. C'est tout

# Notes

Projet en PHP vanilla + mysql + bootstrap

# Usage

Aller à la racine du projet, ça ce passe de notes

# Documentation de l'API

## promotions

* api/change_promotion.php

Un objet JSON avec les champs suivants : id, name, startdate et enddate

Renvoie success ou failure

* api/create_promotion.php

Un objet JSON avec les champs suivants : name, startdate et enddate

Renvoie success ou failure

* api/delete_promotion.php

Un objet JSON avec le champ id

Renvoie success ou failure

<todo>
