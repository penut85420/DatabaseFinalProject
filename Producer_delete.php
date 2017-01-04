<?php include("com/db.php") ?>
<html>
<head>
    <title>Producer Delete</title>
    <?php include("com/head.php") ?>
</head>
<body>
<?php include("com/menu.php"); ?>
	
<form method = "GET" action = "Producer_deleteact.php">
        <table class = "IdolCardTable">
        <tr>
            <th>#</th>
            <th>CID</th>
            <th>卡片名稱</th>
            <th>偶像</th>
            <th>等級</th>
            <th>親愛度</th>
        </tr>
        <?php
            $sql = "SELECT * FROM producer ORDER BY IdolName";
            if ($stmt = $db->prepare($sql)) {
                $stmt->execute();
                $stmt->bind_result($CID, $CardName, $IdolName, $Level, $Shinaido);
                while ($stmt->fetch()) {
                    ?>
                    <tr>
                    <td><input type = "submit" value = "Delete" name = "<?php echo $CID; ?>"></td>
                    <td><?php echo $CID; ?></td>
                    <td><?php echo $CardName; ?></td>
                    <td><?php echo $IdolName; ?></td>
                    <td><?php echo $Level; ?></td>
                    <td><?php echo $Shinaido; ?></td>
                    </tr>
                    <?php
                }
            }
        ?>
    </table>
</form>
</body>
</html>