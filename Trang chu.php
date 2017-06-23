<?php
/*
Template name: Trang Chủ
*/get_header();?>
<content id="content">
	<div class="row container-fluid">
	     <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
	     	 <?php get_sidebar(); ?>
	     </div>
		<div class="products col-xs-9 col-sm-9 col-md-9 col-lg-9">
		    <h2 class="sanphamnoibat">SẢN PHẨM NỔI BẬT </h2><hr>
		    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
		        <ul>
					 <?php $args = array( 'post_type' => 'product',
					   'posts_per_page' => 12
					   );
					  $loop = new WP_Query( $args );
					  if ( $loop->have_posts() ) {
					   while ( $loop->have_posts() ) : $loop->the_post();
					    woocommerce_get_template_part( 'content', 'product' );
					   endwhile;
					  } else {
					   echo __( 'No products found' );
					  }
					  wp_reset_postdata();
					 ?>
			    </ul> 
		    </div>
		    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
		        <ul>
					 <?php $args = array( 'post_type' => 'product',
					   'posts_per_page' => 12
					   );
					  $loop = new WP_Query( $args );
					  if ( $loop->have_posts() ) {
					   while ( $loop->have_posts() ) : $loop->the_post();
					    woocommerce_get_template_part( 'content', 'product' );
					   endwhile;
					  } else {
					   echo __( 'No products found' );
					  }
					  wp_reset_postdata();
					 ?>
			    </ul>
		    </div>
		    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
		        <ul>
					 <?php $args = array( 'post_type' => 'product',
					   'posts_per_page' => 12
					   );
					  $loop = new WP_Query( $args );
					  if ( $loop->have_posts() ) {
					   while ( $loop->have_posts() ) : $loop->the_post();
					    woocommerce_get_template_part( 'content', 'product' );
					   endwhile;
					  } else {
					   echo __( 'No products found' );
					  }
					  wp_reset_postdata();
					 ?>
			    </ul> 
		    </div>
		</div>
	</div> 
</content>


<?php 
get_footer();