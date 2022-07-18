<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">

<style>



@import url('https://fonts.googleapis.com/css?family=Oswald&display=swap');

@import url('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap&subset=latin-ext');


body{
  background-color: #efeee8;
    font-family: 'Open Sans', sans-serif; 
    background-image: url(Resimler/1.gif);
    background-repeat: no-repeat;
    background-size:100%
    

}




.kenar_cubugu{
  
    position: fixed;

left:300px;
 top: 80px;
   
 border-style: groove;
 border-color: #8a9eff;
 padding: 30px;
    height: 100%;
  background-color: #fff;
 
box-shadow: 0 5px 10px 0 rgb(0, 0,0 ,.40);/*Gölge efekti veriyoruz*/
}

.baslık{
    font-weight:700;
    font-size: 40px;
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
width: 150px;
height: 50px;
border-radius: 3px;
border:none;
box-shadow: 0 5px 10px 0 rgb(0, 0,0 ,.40);/*Gölge efekti veriyoruz*/




}


.form_control{
    width:290px;
    padding: 15px;
    color: #1a1a1a;
    border-radius: 3px;
    border:1px solid #ccc;

}



.form_grup{
    margin-bottom: 10px;

}

.form_control:focus{
    border: 1px solid #3557ff ;
}
.giris_form{
    display: table;
    margin: auto;
}


.btn-left{
    float: left;
}

.ml-3{
    margin-left: 10px;
}

.link{
    background-image: url(Resimler/12.jpg);
    background-repeat: no-repeat;
    background-size:100%;
    font-size: 72px;
  


}
.asd{
   /* float: right;*/
    margin-top: 50px;
    margin-left: 50px;
}









</style>


</head>
<body>
    


    <div class="kenar_cubugu" >

   <h1 class="baslık">Giriş</h1>

   <form action="" method="POST"></form>
   
                
    <div class="giris_form">
        
        <small>UserName</small>
        <div class="form_grup">
            
            <input class="form_control" type="text">
        </div>
        <small>Password</small>
        <div class="form_grup">
           
            <input class="form_control" type="password">
        </div>

        <div class="form_grup">  
            
            <a href="Anasayfa.php">

<button class="btn btn-left">Giriş Yap</button>

            </a>
            
        </div>


        <div class="form_grup">  
            <a href="Register.php">
                <button class="btn btn-left ml-3" >Kayıt Ol</button>
            </a>          
            
        </div>
 
           
           
       
    </div>
    <a href="https://www.facebook.com">

        <img src="Resimler/12.jpg" class="asd asd"  width="310px"  height="" ></a>


        <a href="https://accounts.google.com">

            <img src="Resimler/1.jpg" class="dsa asd"  width="310px"  height="" ></a>

  </div>


</body>
</html>