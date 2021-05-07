<?php
?>

<div id="post-<?php the_ID(); ?>" class="news-card">
    <div class="news-header news-hot">
        <?php echo get_the_post_thumbnail() ?>
    </div>
    <div class="news-content">
        <div class="news-content-header">
            <div class="news-content-title"><?php the_title() ?></div>
            <div class="news-content-date"><?php echo get_post_time( 'j F Y' ); ?></div>
        </div>
        <div class="news-content-bottom">
            <p>
                <?php
                    the_content(
                        sprintf(
                            wp_kses(
                                __( 'Next', '' ),
                                array(
                                    'span' => array(
                                        'class' => array(),
                                    ),
                                )
                            ),
                            get_the_title()
                        )
                    );

                    wp_link_pages(
                        array(
                            'before' => '<div class="page-links">' . __( 'Pages:', '' ),
                            'after'  => '</div>',
                        )
                    );
                ?>
            </p>
        </div>
        <a class="news-content-more" href="<?php echo esc_url( get_permalink() )  ?>">
            <svg width="48" height="8" viewBox="0 0 48 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="4" cy="4" r="4" fill="#D5D7DD"/>
                <circle cx="24" cy="4" r="4" fill="#D5D7DD"/>
                <circle cx="44" cy="4" r="4" fill="#D5D7DD"/>
            </svg>
        </a>
    </div>
</div>
