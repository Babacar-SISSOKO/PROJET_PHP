<?php require_once("fonctions.php");?>

<!DOCTYPE html>
<html>
    
    <head>
        <link href="style.css" rel="stylesheet">
    </head>
    
    <body>
        <form method="post">
            
            <label for="saisie">Combien de mots?</label><br>
            <input id="saisie" type="text" name="inp"><br><br>
            <input class="submit1" type="submit" value="Valider" name="valider">
            <input class="submit2" type="reset" value="Annuler"><br><br>
            
<?php
    if (isset($_POST['valider']))
    
    {
        if(!empty($_POST['inp']))
        $x=$_POST['inp'];
    }

AffichageChamps($x);
            
    if(isset($_POST['results']))
    {
        for($i=1; $i<=$x; $i++)
        {
            $mot=$_POST['input'.$i.''];
            echo $mot;
        }
    }
     
?>
            <br>
            <input class="result" type="submit" value="Résultats" name="results">

        </form>
    </body>



</html>

