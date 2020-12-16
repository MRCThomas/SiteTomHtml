<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page THom, PHP</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='index.css'>
    <script src='main.js'></script>
    <?php session_start();?>
    
</head>
<body>
   <p><h1>JUSTE PRIX</h1></p>
  <!--formulaire du chiffre -->
  <form action="" method="get" class="form-example">
  
  <div class="form-example">
    
  <label for="chiffre-user">Entre ton chiffre: </label>
    
  <input type="text" name="chiffre" id="name" autofocus>
  
  </div>

  <div class="form-example">
    <input type="submit" value="Envoyer">
  </div>

</form>



<?php


if(isset($_SESSION["nombre"]))

    {
        echo 'votre chiffre "MYSTERE LOL" :'.$_SESSION["nombre"];
        echo "<div> </br>";
        isset($_SESSION["essai"]);
        
        if(isset($_GET["chiffre"]))
    
            if($_GET["chiffre"]<$_SESSION["nombre"])
                {
                    $_SESSION["essai"];
                    echo "Plus Grand";
                }
    
                else if ($_SESSION["nombre"]<$_GET["chiffre"])
                    {
                        $_SESSION["essai"];
                        echo "Plus Petit";
                    }
    
                else
                    {
                        echo"GAGNÉ! ";
                        echo "Nombre d'essaie : ".$_SESSION["essai"];
                        $_SESSION["nombre"]=rand(0,100);
                    }
    
                
    }else 
        {
            $_SESSION["nombre"]=rand(0,100);
        }
        
        
    
?>





   
</body>
</html>