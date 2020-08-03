<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hola! Soy Alberto Bueno</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- Bootstrap core CSS -->
        <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
        <link href="blog.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <link media = " screen and (min-width : 768px) and (max-width: 1024px)" rel="stylesheet" href="css/tablet.css">
        <link media = " screen and (min-width : 1025px)" rel="stylesheet" href="css/desktop.css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

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
    <body data-gr-c-s-loaded="true">

    <header class="main-header">
        <div class="container row">
            <div class="site-logo">
                <h1 class="section-logo">AB</h1>
                
            </div>
    
            <nav class="main-nav">
                <ul class="main-nav__list">
                    <li class="main-nav__item"><a class="main-nav__link" href="#">Home</a></li>
                    <li class="main-nav__item"><a class="main-nav__link"  href="#">Sobre mi</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <section class="showcase">
            <div class="container">
                <div class="showcase__intro">
                </div>
            </div>
    </section>
<div class="container">
  <header class="blog-header py-3">
     <div class="row flex-nowrap justify-content-between align-items-center">
      <!-- <div class="col-4 pt-1">
        <a class="text-muted" href="#">Subscribe</a>
      </div>
      <div class="col-4 text-center">
        <a class="blog-header-logo text-dark" href="#">Large</a>
      </div> -->
      <div class="col-4 d-flex justify-content-end align-items-center">
        <!-- <a class="text-muted" href="#">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3"><circle cx="10.5" cy="10.5" r="7.5"></circle><line x1="21" y1="21" x2="15.8" y2="15.8"></line></svg>
        </a>
        <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a> -->
      </div>
    </div>
  </header>

<div class="container">
  <div class="row">
    <div class="col-md-12 blog-main">
      <h3 class="pb-3 mb-4 font border-bottom border-info">
        Game
      </h3>
    </div>

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

<div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
    <div class="container">  
        <form action="suscripcion/" class="">
            <h3 class="form-h3">¿CREAMOS ALGO JUNTOS?</h3>
            <input type="text" class="form-email" placeholder="Dejame tu email" id="email">
            <input type="submit" class="form-button" value="Enviar">          
        </form>
        <div class="social">
            <a href="http://www.twitter.com" class="social-link twitter">Twitter</a>
            <a href="http://www.facebook.com" class="social-link facebook">Facebook</a>
            <a href="http://www.instagram.com" class="social-link instagram">Instagram</a>
            <a href="http://www.github.com" class="social-link github"></a>
        </div>
    </div>    
</div>

<footer class="blog-footer">
  <p>Blog template built for by <a href="https://twitter.com/babuenop">@mdo</a>.</p>
  <p>
    <a href="#">Back to top</a>
  </p>
</footer>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="../../assets/js/vendor/popper.min.js"></script>
<script src="../../dist/js/bootstrap.min.js"></script>
<script src="../../assets/js/vendor/holder.min.js"></script>
<script>
  Holder.addTheme('thumb', {
    bg: '#55595c',
    fg: '#eceeef',
    text: 'Thumbnail'
  });
</script>


<svg xmlns="http://www.w3.org/2000/svg" width="200" height="250" viewBox="0 0 200 250" preserveAspectRatio="none" style="display: none; visibility: hidden; position: absolute; top: -100%; left: -100%;"><defs><style type="text/css"></style></defs><text x="0" y="13" style="font-weight:bold;font-size:13pt;font-family:Arial, Helvetica, Open Sans, sans-serif">Thumbnail</text></svg></body>
</html>
