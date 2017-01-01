<html>
<head>
    <title>偶像搜尋</title>
    <?php include("func/head.php") ?>
</head>
<body>
<?php include("func/menu.php"); ?>
	
<form method = "post" action = "idolSetting_addsave.php">
    <table class = "IdolSettingAddTable IdolCardTable">
		<tr>
			<th>#</th>
			<th>姓名</th>
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
		<tr>
			<td><input type="submit" value="新增"></td>
			<td><input type="text" name="IdolName"></td>
			<td><input type="text" name="Height"></td>
			<td><input type="text" name="Weight"></td>
			<td><input type="text" name="age"></td>
			<td><input type="text" name="Birtdday"></td>
			<td><input type="text" name="BloodType"></td>
			<td><input type="text" name="tdreeSize"></td>
			<td><input type="text" name="Handedness"></td>
			<td><input type="text" name="Constellation"></td>
			<td><input type="text" name="Place"></td>
			<td><input type="text" name="Interest"></td>
			<td><input type="text" name="CV"></td>
		</tr>
	</table>
</form>
</body>
</html>