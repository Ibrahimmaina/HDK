<?php
include "bdd.php";
global $db;
if (isset($_POST['connection'])){
   extract($_POST);

 if(!empty($mail) && !empty($mdp))
    {
        $passwordes =htmlspecialchars($_POST['mdp']) ;
        $emaile = htmlspecialchars($_POST['mail']) ;
        $r = $db->prepare("SELECT * FROM users WHERE email = :email");
        $r->execute(['email' => $emaile]);
        $resulta = $r->fetch();
        if($resulta == true)
        { $id = $resulta['id_users'];
            $emaile = $resulta['email'];
            include "bdd.php" ;
          global $db;
     
          $q= $db->query("SELECT * FROM users WHERE id_users=$id ");
          $resulta = $q->fetch();
        
            if(password_verify($passwordes,$resulta['mdp']))
            {
               
               
                $mdp = "tout est correcte";
                header("location:index2.php?id=$resulta[id_users]");
            }
            else
             {
                 ; 
               $mdp = "le mot de pass qui est saissi est incorrecte" ;
                
                
               
             }
         }else
         {
            
            $mdp = "l'email ".$emaile ." n'a pas de compte";
         }
        }else
         {
          
            echo "remplisser les champs";

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
	<li><a href="#">Accueil</a></li>
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
<form  method="post" >
        <style>
            
                .nv{border: 1px solid black;
                margin-left:40%;}
                .nv label{font-size: 40px;}
                .for{width:300px;height: 60px;}
                .btn{width: 300px;height: 60px;}
                .nv{
                    position: absolute;
                    top: 25%;
                }
        </style>
    <table class="nv">
        <form action="" method="post">
        <tr>
        <td><label style=" color:white" style="font-size:25px;">Email:</label> </td>
        <td> <input type="text" name="mail" class="for" placeholder="nom d'utilisateur" ></td>
    </tr>
    <tr>
        <td><label style=" color:white" style="font-size:25px;">Mot de pass:</label></td>
        <td><input type="password" name="mdp"  class="for" style="font-size:25px;"></td>
    </tr>
    <tr>
        <td><input type="submit" value="connection" name="connection" class="btn btn-success" style="width:309px "></td>
      <td><input type="button" value="Annuler" class="btn btn-danger" style="width:309px"></td>  
    </tr>
        </form>
   
    <a href="inscription.php">creer un compte</a>
    </table>

    </form>


</body>
</html>