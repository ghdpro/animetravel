<?php get_header(); ?>

<?php

if ( have_posts() ) :

while ( have_posts() ) :

the_post();

if ( is_singular() && has_post_thumbnail() ) :
	// If title is like "Post Topic (Info)" then style the "Info" text as a subtitle
	$title = get_the_title();
	$subtitle = '';
	$brackets = stripos( $title, '(' );
	if ( false !== $brackets ) {
		$subtitle = substr( $title, $brackets + 1, - 1 );
		$title    = substr( $title, 0, $brackets );
	}
	?>

	<div class="container-fluid position-relative p-0">
		<?php
		the_post_thumbnail(
			'post-thumbnail',
			array(
				'class' => 'post-header-image shadow',
				'alt'   => esc_html( get_the_title() ),
			)
		);
		?>
		<div class="post-header-image-overlay">
			<div class="post-header-image-container">
				<h1 class="post-header-image-title">
					<?php echo esc_html( $title ); ?>
					<?php if ( ! empty( $subtitle ) ) : ?>
						<small class="post-header-image-subtitle"><?php echo esc_html( $subtitle ); ?></small>
					<?php endif; ?>
				</h1>
			</div>
		</div>
	</div>
<?php
endif
?>

<main class="container<?php if ( has_post_thumbnail() ) : ?> post-header-image-padding<?php endif; ?>">
	<?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
	<div class="row">
		<div class="col-sm-8">

			<?php
			endif;

			get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			prutser_post_nav();

			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

			endif;

			if ( is_active_sidebar( 'sidebar' ) ) :
			?>

		</div>

		<aside class="col-sm-4 sidebar">

			<?php dynamic_sidebar( 'sidebar' ); ?>

		</aside>
	</div>
<?php endif; ?>
</main>

<?php get_footer(); ?>
