<?php

session_start();

    if($_SESSION['authentification']!='oui')
    {
        header("location:connexion.php");
        exit();
    }


?>

<!DOCTYPE html>

<html>
    
    <head>
        <link href="MinProj.css" rel="stylesheet">
    </head>
    
    <body>
        <div class="div1">
            <header>
                <?php include "Bande.php"?>
            </header>
            
            <div class="div2">
                <div class="div8">
                    <h2>CREER ET PAREMETRER VOS QUIZZ</h2>
                    
                    <form method="post" action="Min_Proj_Traitement.php">
                        <input type="submit" value="Déconnexion" name="deconnexion">
                    </form>
                </div>
            </div>
            
            
        </div>
        
        
    </body>


</html>