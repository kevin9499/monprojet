<?php
    include("function.php");
    $idupdate = NULL;
    if (isset($_GET['idinge']) && !empty($_GET['idinge']) && is_numeric($_GET['idinge']))
    {
        $idupdate = $_GET['idinge'];
	}

	if(isset($_GET['idclient']) && !empty($_GET['idclient']) && is_numeric($_GET['idclient']))
    {
        $idupdate = $_GET['idclient'];
	}
	if(isset($_GET['idequipe']) && !empty($_GET['idequipe']) && is_numeric($_GET['idequipe']))
    {
        $idupdate = $_GET['idequipe'];
	}
	if(isset($_GET['idprojet']) && !empty($_GET['idprojet']) && is_numeric($_GET['idprojet']))
    {
        $idupdate = $_GET['idprojet'];
	}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">	
	<title>Entreprise de services du numérique</title>
	<link rel="shortcut icon" href="images/gt_favicon.png">	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body class="home">
	

	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
				<a class="titre col-md-6 col-sm-12"  href="index.php">Entreprise de services du numérique</a>
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="index.html"><img src="" alt=""></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li class="active"><a href="index2.php?page=1">Ingenieur</a></li>
					<li class="active"><a href="index2.php?page=2">Client</a></li>
					<li class="active"><a href="index2.php?page=3">Equipe</a></li>
					<li class="active"><a href="index2.php?page=4">Projet</a></li>
					<li class="active"><a href="index2.php?page=5">Demande</a></li>
				</ul>
			</div>
		</div>
	</div> 
	<header id="head">
		<div class="container">
			<div class="row">
				<h1 class="lead"></h1>			
			</div>
		</div>
	</header>


	</div>

			<?php
	if(isset($_GET['page']))
	{
		$page = $_GET['page'];
	}
	else
	{
		$page = 0;
	}
	echo "<center>";
	switch ($page)
	{
		case 1: require_once("ingenieur.php");
				break;
		case 2: require_once("client.php");
				break;
		case 3: require_once("equipe.php");
				break;
		case 4: require_once("projet.php");
				break;
		case 5: require_once("demande.php");
				break;
	}
	echo "</center>"
	
?>
			</div> 		
		</div>
	</div>

	<section id="social">
		<div class="container">
			<div class="wrapper clearfix">
				<div class="addthis_toolbox addthis_default_style">
				<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
				<a class="addthis_button_tweet"></a>
				<a class="addthis_button_linkedin_counter"></a>
				<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
				</div>
			</div>
		</div>
	</section>
	<footer id="footer" class="top-space">
		<div class="footer1">
			<div class="container">
				<div class="row">	
					<div class="col-md-3 widget">
						<h3 class="widget-title">Contact</h3>
						<div class="widget-body">
							<p>06.47.38.99.23<br>
								<a href="mailto:#">contact.kevinlefebvre@gmail.com</a><br>
								<br>
							</p>	
						</div>
					</div>
					<div class="col-md-3 widget">
						<h3 class="widget-title">Follow me</h3>
						<div class="widget-body">
							<p class="follow-me-icons">
								<a href="https://www.linkedin.com/in/kevin-lefebvre-65317116a/"><i class="fa fa-linkedin fa-2"></i></a>
							</p>	
						</div>
					</div>
					<div class="col-md-6 widget">
					</div>
				</div>
			</div>
		</div>
		<div class="footer2">
			<div class="container">
				<div class="row">				
					<div class="col-md-6 widget">
					</div>
					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="text-right">
								Copyright &copy; 2019, Lefebvre Kevin.
							</p>
						</div>
					</div>
				</div>
		</div>
	</footer>	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="js/headroom.min.js"></script>
	<script src="js/jQuery.headroom.min.js"></script>
	<script src="js/template.js"></script>
</body>
</html>