<meta charset = "gbk">
<script language = "javascript">
function samePwd(){
	var button1 = document.getElementById('pwd');
	var button2 = document.getElementById('repwd');
	var uname = document.getElementById('username');

	if(uname.value == "" || uname.value == null){
		alert('�������û�����');
		return false;
	}

	if(button1.value == ""){
		alert('���벻��Ϊ�գ�');
		return false;
	}

	if(button2.value == ""){
		alert('�ظ������벻��Ϊ�գ�');
		return false;
	}

	if(button1.value == button2.value){
		return true;
	}else{
		alert("��������ͬ�����룡��");
		return false;
	}
	return true;
}
</script>
<form method = "post" action = "reg.php" onsubmit = "return samePwd();">
	<table>
		<tr>
			<td>�û���:</td><td><input type = "text" id = "username"  name = "username"/></td>
		</tr>
		<tr>
			<td>���룺</td><td><input type = "password" id = "pwd" name = "pwd"></td>
		</tr>
		<tr>
			<td>�ظ����룺</td><td><input type = "password" id = "repwd" name = "repwd"></td>
		</tr>
		<tr>
			<td><input type = "submit" value = "�ύ"></td><td><input type = "reset"  value = "����"><input type = "button" onClick = "window.location.href = 'login.php'" value = "����" /></td>
		</tr>
	</table>
</form>


<?php
if(isset($_POST['pwd'])){
	if($_POST['pwd'] == $_POST['repwd']){
		$con = mysqli_connect('localhost','root','123456','learn');

		if(!$con){
			die('�޷��������ݿ�');
		}

		$user = $con->query("select * from user where username = '".$_POST['username']."'")->fetch_array();

		if(!empty($user['id'])){
			exit('��ͬ���û�������');
		}
//		var_dump($con);
		$sql = "insert into `user`(`username`,`pwd`,`create_time`) values('".$_POST['username']."','".md5($_POST['pwd'])."','".time()."')";

		//echo $sql,'<br/>';
		if($con->query($sql)){
			echo 'ע��ɹ�����';
		} else {
			echo 'ע��ʧ�ܣ���';
		}
		
		$con->close();
	}else {
		echo '�������벻һ�£���';
	}
}
?>