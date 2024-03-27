<!DOCTYPE html>
<html lang="fr">
<head>
<title>HDK</title>
<meta charset="UTF-8">
<link href="css/helper.css" media="screen" rel="stylesheet" type="text/css" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link href="css/dropdown.vertical.css" media="screen" rel="stylesheet" type="text/css" />
<link href="css/default.css" media="screen" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="bootstrap.css"  type="text/css" />
    <script type="text/javascrip" src="bootstrap.js"></script>  
</head>
<body class="bg">
	
	<style>
body, html{
	height: 100%;
}
.bg{
background-image: url("images/f.jpeg");
height: 100%;
background-position: center;
background-repeat: no-repeat;
background-size: cover;
}
#nav li{
    font-size: 45px;
    background-color: rgb(99, 133, 226);
}
	</style>
<h1 style="color:white ;">HDK Global Bussiness Line</h1>
<div>
		<marquee behavior="" direction=""> <h1 style="color:white ;">Bien venue sur notre Platforme</h1></marquee>
	</div>
<ul id="nav" class="dropdown dropdown-vertical" >
	<li><a href="#">Accueil</a></li>
	<li><a href="#">News</a></li>
	<li class="dir">Services<!-- n1 -->
		<ul>
			<li><a href="#">payement facture</a></li><!-- n2 -->
			<li><a href="#">Sous-menu</a></li><!-- n2 -->
			<li><a href="#">Sous-menu</a></li><!-- n2 -->
		</ul>
	</li>
	<li>Produits
	</li>
	<li><a href="#">Info</a></li>
	<li class="dir"><a href="#">Contact</a>
	</li>

</ul>
<form action="index.php" method="POST" enctype="multipart/form-data">
        <label for="file" style="color: white;">Fichier</label>
        <input type="file" name="file">
        <button type="submit" >Enregistrer</button>
    </form>
</body>
</html>