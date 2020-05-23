<?php get_header(); ?>

<main class='container'>
    <?php if(have_posts()){
            while(have_posts()){
                the_post(); ?>
            <h1 class='my-3'><?php the_title(); ?></h1> 
            <?php the_content(); ?>

        <?php    }
    }?>
    
    <!-- Productos -->
    <section class="primary" id="productos">
        <div class="lista-productos my-5">
            <div class="col-lg-12 text-center"> <h2>PRODUCTOS</h2><hr class="star-primary"></div>
                <div class="row">
                <?php
                $args = array(
                    'post_type' => 'producto',
                    'post_per_page' => -1, 
                    'order'         => 'ASC',
                    'orderby'       => 'title'
                );

                $productos = new WP_Query($args);

                if($productos->have_posts()){
                    while($productos->have_posts()){
                        $productos->the_post();
                        ?>

                        <div class="col-4">
                            <figure>
                                <?php the_post_thumbnail('large'); ?>
                            </figure>

                            <a href="<?php the_permalink(); ?>">
                                    <span class='my-3 text-center btn btn-lg btn-block btn-2'> <?php the_title();?>
                            </a>
                    </span>
                        </div>

                <?php }
                }

                ?>
            </div>
        </div>
    </section>
    
    <!-- Sobre nosotros -->
    <section class="primary" id="about">
        <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2>Sobre nosotros</h2>
                        <hr class="star-primary">
                    </div>
                </div>
                <div class="row">
                    <div class="card p-3 col-12 col-md-6 col-lg-4">
                        <div class="card-img pb-3">
                            <span class="mbr-icontfont mbri-users"></span>
                        </div>
                        <div class="card-box">
                            <h4 class="card-title py-3 mbr-fonts-style display-5">Creativity</h4>
                            <p class="mbr-text mbr-fonts-style display-7">Somos un grupo de estudiantes de programacion con la mejor disposicion para nuestros clientes.</p>
                        </div>
                    </div>

                    <div class="card p-3 col-12 col-md-6 col-lg-4">
                        <div class="card-img pb-3">
                            <span class="mbr-icontfont mbri-users"></span>
                        </div>
                        <div class="card-box">
                            <h4 class="card-title py-3 mbr-fonts-style display-5">Creativity</h4>
                            <p class="mbr-text mbr-fonts-style display-7">Tenemos un equipo de soporte que siempre estara listo para ayudarlo si ocurriera algo.</p>
                        </div>
                    </div>

                    <div class="card p-3 col-12 col-md-6 col-lg-4">
                        <div class="card-img pb-3">
                            <span class="mbr-icontfont mbri-users"></span>
                        </div>
                        <div class="card-box">
                            <h4 class="card-title py-3 mbr-fonts-style display-5">Creativity</h4>
                            <p class="mbr-text mbr-fonts-style display-7">Para asegurarnos de que pueda satisfacer todas sus necesidades, siempre nos esforzamos por se lo mas confiables posible</p>
                        </div>
                    </div>

                    <div class="card p-3 col-12 col-md-6 col-lg-4">
                        <div class="card-img pb-3">
                            <span class="mbr-icontfont mbri-users"></span>
                        </div>
                        <div class="card-box">
                            <h4 class="card-title py-3 mbr-fonts-style display-5">Creativity</h4>
                            <p class="mbr-text mbr-fonts-style display-7">Sus productos eran enviados inmediatamente despues de que se complete la compra y se verifique el pago</p>
                        </div>
                    </div>


                </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>