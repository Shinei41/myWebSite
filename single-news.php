<?php get_header();?> 

<div class="news-type-container">
    <div class="news-type-left-and-right">
        <div class="news-type-left">
            <img src="<?php echo CFS()->get("p_img_1");?>" alt="">
        </div>
        <div class="news-type-right">
            <p><?php echo CFS()->get("p_day_1");?></p><br>
            <h5 class="box-title"><?php echo CFS()->get("p_title_1");?></h5>
            <p><?php echo CFS()->get("p_text_1");?></p>
            <p>リンク→<a href="<?php echo CFS()->get("p_tage_1");?>"><?php echo CFS()->get("p_tage_1");?></a></p>
        </div>
    </div>
</div>

<?php get_footer();?> 