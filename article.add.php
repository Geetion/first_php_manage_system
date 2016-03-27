<!DOCTYPE html>
<html>
<head>
	<meta charset = 'UTF-8'>
	<title>后台管理系统</title>
	<style type="text/css">
	body{
		margin: 0px;
	}
	</style>
</head>
<body>
<p height="89" align="center" width="100%"><strong>后台管理系统</strong></p>
<table width="100%" height="520" border="0" cellpadding="0" cellspacing="1" bgcolor="#000">
	<tr>
		<td width="156" align="left" valign="top" bgcolor="#fff"><p align="center"><a href="article.add.php">发布文章</a></p><p align="center"><a href="article.manage.php?page=1">管理文章</a></p></td>
		<td width="837" valign="top" bgcolor="#fff" align="center">
			<form method="post" name="article_add" action="PHP/article.add.handle.php">
			<table>
				<tr><td colspan="2" align="center">发布文章</td></tr>
				<tr><td width="100">标题</td><td><input type="text" name="title"></input></td></tr>
				<tr><td>作者</td><td><input type="text" name="author"></input></td></tr>
				<tr><td>简介</td><td><textarea name="description" cols="60"
				rows="5"></textarea></td></tr>
				<tr><td>内容</td><td><textarea name="content" cols="60"
				rows="15"></textarea></td></tr>
				<tr>
				<td colspan="2" align="right">
				<img src="PHP/code.php">
				<input type="text" name="code"></input>
				<input type="submit" name="submit" align="left"></input>
				</td>
				</tr>
			</table>
			</form>
		</td>
	</tr>
</table>

</body>
</html>