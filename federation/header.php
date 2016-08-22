<!doctype html>
<html lang=fa dir=rtl>
<head>
	<meta charset="utf-8">
	<script src="http://code.jquery.com/jquery-latest.min.js"
			type="text/javascript"></script>
	<link rel=stylesheet href="<?php bloginfo('template_directory'); ?>/style.css">
	<title>فدراسیون تیراندازی ...</title>
	<?php wp_head()?>
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<link rel=icon type="image/png" href="<?php bloginfo('template_directory'); ?>/static/favicon.png">
	<!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="favicon.ico"><![endif]-->
	<link rel="apple-touch-icon-precomposed" href="<?php bloginfo('template_directory'); ?>/static/favicon.png">
	<link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/static/favicon.png">
	<!--[if lt IE 9]>
	<script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

	<![endif]-->
	<meta name=description content="توضیحات مربوط به این صفحه و سایت">
</head>
<body>
<v class=wrapper>
	<div class=top>
		<div>
			<div class=hide-in-small>
				اقتصاد مقاومتی؛ اقدام و عمل
				<span>شعار سال</span>
			</div>
		</div>
	</div>
<div style="background-color:#32AAE1; overflow: auto">
	<div class="top-link">
		<?php $arg=array(
			'container'       => false,
			'echo'            => false,
			'items_wrap'      => '%3$s',
			'depth'           => 0,
			'theme_location'  => 'header-menu'
		);
		echo strip_tags(wp_nav_menu($arg), '<a>' );
		?>
	</div>
	<div style="float: left; padding-left: 1em;">
		<div class="hide-in-large"></div>
		<?php
		ob_start();
		dynamic_sidebar( 'Header social area' );
		$aa = ob_get_clean();
		echo strip_tags($aa, "<li><a><div>"); ?>
		<div class="clr"></div>
	</div>
</div>
	<header>
		<div class=fa></div>
		<div class=en></div>
		<div class=clr></div>
	</header>
	<nav>
		<ul class="hide-in-small">
			<?php $arg=array(
				'container'       => false,
				'echo'            => false,
				'items_wrap'      => '%3$s',
				'depth'           => 0,
				'theme_location'  => 'main-menu',
			);
			echo strip_tags(wp_nav_menu($arg), '<li> <a>' );
			//echo wp_nav_menu($arg);
			?>
		</ul>
		<div class=clr></div>
		<div class=menu-icon></div>

	</nav>
	<div class="pd9 hide-in-large"></div>
	<div class=clr></div>
	<script>
		$(document).ready(function(){
			$(".menu-icon").click(function(){
				$("nav>ul").toggleClass("hide-in-small");
			});
		});

	</script>