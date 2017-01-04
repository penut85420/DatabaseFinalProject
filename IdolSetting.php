<?php include("com/db.php"); ?>
<html>
<head>
    <title>Idol Setting</title>
    <?php include("com/head.php") ?>
    <script>
        function changeSort(s) {
            document.getElementById("ORDERBY").value = s;
            document.getElementById("Form").action = "IdolSetting.php";
            document.getElementById("Form").submit();
        }
    </script>
</head>
<body>
    <?php include("com/menu.php"); ?>

    <div class = "Search">
    <form method = "post" action = "IdolSetting.php">
        <input type = "text" name = "searchTarget" placeholder = "搜尋偶像名稱">
        <input type = "submit" value = "搜尋">
        <a href = "IdolSetting_add.php"><input type = "button" value = "新增"></a>
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

    <form id = "Form" method = "POST" action = "IdolCard.php">
    <?php 
        $OrderBy = "";
        if (isset($_POST["ORDERBY"])) {
             $OrderBy = $_POST["ORDERBY"];
        }
        if ($OrderBy == "") $OrderBy = "IdolName";

        $ADSC = "ASC";
        if (isset($_POST["ADSC"])) {
            if ($_POST["ADSC"] == "ASC") {
                $ADSC = "DESC";
            } else {
                $ADSC = "ASC";
            }
        }
     ?>
    <input type = "hidden" name = "ORDERBY" id = "ORDERBY">
    <input type = "hidden" name = "ADSC" id = "ADSC" value = "<?php echo $ADSC; ?>">
    <input type = "hidden" name = "searchTarget" id = "searchTarget" value = "<?php if (isset($_POST["searchTarget"])) echo $_POST["searchTarget"]; ?>">
    <table class = "IdolCardTable">
        <tr>
            <th onclick = "changeSort('IdolName');">偶像</th>
            <th onclick = "changeSort('Height');">身高</th>
            <th onclick = "changeSort('Weight');">體重</th>
            <th onclick = "changeSort('Age');">年齡</th>
            <th onclick = "changeSort('Birthday');">生日</th>
            <th onclick = "changeSort('BloodType');">血型</th>
            <th onclick = "changeSort('ThreeSize');">三圍</th>
            <th onclick = "changeSort('Handedness');">慣用手</th>
            <th onclick = "changeSort('Constellation');">星座</th>
            <th onclick = "changeSort('Place');">出生地</th>
            <th onclick = "changeSort('Interest');">興趣</th>
            <th onclick = "changeSort('CV');">CV</th>
        </tr>
        <?php
            $searchTarget = "";
            if (isset($_POST["searchTargetExa"])) {
                $sql = "SELECT * FROM idolsetting WHERE IdolName = ?";
                $searchTarget = $_POST["searchTargetExa"];
            } else if (isset($_POST["searchTarget"])) {
                $sql = "SELECT * FROM idolsetting WHERE IdolName LIKE ?";
                $searchTarget = "%".$_POST["searchTarget"]."%";
            } else  $sql = "SELECT * FROM idolsetting";
            $sql = $sql." ORDER BY ".$OrderBy." ".$ADSC;

            if ($stmt = $db->prepare($sql)) {
                if ($searchTarget)
                    $stmt->bind_param("s", $searchTarget);
                $stmt->execute();
                $stmt->bind_result($IdolName, $Height, $Weight, $Age, $Birthday, $BloodType, $ThreeSize, $Handedness, $Constellation, $Place, $Interest, $CV);
                while ($stmt->fetch()) {
                    ?>
                    <tr>
                    <td>
                        <input type = "submit" name = "searchTargetExa" value = "<?php echo $IdolName; ?>">
                    </td>
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
            } else {
                echo $db->error;
            }
        ?>
    </table>
    </form>
</body>
</html>