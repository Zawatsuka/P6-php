<!-- Faire une page index.php. Tester sur cette page que le paramètre age existe et si 
c'est le cas l'afficher sinon le signaler : index.php?lastname=Nemare&firstname=Jean -->
<?php if (isset ($_GET["age"])){
    echo "vous avez " . $_GET["age"] . " ans";
}else {
    echo " Mais vous n'avez pas d'age ou quoi ?";
}