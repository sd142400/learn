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
		alert('学习');
	}else{
		alert("请输入相同的密码！！");
		return false;
	}
	alert('ganma');
}
</script>
<form method = "post" action = "reg.php" onsubmit = "return samePwd();">
	<table>
		<tr>
			<td>用户名:</td><td><input type = "text" id = "username" name = "username"/></td>
		</tr>
		<tr>
			<td>密码：</td><td><input type = "password" id = "pwd" name = "pwd"></td>
		</tr>
		<tr>
			<td>重复密码：</td><td><input type = "password" id = "repwd" name = "repwd"></td>
		</tr>
		<tr>
			<td><input type = "submit" value = "提交"></td><td><input type = "submit" onClick = "allClear()" value = "重填"></td>
		</tr>
	</table>
</form>

<?php
if(isset($_POST)){
	if($_POST['pwd'] == $_POST['repwd']){
		$con = mysqli_connect('localhost','root','123456','learn');

		if(!$con){
			die('无法连接数据库');
		}

		var_dump($con);
		$sql = "insert into `user`(`username`,`pwd`,`create_time`) values('".$_POST['username']."','".md5($_POST['pwd'])."','".time()."')";

		echo $sql,'<br/>';
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