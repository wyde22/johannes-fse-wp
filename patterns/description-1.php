<?php

/**
   * Title: Description 1
   * Slug: johannesfse-description-1
   * Description: Block with label, title, excerpt and two buttons
   * Categories: intro
   * Keywords: intro, description, image
   * Viewport Width: 1200
   * Block Types:
   * Post Types:
   * Inserter: true
   */

?>

<!-- wp:group {"metadata":{"name":"Description 1"},"className":"description-1","layout":{"type":"constrained"}} -->
<div class="wp-block-group description-1"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"right":"var:preset|spacing|3xlarge"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-right:var(--wp--preset--spacing--3-xlarge)"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"p-small"} -->
<p class="has-p-small-font-size" style="text-transform:uppercase">label</p>
<!-- /wp:paragraph -->

<!-- wp:post-title /-->

<!-- wp:post-excerpt {"style":{"spacing":{"padding":{"top":"var:preset|spacing|xlarge","bottom":"var:preset|spacing|xlarge"}}}} /-->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-fill","style":{"border":{"radius":"0px"},"typography":{"textTransform":"uppercase"}}} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button" style="border-radius:0px;text-transform:uppercase">button label</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline","style":{"border":{"radius":"0px"},"typography":{"textTransform":"uppercase"}}} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" style="border-radius:0px;text-transform:uppercase">button label</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"aspectRatio":"3/4","scale":"cover"} -->
<figure class="wp-block-image"><img alt="" style="aspect-ratio:3/4;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->