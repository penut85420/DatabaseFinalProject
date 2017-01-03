<?php include("com/db.php") ?>
<html>
<head>
    <title>Producer Delete</title>
    <?php include("com/head.php") ?>
    <script>
        function UpdateData(cid) {
            console.log(cid);
            document.getElementById("CID").value = document.getElementById("CID" + cid).value;
            document.getElementById("CardName").value = document.getElementById("CardName" + cid).value;
            document.getElementById("IdolName").value = document.getElementById("IdolName" + cid).value;
            document.getElementById("Level").value = document.getElementById("Level" + cid).value;
            document.getElementById("Shinaido").value = document.getElementById("Shinaido" + cid).value;
            document.getElementById("Form").action = "Producer_editact.php";
            document.getElementById("Form").submit();
        }
    </script>
</head>
<body>
<?php include("com/menu.php"); ?>
	
<form id = "Form" method = "POST" action = "Producer_editact.php">
    <td><input type = "hidden" id = "CID" name = "CID" value = "<?php echo $CID; ?>"></td>
    <td><input type = "hidden" id = "CardName" name = "CardName" value = "<?php echo $CardName; ?>"></td>
    <td><input type = "hidden" id = "IdolName" name = "IdolName" value = "<?php echo $IdolName; ?>"></td>
    <td><input type = "hidden" id = "Level" name = "Level" value = "<?php echo $Level; ?>"></td>
    <td><input type = "hidden" id = "Shinaido" name = "Shinaido" value = "<?php echo $Shinaido; ?>"></td>
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
                    <td><input type = "submit" value = "Update" onclick = "UpdateData('<?php echo $CID ?>')"></td>
                    <td><input type = "text" id = "CID<?php echo $CID ?>" value = "<?php echo $CID; ?>"></td>
                    <td><input type = "text" id = "CardName<?php echo $CID ?>" value = "<?php echo $CardName; ?>"></td>
                    <td><input type = "text" id = "IdolName<?php echo $CID ?>" value = "<?php echo $IdolName; ?>"></td>
                    <td><input type = "text" id = "Level<?php echo $CID ?>" value = "<?php echo $Level; ?>"></td>
                    <td><input type = "text" id = "Shinaido<?php echo $CID ?>" value = "<?php echo $Shinaido; ?>"></td>
                    </tr>
                    <?php
                }
            }
        ?>
    </table>
</form>
</body>
</html>