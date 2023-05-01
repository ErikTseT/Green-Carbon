<?php
/**
 * Displays footer site info
 *
 * @package Inspiro
 * @subpackage Inspiro_Lite
 * @since Inspiro 1.0.0
 * @version 1.0.0
 */

?>
<div class="site-info">
	<?php
	if ( function_exists( 'the_privacy_policy_link' ) ) {
		the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' );
	}
	?>
	<span class="copyright">
		<span>
			
		</span>
		<span>
			<?php esc_html_e( '©', 'inspiro' ); ?> <a href="<?php echo 'https://www.wpzoom.com/'; ?>" target="_blank" rel="nofollow">2023 System Savants(TA06)</a>
		</span>
	</span>
</div><!-- .site-info -->
