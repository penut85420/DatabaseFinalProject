<?php
	include("com/db.php");
	
	$CID = $_POST["CID"];
	$CardName = $_POST["CardName"];
	$IdolName = $_POST["IdolName"];	
	$Type = $_POST["Type"];	
	$Rarity = $_POST["Rarity"];
	$VOCAL = $_POST["VOCAL"];
	$DANCE = $_POST["DANCE"];
	$VISUAL = $_POST["VISUAL"];
	$LIFE = $_POST["LIFE"];
	$Leader = $_POST["Leader"];
	$Skill = $_POST["Skill"];
	
	$sql = "INSERT INTO idolcard (CID, CardName, IdolName, Type, Rarity) VALUES (?,?,?,?,?)";

	if ($stmt = $db->prepare($sql)) {
		$stmt->bind_param("issss", $CID, $CardName, $IdolName, $Type, $Rarity);
		$stmt->execute();
	}

	$sql = "INSERT INTO idolability (CID, VOCAL, DANCE, VISUAL, LIFE, Leader, Skill) VALUES (?,?,?,?,?,?,?)";

	if ($stmt = $db->prepare($sql)) {
		$stmt->bind_param("iiiiiss", $CID, $VOCAL, $DANCE, $VISUAL, $LIFE, $Leader, $Skill);
		$stmt->execute();
	}

	header('Location: idolcard.php');
?>