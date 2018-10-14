<?php
/**
 * Appearance Options
 *
 * @package Influencer
 */

if( ! function_exists( 'influencer_customize_register_appearance' ) ) :
    
    function influencer_customize_register_appearance( $wp_customize ) {

        /** Appearance Settings */
        $wp_customize->add_panel( 
            'appearance_settings',
             array(
                'priority'    => 50,
                'capability'  => 'edit_theme_options',
                'title'       => esc_html__( 'Appearance Settings', 'influencer' ),
            ) 
        );        
        
        $wp_customize->get_section( 'colors' )->panel               = 'appearance_settings';
        $wp_customize->get_section( 'background_image' )->panel     = 'appearance_settings';            
    }
endif;
add_action( 'customize_register', 'influencer_customize_register_appearance' );