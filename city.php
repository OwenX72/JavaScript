<?php
	//取得網址列的參數
//	echo "Hi <u> PHP </u><script>alert(Hello)";
	$name=$_REQUEST["name"];
	if($name=="taipei"){
		echo "300 W";
	}else if($name=="hsinchu"){
		echo "50 W";
	}else{
		echo "No data";
	}
?>