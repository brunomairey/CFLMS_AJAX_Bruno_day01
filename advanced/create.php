<?php
	$conn = mysqli_connect("localhost","root","","ajax");

	$create = $_POST["create"];

// 	$sql = "SELECT * FROM ajax WHERE name LIKE '".$search."%'";
// 	$result = mysqli_query($conn,$sql);
// 	$rows = $result->fetch_all(MYSQLI_ASSOC);

// 	if($result->num_rows != 0 && $search != ""){
// 		foreach ($rows as $value) {
// 		echo $value["name"]."<br>";
// 	}
// }else {
// 		echo "No result";
// 	}
	

	$sql = "INSERT INTO ajax (name) VALUES ('$create')";
	if(mysqli_query($conn, $sql) == TRUE){
		echo "success";
	}else {
		echo "error";
	}

?>