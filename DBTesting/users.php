<?php
require_once('DBController.php');
require_once('dbh.inc.php');
require_once('utilityManager.php');
?>

<?php

// addNewUser();
// addUserWithInvalidBranch();
addUserDuplicateRegNo();

//add a new user
function addNewUser(){
    $utility = new utility();
    $utility->addNewUser("auto_inc", "testUsername", 2, 1, "password", "test user", "170");
}

//user with iduplicate regNo
function addUserDuplicateRegNo(){
    $utility = new utility();
    $utility->addNewUser("auto_inc", "testUsername", 5, 1, "password", "test user", "170");
}

//user with invalid branch id
function addUserWithInvalidBranch(){
    $utility = new utility();
    $utility->addNewUser("auto_inc", "testUsername", 5, 1, "password", "test user", "171");
}