<meta charset = "gbk">
<script language = "javascript">
function samePwd(){
	var button1 = document.getElementById('pwd');
	var button2 = document.getElementById('repwd');
	var uname = document.getElementById('username');

	if(uname.value == "" || uname.value == null){
		alert('请输入用户名！');
		return false;
	}

	if(button1.value == ""){
		alert('密码不能为空！');
		return false;
	}

	if(button2.value == ""){
		alert('重复的密码不能为空！');
		return false;
	}

	if(button1.value == button2.value){
		return true;
	}else{
		alert("请输入相同的密码！！");
		return false;
	}
	return true;
}
</script>
<form method = "post" action = "reg.php" onsubmit = "return samePwd();">
	<table>
		<tr>
			<td>用户名:</td><td><input type = "text" id = "username"  name = "username"/></td>
		</tr>
		<tr>
			<td>密码：</td><td><input type = "password" id = "pwd" name = "pwd"></td>
		</tr>
		<tr>
			<td>重复密码：</td><td><input type = "password" id = "repwd" name = "repwd"></td>
		</tr>
		<tr>
			<td><input type = "submit" value = "提交"></td><td><input type = "reset"  value = "重填"><input type = "button" onClick = "window.location.href = 'login.php'" value = "返回" /></td>
		</tr>
	</table>
</form>


<?php
if(isset($_POST['pwd'])){
	if($_POST['pwd'] == $_POST['repwd']){
		$con = mysqli_connect('localhost','root','123456','learn');

		if(!$con){
			die('无法连接数据库');
		}

		$user = $con->query("select * from user where username = '".$_POST['username']."'")->fetch_array();

		if(!empty($user['id'])){
			exit('相同的用户名！！');
		}
//		var_dump($con);
		$sql = "insert into `user`(`username`,`pwd`,`create_time`) values('".$_POST['username']."','".md5($_POST['pwd'])."','".time()."')";

		//echo $sql,'<br/>';
		if($con->query($sql)){
			echo '注册成功！！';
		} else {
			echo '注册失败！！';
		}
		
		$con->close();
	}else {
		echo '两次密码不一致！！';
	}
}
?>