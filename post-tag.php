<?php
function register_post_tag()
{
    register_block_type('e25m-custom/post-tag', array(
        'editor_script' => 'berg-block-js-vendor',
        'editor_style' => 'berg-block-editor-css',
        'style' => 'e25m-style-css',
        'render_callback' => 'post_tag_render_callback',
        'attributes' => array(
            'descriptionTag' => array(
                'type' => 'string',
                'default'=> "h4",
            )
        )
    ));
}

add_action('init', 'register_post_tag');

function post_tag_render_callback($block_attributes)
{

    $descriptionTag = $block_attributes['descriptionTag'];

    ob_start();

    include 'view/layout.php';

    $output = ob_get_contents();
    ob_end_clean();
    return $output;

}
