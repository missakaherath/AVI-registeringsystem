<?php
require_once('DBController.php');
require_once('dbh.inc.php');
require_once('utilityManager.php');
?>

<?php
// insertNewEntry();
// insertInvalidVehicleID();
// insertInvalidBranchID();
// insertInvalidUserID();
insertDuplicateEntry();

//insert a new blacklisted vehicle details row
function insertNewEntry(){
    $utility = new utility();
    $utility->addBlacklistEntry("auto_inc", 61, '1.23', '5.68', '2020-05-05 09:24:00', 4, 5);
}

//insert an entry with a duplicate entry id
function insertDuplicateEntry(){
    $utility = new utility();
    $utility->addBlacklistEntry(1, 61, '1.23', '5.68', '2020-05-05 09:24:00', 4, 5);
}

//inserting an entry with invalid vehicle id, foreign key constrain
function insertInvalidVehicleID(){
    $utility = new utility();
    $utility->addBlacklistEntry(2, 66, '1.23', '5.68', '2020-05-05 09:24:00', '4', '5');
}

//inserting an entry with invalid branch id
function insertInvalidBranchID(){
    $utility = new utility();
    $utility->addBlacklistEntry(3, 61, '1.23', '5.68', '2020-05-05 09:24:00', '5', '5');
}

//inserting an entry with invalid blacklisted user ID
function insertInvalidUserID(){
    $utility = new utility();
    $utility->addBlacklistEntry(3, 61, '1.23', '5.68', '2020-05-05 09:24:00', 4, 10);
}