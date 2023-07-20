<?php get_header();?> 

<div class="single-conainer">
    <?php if(have_posts()) : while (have_posts()) : the_post();?> 
        <h1 class="single-title"><?php the_title();?></h1>
        <div class="page_container">
            <p><?php the_content();?></p>
        </div>
    <?php endwhile; endif; ?>
</div>

<?php get_footer();?>