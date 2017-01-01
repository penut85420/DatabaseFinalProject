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
    </div>
    <table class = "IdolCardTable">
        <tr>
            <th>Idol Name</th>
            <th>Height</th>
            <th>Weight</th>
            <th>Age</th>
            <th>Birthday</th>
            <th>Blood Type</th>
            <th>Three Size</th>
            <th>Handedness</th>
            <th>Constellation</th>
            <th>Place</th>
            <th>Interest</th>
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