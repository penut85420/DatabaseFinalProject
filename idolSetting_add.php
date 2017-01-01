<html>
<head>
    <title>偶像搜尋</title>
    <link rel = "stylesheet" href = "style.css">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
    <?php include("func/menu.php"); ?>
	
<form method = "post" action = "idolSetting_addsave.php">
    <table class = "IdolCardTable">
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
				<th><input type="submit" value="送出"></th>
				<th><input type="text" name="IdolName"></th>
				<th><input type="text" name="Height"></th>
				<th><input type="text" name="Weight"></th>
				<th><input type="text" name="age"></th>
				<th><input type="text" name="Birthday"></th>
				<th><input type="text" name="BloodType"></th>
				<th><input type="text" name="ThreeSize"></th>
				<th><input type="text" name="Handedness"></th>
				<th><input type="text" name="Constellation"></th>
				<th><input type="text" name="Place"></th>
				<th><input type="text" name="Interest"></th>
				<th><input type="text" name="CV"></th>
			</tr>
    </table>
</form>
</body>
</html>