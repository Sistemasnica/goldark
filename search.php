<?php get_header(); ?>

<div class="container">

<center>
  <form class="search" method="get" action="<?php echo home_url(); ?>" role="search">
  <input type="search" class="search-Productos" placeholder="<?php echo esc_attr_x( 'Buscar', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
  <button type="submit" role="button" class="btn btnBuscarPage right"/><span class="glyphicon glyphicon-search white"></span></button>
</form>
</center>
  <!-- FIN Filtrado y Busqueda -->

<?php
    global $query_string;
    $query_args = explode("&", $query_string);
    $search_query = array();

    foreach($query_args as $key => $string) {
      $query_split = explode("=", $string);
      $search_query[$query_split[0]] = urldecode($query_split[1]);
    } // foreach

    $the_query = new WP_Query($search_query);
    if ( $the_query->have_posts() ) : 
    ?>
    <!-- the loop -->  
   <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

      <div class="col-md-4">

           <?php
           $imagen = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full');
           $ruta_imagen = $imagen[0];
           ?>

                <a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>

      </div>

    <?php endwhile; ?>

    <!-- end of the loop -->

    <?php wp_reset_postdata(); ?>

<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

</div>

<?php get_footer(); ?>