<?php
// Template Name: Single Produtos
get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<section class="container produto_item animar-interno">
			<div class="grid-11">
				<img src='<?php the_field("img_1") ?>' alt="Bikcraft <?php the_title(); ?>">
				<h2><?php the_field("title_") ?></h2>
			</div>
			
			<div class="grid-5 produto_icone"><img src='<?php the_field("img_icon") ?>' alt="Icone <?php the_title(); ?>"></div>
			<div class="grid-8"><img src='<?php the_field("img_2") ?>' alt="Bikcraft <?php the_title(); ?>"></div>
			<div class="grid-8 produto_info">
				<div class="grid-8 produto_info">
				<p><?php the_field("desc_") ?></p>
				<ul>
					<?php if(have_rows('qld_')): while(have_rows('qld_')) : the_row(); ?>  
						<li><?php the_sub_field("qld_qld") ?></li>
					<?php endwhile; else : endif; ?>
				</ul>
			</div>
		</section>

		<section class="orcamento">
			<div class="container">
				<h2 class="subtitulo">Orçamento</h2>
				<?php include(TEMPLATEPATH . "/inc/formulario.php"); ?>	
			</div>
		</section>
<?php endwhile; else: endif; ?>

<?php get_footer(); ?>