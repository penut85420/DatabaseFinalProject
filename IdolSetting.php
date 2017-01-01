<?php include("func/db.php"); ?>
<html>
<head>
    <title>Idol Setting</title>
    <link rel = "stylesheet" href = "style.css">
</head>
<body>
    <?php include("func/menu.php"); ?>

    <div class = "Search">
    <form method = "post" action = "IdolSetting.php">
        <input type = "text" name = "searchTarget" class = "TextField">
        <input type = "submit" class = "Button" value = "Search">
    </form>
    <form action = "IdolSetting_add.php">
    </form>
    </div>
    <table class = "IdolCardTable">
        <tr>
            <th>偶像</th>
            <th>身高</th>
            <th>體重</th>
            <th>年齡</th>
            <th>生日</th>
            <th>血型</th>
            <th>三圍</th>
            <th>慣用手</th>
            <th>星座</th>
            <th>出生地</th>
            <th>興趣</th>
            <th>CV</th>
        </tr>
        <?php
            if (isset($_POST["searchTarget"])) {
                $sql = "SELECT * FROM idolsetting WHERE IdolName like ?";
                $searchTarget = "%".$_POST["searchTarget"]."%";
            } else
                $sql = "SELECT * from idolsetting ORDER BY idolname";
            if ($stmt = $db->prepare($sql)) {
                $stmt->execute();
                $stmt->bind_result($IdolName, $Height, $Weight, $Age, $Birthday, $BloodType, $ThreeSize, $Handedness, $Constellation, $Place, $Interest, $CV);
                while ($stmt->fetch()) {
                    ?>
                    <tr>
                    <td><?php echo $IdolName; ?></td>
                    <td><?php echo $Height; ?></td>
                    <td><?php echo $Weight; ?></td>
                    <td><?php echo $Age; ?></td>
                    <td><?php echo $Birthday; ?></td>
                    <td><?php echo $BloodType; ?></td>
                    <td><?php echo $ThreeSize; ?></td>
                    <td><?php echo $Handedness; ?></td>
                    <td><?php echo $Constellation; ?></td>
                    <td><?php echo $Place; ?></td>
                    <td><?php echo $Interest; ?></td>
                    <td><?php echo $CV; ?></td>
                    </tr>
                    <?php
                }
            }
        ?>
    </table>
</body>
</html>