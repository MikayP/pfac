<?php

if( function_exists('acf_register_block_type')){

    add_action('acf/init', 'register_block_types');
}
function register_block_types() {

        acf_register_block_types(array(
            'name'  =>  'card-block',
            'title' =>  __('Card Block'),
            'description'   =>  'Card Block',
            'render_template'   =>  'block-card-block.php',
            'category'  => 'common',
            'icon'  => 'dashicons-format-aside',
            'keywords'  =>  array( 'card, block, blocks'),
        ));
    }
