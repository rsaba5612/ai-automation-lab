<?php
/**
 * SabLearn Agents Theme
 * 
 * This is a starter theme. You'll need to add your HTML structure here.
 * The style.css file contains all the styling.
 */

get_header();
?>

<main id="primary" class="site-main">
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) :
            the_post();
            the_content();
        endwhile;
    endif;
    ?>
</main>

<?php
get_footer();
