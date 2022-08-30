<?php
// Template Name: Sobre
?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php include(TEMPLATEPATH . "/inc/introducao.php"); ?>	

	<section class="missao_sobre container animar-interno">
		<div class="grid-10">
			<h2 class="subtitulo-interno"><?php the_field("mss_title") ?></h2>
			<?php the_field("mss_descricao") ?>
		</div>
		<div class="grid-6">
			<h2 class="subtitulo-interno">Valores</h2>
			<ul>
				<?php if(have_rows('lista_v')): while(have_rows('lista_v')) : the_row(); ?>
					<li>- <?php the_sub_field("qlt_") ?></li>
				<?php endwhile; else : endif; ?>
			</ul>
		</div>

		<div class="grid-16 foto-equipe">
			<img src="img/equipe-bikcraft.jpg" alt="Equipe Bikcraft">
		</div>

	</section>

	<?php include(TEMPLATEPATH . "/inc/qualidades.php"); ?>

	<?php include(TEMPLATEPATH . "/inc/quote-end.php"); ?>
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
<?php get_footer(); ?>