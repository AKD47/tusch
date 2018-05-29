<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'panel_1' => array(
		'title'   => __( 'Contacts', '{domain}' ),
		'options' => array(
			'phone_first' => array(
				'type'  => 'text',
				'label' => __( 'add phone number', '{domain}' ),
                'value' => '+420 608 664 422',
			),
			'email' => array(
				'type'  => 'text',
				'label' => __( 'add email address', '{domain}' ),
                'value' => 'info@tusch.cz',
			),
            'address' => array(
                'type'  => 'textarea',
                'label' => __( 'add post address', '{domain}' ),
                'value' => 'Jiráskova 1264, Třebechovice pod Orebem, 503 46',
            ),
		),
	),
);