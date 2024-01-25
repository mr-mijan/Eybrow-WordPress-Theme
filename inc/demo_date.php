<?php
function ocdi_import_files() {
    return [
      [
        'import_file_name'             => 'Demo Import',
        // 'categories'                   => [ 'Category 1', 'Category 2' ],
        'local_import_file'            => trailingslashit( get_template_directory() ) . 'inc/demo/content-demo.xml',
        'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'inc/demo/widget-date.wie',
        // 'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'inc/demo/customizer.dat',

        // 'import_preview_image_url'     => 'http://www.your_domain.com/ocdi/preview_import_image1.jpg',
        'preview_url'                  => trailingslashit( get_template_directory() ) .'screenshot.png',
      ],
    ];
  }
  add_filter( 'ocdi/import_files', 'ocdi_import_files' );

  function ocdi_after_import_setup() {
    // Assign menus to their locations.
      $main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );
    
      set_theme_mod( 'nav_menu_locations', [
              'Header_Menu' => $main_menu->term_id, // replace 'main-menu' here with the menu location identifier from register_nav_menu() function in your theme.
          ]
      );
    }
      // Get the front page.
  $front_page = get_posts(
    [
      'post_type'              => 'page',
      'title'                  => 'home',
      'post_status'            => 'all',
      'numberposts'            => 1,
      'update_post_term_cache' => false,
      'update_post_meta_cache' => false,
    ]
  );

      add_action( 'ocdi/after_import', 'ocdi_after_import_setup' );