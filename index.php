<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Merci</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='merci.css'>
    <script src='main.js'></script>
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


<?php
    if(isset($_GET["chiffre"]))
    {
        echo $_GET["chiffre"];
        echo ('<div><br></div>');
        echo rand(0, 10);
        echo ('<div><br></div>');
        
         if(isset(rand()=$_GET["chiffre"]));
         {
             echo("Perdue")
         }

    }
    
?>

   
</body>
</html>