<?php
require_once('DBController.php');
require_once('dbh.inc.php');
?>

<?php
class utility
{
    private $controller;

    public function __construct()
    {
        $this->controller = new DBController();
    }

    public function addAdmin($username,$branchID,$adminID,$password,$isActive,$name,$regNo)
    {
        $query = "INSERT INTO
		        admin
		        (username, branchID, adminID, password, isActive, name, regNo)
		        VALUES
		        ('$username','$branchID','$adminID','$password','$isActive','$name','$regNo');
		    ";
        $result = $this->controller->insertQuery($query);
        if ($result) {
            echo "new admin {$username} is added successfully";
        }
    }

    public function addBlacklistEntry($entryID, $vehicleID, $latitude, $longitude, $datetim, $branchID, $blacklistedBy){
        $query = "INSERT INTO 
                blacklisteddetails
                (entryID, vehicleID, latitude, longitude, datetim, branchID, blacklistedBy)
                VALUES
                ('$entryID', '$vehicleID', '$latitude', '$longitude', '$datetim', '$branchID', '$blacklistedBy');";
        $result = $this->controller->insertQuery($query);
        if($result){
            echo "new blacklisted entry is added";
        }
    }

    public function addBlacklistedVehicle($vehicleID, $vehicle_number,$isblacklisted){
        $query = "INSERT INTO
                blacklistedvehicles
                (vehicleID, vehicle_number, isblacklisted)
                VALUES
                ('$vehicleID', '$vehicle_number','$isblacklisted');";
        $result = $this->controller->insertQuery($query);
        if($result){
            echo "black listed vehicle added successfully";
        }
    }

    public function addCheckedDetails($id, $check_id, $latitude, $longitude, $datetim, $checkedBy, $branchID){
        $query = "INSERT INTO
                checkeddetails
                (id, check_id, latitude, longitude, datetim, checkedBy, branchID)
                VALUES
                ('$id', '$check_id', '$latitude', '$longitude', '$datetim', '$checkedBy', '$branchID');";
                $result = $this->controller->insertQuery($query);
                if($result){
                    echo "checked details added successfully";
                }
    }

    public function addCheckedVehicle($check_id, $vehicle_no){
        $query = "INSERT INTO
                checkedvehicles
                (check_id, vehicle_no)
                VALUES
                ('$check_id', '$vehicle_no');";
        $result = $this->controller->insertQuery($query);
        if($result){
            echo "checked vehicle added successfully";
        }
    }

    public function addNewNotification($id, $checkeddetails_id, $isRead){
        $query = "INSERT INTO
                notifications
                (id, checkeddetails_id, isRead)
                VALUES
                ('$id', '$checkeddetails_id', '$isRead');";
        $result = $this->controller->insertQuery($query);
        if($result){
            echo "notification is added successfully";
        }
    }

    public function addReleasedVehicle($bID, $releasedDatetime){
        $query = "INSERT INTO
                releasedvehicle
                (bID, releasedDatetime)
                VALUES
                ('$bID', '$releasedDatetime');";
        $result = $this->controller->insertQuery($query);
        if($result){
            echo "releasead vehicle added successfully";
        }
    }

    public function addNewUser($userID, $username, $branchID, $isActive, $password, $name, $regNo){
        $query = "INSERT INTO
                users
                (userID, username, branchID, isActive, password, name, regNo)
                VALUES
                ('$userID', '$username', '$branchID', '$isActive', '$password', '$name', '$regNo');";
        $result = $this->controller->insertQuery($query);
        if($result){
            echo "user added successfully";
        }
    }
}