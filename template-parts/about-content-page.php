<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', ' - here\'s "some text" added to About</h1>' ); ?>
	</header><!-- .entry-header -->

	<?php twentysixteen_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content();

		?> <!-- ACF for phone number -->

		<?php 
		if (get_field('phone_number')) { ?>
    		<h2> <?php the_field('phone_number')?> </h2>

    	<?php } //<!-- ACF for phone number -->

    	// ACF for Company page

		if (get_field('company_name')) { ?>
    		<h3> <?php the_field('company_name')?> </h3>
    	<?php } 

		if (get_field('telephone_number')) { ?>
    		<h3> <?php the_field('telephone_number')?> </h3>
    	<?php }

		if (get_field('contact_email_address')) { ?>
    		<h3> <?php the_field('contact_email_address')?> </h3>
    	<?php }

		if ( get_field('company_logo') ) { ?>
			<img src="<?php the_field('company_logo') ?>" />
		<?php }

		if (get_field('postal_address')) { ?>
    		<h3> <?php the_field('postal_address')?> </h3>
    	<?php }

    	//<!-- ACF for Company page -->

		wp_link_pages( array(
			'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentysixteen' ) . '</span>',
			'after'       => '</div>',
			'link_before' => '<span>',
			'link_after'  => '</span>',
			'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>%',
			'separator'   => '<span class="screen-reader-text">, </span>',
		) );
		?>
	</div><!-- .entry-content -->

	<?php
		edit_post_link(
			sprintf(
				/* translators: %s: Name of current post */
				__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ),
				get_the_title()
			),
			'<footer class="entry-footer"><span class="edit-link">',
			'</span></footer><!-- .entry-footer -->'
		);
	?>

</article><!-- #post-## -->
