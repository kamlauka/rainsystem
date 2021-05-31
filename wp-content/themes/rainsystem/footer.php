<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rainsystem
 */

?>
<section class="cnt cnt_black kontakt" id="kontakt">
    <div class="uk-container uk-container-center">
        <div class="uk-grid">
            <div class="uk-width-medium-6-10">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2750.239224635429!2d30.72069225041821!3d46.4241377767966!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c6337522de4913%3A0x908a819813d3d94a!2z0JvRjtGB0YLQtNC-0YDRhNGB0LrQsNGPINC00L7RgC4sIDkwLCDQntC00LXRgdGB0LAsINCe0LTQtdGB0YHQutCw0Y8g0L7QsdC70LDRgdGC0YwsIDY1MDAw!5e0!3m2!1sru!2sua!4v1609025777471!5m2!1sru!2sua" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
            <div class="uk-width-medium-4-10 kontakt-small">
                <h3 class="title title_mini title_white title_left">Контакты</h3>
                <div class="kontakt-block">
                    <img src="<?php echo get_bloginfo('url'); ?>/wp-content/uploads/smartphone.png" class="phone">
                    <a style="font-size: 18px;" href="tel:+380675840103">+38(067) 584-01-03</a>
                </div>
                <div class="kontakt-block">
                    <img src="<?php echo get_bloginfo('url'); ?>/wp-content/uploads/viber.png" class="viber">
                    <a style="font-size: 18px;" href="https://msng.link/vi/380675840103">+38 (067) 584-01-03</a>
                </div>
                <div class="kontakt-block">
                    <img src="<?php echo get_bloginfo('url'); ?>/wp-content/uploads/telegram.png" class="telegram">
                    <a style="font-size: 18px;" href="https://msng.link/tg/RainSystem">@RainSystem</a>
                </div>
                <div class="kontakt-block">
                    <img src="<?php echo get_bloginfo('url'); ?>/wp-content/uploads/placeholder.png" class="placeholder">
                    <p>Одесская обл., г. Одесса, Люстдорфская дорога 90г/6</p>
                </div>
            </div>
        </div>
    </div>
</section>

	<footer  id="footer" class="footer">
        <div class="uk-container uk-container-center">
            <p>Разработка сайта при поддержке <a href="https://abozhenko.com/" target="_blank">ABozhenko.com (2017)</a>, Kamlauka (2020)</p>
        </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
