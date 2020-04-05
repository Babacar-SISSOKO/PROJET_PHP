<?php require "fonctions.php" ?>

<!DOCTYPE html>

<html>
    <head>
        <style>
            
            body{text-align: center;}
            textarea{width:20%; height:100px; padding:0px; margin:0px;}
            input{width:10%; height:60px; background-color:blue; color:white; border-radius:10px; font-weight: bold;}
            
        
        </style>
    </head>
    
    <body>
        <form method="post">
            <div>
                <h2>Veuillez saisir le texte à corriger ici!</h2>
                <textarea name="saisie">
                    <?php
                        if (isset($_POST['saisie']))
                            echo $_POST['saisie'];
                    ?>
                </textarea>
            </div>

            <input type="submit" value="Corriger" name="correction">
            
<?php
    if(!empty($_POST['saisie']))
    {
        if(isset($_POST['correction']))
        {
            $texte=$_POST['saisie'];
            $phrase=DecoupeEnPhrase($texte);    
        }
    }
?>            
            <div>
                <h2>Correction du texte saisi!</h2>
                    
                <textarea>
                    <?php
                        foreach(@$phrase as $value)
                        {
                           $value=SupprimeEspaceInutile($value);
                            echo "$value";
                        }
                    ?>
                </textarea>                      
            
            </div>
        </form>
    </body>

</html>

