<DOCTYPE html>
<html>
<head>
<title> php test</title>
<body>
<form method="POST">
	<input type="submit" name="day" value="日間">
	<input type="submit" name="week" value="週間">
	<input type="submit" name="month" value="月間">
	<input type="submit" name="quater" value="四半期">
	<input type="submit" name="year" value="年間">
	<input type="submit" name="total" value="累計">
</form>
<table  width="100%"border="1">
<?php
try {
	$db = new PDO('sqlite:syosetu.sqlite');
}catch (PDOException $e){
	var_dump($e->getMessage());
	exit;
}

$sql = "select * from rank_list";
$stmt = $db->query($sql);
foreach($stmt->fetchAll(PDO::FETCH_ASSOC)as $list){
	if(isset($_POST["day"])){
	if($list['range']=="日間"){
?>
<tr>
	<td><?php echo($list['rank']);?></td>
	<td><?php echo($list['title']);?></td>
	<td><?php echo($list['author']);?></td>
	<td><?php echo($list['genru']);?></td>
</tr>
<?php	
		}
	}
?>
<?php
	if(isset($_POST["week"])){
	if($list['range']=="週間"){
?>
<tr>
	<td><?php echo($list['rank']);?></td>
	<td><?php echo($list['title']);?></td>
	<td><?php echo($list['author']);?></td>
	<td><?php echo($list['genru']);?></td>
</tr>
<?php	
	}
}
?>
<?php
	if(isset($_POST["month"])){
	if($list['range']=="月間"){
?>
<tr>
	<td><?php echo($list['rank']);?></td>
	<td><?php echo($list['title']);?></td>
	<td><?php echo($list['author']);?></td>
	<td><?php echo($list['genru']);?></td>
</tr>
<?php	
		}
	}
?>
<?php
	if(isset($_POST["quater"])){
	if($list['range']=="四半期"){
?>
<tr>
	<td><?php echo($list['rank']);?></td>
	<td><?php echo($list['title']);?></td>
	<td><?php echo($list['author']);?></td>
	<td><?php echo($list['genru']);?></td>
</tr>
<?php	
		}
	}
?>

<?php
	if(isset($_POST["year"])){
	if($list['range']=="年間"){
?>
<tr>
	<td><?php echo($list['rank']);?></td>
	<td><?php echo($list['title']);?></td>
	<td><?php echo($list['author']);?></td>
	<td><?php echo($list['genru']);?></td>
</tr>
<?php	
		}
	}
?>

<?php
	if(isset($_POST["total"])){
	if($list['range']=="累計"){
?>
<tr>
	<td><?php echo($list['rank']);?></td>
	<td><?php echo($list['title']);?></td>
	<td><?php echo($list['author']);?></td>
	<td><?php echo($list['genru']);?></td>
</tr>
<?php	
		}
	}
}
?>
</table>
</body>
</html>
