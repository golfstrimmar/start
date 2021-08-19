<section class="projects" id="projects">
      <div class="container">
        <div class="projects__title">
          <h2 class="_f-2">Проекты</h2>
        </div>
        <ul class="projects__body slider-js-posts-projects slider">
        
  <?php  
      global $post;
      $args = array(       
         'post_type'=>'start-projects',
         'publish' => true,
         'numberposts' => 200,
        );
        
      $projects = get_posts($args);  
      $reversed = array_reverse($projects);
     
     if ($projects ) {
     
      foreach($reversed as $post){
        setup_postdata( $post );
        $post_id = $post->ID;
        $post_title = $post->post_title; 
        $post_text=$post->post_content;  
        $image=get_the_post_thumbnail_url($post_id, 'projects');  
        $link = esc_url( get_permalink( $post_id ) );
?>



          <li class="projects__item projects-item">
          <div class=" imgs">
                 <img src="<?php echo $image?>"  alt="img">
            </div>
            <div class="projects-item__body">
              <div class="projects-item__title  _f-4"><?php echo $post_title ?></div>
              <div class="projects-item__text  _f-5"><?php the_excerpt(); ?></div>
              <div class="projects-item__button"><a class="btn btn--success" href="<?php echo $link ?>">Кнопка</a></div>
            </div>
          </li>

<?php 
  	}
  } else {
    ?>
<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php  
    }
    wp_reset_postdata();
      ?>  
        

        </ul>
      </div>
    </section>









