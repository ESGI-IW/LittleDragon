
<?php
/**
 * Created by PhpStorm.
 * User: milica
 * Date: 11.8.2016.
 * Time: 13.50
 */
session_start();




$page_title="Laboratorijske vežbe";
require_once 'Saradnik.php';
include_once 'valicacija.php';
include_once 'templates/header.php';
include_once 'templates/left.php';
echo "<div class=\"col-6\">";

echo "<h3>".$page_title."</h3>";

/*ide kod*/



echo "</div>";
include_once 'templates/right.php';
include_once 'templates/footer.php';
