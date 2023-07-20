<?php get_header();?> 

<div class="portfolio-main-titile">
     <h4 class="portfolio-main-title-01">portfolio</h4>
</div>

    <div class="portfolio-box">
        <?php $args = array (
            'post_type' => 'news', 
            'post_per_page' => 3
        ); 

        $the_query = new WP_Query($args); if($the_query->have_posts()):
        ?>
        <?php while($the_query->have_posts()) : $the_query->the_post();?> 
        <a class="atag" href="<?php the_permalink(); ?>">
            <div class="box">
                <div class="box-img">
                    <img src="<?php echo CFS()->get("p_img_1");?>" alt="">
                        </div>
                        <div class="box-text">
                        <p><?php echo CFS()->get("p_day_1");?></p><br>
                        <h5 class="box-title"><?php echo CFS()->get("p_title_1");?></h5>
                    <p><?php echo CFS()->get("p_text_1");?></p>
                </div>
            </div>
        </a>
        <?php endwhile ;?>
        <?php else: ?>
            
        <?php endif;  wp_reset_postdata(); ?> 
    </div>


<?php get_footer();?> 