<?php
/**
 * Render template
 *
 * @package edit-post-block
 */

// if not logged, bail.
if ( ! is_user_logged_in() || ! current_user_can( 'edit_posts' ) ) {
	return;
}
?>
<p <?php echo wp_kses_data( get_block_wrapper_attributes() ); ?> >
Here is your link
<?php
	edit_post_link( __( 'Edit Post', 'bring-me-your-issues-mar-23-2023' ), '<p>', '</p' );
?>
</p>
