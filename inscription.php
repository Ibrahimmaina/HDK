<?php
include "bdd.php" ;
global $db;
$q= $db->query("SELECT * FROM users");
$resulta = $q->fetch();
if(isset($_POST['enregistrment'])){
    $nom = $_POST['nom']; 
    $prenom = $_POST['prenom'];
    $sexe = $_POST['sexe']; 
    $email = $_POST['email']; 
    $datenaissance = $_POST['datenaissance'];
    $password = $_POST['password'];
    $password = password_hash($password, PASSWORD_DEFAULT);
        
    
    if(!empty($nom) && !empty($prenom) && !empty($sexe) && !empty($email) && !empty($datenaissance) && !empty($password)){
        $q = "INSERT INTO users(nom,prenom,sexe,email,date_naissance,mdp)
 VALUES('$nom','$prenom','$sexe','$email','$datenaissance','$password')";
        $result = $db->prepare($q);
        $result->execute(([
            'nom' => $nom,
            'prenom' => $prenom,
            'sexe' => $sexe,
            'email' => $email,
            'date_naissance' => $datenaissance,
            'mdp' => $password
        ]));


        $effectuer = "enregistrement effectuer" ; 
        

    } else {
      $effectuer= "veuiller saisir tout les champs";
    }
    

}  


?>


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
	<li><a href="index.php">Accueil</a></li>
	<li>News<!-- n1 -->
	</li>
	<li class="dir">Services<!-- n1 -->
		<ul>
			<li><a href="#">Sous-menu</a></li><!-- n2 -->
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


<style>
	.fo label{
		color: wheat;
            font-size:29px ;
            padding: 1px;
            margin: 6px;
         }
         .fo td{
            border: 1px solid black;
         }
         .fo input{
            font-size: 28px;
           
         }
         .ttable{
            position: absolute;
            left: 30%;
			top: 27%;
         }
         .for{width: 350px;}
         .ent:hover{font-size: 30px;
         }
         .su:hover{font-size: 30px;
         }

		 
      </style>

</style>


<div class="fo">

<form action="" method="POST" class="form"  >
        <table class="ttable">
         <tr>
            <td>
               <label for="">Nom</label>
            </td>
            <td>
               <input type="text" name="nom" placeholder="Nom" class="for">
            </td>
         </tr>
         <tr>
            <td>
               <label for="">Prenom</label>
            </td>
            <td>
                  <input type="text" name="prenom" placeholder="Prenom" class="for">
            </td>
         </tr>
         <tr>
            <td>
               <label for="">Sexe</label>
            </td>
            <td>
              <label>
               <input type="radio" name="sexe" id="optionsradios" value="M"checked>
                M
               </label>
               <label>
                <input type="radio" name="sexe" id="optionsradios" value="F">
                F
               </label>
            </td>
         </tr>
         <tr>
            <td>
                <label for="">Email</label>
            </td>
            <td>
                <input type="email" name="email" placeholder="Email" class="for">
            </td>
         </tr>
         <tr>
            <td>
               <label for="">Date de naissance</label>
            </td>
            <td>
               <input type="date" name="datenaissance"  class="for"></td>
         </tr>

         <tr>
            <td>
             <label for="">Mot de pass</label>
            </td>
            <td>
            <input type="password" name="password" placeholder="motde pass" class="for">
            </td>
         </tr>
         <tr>
            <td  ><input class="ent" type="submit" value="Enregistrer" name="enregistrment"  style="width:350px;background-color: #5a80eb;"></td>
            <td> <input type="button" value="Annuler" class="su" style="width:350px;background-color:#ee2c2c"></td>
         </tr>
        </table>
  
     </form>


	 <div class="alert alert-success" style="width:52% ; position: absolute;
            left: 30%;
			top: 88%;"><h1><?php if(isset($effectuer)){echo $effectuer ;}  ?></h1>
      <a href="login.php">Connection</a>   
      </div>
</div>

</body>
</html>