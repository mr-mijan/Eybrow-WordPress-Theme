<?php 
require_once get_template_directory(). '/inc/class-tgm-plugin-activation.php';

function eybrow_activation(){
    $plugins = array(
        array(
            'name' => __('One Click Demo Import', 'eybrow'),
            'slug' => 'one-click-demo-import',
            'required' => true,
        ),

        array(
            'name' => __('Contact Form 7', 'eybrow'),
            'slug' => 'contact-form-7',
            'required' => true,
        ),

        array(
            'name' => __('Eybrow Elementor Addon', 'eybrow'),
            'slug' => 'eybrow-elementor-addon',
            'source'  => get_stylesheet_directory() . '/inc/plugins/eybrow-elementor-addon.zip', // The plugin source.
            'required' => true,
        ),

        array(
            'name' => __('Elementor', 'eybrow'),
            'slug' => 'elementor',
            'required' => true,
        ),

    );
    $config = array(
        'id'            => 'eybrow_plugin_active',
        'menu'          => 'tgmpa-install-plugins',
        'parent_slug'   => 'themes.php',
        'has_notices'   => true,
    );

    tgmpa ($plugins, $config);

}
add_action('tgmpa_register', 'eybrow_activation');