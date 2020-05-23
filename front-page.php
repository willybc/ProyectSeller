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
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M2 22a8 8 0 1 1 16 0H2zm8-9c-3.315 0-6-2.685-6-6s2.685-6 6-6 6 2.685 6 6-2.685 6-6 6zm7.363 2.233A7.505 7.505 0 0 1 22.983 22H20c0-2.61-1-4.986-2.637-6.767zm-2.023-2.276A7.98 7.98 0 0 0 18 7a7.964 7.964 0 0 0-1.015-3.903A5 5 0 0 1 21 8a4.999 4.999 0 0 1-5.66 4.957z"/></svg>
                        </div>
                        <div class="card-box">
                            <h4 class="card-title py-3 mbr-fonts-style display-5">Quienes Somos?</h4>
                            <p class="mbr-text mbr-fonts-style display-7">Somos un grupo de estudiantes de programacion con la mejor disposicion para nuestros clientes.</p>
                        </div>
                    </div>

                    <div class="card p-3 col-12 col-md-6 col-lg-4">
                        <div class="card-img pb-3">
                        <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm-3.5-8v2H11v2h2v-2h1a2.5 2.5 0 1 0 0-5h-4a.5.5 0 1 1 0-1h5.5V8H13V6h-2v2h-1a2.5 2.5 0 0 0 0 5h4a.5.5 0 1 1 0 1H8.5z"/></svg></div>
                        </div>
                        <div class="card-box">
                            <h4 class="card-title py-3 mbr-fonts-style display-5">Buenos precios</h4>
                            <p class="mbr-text mbr-fonts-style display-7">Si bien creemos en la calidad, valoramos que nuestros productos sean tan baratos como la calidad de ellos.</p>
                        </div>
                    </div>                  

                    <div class="card p-3 col-12 col-md-6 col-lg-4">
                        <div class="card-img pb-3">
                        <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M14.121 10.48a1 1 0 0 0-1.414 0l-.707.706a2 2 0 1 1-2.828-2.828l5.63-5.632a6.5 6.5 0 0 1 6.377 10.568l-2.108 2.135-4.95-4.95zM3.161 4.468a6.503 6.503 0 0 1 8.009-.938L7.757 6.944a4 4 0 0 0 5.513 5.794l.144-.137 4.243 4.242-4.243 4.243a2 2 0 0 1-2.828 0L3.16 13.66a6.5 6.5 0 0 1 0-9.192z"/></svg></div>
                        </div>
                        <div class="card-box">
                            <h4 class="card-title py-3 mbr-fonts-style display-5">Confiables</h4>
                            <p class="mbr-text mbr-fonts-style display-7">Para asegurarnos que nuestros clientes confien en nosotros, siempre nos esforzamos por se lo mas confiables posible</p>
                        </div>
                    </div>

                    <div class="card p-3 col-12 col-md-6 col-lg-4">
                        <div class="card-img pb-3">
                        <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M3 10h18v10.004c0 .55-.445.996-.993.996H3.993A.994.994 0 0 1 3 20.004V10zm6 2v2h6v-2H9zM2 4c0-.552.455-1 .992-1h18.016c.548 0 .992.444.992 1v4H2V4z"/></svg></div>
                        </div>
                        <div class="card-box">
                            <h4 class="card-title py-3 mbr-fonts-style display-5">Stock</h4>
                            <p class="mbr-text mbr-fonts-style display-7">Productos en todo momento para que siempre pueda recoger lo que necesite, cuando lo necesite</p>
                        </div>
                    </div>

                    <div class="card p-3 col-12 col-md-6 col-lg-4">
                        <div class="card-img pb-3">
                        <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M13 10h7l-9 13v-9H4l9-13z"/></svg></div>
                        </div>
                        <div class="card-box">
                            <h4 class="card-title py-3 mbr-fonts-style display-5">Delivery al instante</h4>
                            <p class="mbr-text mbr-fonts-style display-7">Sus productos eran enviados inmediatamente despues de que se complete la compra y se verifique el pago</p>
                        </div>
                    </div>

                    <div class="card p-3 col-12 col-md-6 col-lg-4">
                        <div class="card-img pb-3">
                            <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M21 8a2 2 0 0 1 2 2v4a2 2 0 0 1-2 2h-1.062A8.001 8.001 0 0 1 12 23v-2a6 6 0 0 0 6-6V9A6 6 0 1 0 6 9v7H3a2 2 0 0 1-2-2v-4a2 2 0 0 1 2-2h1.062a8.001 8.001 0 0 1 15.876 0H21zM7.76 15.785l1.06-1.696A5.972 5.972 0 0 0 12 15a5.972 5.972 0 0 0 3.18-.911l1.06 1.696A7.963 7.963 0 0 1 12 17a7.963 7.963 0 0 1-4.24-1.215z"/></svg></div>
                        </div>
                        <div class="card-box">
                            <h4 class="card-title py-3 mbr-fonts-style display-5">Soporte 24/7</h4>
                            <p class="mbr-text mbr-fonts-style display-7">Tenemos un equipo de soporte que siempre estara listo para ayudarlo si ocurriera algo.</p>
                        </div>
                    </div>

                    


                </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>