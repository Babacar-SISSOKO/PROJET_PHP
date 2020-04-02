<?php

session_start();

?>


<!DOCTYPE html>

<html>
    
    <head>
        <style>
            
           
        </style>
    </head>
    
    <body>
        
        <form method="post">
           Veuillez saisir une valeur supérieure à 10.000 <input type="text" name="nombre">
            <input type="submit" name="sub" value="Soumettre">
            
        </form>
        
        <?php
        
           
        ?>
        
    </body>
</html>


<?php


 if (isset($_POST["sub"]))
    {
        if (!is_numeric(($_POST["nombre"])))
            {
                echo "Vous n'avez pas saisi un nombre"; 
            }
        
        else if ($_POST["nombre"]<10000)
        {
            echo "Le nombre saisi est inférieur à 10.000";
        }
        
        else
        {
            $T1=array();
            $n=$_POST["nombre"];
            $l=0;  #nombre d'éléments de mon tableau
            
            for($i=2; $i<=$n; $i++)
            {
                $k=0;
               for($j=2; $j<=$i-1 and $k<1; $j++) 
               {
                   if ($i%$j==0)
                   {
                       $k=$k+1;
                   }
               }
                
                if($k==0)
                {
                    $l=$l+1;
                    $T1[]=$i;
                }
                
               }
      
            }
     
            if (isset($_GET['page']))
            {
                $pageActuelle=$_GET['page'];
            }
     
            else
            {
                $pageActuelle=1;
            }
     
            define("NbreValeurParPage",100);
            $NbrePage=ceil($l/NbreValeurParPage);
     
            $IndiceDep=($pageActuelle-1)*NbreValeurParPage;
            $IndiceFin=$IndiceDep+NbreValeurParPage-1;
    
                
            for($page=1; $page<=$NbrePage; $page++)
            {
                echo '<a href="pagination.php? page='.$page.'">'.$page.'</a> &nbsp &nbsp';
            }
     
            echo "<br>";
            
            $_SESSION['tab']=$T1;
     
            $X=$_SESSION['tab'];
            for($i=$IndiceDep; $i<=$IndiceFin; $i++)
            {
                echo "$X[$i]<br>";
            }
                
        

     
        }
    


?>