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
        <?php if ( have_posts() ) : ?>
            <h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'blankslate' ), '<span>' . get_search_query()  . '</span>' ); ?></h1>
            <hr/>
            <?php get_template_part( 'nav', 'above' ); ?>
            <?php while ( have_posts() ) :
                      the_post() ?>
            <?php get_template_part( 'entry' ); ?>
            <?php endwhile; ?>
            <?php get_template_part( 'nav', 'below' ); ?>
        <?php else : ?>
        <div id="post-0" class="post no-results not-found">
            <h2 class="entry-title"><?php _e( 'Nothing Found', 'blankslate' ) ?></h2>
            <div class="entry-content">
                <h4><?php _e( 'Sorry, nothing matched your search. Please try again.', 'blankslate' ); ?></h4>
            </div>
        </div>
        <?php endif; ?>
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