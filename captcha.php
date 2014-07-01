<?php
	session_start();
	header('Content-type: image/png');

	$img = imagecreate(150 ,40);
	$bg = imagecolorallocate($img,rand(50,200),rand(0,155),rand(0,155));
	$fontColor = imageColorAllocate( $img, 255, 255, 255);
	$fontStyle = 'ROCK.TTF';
	
	$x = imagesx($img);
	$y = imagesy($img);
	$randLine = rand(5,10);
	$randPoint = rand(0,250);
	$allFont = '';
	
	//填写随机字母
	for($i=0; $i<4 ;$i++){
		$rand = rand(1,3);
		
		switch ($rand){
			case 1://生成数字
				$font = rand(48,57);
				break;
			case 2://生成大写字母
				$font = rand(65,90);
				break;
			case 3://生成小写字母
				$font = rand(97,122);
				break;
		}
		
		$font = chr($font);
		$randColor = imageColorAllocate( $img, rand(0,255), rand(0,255), rand(0,255));
		imagefttext($img,25,rand(0,90),rand($x/4*$i+12,$x/4*($i+1)-12),rand(40,$y-25),$randColor,$fontStyle,$font);
		$allFont .= $font;
		
	}
	
	$_SESSION['captcha'] = $allFont; //添加到session中以便验证
	
	//添加噪点
	while ($randPoint--){
		$randColor = imageColorAllocate( $img, rand(0,255), rand(0,255), rand(0,255));
		imagesetpixel($img,rand(0,$x),rand(0,$y),$randColor);
	}
	
	//添加横穿线
	while($randLine--){
		$randColor = imageColorAllocate( $img, rand(0,255), rand(0,255), rand(0,255));
		imageLine($img,rand(0,$x),rand(0,$y),rand(0,$x),rand(0,$y),$randColor);
	}
	
	ImagePng($img);
	ImageDestroy($img);
?>