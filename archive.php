<?php get_header();?> 

<div class="post-archive">
    <h4>news list</h4>
</div> 

<div class="news">
    <?php 
    
    
    if (have_posts()) : while (have_posts()) : the_post();

    ?>  
    <a href="<?php the_permalink(); ?>">
        <div class="main-news">
            <p><?php echo CFS()->get('s_date_1');?></p>
            <p>お知らせ</p>
            <p class="word"><?php echo CFS()->get('s_title_1');?></p>
        </div>
        </a>
    <?php endwhile; endif; ?>

    <div class="pagination">
    <?php echo paginate_links( array ( 'type' => 'list',
        'prev_text' => '«',
        'next_text' => '»'
    )); ?>
    </div>
        
</div>    
</div>

<?php get_footer();?> 
