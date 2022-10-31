# Projet restaurant
## Ce projet consiste à créer un site pour un restaurant

Un gérant de restaurant vous contacte pour réaliser un site web lui permettant de booster son commerce.

Ce site va proposer de commander des plats pour de la vente à emporter ou de la livraison et de réserver une table pour un repas.

Ce site possèdera donc une partie admin permettant de gérer les commandes et les réservations.

## Les pages

### Page d'accueil

La page d'accueil est une page présentant le restaurant, ses horaires, ...
Rien de particulier à implémenter dessus.

### Page de réservation de table

Cette page va permettre à un utilisateur de réserver une table. Il n'a pas besoin de s'inscrire pour réserver mais doit quand même donner son nom, son téléphone et son mail.
Les réservations sont bloquées sur un créneau d'une heure.

Le client choisit le nombre de personne et l'heure. Le restaurant ayant un nombre de places limitées, si la réservation dépasse le nombre de places restantes sur le créneau, elle est automatiquement refusée.

### Page menu

Cette page présente tous les plats, boissons et formules (s'il y en a) du restaurant.
Elle permet à un utilisateur de choisir ce qu'il va commander. Chaque plat choisit est ajouté au panier.

### Page panier

Un utilisateur doit être connecté pour passer commande. Il choisit s'il prend à emporter ou en livraison et il paye sa commande.

Un mail est envoyé à la validation de la commande

### Inscription et connexion

Un utilisateur peut s'inscrire pour pouvoir passer commande. Un mail est envoyé à l'utilsiateur pour confirmer son inscription.

Les administrateurs doivent se connecter pour accéder au panel admin. Seul un administrateur connecté peut créer un compte pour un autre administrateur.

## Administration

Seuls les admin peuvent se connecter. Ce panel va leur permettre de gérer les commandes en attente, changer leur status (en attente, en préparation, prête, en livraison).
Un mail est envoyé au changement de status.

Un admin va également pouvoir consulter les réservations et pourra en annuler au besoin.

Il peut également gérer les plats disponible au menu (en ajouter, modifier, supprimer, mettre en pause par rupture de stock d'ingrédients etc).

## Modules supplémentaires à implémenter

Vous avez la possibilité d'implémenter d'autres modules suivant vos envies. Vous devez cependant en implémenter au moins 3 différents.

Voici des exemples de modules implémentables:

    - Un blog avec son système de gestion (ajout, suppression, modification) présentant les news du restaurant ou des recettes
    - Un système de notation pour le restaurant et les plats avec des commentaires.
    - Implémentation d'une partie épicerie avec achat de produits en ligne
    - ...