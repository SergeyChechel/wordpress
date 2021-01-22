<?php
/**
 * Template Name: Страница категории
 * 
 */
?>

<?php
    get_header();
?>

<div class="toys" id="toys">
    <div class="container">
 
        <h2 class="subtitle"><?php single_cat_title('Категория: ', 1); ?></h2>
        <?php 
            if ( is_single() ) {
                $cats =  get_the_category();
                $cat = $cats[0];
            } else {
                $cat = get_category( get_query_var('cat') );
            }
            $cat_slug = $cat->slug; // ярлык рубрики
            $cat_id = $cat->cat_ID; // ID рубрики
            $cat_name = $cat->name; // название рубрики
        ?>

        <div class="toys__wrapper">
                <?php
                // параметры по умолчанию
                    $posts = get_posts( array(
                        'numberposts' => -1,
                        'category_name'    => $cat_slug,
                        'orderby'     => 'date',
                        'order'       => 'ASC',
                        'post_type'   => 'post',
                        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                    ) );

                    foreach( $posts as $post ) {
                        setup_postdata($post);
                        // формат вывода the_title() ...
                        ?>

                            <div class="toys__item" style="background-image: url(<?php 
                                        if (has_post_thumbnail()) {
                                            the_post_thumbnail_url();
                                        } else {
                                            echo get_template_directory_uri() . '/assets/img/not-found.jpg';
                                        }
                                    ?>)">
                                <div class="toys__item-info">
                                    <div class="toys__item-title"><?php the_title();?></div>
                                    <div class="toys__item-descr">
                                        <?php the_field('toy_descr');?>    
                                    </div>
                                    <a href="<?= get_permalink(); ?>" class="minibutton toys__trigger" onclick="myFunction(this)">Подробнее</a>
                                </div>
                            </div>
                                
                        <?php
                        }

                        wp_reset_postdata(); // сброс
                ?>

        </div>
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="toys__alert">
                    <?php the_field('toys__alert');?>
                    <!-- <span>Не нашли то, что искали?</span> Свяжитесь с нами - и мы с радостью создадим любую игрушку по вашему желанию. Вы можете выбрать все: размер, материал, формы...! -->
                </div>
            </div>
        </div>
    </div>
</div>



<?php
    get_footer();
?>