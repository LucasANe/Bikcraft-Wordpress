<?php
// Template Name: Home
?>
<?php get_header(); ?> 
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php
	$imagem_id = get_field('background_home');
	$background_large = wp_get_attachment_image_src($imagem_id, 'large');
	$background_medium = wp_get_attachment_image_src($imagem_id, 'medium');
?>

<style type="text/css">
.produtos_lista a{
	color: #000;
}
.introducao {
	background: url('<?php echo $background_large[0] ?>') no-repeat center;
	background-size: cover;
}
@media only screen and (max-width: 767px) {
.introducao {
	background: url('<?php echo $background_medium[0] ?>') no-repeat center;
	background-size: cover;
}
}
</style>

<section class="introducao">
	<div class="container">
		<h1><?php the_field('title_page'); ?></h1>
		<blockquote class="quote-externo">
			<p><?php the_field('citacao_up'); ?></p>
			<cite><?php the_field('autor'); ?></cite>
		</blockquote>
		<a href="/produtos/" class="btn">Orçamento</a>
	</div>
</section>

<section class="produtos container animar">
	<h2 class="subtitulo"><?php the_field("pdt_title") ?></h2>
	<ul class="produtos_lista">
        <?php if(have_rows('produtos')): while(have_rows('produtos')) : the_row(); ?>   
            <li class="grid-1-3">
				<a href="/produtos/<?php the_sub_field("pdt_foco") ?>">
                <div class="produtos_icone">
                    <img src="<?php the_sub_field('img_pdt'); ?>" alt="<?php the_sub_field('img_pdt_alt'); ?>">
                </div>
                <h3><?php the_sub_field('pdt_foco'); ?></h3>
                <p><?php the_sub_field('pdt_descricao'); ?></p>
				</a>
            </li>
        <?php endwhile; else : endif; ?>
	</ul>

	<div class="call">
		<p><?php the_field("call_pdt") ?></p>
		<a href="/produtos/" class="btn btn-preto"><?php the_field("pdt_title") ?></a>
	</div>
</section>
<!-- Fecha Produtos -->

	<?php include(TEMPLATEPATH . "/inc/portfolio.php"); ?>	
	<?php include(TEMPLATEPATH . "/inc/qualidades.php"); ?>
	<?php include(TEMPLATEPATH . "/inc/quote-end.php"); ?>
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
<?php get_footer(); ?>