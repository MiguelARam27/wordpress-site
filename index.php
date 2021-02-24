<?php get_header(); ?>
<div class="projects--container" id="#home">
    <h1 class="projects--container__title u-margin-top-small u-margin-bottom-small">portfolio</h1>
    <div class="projects--container__projects-grid ">

        <?php
                    $mypod = pods('project');
                    $mypod->find('name ASC');
                ?>
        <?php while ( $mypod->fetch()):?>
        <?php 
                        $name = $mypod->field('name'); 
                        $id = $mypod->field('project-id');     
                        $link_code = $mypod->field('link-code');     
                        $link_demo = $mypod->field('link-demo');
                        $gif = $mypod->field('card-cover');       
                    ?>
        <div class="project-card">
            <div alt="" class="project-card__img">
                <img alt="" src="<?php echo $gif?>">
                <div class="project-card__img__title">
                    <h1><?php echo $name ?></h1>
                </div>
            </div>
            <div class="project-card__info">
                <div class="project-card__info__color1"></div>
                <div class="project-card__info__color2"></div>
                <a class="project-card__info__button" href="#<?php echo $id?>">Learn more</a>
                <a class="project-card__info__button" href="<?php echo $link_code?>">Code</a>
                <a class="project-card__info__button" href="<?php echo $link_demo?>">Demo</a>
            </div>
        </div>
        <?php endwhile;?>
  
    </div>
</div>
<div class="projects">
        <h1 class="projects__title u-margin-top-small u-margin-bottom-small">portfolio</h1>
        <div class="projects__grid ">

        <?php
            $mypod = pods('project');
            $mypod->find('name ASC');
        ?>
        <?php while ( $mypod->fetch()):?>
        <?php 
            $name = $mypod->field('name'); 
            $id = $mypod->field('project-id');     
            $link_code = $mypod->field('link-code');     
            $link_demo = $mypod->field('link-demo');
            $gif = $mypod->field('card-cover'); 
            $content = $mypod->field('content');   
            $background_color = $mypod->field('card_background'); 
        ?>
            <div class="projects__card">
                <div class="projects__card__info">
                    <h3 class="projects__card__info__title">
                        Tech Info
                    </h3>
                    <?php echo $content?>
                    <?php
                        $max_slides = 8; // this should be the maximum number of skills

                        for ($i=1; $i<=$max_slides; $i++) { 
                            
                            $key = 'skill' . $i; 
                            $key2= 'info' . $i;
                            $skill = $mypod->field($key);
                            $info = $mypod->field($key2);
                            //check for skill
                            if($skill and $info) { ?>
                                <div class="projects__card__info__tech">
                                    <div class="projects__card__info__tech__icon">
                                        <i class="fab fa-<?php echo $skill?>"></i>
                                    </div>

                                    <div class="projects__card__info__tech__info">
                                        <h3 class="projects__card__info__tech__info__title"><?php echo $skill?></h3>
                                        <hr class="projects__card__info__tech__info__bar">
                                        <p class="projects__card__info__tech__info__paragraph">
                                            <?php echo $info?>
                                    </div>
                                </div>
                        
                            <?php } // end if statement
                        } 
                    ?>
<!--                     
                    <div class="projects__card__info__tech">
                        <div class="projects__card__info__tech__icon">
                            <i class="fab fa-react "></i>
                        </div>

                        <div class="projects__card__info__tech__info">
                            <h3 class="projects__card__info__tech__info__title">React</h3>
                            <hr class="projects__card__info__tech__info__bar <?php echo $background_color ?>">
                            <p class="projects__card__info__tech__info__paragraph">
                                React is the most popular UI library that allows dev. Build great UI and fast app…
                        </div>
                    </div> -->
                </div>
                <div class="projects__card__summary <?php echo $background_color?>">
                    <div class="projects__card__summary__img">
                        <img src="<?php echo $gif?>"> alt="image">
                    </div>
                    <div class="projects__card__summary__info">
                        <h2 class="projects__card__summary__info__title"><?php echo $name ?></h2>
                        <p class="projects__card__summary__info__paragraph">
                            Doctorgrillz is a USA company, which make Grillz for celebrities and others, they make
                            grills that fit in your mouth, you can build your own grill directly on the site, you can
                            choose your metal, your gems, your style, t...
                        </p>
                        <p class="projects__card__summary__info__buttons">
                            <a class="project-card__info__button" href="#<?php echo $id?>">Learn more</a>
                            <a class="project-card__info__button" href="<?php echo $link_code?>">Code</a>
                            <a class="project-card__info__button" href="<?php echo $link_demo?>">Demo</a>
                        </p>
                    </div>
                </div>
            </div>
            <?php endwhile;?>
        </div>
    </div>
<?php
    $mypod = pods('project');
    $mypod->find('name ASC');
?>
<?php while ( $mypod->fetch()):?>
<?php 
    $name = $mypod->field('name'); 
    $id = $mypod->field('project-id');     
    $link_code = $mypod->field('link-code');     
    $link_demo = $mypod->field('link-demo');
    $summary = $mypod->field('summary');
    $background = $mypod->field('background');
    $background2 =$mypod->field('background2');
    $content = $mypod->field('content');
    $background_color = $mypod->field('card_background'); 
?>
<div class="popup" id ="<?php echo $id?>">
    <div class="popup__content <?php echo $background_color?>">
        <a class="popup__close" href="#home">&times;</a>
        <div class="popup__content__title ">
            <h1><?php echo $name?></h1>
        </div>
        <div class="popup__content__gallery-container">
            <div class="gallery js-flickity">
                <?php echo $content?>
                 <?php
                    $max_slides = 8; // this should be the maximum number of skills
                    for ($i=1; $i<=$max_slides; $i++) { 
                        
                        $key = 'gallery' . $i; 
                        $gallery = $mypod->field($key);
                        //check for skill
                        if($gallery ) { ?>
                            <div class="gallery-cell">
                                <img alt="" src="<?php echo $gallery?>">
                            </div>
                        <?php } // end if statement
                    } 
                ?>
            </div>
        </div>
        <div class="popup__content__info">
            <div class="popup__content__info__column">
                <h2>summary</h2>
                <p><?php echo $summary?></p>
            </div>
            <div class="popup__content__info__column">
                <h2>background</h2>
              <p><?php echo $background?></p>
              <p><?php echo $background2?></p>
            </div>
        </div>
        <div class="popup__content__skills">
            <h1>Skills used</h1>
            <div class="popup__content__skills__skills-container">
                <?php echo $content?>
                 <?php
                    $max_slides = 8; // this should be the maximum number of skills

                    for ($i=1; $i<=$max_slides; $i++) { 
                        
                        $key = 'skill' . $i; 
                        $skill = $mypod->field($key);
                        //check for skill
                        if($skill ) { ?>
                    
                           <span class="popup__content__skills__skills-container__skill"><?php echo $skill?></span>
                        <?php } // end if statement
                    } 
                ?>
            </div>
        </div>
        <div class="popup__content__links">
            <a class="popup__content__links__button" href="<?php echo $link_code?>">Code</a>
            <a class="popup__content__links__button" href="<?php echo $link_demo?>">Demo</a>
        </div>
    </div>
</div>
<?php endwhile;?>



<?php get_footer(); ?> 