<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
        <title>Document</title>
        <link crossorigin="anonymous" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" rel="stylesheet"/>
        <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory');?>/css/main.css"/>
        <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory');?>/css/flickity.min.css"/>
    </head>
    <body>
        <header class="header" id="header">
            <div class="header__logo" id="header__logo">
                <a href="#">Miguel Ramirez</a>
            </div>
            <ul class="header__menu">
                <li class="M-link" href="#">
                    <a href="#">Contact</a>
                </li>
                <li class="M-link" href="#">
                    <a href="#">Resume</a>
                </li>
                <li class="M-link" href="#">
                    <a href="#">about</a>
                </li>

            </ul>
        </header>
        <div class="projects--container" id="#home">
            <h1 class="projects--container__title u-margin-top-small u-margin-bottom-small">portfolio</h1>
            <div class="projects--container__projects-grid ">
                <div class="project-card">
                    <div alt="" class="project-card__img" src="">
                        <img alt="" src="">
                        <div class="project-card__img__title">
                            <h1>Project 1</h1>
                        </div>
                    </div>
                    <div class="project-card__info">
                        <div class="project-card__info__color1"></div>
                        <div class="project-card__info__color2"></div>
                        <a class="project-card__info__button" href="#popup">Learn more</a>
                        <a class="project-card__info__button" href="">Code</a>
                        <a class="project-card__info__button" href="">Demo</a>
                    </div>
                </div>
                <div class="project-card"></div>
                <div class="project-card"></div>
                <div class="project-card"></div>
                <div class="project-card"></div>
                <div class="project-card"></div>
            </div>
        </div>
        <div class="popup" id="popup">
            <div class="popup__content">
                <a class="popup__close" href="#home">&times;</a>
                <div class="popup__content__title ">
                    <h1>Project1</h1>
                </div>
                <div class="popup__content__gallery-container">
                    <div class="gallery js-flickity">
                        <div class="gallery-cell">
                            <img alt="" src="https://images.unsplash.com/photo-1593284094481-503ee97959be?ixlib=rb-1.2.1&auto=format&fit=crop&w=2690&q=80">
                        </div>
                        <div class="gallery-cell">
                            <img alt="" src="assets/example1.png">
                        </div>
                        <div class="gallery-cell"></div>
                        <div class="gallery-cell"></div>
                        <div class="gallery-cell"></div>
                    </div>
                </div>
                <div class="popup__content__info">
                    <div class="popup__content__info__column">
                        <h2>summary</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae veniam, fugiat, tempore consequuntur rerum corporis recusandae non debitis quasi molestias ipsa ut nostrum repellat ex hic odit cum? Laboriosam, neque.</p>
                    </div>
                    <div class="popup__content__info__column">
                        <h2>background</h2>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae veritatis quas fugiat repellat minus magnam qui blanditiis laborum perspiciatis. Hic dolorum saepe quaerat doloribus similique officiis recusandae sequi officia perspiciatis.</p>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae veritatis quas fugiat repellat minus magnam qui blanditiis laborum perspiciatis. Hic dolorum saepe quaerat doloribus similique officiis recusandae sequi officia perspiciatis.</p>
                    </div>
                </div>
                <div class="popup__content__skills">
                    <h1>Skills used</h1>
                    <div class="popup__content__skills__skills-container">
                        <span class="popup__content__skills__skills-container__skill">Html</span>
                        <span class="popup__content__skills__skills-container__skill">Java</span>
                        <span class="popup__content__skills__skills-container__skill">Python</span>
                        <span class="popup__content__skills__skills-container__skill">CSS</span>
                        <span class="popup__content__skills__skills-container__skill">Math</span>
                        <span class="popup__content__skills__skills-container__skill">noobs</span>
                    </div>
                </div>
                <div class="popup__content__links">
                    <a class="popup__content__links__button" href="">Code</a>
                    <a class="popup__content__links__button" href=" ">Demo</a>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="social-title u-margin-bottom-medium">
                <h1>Contact Me</h1>
            </div>
            <ul class="social-icons">
                <li>
                    <a href="#">
                        <i aria-hidden="true" class="fa fa-facebook"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i aria-hidden="true" class="fa fa-google"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i aria-hidden="true" class="fa fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i aria-hidden="true" class="fa fa-youtube"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i aria-hidden="true" class="fa fa-pinterest"></i>
                    </a>
                </li>
            </ul>
        </footer>
    </body>
    <script src="<?php echo get_bloginfo('template_directory');?>/javascript/flickity.js"></script>
     
</html>
