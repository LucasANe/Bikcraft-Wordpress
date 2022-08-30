<footer>
		<div class="footer">
			<div class="container">
				<div class="grid-8 footer_historia">
					<h3><?php the_field('rdp_title',17); ?></h3>
					<?php the_field('rdp_text',17); ?>
				</div>

				<div class="grid-4 footer_contato">
					<h3>Contato</h3>
					<ul>
						<?php if(have_rows('rdp_dados',17)): while(have_rows('rdp_dados',17)) : the_row(); ?>	
							<li>- <?php the_sub_field("dado",17) ?></li>
						<?php endwhile; else : endif; ?>
					</ul>
				</div>

				<div class="grid-4 footer_redes">
					<h3>Contato</h3>
					<ul>
						<?php if(have_rows('rede_sociais',17)): while(have_rows('rede_sociais',17)) : the_row(); ?>
							<li><a href="<?php the_sub_field('link_rede',17); ?>" target="_blank"><img src="<?php the_sub_field('img_rede',17); ?>" alt="<?php the_sub_field('img_rede_alt',17); ?>"></a></li>
						<?php endwhile; else : endif; ?>
					</ul>
				</div>

			</div>
		</div>

		<div class="copy">
			<div class="container">
				<p class="grid-16"><?php bloginfo('name'); ?> <?php echo date("Y"); ?> - Alguns direitos reservados.</p>
			</div>
		</div>
		</footer>

	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-60088262-1', 'auto');
	  ga('send', 'pageview');

	</script>
<?php wp_footer(); ?>
</body>
</html>