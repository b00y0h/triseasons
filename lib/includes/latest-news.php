 

			<ul class="news-sidebar">
            <li>
    	
             <?php
                    $LatestNewsTitle=get_option('LatestNewsTitle');
                    if ($LatestNewsTitle) { 
                    echo ' <h3>';                      
                    echo $LatestNewsTitle;
					echo '</h3>';

            } else { ?>
        
                     <h3>Latest News </h3>
            <?php }
                    $LatestNews=get_option("LatestNews");
                    query_posts("cat=$LatestNews&showposts=".get_option("LatestNewspostlimit")); ?>
                    <?php while (have_posts()) : the_post(); ?>
                    
                     <div class="latest-news-sidebar">                           
                        <strong> <?php the_time('D,M, Y') ?>   </strong>  <br />  
             <?php the_content_rss('cut', TRUE, '',11); ?> <br />  <a href="<?php the_permalink() ?>" class="view-more2"> Read More</a>
             
      			</div>
                 <?php endwhile;?> 
              </li> 
     
             </ul> 	
              <p class="view-more"> <a href="<?php echo get_option('NewsViewMore'); ?>" ><strong>View More News</strong></a> </p> 
            
             
            <?php   wp_reset_query();  ?>
   

    