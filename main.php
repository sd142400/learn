<?php
if(isset($_POST)){
	$con = mysqli_connect('localhost','root','123456','learn');

	if(!$con){
		die('�޷����ӵ����ݿ�');
	}

	$sql = "select * from user where username = '".$_POST['username']."'";
	$result = $con->query($sql);

	if($result){
		$user = $result -> fetch_array(MYSQLI_ASSOC);

		if(empty($user)){
			echo 'û������û�����';
			exit();
		}else{
			if(md5($_POST['pwd']) == $user['pwd']){
				echo $_POST['username'],'��ӭ�㣡������';
			}else{
				echo '������󣡣�';
				exit();
			}
		}
	}else{
		echo '��ѯʧ�ܣ���';
		exit();
	}
}
?>