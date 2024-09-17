<?php

include('bdd/bdd.php');

// Include Utilisateur Controleur & Modele
include('controleur/utilisateur/utilisateurControleur.php');
include('modele/utilisateur/utilisateurModele.php');

// Include Produit Controleur & Modele
include('controleur/produit/produitControleur.php');
include('modele/produit/produitModele.php');

// Include Intervention Controleur & Modele
include('controleur/intervention/interventionControleur.php');
include('modele/intervention/interventionModele.php');

$interventionControleur = new InterventionControleur($bdd);
$produitControleur = new ProduitControleur($bdd);
$utilisateurControleur = new UtilisateurControleur($bdd);

// Récupérer les statistiques
$totalIncidents = $interventionControleur->getTotalIncidents();
$clientsWithOpenTickets = $interventionControleur->getClientsWithOpenTickets();
$ticketsOpenMoreThanOneDay = $interventionControleur->getTicketsOpenMoreThanOneDay();

?>

<main id="tableau-de-bord">
    <div>
        <h2>Bienvenue <?= $_SESSION['prenom'] . " " . $_SESSION['nom'] ?></h2>

        <!-- Ajouter les statistiques ici -->
        <div>
            <p>Nombre total d'incidents gérés : <?= $totalIncidents['total'] ?></p>
            <p>Nombre de clients avec un ticket ouvert : <?= $clientsWithOpenTickets['total'] ?></p>
            <p>Tickets ouverts depuis plus d'un jour : <?= $ticketsOpenMoreThanOneDay['total'] ?></p>
        </div>

        <div class="intervention-card-container">
        </div>
    </div>
</main>
