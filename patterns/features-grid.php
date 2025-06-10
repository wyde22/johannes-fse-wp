<?php

/**
   * Title: Content features grid
   * Slug: johannesfse-content-features-grid
   * Description: Features grid with left content, title, paragraph and buttons
   * Categories: intro
   * Keywords: intro, grid
   * Viewport Width: 1200
   * Block Types:
   * Post Types:
   * Inserter: true
   */

?>

<!-- wp:group {"metadata":{"name":"Features grid"},"className":"features-grid","layout":{"type":"constrained"}} -->
<div class="wp-block-group features-grid"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"layout":{"selfStretch":"fixed","flexSize":"30rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"p-small"} -->
<p class="has-p-small-font-size" style="text-transform:uppercase">label</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Mon super titre</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"var:preset|spacing|xlarge","bottom":"var:preset|spacing|xlarge"}}}} -->
<p style="padding-top:var(--wp--preset--spacing--xlarge);padding-bottom:var(--wp--preset--spacing--xlarge)">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Scelerisque pellentesque pharetra quam enim porttitor gravida viverra. Tempus etiam aliquet sodales quisque consectetur pellentesque in tincidunt nam.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"typography":{"textTransform":"uppercase"},"border":{"radius":"0px"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" style="border-radius:0px;text-transform:uppercase">button label</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline","style":{"border":{"radius":"0px"},"typography":{"textTransform":"uppercase"}}} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" style="border-radius:0px;text-transform:uppercase">button label</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:columns {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|xlarge"}}}} -->
<div class="wp-block-columns" style="padding-bottom:var(--wp--preset--spacing--xlarge)"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Feature name</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Feature name</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Lorem ipsum</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Feature name</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Feature name</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Lorem ipsum</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->