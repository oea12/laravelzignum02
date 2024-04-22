<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<img style="width: 20%; margin-left: 15%; margin: auto;" src="http://<?php echo $_SERVER['SERVER_NAME'] ?>/zignum/public/img/logo_zignumblack.png">
		<h3>{{$name}}</h3>
		<div>
			<p style="width: 50%;"><span style="font-size: 50px; color: #14aec9; font-weight: bolder; font-style: italic;">“</span>Cree que tu trago perfecto es: {{$result}}<span style="font-size: 50px; color: #14aec9; font-weight: bolder; font-style: italic;">”</span></p>
			<p style="width: 50%;">{{$msg}}</p>
		</div>
		<h3>Visita Zignum Mezcales en <a href="http://<?php echo $_SERVER['SERVER_NAME'] ?>">www.zignummezcal.com</a></h3>
	</body>
</html>
