<?php get_header(); ?> 

<div class="text">
        <p class="css">CSS3</p>
        <p class="javascript">javascript</p>
        <p class="cms">CMS</p>
        <p class="scss">SCSS</p>
        <p class="Wordpress">Wordpress</p>
        <p class="wbe">web production</p>
        <p class="main-title">ShinPro</p>
        <p class="XAMAPP">XAMAPP</p>
        <p class="HTML">HTML5</p>
        <p class="hello">Hello Word</p> 
    </div>

    <div class="news">
    <h4>News</h4>
    
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
    <a class="list-display" href="<?php bloginfo("url");?>/posts">一覧表示 </a>
</div>

<?php get_footer();?> 
