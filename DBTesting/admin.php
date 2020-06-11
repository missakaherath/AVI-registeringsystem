<?php
require_once('DBController.php');
require_once('dbh.inc.php');
require_once('utilityManager.php');
?>

<?php

addNewAdmin();
// addNewAdminWithInvalidBranch();

//adding a new admin
function addNewAdmin(){ //add new admin, duplicate adminID, duplicate regNo can be checked
    $utility = new utility();
    $result = $utility->addAdmin('testNewUser', 1, 25, 'testNewAdminPassword', 1, 'testNewAdminName', '8testNewRegNo');
}

//adding with an invalid branch id, foreign key
function addNewAdminWithInvalidBranch(){
    $utility = new utility();
    $result = $utility->addAdmin('testNewUser', 5, 24, 'testNewAdminPassword', 1, 'testNewAdminName', '7testNewRegNo');
}

