<?php
	$timeslap = time();
	$dated = $timeslap - 1522623240;
	$d =  ceil($dated / (24*3600));
	$k =  ($dated / (24*3600));

?>

	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script type="text/javascript" scr="index.css"></script>
	<title>Anniversary</title>
	<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>-->
	<script type="text/javascript">
	function time() {
		var today = new Date();
		var weekday=new Array(7);
		weekday[0]="Chủ nhật";
		weekday[1]="Thứ 2";
		weekday[2]="Thứ 3";
		weekday[3]="Thứ 4";
		weekday[4]="Thứ 5";
		weekday[5]="Thứ 6";
		weekday[6]="Thứ 7";
		var day = weekday[today.getDay()]; 
		var dd = today.getDate();
		var mm = today.getMonth()+1; //January is 0!
		var yyyy = today.getFullYear();
		var h=today.getHours();
		var m=today.getMinutes();
		var s=today.getSeconds();
		m=checkTime(m);
		s=checkTime(s);
		nowTime = h+":"+m+":"+s;
		if(dd<10){dd='0'+dd} if(mm<10){mm='0'+mm} today = day+', '+ dd+'/'+mm+'/'+yyyy;
		tmp='<span class="date">'+today+' | '+nowTime+'</span>';
		
		document.getElementById("clock").innerHTML=tmp;
		
		clocktime=setTimeout("time()","1000","JavaScript");
		function checkTime(i)
		{
		if (i<10)
		  {
		  i="0" + i;
		  }
		return i;
		}
	}
	</script>
	<style type="text/css">
	#clock {
		background:#f5f5f5;
		color:#555;
		font-size:24px;
		font-weight:bold;
		padding:30px;
		width:50%;
		margin:0 auto;
		text-align:center;
	}
	.center
	{
		text-align: center;
		color:#f25e73;
	}
	</style>
	</head>

	<body onload="time()" background="bg.png">
	<div class="wr">

	  <div class="logo">

	  </div>
	  

	  <div id="clock"></div>
	  <div id="date" class="center" style="font-size:200%">
	  	<h3>Chúng ta đã hẹn hò được </h3>
	  	<p style="font-weight: bold"><?= $d ?></p>
	  	<h3 >ngày rồi đó</h3>
	  	</div>
	  	<audio autoplay>
		    <source src="./mucsic/lovesomeone.mp3" type="audio/ogg">
		    <source src="./music/lovesomeone.mp3" type="audio/mpeg">
		</audio>
	</div>
	</body>
	</html>
