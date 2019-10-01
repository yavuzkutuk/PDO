<?php
// Je vérifie si l'utilisateur à bien cliqué sur mon bouton supprimer
if($_GET['id']<>''){
    // Je construis ma requete sql
    $sql = "DELETE FROM article WHERE id=".$_GET['id'];

    // Si ma requete a bien été executé
    if ($pdo->exec($sql)) {
        // J'affiche le message à l'utilisateur que la suppression a bien été executé
        echo 'Votre suppresion a été un succès';
    // Si ma requete n'a pas bien été executé
    } else {
        // J'affiche le message à l'utilisateur que la suppression n'a pas bien été executé
        echo 'Votre suppresion a été un echec';
    }
}