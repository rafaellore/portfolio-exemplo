<?php include('config.php')?>
<!DOCTYPE html>
<html>
<head>
	<title>Projeto 01</title>
	<link rel="stylesheet" href="<?php echo INCLUDE_PATH;?>style/font-awesome.min.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;700&display=swap" rel="stylesheet">
	<link  href="<?php echo INCLUDE_PATH;?>style/style.css" rel="stylesheet" type="text/css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="palavras-chave,do,meu,website">
	<meta name="description" content="Descrição do meu website">
	<meta charset="utf-8"/>
</head>
<body>

	<header>
		<div class="center">
			<div class="logo left"><a href="/">Logo</a></div>
			<nav class="desktop right">
				<ul>
					<li><a href="<?php echo INCLUDE_PATH;?>home">Home</a></li>
					<li><a href="<?php echo INCLUDE_PATH;?>sobre">Sobre</a></li>
					<li><a href="<?php echo INCLUDE_PATH;?>servicos">Serviços</a></li>
					<li><a href="<?php echo INCLUDE_PATH;?>contato">Contato</a></li>	
				</ul>
			</nav>
			<nav class="mobile right">
				<div class="button-mobile">
				<i class="fa fa-bars" aria-hidden="true"></i>
				</div>
				<ul>
					<li><a href="<?php echo INCLUDE_PATH;?>home">Home</a></li>
					<li><a href="<?php echo INCLUDE_PATH;?>sobre">Sobre</a></li>
					<li><a href="<?php echo INCLUDE_PATH;?>servicos">Serviços</a></li>
					<li><a href="<?php echo INCLUDE_PATH;?>contato">Contato</a></li>
				</ul>
			</nav>
		<div class="clear"></div>
	</div><!--- center --->
	</header>

	<?php
	
		$url = isset($_GET['url']) ? $_GET['url'] : 'home';
		if(file_exists('pages/'.$url.'.php')){
			include('pages/'.$url.'.php');
		}else{
			include('pages/error404.php');
		}
	?>

	<footer>
		<div class="center">
			<p>Todos os direitos reservados.</p>
		</div> <!--- center --->
	</footer>
	<script src="<?php echo INCLUDE_PATH;?>js/jquery.js"></script>
	<script src="<?php echo INCLUDE_PATH;?>js/scripts.js"></script>
</body>
</html>