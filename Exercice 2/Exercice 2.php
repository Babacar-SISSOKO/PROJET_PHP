<!DOCTYPE html>

<html>
    
    <head>
        
        <style>
            td
            {
                width:10%;
                height:30px;
                border:1px solid black;
                text-align: center;
                background-color: greenyellow;
            }
        
        </style>
        
    </head>
    
    
    <body>
        
        <div class="div1">
            <h1>Calendrier</h1>
        </div>
        
        <div class="div2">
            
            <form method="post">
            
                <select name="Langue">
                    <option value="1">Français</option>
                    <option value="2">Anglais</option>
                </select>
            
                <input type="submit" name="sub" value="Afficher">
                <br>
                
                <?php
                
                    $calendrier=[
                        1 =>['fr'=>'Janvier', 'ang'=>'January'],
                        2=>['fr'=>'Février', 'ang'=>'February'],
                        3=>['fr'=>'Mars', 'ang'=>'Mach'],
                        4=>['fr'=>'Avril', 'ang'=>'April'],
                        5=>['fr'=>'Mai', 'ang'=>'May'],
                        6=>['fr'=>'Juin', 'ang'=>'June'],
                        7=>['fr'=>'Juillet', 'ang'=>'July'],
                        8=>['fr'=>'Août', 'ang'=>'August'],
                        9=>['fr'=>'Septembre', 'ang'=>'September'],
                        10=>['fr'=>'Octobre', 'ang'=>'October'],
                        11=>['fr'=>'Novembre', 'ang'=>'November'],
                        12=>['fr'=>'Décembre', 'ang'=>'December']
                    ];
                
                ?>
                
            </form>
            
        </div>
    </body>


</html>

<?php

    

    $colonne=6;
    $ligne=4;

  if (isset($_POST["sub"]))
    {
        if (isset($_POST["Langue"]))
        {
            $langue=$_POST["Langue"];
            
            if ($langue=="1")
            {
                echo '<table>';
                echo '<tr>';
                for($i=1; $i<=12; $i++)
                {
                    echo '<td>';
                    echo $i;
                    echo '</td>';
                    echo '<td>';
                    echo $calendrier[$i]['fr'];
                    echo '</td>';
                    
                    if($i%3==0)
                    {
                        echo '</tr>';
                        echo '<tr>';
                    }
                }

                echo '</table>';
            }
            
            else
            {
                echo '<table>';
                echo '<tr>';
                for($i=1; $i<=12; $i++)
                {
                    echo '<td>';
                    echo $i;
                    echo '</td>';
                    echo '<td>';
                    echo $calendrier[$i]['ang'];
                    echo '</td>';
                    
                    if($i%3==0)
                    {
                        echo '</tr>';
                        echo '<tr>';
                    }
                }

                echo '</table>';
            }
        }
      
    }



?>

