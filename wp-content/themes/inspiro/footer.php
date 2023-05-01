<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Inspiro
 * @subpackage Inspiro_Lite
 * @since Inspiro 1.0.0
 * @version 1.0.0
 */

?>

		</div><!-- #content -->

		<?php get_template_part( 'template-parts/footer/footer', 'instagram-widget' ); ?>

		<footer id="colophon" <?php inspiro_footer_class(); ?> role="contentinfo">
			<div class="inner-wrap">
				<?php
				get_template_part( 'template-parts/footer/footer', 'widgets' );

				get_template_part( 'template-parts/footer/site', 'info' );
				?>
			</div><!-- .inner-wrap -->
		</footer><!-- #colophon -->
	</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>

<script>
jQuery(document).ready(function($) {
  $("#carbon-calculator-form").on("submit", function(e) {
    e.preventDefault();

    let formData = $(this).serialize();

    $.ajax({
      type: "POST",
      url: "<?php echo admin_url('admin-ajax.php'); ?>",
      data: {
        action: "compare_carbon_footprint_ajax",
        form_data: formData,
      },
      success: function(response) {
        $("#comparison-result").html(response);
      },
    });
  });
});
</script>

</body>
</html>
