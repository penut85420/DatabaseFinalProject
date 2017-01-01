<?php
	include("com/db.php");
	
	$CID = $_POST["CID"];
	$CardName = $_POST["CardName"];
	$IdolName = $_POST["IdolName"];
	$Level = $_POST["Level"];
	$Shinaido = $_POST["Shinaido"];

	$sql = "INSERT INTO Producer (CID, CardName, IdolName, Level, Shinaido) VALUES (?,?,?,?,?);";

	if ($stmt = $db->prepare($sql)) {
		$stmt->bind_param("issii", $CID, $CardName, $IdolName, $Level, $Shinaido);
		$stmt->execute();
		$stmt->close();
		header('Location: producer.php');
	}
?>