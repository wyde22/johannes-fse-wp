<?php

	/**
   * Title: Content grid 1
   * Slug: johannesfse-content-grid-1
   * Description: Query loop with left content and buttons
   * Categories: query
   * Keywords: query, loop, grid
   * Viewport Width: 1200
   * Block Types:
   * Post Types:
   * Inserter: true
   */
?>

<!-- wp:group {"className":"pattern-johannes","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|2xlarge","top":"var:preset|spacing|3xlarge"}}},"backgroundColor":"johannes-grays-50","layout":{"type":"constrained"}} -->
<div class="wp-block-group pattern-johannes has-johannes-grays-50-background-color has-background" style="padding-top:var(--wp--preset--spacing--3-xlarge);padding-bottom:var(--wp--preset--spacing--2-xlarge)"><!-- wp:query {"queryId":0,"query":{"perPage":1,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[],"format":[]}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|2xlarge"}}}} -->
<!-- wp:post-terms {"term":"category","textAlign":"center","className":"is-style-decorationnone","style":{"elements":{"link":{"color":{"text":"var:preset|color|johannes-grays-100"}}},"typography":{"textTransform":"uppercase"}},"textColor":"johannes-grays-100","fontSize":"p-default"} /-->

<!-- wp:post-title {"textAlign":"center","isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|johannes-grays-100"}}}},"textColor":"johannes-grays-100"} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|xlarge"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--xlarge)"><!-- wp:read-more {"content":"button label","style":{"elements":{"link":{"color":{"text":"var:preset|color|johannes-grays-0"}}},"typography":{"textTransform":"uppercase"}},"backgroundColor":"johannes-grays-100","textColor":"johannes-grays-0"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"align":"center","placeholder":"Ajouter un texte ou des blocs qui s’afficheront lorsqu’une requête ne renverra aucun résultat."} -->
<p class="has-text-align-center">Sorry no posts !</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->

<!-- wp:query {"queryId":7,"query":{"perPage":3,"pages":0,"offset":"1","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[],"format":[]},"align":"wide","layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|2xlarge"}},"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-terms {"term":"category","className":"is-style-decorationnone","style":{"elements":{"link":{"color":{"text":"var:preset|color|johannes-grays-100"}}},"typography":{"textTransform":"uppercase"}},"textColor":"johannes-grays-100","fontSize":"p-small"} /-->

<!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|johannes-grays-100"}}}},"textColor":"johannes-grays-100","fontSize":"p-default"} /-->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"align":"center","placeholder":"Ajouter un texte ou des blocs qui s’afficheront lorsqu’une requête ne renverra aucun résultat."} -->
<p class="has-text-align-center">Sorry no posts !</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->