<?php
	function getMessage($id=0) {

		global $conn;

		if (is_int((int)$id)) {
			$query = "SELECT * FROM message";
			if($id != 0)
			{
				$query .= " WHERE id=".$id." LIMIT 1";
			}
			$response = array();
			$result = mysqli_query($conn, $query);
			while($row = mysqli_fetch_array($result)) {
				$response[] = $row;
			}
			header('Content-Type: application/json');
			echo json_encode($response, JSON_PRETTY_PRINT);
		} else {
			echo "not";
		}
	} 
?>