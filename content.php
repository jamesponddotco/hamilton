<?php
/**
 * Template part for displaying posts.
 *
 * @package Hamilton
 */

declare ( strict_types = 1 );

$hamilton_extra_classes = 'post-preview tracker';

// Determine whether a fallback is needed for sizing.
if ( has_post_thumbnail() && ! post_password_required() ) {
	$hamilton_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'hamilton_preview-image' );
	if ( $hamilton_image ) {
		$hamilton_aspect_ratio = $hamilton_image[2] / $hamilton_image[1];
		// Guaranteee a mininum aspect ratio of 3/4.
		if ( $hamilton_aspect_ratio <= 0.75 ) {
			$hamilton_extra_classes .= ' fallback-image';
		}
	}
} else {
	$hamilton_extra_classes .= ' fallback-image';
}

$hamilton_image_style_attr = ( has_post_thumbnail() && ! post_password_required() ) ? ' style="background-image: url( ' . esc_url( get_the_post_thumbnail_url( $post->ID, 'hamilton_preview-image' ) ) . ' );"' : '';

?>

<a <?php post_class( $hamilton_extra_classes ); ?> id="post-<?php the_ID(); ?>" href="<?php the_permalink(); ?>">

	<div class="preview-image"<?php echo esc_attr( $hamilton_image_style_attr ); ?>>
		<?php
		if ( has_post_thumbnail() && ! post_password_required() ) {
			the_post_thumbnail( 'hamilton_preview-image' );
		}
		?>
	</div>

	<header class="preview-header">

		<?php if ( is_sticky() ) : ?>
			<span class="sticky-post"><?php _e( 'Sticky', 'hamilton' ); ?></span>
		<?php endif; ?>

		<?php the_title( '<h2 class="title">', '</h2>' ); ?>

	</header>

</a>
