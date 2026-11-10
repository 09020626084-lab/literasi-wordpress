<?php
/**
 * Title: Banner
 * Slug: thryve-corporate-plus/featured-banner
 * Categories: thryve-corporate-plus
 * Description: A hero section with a title, a paragraph, a CTA button, and an image.
 * Block Types: core/post-content
 * Post Types: page, wp_template
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/banner.jpg","id":718,"dimRatio":90,"isUserOverlayColor":true,"minHeight":70,"minHeightUnit":"vh","customGradient":"linear-gradient(176deg,rgb(0,3,5) 0%,rgb(0,38,92) 100%)","contentPosition":"center center","sizeSlug":"full","metadata":{"name":"Banner","description":"A hero section with a title, a paragraph, a CTA button, and an image.","categories":["thryve-corporate-plus"]},"className":"thryve-responsive-image","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20","top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover thryve-responsive-image" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--20);min-height:70vh"><img class="wp-block-cover__image-background wp-image-718 size-full" alt="" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/banner.jpg" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-90 has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(176deg,rgb(0,3,5) 0%,rgb(0,38,92) 100%)"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"className":"wow animate__animated animate__fadeInUp ","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0","right":"0","left":"0"}}},"layout":{"type":"constrained","contentSize":"800px"}} -->
<div class="wp-block-group wow animate__animated animate__fadeInUp" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:heading {"level":1,"className":"is-style-default thryve-heading","style":{"typography":{"fontStyle":"normal","fontWeight":"500","lineHeight":"1.1","textAlign":"center","fontSize":"5rem"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"white"} -->
<h1 class="wp-block-heading has-text-align-center is-style-default thryve-heading has-white-color has-text-color has-link-color" style="margin-top:0;margin-bottom:0;font-size:5rem;font-style:normal;font-weight:500;line-height:1.1"><?php echo esc_html__( 'Innovative Solutions for a Better Future', 'thryve-corporate-plus' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:group {"layout":{"type":"constrained","contentSize":"700px","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"typography":{"textAlign":"center"}},"fontSize":"medium"} -->
<p class="has-text-align-center has-medium-font-size" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"><?php echo esc_html__( 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words.', 'thryve-corporate-plus' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"0"},"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|30"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons" style="margin-top:0"><!-- wp:button {"backgroundColor":"white","textColor":"secondary-bg","style":{"spacing":{"padding":{"left":"50px","right":"50px"}},"elements":{"link":{"color":{"text":"var:preset|color|secondary-bg"}}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-secondary-bg-color has-white-background-color has-text-color has-background has-link-color wp-element-button" href="#" style="padding-right:50px;padding-left:50px">Read more</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline","style":{"spacing":{"padding":{"left":"50px","right":"50px"}},"border":{"width":"1px"}},"borderColor":"white"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-border-color has-white-border-color wp-element-button" href="#" style="border-width:1px;padding-right:50px;padding-left:50px"><?php echo esc_html__( 'Explore here', 'thryve-corporate-plus' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->