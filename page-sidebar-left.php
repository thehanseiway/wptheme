<?php
    /* Template Name: Left Sidebar */
?>
<?php get_header(); ?>

<div class="container">
    <div class="row">

        <div class="col-md-4">

            <h2>Sidebar</h2>

        </div>

        <div class="col-md-8">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <h1><?php the_title(); ?></h1>
                <p><?php the_content(); ?></p>

            <?php endwhile; else : ?>

                <p><?php _e( 'Sorry, no pages found.' ); ?></p>

            <?php endif; ?>

        </div>

    </div>
</div>

<?php get_footer(); ?>
