<?php
	include("func/db.php");
	
	$IdolName = $_POST["IdolName"];
	$Height = $_POST["Height"];
	$Weight = $_POST["Weight"];
	$age = $_POST["age"];
	$Birthday = $_POST["Birthday"];
	$BloodType = $_POST["BloodType"];
	$ThreeSize = $_POST["ThreeSize"];
	$Handedness = $_POST["Handedness"];
	$Constellation = $_POST["Constellation"];
	$Place = $_POST["Place"];
	$Interest = $_POST["Interest"];
	$CV = $_POST["CV"];

	$sql = "INSERT INTO idolsetting (IdolName, Height, Weight, age, Birthday, BloodType, ThreeSize, Handedness, Constellation, Place, Interest, CV) VALUES (?,?,?,?,?,?,?,?,?,?,?,?);";

	if ($stmt = $db->prepare($sql)) {
		echo "Yeap";
		$stmt->bind_param("siiissssssss", $IdolName, $Height, $Weight, $age, $Birthday, $BloodType, $ThreeSize, $Handedness, $Constellation, $Place, $Interest, $CV);
		$stmt->execute();
		$stmt->close();
		header('Location: idolsetting.php');
	} else {
		die('prepare() failed: '.$db->error);
	}
?>