<section class="how-start">
    <div class="section-title-wrapper">
        <div class="section-title-bg">ВАЖНИЕ НОВОСТИ</div>
        <div class="section-title">Новости проекта</div>
    </div>
    <?php 
        if ( have_posts() ) {
            ?>
             <form action="<?php echo site_url() ?>/wp-admin/admin-ajax.php" method="POST" id="filter" style="margin-top: 30px;">
 <?php
            if( $terms = get_terms( array( 'taxonomy' => 'category', 'orderby' => 'name' ) )) {
                echo '<select name="categoryfilter"><option>Выберите категорию...</option>';
                foreach ( $terms as $term ) {
                    echo '<option value="' . $term->term_id . '">' . $term->name . '</option>'; 
                }
                echo '</select>';
            }
             
            echo '<label><input type="radio" name="date" value="ASC" /> Дата: по возрастанию</label>';
            echo '<label><input type="radio" name="date" value="DESC" selected="selected" /> Дата: по убыванию</label>';
            ?><input id="paged" type="hidden" name="paged" value="<?php echo get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1 ?>" selected="selected" /><?php
            echo '<button>Применить фильтр</button><input type="hidden" name="action" value="myfilter">
            </form>
            <div id="response"></div>';
?>
        <div id="filtering-results"></div><div class="news-wrapper">
            <?php 

            // while ( have_posts() ) {
            //     the_post();
            //     get_template_part( 'template-parts/content/content' );
            // } 

            ?></div><?php

            get_template_part( 'template-parts/pagination' );
        } else {
            get_template_part( 'template-parts/content/content', 'none' );
        }    

    ?>
</section>