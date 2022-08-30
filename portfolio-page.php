<?php
// Template Name: Portifolio
?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php include(TEMPLATEPATH . "/inc/introducao.php"); ?>	

	<section class="container animar-interno">
		<ul class="rslides">
			<?php if(have_rows('slide_text')): while(have_rows('slide_text')) : the_row(); ?>	
				<li>
					<blockquote class="quote_clientes">
						<p>“<?php the_sub_field("quote_text") ?>”</p>
						<cite><?php the_sub_field("autor") ?></cite>
					</blockquote>
				</li>
			<?php endwhile; else : endif; ?>
		</ul>
	</section>

	<?php include(TEMPLATEPATH . "/inc/portfolio.php"); ?>	
	<?php include(TEMPLATEPATH . "/inc/quote-end.php"); ?>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
<?php get_footer(); ?>