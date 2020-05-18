<?php get_header(); ?>

<?php

if ( have_posts() ) :

while ( have_posts() ) :

the_post();

if ( is_singular() && has_post_thumbnail() ) :
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
			<div class="post-header-image-container" Xclass="container mt-auto mb-5 rounded" style=" ">
				<?php the_title( '<h1 class="post-header-image-title">', '</h1>' ); ?>
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
