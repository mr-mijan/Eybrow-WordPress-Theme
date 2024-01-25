<?php
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
*/
function eybrow_widget_register(){

	// Footer Sidebar 01
	register_sidebar( array(
        'name' => esc_html__('Footer-01', 'eybrow'),
        'id'   => 'footer_1',
		'description'    => esc_html__( 'Add widgets here.', 'eybrow' ),
		'class'          => '',
		'before_widget'  => '<section id="%1$s" class="widget  %2$s">',
		'after_widget'   => "</section>\n",
		'before_title'   => '<h3 class="widget_title text-white">',
		'after_title'    => "</h3>\n",
		'before_sidebar' => '',
		'after_sidebar'  => '',
		'show_in_rest'   => false,
    ) );


	// Footer Sidebar 02
	register_sidebar( array(
		'name' => esc_html__('Footer-02', 'eybrow'),
		'id'   => 'footer_2',
		'description'    => esc_html__( 'Add widgets here.', 'eybrow' ),
		'class'          => '',
		'before_widget'  => '<section id="%1$s" class="widget %2$s">',
		'after_widget'   => "</section>\n",
		'before_title'   => '<h3 class="widget_title text-white">',
		'after_title'    => "</h3>\n",
		'before_sidebar' => '',
		'after_sidebar'  => '',
		'show_in_rest'   => false,
	) );

	// Footer Sidebar 03
	register_sidebar( array(
		'name' => esc_html__('Footer-03', 'eybrow'),
		'id'   => 'footer_3',
		'description'    => esc_html__( 'Add widgets here.', 'eybrow' ),
		'class'          => '',
		'before_widget'  => '<section id="%1$s" class="widget %2$s">',
		'after_widget'   => "</section>\n",
		'before_title'   => '<h3 class="widget_title text-white">',
		'after_title'    => "</h3>\n",
		'before_sidebar' => '',
		'after_sidebar'  => '',
		'show_in_rest'   => false,
	) );

	// Blog Sidebar
    register_sidebar( array(
        'name' => esc_html__('Blog Sidebar', 'eybrow'),
        'id'   => 'sidebar-1',
		'description'    => esc_html__( 'Add widgets here.', 'eybrow' ),
		'class'          => '',
		'before_widget'  => '<section id="%1$s" class="sidebar mb_60 %2$s">',
		'after_widget'   => "</section>\n",
		'before_title'   => '<h3 class="sidbar_widget_title">',
		'after_title'    => "</h3>\n",
		'before_sidebar' => '',
		'after_sidebar'  => '',
		'show_in_rest'   => false,
    ) );

	// Services Sidebar
	register_sidebar( array(
		'name' => esc_html__('Services Sidebar', 'eybrow'),
		'id'   => 'services_sidebar',
		'description'    => esc_html__( 'Add widgets here.', 'eybrow' ),
		'class'          => '',
		'before_widget'  => '<section id="%1$s" class="service-list-box mb_60 %2$s">',
		'after_widget'   => "</section>\n",
		'before_title'   => '<h3 class="">',
		'after_title'    => "</h3>\n",
		'before_sidebar' => '',
		'after_sidebar'  => '',
		'show_in_rest'   => false,
	) );

}
add_action( 'widgets_init', 'eybrow_widget_register' );

// About Widet
class eybrow_About_Image_Widget extends WP_Widget {

    // Constructor
    public function __construct() {
        parent::__construct(
            'custom_image_widget',
            'About Widget',
            array( 'description' => 'A custom widget with image upload, title, and text fields.' )
        );
    }

