<section class="posts" id="posts">
      <div class="container">
        <h2  class="_f-1">Посты</h2>
        <div class="posts__body slider-js-posts-side slider">
         
<?php  
      global $post;
      $args = array(       
         'post_type'=>'post',
         'publish' => true,
         'numberposts' => 200,
         'category' => 41
        );
        
      $projects = get_posts($args);  
      $reversed = array_reverse($projects);
     
     if ($projects ) {
     
      foreach($reversed as $post){
        setup_postdata( $post );
        $post_id = $post->ID;
        $post_title = $post->post_title; 
        $post_text=$post->post_content;  
        $image=get_the_post_thumbnail_url($post_id, 'post');  
        $link = esc_url( get_permalink( $post_id ) );
?>
        <div class="posts__item object-card">
        <div class="object-card__img imgs">
                <img src="<?php echo $image?>" alt="img">
            </div>
            <div class="object-card__body">
              <div class="object-card__title">
                <h3 class="_f-4"><?php echo $post_title ?></h3>
              </div>
              <div class="object-card__text _f-5"><?php the_excerpt(); ?></div>
              <div class="object-card__button"><a class="btn btn--success" href="<?php echo $link ?>">more</a></div>
            </div>
          </div>
<?php 
  	}
  } else {
    ?>
<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php  
    }
    wp_reset_postdata();
      ?>  
                        

  
  
        </div>
      </div>
    </section>


<!-- ------------------- -->

    <section class="posts" id="posts-low">
      <div class="container">
        <h2 class="_f-1">Посты кнопки внизу</h2>
        <div class="posts__body slider-js-posts-low slider">
        <?php  
      global $post;
      $args = array(       
         'post_type'=>'post',
         'publish' => true,
         'numberposts' => 200,
         'category' => 41
        );
        
      $projects = get_posts($args);  
      $reversed = array_reverse($projects);
     
     if ($projects ) {
     
      foreach($reversed as $post){
        setup_postdata( $post );
        $post_id = $post->ID;
        $post_title = $post->post_title; 
        $post_text=$post->post_content;  
        $image=get_the_post_thumbnail_url($post_id, 'post');  
        $link = esc_url( get_permalink( $post_id ) );
?>
     <div class="posts__item object-card">
            <div class="object-card__img imgs">
                <img src="<?php echo $image?>" alt="img">
            </div>
            <div class="object-card__body">
              <div class="object-card__title">
                <h3  class="_f-4"><?php echo $post_title ?></h3>
              </div>
              <div class="object-card__text _f-5"><?php the_excerpt(); ?></div>
              <div class="object-card__button"><a class="btn btn--success" href="<?php echo $link ?>">more</a></div>
            </div>
          </div>
<?php 
  	}
  } else {
    ?>
<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php  
    }
    wp_reset_postdata();
      ?>  
        </div>
      </div>
    </section>

<!-- --------------- -->


 
<section class="posts" id="posts-num">
      <div class="container">
        <h2 class="_f-1">Посты кнопки внизу, стрелки. </h2>
        <div class="posts__body slider-js-posts-num slider">
        <?php  
      global $post;
      $args = array(       
         'post_type'=>'post',
         'publish' => true,
         'numberposts' => 200,
         'category' => 41
        );
        
      $projects = get_posts($args);  
      $reversed = array_reverse($projects);
     
     if ($projects ) {
     
      foreach($reversed as $post){
        setup_postdata( $post );
        $post_id = $post->ID;
        $post_title = $post->post_title; 
        $post_text=$post->post_content;  
        $image=get_the_post_thumbnail_url($post_id, 'post');  
        $link = esc_url( get_permalink( $post_id ) );
?>
     <div class="posts__item object-card">
            <div class="object-card__img imgs">
                <img src="<?php echo $image?>" alt="img">
            </div>
            <div class="object-card__body">
              <div class="object-card__title">
                <h3  class="_f-4"><?php echo $post_title ?></h3>
              </div>
              <div class="object-card__text _f-5"><?php the_excerpt(); ?></div>
              <div class="object-card__button"><a class="btn btn--success" href="<?php echo $link ?>">more</a></div>
            </div>
          </div>
<?php 
  	}
  } else {
    ?>
<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php  
    }
    wp_reset_postdata();
      ?>  
        </div>
      </div>
    </section>