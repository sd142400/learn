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
		alert('�û������벻��Ϊ�գ���');
		return false;
	}else{
		return true;
	}
}

</script>
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
			<td><input type = "submit" value = "��¼"></td>
			<td><input type = "button" value = "���" onClick = "clearText()" /></td>
			<td><input type = "button" value = "ע��" onClick = "goToReg()"></td>
		</tr>
	</table>

	
</form>
