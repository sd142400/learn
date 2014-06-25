<script type = "text/javascript">
function clearText(){
	document.getElementById('username').value = "";
	document.getElementById('pwd').value = "";
}

function goToReg(){
	window.location.href = "reg.php";
}

function isNull(){
	if(document.getElementById('username').value == "" || document.getElementById('pwd').value == ""){
		alert('用户名密码不能为空！！');
		return false;
	}else{
		return true;
	}
}

</script>
<form method = "post" action = "main.php" onsubmit = "return isNull()" >
	<table>
		<tr>
			<td>用户名：</td>
			<td><input type = "text" name = "username" id = "username"></td>
		</tr>
		<tr>
			<td>密码：</td>
			<td><input  type = "password" name = "pwd" id = "pwd"></td>
		</tr>
		<tr>
			<td><input type = "submit" value = "登录"></td>
			<td><input type = "button" value = "清空" onClick = "clearText()" /></td>
			<td><input type = "button" value = "注册" onClick = "goToReg()"></td>
		</tr>
	</table>

	
</form>
