<?php
require_once('DBController.php');
require_once('dbh.inc.php');
require_once('utilityManager.php');
?>

<?php

// addCheckedVehicle();
addDuplicateCheckedVehicle();

//adding a checked vehicle
function addCheckedVehicle(){
    $utility = new utility;
    $utility->addCheckedVehicle("auto_inc","GHZ-987");
}

//adding a duplicate checked vehicle
function addDuplicateCheckedVehicle(){
    $utility = new utility;
    $utility->addCheckedVehicle("auto_inc","GHZ-987");
}