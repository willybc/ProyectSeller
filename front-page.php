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
                        <div class="card-img">
                        <i class="fas fa-user-friends"></i>
                        </div>
                        <div class="card-box">
                            <h4 class="card-title py-2 mbr-fonts-style display-5">Quienes Somos?</h4>
                            <p class="mbr-text mbr-fonts-style display-7">Somos un grupo de estudiantes de programacion con la mejor disposicion para nuestros clientes.</p>
                        </div>
                    </div>

                    <div class="card p-3 col-12 col-md-6 col-lg-4">
                        <div class="card-img">
                            <i class="fas fa-dollar-sign"></i>
                        </div>
                        <div class="card-box">
                            <h4 class="card-title py-2 mbr-fonts-style display-5">Buenos precios</h4>
                            <p class="mbr-text mbr-fonts-style display-7">Si bien creemos en la calidad, valoramos que nuestros productos sean tan baratos como la calidad de ellos.</p>
                        </div>
                    </div>                  

                    <div class="card p-3 col-12 col-md-6 col-lg-4">
                        <div class="card-img">
                            <i class="fas fa-hands-helping"></i>
                        </div>
                        <div class="card-box">
                            <h4 class="card-title py-2 mbr-fonts-style display-5">Confiables</h4>
                            <p class="mbr-text mbr-fonts-style display-7">Para asegurarnos que nuestros clientes confien en nosotros, siempre nos esforzamos por se lo mas confiables posible</p>
                        </div>
                    </div>

                    <div class="card p-3 col-12 col-md-6 col-lg-4">
                        <div class="card-img">
                            <i class="fas fa-box"></i>
                        </div>
                        <div class="card-box">
                            <h4 class="card-title py-2 mbr-fonts-style display-5">Stock</h4>
                            <p class="mbr-text mbr-fonts-style display-7">Productos en todo momento para que siempre pueda recoger lo que necesite, cuando lo necesite</p>
                        </div>
                    </div>

                    <div class="card p-3 col-12 col-md-6 col-lg-4">
                        <div class="card-img">
                            <i class="fas fa-shipping-fast"></i>
                        </div>
                        <div class="card-box">
                            <h4 class="card-title py-2 mbr-fonts-style display-5">Delivery al instante</h4>
                            <p class="mbr-text mbr-fonts-style display-7">Sus productos eran enviados inmediatamente despues de que se complete la compra y se verifique el pago</p>
                        </div>
                    </div>

                    <div class="card p-3 col-12 col-md-6 col-lg-4">
                        <div class="card-img">
                            <i class="fas fa-headset"></i>
                        </div>
                        <div class="card-box">
                            <h4 class="card-title py-2 mbr-fonts-style display-5">Soporte 24/7</h4>
                            <p class="mbr-text mbr-fonts-style display-7">Tenemos un equipo de soporte que siempre estara listo para ayudarlo si ocurriera algo.</p>
                        </div>
                    </div>

                    


                </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>