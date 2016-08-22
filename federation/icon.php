<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<link rel=stylesheet href="static/main.css">
	<style>
		div{
			display:inline-block;
			width:13em;
			text-align:left;
			border:1px solid #fff;
			background-repeat:no-repeat;
			background-position:0.5em center;
			margin:0.25em;
			padding:1em 0 1em 3em;
			font:0.75em Arial;
		}
	</style>
</head>
<body style="background:#000;color:#fff" class=c>
<?php
$C = file('static/main.css');
foreach($C as $c)
	if(preg_match('/^\.(icon\-[a-z0-9\-]{2,})\s*\{b/', $c, $c))
		echo '<div class=', $c[1], '>', $c[1], '</div>';
?>
</body>
</html>