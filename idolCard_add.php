<html>
<head>
    <title>新增卡片</title>
    <?php include("com/head.php") ?>
</head>
<body>
	<?php include("com/menu.php") ?>

	<form action = "idolCard_addsave.php" method = "post">
    <table class = "IdolCardTable IdolSettingAddTable">
        <tr>
			<th>#</th>
			<th>CID</th>
            <th>卡片名稱</th>
            <th>偶像名稱</th>
            <th>屬性</th>
            <th>稀有度</th>
			<th>Vocal</th>
			<th>Dance</th>
			<th>Visual</th>
			<th>Life</th>
			<th>隊長技</th>
			<th>特技</th>
        </tr>
		<tr> 
			<td><input type="submit" value="送出"></td>
			<td><input type="text" name="CID"></td>
			<td><input type="text" name="CardName"></td>
			<td><input type="text" name="IdolName"></td>
			<td><input type="text" name="Type"></td>
			<td><input type="text" name="Rarity"></td>
			<td><input type="text" name="VOCAL"></td>
			<td><input type="text" name="DANCE"></td>
			<td><input type="text" name="VISUAL"></td>
			<td><input type="text" name="LIFE"></td>
			<td><input type="text" name="Leader"></td>
			<td><input type="text" name="Skill"></td>
		</tr>       
    </table>
</form>
</body>
</html>