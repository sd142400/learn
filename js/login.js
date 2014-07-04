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