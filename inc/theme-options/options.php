<?php  
if( class_exists( 'CSF' ) ) {

    // Set a unique slug-like ID
    $prefix = 'coderit';

    // Create options
    CSF::createOptions( $prefix, array(
        'menu_title' => 'Theme Options',
        'menu_slug'  => 'theme-options',
        'framework_title'  => 'Theme Options <small>by Coder IT Solution</small>',
        'menu_icon' => 'dashicons-heart',
        'menu_position' => 5,
        'footer_text' => "Develop by Coder IT Solution",
    ) );
    
    // Header Section
    CSF::createSection($prefix,array(
        'title' => 'Header Options',
        'icon' => 'fas fa-theater-masks',
        'fields' => array(
            array(
                'id' => 'favicon-upload',
                'title' => 'Favicon',
                'type' => 'media',
                'default' => array(
                    'url' => get_template_directory_uri().'/assets/images/Logo.svg'
                )
            ),
            array(
                'id' => 'logo-upload',
                'title' => 'Header Logo',
                'type' => 'media',
                'default' => array(
                    'url' => get_template_directory_uri().'/assets/images/Logo.svg'
                )
            ),
            array(
                'id' => 'header-button-1',
                'title' => 'Header Button 1',
                'type' => 'text',
                'default' => 'Sign In'
            ),
            array(
                'id' => 'header-button-1-url',
                'title' => 'Header Button 1 Url',
                'type' => 'text',
                'default' => '#'
            ),

        )
    ));

    // Banner Section
    CSF::createSection($prefix,array(
        'title' => 'Banner Options',
        'icon' => 'fas fa-theater-masks',
        'fields' => array(
            array(
                'id' => 'banner-image',
                'title' => 'Banner Image',
                'type' => 'media',
                'default' => array(
                    'url' => get_template_directory_uri().'/assets/images/Image22.png'
                )
            ),
            array(
                'id' => 'banner-heading',
                'title' => 'Banner Heading',
                'type' => 'text',
                'default' => 'Build your audience and grow your brand'
            ),
            array(
                'id' => 'banner-description',
                'title' => 'Banner Description',
                'type' => 'textarea',
                'default' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit interdum ullamcorper sed pharetra sene'
            ),
            array(
                'id' => 'banner-button-1',
                'title' => 'Button 1 Text',
                'type' => 'text',
                'default' => 'Get Started'
            ),
            array(
                'id' => 'banner-button-1-url',
                'title' => 'Button 1 Url',
                'type' => 'text',
                'default' => '#'
            ),
            array(
                'id' => 'banner-button-2',
                'title' => 'Button 2 Text',
                'type' => 'text',
                'default' => 'Watch Video'
            ),
            array(
                'id' => 'banner-button-2-url',
                'title' => 'Button 2 Video Url',
                'type' => 'text',
                'default' => 'https://www.youtube.com/watch?v=oOkGmK3_Hdg'
            ),

        )
    ));

    // Trial Section
    CSF::createSection($prefix,array(
        'title' => 'Free Trial Section',
        'icon' => 'fas fa-theater-masks',
        'fields' => array(
            array(
                'id' => 'trial-right-image',
                'title' => 'Right Image',
                'type' => 'media',
                'default' => array(
                    'url' => get_template_directory_uri().'/assets/images/trial-img/trial-img.png'
                )
            ),
            array(
                'id' => 'trial-heading',
                'title' => 'Trial Heading',
                'type' => 'text',
                'default' => 'Start your free trial today'
            ),
            array(
                'id' => 'trial-description',
                'title' => 'Trial Description',
                'type' => 'textarea',
                'default' => 'It is a long established fact that a reader will be by the readable when looking at it layout. '
            ), 
            array(
                'id' => 'form-shortcode',
                'title' => 'Form Shortcode',
                'type' => 'text'
            ),

        )
    ));

    // Blog Section
    CSF::createSection($prefix, array(
        'title' => 'Blog Page',
        'icon' => 'fas fa-cube',
        'fields' => array(
            array(
                'id' => 'blog-page-title',
                'title' => 'Blog Page Title',
                'default' => 'News & Articles',
                'type' => 'text'
            ),
            array(
                'id' => 'blog-page-description',
                'title' => 'Blog Page Title',
                'type' => 'textarea',
                'default' => "Lorem ipsum dolor sit amet consectetur adipiscing elit interdum ullamcorper sed pharetra sene."
            )
        )
    ));

    // Footer Section
    CSF::createSection($prefix,array(
        'title' => 'Footer Options',
        'icon' => 'fas fa-laptop-house',
        'fields' => array(
            array(
                'id' => 'footer-logo',
                'title' => 'Footer Logo',
                'type' => 'media',
                'default' => array(
                    'url' => get_template_directory_uri().'/assets/images/Logo.svg'
                )
            ),
            array(
                'id' => 'footer-description',
                'title' => 'Footer Description',
                'type' => 'textarea',
                'default' => "It is a long established fact that from will be distracted by the readable from when looking."
            ),
            array(
                'id' => 'footer-email-phone',
                'title' => 'Footer Email & Phone',
                'type' => 'repeater',
                'fields' => array(
                    array(
                        'id' => 'footer-item-icon',
                        'title' => 'Select Icon',
                        'type' => 'icon'
                    ),
                    array(
                        'id' => 'footer-item-value-repeater',
                        'title' => 'Add Item Values',
                        'type' => 'repeater',
                        'fields' => array(
                            array(
                                'id' => 'item-value',
                                'title' => 'Item Value',
                                'type' => 'text',
                                'default' => 'saasup@gmail.com'
                            )
                        )
                    )
                )
            ),
            array(
                'id' => 'footer-copyright',
                'title' => 'Footer Copyright Text',
                'type' => 'text',
                'default' => "Copyright © Saasup | Designed by Coder IT Solution"
            ),
            array(
                'id' => 'footer-socials',
                'title' => 'Footer Social',
                'type' => 'repeater',
                'fields' => array(
                    array(
                        'id' => 'social_icon',
                        'title' => 'Select Icon',
                        'type' => 'icon'
                    ),
                    array(
                        'id' => 'social_url',
                        'title' => 'Set Url',
                        'type' => 'text'
                    )
                )
            ),

        )
    ));

    //
    // Field: backup
    //
    CSF::createSection( $prefix, array(
        'title'       => 'Backup',
        'icon'        => 'fas fa-shield-alt',
        'description' => 'Visit documentation for more details on this field: <a href="http://codestarframework.com/documentation/#/fields?id=backup" target="_blank">Field: backup</a>',
        'fields'      => array(
    
        array(
            'type' => 'backup',
        ),
    
        )
    ) );

    

}

