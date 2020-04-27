<?php
//fonction qui teste si le login est unique

function UniqueLogin($login, $tableau, $key1, $key2){

    for($i=0; $i<count($tableau); $i++)
    {
       if($login==$tableau[$key1][$i]['login'] or $login==$tableau[$key2][$i]['login'] )
       {
          return 1;
          break;
       }
           
        else
            return 0;
    }  
}

//fonction qui charge un fichier json dans un tableau

function ChargementJson($nomFic){
    $MaBase=file_get_contents($nomFic);
    $MaBase=json_decode($MaBase, true);
    return $MaBase;
}

//fonction qui vérifie si le mot de passe entré et le mot de passe de confirmation sont identiques

function VerifPassword($pwd1, $pwd2)
{
    if($pwd1==$pwd2)
        return 1;
    else return 0;
}

    
    
    
    
    
    
    
    
    ?>
