<?php get_header(); ?>

<main class='container my-3'>
    <?php if(have_posts()){
            while(have_posts()){
                the_post();
            ?>
                <h1 class='my-5'><?php the_title() ?></h1>
                <div class="row">
                    <div class="col-6">
                        <?php the_post_thumbnail('large'); ?>
                    </div>
                    <div class="col-6">
                        <?php the_content(); ?>
                        <div class="row">
                            <div class="col-6">
                                <button type="button" class="btn btn-lg btn-block btn-1"><i class="dashicons dashicons-index-card"></i> Comprar</button>
                            </div>
                            <div class="col-6">
                                <button type="button" class="btn btn-lg btn-block btn-2"><i class="dashicons dashicons-cart"></i> Anadir al Carrito</button>
                            </div>
                        
                        </div>
                    </div> 
                </div>
            <?php
            }
    } ?>

</main>
<?php get_footer(); ?>