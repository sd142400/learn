<?php

if(isset($_POST['pwd'])){
	if($_POST['pwd'] == $_POST['repwd']){
		$con = mysqli_connect('localhost','root','123456','learn');

		if(!$con){
			echo '�޷��������ݿ⣡�������ӷ���ע���������';
			echo '<script language = "javascript">setTimeout("window.location.href = \'reg.php\'",3000);</script>';
			exit();
		}

		$user = $con->query("select * from user where username = '".$_POST['username']."'")->fetch_array();

		if(!empty($user['id'])){
			echo '��ͬ���û������������ӷ���ע�����';
			echo '<script language = "javascript">setTimeout("window.location.href = \'reg.php\'",3000);</script>';
			exit();
		}
//		var_dump($con);
		$sql = "insert into `user`(`username`,`pwd`,`create_time`) values('".$_POST['username']."','".md5($_POST['pwd'])."','".time()."')";

		//echo $sql,'<br/>';
		if($con->query($sql)){
			echo 'ע��ɹ����������ӷ��ص�¼����';
			echo '<script language = "javascript">setTimeout("window.location.href = \'login.php\'",3000);</script>';
			exit();
		} else {
			echo 'ע��ʧ�ܣ���';
			echo '<script language = "javascript">setTimeout("window.location.href = \'reg.php\'",3000);</script>';
			exit();
		}
		
		$con->close();
	}else {
		echo '�������벻һ�£��������ӷ���ע�����';
		echo '<script language = "javascript">setTimeout("window.location.href = \'reg.php\'",3000);</script>';
		exit();
	}
}
?>