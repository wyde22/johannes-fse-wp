<?php

	/**
   * Title: Content grid 2
   * Slug: johannesfse-content-grid-2
   * Description: Block with two Query loop (five) with three buttons
   * Categories: query
   * Keywords: query, loop, grid
   * Viewport Width: 1200
   * Block Types:
   * Post Types:
   * Inserter: true
   */

?>

<!-- wp:group {"metadata":{"name":"Content grid 2"},"className":"content-grid-2","backgroundColor":"johannes-grays-50","layout":{"type":"constrained"}} -->
<div class="wp-block-group content-grid-2 has-johannes-grays-50-background-color has-background"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|3xlarge","bottom":"var:preset|spacing|3xlarge"}}},"layout":{"type":"flex","flexWrap":"nowrap","orientation":"horizontal","justifyContent":"left"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--3-xlarge);padding-bottom:var(--wp--preset--spacing--3-xlarge)"><!-- wp:query {"queryId":10,"query":{"perPage":1,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[],"format":[]},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"margin":{"right":"var:preset|spacing|3xlarge"}}},"layout":{"type":"constrained"}} -->
<!-- wp:group {"fontSize":"p-small","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group has-p-small-font-size"><!-- wp:post-terms {"term":"category","className":"is-style-rounded-border","style":{"elements":{"link":{"color":{"text":"var:preset|color|johannes-grays-100"}}}},"textColor":"johannes-grays-100"} /-->

<!-- wp:separator {"className":"is-style-vertical-pipe","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-vertical-pipe" style="margin-top:0;margin-bottom:0"/>
<!-- /wp:separator -->

<!-- wp:post-date {"style":{"elements":{"link":{"color":{"text":"var:preset|color|johannes-grays-100"}}},"typography":{"textTransform":"uppercase"}},"textColor":"johannes-grays-100"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title /-->

<!-- wp:post-excerpt {"moreText":"","style":{"spacing":{"padding":{"top":"var:preset|spacing|xlarge","bottom":"var:preset|spacing|xlarge"}}}} /-->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"typography":{"textTransform":"uppercase"},"border":{"radius":"0px"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" style="border-radius:0px;text-transform:uppercase">button label</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline","style":{"typography":{"textTransform":"uppercase"},"border":{"radius":"0px"}}} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" style="border-radius:0px;text-transform:uppercase">button label</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline","style":{"typography":{"textTransform":"uppercase"},"border":{"radius":"0px"}}} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" style="border-radius:0px;text-transform:uppercase">button label</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Ajouter un texte ou des blocs qui s’afficheront lorsqu’une requête ne renverra aucun résultat."} -->
<p>Sorry no post !</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->

<!-- wp:query {"queryId":12,"query":{"perPage":3,"pages":0,"offset":"1","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[],"format":[]},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|xlarge"}}} -->
<!-- wp:group {"fontSize":"p-small","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group has-p-small-font-size"><!-- wp:post-terms {"term":"category","className":"is-style-rounded-border","style":{"elements":{"link":{"color":{"text":"var:preset|color|johannes-grays-100"}}}},"textColor":"johannes-grays-100"} /-->

<!-- wp:separator {"className":"is-style-vertical-pipe","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-vertical-pipe" style="margin-top:0;margin-bottom:0"/>
<!-- /wp:separator -->

<!-- wp:post-date {"style":{"elements":{"link":{"color":{"text":"var:preset|color|johannes-grays-100"}}},"typography":{"textTransform":"uppercase"}},"textColor":"johannes-grays-100"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|johannes-grays-100"}}}},"textColor":"johannes-grays-100","fontSize":"p-huge"} /-->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Ajouter un texte ou des blocs qui s’afficheront lorsqu’une requête ne renverra aucun résultat."} -->
<p>Sorry no posts !</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->