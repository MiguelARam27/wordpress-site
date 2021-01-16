
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
        <title>Document</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory');?>/css/main.css"/>
        <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory');?>/css/flickity.min.css"/>
        <?php wp_head();?>
    </head>
    <body <?php body_class();?>>
<header class="header" id="header">
    <div class="header__logo" id="header__logo">
        <a href="#">Miguel Ramirez</a>
    </div>
    <a href="#" class="header__togglebutton">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
    </a>

    <?php
        $mypod = pods('link');
        $mypod->find('name ASC');
    ?>
    <?php while ( $mypod->fetch()):?>
    <?php 
        $resume = $mypod->field('resume'); 
        $contact = $mypod->field('contact');     
    ?>
    
               <ul class="header__menu">
               <li class="M-link" href="#">
                   <a href="<?php echo $contact?>">Contact</a>
               </li>
               <li class="M-link" href="#">
                   <a href="<?php echo $resume?>">Resume</a>
               </li>
               <li class="M-link" href="#">
                   <a href="#">about</a>
               </li>
           </ul>
            
    <?php endwhile;?>
</header>