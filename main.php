<?php
if(!empty($_POST['captcha'])){
	session_start();

	if(strcasecmp( $_POST['captcha'], $_SESSION['captcha']) <> 0){
		echo '验证码不正确,三秒钟返回登录界面';
		echo '<script>setTimeout("window.location.href  = \'login.php\'",3000);</script>';
		exit();
	}

	$con = mysqli_connect('localhost','root','123456','learn');

	if(!$con){
		echo '无法连接数据库，三秒钟返回登录界面';
		echo '<script>setTimeout("window.location.href  = \'login.php\'",3000);</script>';
		exit();
	}

	$sql = "select * from user where username = '".$_POST['username']."'";
	$result = $con->query($sql);

	if($result){
		$user = $result -> fetch_array(MYSQLI_ASSOC);

		if(empty($user)){
			echo '没有这个用户！！';
			echo '<script>setTimeout("window.location.href  = \'login.php\'",3000);</script>';
			exit();
		}else{
			if(md5($_POST['pwd']) == $user['pwd']){
				echo $_POST['username'],'欢迎你！！！！';
			}else{
				echo '密码错误！！';
				echo '<script>setTimeout("window.location.href  = \'login.php\'",3000);</script>';
				exit();
			}
		}
	}else{
		echo '查询失败！！';
		echo '<script>setTimeout("window.location.href  = \'login.php\'",3000);</script>';
		exit();
	}
}
?>