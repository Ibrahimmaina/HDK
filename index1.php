<?php
session_start();
include "bdd.php";
global $db;
if(isset($_POST['connection']))
{    
 extract($_POST);

 if(!empty($mail) && !empty($mdp))
    {
         $passwordes =htmlspecialchars($_POST['mdp']) ;
         $emaile = htmlspecialchars($_POST['mail']) ;
        $r = $db->prepare("SELECT * FROM joueurs WHERE mail = :mail");
        $r->execute(['mail' => $emaile]);
        $resulta = $r->fetch();
       
        if($resulta == true)

         { $id = $resulta['id'];
            $emaile = $resulta['mail'];
            include "bdd.php" ;
          global $db;
     
          $q= $db->query("SELECT * FROM joueurs WHERE id=$id ");
          $resulta = $q->fetch();
        
            if(password_verify($passwordes,$resulta['mdp']))
            {
               
               
                $mdp = "tout est correcte";
                header("location:ind.php?id=$resulta[id]");
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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css"  type="text/css" />
    <script type="text/javascrip" src="bootstrap.js"></script>  
  <script>
    function AutoRefresh(t){
        setTimeout("location.reload(true);",t);
    }
  </script>
    <title>BALSA NIGER</title>
</head>
    <title>BALSA NIGER</title>
</head>
<body style="background-color:rgb(116, 161, 65);" onload="Javascript:AutoRefresh(11110000)">
<header>
    <div class="contenair container-fluid"> 
        <div class="bg bg-success">
         <p style="text-align: justified;font-size:20px;height:40px;">LOTO BALSA NIGER 5 SUR 90 (5/90)</p>
        </div>
    </div>
    
</header>
<div>
         <div style="text-align: center;border:1px solid yellow;background-color:rgba(104, 138, 250, 0.973);">
           <marquee behavior="" direction="left"><h3>Pronostics du jour</h3></marquee> 
         </div>
         <div style="text-align:center ;font-size:20px;color:dark;">
 
</div>
<?php 
include "bdd.php";
global $db;
$q= $db->query("SELECT * FROM resultats ORDER BY id ASC ");
$resulta = $q->fetch();
if ($resultasss = $q->fetch()){
    $jour=$resultasss['jour'];
    $mois=$resultasss['mois'];
    $annee=$resultasss['annee'];
    ?>
    <div class="form form-range">
    <h4 style="text-align: center;color:orange;" class="form form-range">Résultat du jour LOTO BALSA</h4>
    <table class="tabb"><style>.tabb th{ border: 1px solid orange;text-align: center;font-size: 30px;background-color: white;}.tabb{margin-left: 15%;}</style>
        <th> <label for="" class="form form-conthol" style="width:45px ;"><?=$resultasss['ch1']?></label> </th>
        <th> <label for="" class="form form-conthol" style="width:45px ;"><?=$resultasss['ch2']?></label> </th>
        <th> <label for="" class="form form-conthol" style="width:45px ;"><?=$resultasss['ch3']?></label> </th>
        <th> <label for="" class="form form-conthol" style="width:45px ;"><?=$resultasss['ch4']?></label> </th>
        <th> <label for="" class="form form-conthol" style="width:45px ;"><?=$resultasss['ch5']?></label> </th>
        
    </table>
</div>  
    </div>
<?php }
?>
<div style="position:absolute ;top:26%;left:15%;font-size:28px;color:darkblue">
<h2 class="form form-range"><?php echo $jour ." ".$mois." ".$annee ; ?></h2>  

</div>



<style> .cc ul a{display: block;
	width: 135px;
	height: 35px;
	
	color: black;
	font-size: 16px;
    text-align: left;
    margin-top: 5%;
	font-weight: normal;
    text-decoration: none;
	position: relative;}
    .cc ul li{
    display: inline-block;
     text-align: center;
     background-color: orange;
    }
    .cc ul li:hover{
    background-color: green;
  
    }
    .cc ul{width: 270px;
    list-style: none;
    margin: 0;
    padding: 0;
	text-align: left;}
    .cc{ position: absolute;
    top:35% ;}</style>
    <div class="cc" >
        <ul>
    <li><a href="index.php">Acceuil</a></li>
    <li><a href="resultats.php">Resultat du jour</a></li>
    <li><a href="croixnational.php">Croix Nationnal </a></li>
    <li><a href="choixboules.php">Choix de boules</a></li>
    <li><a href="listpj.php">liste Pronostics</a></li>
    <li><a href="">A propos</a></li>
    
 </ul></div>
 <div style="position:absolute ;left:40%;top:35%;" >
    <h3 style="text-align:center ;" >Connection</h3>
    <div>
        <form action="" method="POST">
            <div style="text-align: center;font-size:25px;font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif">
               <label for="">Email </label> 
            </div>
             <div>
              <label for=""><input type="email" name="mail" class="form form-control" style="width: 200px;"></label>  
             </div>
            <div style="text-align: center;font-size:25px;font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif">
               <label for="">Password </label> 
            </div>
            <div>
             <label for=""><input class="form form-control" type="password" name="mdp" style="width: 200px;"></label>   
            </div>
            <div><input style="width:200px;position:relative;left:0%;" type="submit" class="btn btn-success" name="connection" value="Se connecter"></div>   <br>
        </form>
            
                
            


<button class="link link-success"><a href="creercompte.php">Creer un compte</a></button>

 </div>

 
 </div>
 <footer class="footer form-control-plaintext" style="background-color: orange;width:600;height:200px;position:absolute;top: 76%;">

<div>
    <label for="" style="position:absolute;top:80%;"><a href="adminc.php" class="btn btn-warning">admin</a></label>
</div>

</footer> 
</body>
</html>