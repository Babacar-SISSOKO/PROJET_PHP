<?php
//----------------------------Fonctions Exercice 3------------------------------------------------------

// fonction qui génère un nombre x de champs de texte donné en argument
function AffichageChamps($NbreChamps)
{
    echo '<form method="post">';
    for($i=1; $i<=$NbreChamps; $i++)
    {
        echo '<label class="labMot">Mot N°'.$i.'</label><br>';
        echo '<input class="inpMot" type="text" name="input'.$i.'"><br>';
    }
    echo '</form>';

}

// fonction qui convertit un retourne un caractère en minuscule
function ChangeCharMin($caractere)
{
    if($caractere>="a" and $caractere<="z")
    {
        return $caractere;
    }
    
    else if($caractere>="A" and $caractere<="Z")
    {
        $Minuscule=['A'=>'a','B'=>'b','C'=>'c','D'=>'d','E'=>'e','F'=>'f','G'=>'g','H'=>'h','I'=>'i','J'=>'j','K'=>'k','L'=>'l','M'=>'m','N'=>'n','O'=>'o','P'=>'p','Q'=>'q','R'=>'r','S'=>'s','T'=>'t','U'=>'u','V'=>'v','W'=>'w','X'=>'x','Y'=>'y','Z'=>'z',];
        
        foreach($Minuscule as $key=>$value)
        {
            if($key==$caractere)
            {
                $caractere=$value;
                return $caractere;
            }
        }
    }
}

// fonction qui convertit un retourne un caractère en majuscule
function ChangeCharMaj($caractere)
{
    if($caractere>="A" and $caractere<="Z")
    {
        return $caractere;
    }
    
    else if($caractere>="a" and $caractere<="z")
    {
        $Majuscule=['a'=>'A', 'b'=>'B', 'c'=>'C', 'd'=>'D', 'e'=>'E', 'f'=>'F', 'g'=>'G', 'h'=>'H', 'i'=>'I', 'j'=>'J', 'k'=>'K', 'l'=>'L', 'm'=>'M', 'n'=>'N', 'o'=>'O', 'p'=>'P', 'q'=>'Q', 'r'=>'R', 's'=>'S', 't'=>'T', 'u'=>'U', 'v'=>'V', 'w'=>'W', 'x'=>'X', 'y'=>'Y', 'z'=>'Z'];
        
        foreach($Majuscule as $key=>$value)
        {
            if($key==$caractere)
            {
                $caractere=$value;
                return $caractere;
            }
        }
    }

}

// fonction qui transforme une chaine de caractères en minuscule
function ChangeStringMin($chaine)
{
    for($i=0; $i<strlen($chaine); $i++)
    {
        $chaine[$i]=ChangeCharMin($chaine[$i]);
        echo $chaine[$i];
    }
}

// fonction qui transforme une chaine de caractères en majuscule
function ChangeStringMaj($chaine)
{
    for($i=0; $i<strlen($chaine); $i++)
    {
        $chaine[$i]=ChangeCharMaj($chaine[$i]);
        echo $chaine[$i];
    }
}

// fonction qui compte et retourne la taille d'un tableau
function TailleTab($tableau)
{
    $i=0;
    while(!empty($tableau[$i]))
    {
        $i=$i+1;
    }
    return $i;
}

// fonction qui compte et retourne la taille d'une chaine
function TailleString($Chaine)
{
    for($i=0; true; $i++)
    {
        if (!isset($Chaine[$i]))
            break;
    }
    return $i;
}


//fonction qui teste si un caractère est un chiffre
function IsChiffre($nombre)
{
    if($nombre>='0' && $nombre<='9')
    {
        return true;
    }
    else return false;
 
}

// fonction qui teste si un nombre est entier
function IsEntier($nombre)
{
    $compt=TailleString($nombre);
    for ($i=0; $i<$compt; $i++)
    {
        if (IsChiffre($nombre[$i]))
            return true;
        else
        {
            return false;
            break;
        }
      
    }
}

//fonction qui teste si un mot est valide(lettres uniquement)
function MotValide($mot)
{
    $masque='/[^a-zA-Z]/';
    return preg_match($masque, $mot);
}


//fonction qui teste si un mot est valide (lettres uniquement)
function MotValide1($mot)
{
    $compt=TailleString($mot);
    for($i=0; $i<$compt; $i++)
    {
        if($mot[$i]==ChangeCharMaj[$i] or $mot[$i]==ChangeCharMin[$i])
            return true;
        else
        {
            return false;
            break;
        }
    }
}

//-----------------------------------------------------------------------------------------------------

//-----------------------------Fonctions Exercice 4----------------------------------------------------

//fonction qui vérifie si un caractère est majuscule
function VerifMaj($caractere)
{
    $Majuscule=['A','B','C','D','E','F','G','H','I','J', 'K','L','M','N','O','P','Q','R','S','T','U','V', 'W', 'X','Y','Z'];
    $x=26;
    
    $i=0;
    while($i<=25 and $Majuscule[$i]!=$caractere)
    {
        $i=$i+1;
    }
    
    if($i>25)
        return false;
    else 
        return true;
}

//fonction qui vérifie si un caractère est un point, un point d'exclamation ou un point d'interrogation
function VerifPoint($caractere)
{
    if($caractere=='.' or $caractere=='!' or $caractere=='?')
        return true;
    else 
        return false;
}

//fonction qui vérifie si une chaine est une phrase
function ValidPhrase($chaine)
{
    $x=strlen($chaine);
    if (VerifPoint($chaine[$x-1]) and VerifMaj($chaine[0]))
        return true;
    else
        return false;
} 

// fonction qui découpe un texte en phrase
function DecoupeEnPhrase($texte)
{
    $masque='/\.|\!|\?/';
    $phrase=preg_split($masque, $texte, PREG_SPLIT_DELIM_CAPTURE);
    return $phrase;
}

//fonction qui supprime les espaces inutiles d'une phrase

function SupprimeEspaceInutile($phrase)
{
    $phrase = trim($phrase);
    $phrase = preg_replace("[ \s+]", " ", $phrase);
    return $phrase;
}



// fonction qui découpe un texte en phrase
function DecoupeEnPhrase1($texte)
{
    $l=0;
    for($i=0; $i<strlen($texte); $i++)
    {
        if (!VerifPoint($texte[$i]))
        {
            $l=$l+1;
        }
        else
        {
            for($j=0; $j<$l; $j++)
            {
                $tab[0]=$texte[0];
                $l=0;
                $i=$j;
            }
        }
    }
    
    foreach($tab as $value)
        return $value;
}


?>   