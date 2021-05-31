<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package rainsystem
 */
?>
<?php get_header(); ?>

<section class="pageerror-404">
    <div class="uk-container  uk-container-center">
        <h2 class="title title-mini title_white">Упс, страница не найдена. Попробуйте перейти
        на <a class="link"
                href="<?php echo get_bloginfo('url'); ?>">главную</a>, или
        оставьте свои контакты -
        мы ответим
        на все ваши вопросы.</h2>
    </div>
</section>

<?php get_template_part( 'template-parts/uslugi' );?>
<?php get_template_part( 'template-parts/kontakt' );?>
    <script>
        let hideEl = document.getElementById('menu__hide-el');
        hideEl.style.display = 'none';
    </script>
<?php
get_footer();
