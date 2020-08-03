<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Hola! Soy Alberto Bueno</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- Bootstrap core CSS -->
        <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <link media = " screen and (min-width : 768px) and (max-width: 1024px)" rel="stylesheet" href="css/tablet.css">
        <link media = " screen and (min-width : 1025px)" rel="stylesheet" href="css/desktop.css">
  <style>
       .flex-container {
  padding: 10;
  margin: 10;
  list-style: none;

  -ms-box-orient: horizontal;
  display: -webkit-box;
  display: -moz-box;
  display: -ms-flexbox;
  display: -moz-flex;
  display: -webkit-flex;
  display: flex;
  
}

            .wrap    { 
      -webkit-flex-wrap: wrap;
      flex-wrap: wrap;
      }  
      .wrap li {
        background: rgba(128, 128, 128, 0.678);
      }

      .wrap-reverse         { 
        -webkit-flex-wrap: wrap-reverse;
        flex-wrap: wrap-reverse;
      }  
      .wrap-reverse li {
        background: deepskyblue;
      }

      .flex-item {
        background: tomato;
        padding: 5px;
        width: 100px;
        height: 100px;
        margin: 10px;
        
        line-height: 100px;
        color: white;
        font-weight: bold;
        font-size: 3em;
        text-align: center;
      }
      /* The flip card container - set the width and height to whatever you want. We have added the border property to demonstrate that the flip itself goes out of the box on hover (remove perspective if you don't want the 3D effect */
      .flip-card {
          background-color: transparent;
          width: 150px;
          height: 150px;
          border: 5px solid #f1f1f1;
          perspective: 1000px; /* Remove this if you don't want the 3D effect */
        }
        
        /* This container is needed to position the front and back side */
        .flip-card-inner {
          position: relative;
          width: 100%;
          height: 100%;
          text-align: center;
          transition: transform 0.8s;
          transform-style: preserve-3d;
        }
        
        /* Do an horizontal flip when you move the mouse over the flip box container */
        .flip-card:hover .flip-card-inner {
          transform: rotateY(180deg);
        }
        
        /* Position the front and back side */
        .flip-card-front, .flip-card-back {
          position: absolute;
          width: 100%;
          height: 100%;
          -webkit-backface-visibility: hidden; /* Safari */
          backface-visibility: hidden;
        }
        
        /* Style the front side (fallback if image is missing) */
        .flip-card-front {
          background-color: gold;
          color: black;
        }
        
        /* Style the back side */
        .flip-card-back {
          background-color: white;
          color: white;
          transform: rotateY(180deg);
          margin-bottom: 10px;
        }
  </style>
    </head>
    <body>

    <header class="main-header">
        <div class="container row">
            <div class="site-logo">
                <h1 class="section-logo">AB</h1>
                
            </div>
    
            <nav class="main-nav">
                <ul class="main-nav__list">
                    <li class="main-nav__item"><a class="main-nav__link" href="{{ url('/') }}">Home</a></li>
                    <li class="main-nav__item"><a class="main-nav__link"  href="#">Sobre mi</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
      <div class="container">
        <ul class="flex-container wrap">
      <li class="flip-item">
        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              
            </div>
            <div class="flip-card-back">
              <img src="http://localhost/platzi/JS/Juego/img/Tijera.jpg" alt="Avatar" style="width:150px;height:150px;">
            </div>
          </div>
        </div>
      </li>
      <li class="flip-item">
        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <!-- <img src="img_avatar.png" alt="Avatar" style="width:150px;height:150px;"> -->
            </div>
            <div class="flip-card-back">
              <img src="http://localhost/platzi/JS/Juego/img/Papel.jpg" alt="Avatar" style="width:150px;height:150px;">
            </div>
          </div>
        </div>
      </li>
      <li class="flip-item">
        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <!-- <img src="img_avatar.png" alt="Avatar" style="width:150px;height:150px;"> -->
            </div>
            <div class="flip-card-back">
              <img src="http://localhost/platzi/JS/Juego/img/Piedra.jpg" alt="Avatar" style="width:150px;height:150px;">

            </div>
          </div>
        </div>
      </li>
      <li class="flip-item">
        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <!-- <img src="img_avatar.png" alt="Avatar" style="width:150px;height:150px;"> -->
            </div>
            <div class="flip-card-back">
              <img src="http://localhost/platzi/JS/Juego/img/Piedra.jpg" alt="Avatar" style="width:150px;height:150px;">

            </div>
          </div>
        </div>
      </li>
      <li class="flip-item">
        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <!-- <img src="img_avatar.png" alt="Avatar" style="width:150px;height:150px;"> -->
            </div>
            <div class="flip-card-back">
              <img src="http://localhost/platzi/JS/Juego/img/Piedra.jpg" alt="Avatar" style="width:150px;height:150px;">

            </div>
          </div>
        </div>
      </li>      
      <li class="flip-item">
        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <!-- <img src="img_avatar.png" alt="Avatar" style="width:150px;height:150px;"> -->
            </div>
            <div class="flip-card-back">
              <img src="http://localhost/platzi/JS/Juego/img/Piedra.jpg" alt="Avatar" style="width:150px;height:150px;">

            </div>
          </div>
        </div>
      </li>
      <li class="flip-item">
        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <!-- <img src="img_avatar.png" alt="Avatar" style="width:150px;height:150px;"> -->
            </div>
            <div class="flip-card-back">
              <img src="http://localhost/platzi/JS/Juego/img/Piedra.jpg" alt="Avatar" style="width:150px;height:150px;">

            </div>
          </div>
        </div>
      </li>
      <li class="flip-item">
        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <!-- <img src="img_avatar.png" alt="Avatar" style="width:150px;height:150px;"> -->
            </div>
            <div class="flip-card-back">
              <img src="http://localhost/platzi/JS/Juego/img/Piedra.jpg" alt="Avatar" style="width:150px;height:150px;">

            </div>
          </div>
        </div>
      </li>
    </ul>
</div>

</main>


<footer class="main-footer">
        <div class="container">

            <div class="main-footer__lrow">
                <div class="main-footer__row">

                    <div class="main-footer__col main-footer__socials">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="www.twitter.com/babuenop"><i class="fab fa-twitter"></i></a>
                        <a href="www.twitter.com/babuenop"><i class="fab fa-instagram"></i></a>
                       
                    </div>
                </div>
            </div>
           
        </div>

    </footer>

</body>
</html>
