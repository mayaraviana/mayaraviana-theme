<section id="contact" class="section footer mt-5">
    <div class="container">
        <div class="row justify-content-center typer-line">
            <div class="col-12">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/emoji.png" alt="emoji" class="mb-3" />
            </div>
            <div class="col-12">
                <h1><?php echo get_post_meta(get_the_ID(), 'titulo_footer', true); ?></h1>
            </div>
            <div class="col-12">
                <h1 class="typer-title">
                    <span class="typer" id="main" data-words="<?php echo get_post_meta(get_the_ID(), 'textos_typer', true); ?>" data-delay="100" data-deleteDelay="1000" data-colors="#000"></span>
                    <span class="cursor" data-owner="main"></span>
                </h1>
            </div>
        </div>
        <div class="row mt-4">
            <div class="d-none d-md-block col-md-5 ">
                <p class="mb-4 font-weight-bold">
                    <?php echo get_post_meta(get_the_ID(), 'titulo_col1_footer', true); ?> <span class="blue">↓</span>
                </p>
                <div class="row footer-photos">
                    <div class="col-4">
                        <img class="img-fluid" src="<?php echo get_post_meta(get_the_ID(), 'imagem1_footer', true); ?>" />
                    </div>
                    <div class="col-4">
                        <img class="img-fluid" src="<?php echo get_post_meta(get_the_ID(), 'imagem2_footer', true); ?>" />
                        <img class="img-fluid mt-3" src="<?php echo get_post_meta(get_the_ID(), 'imagem3_footer', true); ?>" />
                    </div>
                    <div class="col-4">
                        <img class="img-fluid" src="<?php echo get_post_meta(get_the_ID(), 'imagem4_footer', true); ?>" />
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 offset-md-1 ">
                <p class="mb-4 font-weight-bold"><?php echo get_post_meta(get_the_ID(), 'titulo_col2_footer', true); ?></p>
                <?php
                $links = get_post_meta(get_the_ID(), 'links', true);
                if (isset($links)) {
                    foreach ($links as $link) { ?>
                        <p>
                            <a href="<?php echo $link['url']; ?>" target="_blank"><?php echo $link['nome']; ?><span class="blue font-weight-bold">↗</span></a>
                        </p>
                <?php }
                } ?>
            </div>
            <div class="col-12 col-md-3 item">
                <p class="mb-4 font-weight-bold">
                    <?php echo get_post_meta(get_the_ID(), 'titulo_col3_footer', true); ?><span class="blue">↓</span>
                </p>
                <div class="d-flex justify-content-between">
                    <div style="width: 49%">
                        <a href="<?php echo get_post_meta(get_the_ID(), 'link_livro1', true); ?>" target="_blank" class="item-wrap">
                            <img src="<?php echo get_post_meta(get_the_ID(), 'imagem_livro1', true); ?>" alt="Work 1" class="img-fluid" /></a>
                    </div>
                    <div style="width: 49%">
                        <a href="<?php echo get_post_meta(get_the_ID(), 'link_livro2', true); ?>" target="_blank" class="item-wrap">
                            <img src="<?php echo get_post_meta(get_the_ID(), 'imagem_livro2', true); ?>" alt="Work 1" class="img-fluid" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row credits text-md-right">
            <div class="col-sm-12">
                <p class="mb-1">
                    &copy; Copyright Mayara Viana. All Rights Reserved
                </p>
            </div>
            <div class="col-sm-12 credits">
                Made with ❤️ and Javascript by Mayara Viana.
            </div>
        </div>
    </div>
</section>