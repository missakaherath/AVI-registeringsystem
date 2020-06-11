<?php
require_once('DBController.php');
require_once('dbh.inc.php');
require_once('utilityManager.php');
?>

<?php

insertBlacklistedVehicle();
// insertDuplicateVehicleNumber();

//insert a new blacklisted vehicle
function insertBlacklistedVehicle(){
    $utility = new utility();
    $utility->addBlacklistedVehicle("auto_inc","ABC-1111",1);
}

//insert a new blacklisted vehicle with a duplicate vehicle num
function insertDuplicateVehicleNumber(){
    $utility = new utility();
    $utility->addBlacklistedVehicle("auto_inc","M666 YOB",1);
}
