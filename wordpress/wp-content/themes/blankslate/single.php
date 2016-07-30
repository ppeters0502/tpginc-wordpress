<?php get_header(); ?>
<div id="PostPanelOne">
    <div id="PostPanelOneHeader">
        <span id="PostHeaderText">News</span>
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

<div id="PostPanelTwo">
    <div id="PostContent">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
            the_content();
        endwhile; endif; ?>
    </div>
</div>

<div id="PostPanelThree">
    <div id="PostPanelThreeHeader">
            <?php $my_query = new WP_Query('category_name=Banner1&showposts=1&post_status=publish'); ?>
            <?php while ($my_query->have_posts()) :
                      $my_query->the_post(); ?>
            <?php the_content(); ?>
            <?php endwhile; ?>
    </div>
    <div id="PostPanelThreeMid">
            <?php $my_query = new WP_Query('category_name=Banner2&showposts=1&post_status=publish'); ?>
            <?php while ($my_query->have_posts()) :
                      $my_query->the_post(); ?>
            <?php the_content(); ?>
            <?php endwhile; ?>
    </div>
    <div id="PostPanelThreeBottom">
            <?php $my_query = new WP_Query('category_name=Banner3&showposts=1&post_status=publish'); ?>
            <?php while ($my_query->have_posts()) :
                      $my_query->the_post(); ?>
            <?php the_content(); ?>
            <?php endwhile; ?>
    </div>
</div>
<?php get_footer(); ?>