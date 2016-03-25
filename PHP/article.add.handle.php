<?php
	require_once('connect.php');

	if (!isset($_POST['title'])||empty($_POST['title'])) {
		echo "<script>alert('请输入标题！');window.location.href='../article.add.php';</script>";
	}else{

	$title = $_POST['title'];
	$author = $_POST['author'];
	$content = $_POST['content'];
	$description = $_POST['description'];
	$dateline = date('Y-m-d');
	echo $dateline;

	$insert_sql= "insert into article(title,author,description,content,dateline) values('$title','$author','$description','$content','$dateline')";

	if(mysql_query($insert_sql)){
		echo "<script>alert('发布文章成功');window.location.href='../article.manage.php';</script>";
	}else{
		echo "<script>alert('发布文章失败');window.location.href='../article.add.php';</script>";
	}
}
?>