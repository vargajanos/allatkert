<?php
/**
 * Title: Banner
 * Slug: wildworld/banner
 * Categories: wildworld, banner
 */
?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px"}}}} -->
<div class="wp-block-group" style="margin-top:0px"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() . '/images/slider.jpg'); ?>","id":595,"dimRatio":40,"minHeight":700,"align":"full","style":{"spacing":{"padding":{"top":"20px","right":"20px","bottom":"20px","left":"20px"}}}} -->
<div class="wp-block-cover alignfull" style="padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px;min-height:700px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-40 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-595" alt="" src="<?php echo esc_url( get_template_directory_uri() . '/images/slider.jpg'); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"style":{"spacing":{"margin":{"top":"0px"}},"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1"}},"fontSize":"banner-title"} -->
<h2 class="wp-block-heading has-banner-title-font-size" style="margin-top:0px;font-style:normal;font-weight:700;line-height:1"><?php esc_html_e('Welcome To The Wildworld','wildworld'); ?></h2>
<!-- /wp:heading -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":"0px"},"typography":{"letterSpacing":"2px","fontStyle":"normal","fontWeight":"700"}},"className":"is-style-outline","fontSize":"medium"} -->
<div class="wp-block-button has-custom-font-size is-style-outline has-medium-font-size" style="font-style:normal;font-weight:700;letter-spacing:2px"><a class="wp-block-button__link wp-element-button" style="border-radius:0px"><?php esc_html_e('GET QUOTE','wildworld'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->