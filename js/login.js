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