<?php

if(isset($_POST['pwd'])){
	if($_POST['pwd'] == $_POST['repwd']){
		$con = mysqli_connect('localhost','root','123456','learn');

		if(!$con){
			echo '无法连接数据库！！三秒钟返回注册界面重试';
			echo '<script language = "javascript">setTimeout("window.location.href = \'reg.php\'",3000);</script>';
			exit();
		}

		$user = $con->query("select * from user where username = '".$_POST['username']."'")->fetch_array();

		if(!empty($user['id'])){
			echo '相同的用户名！！三秒钟返回注册界面';
			echo '<script language = "javascript">setTimeout("window.location.href = \'reg.php\'",3000);</script>';
			exit();
		}
//		var_dump($con);
		$sql = "insert into `user`(`username`,`pwd`,`create_time`) values('".$_POST['username']."','".md5($_POST['pwd'])."','".time()."')";

		//echo $sql,'<br/>';
		if($con->query($sql)){
			echo '注册成功！！三秒钟返回登录界面';
			echo '<script language = "javascript">setTimeout("window.location.href = \'login.php\'",3000);</script>';
			exit();
		} else {
			echo '注册失败！！';
			echo '<script language = "javascript">setTimeout("window.location.href = \'reg.php\'",3000);</script>';
			exit();
		}
		
		$con->close();
	}else {
		echo '两次密码不一致！！三秒钟返回注册界面';
		echo '<script language = "javascript">setTimeout("window.location.href = \'reg.php\'",3000);</script>';
		exit();
	}
}
?>