	<?php
		require_once('connect.php');

		if (!isset($_POST['title'])||empty($_POST['title'])) {
			echo "<script>alert('请输入标题！');window.location.href='../article.add.php';</script>";
		}

		if (isset($_POST['code'])) {
			session_start();
			if ($_POST['code']==$_SESSION['code']) {
				commitArticles();
			}else{
				echo "<script>alert('请输入验证码');window.location.href='../article.add.php';</script>";
			}
		}

		function commitArticles(){

		$title = $_POST['title'];
		$author = $_POST['author'];
		$content = $_POST['content'];
		$description = $_POST['description'];
		$dateline = date('Y-m-d');
		$insert_sql= "insert into article(title,author,description,content,dateline) values('$title','$author','$description','$content','$dateline')";

		if(mysql_query($insert_sql)){
			echo "<script>alert('发布文章成功');window.location.href='../article.manage.php?page=1';</script>";
		}else{
			echo "<script>alert('发布文章失败');window.location.href='../article.add.php?page=1';</script>";
		}
	}
	?>