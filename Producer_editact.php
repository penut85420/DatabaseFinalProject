<?php
    include("com/db.php");
    $CID = $_POST["CID"];
    $CardName = $_POST["CardName"];
    $IdolName = $_POST["IdolName"];
    $Level = $_POST["Level"];
    $Shinaido = $_POST["Shinaido"];

    $sql = "UPDATE Producer SET CID=?, CardName=?, IdolName=?, Level=?, Shinaido=? WHERE CID=?";

    if ($stmt = $db->prepare($sql)) {
        $stmt->bind_param("issiii", $CID, $CardName, $IdolName, $Level, $Shinaido, $CID);
        $stmt->execute();
		$stmt->close();
        header('Location: producer.php');
    }
?>