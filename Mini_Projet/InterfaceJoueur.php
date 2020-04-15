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
                    <h2>BIENVENUE SUR LA PLATEFORME DE JEU DE QUIZZ<br>JOUER ET TESTER VOTRE NIVEAU DE CULTURE GENERALE</h2>
                    <form method="post">
                        <input type="submit" value="Déconnexion" name="deconnexion">
                    </form>
                        <div class="cercle">
                            <img src="<?php echo $_SESSION['avatar'] ?>">
                        </div>
                        <p><?php echo $_SESSION['surname']; echo '&nbsp'.$_SESSION['name'].''; ?></p>
                </div>
            </div>
            
            
        </div>
        
        
    </body>


</html>

<?php
   if (isset($_POST['deconnexion']))
    {
        session_start();
        session_destroy();
        header("location:connexion.php");
        
    } 
    
    
?>