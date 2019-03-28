<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<!--[if IE]>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /><![endif]-->
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php wp_head(); ?>
    <style>
        <?php
        $cgs_fashion_link_color = get_theme_mod('cgs_fashion_link_color');
        if(!empty($cgs_fashion_link_color)){
            echo 'a{color: '.esc_html($cgs_fashion_link_color).' !important;}';
        }

        $cgs_fashion_button_color = get_theme_mod('cgs_fashion_button_color');
        if(!empty($cgs_fashion_button_color)){
            echo '.btn-primary{background-color: '.esc_html($cgs_fashion_button_color).' !important; border-color: '.esc_html($cgs_fashion_button_color).' !important;}';
            echo 'nav.pagination .page-numbers{background: '.esc_html($cgs_fashion_button_color).' !important;}';
        }

        $cgs_fashion_h1_color = get_theme_mod('cgs_fashion_h1_color');
        $cgs_fashion_h2_color = get_theme_mod('cgs_fashion_h2_color');
        $cgs_fashion_h3_color = get_theme_mod('cgs_fashion_h3_color');
        $cgs_fashion_h4_color = get_theme_mod('cgs_fashion_h4_color');
        $cgs_fashion_p_color = get_theme_mod('cgs_fashion_p_color');
        $cgs_background_color = get_theme_mod('background_color');
        $cgs_header_textcolor = get_theme_mod('header_textcolor');

        if(!empty($cgs_fashion_h1_color)){
            echo 'h1{color: '.esc_html($cgs_fashion_h1_color).' !important;}';
        }
        if(!empty($cgs_fashion_h2_color)){
            echo 'h2{color: '.esc_html($cgs_fashion_h2_color).' !important;}';
        }
        if(!empty($cgs_fashion_h3_color)){
            echo 'h3{color: '.esc_html($cgs_fashion_h3_color).' !important;}';
        }
        if(!empty($cgs_fashion_h4_color)){
            echo 'h4{color: '.esc_html($cgs_fashion_h4_color).' !important;}';
        }
        if(!empty($cgs_fashion_p_color)){
            echo 'p{color: '.esc_html($cgs_fashion_p_color).' !important;} .post-content p, .search-results p, .main-content-wrapper p{color: '.esc_html($cgs_fashion_p_color).' !important;} .post-content li{color: '.esc_html($cgs_fashion_p_color).' !important;}';
        }
        if(!empty($cgs_background_color)){
            echo '.main-content-wrapper{background:#'.esc_html($cgs_background_color).' !important;}';
        }
        if(!empty($cgs_header_textcolor)){
            echo 'h1{color: #'.esc_html($cgs_header_textcolor).' !important;} h2{color: #'.esc_html($cgs_header_textcolor).' !important;} h3{color: #'.esc_html($cgs_header_textcolor).' !important;} h4{color: #'.esc_html($cgs_header_textcolor).' !important;} h5{color: #'.esc_html($cgs_header_textcolor).' !important;} h6{color: #'.esc_html($cgs_header_textcolor).' !important;} h1 a{color: #'.esc_html($cgs_header_textcolor).' !important;} h2 a{color: #'.esc_html($cgs_header_textcolor).' !important;} h3 a{color: #'.esc_html($cgs_header_textcolor).' !important;} h4 a{color: #'.esc_html($cgs_header_textcolor).' !important;} h5 a{color: #'.esc_html($cgs_header_textcolor).' !important;} h6 a{color: #'.esc_html($cgs_header_textcolor).' !important;}';
        }
        if (display_header_text()==true){
            echo '.header-wrapper ul.menu{padding: 10px 0 0 0};';
        }
        ?>
    </style>
</head>
<body <?php body_class(); ?>>
<div class="header-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-xl-3">
                <div class="logo">
                    <?php
                    if (display_header_text()==true){
	                    echo '<h1>'.esc_html(get_bloginfo( 'name' )).'</h1>';
	                    echo '<h2>'.esc_html(get_bloginfo('description')).'</h2>';
                    } else {
                    ?>
                        <a href="<?php echo esc_url(get_site_url()); ?>">
		                    <?php
		                    $custom_logo_id = get_theme_mod( 'custom_logo' );
		                    $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
		                    if ( has_custom_logo() ) {
			                    echo '<img src="'. esc_url( $logo[0] ) .'" alt="logo">';
		                    } else {
			                    echo esc_html(get_bloginfo( 'name' ));
		                    }
		                    ?>
                        </a>
                    <?php } ?>
                </div>
            </div>
            <div class="col-xl-9">
                <?php wp_nav_menu(array('theme_location'=>'top')); ?>
            </div>
        </div>
    </div>
</div>
<?php $cgs_fashion_header_bg_img = get_header_image(); ?>
<?php $cgs_fashion_setting_small_img = get_theme_mod('cgs_fashion_setting_small_img'); ?>
<?php if(is_home()){ ?>
	<?php if(!empty($cgs_fashion_header_bg_img)){ ?>
        <div class="banner-wrapper" style="background-image: url('<?php echo esc_url($cgs_fashion_header_bg_img); ?>')">
	<?php } else { ?>
        <div class="banner-wrapper" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/images/header_bg.jpg')">
	<?php } ?>
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="banner-img">
                    <?php if(!empty($cgs_fashion_setting_small_img)){ ?>
                        <img src="<?php echo esc_url($cgs_fashion_setting_small_img); ?>">
                    <?php } else { ?>
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/lady_in_white_dress.png">
                    <?php } ?>
                </div>
            </div>
            <div class="col-xl-6">
                <h1><?php echo esc_html(get_theme_mod('cgs_fashion_setting_h1_text')); ?></h1>
                <p><?php echo esc_html(get_theme_mod('cgs_fashion_setting_p_text')); ?></p>
            </div>
        </div>
    </div>
</div>
<?php } ?>
<?php if(is_page() || is_singular() || is_search() || is_404() || is_archive() || is_tag()){ ?>
<?php $theme_slug_customizer_select = get_theme_mod('theme_slug_customizer_select'); ?>
<?php if($theme_slug_customizer_select == 'yes'){ ?>
    <?php if(!empty($cgs_fashion_header_bg_img)){ ?>
        <div class="banner-wrapper" style="background-image: url('<?php echo esc_url($cgs_fashion_header_bg_img); ?>'); padding: 10px 0 0 0;">
    <?php } else { ?>
        <div class="banner-wrapper" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/images/header_bg.jpg'); padding: 10px 0 0 0;">
    <?php } ?>
        <div class="container">
            <div class="row">
                <div class="col-xl-2">
                    <?php if(!empty($cgs_fashion_setting_small_img)){ ?>
                        <div class="banner-img"><img src="<?php echo esc_url($cgs_fashion_setting_small_img); ?>"></div>
                    <?php } else { ?>
                        <div class="banner-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/lady_in_white_dress.png"></div>
                    <?php } ?>
                </div>
                <div class="col-xl-10"></div>
            </div>
        </div>
    </div>
    <?php } else { ?>
        <!--<div class="banner-wrapper" style="padding:17px 0 0 0;"></div>-->
    <?php } ?>
<?php } ?>