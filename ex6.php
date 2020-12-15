<!-- Faire une page index.php. Tester sur cette page que tous les paramètres de cette
 URL existent  et les afficher : index.php?building=12&room=101 -->
 <?php
if(!empty($_GET['building']) && !empty($_GET['room'])){
    echo "C'est a l'etage ".$_GET['building']." et la chambre c'est la  ". $_GET['room']; 
 }else{
    echo "il n'y a rien";
 }
 ?>