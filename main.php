<?php
if(!empty($_POST['captcha'])){
	session_start();

	if(strcasecmp( $_POST['captcha'], $_SESSION['captcha']) <> 0){
		echo '��֤�벻��ȷ,�����ӷ��ص�¼����';
		echo '<script>setTimeout("window.location.href  = \'login.php\'",3000);</script>';
		exit();
	}

	$con = mysqli_connect('localhost','root','123456','learn');

	if(!$con){
		echo '�޷��������ݿ⣬�����ӷ��ص�¼����';
		echo '<script>setTimeout("window.location.href  = \'login.php\'",3000);</script>';
		exit();
	}

	$sql = "select * from user where username = '".$_POST['username']."'";
	$result = $con->query($sql);

	if($result){
		$user = $result -> fetch_array(MYSQLI_ASSOC);

		if(empty($user)){
			echo 'û������û�����';
			echo '<script>setTimeout("window.location.href  = \'login.php\'",3000);</script>';
			exit();
		}else{
			if(md5($_POST['pwd']) == $user['pwd']){
				echo $_POST['username'],'��ӭ�㣡������';
			}else{
				echo '������󣡣�';
				echo '<script>setTimeout("window.location.href  = \'login.php\'",3000);</script>';
				exit();
			}
		}
	}else{
		echo '��ѯʧ�ܣ���';
		echo '<script>setTimeout("window.location.href  = \'login.php\'",3000);</script>';
		exit();
	}
}
?>