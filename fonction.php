
<?php

function toto (){
    $text = "Bonjour, çava ?";

    ?>
    <div>
        
        <?php 
            echo $text;
        ?>
    
    </div>
<?php
}


    
    function tata(){
?>
<div>       
<p><div style="color:<?php echo $couleur?>"><h1>Oui et toi !?</h1></div></p>
</div>

<?php   }

?>

<?php

    function RGB ($couleur){
?>
        <div>
            <p><div style="color:<?php echo $couleur?>"><h1>Texte + couleur</h1></div></p>
        </div>

<?php }
?>