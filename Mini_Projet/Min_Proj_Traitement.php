<!--Connexion d'un utilisateur déjà inscrit et redirection vers sa page-->

<?php

session_start();

    if(isset($_POST['connexion']))
    {
        $log=$_POST['login'];
        $pass=$_POST['pass'];
        $Mabase=array();
        $_SESSION['authentification']=" ";
        
        $Mabase=file_get_contents('Min_Proj.json');
        $Mabase=json_decode($Mabase,true);
        
        for($i=0; $i<2; $i++)
            {
                if($Mabase["joueur"][$i]["login"]==$log && $Mabase["joueur"][$i]["pass"]==$pass)
                {
                   $_SESSION['authentification']="oui";
                   header("location:InterfaceJoueur.php");
                   $_SESSION['surname']=$Mabase["joueur"][$i]['prenom'];
                   $_SESSION['name']=$Mabase["joueur"][$i]['nom'];
                   $_SESSION['avatar']=$Mabase["joueur"][$i]['avatar'];
                  
                }
    
                else if ($Mabase["admin"][$i]["login"]==$log && $Mabase["admin"][$i]["pass"]==$pass)
                {
                    $_SESSION['authentification']="oui";
                    header("location:InterfaceAdmin.php");
                }
                    
            }
        
        $Mabase=json_encode($Mabase);
        file_put_contents('Min_Proj.json', $Mabase);
  
    }

// Déconnexion d'un utilisateur

   if (isset($_POST['deconnexion']))
    {
        session_start();
        session_destroy();
        header("location:connexion.php");
        
    } 


    

?>