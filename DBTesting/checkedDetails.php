<?php
require_once('DBController.php');
require_once('dbh.inc.php');
require_once('utilityManager.php');
?>

<?php

// insertCheckedDetails();
// insertInvalidCheckedID();
insertInvalidCheckedUser();

//insert checked details
function insertCheckedDetails(){
    $utility = new utility();
    $utility->addCheckedDetails("auto_inc", 19, "1.123", "2.564", "2020-05-05 09:25:06", 1, 4);
}

//insert an invalid checked id
function insertInvalidCheckedID(){
    $utility = new utility();
    $utility->addCheckedDetails("auto_inc", 1, "1.123", "2.564", "2020-05-05 09:25:06", 1, 4);
}

//insert an invalid checked user
function insertInvalidCheckedUser(){
    $utility = new utility();
    $utility->addCheckedDetails("auto_inc", 19, "1.123", "2.564", "2020-05-05 09:25:06", 10, 4);
}