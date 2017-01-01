<html>
<head>
    <title>Producer Add</title>
    <?php include("com/head.php") ?>
</head>
<body>
<?php include("com/menu.php"); ?>
	
<form method = "post" action = "Producer_addsave.php">
    <table class = "IdolSettingAddTable IdolCardTable">
		<tr>
			<th>#</th>
            <th>CID</th>
            <th>Card Name</th>
            <th>Idol Name</th>
            <th>Level</th>
            <th>Shinaido</th>
        </tr>
		<tr>
			<td><input type="submit" value="新增"></td>
			<td><input type="text" name="CID"></td>
			<td><input type="text" name="CardName"></td>
			<td><input type="text" name="IdolName"></td>
			<td><input type="text" name="Level"></td>
			<td><input type="text" name="Shinaido"></td>
		</tr>
	</table>
</form>
</body>
</html>