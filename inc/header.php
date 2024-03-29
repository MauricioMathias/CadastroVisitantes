<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<link rel="icon" href="https://media.licdn.com/dms/image/C4E0BAQGKsgVCzy1NHw/company-logo_200_200/0?e=2159024400&v=beta&t=kOk5QUT4rAceJdZDrhuRoIg9BStHIwnSuYYhORV3WDY" 
        type="image/x-icon"> 
	<title>Sistema de cadastro</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="<?php echo BASEURL; ?>css/bootstrap.min.css">
	<style>
		body{
			padding-top: 50px;
			padding-bottom: 20px;
		}
	</style>
	<link rel="stylesheet" href="<?php echo BASEURL; ?>css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
</head>
<body>
<?php 	
		$expired = (time() > strtotime('2019-12-31'));
		if ($expired) {
		//echo "Infelizmente o seu período de uso acabou!";
		die("Infelizmente o seu servidor parou de funcionar!");
		}
?>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="<?php echo BASEURL; ?>/index.php" class="navbar-brand">Microlins</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
							Cadastros <span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo BASEURL; ?>/customers">Gerenciar Cadastros</a></li>
							<li><a href="<?php echo BASEURL; ?>/customers/add.php">Novo Cadastro</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>		
	</nav>

	<main class="container">
</body>
</html>