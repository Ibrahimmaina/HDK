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
background-image: url("images/z.jpg");
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
<h1 style="color:black ;">HDK Global Bussiness Line</h1>
<img src="images/logo8.png" alt="" height="100px" width="200px" style="position:absolute ;top:1%;right:4%;border:1px solid white;border-radius:80px;">
<div>
		<marquee behavior="" direction=""> <h1 style="color:blue;">Bien venue sur notre Platforme</h1></marquee>
	</div>
<ul id="nav" class="dropdown dropdown-vertical" >
	<li><a href="index.php">Accueil</a></li>
	<li><a href="sabbi.php">Sabbi</a></li>
	<li class="dir">Services<!-- n1 -->
		<ul>
			<li><a href="facture.php">Formation</a><!-- n2 -->
			<li><a href="#">Batimant</a></li>
            <li><a href="#">Maintenance</a></li><!-- n2 -->
		</ul>
	</li>
	<li>Kayaki
	</li>
	<li><a href="info.php">Info</a></li>
	<li class="dir"><a href="comptact.php">Contact</a>
	</li>

</ul>

<div class="co">
	<style>
		.co{
			position:absolute;
			top: 85%;
			right: 68%;
		}
	</style>
<div><a href="login.php" class="btn btn bg-success" style="position:absolute;right:20%;top:-50%;color:white;">Connection</a></div>
<div> <a href="inscription.php" class="btn btn-success" style="width: 500px;height: 60px;
;">Créer un compte</a> </div>
</div>

<div style="position:Absolute ;right:50%;">
<button class="btn btn-secondary"><a href="contactperso.php" style="color: black;">Sabbo Labari</a> </button> <br> <br>
<button class="btn btn-secondary" style="color: black;"><a href="contacter.php" style="color: black;">Sabbon Chago</a> </button> <br> <br>
<button class="btn btn-secondary" style="color: black;"><a href="contacter.php" style="color: black;">SAbbon Wassa</a> </button> <br> <br>
<button class="btn btn-secondary" style="color: black;"><a href="contacter.php" style="color: black;">Sabbon Wassika</a> </button> <br> <br>

</div>

</body>
</html>