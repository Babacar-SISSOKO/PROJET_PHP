<!DOCTYPE html>

<html>
    
    <head>
        <title>Connexion</title>
        <link href="MinProj.css" rel="stylesheet">
    </head>
    
    <body>
        
        <div class="div1">
            
            <header>
                <img src="Images/logo-QuizzSA.png">
                <h1>Le plaisir de jouer</h1>
            </header>
            
            <div class="div2">
                <div class="div3">
                    <div class="div4">
                        <h2>Login Form</h2>
                    </div>
                    
                <form method="post" id="form-connexion" action="Min_Proj_Traitement.php">
                    
                    <div class="div5">  
                        <div class="div6">
                            <input type="text" placeholder="Login" name="login" error="error-1">
                            <img src="Images/Icônes/ic-login.png">
                            <div class="error" id="error-1"></div>
                        </div>
 
                        <div class="div6">
                            <input type="text" placeholder="Password" name="pass" error="error-2">
                            <img src="Images/Icônes/ic-password.png">
                            <div class="error" id="error-2"></div>
                        </div>
                        
                        <div class="div7">
                            <input class="Connexion" type="submit" value="Connexion" name="connexion">
                            <div><a href="Creer_Compte_User.php"><h3>S'inscrire pour jouer?</h3></a></div>
                        </div>
                    </div>
                </form>
                </div>
            </div>
 
        </div>
    
    </body>


</html>

<script>
    
    const inputs=document.getElementsByTagName('input');
    for(input of inputs)
         {
             input.addEventListener("keyup", function(e){
                 if(e.target.hasAttribute("error"))
                     {
                         var idDivError=e.target.getAttribute("error");
                         document.getElementById(idDivError).innerText="";
                     }
             })
         }
    
    
    
    let Myform=document.getElementById("form-connexion");
    Myform.addEventListener('submit', function(e){
        
        const inputs=document.getElementsByTagName('input');
        let error=false;
        
        for(input of inputs)
            {
                if(input.hasAttribute("error"))
                {
                    var idDivError=input.getAttribute("error");
                    if(!input.value)
                        {
                            document.getElementById(idDivError).innerText="Ce champs est obligatoire";
                            error=true; 
                        }
                   
                }
                
            }
        
      if(error)
      {
         e.preventDefault();
         return false; 
      }
            
        
        
    })
</script>




