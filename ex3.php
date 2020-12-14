<!-- Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL 
existent  et les afficher : index.php?startDate=2/05/2016&endDate=27/11/2016 -->
<?php
 echo "ceci est la premiere date : ". $_GET["startDate"]. " et ceci la deuxieme date : ". $_GET["endDate"];
 ?>