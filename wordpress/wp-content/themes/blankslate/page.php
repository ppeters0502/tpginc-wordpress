<?php get_header(); ?>
<div id="PagePanelOne">
    <div id="PagePanelOneHeader">
        <span id="PageHeaderText"><?php echo get_the_title(); ?></span>
    </div>
    <?php get_sidebar(); ?> 
        <div id="PagePanelOneFooter">
            <?php $my_query = new WP_Query('category_name=ColumnFooter&showposts=1&post_status=publish'); ?>
            <?php while ($my_query->have_posts()) :
                      $my_query->the_post(); ?>
            <?php the_content(); ?>
            <?php endwhile; ?>
    </div>
</div>
<div id="PagePanelTwo">
    <div id="PageContent">
        <?php if ( have_posts() ) :
                  while ( have_posts() ) :
                      the_post();
                      the_content();
                  endwhile;
              endif; ?>
    </div>
</div>
<?php get_footer(); ?>