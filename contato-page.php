<?php
// Template Name: Contato
?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php include(TEMPLATEPATH . "/inc/introducao.php"); ?>	

	<section class="contato container animar-interno">
		<?php include(TEMPLATEPATH . "/inc/formulario.php"); ?>	
	</section>

	<section class="container contato_mapa">
	<a href="<?php the_field('link_mapa'); ?>" target="_blank" class="grid-16"><img src="<?php the_field('img_mapa'); ?>" alt="<?php the_field('mapa_alt'); ?>"></a>
	</section>

	<?php include(TEMPLATEPATH . "/inc/quote-end.php"); ?>
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
<?php get_footer(); ?>