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
	</head>
	<body>
		<div class = "space"></div>
		<div id = "reg_form">
			<div id = 'login_title'>
				ע��
			</div>
			<form method = "post" action = "reg_result.php" onsubmit = "return samePwd();">
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
						<td></td><td><input type = "submit" value = "�ύ" class = "button_style"><input type = "reset"  value = "����" class = "button_style"><input type = "button" onClick = "window.location.href = 'login.php'" value = "����"  class = "button_style"/></td>
					</tr>
				</table>
			</form>
		</div>
	</body>
</html>