<html>
	<head>
		<meta charset = "gbk">
		<link type = "text/css" href = "./css/style.css" rel = "stylesheet"></link>
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
	</head>
	<body>
		<div class = "space"></div>
		<div id = "reg_form">
			<div id = 'login_title'>
				注册
			</div>
			<form method = "post" action = "reg_result.php" onsubmit = "return samePwd();">
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
						<td></td><td><input type = "submit" value = "提交" class = "button_style"><input type = "reset"  value = "重填" class = "button_style"><input type = "button" onClick = "window.location.href = 'login.php'" value = "返回"  class = "button_style"/></td>
					</tr>
				</table>
			</form>
		</div>
	</body>
</html>