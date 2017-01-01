<?php include("com/db.php") ?>
<html>
<head>
    <title>Producer</title>
    <?php include("com/head.php") ?>
</head>
<body>
    <?php include("com/menu.php") ?>
    <div class = "Search">
    <form method = "post" action = "Producer.php">
        <input type = "text" name = "searchTarget" placeholder = "搜尋偶像名稱">
        <input type = "submit" value = "Search">
        <a href = "Producer_add.php"><input type = "button" value = "Add"></a>
        <a href = "Producer_edit.php"><input type = "button" value = "Edit"></a>
        <a href = "Producer_delete.php"><input type = "button" value = "Delete"></a>
    </form>
    </div>
    <table class = "IdolCardTable">
        <tr>
            <th>CID</th>
            <th>Card Name</th>
            <th>Idol Name</th>
            <th>Level</th>
            <th>Shinaido</th>
        </tr>
        <?php
            if (isset($_POST["searchTarget"])) {
                $sql = "SELECT * FROM producer WHERE IdolName LIKE ?";
                $searchTarget = "%".$_POST["searchTarget"]."%";
            } else
                $sql = "SELECT * FROM producer ORDER BY IdolName";
            if ($stmt = $db->prepare($sql)) {
                if (isset($_POST["searchTarget"]))
                    $stmt->bind_param("s", $searchTarget);
                $stmt->execute();
                $stmt->bind_result($CID, $CardName, $IdolName, $Level, $Shinaido);
                while ($stmt->fetch()) {
                    ?>
                    <tr>
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
</body>
</html>