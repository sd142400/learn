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
			alert('�û������벻��Ϊ�գ���');
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
				��¼
			</div>
			<form method = "post" action = "main.php" onsubmit = "return isNull()" >
				<table>
					<tr>
						<td>�û�����</td>
						<td><input type = "text" name = "username" id = "username"></td>
					</tr>
					<tr>
						<td>���룺</td>
						<td><input  type = "password" name = "pwd" id = "pwd"></td>
					</tr>
					<tr>
						<td>��֤�룺</td>
						<td><input type = "text" name = "captcha" /></td>
					</tr>
					<tr>
						<td></td>
						<td><img src = "captcha.php" onclick = "this.src = 'captcha.php?id='+Math.random();" alt = "���������֤��"><span id = "image_font">�����壿�������ͼƬ</span></img></td>
					</tr>
					<tr>
						<td></td>
						<td><input type = "submit" value = "��¼" class = "button_style"/><input type = "reset" value = "���" class = "button_style"/><input type = "button" value = "ע��" onClick = "goToReg()" class = "button_style"/></td>
					</tr>
				</table>
			</form>
		</div>
	</body>
</html>