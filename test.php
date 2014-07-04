<script>
function change(){
	var ajax;

	if(window.XMLHttpRequest){
		ajax = new XMLHttpRequest();
	}else{
		ajax = new ActiveXObject("Microsoft.HMLHTTP");
	}

	ajax.open("POST", "aaa.php",true);
	ajax.send();

	ajax.onreadystatechange = function(){
		if(ajax.readyState == 4 && ajax.status == 200){
			document.getElementById('bbb').innerHTML = ajax.responseText;
		}
	}
}

</script>
<input type = "text" name = "aaa" onChange = "change();"/>
<div id = "bbb"></div>
