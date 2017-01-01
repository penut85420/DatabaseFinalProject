<?php include("com/db.php") ?>
<html>
<head>
    <title>Producer Delete</title>
    <?php include("com/head.php") ?>
    <script>
        function UpdateData() {
            document.getElementById("CID").value = document.getElementById("ToyID").value;
            document.getElementById("CardName").value = document.getElementById("TName").value;
            document.getElementById("IdolName").value = document.getElementById("Price").value;
            document.getElementById("Level").value = document.getElementById("Description").value;
            document.getElementById("Shinaido").value = document.getElementById("Name").value;
            document.getElementById("Form").action = "Producer_editact.php";
            document.getElementById("Form").submit();
        }
    </script>
</head>
<body>
<?php include("com/menu.php"); ?>
	
<form id = "Form" method = "POST" action = "Producer_editact.php">
        <table class = "IdolCardTable">
        <tr>
            <th>#</th>
            <th>CID</th>
            <th>Card Name</th>
            <th>Idol Name</th>
            <th>Level</th>
            <th>Shinaido</th>
        </tr>
        <?php
            $sql = "SELECT * FROM producer ORDER BY IdolName";
            if ($stmt = $db->prepare($sql)) {
                $stmt->execute();
                $stmt->bind_result($CID, $CardName, $IdolName, $Level, $Shinaido);
                while ($stmt->fetch()) {
                    ?>
                    <tr>
                    <td><input type = "submit" value = "Update" onclick = "UpdateData()"></td>
                    <td><input type = "text" id = "CID" name = "CID" value = "<?php echo $CID; ?>"></td>
                    <td><input type = "text" id = "CardName" name = "CardName" value = "<?php echo $CardName; ?>"></td>
                    <td><input type = "text" id = "IdolName" name = "IdolName" value = "<?php echo $IdolName; ?>"></td>
                    <td><input type = "text" id = "Level" name = "Level" value = "<?php echo $Level; ?>"></td>
                    <td><input type = "text" id = "Shinaido" name = "Shinaido" value = "<?php echo $Shinaido; ?>"></td>
                    </tr>
                    <?php
                }
            }
        ?>
    </table>
</form>
</body>
</html>