<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title><?php bloginfo('name'); ?> - <?php wp_title(''); ?> <?php the_field('title_seo'); ?></title>
<meta name="description" content="<?php bloginfo('name'); ?> - <?php wp_title(''); ?> <?php the_field('description_seo'); ?>">
		<meta name="description" content="<?php bloginfo('name'); ?> - <?php wp_title(''); ?> - <?php the_field('description_seo'); ?>">

		<meta property="og:type" content="website"/>
		<meta property="og:title" content="<?php bloginfo('name'); ?> - <?php wp_title(''); ?> - <?php the_field('title_seo'); ?>"/>
		<meta property="og:description" content="<?php bloginfo('name'); ?> - <?php wp_title(''); ?> <?php the_field('description_seo'); ?>"/>
		<meta property="og:url" content="/"/>
		<meta property="og:image" content="<?php the_field('og_img',17); ?>"/>

		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" href="<?php the_field('favicon',17); ?>">

        <?php wp_head(); ?>
		<style>
			.customize-support .header{
				margin-top: 32px
			}	
		</style>
	</head>
	<body>
		<header class="header">
			<div class="container">
				<a href="/home/" class="grid-4">
					<img src="<?php the_field('img_header', 17); ?>" alt="Bikcraft">
				</a>
				<nav class="grid-12 header_menu">
					<?php
						$args = array(
							'menu' => 'principal',
							'theme_location' => 'menu-principal',
							'container' => false
						);
						wp_nav_menu( $args );
					?>
				</nav>
			</div>
		</header>