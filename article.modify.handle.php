<?php
	$title = $_POST['title'];
	$description = $_POST['description'];
	$author = $_POST['author'];
	$content = $_POST['content'];

	$id = $GET['id'];

	$updatesql = "update article set title='$title',author='$author',description='$description',content='$content' where id=$id";

	if (mysql_query($updatesql)) {
		echo "<script>alert('修改文章成功');window.location.href='../article.manage.php';</script>";
	}else{
		// echo "<script>alert('修改文章失败');window.location.href='../article.manage.php';</script>";
		echo mysql_error();
	}
?>