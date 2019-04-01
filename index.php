<?php
	include("function.php");
	$idupdate = NULL;
    if (isset($_GET['idinge']) && !empty($_GET['idinge']))
    {
        $idupdate = $_GET['idinge'];
	}
	if(isset($_GET['idclient']) && !empty($_GET['idclient']))
    {
        $idupdate = $_GET['idclient'];
	}
	if(isset($_GET['idequipe']) && !empty($_GET['idequipe']))
    {
        $idupdate = $_GET['idequipe'];
	}
	if(isset($_GET['idprojet']) && !empty($_GET['idprojet']))
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

	<div class="p1 jumbotron">
		<div class="container">		
		<?php   
		if (isset ($_GET['action'])  and $_GET['action'] =="fa_user")
			{		
			}
			elseif (isset ($_GET['action'])  and $_GET['action'] =="fa_userr")
			{			
			}
			elseif (isset ($_GET['action'])  and $_GET['action'] =="fa_users")
			{				
			}
			elseif (isset ($_GET['action'])  and $_GET['action'] =="fa_book")
			{					
			}
			elseif (isset ($_GET['action'])  and $_GET['action'] =="fa_shopping-cart")
			{					
			}
			else{
			echo "L’appellation « SSII » a succédé au début des années 1980 à celle de « SSCI » (société de services et de conseils en informatique). Les SSII ont élargi leur gamme d'activités et le terme « ingénierie » remplace le terme « conseil » jugé à l'époque comme trop associé à de petits cabinets.
			 L'ingénierie recouvre en effet les différents métiers du conseil, des études, de l'ingénierie de systèmes, de l'intégration de systèmes applicatifs.<hr class='top-space'>";
			echo "<h3 class='icone text-center thin top-space'>Cliqué sur l'icone de votre choix</h3><hr class='top-space'>";	
			}
			?>
	
			<div class="row">
			
			<?php
		if (isset ($_GET['action'])  and $_GET['action'] =="fa_user")

			 {
				echo '<h2>Ingenieur</h2>';
				echo '<img class=" col-sm-offset-3 col-sm-6" src="images/ingenieur.jpg"/></br>';
				echo  "<p class='p1 col-sm-12'></br>Un ingénieur est un professionnel traitant de problèmes complexes d'ingénierie, notamment en concevant des produits,
				des processus si nécessaire avec des moyens novateurs, et dirigeant la réalisation et la mise en œuvre de l'ensemble :
				produits, systèmes ou services. Il crée, il conçoit, il innove dans plusieurs domaines tout en prenant en compte des facteurs sociaux, environnementaux et économiques.</p>";
				echo "<hr class='col-sm-12 top-space'>";
			 }
		if (isset ($_GET['action'])  and $_GET['action'] =="fa_userr")

			 {
				echo '<h2>Client</h2>';
				echo '<img class=" col-sm-offset-3 col-sm-6" src="images/client.jpg"/></br>';
				echo  "<p class='p1 col-sm-12'></br>Un client, au sens économique, désigne la personne ou l'entité qui prend la décision d'acheter un bien ou service, de façon occasionnelle ou habituelle,
				à un fournisseur (voir commerce).C'est une personne qui confie ses intérêts à une autre personne (expert) en échange d'un bien. </p>";
				echo "<hr class='col-sm-12 top-space'>";
			 }
			 if (isset ($_GET['action'])  and $_GET['action'] =="fa_users")

			 {
				echo '<h2>Equipe</h2>';
				echo '<img class=" col-sm-offset-3 col-sm-6" src="images/equipe.jpg"/></br>';
				echo  "<p class='p1 col-sm-12'></br>Une équipe est un petit groupe d'individus partenaires dans un but commun.
				Elle est utilisée en entreprise avec des membres appelés « collaborateurs ».  </p>";
				echo "<hr class='col-sm-12 top-space'>";
			 }
			 if (isset ($_GET['action'])  and $_GET['action'] =="fa_book")

			 {
				echo '<h2>Projet</h2>';
				echo '<img class=" col-sm-offset-3 col-sm-6" src="images/projet.jpg"/></br>';
				echo  "<p class='p1 col-sm-12'></br>Un projet répond à un besoin unique et singulier, nécessité d'appropriation du projet par l'équipe.Un projet a un début et une fin.
				Un projet est novateur unique et besoin de créativité.
				Un projet est complexe, coopération et gestion d'un grand nombre d'intervenants.</p>";
				echo "<hr class='col-sm-12 top-space'>";
			 }
			 if (isset ($_GET['action'])  and $_GET['action'] =="fa_shopping-cart")

			 {
				echo '<h2>Demande</h2>';
				echo '<img class=" col-sm-offset-3 col-sm-6" src="images/demande.jpg"/></br>';
				echo  "<p class='p1 col-sm-12'></br>Au début de l’initialisation de projet on détermine ses besoins fonctionnels et sa faisabilité technique et économique.
				Ensuite, on élabore une Charte du projet (son mandat) et, quand l’envergure le demande, un plan de management de projet (autrement appelé Manuel opérationnel de projet) déterminant son contenu,
				 ses livrables, ses risques et hypothèses, ainsi que les actions nécessaires pour piloter le projet. </p>";
				echo "<hr class='col-sm-12 top-space'>";
			 }
			 ?>
			 </div>
			<div class="jumbotron">
		<div class="container">			
			<h3 class="text-center thin"></h3>			
			<div class="col-sm-offset-1 col-md-2 col-sm-6 highlight">
			<a href='index.php?&action=fa_user'><div class="h-caption"><h4><i class="fa fa-male fa-5"></i>Ingenieur</h4></div></a>
					<div class="h-body text-center">

					
					</div>
				</div>
				<?php
		
				?>
				<div class="row">
				<div class="col-md-2 col-sm-6 highlight">
				<a href='index.php?&action=fa_userr'><div class="h-caption"><h4><i class="fa fa-user fa-5"></i>Client</h4></div></a>
					<div class="h-body text-center">
						
					</div>
				</div>
				<div class="col-md-2 col-sm-6 highlight">
				<a href='index.php?&action=fa_users'><div class="h-caption"><h4><i class="fa fa-users fa-5"></i>Equipe</h4></div></a>
					<div class="h-body text-center">
					
					</div>
				</div>
				<div class="col-md-2 col-sm-6 highlight">
				<a href='index.php?&action=fa_book'><div class="h-caption"><h4><i class="fa fa-book fa-5"></i>Projet</h4></div></a>
					<div class="h-body text-center">
				
					</div>
				</div>
				<div class="col-md-2 col-sm-6 highlight">
				<a href='index.php?&action=fa_shopping-cart'><div class="h-caption"><h4><i class="fa fa-shopping-cart fa-5"></i>Demande</h4></div></a>
					<div class="h-body text-center">
					
					</div>

			</div> 	</div>	
			<div class="row">
			<?php
			    if (isset ($_GET['action'])  and $_GET['action'] =="fa_user")
				{
					
					echo "<h2 class='h2 top-space'>Liste des ingenieurs</h2></br>";
					echo "<div class='top-space col-sm-12'></div>";
					 affiche_ingenieur();
					echo"<a href='index2.php?page=1'><input  class='btn btn-primary col-sm-offset-4 col-sm-4' type='submit' name='Inserer Ingenieur' value='Inserer ingénieur'></a>";
					
				}
				if (isset ($_GET['action'])  and $_GET['action'] =="fa_userr")
				{
					echo "<h2>Liste des clients</h2></br>";
					echo "<div class='top-space col-sm-12'></div>";					
					affiche_client();
					echo"<a href='index2.php?page=2'><input  class='btn btn-primary col-sm-offset-4 col-sm-4' type='submit' name='Inserer Client' value='Inserer client'></a>";

				}
				if (isset ($_GET['action'])  and $_GET['action'] =="fa_users")
				{
					echo "<h2>Liste des equipes</h2></br>";
					echo "<div class='top-space col-sm-12'></div>";					
					affiche_equipe();
					echo"<a href='index2.php?page=3'><input  class='btn btn-primary col-sm-offset-4 col-sm-4' type='submit' name='Inserer Equipe' value='Inserer equipe'></a>";
				}
				if (isset ($_GET['action'])  and $_GET['action'] =="fa_book")
				{
					echo "<h2>Liste des projets</h2></br>";
					echo "<div class='top-space col-sm-12'></div>";										
					affiche_projet();
					echo"<a href='index2.php?page=4'><input  class='btn btn-primary col-sm-offset-4 col-sm-4' type='submit' name='Inserer Projet' value='Inserer projet'></a>";
				}
				if (isset ($_GET['action'])  and $_GET['action'] =="fa_shopping-cart")
				{
					echo "<h2 class='col-sm-12'>Liste des demandes</h2></br>";
					echo "<div class='top-space col-sm-12'></div>";										
					affiche_demande();
					echo"<a href='index2.php?page=5'><input  class='btn btn-primary col-sm-offset-4 col-sm-4' type='submit' name='Afficher Demande' value='Afficher demande'></a>";
				}
				?>
				</div>
		</div>
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