<?php
get_header();
?>

<section class="post-area">
    <?php if(has_post_thumbnail()): ?>
        <img src="<?php the_post_thumbnail_url('largest');?>" alt="" class="img-fluid">
          <?php endif;?>

    <?php if(have_posts()) : 
            while(have_posts()) : 
                the_post();?>
                
                <article <?php post_class()?>id="post-<?php the_ID();?>">
                <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                <div class="post-meta">
                    <span class="date">Posted on:<?php the_date()?>at <?php the_time()?></span>
                    <span class="category">Posted in<?php the_category();?></span>
                    <span class="author"><?php the_author();?></span>
                </div>

                <?php the_content();?>
                <?php //the_excerpt();?>
                </article>

           <?php endwhile; 
        endif;
    ?>
</section>

<?php
get_footer();
?>