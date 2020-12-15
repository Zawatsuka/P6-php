<!-- Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL 
existent  et les afficher : index.php?startDate=2/05/2016&endDate=27/11/2016 -->
 <?php
if(!empty($_GET["startDate"]) && !empty($_GET["endDate"])){
    echo "ceci est la premiere date : ". $_GET["startDate"]. " et ceci la derniere date : ". $_GET["endDate"]; 
 }else{
    echo "il n'y a rien";
 }
 ?>