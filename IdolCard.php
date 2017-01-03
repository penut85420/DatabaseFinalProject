<?php include("com/db.php") ?>
<html>
<head>
    <title>Idol Card</title>
    <?php include("com/head.php") ?>
    <script>
        function changeSort(s) {
            document.getElementById("ORDERBY").value = s;
            document.getElementById("Form").action = "IdolCard.php";
            document.getElementById("Form").submit();
        }
    </script>
</head>
<body>
    <?php include("com/menu.php"); ?>
    <div class = "Search">
    <form method = "post" action = "IdolCard.php">
        <input type = "text" name = "searchTarget" 
            placeholder = "搜尋偶像名稱" value = "<?php if (isset($_POST["searchTarget"])) echo $_POST["searchTarget"]; ?>">
        <input type = "submit" value = "Search">
        <a href = "IdolCard_add.php"><input type = "button" value = "Add"></a>
    </form>

    </div>

	<div>
		總卡片數為: 
		<?php
			$sql = "SELECT COUNT(*) FROM idolCard";
			if ($result = mysqli_query($db, $sql)) {
				$rowcount = mysqli_fetch_row($result);
				echo $rowcount[0];
			}
		?>
	</div>

    <form id = "Form" method = "POST" action = "IdolSetting.php">
    <?php 
        $OrderBy = "";
        if (isset($_POST["ORDERBY"])) {
             $OrderBy = $_POST["ORDERBY"];
        }
        else $OrderBy = "CID";

        $ADSC = "ASC";
        if (isset($_POST["ADSC"])) {
            if ($_POST["ADSC"] == "ASC") {
                $ADSC = "DESC";
            } else {
                $ADSC = "ASC";
            }
        }
     ?>
    <input type = "hidden" name = "ORDERBY" id = "ORDERBY" value = "">
    <input type = "hidden" name = "ADSC" id = "ADSC" value = "<?php echo $ADSC; ?>">
    <input type = "hidden" name = "searchTarget" id = "searchTarget" value = "<?php if (isset($_POST["searchTarget"])) echo $_POST["searchTarget"]; ?>">
    <table class = "IdolCardTable">
        <tr>
            <th onclick = "changeSort('CardName');">卡片名稱</th>
            <th onclick = "changeSort('IdolName');">偶像</th>
            <th onclick = "changeSort('Rarity');">稀有度</th>
            <th onclick = "changeSort('Type');">屬性</th>
            <th onclick = "changeSort('Vocal');">Vocal</th>
            <th onclick = "changeSort('Dance');">Dance</th>
            <th onclick = "changeSort('Visual');">Visual</th>
            <th onclick = "changeSort('Life');">Life</th>
            <th onclick = "changeSort('Leader');">隊長技</th>
            <th onclick = "changeSort('Skill');">技能</th>
        </tr>
        <?php
            if (isset($_POST["searchTarget"])) {
                $sql = "SELECT * FROM idolability NATURAL JOIN idolcard WHERE IdolName LIKE ? ORDER BY ";
                $searchTarget = "%".$_POST["searchTarget"]."%";
            } else if (isset($_POST["searchTargetExa"])) {
                $sql = "SELECT * FROM idolability NATURAL JOIN idolcard WHERE IdolName = ? ORDER BY ";
                $searchTarget = $_POST["searchTargetExa"];
            } else 
                $sql = "SELECT * FROM idolability NATURAL JOIN idolcard ORDER BY ";
            $sql = $sql.$OrderBy." ".$ADSC;
            if ($stmt = $db->prepare($sql)) {
                if (isset($_POST["searchTarget"])) {
                    $stmt->bind_param("s", $searchTarget);
                }
                
                $stmt->execute();
                $stmt->bind_result($CID, $Vocal, $Dance, $Visual, $Life, $Leader, $Skill, $CardName, $IdolName, $Type, $Rarity);
                while ($stmt->fetch()) {
                    ?>
                    
                    <tr>
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