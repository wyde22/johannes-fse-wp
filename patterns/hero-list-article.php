<?php

/**
  * Title: Hero list article
   * Slug: johannesfse-hero-list-article
   * Description: Hero list article with title and image of post
   * Categories: intro
   * Keywords: intro, post
   * Viewport Width: 1200
   * Block Types:
   * Post Types:
   * Inserter: true
   */

?>

<!-- wp:group {"metadata":{"name":"Hero list article"},"className":"hero-list-article","style":{"spacing":{"padding":{"top":"var:preset|spacing|base","bottom":"var:preset|spacing|base"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group hero-list-article" style="padding-top:var(--wp--preset--spacing--base);padding-bottom:var(--wp--preset--spacing--base)"><!-- wp:heading -->
<h2 class="wp-block-heading">Nos actualités</h2>
<!-- /wp:heading -->

<!-- wp:columns {"style":{"spacing":{"padding":{"top":"var:preset|spacing|xlarge"}}}} -->
<div class="wp-block-columns" style="padding-top:var(--wp--preset--spacing--xlarge)"><!-- wp:column {"style":{"spacing":{"padding":{"right":"var:preset|spacing|xlarge"}}}} -->
<div class="wp-block-column" style="padding-right:var(--wp--preset--spacing--xlarge)"><!-- wp:post-featured-image {"aspectRatio":"4/3"} /--></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:post-date {"fontSize":"p-default"} /-->

<!-- wp:post-title {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|xlarge"}}}} /-->

<!-- wp:post-terms {"term":"category","className":"is-style-rounded-border","style":{"elements":{"link":{"color":{"text":"var:preset|color|johannes-grays-100"}}}},"textColor":"johannes-grays-100","fontSize":"p-default"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->