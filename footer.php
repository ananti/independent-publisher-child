<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Independent Publisher
 * @since   Independent Publisher 1.0
 */
?>

</div><!-- #main .site-main -->

<footer id="colophon" class="site-footer" itemscope="itemscope" itemtype="http://schema.org/WPFooter" role="contentinfo">
	<div class="site-info">
        <div style="text-align: right;margin-bottom: 5px">
            <?php
            //add image
            $imageurl = get_bloginfo('stylesheet_directory') .'/images/';
            echo "<a href='http://id.linkedin.com/pub/ananti-selaras-sunny/29/3a9/671/' target='_blank'><img class='icon' src='".$imageurl."Linkedin.png' /></a>";
            echo "<a href='https://www.google.com/+AnantiSelarasSunny' target='_blank'><img class='icon' src='".$imageurl."Google-plus-icon.png' /></a>";
            echo "<a href='https://www.facebook.com/ananti.sunny' target='_blank'><img class='icon' src='".$imageurl."facebook-Icon.png' /></a>";
            echo "<a href='https://twitter.com/ananti_sunny' target='_blank'><img class='icon' src='".$imageurl."Twitter-Icon.png' /></a>";
            echo "<a href='http://kyonsan.deviantart.com/' target='_blank'><img class='icon' src='".$imageurl."Deviantart-Icon.png' /></a>";
            ?>
        </div>
        <?php echo ik_custom_footer(); ?>
	</div>
	<!-- .site-info -->
</footer><!-- #colophon .site-footer -->
</div><!-- #page .hfeed .site -->

<?php wp_footer(); ?>

</body>
</html>
