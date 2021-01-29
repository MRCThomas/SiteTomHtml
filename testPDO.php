<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Table Medecin</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>

</head>
<body>

<h1>Nom et Prénom des Medecins: </h1>



<?php 
try {
    $Clinique = new PDO('mysql:host=192.168.65.91;dbname=Clinique', 'Thomas', 'tma123');
    $resultat = $Clinique->query("select * from Medecin");
?>    
    
    <table border="1">
        <thead>
            <tr>
                <th colspan="2">NOM</th>  
                <th colspan="2">Prénom</th>
            </tr>    
        </thead>    
    </table>

<?php    
    while ($Medecin = $resultat->fetch()){
?>
    <tbody>
    <table border="1">
   
        <tr>
            <td scope="row"><?php echo $Medecin['Nom']?></td>
            <td><?php echo $Medecin['Prenom']?></td>
        </tr>
    </table>
    </tbody>
<?php    
    }
}
catch(exception $e){
    die('Erreur'.$e->getMessage());
}




?>
</body>
</html>