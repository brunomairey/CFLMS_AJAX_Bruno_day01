<?php
	$connect = mysqli_connect("localhost","root","","cr10_bruno_biglibrary");

	$search2 = $_POST["lastname"];
	// $search = isset($_POST["search"]) ? $_POST["search"] : "null"

		$sql2 = "SELECT * FROM users WHERE UserLastname LIKE '$search2%'";
	$result = mysqli_query($connect, $sql2);

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