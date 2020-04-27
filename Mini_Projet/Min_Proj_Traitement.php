<?php require_once "fonctions.php"?>



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
        
        for($i=0; $i<100; $i++)
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
                    $_SESSION['surname']=$Mabase["admin"][$i]['prenom'];
                    $_SESSION['name']=$Mabase["admin"][$i]['nom'];
                    $_SESSION['avatar']=$Mabase["admin"][$i]['avatar'];
                    
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

// Vérification des infos de connexion Unique login
if(isset($_POST['sub']))
{
   $log=$_POST['login'];
   $pwd=$_POST['password'];
   $bd=ChargementJson("Min_Proj.json");
   $x=UniqueLogin($log, $bd, "admin", "joueur");
}

//Vérification si le mot de passe entré et le mot de passe de confirmation sont identiques
if (isset($_POST['password']))
$y=VerifPassword($_POST['password'],$_POST['conf_password']);


// Enregistrer les informations d'un nouveau utilisateur dans le fichier JSON
if (isset($_POST['sub']))
{
    $Informations=ChargementJson("Min_Proj.json");
    $Informations['joueur'][count($Informations)+1]['prenom']=$_POST['prenom'];
    $Informations['joueur'][count($Informations)+1]['nom']=$_POST['nom'];
    $Informations['joueur'][count($Informations)+1]['login']=$_POST['login'];
    $Informations['joueur'][count($Informations)+1]['pass']=$_POST['password'];
    $Informations['joueur'][count($Informations)+1]['avatar']='Images/Avatar/'.$_FILES['fichier']['name'].'';
    
    $Informations=json_encode($Informations);
    file_put_contents('Min_Proj.json', $Informations);
    
}







?>