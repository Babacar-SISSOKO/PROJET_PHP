<!DOCTYPE html>

<html>
    
    <head>
        <style>
            
#div15
{
    border:5px solid black;
    height:auto;
    float:right;
    width:80%;
}

#label4
{
    font-size:50px;
}
            
#label5
{
  font-size:25px;  
}
            
#myInp
{
   width:70%;
    height:80px;
    background-color:#f7f7f7;
    font-size:30px;
}

#myInp2
{
  background-color:#f7f7f7;
    width:50%;
    height:30px;
}
            
#radio
{
  width:40px;  
    height:30px;
    position:relative;
    top:10px;
}
        
        </style>
    </head>
    
    <body>
        <script>
     
const maFonction1=function(emplacement){
    let maDiv=document.createElement('div');
    maDiv.id="div15";
    let monLabel=document.createElement('label');
    monLabel.id="label4";
    let texteLabel=document.createTextNode('Réponse');
    monLabel.appendChild(texteLabel);
    let monInput=document.createElement('input');
    monInput.id="myInp";
    monInput.type="text";


maDiv.appendChild(monLabel);
maDiv.appendChild(monInput);
emplacement.appendChild(maDiv);
}

const maFonction2=function(emplacement){
    let maDiv=document.createElement('div');
    maDiv.id="div15";
    let monLabel=document.createElement('label');
    monLabel.id="label5";
    let texteLabel=document.createTextNode('Réponse');
    monLabel.appendChild(texteLabel);
    let monInput=document.createElement('input');
    monInput.id="myInp2";
    monInput.type="text";
    let monInput1=document.createElement('input');
    monInput1.type='radio';
    monInput1.id='radio';
    let monInput2=document.createElement('input');
    monInput2.type="button";
    monInput2.id="button";
    monInput2.value="x";

    maDiv.appendChild(monLabel);
    maDiv.appendChild(monInput)
    maDiv.appendChild(monInput1);
    maDiv.appendChild(monInput2);
    emplacement.appendChild(maDiv);  
}

const maFonction3=function(emplacement){
    let maDiv=document.createElement('div');
    maDiv.id="div15";
    let monLabel=document.createElement('label');
    monLabel.id="label5";
    let texteLabel=document.createTextNode('Réponse');
    monLabel.appendChild(texteLabel);
    let monInput=document.createElement('input');
    monInput.id="myInp2";
    monInput.type="text";
    let monInput1=document.createElement('input');
    monInput1.type='checkbox';
    monInput1.id='radio';
    let monInput2=document.createElement('input');
    monInput2.type="button";
    monInput2.id="button";
    monInput2.value="x";

    maDiv.appendChild(monLabel);
    maDiv.appendChild(monInput)
    maDiv.appendChild(monInput1);
    maDiv.appendChild(monInput2);
    emplacement.appendChild(maDiv);  
}
        </script>
    
    
    </body>








</html>