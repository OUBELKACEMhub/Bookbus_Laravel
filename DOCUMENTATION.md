<h1>🚌 Documentation du Projet : BookBus (Clone marKoub.ma)</h1>
__A. Analyse du Domaine__

1. Processus de Réservation (Flux Utilisateur)
   Le processus de réservation sur BookBus suit un parcours fluide inspiré de marKoub.ma :

- Recherche : L'utilisateur sélectionne une ville de départ, une destination et une date.

- Sélection : Une liste de voyages disponibles s'affiche. L'utilisateur choisit l'horaire et le bus qui lui conviennent.

Détails : Sélection du siège (siège spécifique) et saisie des informations personnelles.

Confirmation : Validation de la réservation et génération d'un billet numérique.

2. Entités Principales
   Utilisateur (User) : Client ou Administrateur.

Ville (City) : Les points d'arrêt (Départ/Arrivée).

Bus : Le véhicule avec une capacité définie.

Voyage (Trip) : La liaison entre deux villes à une heure précise avec un prix.

Réservation (Booking) : Le lien entre un utilisateur et un voyage.

3. Flux d'Administration
   L'administrateur dispose d'un tableau de bord pour :

Gérer les villes et les bus.

Planifier de nouveaux trajets.

Visualiser les réservations effectuées par les clients.

**B. Proposition d'Architecture**

1. Schéma de Base de Données (MCD/ERD)
   Nous avons identifié 5 tables essentielles :

users : id, name, email, password, role (admin/customer)

cities : id, name

buses : id, name, capacity

trips : id, bus_id, departure_city_id, arrival_city_id, price, departure_time

bookings : id, user_id, trip_id, seat_number, status

2. Fonctionnalités MVP
   Authentification (Inscription/Connexion).

Recherche de trajets par villes et date.

Système de réservation simple.

Dashboard Admin pour la gestion des bus et trajets.

3. Diagrammes UML (Concepts)
   Cas d'utilisation : \* Passager : Rechercher voyage, Réserver, Voir ses billets.

Admin : Gérer les bus, Ajouter des trajets, Voir les statistiques.

Diagramme de Classes : Structure basée sur les Modèles Eloquent de Laravel (User, City, Bus, Trip, Booking).

**C. Choix Techniques**

1. Pourquoi Laravel ?
   Écosystème Robuste : Utilisation d'Eloquent ORM pour une gestion fluide de la base de données.

Sécurité : Protections intégrées contre les failles CSRF et injections SQL.

Rapidité de développement : Idéal pour livrer un MVP en 3 jours grâce aux outils comme Artisan et Breeze.

2. Dépendances PHP/Laravel
   PHP 8.2+

**Laravel 10**

Laravel Breeze / Livewire : Pour une interface réactive et une authentification rapide.

Pest : Pour les tests unitaires et fonctionnels.
