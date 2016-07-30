<?php get_header(); ?>
<div id="PostPanelOne">
    <div id="PostPanelOneHeader">
        <span id="PostHeaderText">Error</span>
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
        <div id="post-0" class="post error404 not-found">
            <h1 class="entry-title"><?php _e('Not Found', 'blankslate'); ?></h1>
            <div class="entry-content">
                <h2><?php _e('Nothing found for the requested page. Try a search instead?', 'blankslate'); ?></h2>
            </div>
        </div>
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