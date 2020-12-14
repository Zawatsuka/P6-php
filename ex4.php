<!-- Faire une page index.php. Tester sur cette page que tous les paramètres de cette 
URL existent  et les afficher : index.php?language=PHP&server=LAMP -->
<?php 
echo "le language est ". $_GET['language']." sur un serveur ". $_GET['server']; 
?>