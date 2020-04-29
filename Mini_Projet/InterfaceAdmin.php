<?php

session_start();

    if($_SESSION['authentification']!='oui')
    {
        header("location:connexion.php");
        exit();
    }
require_once 'TestJS.php';
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
            
            <div class="div2 div2_1 divX">
                <div class="div8 div8_1">
                    <h2>Créer et paramétrer vos quizz</h2>
                    
                    <form method="post" action="Min_Proj_Traitement.php">
                        <input type="submit" value="Déconnexion" name="deconnexion">
                    </form>
                </div>
                
                <div class="div10">
                    <div class="div11">
                        <div class="div11_1">
                            <div class="avatar"><img src="<?php echo $_SESSION['avatar']?>"></div>
                            <p><?php echo $_SESSION['surname']?></p> 
                            <p><?php echo $_SESSION['name']?></p>
                        </div>
                        <a href="" class="active" data-tabtitle="0"><div class="div11_2"><p>Liste Questions</p> <img src="Images/ic-liste.png"></div></a>
                        <a href=""  data-tabtitle="1"><div class="div11_2"><p>Créer Admin</p> <img src="Images/ic-ajout.png"></div></a>
                        <a href="" data-tabtitle="2"><div class="div11_2" ><p>Liste Joueurs</p> <img src="Images/ic-liste.png"></div></a>
                        <a href="" data-tabtitle="3"><div class="div11_2" ><p>Créer Questions</p> <img src="Images/ic-ajout.png"></div></a>
                    </div>
                    
                    <div class="div12">
                        
                           <div class="div13 active" id="tab0"><h2><p class="par1">Nombre de Questions/Jeu</p></h2>
                               <input type="text" class="text1">
                               <input type="submit" value='OK' class="OK">
                           </div>
                        
                            <div class="div13" id="tab1">
                                <h1 class="title1">S'inscrire</h1> <p class="par2">Pour proposer des Quizz</p>
                            </div>
                        
                            <div class="div13" id="tab2">
                                <h1><p>LISTE DES JOUEURS PAR SCORE</p></h1>
                            </div>
                        
                            <div class="div13" id="tab3">
                                <h1><p>Paramètrer votre question</p></h1>
                            </div>
                        
                        
                       <div class="div14 active contenu0">Nombre de Questions/Jeu</div>
                       <div class="div14 contenu1"><?php include "FormulaireInscription.php"?></div>
                       <div class="div14 contenu2">Liste des Joueurs par score</div>
                       <div class="div14 contenu3">
                           
                        <form method="post">
                           <label class="label1">Questions</label>
                           <input type="text" class="inp1">
                           <label class="label2">Nbre de Points</label>
                           <input type="number" class="inp2">
                           <label class="label3">Type de réponse</label>
                            
                            <input type='text' name="getOptions" list="myOptions">
                           <datalist id="myOptions">
                               <option>Donnez le type de réponse</option>
                               <option value="1">Réponse à choix multiples (avec une seule réponse possible)</option>
                               <option value="2"> Réponse à choix multiples (avec plusieurs réponses possibles)</option>
                               <option value="3">Réponse texte à saisir</option>
                               <input type="image" src="Images/ic-ajout-r%C3%A9ponse.png" class="plus">
                           </datalist>
                            
                            <input type="submit" value="Enregistrer" class="enregistrer">
                        </form>
                           
                           <script>
                                let options=document.getElementsByName("getOptions")[0];

                                options.addEventListener('input', function(){
                                    let x=this.value;
                                    if (x==1)
                                            {
                                              maFonction1(document.getElementById('myOptions'));
                                            }
                                        else if (x==2)
                                            {
                                               maFonction2(document.getElementById('myOptions')); 
                                            }
                                        else if (x==3)
                                            {
                                               maFonction3(document.getElementById('myOptions')); 
                                            }
                                    })
                               
                                    
                               </script>
                           
                       </div>
                    </div>
                    
                </div>
                    
            </div>
            
            
        </div>
  
<script>
    let onglets=document.querySelectorAll('.div11 a');
    for(let onglet of onglets)
        {
            onglet.addEventListener('click', function(e){
                let num=this.getAttribute('data-tabtitle');
                document.querySelector('.div12 .div13.active').classList.remove('active');
                document.querySelector('.div14.active').classList.remove('active');
                document.querySelector('#tab' + num).classList.add('active');
                document.querySelector(' .div14.contenu' + num).classList.add('active');
                
                e.preventDefault();
                return false;
                
                
            })
        }
    
        
        
</script>
        
    </body>


</html>