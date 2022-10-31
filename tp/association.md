# Projet association aide aux animaux
## Ce projet consiste à créer un site pour une association d'aide aux animaux

Une association vous contacte pour la réalisation d'un site afin de favoriser l'adoption d'animaux abandonés. Ce site présentera les animaux disponible à l'adoption.

Il proposera également une partie ecommerce pour la vente de produits et permettra aux utilisateurs de faire des dons.

Le site disposera également d'une partie admin qui permettra aux employés de gérer les fiches des animaux, les produits disponibles à la vente, les commandes et le suivi de dossier des demandes d'adoption.

## Les pages

### Page d'accueil

Le site contiendra une page d'accueil présentant l'association et affichant les animaux arrivés à l'association au cours des 30 derniers jours. Chaque animal est cliquable pour se rendre sur sa fiche.

Sur cette page, les utilisateurs pourront également faire des dons à l'association. Les dons effectués sont enregistrés en BDD avec les infos de l'utilisateur et un mail lui est envoyé avec le récapitulatif du don.

Le total de dons de l'année est visible (depuis le 1er janvier de l'année) est visible sur cette page.

### Page des animaux

Une page listant tous les animaux disponible à l'adoption. Chaque animal est cliquable pour arriver sur sa fiche.

Cette page possède une pagination. Vous pouvez afficher 10 ou 20 animaux par page.

### Fiche d'un animal

Cette page présente l'animal, ses informations et permet à un utilisateur de remplir un formulaire de réservation.

## Inscription et login

Un utilisateur doit s'inscrire pour pouvoir faire des achats sur le site ou démarrer une demande de réservation.
Un mail est envoyé à l'utilsiateur pour confirmer son inscription.
Une fois connecté, il peut modifier ses informations, accéder à ses demandes de réservation et au récapitulatif de ses anciennes commandes.

Un administrateur peut inscrire d'autres administrateurs. Une fois connecté il a accès à l'admin panel.

## Administration

Un administrateur peut se connecter. Il peut ainsi accéder à un admin panel dans lequel il peut ajouter des animaux à adopter, en retirer et modifier les informations d'un animal.

Un admin peut gérer les produits (ajout, gestion de stock, modification, suppression) et voir les commandes passées pour changer le statut (en attente (par défaut), en cours de préparation, en livraison).

Il peut également accéder à la liste des dossiers et demandes d'adoption pour les vérifier, les valider ou les refuser.

## Formulaire de réservation

Un utilisateur peut faire une demande de réservation d'un animal si aucune demande n'est en cours.
Il va devoir remplir des informations comme son nom, prénom, adresse, téléphone, mail, ... 

Un administrateur reçoit la demande et créé un dossier de réservation. 

Lorsqu'un dossier est ouvert, un email est envoyé à la futur famille qui peut se connecter au dossier et apporter les dernières modifications.
Un dossier va demander à la famille d'apporter des documents (CNI, pdf rempli peut importe)

Une fois le dossier rempli, l'admin va valider ou non le dossier et approuver ou non l'adoption.