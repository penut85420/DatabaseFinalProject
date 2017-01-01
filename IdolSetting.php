<?php include("com/db.php"); ?>
<html>
<head>
    <title>Idol Setting</title>
    <?php include("com/head.php") ?>
</head>
<body>
    <?php include("com/menu.php"); ?>

    <div class = "Search">
    <form method = "post" action = "IdolSetting.php">
        <input type = "text" name = "searchTarget">
        <input type = "submit" value = "Search">
        <a href = "IdolSetting_add.php"><input type = "button" value = "Add"></a>
    </form>

    </div>
	<div>
		總偶像數為: 
		<?php
			$sql = "SELECT COUNT(*) FROM idolsetting";
			if($result = mysqli_query($db,$sql)){
				$rowcount= mysqli_fetch_row($result);
				echo $rowcount[0];
			}
		?>
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