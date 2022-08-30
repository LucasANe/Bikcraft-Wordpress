<section class="portfolio">
	<div class="container">
        <?php if(!(is_page(13))) { ?>
		    <h2 class="subtitulo"><?php the_field("ptf_title", 78) ?></h2>
        <?php } ?>
        <ul class="portfolio_lista rslides_portfolio">
            <?php if(have_rows('slide_num', 13)) : while(have_rows('slide_num', 13)) : the_row(); ?>  
            <li>
                <?php if(have_rows('ptf_imgs')): while(have_rows('ptf_imgs')) : the_row(); ?>  
                    <div class="grid-<?php the_sub_field('ptf_img_tmn'); ?>"><img src="<?php the_sub_field('ptf_img'); ?>" alt="ptf_img_alt"></div>
                <?php endwhile; else : endif; ?>
            </li>  
            <?php endwhile; else : endif; ?>
        </ul>
        <?php if(!(is_page(13))) : ?>
            <div class="call">
                <p><?php the_field("ptf_call", 78) ?></p>
                <a href="/portfolio/" class="btn"><?php the_field("ptf_title", 78) ?></a>
            </div>
        <?php else : endif; ?>
	</div>
</section>