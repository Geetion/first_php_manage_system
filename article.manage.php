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
<table width="100%" cellspacing="1" bgcolor="#000">
	<tr><td align="center" bgcolor="#fff" colspan="2"><strong>文章管理</strong></td></tr>
	<tr>
		<td width="156" align="left" valign="top" bgcolor="#fff"><p align="center"><a href="article.add.php">发布文章</a></p><p align="center"><a href="article.manage.php">管理文章</a></p></td>
		<td>
			<table width="100%"  bgcolor="#000" cellspacing="1">
				<?php
					if (!empty($data)) {
						foreach ($data as $value) {
				?>
				<tr height='50'>
					<td bgcolor="#fff" width="50" align="center"><?php echo $value['id'];?></td>
					<td bgcolor="#fff"><?php echo $value['title'];?></td>
					<td bgcolor="#fff"><a href="PHP/article.del.handle.php?id=<?php echo $value['id']?>">删除 </a><a href="article.modify.php?id=<?php echo $value['id']?>"> 修改</a></td>
				</tr>
				<?php	
						}
					}
				?>

			</table>
		</td>
	</tr>
</table>

</body>
</html>