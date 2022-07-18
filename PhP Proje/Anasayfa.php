<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Anasayfa.css">
    <title>Document</title>

<style>


*{
    margin:0; padding:0; border: 0;list-style: none; text-decoration: none;
}
	.menu{width:1350px; height:48px; background:#ffa801; margin:0 auto;border-bottom:4px solid black;}
	.menu >ul >li {float:left;list-style-type:none; position: relative;}
	.menu >ul >li >a{color:#fff; font:17px Arial;text-decoration:none;display:block; padding:14px 15px;transition:all .5s;-webkit-transition:all .5s;-moz-transition:all .5s;}
    .menu >ul >li >a:hover 
    {
		background:black;
		color:#ffa801;	
	}	
	.menu >ul >li ul{
	
		
		background: #ffd32a;		
		width: 200px;
		font: 50px Arial;
		opacity: 0;
		top: 50px;
		left: 0;
		transition: 1000ms all;
		border-bottom:4px solid black;
		visibility: hidden;
		
	}
	.menu >ul >li ul a{
	
		color: black;
	}
	.menu >ul >li:hover ul{
   
     visibility: visible;
		opacity: 0.9;
		top: 50px;
		
		
		}

      
		.menu >ul >li ul  :hover {
			/*1 rakamını çizelim üzerin gelince*/
		color: rgb(253, 253, 253);
			
		
	}
	.menu >ul >li ul li:hover {
		/*1 rakamını çizelim üzerin gelince*/
	background-color: black;
   
    
    }
	.menu >ul >li ul li{
		
		padding: 7px 12px;
		color: black;
	    font-size: 14px;
	}





body{

   
	background-image: url(Resimler/Ansayfa.jpg);
    background-repeat: no-repeat;
    background-position-x: center;
    background-size:100%;

}









</style>
   
</head>
<body  >
      
 
        <div class="menu">
                <ul>
                    <li>
                        
                        <a href="#">RAKAMLAR</a>
                        <ul>
                              
                                 <li><a href="#" > 1 Sayısını Öğrenelim </a></li>
                                
                                
                                   <li> <a href="#"> 2 Sayısını Öğrenelim </a></li>
                                   
                                
                                
                                  <li>  <a href="#"> 3 Sayısını Öğrenelim </a></li>
                                 
                                
                                
                                  <li>  <a href="#"> 4 Sayısını Öğrenelim </a></li>
                                   
                                
                               
                                   <li>  <a href="#"> 5 Sayısını Öğrenelim </a>  </li>
                                  
                               
                                
                                    <li><a href="#"> 6 Sayısını Öğrenelim </a>
                                
                                  <li>  <a href="#"> 7 Sayısını Öğrenelim </a> </li>
                                   
                                
                                
                                  <li>  <a href="#"> 8 Sayısını Öğrenelim </a></li>
                                    
                                
                                
                                 <li>   <a href="#"> 9 Sayısını Öğrenelim </a> </li>
                                   
                                
                                
                                   <li> <a href="#"> 0 Sayısını Öğrenelim </a> </li>
                                   
                                
                            </ul>

                    </li>
                    <li><a href="#">RAKAMI BULALIM</a></li>
                    <li><a href="#">RİTMİK SAYMA</a>
                    
                        <ul>
                                <li><a href="#">20'ye Kadar Olan Sayıları Sayalım</a></li>
                                <li><a href="#">10'ar 10'ar Ritmik sayma</a></li>
                                <li><a href="#">2'şer 2'şer Ritmik Sayma</a></li>
                                <li><a href="#">5'er 5'er Ritmik sayma</a></li>
                                <li><a href="#">Geriye Doğru Sayma</a></li>
                            
                            
                            </ul>
                    
                    </li>
                    <li><a href="#">MATEMATİKSEL İŞLEMLER</a>
                    
                        <ul>
                                <li><a href="#">Toplama</a></li>
                                <li><a href="#">Çıkarma</a></li>
                                <li><a href="#">Çarpma</a></li>
                                <li><a href="#">Bölme</a></li>
                            </ul>
                    
                    
                    </li>
                    <li><a href="test_cözelim.php">TEST ÇÖZELİM</a></li>
                    <li>
                            <a href="#">ÇIKIŞ</a>
                        </li>
                </ul>
            </div>
</body>
</html>