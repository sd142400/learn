<meta charset = "gbk">
<script language = "javascript">
function allClear(){
	document.getElementById("username").value = "";
	document.getElementById("pwd").value = "";
	document.getElementById("repwd").value = "";
}

function samePwd(){
	var button1 = document.getElementById('pwd');
	var button2 = document.getElementById('repwd');

	if(button1.value == button2.value){
		return true;
		alert('ѧϰ');
	}else{
		alert("��������ͬ�����룡��");
		return false;
	}
	alert('ganma');
}
</script>
<form method = "post" action = "reg.php" onsubmit = "return samePwd();">
	<table>
		<tr>
			<td>�û���:</td><td><input type = "text" id = "username" name = "username"/></td>
		</tr>
		<tr>
			<td>���룺</td><td><input type = "password" id = "pwd" name = "pwd"></td>
		</tr>
		<tr>
			<td>�ظ����룺</td><td><input type = "password" id = "repwd" name = "repwd"></td>
		</tr>
		<tr>
			<td><input type = "submit" value = "�ύ"></td><td><input type = "submit" onClick = "allClear()" value = "����"></td>
		</tr>
	</table>
</form>

<?php
if(isset($_POST)){
	if($_POST['pwd'] == $_POST['repwd']){
		$con = mysqli_connect('localhost','root','123456','learn');

		if(!$con){
			die('�޷��������ݿ�');
		}

		var_dump($con);
		$sql = "insert into `user`(`username`,`pwd`,`create_time`) values('".$_POST['username']."','".md5($_POST['pwd'])."','".time()."')";

		echo $sql,'<br/>';
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