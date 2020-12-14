<!-- Faire une page index.php. Tester sur cette page que tous 
les paramètres de cette URL existent et les afficher : index.php?lastname=Nemare&firstname=Jean -->
<?php
echo $_GET["lastname"] . " " . $_GET["firstname"];
?>