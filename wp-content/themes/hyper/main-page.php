<?php
/*
Template Name: Главная
*/
?>

<?php
get_header();
get_template_part( 'template-parts/content/main' );   
?>
    </section>
    <?php 
        get_template_part( 'template-parts/content/about' );   
        get_template_part( 'template-parts/content/how-start' );   
        get_template_part( 'template-parts/content/join' );   
    ?>
<?php 
    get_template_part( 'template-parts/modal-menu' ); 
    get_footer();
