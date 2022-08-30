<section class="qualidade container">
	<h2 class="subtitulo"><?php the_field("qld_title", 15) ?></h2>
	<img src="<?php the_field("qld_img", 15) ?>" alt="<?php the_field("qld_img_alt", 15) ?>">
	<ul class="qualidade_lista">
        <?php if(have_rows('qlds', 15)): while(have_rows('qlds', 15)) : the_row(); ?>  
            <li class="grid-1-3">
                <h3><?php the_sub_field('qld_qld', 15); ?></h3>
                <p><?php the_sub_field('qld_descricao', 15); ?></p>
            </li>
        <?php endwhile; else : endif; ?>
	</ul>
    <?php if(!(is_page("sobre"))) { ?>
        <div class="call">
            <p><?php the_field('qld_call', 78); ?></p>
            <a href="/<?php the_field('qld_call_pg', 78); ?>/" class="btn btn-preto"><?php the_field('qld_call_pg', 78); ?></a>
        </div>
    <?php } ?>
</section>