<html>

<head>
    <style tyle="text/css">
      body {
 background-image: url(" https://scontent.fbsb8-1.fna.fbcdn.net/v/t1.0-9/1011938_634894849855208_1739685326_n.jpg?_nc_cat=0&oh=4e5fa325ccf3bc8cc822e5269189ac22&oe=5C1A1D15");
}

.login {
  width: 340px;
  background-color: rgba(123, 123, 123, 0.5) ;
   
  border-radius: 5px;
  padding: 20px;
 
  position: absolute;
  left: 50%;
  top: 330px;
  margin-left: -170px;
  box-shadow: 0px 1px 0px rgba(255, 255, 255, 0.2) inset, 0px 0px 2px rgba(0, 0, 0, 0.5);
}
.login h2 {
  color: white;
  font-size: 20px;
  margin: 0 0 15px;
  text-shadow: 0px -1px rgba(0, 0, 0, 0.5);
}
.login fieldset {
  border: 0;
  padding: 0;
  margin-bottom: 10px;
}
.login fieldset input {
  outline: none;
  width: 300px;
  height: 12px;
  display: block;
  background: #138050;
  border: 1px solid #0d6b42;
  margin: 0;
  padding: 13px 15px;
  font-size: 13px;
}

.login fieldset input:nth-child(1) {
  border-radius: 5px 5px 0 0;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1) inset;
}
.login fieldset input:nth-child(2) {
  position: relative;
  top: -1px;
  border-radius: 0 0 5px 5px;
  box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1) inset, 0 1px 0 rgba(255, 255, 255, 0.4);
}
.login fieldset ::-webkit-input-placeholder {
  color: rgba(255, 255, 255, 0.5);
}
.login input[type="submit"] {
  margin: 0;
  display: block;
  padding: 13px 0;
  width: 300px;
  font-size: 13px;
  font-weight: bold;
  border: 0;
  text-shadow: 0px 1px 0px rbga(255, 255, 255, 1);
  background-color: #f6ba35;
  background-image: -webkit-linear-gradient(90deg, #eca418, #ffcd4e);
  border-radius: 5px;
  box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
}
.login .utilities {
  margin-top: 20px;
}
.login .utilities a {
  color: #61e5ab;
  text-decoration: none;
  font-size: 12px;
  text-shadow: -1px -1px 0 rgba(0, 0, 0, 0.4);
}
      
      
      /*======================*/
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
      .mapa{
          margin-top:300px;
          margin-left:300px;
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
     
    <div class="login">
  <h2 align="center">Log In</h2>
  <fieldset>
      <input type="email" style=" background-color: rgba(123, 123, 123, 1.1)" placeholder="E-mail" />
        <input type="password" style=" background-color: rgba(123, 123, 123, 1.1)" placeholder="Senha" />
  </fieldset>
  <input type="submit" value="Entrar" />
  <div class="utilities">
    <a href="cadastro.php">Cadastre-se &rarr;</a>
  </div>
</div>

<iframe  class="mapa"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3842.773076092064!2d-47.654287185775374!3d-15.603768489169944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935a6cd09d85a795%3A0xa9c574c198b0b517!2sArt+House+Rock+Wear!5e0!3m2!1spt-BR!2sbr!4v1543408425267" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
     
      
      
      
      
      
      
  <script type="text/javascript">   
           function salvar () {
               confirm("Deseja realmente salvar?");
               alert("Salvo com sucesso");
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
        
        ?>
    </body>
</html>

