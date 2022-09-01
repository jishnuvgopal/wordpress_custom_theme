<?php
get_header();
?>

<section>
    <div class="container pt-5 ps-5">

        <h1><?php the_title();?></h1>

    <?php if(have_posts()) : 
            while(have_posts()) : 
                the_post();
                the_content();
            endwhile; 
        endif;
    ?>
    </div>
</section>

<?php
get_footer();
?>