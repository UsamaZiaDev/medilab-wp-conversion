<?php
/**
 * Register the required plugins for this theme.
 */

add_action( 'tgmpa_register', 'uzml_medilab_register_required_plugins' );

function uzml_medilab_register_required_plugins() {
    $plugins = array(

        array(
            'name'     => 'Advanced Custom Fields (ACF)',
            'slug'     => 'advanced-custom-fields',
            'required' => true,
        ),
        array(
            'name'     => 'Contact Form 7',
            'slug'     => 'contact-form-7',
            'required' => true,
        ),
    );

    $config = array(
        'id'           => 'uzml-medilab',
        'menu'         => 'tgmpa-install-plugins',
        'has_notices'  => true,
        'dismissable'  => true,
        'is_automatic' => false,
    );

    tgmpa( $plugins, $config );
}
