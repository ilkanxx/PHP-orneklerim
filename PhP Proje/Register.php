<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="Register.css">




    <style>
    
    @import url('https://fonts.googleapis.com/css?family=Oswald&display=swap');

@import url('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap&subset=latin-ext');


body{
background-color: #000000;
font-family: 'Open Sans', sans-serif; 
background-image: url(Resimler/1.gif);
background-repeat: no-repeat;
background-size:100%;


}

.kenar_cubugu{ 
position: relative;
left:300px;
top: 80px;  
border-style: groove;
/*border-color: #8a9eff;*/
padding: 30px;
height: 100%;
width: 600px;
background-color: #fff;
box-shadow: 0 5px 10px 0 rgb(0, 0,0 ,.40);/*Gölge efekti veriyoruz*/
}

.baslık{   
font-weight:700;
font-size: 50px;
font-family: 'Oswald', sans-serif;
text-align: center;
}

.btn{
background-color: #3578E5;
color: #fff;
cursor: pointer;
font-weight: 700;
font-size: 16px;
font-family: 'Oswald', sans-serif;
width: 380px;
height: 50px;
border-radius: 3px;
border:none;
margin-top: 10px;
box-shadow: 0 5px 10px 0 rgb(0, 0,0 ,.40);/*Gölge efekti veriyoruz*/
}

.form_control{
width:350px;
padding: 15px;
color: #1a1a1a;
border-radius: 3px;
border:1px solid rgb(185, 185, 185);
}

.form_grup{
margin-bottom: 20px;
}

.form_control:focus{
border: 1px solid #3557ff ;
}

.giris_form{
display: table;
margin: auto;
}


/*.form_grup1{
float: right;    

}*/


    
    
    
    
    </style>
</head>
<body>
    

<div class="kenar_cubugu">
    
    <h1 class="baslık">Kayıt</h1>


<form action="" method="POST"></form>
   
                
    <div class="giris_form">
        


        <small> Ad </small>
        <div class="form_grup">    <input class="form_control" type="text">    </div>
               
        <small> Soyad </small>
        <div class="form_grup">  <input class="form_control" type="text"> </div>

        <small>Kullanıcı Adı</small>
        <div class="form_grup">  <input class="form_control" type="text"> </div>

        <small>E_Posta</small>
        <div class="form_grup">  <input class="form_control" type="email"> </div>

        <small>Şifre</small>
        <div class="form_grup">  <input class="form_control" type="password"> </div>

        
     <!--    <div class="form_grup1">  <input class="sifre" type="checkbox" name="vehicle1" value="Bike">Göster/Gizle</div>    --> 


        <small>Şifre Tekrar</small>
        <div class="form_grup">  <input class="form_control" type="password"> </div>


       
           
           
       

       <!-- <div class="form_grup">   <button class="btn btn-left">Giriş Yap</button>  </div> -->       
           
      


<div class="form_grup">  <button class="btn" >Kayıt Ol</button> </div> 



                  
       
        

    </div>





</body>
</html>