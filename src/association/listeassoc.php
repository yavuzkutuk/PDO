<table class="table">
    <!-- Mes titres sur une ligne -->
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Nom</th>
        <th scope="col">Description</th>
        <th scope="col">Auteur</th>
        <th scope="col">Status</th>
        <th scope="col">Option</th>
    </tr>
    </thead>
    <tbody>
    <?php
    // Je construis ma requete sql
    $sql = "SELECT * FROM associations";

    // J'execute ma requete via PDO
    $resultat = $pdo->query($sql);

    // Je récupère les données de ma requete via PDO sous format tableau
    $resultats = $resultat->fetchAll();

    // je boucle via Foreach pour afficher chaque enregistrement de ma table sous format ligne
    foreach ($resultats as $key => $value){
        echo'<tr>';
        echo'<td>'.$value['id'].'</td>';
        echo'<td>'.$value['name'].'</td>';
        echo'<td>'.$value['description'].'</td>';
        echo'<td>'.$value['auteur'].'</td>';
        echo'<td>'.$value['status'].'</td>';
        echo'<td>
                <a href=""><img src="https://addons.thunderbird.net/user-media/addon_icons/255/255237-64.png?modified=1309182585"></a>
                <a href="?page=detailsassoc&id='.$value['id'].'"><img src="https://cdn.icon-icons.com/icons2/1660/PNG/512/3844476-eye-see-show-view-watch_110339.png" width="32px"/></a>
             </td>';
        echo'</tr>';
    }
    ?>

    </tbody>
</table>