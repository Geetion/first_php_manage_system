<?php
	require_once('PHP/connect.php');

	$page = $_GET['page'];

	$query = "select * from article order by id limit ".(($page-1)*10).",10";
	if ($result = mysql_query($query)) {
		while ($row = mysql_fetch_assoc($result)) {
			$data[] = $row; 
		}
	}else{
		$data = array();
	}

	$item_numsql = 'select * from article';

	$item_numquery = mysql_query($item_numsql);

	$item_num = mysql_num_rows($item_numquery);

	$totol_page = ceil($item_num/10);

	mysql_free_result($result);
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
	<tr>
</table>
<table width="100%">
		<?php
			$pages = 10>$totol_page?$totol_page:10;
			echo "<td><a href='".$_SERVER['PHP_SELF']."?page=1'>首页</a></td>";
			echo "<td><a href='".$_SERVER['PHP_SELF']."?page=".($page-1)."'>上一页</a></td>";
			for ($i=1; $i <=$pages; $i++) { 
					if ($page == $i) {
						echo "<td bgcolor='#fff'><a>".$i."</a></td>";
					}else{
				 echo "<td bgcolor='#fff'><a href='#''>".$i."</a></td>";
				}
		
			}
			echo "<td><a href='".$_SERVER['PHP_SELF']."?page=".($page+1)."'>下一页</a></td>";
			echo "<td>共".$totol_page."页</td>";
			echo "<td><a href='".$_SERVER['PHP_SELF']."?page=".$totol_page."'>尾页</a></td>";
		?>
	</tr>
</table>

</body>
</html>