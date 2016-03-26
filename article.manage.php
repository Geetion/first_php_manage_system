<?php
	require_once('PHP/connect.php');
	$query = ('select * from article order by id');
	if ($result = mysql_query($query)) {
		while ($row = mysql_fetch_assoc($result)) {
			$data[] = $row; 
		}
	}else{
		$data = array();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table width="100%"  bgcolor="#000" cellspacing="1">
	<tr height='50'><td bgcolor="#fff" colspan="3" align="center">文章管理</td></tr>
	<?php
		if (!empty($data)) {
			foreach ($data as $value) {
	?>
	<tr height='50'>
		<td bgcolor="#fff" width="50" align="center"><?php echo $value['id'];?></td>
		<td bgcolor="#fff"><?php echo $value['title'];?></td>
		<td bgcolor="#fff"><a href="PHP/article.del.handle.php?id=<?php echo $value['id']?>">删除 </a><a href="article.modify"> 修改</a></td>
	</tr>
	<?php	
			}
		}
	?>

</table>

</body>
</html>