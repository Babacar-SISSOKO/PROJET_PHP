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
            
            <div class="div2 div2_1">
                <div class="div8 div8_1">
                    <h2>Créer et paramétrer vos quizz</h2>
                    
                    <form method="post" action="Min_Proj_Traitement.php">
                        <input type="submit" value="Déconnexion" name="deconnexion">
                    </form>
                </div>
                
                <div class="div10">
                    <div class="div11">
                        <div class="div11_1">
                            <div class="avatar">
                            </div>
                            <p></p> 
                            <p></p>
                        </div>
                        <a href=""><div class="div11_2"><p>Liste Questions</p> <img src="Images/ic-liste.png"></div></a>
                        <a href=""><div class="div11_2"><p>Créer Admin</p> <img src="Images/ic-ajout.png"></div></a>
                        <a href=""><div class="div11_2"><p>Liste Joueurs</p> <img src="Images/ic-liste.png"></div></a>
                        <a href=""><div class="div11_2"><p>Créer Questions</p> <img src="Images/ic-ajout.png"></div></a>
                    </div>
                    
                    <div class="div12">
                       <div class="div13"></div>
                       <div class="div14"></div>
                    </div>
                    
                </div>
            </div>
            
            
        </div>
        
        
    </body>


</html>