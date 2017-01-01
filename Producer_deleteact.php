<?php
    include("com/db.php");
    $CID = explode("=", $_SERVER['QUERY_STRING']);

    $sql = "DELETE FROM Producer WHERE CID=?";
    if ($stmt = $db->prepare($sql)) {
        $stmt->bind_param("i", $CID[0]);
        $stmt->execute();
		$stmt->close();
        header('Location: producer.php');
    }
?>