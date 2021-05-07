<section class="how-start">
    <div class="section-title-wrapper">
        <div class="section-title-bg">НОВОСТЬ</div>
        <div class="section-title">Новость проекта</div>
    </div>
    <?php 
        ?>
            <div class="news-full-wrapper">
                <div class="news-full-main">
                    <?php echo get_the_post_thumbnail() ?>
                    <div class="news-full-main-content">
                        <div class="news-full-main-header"> 
                            <div class="news-full-main-hot">
                                <img src="<?php echo bloginfo('template_url'); ?>/images/icons/hot.svg" alt="hot-icon">
                            </div>
                        </div>
                        <div class="news-full-main-bottom">
                            <div class="news-full-main-title"><?php the_title() ?></div>
                            <div class="news-full-main-date"><img src="<?php echo bloginfo('template_url'); ?>/images/icons/date.svg" alt="date-icon"> <?php echo get_the_date('j F Y') ?></div>
                        </div>
                    </div>
                </div>
                <div class="news-full-text-wrapper">
                    <div class="news-full-text-content">
                        <?php the_content() ?>
                    </div>
                </div>
            </div>
    ?>
</section>