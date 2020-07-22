<?php
	$connect = mysqli_connect("localhost","root","","cr10_bruno_biglibrary");

	$search = $_POST["email"];

	// $search = isset($_POST["search"]) ? $_POST["search"] : "null"

	$sql = "SELECT * FROM users WHERE userEmail LIKE '$search%'";

	$result = mysqli_query($connect, $sql);

	if($result->num_rows == 0){
		echo "No result";
	}elseif($result->num_rows == 1){
		$row = $result->fetch_assoc();
		echo $row["userEmail"]. " " . $row["userName"] . " " . $row["UserLastname"];
	}else {
		$rows = $result->fetch_all(MYSQLI_ASSOC);
		foreach ($rows as $row) {
			echo $row["userEmail"] . " " . $row["userName"] . " " . $row["UserLastname"]."<br>";
		}
	}

?>