<?php
require_once('DBController.php');
require_once('dbh.inc.php');
require_once('utilityManager.php');
?>

<?php

// addNewNotification();

//add a new notification
function addNewNotification(){
    $utility = new utility;
    $utility->addNewNotification("auto_inc", 40, 1);
}
