<html>
	<head>
	<link type = "text/css" href = "./css/style.css" rel = "stylesheet"></link>
	<script type = "text/javascript" src = "./js/login.js"></script>
	<script type = "text/javascript">
/*
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
*/
	</script>
	</head>
	<body>
		<div class = "space"></div>
		<div id = 'login_form'>
			<div id = 'login_title'>
				登录
			</div>
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
						<td>验证码：</td>
						<td><input type = "text" name = "captcha" /></td>
					</tr>
					<tr>
						<td></td>
						<td><img src = "captcha.php" onclick = "this.src = 'captcha.php?id='+Math.random();" alt = "点击更换验证码"><span id = "image_font">看不清？点击更换图片</span></img></td>
					</tr>
					<tr>
						<td></td>
						<td><input type = "submit" value = "登录" class = "button_style"/><input type = "reset" value = "清空" class = "button_style"/><input type = "button" value = "注册" onClick = "goToReg()" class = "button_style"/></td>
					</tr>
				</table>
			</form>
		</div>
	</body>
</html>