<?php include("func/db.php"); ?>
<html>
<head>
    <title>Idol Card</title>
    <link rel = "stylesheet" href = "style.css">
</head>
<body>
    <?php include("func/menu.php"); ?>

    <div class = "Search">
    <form method = "post" action = "IdolCard.php">
        <input type = "text" name = "searchTarget" class = "TextField">
        <input type = "submit" class = "Button" value = "Search">
    </form>
    </div>
    <table class = "IdolCardTable">
        <tr>
            <th>Card ID</th>
            <th>Card Name</th>
            <th>Idol Name</th>
            <th>Type</th>
            <th>Rarity</th>
        </tr>
        <?php
            if (isset($_POST["searchTarget"])) 
                $sql = "SELECT * FROM idolcard WHERE IdolName like" + $_POST["searchTarget"];
            else
                $sql = "SELECT * FROM idolcard ORDER BY cid";

            if ($stmt = $db->prepare($sql)) {
                $stmt->execute();
                $stmt->bind_result($CID, $CardName, $IdolName, $Type, $Rarity);
                while ($stmt->fetch()) {
                    ?>
                    <tr>
                    <td><?php echo $CID; ?></td>
                    <td><?php echo $CardName; ?></td>
                    <td><?php echo $IdolName; ?></td>
                    <td><?php echo $Type; ?></td>
                    <td><?php echo $Rarity; ?></td>
                    </tr>
                    <?php
                }
            }
        ?>
    </table>
</body>
</html>