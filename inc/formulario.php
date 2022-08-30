<?php if(!(get_the_ID() == 7 or 199 or 198 or 197)) { ?>
    <form action="enviar.php" method="post" name="form" class="formphp contato_form grid-8">
<?php } else { ?>
    <form action="enviar.php" method="post" name="form" class="formphp form grid-8">
<?php } ?>
    <?php if(have_rows('formulario', 17)): while(have_rows('formulario', 17)) : the_row(); ?>
        <label for="<?php the_sub_field('type_of', 17)?>"><?php the_sub_field('caixa_texto', 17); ?></label>
        <input id="<?php the_sub_field('type_of', 17)?>" name="<?php the_sub_field('type_of', 17)?>" type="text">
    <?php endwhile; else : endif; ?>
    <label class="nao-aparece">Se você não é um robô, deixe em branco.</label>
    <input type="text" class="nao-aparece" name="leaveblank">
    <label class="nao-aparece">Se você não é um robô, não mude este campo.</label>
    <input type="text" class="nao-aparece" name="dontchange" value="http://" >

    <label for="mensagem">Mensagem</label>
    <textarea name="mensagem" id="mensagem"></textarea>

    <button id="enviar" name="enviar" type="submit" class="btn btn-preto">Enviar</button>
</form>

<?php if(!(get_the_ID() == 7 or 199 or 198 or 197)) { ?>
    <div class="contato_dados grid-8">
        <h3><?php the_field('title', 17); ?></h3>
        <span><?php the_field('tel_dados', 17); ?></span>
        <span><?php the_field('email_dados', 17); ?></span>
        <span><?php the_field('logradouro', 17); ?></span>
        <span><?php the_field('cidade', 17); ?></span>
        <h3>Redes Sociais</h3>
        <ul>
            <?php if(have_rows('rede_sociais', 17)): while(have_rows('rede_sociais', 17)) : the_row(); ?>
                <li><a href="<?php the_sub_field('link_rede', 17); ?>" target="_blank"><img src="<?php the_sub_field('img_rede', 17); ?>" alt="<?php the_sub_field('img_rede_alt', 17); ?>"></a></li>
            <?php endwhile; else : endif; ?>
        </ul>
    </div>
<?php } else { ?>
    <div class="orcamento_dados grid-8">
        <h3><?php the_field('title', 17); ?></h3>
        <span><?php the_field('tel_dados', 17); ?></span>
        <span><?php the_field('email_dados', 17); ?></span>
        <h3>Monte a sua Bikcraft</h3>
        <p>Escolha as especificações:</p>
        <ul>
        <?php if(have_rows('especificacoes', 7)): while(have_rows('especificacoes', 7)) : the_row(); ?>
            <li>- <?php the_sub_field('esp_', 7); ?></li>
        <?php endwhile; else : endif; ?>
        </ul>
    </div>
<?php } ?>