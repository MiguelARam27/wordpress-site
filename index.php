<?php get_header(); ?>
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
                <div class="gallery-cell">
                    <img alt="" src="https://images.unsplash.com/photo-1593284094481-503ee97959be?ixlib=rb-1.2.1&auto=format&fit=crop&w=2690&q=80">
                </div>
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
<div class="popup" id="popup">
    <div class="popup__content">
        <a class="popup__close" href="#home">&times;</a>
        <div class="popup__content__title ">
            <h1>Project1 lol</h1>
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


<?php get_footer(); ?> 