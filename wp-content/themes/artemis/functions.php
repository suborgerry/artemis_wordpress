<?php

add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        // register a testimonial block.
        acf_register_block_type(array(
            'name'              => 'testimonial',
            'title'             => __('Testimonial'),
            'description'       => __('A custom testimonial block.'),
            'render_template'   => 'template-parts/blocks/testimonial/testimonial.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'testimonial', 'quote' ),
        ));
    }
};

add_theme_support( 'custom-logo' );

register_nav_menus(array(
	'top'    => 'Верхнее меню',    
	'bottom' => 'Нижнее меню'
));

function add_option_field_to_general_admin_page(){
    $options = array(
        'firm-tel'       => 'Телефон',
        'firm-email'     => 'Email',
        'firm-youtube'   => 'Ссылка на канал youtube',
        'firm-linkedin'  => 'Ссылка на профиль linkedin',
        'firm-facebook'  => 'Ссылка на страницу facebook',
        'firm-instagram' => 'Ссылка на профиль instagram'
    );

	// регистрируем опцию
	// register_setting( 'general', $option_name );
    foreach ($options as $ID => $label) {
        register_setting( 'general', $ID);
        	// добавляем поле
        add_settings_field( 
            $ID, 
            $label, 
            'myprefix_setting_callback_function', 
            'general', 
            'default', 
            array( 
                'id' => $ID, 
                'option_name' => $ID 
            )
        );
    }
}
add_action('admin_menu', 'add_option_field_to_general_admin_page');

function myprefix_setting_callback_function( $val ){
	$id = $val['id'];
	$option_name = $val['option_name'];
	?>
	<input 
		type="text" 
		name="<? echo $option_name ?>" 
		id="<? echo $id ?>" 
		value="<? echo esc_attr( get_option($option_name) ) ?>" 
	/> 
	<?
}

?>