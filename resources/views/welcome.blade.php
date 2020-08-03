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

    </head>
    <body>

    <header class="main-header">
        <div class="container row">
            <div class="site-logo">
                <h1 class="section-logo">AB</h1>
                
            </div>
    
            <nav class="main-nav">
                <ul class="main-nav__list">
                    <li class="main-nav__item"><a class="main-nav__link" href="#">Home</a></li>
                    <li class="main-nav__item"><a class="main-nav__link"  href="">Sobre mi</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
    <section class="showcase">
            <div class="container">
                <div class="showcase__intro">
                    <img class="profile-init-img" src="images/profile.png" alt="user head shot">
                    <h1 class="section-title">Braulio Alberto Bueno Pabón</h1>
                    <p class="section-subtitle">"Se puede ir mas alla de lo que quieres ser, lograr tus metas y nunca parar de aprender"</p>
                    
                </div>
            </div>
    </section>

    <section class="features">
            <div class="container">
                <div class="feature__row">
                    <div class="store features__item">
                        <img class="features__img" src="images/cards.png" alt="#">
                        <h2><a class="text-white" href="{{ url('/game') }}">Flash Cards to Learn Verbs</a></h2>
                        <p class="features__details">  Whether you're sharing holidays photos or work documents, Fylo has you covered allowing for all 
                        file types to be securely stored and shared.</p>
                    </div>
                </div>
            </div>
        </section>

<section class="testimonial">
    
    <div class="container">
      <h3 class="pb-3 mb-4 font border-bottom border-gray">
        Eventos
      </h3>
    </div>      
    
    <div class="container testimonial__box--row">
      
        <div class="testimonial__box">
        <h3 class="mb-0">
            <a class="text-white" href="#">DragonJAR Security Conference</a>
          </h3>
            <p class="testimonial__details">Uno de los mejores eventos de seguridad informática en Latinoamérica, donde podrás relacionarte con grandes talentos del hacking y compartir conocimiento</p>
            <div class="testimonial__profile">
                <img class="" src="images/img01.png" alt="user head shot">
            </div>
        </div>

        <div class="testimonial__box">
        <h3 class="mb-0">
            <a class="text-white" href="#">Startup Weekend 2017</a>
          </h3>
            <p class="testimonial__details">Es un evento de fin de semana de 54 horas, durante el cual desarrolladores, diseñadores y mas forman equipos para desarrollar un prototipo funcional.</p>
            <div class="testimonial__profile">
                <img class="" src="images/img02.png" alt="user head shot">
            </div>
        </div>
    </div>
</section>

<div class="email-signup">
            <div class="container">
                <div class="email-signup__box">
                    <h2 class="section-title">Creemos algo juntos</h2>
                    <p></p>
                    <form class="email-signup__form" action="#">
                        <input type="email" placeholder = "email@example.com">
                        <button class="btn btn--form" type="submit">Enviar</button>
                    </form>
                </div>
            </div>
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
