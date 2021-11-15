<?php
get_header();
?>

<div class="fitnes-front-page">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <div class="container">
        <div class="box">
            <div class="col-lg-12">
                <h2><a href="<?php the_permalink() ?>" title="Ссылка на: <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                <p><?php the_excerpt(); ?></p>

                <small><?php the_time('F jS, Y') ?> Автор: <?php the_author_posts_link() ?></small>
            </div>

        </div>
    </div>



    <?php endwhile; else : ?>
        <p>Записей нет.</p>
    <?php endif; ?>

</div>


<?php
get_footer();