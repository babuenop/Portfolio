<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&family=Raleway:ital,wght@0,700;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link media = " screen and (min-width : 768px) and (max-width: 1024px)" rel="stylesheet" href="css/tablet.css">
    <link media = " screen and (min-width : 1025px)" rel="stylesheet" href="css/desktop.css">
    <title>Frontend Mentor | Fylo Dark Theme</title>

</head>
<body>
    <header class="main-header">
        <div class="container row">
            <div class="site-logo">
                <img class="logo-img" src="images/logo.svg" alt="site-logo">
            </div>
    
            <nav class="main-nav">
                <ul class="main-nav__list">
                    <li class="main-nav__item"><a class="main-nav__link" href="#">Features</a></li>
                    <li class="main-nav__item"><a class="main-nav__link"  href="#">Team</a></li>
                    <li class="main-nav__item"><a class="main-nav__link"  href="#">Sign In</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <section class="showcase">
            <div class="container">
                <div class="showcase__img">
                    <img src="images/illustration-intro.png" alt="security illustration">
                </div>
                <div class="showcase__intro">
                    <h1 class="section-title"> All your files in one secure location, accessible anywhere.</h1>
                    <p class="section-subtitle"> Fylo stores all your most important files in one secure location. Access them wherever you need, share and collaborate with friends family, and co-workers.</p>
                    <a href="#" class="btn">Get Started</a>
                </div>
            </div>
        </section>

        <section class="features">
            <div class="container">
                <div class="feature__row">
                    <div class="access features__item">
                        <img class="features__img" src="images/icon-access-anywhere.svg" alt="#">
                        <h2>Access your files, anywhere</h2>
                        <p class="features__details">The ability to use a smartphone, tablet, or computer to access your account means your 
                        files follow you everywhere.</p>
                    </div>
                    
                    <div class="security features__item">
                        <img class="features__img" src="images/icon-security.svg" alt="#">
                        <h2>Security you can trust</h2>
                        <p class="features__details"> 2-factor authentication and user-controlled encryption are just a couple of the security 
                        features we allow to help secure your files.</p>
                    </div>
                </div>

                <div class="feature__row">
                    <div class="collab features__item">
                        <img class="features__img" src="images/icon-collaboration.svg" alt="#">
                        <h2>Real-time collaboration</h2>
                        <p class="features__details">Securely share files and folders with friends, family and colleagues for live collaboration. 
                        No email attachments required.</p>
                    </div>

                    <div class="store features__item">
                        <img class="features__img" src="images/icon-any-file.svg" alt="#">
                        <h2>Store any type of file</h2>
                        <p class="features__details">  Whether you're sharing holidays photos or work documents, Fylo has you covered allowing for all 
                        file types to be securely stored and shared.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="how-it-works">
            <div class="container how-it-works__row">
                <div class="how-it-works__img">
                    <img src="images/illustration-stay-productive.png" alt="how it works">
                </div>
                <div class="how-it-works__details">
                    <h2 class="section-subtitle">Stay productive, wherever you are</h2>
                    <p> Never let location be an issue when accessing your files. Fylo has you covered for all of your file 
                    storage needs.</p>
                    <p> Securely share files and folders with friends, family and colleagues for live collaboration. No email 
                    attachments required.</p>
                    <div class= "how-it-works__link">
                    <a href="#">See how Fylo works</a>
                    <img src="images/icon-arrow.svg" alt="">
                    </div>
                    
                </div>
            </div>
        </section>

        <section class="testimonial">
            <div class="container testimonial__box--row">
               <div class="testimonial__box">
                   <p class="testimonial__details"> Fylo has improved our team productivity by an order of magnitude. Since making the switch our team has 
                    become a well-oiled collaboration machine.</p>
                    <div class="testimonial__profile">
                        <img class="testimonial__profile--img" src="images/profile-1.jpg" alt="user head shot">
                        <div>
                            <h4 class="testimonial__name">Satish Patel</h4>
                            <p>Founder & CEO, Huddle</p>
                        </div>
                    </div>
               </div>

               <div class="testimonial__box">
                   <p class="testimonial__details"> Fylo has improved our team productivity by an order of magnitude. Since making the switch our team has 
                    become a well-oiled collaboration machine.</p>
                    <div class="testimonial__profile">
                        <img class="testimonial__profile--img" src="images/profile-2.jpg" alt="user head shot">
                        <div>
                            <h4 class="testimonial__name">Bruce McKenzie</h4>
                            <p>Founder & CEO, Huddle</p>
                        </div>
                    </div>
               </div>

               <div class="testimonial__box">
                   <p class="testimonial__details"> Fylo has improved our team productivity by an order of magnitude. Since making the switch our team has 
                    become a well-oiled collaboration machine.</p>
                    <div class="testimonial__profile">
                        <img class="testimonial__profile--img" src="images/profile-3.jpg" alt="user head shot">
                        <div>
                            <h4 class="testimonial__name">Iva Boyd</h4>
                            <p>Founder & CEO, Huddle</p>
                        </div>
                    </div>
               </div>

            </div>
        </section>

        <div class="email-signup">
            <div class="container">
                <div class="email-signup__box">
                    <h2 class="section-subtitle">Get early access today</h2>
                    <p>It only takes a minute to sign up and our free starter tier is extremely generous. If you have any 
                    questions, our support team would be happy to help you.</p>
                    <form class="email-signup__form" action="#">
                        <input type="email" placeholder = "emaail@example.com">
                        <button class="btn btn--form" type="submit">Get Started For Free</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
    
    <footer class="main-footer">
        <div class="container">

            <div class="main-footer__lrow">
                <img src="images/logo.svg" alt="#">

                <div class="main-footer__row">

                    <div class="main-footer__col main-footer__col-1">
                           <p class="main-footer__location" data-type="location">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et 
                            dolore magna aliqua</p> 
                    </div>
                   
    
                    <ul class="main-footer__col">
                        <li class="main-footer__links" data-type="phone" ><a href="#">+1-543-123-4567</a></li>
                        <li class="main-footer__links" data-type="mail" ><a href="#">example@fylo.com</a></li>
                    </ul>
    
                    <ul class="main-footer__col">
                        <li class="main-footer__list"><a href="#">About Us</a></li>
                        <li class="main-footer__list"><a href="#">Jobs</a></li>
                        <li class="main-footer__list"><a href="#">Press</a></li>
                        <li class="main-footer__list"><a href="#">Blog</a></li>
                    </ul>
    
                    <ul class="main-footer__col">
                        <li class="main-footer__list"><a href="#">Contact Us</a></li>
                        <li class="main-footer__list"><a href="#">Terms</a></li>
                        <li class="main-footer__list"><a href="#">Privacy</a></li>
                    </ul>
    
                    <div class="main-footer__col main-footer__socials">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                    
                </div>
            </div>

            <div class="main-footer__rowlast">
                <p class="attribution">
                    Challenge by <a href="https://www.frontendmentor.io?ref=challenge" target="_blank">Frontend Mentor</a>. 
                    Coded by <a href="#">Odiri Teddie</a>.
                  </p>
            </div>
            
        </div>
    </footer>
</body>
</html>

