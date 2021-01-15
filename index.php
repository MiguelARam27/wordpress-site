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
        <div class="project-card"></div>
        <div class="project-card"></div>
        <div class="project-card"></div>
        <div class="project-card"></div>
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
?>
<div class="popup" id ="<?php echo $id?>">
    <div class="popup__content">
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