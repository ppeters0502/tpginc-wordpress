<?php
/*
Template Name: Archives
 */
get_header(); ?>

<div id="PostPanelOne">
    <div id="PostPanelOneHeader">
        <span id="PostHeaderText"><?php the_title(); ?></span>
    </div>
    <?php get_sidebar(); ?>
    <div id="PostPanelOneFooter">
            <?php $my_query = new WP_Query('category_name=ColumnFooter&showposts=1&post_status=publish'); ?>
            <?php while ($my_query->have_posts()) :
                      $my_query->the_post(); ?>
            <?php the_content(); ?>
            <?php endwhile; ?>
    </div>
</div>

<div id="PagePanelTwo">
    <div id="PageContent">
        <div id="container">
	        <div id="archiveContent">

		        <?php the_post(); ?>
		        <h1 class="entry-title"><?php the_title(); ?></h1>		
                <hr/>
                <?php
                $args = array( 'category_name' => 'WhatsNew' );
                $postslist = get_posts( $args );
                foreach ($postslist as $post) :
                    setup_postdata($post); ?> 
	                <a href="<?php echo get_permalink();?>">                
                    <div id="archiveItem">
                        <img alt="" src="/wp-content/uploads/newsIcon.gif" class="newsIcon"/>
                        <h2><?php the_title(); ?></h2>                      
                        
                        <h4 id="archiveExcerpt"><?php the_excerpt(); ?></h4>
                        <span id="archiveDate"><?php the_time('m/d'); ?></span>
                        <span id="archiveYear"><?php the_time('Y'); ?></span>                        
	                </div></a>                   
                    
                <?php endforeach; ?>
                
	        </div><!-- #archiveContent -->
        </div><!-- #container -->
    </div>
</div>
<?php get_footer(); ?>