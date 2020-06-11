<?php
require_once('DBController.php');
require_once('dbh.inc.php');
require_once('utilityManager.php');
?>

<?php

addReleasedVehicle();

function addReleasedVehicle(){
    $utility = new utility;
    $utility->addReleasedVehicle(5, "2020-05-05 09:24:00");
}