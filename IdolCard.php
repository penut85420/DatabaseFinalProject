<?php include("func/db.php") ?>
<html>
<head>
    <title>Idol Card</title>
    <?php include("func/head.php") ?>
</head>
<body>
    <?php include("func/menu.php"); ?>

    <div class = "Search">
    <form method = "post" action = "IdolCard.php">
        <input type = "text" name = "searchTarget">
        <input type = "submit" value = "Search">
        <a href = "IdolCard_add.php"><input type = "button" value = "Add"></a>
    </form>

    </div>
    <table class = "IdolCardTable">
        <tr>
            <th>Card ID</th>
            <th>Card Name</th>
            <th>Idol Name</th>
            <th>Rarity</th>
            <th>Type</th>
            <th>Vocal</th>
            <th>Dance</th>
            <th>Visual</th>
            <th>Life</th>
            <th>Leader</th>
            <th>Skill</th>
        </tr>
        <?php
            $sql = "SELECT * FROM idolability NATURAL JOIN idolcard ORDER BY CID;";
            if ($stmt = $db->prepare($sql)) {
                $stmt->execute();
                $stmt->bind_result($CID, $Vocal, $Dance, $Visual, $Life, $Leader, $Skill, $CardName, $IdolName, $Type, $Rarity);
                while ($stmt->fetch()) {
                    ?>
                    <tr>
                        <td><?php echo $CID; ?></td>
                        <td><?php echo $CardName; ?></td>
                        <td><?php echo $IdolName; ?></td>
                        <td><?php echo $Rarity; ?></td>
                        <td><?php echo $Type; ?></td>
                        <td><?php echo $Vocal; ?></td>
                        <td><?php echo $Dance; ?></td>
                        <td><?php echo $Visual; ?></td>
                        <td><?php echo $Life; ?></td>
                        <td><?php echo $Leader; ?></td>
                        <td><?php echo $Skill; ?></td>
                    </tr>
                    <?php
                }
            }
        ?>
    </table>
</body>
</html>