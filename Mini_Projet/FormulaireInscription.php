<!DOCTYPE html>

<html>
    
    <head>
        <link href="MinProj1.css" rel="stylesheet">
    </head>
    
    <body>
        
        <form class="form1">
    

        <label for="prenom">Prénom</label><div id="error-1"></div>
        <input type="text" name="prenom" error="error-1" value="<?php if (isset($_POST['prenom'])) echo $_POST['prenom'] ?>"><br>

        <label for="nom">Nom</label><div id="error-2"></div>
        <input type="text" name="nom" error="error-2" value="<?php if (isset($_POST['nom'])) echo $_POST['nom'] ?>"><br>

        <label for="login">login</label><div id="error-3"><?php if (@$x==1) echo "login existe déjà"?></div>
        <input type="text" name="login" error="error-3" value="<?php if (isset($_POST['login'])) echo $_POST['login'] ?>"><br>



        <label for="Password">Password</label><div id="error-4">
        <?php 
    if(!empty($_POST['password'])&& !$y) {
    echo "Les deux mots de passe doivent être identiques"; 
    echo $_POST['password']=""; echo $_POST['conf_password']="";}?></div>
                        <input type="password" name="password" error="error-4" value="<?php if (isset($_POST['password'])) echo $_POST['password'];  ?>"><br>
                        
                        <label for="conf_password">Confirmer Password</label><div id="error-5"></div>
                        <input type="password" name="conf_password" error="error-5" value="<?php if (isset($_POST['conf_password'])) echo $_POST['conf_password'] ?>"><br>
        
                    <div class="AvatarJoueur">
                    </div>
                    <h4><p>Avatar Admin</p></h4>
                    <input type="file" value="Choisir un fichier" class="inp">
                    <input type="submit" value="Créer compte" class="compt">
                        
  </form>                 
    </body>

</html>