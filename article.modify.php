<?php
	require_once('PHP/connect.php');
	$id = $_GET['id'];

	$querysql = "select * from article where id=$id";
	$result = mysql_query($querysql);
	$data = mysql_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 	<p align="center">文章修改</p>
 	<form method="post" action="PHP/article.modify.handle.php">
	 	<table width="100%">
	 		<input type="hidden" name="id" value="<?php echo $id;?>"/>
	 		<tr><td>题目</td><td><input type="text" name="title" value="<?php echo $data['title']?>"></input></td></tr>
	 		<tr><td>作者</td><td><input type="text" name="author" value="<?php echo $data['author']?>"></input></td></tr>
	 		<tr><td>简介</td><td><textarea name="description" value="<?php echo $data['description']?>"></textarea></td></tr>
	 		<tr><td>内容</td><td><textarea name="content" value="<?php echo $data['content']?>"></textarea></td></tr>
	 		<tr><td colspan="2"><input type="submit"></input></td></tr>
	 	</table>
 	</form>
</body>
</html>