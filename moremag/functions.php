<?php
/* Child theme generated with WPS Child Theme Generator */
if (!function_exists('moremag_theme_enqueue_styles')) {
    add_action('wp_enqueue_scripts', 'moremag_theme_enqueue_styles');

    function moremag_theme_enqueue_styles()
    {
        $min = defined('SCRIPT_DEBUG') && SCRIPT_DEBUG ? '' : '.min';
        $parent_style = 'morenews-style';        
        wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap' . $min . '.css');
        wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css');
        wp_enqueue_style(
            'moremag',
            get_stylesheet_directory_uri() . '/style.css',
            array('bootstrap', $parent_style),
            wp_get_theme()->get('Version')
        );
    }
}

// Set up the WordPress core custom background feature.
add_theme_support('custom-background', apply_filters('morenews_custom_background_args', array(
    'default-color' => 'f5f5f5',
    'default-image' => '',
)));

function moremag_filter_default_theme_options($defaults)
{
    $defaults['site_title_font_size'] = 56;    
    $defaults['secondary_color'] = '#0c794f';    
    $defaults['select_main_banner_layout_section'] = 'layout-5';
    $defaults['site_title_uppercase']  = 0;
    $defaults['flash_news_title']  = __('Breaking News', 'moremag');
    $defaults['show_watch_online_section']  = 0;  
    $defaults['global_show_min_read'] = 'no';
    $defaults['aft_custom_title']  = __('Subscribe', 'moremag');
    $defaults['main_latest_news_section_title']  = __("Editor's Picks", 'moremag');
    $defaults['main_popular_news_section_title']  = __('Trending Now', 'moremag');
    $defaults['frontpage_content_type']  = 'frontpage-widgets-and-content';
    return $defaults;
}
add_filter('morenews_filter_default_theme_options', 'moremag_filter_default_theme_options', 1);