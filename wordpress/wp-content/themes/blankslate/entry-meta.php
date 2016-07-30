<?php global $authordata; ?>
<div class="entry-meta">
<span class="meta-prep meta-prep-entry-date"><?php _e('Published', 'blankslate'); ?> </span>
<span class="entry-date"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php the_time( get_option( 'date_format' ) ); ?></abbr></span>
</div>