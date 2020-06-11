<?php require_once('dbh.inc.php');

class DBController
{
	private $conn;

	function __construct()
	{
		$this->conn = $this->connectDB();
	}

	function connectDB()
	{
		$db = Database::getInstance();
		$conn = $db->getConnection();
		return $conn;
	}

	//will run the query. (whatever it is)
	function runQuery($query)
	{
		$resultset = null;
		$result1 = mysqli_query($this->conn, $query);
		// echo $result1;
		if ($result1) {
			while ($row = mysqli_fetch_assoc($result1)) {
				$resultset[] = $row;
			}
		}
		return (!empty($resultset)) ? $resultset : false;
    }
    
	//will find the number of rows related to the results of the query.
	function numRows($query)
	{
		$result2  = mysqli_query($this->conn, $query);
		$rowcount = mysqli_num_rows($result2);
		return $rowcount;
    }
    
	//if the query is invalid will let the query be updated.
	function updateQuery($query)
	{
		$result3 = mysqli_query($this->conn, $query);
		if (!$result3) {
			die('Invalid query: ' . mysqli_error($this->conn));
		} else {
			return $result3;
		}
    }
    
	//wil insert data
	function insertQuery($query)
	{
		$result4 = mysqli_query($this->conn, $query);
		if (!$result4) {
			die('Invalid query: ' . mysqli_error($this->conn));
		} else {
			return true;
		}
    }
    
    //will delete data
	function deleteQuery($query)
	{
		$result5 = mysqli_query($this->conn, $query);
		if (!$result5) {
			die('Invalid query: ' . mysqli_error($this->conn));
		} else {
			return $result5;
		}
	}
}
?>