<?php include("com/db.php") ?>
<html>
<head>
    <title>Idol Card</title>
    <?php include("com/head.php") ?>
</head>
<body>
    <?php include("com/menu.php"); ?>

    <div class = "Search">
    <form method = "post" action = "IdolCard.php">
        <input type = "text" name = "searchTarget" placeholder = "搜尋偶像名稱">
        <input type = "submit" value = "Search">
        <a href = "IdolCard_add.php"><input type = "button" value = "Add"></a>
    </form>

    </div>

	<div>
		總卡片數為: 
		<?php
			$sql = "SELECT COUNT(*) FROM idolCard";
			if($result = mysqli_query($db,$sql)){
				$rowcount= mysqli_fetch_row($result);
				echo $rowcount[0];
			}
		?>
	</div>

    <form method = "POST" action = "IdolSetting.php">
    <table class = "IdolCardTable">
        <tr>
            <th>Card ID</th>
            <th>卡片名稱</th>
            <th>偶像</th>
            <th>稀有度</th>
            <th>屬性</th>
            <th>Vocal</th>
            <th>Dance</th>
            <th>Visual</th>
            <th>Life</th>
            <th>隊長技</th>
            <th>技能</th>
        </tr>
        <?php
            $searchTarget = "";
            if (isset($_POST["searchTarget"])) {
                $sql = "SELECT * FROM idolability NATURAL JOIN idolcard WHERE IdolName LIKE ?";
                $searchTarget = "%".$_POST["searchTarget"]."%";
            } else if (isset($_POST["searchTargetExa"])) {
                $sql = "SELECT * FROM idolability NATURAL JOIN idolcard WHERE IdolName=?";
                $searchTarget = $_POST["searchTargetExa"];
            } else 
                $sql = "SELECT * FROM idolability NATURAL JOIN idolcard ORDER BY CID;";
            if ($stmt = $db->prepare($sql)) {
                if ($searchTarget)
                    $stmt->bind_param("s", $searchTarget);
                $stmt->execute();
                $stmt->bind_result($CID, $Vocal, $Dance, $Visual, $Life, $Leader, $Skill, $CardName, $IdolName, $Type, $Rarity);
                while ($stmt->fetch()) {
                    ?>
                    
                    <tr>
                        <td><?php echo $CID; ?></td>
                        <td><?php echo $CardName; ?></td>
                        <td>
                            <input type = "submit" name = "searchTargetExa" value = "<?php echo $IdolName; ?>">
                        </td>
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
    </form>
</body>
</html>