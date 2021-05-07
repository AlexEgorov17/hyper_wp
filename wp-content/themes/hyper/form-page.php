<?php
/*
Template Name: Связь
*/
?>
<?php
get_header();
?>
    </section>
    <section class="how-start">
        <div class="section-title-wrapper">
            <div class="section-title-bg">СВЗ С НАМИ</div>
            <div class="section-title">Задать вопрос</div>
        </div>
        <div class="form-wrapper">
            <form action="<?php echo site_url() ?>/wp-admin/admin-ajax.php" method="POST" id="form-email">
                <input placeholder="Введите ваше имя" name="name">
                <textarea type="" placeholder="Введите ваш вопрос" name="text"></textarea>
                <button type="submit" class="btn btn-lk" id="form-email_btn">Отправить</button>
            </form>
        </div>
    </section>

<?php 
    get_template_part( 'template-parts/modal-menu' ); 
    get_footer();
