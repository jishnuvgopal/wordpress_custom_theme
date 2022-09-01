<?php
get_header();
?>

<section class="post-area">
    <?php if(have_posts()) : 
            while(have_posts()) : 
                the_post();?>
                
                <article <?php post_class();?>id="post-<?php the_ID();?>">
                <div class="post-meta">
                    <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                    <span class="date">Posted on:<?php date();?>at <?php time();?></span>
                    <span class="category">Posted in<?php category();?></span>
                    <span class="author"><?php the_auther();?></span>
                </div>
                </article>

           <?php endwhile; 
        endif;
    ?>
</section>

<?php
get_footer();
?>