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
    
    <nav>
        <ul>
            <li><a href="Page d'accueil.html">Accueil</a></li>
            <li><a href="CV.html">CV [FR]</a></li>
            <li><a href="CV[EN].html">CV [EN]</a></li>
            <li><a href="Personnage.html">Personnages</a></li>
            <li><a href="Article.html">Article</a></li>
            <li><a href="image.html">Images</a></li>
            <li><a href="contact.html">Contact</a></li>
        </ul>
  </nav>

  <!--formulaire du chiffre -->
  <form action="" method="get" class="form-example">
  
  <div class="form-example">
    
  <label for="chiffre-user">Ente ton chiffre: </label>
    
  <input type="text" name="chiffre" id="name" required>
  
  </div>

  <div class="form-example">
    <input type="submit" value="Envoyer">
  </div>

</form>

<?php/*
    
    echo "La session à démarrer <br>";
    $disconnect=false;

    if(isset($_SESSION ['Connect'])) {
        echo "la session exite.<br>".$_SESSION ['Connect'];
        $_SESSION ['Connect']=false;
    }else{
        
        $_SESSION['Connect']=true;
        session_destroy();
        unset($_SESSION);
        echo "La session est terminé, vous etes deconnecté.<br>";
        
    }
    */
    
     ?>

<?php

    
     if(isset($_SESSION["nombre"]))
    {
        echo " ok ";
        if(isset($_GET["chiffre"]))
    
    if($_GET["chiffre"]<$_SESSION["nombre"])
    {
        echo "plus grand";
    }
    
    else if ($_SESSION["nombre"]>$_GET["chiffre"]){
        echo "plus petit";
    }
    
    else
    {
        echo"GAGNÉ! ";
        $_SESSION["nombre"]=rand(0,100)
    
    
    else ($_SESSION["nombre"])=rand(0,100);
    
?>





   
</body>
</html>