    // Widget form creation
    public function form( $instance ) {
        $title = isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : '';
        $text = isset( $instance['text'] ) ? esc_textarea( $instance['text'] ) : '';
        $image_url = isset( $instance['image_url'] ) ? esc_url( $instance['image_url'] ) : '';

        ?>
		
        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>">Title:</label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $title; ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'text' ); ?>">Text:</label>
            <textarea class="widefat" id="<?php echo $this->get_field_id( 'text' ); ?>" name="<?php echo $this->get_field_name( 'text' ); ?>" rows="5"><?php echo $text; ?></textarea>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'image_url' ); ?>">Image URL:</label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'image_url' ); ?>" name="<?php echo $this->get_field_name( 'image_url' ); ?>" type="text" value="<?php echo $image_url; ?>" />
            <input class="button widefat" type="button" value="Upload Image" onclick="uploadImage(this);" />
            <script>
                function uploadImage(button) {
                    var customUploader = wp.media({
                        title: 'Choose Image',
                        button: {
                            text: 'Choose Image'
                        },
                        multiple: false
                    });

                    customUploader.on('select', function () {
                        var attachment = customUploader.state().get('selection').first().toJSON();
                        jQuery(button).prev().val(attachment.url);
                    });

                    customUploader.open();
                }
            </script>
        </p>
        <?php
    }

    // Widget update
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( !empty( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : '';
        $instance['text'] = ( !empty( $new_instance['text'] ) ) ? sanitize_textarea_field( $new_instance['text'] ) : '';
        $instance['image_url'] = ( !empty( $new_instance['image_url'] ) ) ? esc_url_raw( $new_instance['image_url'] ) : '';

        return $instance;
    }

    // Widget display
    public function widget( $args, $instance ) {
        $title = isset( $instance['title'] ) ? apply_filters( 'widget_title', $instance['title'] ) : '';
        $text = isset( $instance['text'] ) ? wpautop( $instance['text'] ) : '';
        $image_url = isset( $instance['image_url'] ) ? esc_url( $instance['image_url'] ) : '';

		?>
		<div class="contact-info-item"><?php
        echo $args['before_widget'];
		if ( !empty( $image_url ) ) {
            echo '<img class="icon-box" src="' . $image_url . '" alt="' . $title . '" />';
        }
        if ( !empty( $title ) ) {
            echo $args['before_title'] . $title . $args['after_title'];
        }
        echo '<div class="widget-text text-white">' . $text . '</div>';
        echo $args['after_widget'];
		?></div><?php
    }
}

// Register the widget
function register_custom_about_image_widget() {
    register_widget( 'eybrow_About_Image_Widget' );
}
add_action( 'widgets_init', 'register_custom_about_image_widget' );


// Custom Post Category
class Custom_Post_Type_Category_Widget extends WP_Widget {

    function __construct() {
        parent::__construct(
            'custom_post_type_category_widget',
            __('Services Categories','eybrow'),
            array('description' => __('Display categories for your custom post type','eybrow'))
        );
    }

    public function widget($args, $instance) {
        // Output widget content
        echo $args['before_widget'];
        echo $args['before_title'] . $instance['title'] . $args['after_title'];

        $taxonomy = 'services_category';
        $post_type = 'services';

        $categories = get_categories(array(
            'taxonomy' => $taxonomy,
            'orderby' => 'name',
            'show_count' => $instance['show_count'],
            'hierarchical' => $instance['hierarchical'],
        ));

        if ($categories) {
            echo '<ul>';
            foreach ($categories as $category) {
                echo '<li><a href="' . get_term_link($category) . '">' . $category->name . '</a></li>';
            }
            echo '</ul>';
        }

        echo $args['after_widget'];
    }

    public function form($instance) {
        // Widget form fields
        $title = isset($instance['title']) ? esc_attr($instance['title']) : '';
        $show_count = isset($instance['show_count']) ? (bool) $instance['show_count'] : false;
        $hierarchical = isset($instance['hierarchical']) ? (bool) $instance['hierarchical'] : false;

        // Output widget admin form
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:','eybrow'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
        </p>
        <p>
            <input type="checkbox" id="<?php echo $this->get_field_id('show_count'); ?>" name="<?php echo $this->get_field_name('show_count'); ?>" <?php checked($show_count); ?> />
            <label for="<?php echo $this->get_field_id('show_count'); ?>"><?php _e('Show Count','eybrow'); ?></label>
        </p>
        <p>
            <input type="checkbox" id="<?php echo $this->get_field_id('hierarchical'); ?>" name="<?php echo $this->get_field_name('hierarchical'); ?>" <?php checked($hierarchical); ?> />
            <label for="<?php echo $this->get_field_id('hierarchical'); ?>"><?php _e('Hierarchical','eybrow'); ?></label>
        </p>
        <?php
    }

    public function update($new_instance, $old_instance) {
        // Save widget form data
        $instance = array();
        $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
        $instance['show_count'] = isset($new_instance['show_count']) ? (bool) $new_instance['show_count'] : false;
        $instance['hierarchical'] = isset($new_instance['hierarchical']) ? (bool) $new_instance['hierarchical'] : false;

        return $instance;
    }
}

// Register the widget
function register_custom_post_type_category_widget() {
    register_widget('Custom_Post_Type_Category_Widget');
}
add_action('widgets_init', 'register_custom_post_type_category_widget');
