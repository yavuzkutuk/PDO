<?php
// j'intègre ma page de configuration base de donnée
include '../config/db.php';
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>

<?php

// J'intègre ma barre de navigation
include'../src/navbar.php';
?>

<?php
    if(isset($_GET['page'])){
        if($_GET['page']=='liste'){ // Si l'utilisateur demande la page liste
            include '../src/liste.php'; // j'intègre ma page de liste
        }elseif($_GET['page']=='add'){ // Si l'utilisateur demande la page add
            include '../src/add.php'; // j'intègre ma page add
        }elseif($_GET['page']=='del'){ // Si l'utilisateur demande la page delete
            include '../src/del.php';  // j'intègre ma page delete
         }elseif($_GET['page']=='listeassoc'){
            include '../src/association/listeassoc.php';
        }elseif($_GET['page']=='addassoc'){
            include '../src/association/add.php';
        }elseif($_GET['page']=='detailsassoc'){
            include '../src/association/detailsassoc.php';
        }
    }
?>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

