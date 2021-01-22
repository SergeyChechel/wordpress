<?php
/**
 * Template Name: Наша история
 */
?>

<?php
    get_header();
?>

<div class="aboutus" id="aboutus">
    <div class="container">
        <h1 class="title">Наша история</h1>
        <div class="row">
            <div class="col-lg-6">
                <div class="subtitle">
                    <?php the_field('history_title_1');?>
                </div>
                <div class="aboutus__text">
                    <?php the_field('history_descr_1');?>
                </div>
            </div>
            <div class="col-lg-6">
                <?php
                    $image = get_field('history_img_1');
                    if ($image): 
                ?>
                    <img 
                        src="<?= $image['url'] ?>" 
                        class="aboutus__img"
                        alt="<?= $image['alt'] ?>"
                    >
                <?php endif; ?>
                <!-- <img class="aboutus__img" src="<?=bloginfo('template_url');?>/assets/img/about_1.jpg" alt="мир детства"> -->
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <?php
                    $image = get_field('history_img_2');
                    if ($image): 
                ?>
                    <img 
                        src="<?= $image['url'] ?>" 
                        class="aboutus__img"
                        alt="<?= $image['alt'] ?>"
                    >
                <?php endif; ?>
                <!-- <img class="aboutus__img" src="<?=bloginfo('template_url');?>/assets/img/about_2.jpg" alt="мир детства"> -->
            </div>
            <div class="col-lg-6">
                <div class="subtitle">
                    <?php the_field('history_title_2');?>
                </div>
                <div class="aboutus__text">
                    <?php the_field('history_descr_2');?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="subtitle">
                    <?php the_field('history_title_3');?>
                </div>
                <div class="aboutus__text">
                    <?php the_field('history_descr_3');?>
                </div>
            </div>
            <div class="col-lg-6">
                <?php
                    $image = get_field('history_img_3');
                    if ($image): 
                ?>
                    <img 
                        src="<?= $image['url'] ?>" 
                        class="aboutus__img"
                        alt="<?= $image['alt'] ?>"
                    >
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>


<?php
    get_footer();
?>