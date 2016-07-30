<?php get_header(); ?>
<div id="content">
    <div class="sliderSpacer">
    </div>
    <div class="slider">
    <?php 	if (function_exists('get_thethe_image_slider')) {
                  print get_thethe_image_slider('mainSlider');
              } ?>
    </div>
    <div class="bottomPanel">
        <div class="panelOne">
            <?php $my_query = new WP_Query('category_name=HomePageArticle&showposts=1&post_status=publish'); ?>
            <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
            <?php the_content(); ?>
            <?php endwhile; ?>
        </div>
        <div class="panelTwo">
                <h2>THE LATEST</h2>
                <?php
                $args = array( 'numberposts' => 4, 'category_name' => 'WhatsNew' );
                $postslist = get_posts( $args );
                foreach ($postslist as $post) :  setup_postdata($post); ?> 
	            <a href="<?php echo get_permalink();?>">                
                    <div class="newsLine">
                        <img alt="" src="/wp-content/uploads/newsIcon.gif" class="newsIcon"/>
                        <h2 id="newsText"><?php the_title(); ?></h2>
                        <span class="date"><?php the_time('m/d'); ?></span>
                        <span class="year"><?php the_time('Y'); ?></span>                        
	            </div></a>
                <?php endforeach; ?>
                <a id="newsLink" href="/?page_id=96/"><h2>see all news ></h2></a>
	        <img alt="" src="wp-content/uploads/telemarketer.gif" class="extraImage"/>
        </div>
    </div>
</div>

<?php get_footer(); ?>