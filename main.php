<?php
if(isset($_POST)){
	$con = mysqli_connect('localhost','root','123456','learn');

	if(!$con){
		die('无法连接到数据库');
	}

	$sql = "select * from user where username = '".$_POST['username']."'";
	$result = $con->query($sql);

	if($result){
		$user = $result -> fetch_array(MYSQLI_ASSOC);

		if(empty($user)){
			echo '没有这个用户！！';
			exit();
		}else{
			if(md5($_POST['pwd']) == $user['pwd']){
				echo $_POST['username'],'欢迎你！！！！';
			}else{
				echo '密码错误！！';
				exit();
			}
		}
	}else{
		echo '查询失败！！';
		exit();
	}
}
?>