<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    
    
body{
 
 background-color: #e2a95a;
 }
 div#sayfa{
     width: 1000px;
     background-color: white;
     height: 607px;
     margin: auto;
   /*  border: 1px solid black;*/
     background-image: url(Resimler/asd.jpg);
     background-repeat: no-repeat;
     background-position: center;
     background-size:contain;
 
 }
 #sayfa1{
 
     width: 255px;
     height: 80px;
     top: 135px;
     right: 16px;
   
     margin: auto;
   /*  border: 1px solid black;*/
     position: relative;
     margin: auto;
 }
 
 #sayfa2{
 
      width: 255px;
      height: 80px;
   
  position: fixed;/*Üsten hızalamaya başlar sayfaya göre */
  
   
    top: 60px;
    right: 540px;
    
     /* border: 1px solid black;*/
      
   
 }
 
 #sayfa3{
 
     width: 337px;
     height: 90px;
  
      position: fixed;/*Üsten hızalamaya başlar sayfaya göre */
 
  
      top: 310px;
   right: 511px;
   
   /*  border: 1px solid black;*/
     
  
 }
 #sd1{
     width: 85px;
     height: 90px;
     position: absolute;
    top: 0px;
    /*opacity: 0.5;*/
    left: 0px;
    background-color: transparent;
    border: transparent;
 }
 #sd2{
     width: 85px;
     height: 90px;
     position: absolute;
    top: 0px;
    background-color: transparent;
    border: transparent;
    left: 167px;
 }
 #sd3{
     width: 85px;
     height: 90px;
     position: absolute;
    top: 0px;
    left: 85px;
    background-color: transparent;
    border: transparent;
 }
 #sd4{
     width: 85px;
     height: 90px;
     position: absolute;
    top: 0px;
    background-color: transparent;
    border: transparent;
    right: 0px;
 }
 
 #sayfa4{
     width: 245px;
      height: 90px;
      position: absolute;
      top: 412px;
      right: 511px;
      left: 560px;
     /* border: 1px solid black;*/
 }
 #sayfa5{
 
      width: 245px;
      height: 90px;
      position: absolute;
      top: 512px;
      right: 511px;
      left: 560px;
    
     
      /*border: 1px solid black;    */
 }
 #sd5{
     width: 82px;
     height:65px;top: 15px;
     position: absolute;
     font-size: 25px;
    /*opacity: 0.5;*/
    left: 15px;
    right: 10px;
    background-color: transparent;
    border: transparent;
 }
 #sd6{
 
     width: 82px;
     height:65px; 
     position: absolute;
     font-size: 25px;
    
    background-color: transparent;
    border: transparent;
    left: 152px;
    top: 10px;
 }
 #sd7{
     width: 82px;
     height:65px;top: 15px;
     position: absolute;
     font-size: 25px;
     right: 11px;
    
    background-color: transparent;
    border: transparent;
 }
 #sd8{
     width: 82px;
     height:65px;top: 15px;
     position: absolute;
     font-size: 25px;
   background-color: transparent;
    border: transparent;
    right: 10px;
    left: 14px;
 }
 


    
    </style>
</head>
<body>
         <div id="sayfa" > 
            <marquee behavior="alternate" bgColor="#239d46">HOŞGELDİNİZ</marquee>

         <div id="sayfa1">
            <table  cellpadding="34" cellspacing="0"  > 
                <tr>
                    <td><h1>10</h1></td>
                    <td><h1>+</h1></td>
                    <td><h1>20</h1></td>
                </tr>
               
            </table>
            <div id="sayfa2" >
                <table  cellpadding="34" cellspacing="0"  > 
                    <tr>
                       
                        <td><h3>zaman</h3></td>
                        <td><h3>Puan</h3></td>
                    </tr>
                </table>

            </div>
         </div> 
         <div id="sayfa3">

            <table  cellpadding="15"  > 
                <tr>
                   
                    <td><input id="sd1" type="button" value="" /></td>
                    <td><input id="sd2" type="button" value="" /></td>
                    <td><input id="sd3" type="button" value="" /></td>
                    <td><input id="sd4" type="button" value="" /></td>

                    
                </tr>
            </table>


         </div>

         <div id="sayfa4">

            <table  cellpadding="15"> 
                <tr>
                   
                   <td><input id="sd5" type="button" value="30" /></td>
                   <td><input id="sd7" type="button" value="15" /></td>

                    
                </tr>
            </table>

         </div>

         <div id="sayfa5">

            <table  cellpadding="15"> 
                <tr>
                   
                   <td><input id="sd6" type="button" value="20"  /></td>
                   <td><input id="sd8" type="button" value="45" /></td>
                    
                </tr>
            </table>

        </div>
        </div>
         
          
</body>
</html>