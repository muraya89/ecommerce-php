<?php
    require_once 'mydb.inc.php';
    if(isset($_GET['image_id'])) {
        $sql = "SELECT image_type,image_data FROM category WHERE category_id=" . $_GET['image_id'];
		$result = mysqli_query($conn, $sql) or die("<b>Error:</b> Problem on Retrieving Image BLOB<br/>" . mysqli_error($conn));
		$row = mysqli_fetch_array($result);
		header("Content-type: " . $row["image_type"]);
        echo $row["image_data"];
	}
	mysqli_close($conn);

  
