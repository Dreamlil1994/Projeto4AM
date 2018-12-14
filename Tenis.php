<html>

<head>
    <style tyle="text/css">
      * {box-sizing:border-box}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Hide the images by default */
.mySlides {
    display: none;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}
      /*===========================================*/
    .tamanhoslide  {
    max-width:1100px;
    max-height:150px;
    width: auto;
    height: auto;
}
   /*============================================*/
      #menu_0 tr td{
      background-color:black;
      color:white;
      height:40px;
      width:70px;
      text-align:center;
      }
      
      #menu_0 tr td a{
      color:white;
      text-decoration:none;
      }
      
      #menu_0 tr td:hover {
      background-color:blue;
      
      border-radius:8px;
      height:40px;
      width:70px;
      text-align:center;
      }
      
      #menu_0 tr td a:hover {
      color:black ;
      text-decoration:none;
      }
      /*Cores das opçao*/
      <!--
.a1{
background: #000000;
color: #FFFFFF;
}
.a2{
background: red;
color: red;
}
.a3{
background: blue;
color: blue
}

-->
/*======================*/
.login input[type="submit"] {
  margin: 0;
  display: block;
  padding: 13px 0;
  width: 80px;
  font-size: 13px;
  font-weight: bold;
  border: 0;
  text-shadow: 0px 1px 0px rbga(255, 255, 255, 1);
  background-color: #f6ba35;
  background-image: -webkit-linear-gradient(90deg, #eca418, #ffcd4e);
  border-radius: 5px;
  box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
}
/*=======tabelas*/
/*=======tabelas*/
.tabela1{
      position-relative;
     margin-top:-400px;

margin-left:400px;
}
.tabela2{
       position-relative;
     margin-top:-400px;

margin-left:810px;
    
    
}



      
      
       </style>
  <meta charset="UTF-8">
  <title>Tela de Login</title>
   
      
  
</head>

<body>
    <body>
  <table id='menu_0'>
    <tr>
        <td><a href="index.php">Home</a></td>
        <td><a href="Roupa.php ">Roupa</a></td>
        <td><a href="Tenis.php ">Tenis</a></td>
        <td><a href="Skate.php ">Skate</a></td>
        <td><a href="Acessorios.php ">Acessorios</a></td>
    </tr>
  </table>
  <!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img class="tamanhoslide"  src=" https://scontent.fbsb8-1.fna.fbcdn.net/v/t1.0-9/40683734_245883899448935_8191643643073789952_n.jpg?_nc_cat=0&oh=0bd7bd2cab10984bb184c445d22dfd62&oe=5C299066" style="width:100%">
    <div class="text">Caption Text</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img class="tamanhoslide" src=" https://scontent.fbsb8-1.fna.fbcdn.net/v/t1.0-9/37871339_217956998908292_2937357760418807808_n.jpg?_nc_cat=0&oh=759013fc28bda549c59b8ac0bfb75853&oe=5BEDDBFA" style="width:100%">
    <div class="text">Caption Two</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img  class="tamanhoslide"  src= "https://scontent.fbsb8-1.fna.fbcdn.net/v/t1.0-9/30261017_2027449620599717_4416311271847100416_n.jpg?_nc_cat=0&oh=83da422b33a168cf2a89fe45f9267a82&oe=5C2B84C1 " style="width:100%">
    <div class="text">Caption Three</div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>
<hr width="100%" align="left" size="2" color="silver" >
<table border="1" height="70%" width="20%">
    <tr>
        <td> <img src="https://scontent.fbsb8-1.fna.fbcdn.net/v/t1.0-9/28377707_1976103999067613_349641638656984621_n.jpg?_nc_cat=0&oh=832e004daae6e446897689526d147602&oe=5C23F15F"width="100%"
                  height="50%">  <h3>Tenis Hocks R$119,90</h3>
            

Tamanho:<SELECT>
<OPTION>38
<OPTION>39
<OPTION>40
    <OPTION>41
</select>
Cores:<select name="teste" id="tst" onchange="sel();">
<option>...</option>
<option value="1" id="a" class="a1"></option>
<option value="2" id="b" class="a2"></option>
<option value="3" id="c" class="a3"></option>
 

</select>
<div class="login">
  
   
  
  <input type="submit" value="Comprar" onclick="comprar()"/>
  <div class="utilities">
   
  </div>
</div>
 </td>
    </tr>
</table>
<table class="tabela1"  border="1" height="70%" width="20%">
    <tr>
        <td> <img src="https://scontent.fbsb8-1.fna.fbcdn.net/v/t1.0-9/28378151_1976018822409464_145135456932426886_n.jpg?_nc_cat=0&oh=dda6c1549780a5c3d6e8ab4951a8aeb1&oe=5C178A0C"width="100%"
                  height="70%">  <h3>Tenis Freeday R$149,90</h3>
            

Tamanho:<SELECT>
<OPTION>35
<OPTION>38
<OPTION>39
    <OPTION>40
</select>
Cores:<select name="teste" id="tst" onchange="sel();">
<option>...</option>
<option value="1" id="a" class="a1"></option>
<option value="2" id="b" class="a2"></option>
<option value="3" id="c" class="a3"></option>
 

</select>
<div class="login">
  
   
  
  <input type="submit" value="Comprar" onclick="comprar()" />
  <div class="utilities">
   
  </div>
</div>


        
        </td>
    
    </tr>
</table>
<table class="tabela2" border="1" height="70%" width="20%">
    <tr>
        <td> <img src="https://scontent.fbsb8-1.fna.fbcdn.net/v/t1.0-9/23755543_1869156019762412_3094054353760882720_n.jpg?_nc_cat=0&oh=088e4a667e5740abc3a6645370264ba0&oe=5C2299B8"width="100%"
                  height="30%">  <h3>Tênis Lejon R$ 99,90</h3>
            

Tamanho:<SELECT>
<OPTION>34
<OPTION>35
<OPTION>39
    <OPTION>41
</select>
Cores:<select name="teste" id="tst" onchange="sel();">
<option>...</option>
<option value="1" id="a" class="a1"></option>
<option value="2" id="b" class="a2"></option>
<option value="3" id="c" class="a3"></option>
 

</select>
<div class="login">
  
   
  
  <input type="submit" value="Comprar" onclick="comprar()" />
  <div class="utilities">
   
  </div>
</div>
 </td>
    </tr>
</table>
  <script type="text/javascript">   
           function comprar () {
               confirm("Deseja realmente compar?");
              
               window.location.replace("index.php");
           }
           
         function excluir () {
             confirm("Deseja realmente excluir ?");
             alert("Excluido com sucesso");
             window.location.replace("index.php");
         }
    var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1} 
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none"; 
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block"; 
  dots[slideIndex-1].className += " active";
}
           </script>
  
</body>
        
      
        <?php
        // put your code here
        ?>
    </body>
</html>
