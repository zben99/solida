<?php
    /**
     * ReduxFramework Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    // This is your option name where all the Redux data is stored.
    $opt_name = "solida_option";

    // This line is only for altering the demo. Can be easily removed.
    $opt_name = apply_filters( 'solida/opt_name', $opt_name );

    /*
     *
     * --> Used within different fields. Simply examples. Search for ACTUAL DECLARATION for field examples
     *
     */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        // TYPICAL -> Change these values as you need/desire
        'opt_name'             => $opt_name,
        // This is where your data is stored in the database and also becomes your global variable name.
        'display_name'         => $theme->get( 'Name' ),
        // Name that appears at the top of your panel
        'display_version'      => $theme->get( 'Version' ),
        // Version that appears at the top of your panel
        'menu_type'            => 'menu',
        'page_priority'        => 8,
        //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
        'allow_sub_menu'       => true,
        // Show the sections below the admin menu item or not
        'menu_title'           => esc_html__( 'Solida Options', 'solida' ),
        'page_title'           => esc_html__( 'Solida Options', 'solida' ),
        // You will need to generate a Google API key to use this feature.
        // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
        'google_api_key'       => '',
        // Set it you want google fonts to update weekly. A google_api_key value is required.
        'google_update_weekly' => false,
        // Must be defined to add google fonts to the typography module
        'async_typography'     => true,
        // Use a asynchronous font on the front end or font string
        // Disable this in case you want to create your own google fonts loader
        'admin_bar'            => false,
        // Show the panel pages on the admin bar
        'admin_bar_icon'       => 'dashicons-portfolio',
        // Choose an icon for the admin bar menu
        'admin_bar_priority'   => 50,
        // Choose an priority for the admin bar menu
        'global_variable'      => '',
        // Set a different name for your global variable other than the opt_name
        'dev_mode'             => false,
        'forced_dev_mode_off' => true,
        // Show the time the page took to load, etc
        'update_notice'        => true,
        // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
        'customizer'           => true,
        'compiler' => true,

        // OPTIONAL -> Give you extra features
        'page_priority'        => 20,        
        // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
        'page_parent'          => 'themes.php',
        // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
        'page_permissions'     => 'manage_options',
        // Permissions needed to access the options panel.
        'menu_icon'            => '',
        // Specify a custom URL to an icon
        'last_tab'             => '',
        // Force your panel to always open to a specific tab (by id)
        'page_icon'            => 'icon-themes',
        // Icon displayed in the admin panel next to your menu_title
        'page_slug'            => '',
        // Page slug used to denote the panel, will be based off page title then menu title then opt_name if not provided
        'save_defaults'        => true,
        // On load save the defaults to DB before user clicks save or not
        'default_show'         => false,
        // If true, shows the default value next to each field that is not the default value.
        'default_mark'         => '',
        // What to print by the field's title if the value shown is default. Suggested: *
        'show_import_export'   => true,
        // Shows the Import/Export panel when not used as a field.

        // CAREFUL -> These options are for advanced use only
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
        'output_tag'           => true,
        'force_output' => true,
        // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
        // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

        // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
        'database'             => '',
        // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
        'use_cdn'              => true,
        // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

        // HINTS
        'hints'                => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'normal',
            'tip_style'     => array(
                'color'   => 'red',
                'shadow'  => true,
                'rounded' => false,
                'style'   => '',
            ),
            'tip_position'  => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect'    => array(
                'show' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'mouseover',
                ),
                'hide' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'click mouseleave',
                ),
            ),
        )
    );

    // Panel Intro text -> before the form
    if ( ! isset( $args['global_variable'] ) || $args['global_variable'] !== false ) {
        if ( ! empty( $args['global_variable'] ) ) {
            $v = $args['global_variable'];
        } else {
            $v = str_replace( '-', '_', $args['opt_name'] );
        }
        $args['intro_text'] = sprintf( esc_html__( 'solida Theme', 'solida' ), $v );
    } else {
        $args['intro_text'] = esc_html__( 'solida Theme', 'solida' );
    }

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTSsolida
      
     */     
   // -> START General Settings
   Redux::setSection( $opt_name, array(
        'title'            => esc_html__( 'General Sections', 'solida' ),
        'id'               => 'basic-checkbox',
        'customizer_width' => '450px',
        'fields'           => array(
            
            array(
                'id'       => 'logo',
                'type'     => 'media',
                'title'    => esc_html__( 'Upload Logo', 'solida' ),
                'subtitle' => esc_html__( 'Upload your logo', 'solida' ),
                'url'=> true                
            ),

            array(
                'id'       => 'logo-height',                               
                'title'    => esc_html__( 'Logo Height', 'solida' ),
                'subtitle' => esc_html__( 'Logo max height example(40px)', 'solida' ),
                'type'     => 'text',
                'default'  => '40px'                    
            ), 

            array(
                'id'       => 'rswplogo_sticky',
                'type'     => 'media',
                'title'    => esc_html__( 'Upload Sticky Logo', 'solida' ),
                'subtitle' => esc_html__( 'Upload your sticky logo', 'solida' ),
                'url'=> true                
            ),

            array(
                'id'       => 'sticky_logo_height',                               
                'title'    => esc_html__( 'Sticky Logo Height', 'solida' ),
                'subtitle' => esc_html__( 'Sticky Logo max height example(30px)', 'solida' ),
                'type'     => 'text',
                'default'  => '40px'    
            ),            
            array(
                'id'       => 'tentaz_favicon',
                'type'     => 'media',
                'title'    => esc_html__( 'Upload Favicon', 'solida' ),
                'subtitle' => esc_html__( 'Upload your faviocn here', 'solida' ),
                'url'=> true            
            ),           
 
     
            array(
                'id'       => 'show_top_bottom',
                'type'     => 'switch', 
                'title'    => esc_html__('Go to Top', 'solida'),
                'subtitle' => esc_html__('You can show or hide here', 'solida'),
                'default'  => false,
            ), 

                array(
                'id'       => 'show_top_bottom_postition',
                'type'     => 'button_set',
                'title'    => __('Go to Top Position', 'solida'),                
                'options' => array(
                    'left' => 'Left', 
                    'center' => 'Center', 
                    'right' => 'Right'
                 ), 
                'default' => 'right',
                'required' => array(
                    array(
                        'show_top_bottom',
                        'equals',
                        1,
                    ),
                ), 
            ),
            array(
                'id'       => 'container_size',
                'title'    => esc_html__( 'Container Size', 'solida' ),
                'subtitle' => esc_html__( 'Container Size example(1140px)', 'solida' ),
                'type'     => 'text',
                'default'  => ''                
            ),
        )
    ));
    
    
    // -> START Header Section
    Redux::setSection( $opt_name, array(
        'title'            => esc_html__( 'Header', 'solida' ),
        'id'               => 'header',
        'customizer_width' => '450px',
        'icon' => 'el el-certificate',       
         
        'fields'           => array(
        array(
            'id'     => 'notice_critical',
            'type'   => 'info',
            'notice' => true,
            'style'  => 'success',
            'title'  => esc_html__('Header Top Area', 'solida')            
        ),
        
        array(
            'id'       => 'show-top',
            'type'     => 'switch', 
            'title'    => esc_html__('Show Topbar', 'solida'),
            'subtitle' => esc_html__('You can select top bar show or hide', 'solida'),
            'default'  => false,
        ),         
        
        array(
            'id'       => 'mobile-show-top',
            'type'     => 'switch', 
            'title'    => esc_html__('Mobile Show Topbar', 'solida'),
            'subtitle' => esc_html__('You can select mobile top bar show or hide', 'solida'),
            'default'  => true,
            'required' => array(
                array(
                    'show-top',
                    'equals',
                    1,
                ),
            ), 
        ), 
        

        array(
            'id'       => 'message-txt',                               
            'title'    => esc_html__( 'Hours Here', 'solida' ),
            'subtitle' => esc_html__( 'Enter Hours text', 'solida' ),
            'type'     => 'text',                    
        ),

        array(
            'id'       => 'tentaz_address',                               
            'title'    => esc_html__( 'Address Here', 'solida' ),
            'subtitle' => esc_html__( 'Enter Address', 'solida' ),
            'type'     => 'text',
            'required' => array(
                array(
                    'show-top',
                    'equals',
                    1,
                ),
            ),            
        ), 
     

        array(
            'id'       => 'top-email',                               
            'title'    => esc_html__( 'Email Address', 'solida' ),
            'subtitle' => esc_html__( 'Enter Email Address', 'solida' ),
            'type'     => 'text',
            'msg'      => esc_html__('Email Address Not Valid', 'solida'),
            'required' => array(
                array(
                    'show-top',
                    'equals',
                    1,
                ),
            ), 
        ),         


        array(
            'id'       => 'tentaz_phone_pre',                               
            'title'    => esc_html__( ' Phone Pre Text', 'solida' ),
            'subtitle' => esc_html__( 'Enter Phone Pre Text', 'solida' ),
            'type'     => 'text',     
        ), 

        array(
            'id'       => 'tentaz_phone',                               
            'title'    => esc_html__( ' Phone Number', 'solida' ),
            'subtitle' => esc_html__( 'Enter Phone Number', 'solida' ),
            'type'     => 'text',     
        ),    

        array(
            'id'       => 'tentaz_contact_btn',                               
            'title'    => esc_html__( ' Contact Button Text', 'solida' ),
            'subtitle' => esc_html__( 'Enter Button Text', 'solida' ),
            'type'     => 'text',     
        ),

        array(
            'id'       => 'contact_link',                               
            'title'    => esc_html__( ' Contact Button Link', 'solida' ),
            'subtitle' => esc_html__( 'Enter Button Link', 'solida' ),
            'type'     => 'text',     
        ),   
      
        array(
            'id'       => 'show-social',
            'type'     => 'switch', 
            'title'    => esc_html__('Show Social Icons Topbar Area', 'solida'),
            'subtitle' => esc_html__('You can select Social Icons show or hide', 'solida'),
            'default'  => true,
        ),  
                    
          array(
            'id'     => 'notice_critical2',
            'type'   => 'info',
            'notice' => true,
            'style'  => 'success',
            'title'  => esc_html__('Header Area', 'solida')            
        ),

        array(
            'id'               => 'header-grid',
            'type'             => 'select',
            'title'            => esc_html__('Header Area Width', 'solida'),                 
            //Must provide key => value pairs for select options
            'options'          => array(                                     
            
                'container' => esc_html__('Container', 'solida'),
                'full'      => esc_html__('Container Fluid', 'solida'),
            ),
            'default'          => 'container',            
        ),  

        

        array(
            'id'       => 'tentaz_search',
            'type'     => 'switch', 
            'title'    => esc_html__('Show Search', 'solida'),
            'subtitle' => esc_html__('You can show or hide search icon', 'solida'),
            'default'  => false,
        ),     
        )
    ) 
);  
   

Redux::setSection( $opt_name, array(
'title'            => esc_html__( 'Header Layout', 'solida' ),
'id'               => 'header-style',
'customizer_width' => '450px',
'subsection' =>true,      
'fields'    => array(  
                array(
                    'id'       => 'header_layout',
                    'type'     => 'image_select',
                    'title'    => esc_html__('Header Layout', 'solida'), 
                    'subtitle' => esc_html__('Select header layout. Choose between 1, 2 or 3 layout.', 'solida'),
                    'options'  => array(
                    'style1'   => array(
                        'alt'      => 'Header Style 1', 
                        'img'      => get_template_directory_uri().'/libs/img/style_2.png'
                    ),                                      
                ),
                'default' => 'style1'
            ),     
        )
    ) 
);

                                   
//Topbar settings
    Redux::setSection( $opt_name, array(
        'title'  => esc_html__( 'Toolbar Area', 'solida' ),
        'desc'   => esc_html__( 'Toolbar area Style Here', 'solida' ),        
        'subsection' =>true,  
        'fields' => array( 
                        
                array(
                    'id'        => 'toolbar_bg_color',
                    'type'      => 'color',                       
                    'title'     => esc_html__('Toolbar background Color','solida'),
                    'subtitle'  => esc_html__('Pick color', 'solida'),    
                    'default'   => '',                        
                    'validate'  => 'color',                        
                ),   

                array(
                    'id'        => 'toolbar_text_color',
                    'type'      => 'color',                       
                    'title'     => esc_html__('Toolbar Text Color','solida'),
                    'subtitle'  => esc_html__('Pick color', 'solida'),    
                    'default'   => '',                        
                    'validate'  => 'color',                        
                ), 

                array(
                    'id'        => 'transparent_toolbar_text_color',
                    'type'      => 'color',                       
                    'title'     => esc_html__('Transparent Toolbar Text Color','solida'),
                    'subtitle'  => esc_html__('Pick color', 'solida'),    
                    'default'   => '',                        
                    'validate'  => 'color',                        
                ),  

                array(
                    'id'        => 'toolbar_link_color',
                    'type'      => 'color',                       
                    'title'     => esc_html__('Toolbar Link Color','solida'),
                    'subtitle'  => esc_html__('Pick color', 'solida'),    
                    'default'   => '',                        
                    'validate'  => 'color',                        
                ), 

                array(
                    'id'        => 'toolbar_link_hover_color',
                    'type'      => 'color',                       
                    'title'     => esc_html__('Toolbar Link Hover Color','solida'),
                    'subtitle'  => esc_html__('Pick color', 'solida'),    
                    'default'   => '',                        
                    'validate'  => 'color',                        
                ),  

                 array(
                    'id'        => 'transparent_toolbar_link_hover_color',
                    'type'      => 'color',                       
                    'title'     => esc_html__('Transparent Toolbar Link Hover Color','solida'),
                    'subtitle'  => esc_html__('Pick color', 'solida'),    
                    'default'   => '',                        
                    'validate'  => 'color',                        
                ), 

                array(
                    'id'        => 'toolbar_icn_color',
                    'type'      => 'color',                       
                    'title'     => esc_html__('Toolbar Icon Color','solida'),
                    'subtitle'  => esc_html__('Pick color', 'solida'),    
                    'default'   => '',                        
                    'validate'  => 'color',                        
                ), 

                array(
                    'id'        => 'toolbar_soci_icn_color',
                    'type'      => 'color',                       
                    'title'     => esc_html__('Toolbar Social Icon Color','solida'),
                    'subtitle'  => esc_html__('Pick color', 'solida'),    
                    'default'   => '',                        
                    'validate'  => 'color',                        
                ), 

                array(
                    'id'        => 'toolbar_text_size',
                    'type'      => 'text',                       
                    'title'     => esc_html__('Toolbar Font Size','solida'),
                    'subtitle'  => esc_html__('Font Size', 'solida'),    
                    'default'   => '',                                            
                ), 

                array(
                    'id'        => 'toolbar_borders',
                    'type'      => 'color_rgba',                       
                    'title'     => esc_html__('Seperator Border Color','solida'),
                    'subtitle'  => esc_html__('Pick color', 'solida'),   
                      
                    'default'  => array(
                        'color'     => '',
                        'alpha'     => 1                    
                    ),
                    'output' => array(                 
                    'border-color'            => '#tentaz-header .toolbar-area-here .toolbar-contact ul li, #tentaz-header .toolbar-area-here .opening, #tentaz-header.tentaz-header-two .toolbar-area-here .toolbar-contact ul li, #tentaz-header.tentaz-header-two .toolbar-area-here .opening, #tentaz-header.tentaz-header-two .toolbar-area-here'
                    )
                ),  
                
        )
    )
);

    


    // -> START Style Section
    Redux::setSection( $opt_name, array(
        'title'  => esc_html__( 'Global', 'solida' ),
        'desc'   => esc_html__( 'Style your theme', 'solida' ),    
        'icon' => 'el el-certificate',    
        'subsection' =>false,  
        'fields' => array( 
                array(
                    'id'        => 'body_bg_color',
                    'type'      => 'color',                           
                    'title'     => esc_html__('Body Backgroud Color','solida'),
                    'subtitle'  => esc_html__('Pick body background color', 'solida'),
                    'default'   => '#ffffff',
                    'validate'  => 'color',                        
                ), 
                
                array(
                    'id'        => 'body_text_color',
                    'type'      => 'color',            
                    'title'     => esc_html__('Body Text Color','solida'),
                    'subtitle'  => esc_html__('Pick text color', 'solida'),
                    'default'   => '#636363',
                    'validate'  => 'color',                        
                ),     

                array(
                    'id'        => 'primary_color',
                    'type'      => 'color', 
                    'title'     => esc_html__('Theme Primary Color','solida'),
                    'subtitle'  => esc_html__('Select Primary Color.', 'solida'),
                    'default'   => '#FF7029',
                    'validate'  => 'color',                        
                ), 

                array(
                    'id'        => 'secondary_color',
                    'type'      => 'color', 
                    'title'     => esc_html__('Theme Secondary Color','solida'),
                    'subtitle'  => esc_html__('Select Secondary Color.', 'solida'),
                    'default'   => '#03553C',
                    'validate'  => 'color',                        
                ),     
            ) 
        ) 
    ); 

       
    
    //Menu settings
    Redux::setSection( $opt_name, array(
        'title'  => esc_html__( 'Main Menu', 'solida' ),
        'desc'   => esc_html__( 'Main Menu Style Here', 'solida' ),  
        'icon' => 'el el-certificate',      
        'subsection' =>false,  
        'fields' => array( 

                        array(
                            'id'     => 'notice_critical_menu',
                            'type'   => 'info',
                            'notice' => true,
                            'style'  => 'success',
                            'title'  => esc_html__('Main Menu Settings', 'solida'),                                           
                        ),                        

                        array(
                            'id'        => 'menu_area_bg_color',
                            'type'      => 'color',                       
                            'title'     => esc_html__('Main Menu Background Color','solida'),
                            'subtitle'  => esc_html__('Pick color', 'solida'),    
                            'default'   => '',                        
                            'validate'  => 'color',                        
                        ), 
                    
                        
                        array(
                            'id'        => 'transparent_menu_text_color',
                            'type'      => 'color',                       
                            'title'     => esc_html__('Menu Text Color','solida'),
                            'subtitle'  => esc_html__('Pick color', 'solida'),    
                            'default'   => '',                        
                            'validate'  => 'color',                        
                        ), 

                        array(
                            'id'        => 'transparent_menu_hover_color',
                            'type'      => 'color',                       
                            'title'     => esc_html__('Menu Color (Hover)','solida'),
                            'subtitle'  => esc_html__('Pick color', 'solida'),    
                            'default'   => '',                        
                            'validate'  => 'color',                        
                        ),  

                        array(
                            'id'        => 'transparent_menu_active_color',
                            'type'      => 'color',                       
                            'title'     => esc_html__('Menu Color (Active)','solida'),
                            'subtitle'  => esc_html__('Pick color', 'solida'),    
                            'default'   => '',                        
                            'validate'  => 'color',                        
                        ), 

                        
                        array(
                            'id'        => 'menu_desc_color',
                            'type'      => 'color',                       
                            'title'     => esc_html__('Main Description Text Color','solida'),
                            'subtitle'  => esc_html__('Pick color', 'solida'),
                            'default'   => '',
                            'validate'  => 'color',
                            'output' => array(                 
                                'color'            => '.navbar-menu span.description'
                            )                         
                        ),

                        array(
                            'id'        => 'menu_item_gap',
                            'type'      => 'text',                       
                            'title'     => esc_html__('Menu Item Left Right Gap','solida'),   
                            'default'   => '',                             
                        ),

                        array(
                            'id'        => 'menu_item_gap2',
                            'type'      => 'text',                       
                            'title'     => esc_html__('Menu Item Top Gap','solida'),   
                            'default'   => '',                             
                        ),                        

                        array(
                            'id'        => 'menu_item_gap3',
                            'type'      => 'text',                       
                            'title'     => esc_html__('Menu Item Bottom Gap','solida'),   
                            'default'   => '',                             
                        ),

                        array(
                            'id'       => 'menu_text_trasform',
                            'type'     => 'switch',
                            'title'    => esc_html__( 'Menu Text Uppercase', 'solida' ),
                            'on'       => esc_html__( 'Enabled', 'solida' ),
                            'off'      => esc_html__( 'Disabled', 'solida' ),
                            'default'  => false,
                        ),

                        array(
                            'id'       => 'main_menu_icon',
                            'type'     => 'switch',
                            'title'    => esc_html__( 'Main Menu Icon Hide', 'solida' ),
                            'on'       => esc_html__( 'Enabled', 'solida' ),
                            'off'      => esc_html__( 'Disabled', 'solida' ),
                            'default'  => false,
                        ),

                        array(
                            'id'     => 'notice_critical_dropmenu',
                            'type'   => 'info',
                            'notice' => true,
                            'style'  => 'success',
                            'title'  => esc_html__('Dropdown Menu Settings', 'solida'),                                           
                        ),
                                               
                        array(
                            'id'        => 'drop_down_bg_color',
                            'type'      => 'color',                       
                            'title'     => esc_html__('Dropdown Menu Background Color','solida'),
                            'subtitle'  => esc_html__('Pick bg color', 'solida'),
                            'default'   => '',
                            'validate'  => 'color',                        
                        ), 
                            
                        
                        array(
                            'id'        => 'drop_text_color',
                            'type'      => 'color',                     
                            'title'     => esc_html__('Dropdown Menu Text Color','solida'),
                            'subtitle'  => esc_html__('Pick text color', 'solida'),
                            'default'   => '',
                            'validate'  => 'color',                        
                        ), 
                        
                        array(
                            'id'        => 'drop_text_hover_color',
                            'type'      => 'color',                       
                            'title'     => esc_html__('Dropdown Menu Hover Text Color','solida'),
                            'subtitle'  => esc_html__('Pick text color', 'solida'),
                            'default'   => '',
                            'validate'  => 'color',                        
                        ),                              
                     

                        array(
                            'id'       => 'menu_text_trasform2',
                            'type'     => 'switch',
                            'title'    => esc_html__( 'Dropdown Menu Text Uppercase', 'solida' ),
                            'on'       => esc_html__( 'Enabled', 'solida' ),
                            'off'      => esc_html__( 'Disabled', 'solida' ),
                            'default'  => false,
                        ),

                        array(
                            'id'       => 'menu_text_plus_icon',
                            'type'     => 'switch',
                            'title'    => esc_html__( 'Dropdown Menu Icon', 'solida' ),
                            'on'       => esc_html__( 'Enabled', 'solida' ),
                            'off'      => esc_html__( 'Disabled', 'solida' ),
                            'default'  => false,
                        ),
                        
                )
            )
        ); 

    //Sticky Menu settings
    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( 'Sticky Menu', 'solida' ),
        'desc'       => esc_html__( 'Sticky Menu Style Here', 'solida' ), 
        'icon' => 'el el-certificate',       
        'subsection' =>false,  
        'fields' => array(
                    array(
                        'id'       => 'off_sticky',
                        'type'     => 'switch', 
                        'title'    => esc_html__('Sticky Menu', 'solida'),
                        'subtitle' => esc_html__('You can show or hide sticky menu here', 'solida'),
                        'default'  => false,
                    ),

                    array(
                        'id'        => 'stiky_menu_areas_bg_color',
                        'type'      => 'color',                       
                        'title'     => esc_html__('Menu Area Background Color','solida'),
                        'subtitle'  => esc_html__('Pick color', 'solida'),    
                        'default'   => '',                        
                        'validate'  => 'color',
                        'required' => array(
                            array(
                                'off_sticky',
                                'equals',
                                1,
                            ),
                        ),                        
                    ), 
                        
                    array(
                        'id'        => 'stikcy_menu_text_color',
                        'type'      => 'color',                       
                        'title'     => esc_html__('Menu Text Color','solida'),
                        'subtitle'  => esc_html__('Pick color', 'solida'),    
                        'default'   => '',                        
                        'validate'  => 'color',
                        'required' => array(
                            array(
                                'off_sticky',
                                'equals',
                                1,
                            ),
                        ),                        
                    ), 
                       

                    array(
                        'id'        => 'sticky_menu_text_hover_color',
                        'type'      => 'color',                       
                        'title'     => esc_html__('Menu Text Color (Hover)','solida'),
                        'subtitle'  => esc_html__('Pick color', 'solida'),           
                        'default'   => '',                 
                        'validate'  => 'color', 
                        'required' => array(
                            array(
                                'off_sticky',
                                'equals',
                                1,
                            ),
                        ),                       
                    ), 

                    array(
                        'id'        => 'stikcy_menu_text_active_color',
                        'type'      => 'color',                       
                        'title'     => esc_html__('Main Menu Text Color (Active)','solida'),
                        'subtitle'  => esc_html__('Pick color', 'solida'),
                        'default'   => '',
                        'validate'  => 'color',
                        'required' => array(
                            array(
                                'off_sticky',
                                'equals',
                                1,
                            ),
                        ),                        
                    ),                     
                    array(
                        'id'        => 'sticky_drop_down_bg_color',
                        'type'      => 'color',                       
                        'title'     => esc_html__('Dropdown Menu Background Color','solida'),
                        'subtitle'  => esc_html__('Pick bg color', 'solida'),
                        'default'   => '',
                        'validate'  => 'color', 
                        'required' => array(
                            array(
                                'off_sticky',
                                'equals',
                                1,
                            ),
                        ),                       
                    ), 
                            
                        
                    array(
                        'id'        => 'stikcy_drop_text_color',
                        'type'      => 'color',                     
                        'title'     => esc_html__('Dropdown Menu Text Color','solida'),
                        'subtitle'  => esc_html__('Pick text color', 'solida'),
                        'default'   => '',
                        'validate'  => 'color', 
                        'required' => array(
                            array(
                                'off_sticky',
                                'equals',
                                1,
                            ),
                        ),                       
                    ), 
                        
                    array(
                        'id'        => 'sticky_drop_text_hover_color',
                        'type'      => 'color',                       
                        'title'     => esc_html__('Dropdown Menu Text Color (Hover)','solida'),
                        'subtitle'  => esc_html__('Pick text color', 'solida'),
                        'default'   => '',
                        'validate'  => 'color',
                        'required' => array(
                            array(
                                'off_sticky',
                                'equals',
                                1,
                            ),
                        ),                        
                    ),                        
                )
            )
        ); 

    //Breadcrumb settings
    Redux::setSection( $opt_name, array(
        'title'  => esc_html__( 'Breadcrumb', 'solida' ),     
        'icon' => 'el el-certificate', 
        'subsection' =>false,  
        'fields' => array(

                    array(
                        'id'       => 'off_breadcrumb_area',
                        'type'     => 'switch', 
                        'title'    => esc_html__('Show / Hide Breadcrumb Area', 'solida'),
                        'subtitle' => esc_html__('You can show or hide off breadcrumb here', 'solida'),
                        'default'  => true,
                    ),

                    array(
                        'id'       => 'off_breadcrumb',
                        'type'     => 'switch', 
                        'title'    => esc_html__('Show / Hide Breadcrumb', 'solida'),
                        'subtitle' => esc_html__('You can show or hide off breadcrumb here', 'solida'),
                        'default'  => true,
                        'required' => array(
                            array(
                                'off_breadcrumb_area',
                                'equals',
                                1,
                            ),
                        ),
                    ),

                    array(
                        'id'        => 'breadcrumb_bg_color',
                        'type'      => 'color',                       
                        'title'     => esc_html__('Background Color','solida'),
                        'subtitle'  => esc_html__('Pick color', 'solida'),    
                        'default'   => '',                        
                        'validate'  => 'color', 
                        'required' => array(
                            array(
                                'off_breadcrumb_area',
                                'equals',
                                1,
                            ),
                        ),                       
                    ),                     

                     array(
                        'id'       => 'page_banner_main',
                        'type'     => 'media',
                        'title'    => esc_html__( 'Background Banner', 'solida' ),
                        'subtitle' => esc_html__( 'Upload your banner', 'solida' ), 
                        'required' => array(
                            array(
                                'off_breadcrumb_area',
                                'equals',
                                1,
                            ),
                        ),                 
                    ), 

                     array(
                        'id'        => 'breadcrumb_title',
                        'type'      => 'text',                       
                        'title'     => esc_html__('Title Font Size','solida'),                          
                        'default'   => '',
                        'required' => array(
                            array(
                                'off_breadcrumb_area',
                                'equals',
                                1,
                            ),
                        ),                                                                     
                    ), 

                    array(
                        'id'               => 'breadcrumb-align',
                        'type'             => 'select',
                        'title'            => esc_html__('Title & Breadcrumb Alignment', 'solida'),                   
                        'desc'             => esc_html__('Change your title and breadcrumb text alignment', 'solida'),
                    //Must provide key => value pairs for select options
                    'options'          => array(
                        'left'               => esc_html__('Left','solida'),                                   
                        'center'                => esc_html__('Center', 'solida'),                                         
                        'right'                => esc_html__('Right', 'solida'),
                       
                        ),
                        'default'          => 'center',
                        'required' => array(
                            array(
                                'off_breadcrumb_area',
                                'equals',
                                1,
                            ),
                        ),                                  
                    ),  
                    
                    array(
                        'id'        => 'breadcrumb_text_color',
                        'type'      => 'color',                       
                        'title'     => esc_html__('Text Color','solida'),
                        'subtitle'  => esc_html__('Pick color', 'solida'),    
                        'default'   => '',                        
                        'validate'  => 'color', 
                        'required' => array(
                            array(
                                'off_breadcrumb_area',
                                'equals',
                                1,
                            ),
                        ),                       
                    ),                   

                    array(
                        'id'        => 'breadcrumb_seperator_color',
                        'type'      => 'color',                       
                        'title'     => esc_html__('Breadcrumb Seperator Color','solida'),
                        'subtitle'  => esc_html__('Pick color', 'solida'),    
                        'default'   => '',                        
                        'validate'  => 'color',  
                        'required' => array(
                            array(
                                'off_breadcrumb_area',
                                'equals',
                                1,
                            ),
                        ),                      
                    ),  
                    
                  
                    array(
                        'id'        => 'breadcrumb_top_gap',
                        'type'      => 'text',                       
                        'title'     => esc_html__('Top Gap','solida'),                          
                        'default'   => '',  
                        'required' => array(
                            array(
                                'off_breadcrumb_area',
                                'equals',
                                1,
                            ),
                        ),                                            
                    ),


                    array(
                        'id'        => 'breadcrumb_bottom_gap',
                        'type'      => 'text',                       
                        'title'     => esc_html__('Bottom Gap','solida'),                          
                        'default'   => '',
                        'required' => array(
                            array(
                                'off_breadcrumb_area',
                                'equals',
                                1,
                            ),
                        ),                                             
                    ),

                    array(
                        'id'        => 'breadcrumb_top_gap_mobile',
                        'type'      => 'text',                       
                        'title'     => esc_html__('Top Gap (Mobile)','solida'),                          
                        'default'   => '', 
                        'required' => array(
                            array(
                                'off_breadcrumb_area',
                                'equals',
                                1,
                            ),
                        ),                                             
                    ), 

                    array(
                        'id'        => 'breadcrumb_bottom_gap_mobile',
                        'type'      => 'text',                       
                        'title'     => esc_html__('Bottom Gap (Mobile)','solida'),                          
                        'default'   => '', 
                        'required' => array(
                            array(
                                'off_breadcrumb_area',
                                'equals',
                                1,
                            ),
                        ),                                            
                    ),        
                )
            )
        );
    
    //offcanvas  settings
    Redux::setSection( $opt_name, array(
        'title'  => esc_html__( 'Offcanvas', 'solida' ),
        'desc'   => esc_html__( 'Offcanvas Style Here', 'solida' ),
        'icon' => 'el el-certificate',        
        'subsection' =>false,  
        'fields' => array( 

                array(
                    'id'       => 'off_canvas_op',
                    'type'     => 'switch', 
                    'title'    => esc_html__('Show off Canvas', 'solida'),
                    'subtitle' => esc_html__('You can show or hide off canvas here', 'solida'),
                    'default'  => false,
                ), 

                array(
                    'id'        => 'offcan_bgs_color',
                    'type'      => 'color',                       
                    'title'     => esc_html__('Background Color','solida'),
                    'subtitle'  => esc_html__('Pick color', 'solida'),    
                    'default'   => '',                        
                    'validate'  => 'color', 
                    'required' => array(
                        array(
                            'off_canvas_op',
                            'equals',
                            1,
                        ),
                    ),                       
                ), 

                array(
                    'id'        => 'offcan_title_color',
                    'type'      => 'color',                       
                    'title'     => esc_html__('Title Color','solida'),
                    'subtitle'  => esc_html__('Pick color', 'solida'),    
                    'default'   => '',                        
                    'validate'  => 'color',
                    'required' => array(
                        array(
                            'off_canvas_op',
                            'equals',
                            1,
                        ),
                    ),                        
                ),

   
                array(
                    'id'        => 'offcan_txt_color',
                    'type'      => 'color',                       
                    'title'     => esc_html__('Text Color','solida'),
                    'subtitle'  => esc_html__('Pick color', 'solida'),    
                    'default'   => '',                        
                    'validate'  => 'color',
                    'required' => array(
                        array(
                            'off_canvas_op',
                            'equals',
                            1,
                        ),
                    ),                        
                ),

                array(
                    'id'        => 'offcan_link_color',
                    'type'      => 'color',                       
                    'title'     => esc_html__('Link Color','solida'),
                    'subtitle'  => esc_html__('Pick color', 'solida'),    
                    'default'   => '',                        
                    'validate'  => 'color',
                    'required' => array(
                        array(
                            'off_canvas_op',
                            'equals',
                            1,
                        ),
                    ),                        
                ),

                array(
                    'id'        => 'offcan_link_hover_color',
                    'type'      => 'color',                       
                    'title'     => esc_html__('Link hover Color','solida'),
                    'subtitle'  => esc_html__('Pick color', 'solida'),    
                    'default'   => '',                        
                    'validate'  => 'color',
                    'required' => array(
                        array(
                            'off_canvas_op',
                            'equals',
                            1,
                        ),
                    ),                        
                ),

                array(
                    'id'        => 'offcan_icon_color',
                    'type'      => 'color',                       
                    'title'     => esc_html__('Icon Color','solida'),
                    'subtitle'  => esc_html__('Pick color', 'solida'),    
                    'default'   => '',                        
                    'validate'  => 'color', 
                    'required' => array(
                        array(
                            'off_canvas_op',
                            'equals',
                            1,
                        ),
                    ),                       
                ),


                array(
                    'id'        => 'offcan_social_icon_bg_color',
                    'type'      => 'color',                       
                    'title'     => esc_html__('Social Icon Bg Color','solida'),
                    'subtitle'  => esc_html__('Pick color', 'solida'),    
                    'default'   => '',                        
                    'validate'  => 'color', 
                    'required' => array(
                        array(
                            'off_canvas_op',
                            'equals',
                            1,
                        ),
                    ),                       
                ),


                array(
                    'id'        => 'offcan_social_icon__color',
                    'type'      => 'color',                       
                    'title'     => esc_html__('Social Icon Color','solida'),
                    'subtitle'  => esc_html__('Pick color', 'solida'),    
                    'default'   => '',                        
                    'validate'  => 'color', 
                    'required' => array(
                        array(
                            'off_canvas_op',
                            'equals',
                            1,
                        ),
                    ),                       
                ),  


                array(
                    'id'        => 'offcanvas_closede_color',
                    'type'      => 'color',                       
                    'title'     => esc_html__('Hamburger Close Bg Color','solida'),
                    'subtitle'  => esc_html__('Pick color', 'solida'),    
                    'default'   => '',                        
                    'validate'  => 'color', 
                    'required' => array(
                        array(
                            'off_canvas_op',
                            'equals',
                            1,
                        ),
                    ),                        
                ),

                array(
                    'id'        => 'offcanvas_icon_color',
                    'type'      => 'color',                       
                    'title'     => esc_html__('Hamburger Icon Color','solida'),
                    'subtitle'  => esc_html__('Pick color', 'solida'),    
                    'default'   => '',                        
                    'validate'  => 'color',
                    'required' => array(
                        array(
                            'off_canvas_op',
                            'equals',
                            1,
                        ),
                    ),                          
                ),
            )
        )
    );
    
    
    //Preloader settings
    Redux::setSection( $opt_name, array(
        'title'  => esc_html__( 'Preloader', 'solida' ),
        'desc'   => esc_html__( 'Preloader Style Here', 'solida' ),        
        'icon' => 'el el-certificate',
        'fields' => array( 
                array(
                    'id'       => 'show_preloader',
                    'type'     => 'switch', 
                    'title'    => esc_html__('Show Preloader', 'solida'),
                    'subtitle' => esc_html__('You can show or hide preloader', 'solida'),
                    'default'  => false,
                ), 

                array(
                    'id'        => 'preloader_bg_color',
                    'type'      => 'color',                       
                    'title'     => esc_html__('Preloader Background Color','solida'),
                    'subtitle'  => esc_html__('Pick color', 'solida'),    
                    'default'   => '',                        
                    'validate'  => 'color',
                    'required' => array(
                        array(
                            'show_preloader',
                            'equals',
                            1,
                        ),
                    ), 
                    'output' => array(                 
                        'background-color'            => '#tentaz__preloader_here'
                    ),                      
                ), 

                
                array(
                    'id'        => 'preloader_color',
                    'type'      => 'color',                       
                    'title'     => esc_html__('Preloader Color (Half)','solida'),
                    'subtitle'  => esc_html__('Pick color', 'solida'),    
                    'default'   => '',                        
                    'validate'  => 'color',
                    'required' => array(
                        array(
                            'show_preloader',
                            'equals',
                            1,
                        ),
                    ),                       
                ),
                


                array(
                    'id'        => 'preloader_color_left',
                    'type'      => 'color',                       
                    'title'     => esc_html__('Preloader Color (Half)','solida'),
                    'subtitle'  => esc_html__('Pick color', 'solida'),    
                    'default'   => '',                        
                    'validate'  => 'color',
                    'required' => array(
                        array(
                            'show_preloader',
                            'equals',
                            1,
                        ),
                    ),                       
                ), 

                array(
                    'id'    => 'preloader_img', 
                    'url'   => true,     
                    'title' => esc_html__( 'Preloader Image', 'solida' ),                 
                    'type'  => 'media', 
                    'required' => array(
                        array(
                            'show_preloader',
                            'equals',
                            1,
                        ),
                    ),                                 
                ),       
            )
        )
    );    
    //End Preloader settings  

    //-> START Typography
    Redux::setSection( $opt_name, array(
        'title'  => esc_html__( 'Typography', 'solida' ),
        'id'     => 'typography',
        'desc'   => esc_html__( 'You can specify your body and heading font here','solida'),
        'icon'   => 'el el-certificate',
        'fields' => array(
            array(
                'id'       => 'opt-typography-body',
                'type'     => 'typography',
                'title'    => esc_html__( 'Body Font', 'solida' ),
                'subtitle' => esc_html__( 'Specify the body font properties.', 'solida' ),
                'google'   => true, 
                'font-style' =>false,           
                'default'  => array(                    
                    'font-size'   => '16px',
                    'font-family' => 'Roboto',
                    'font-weight' => '400',
                ),
            ),
             array(
                'id'       => 'opt-typography-menu',
                'type'     => 'typography',
                'title'    => esc_html__( 'Navigation Font', 'solida' ),
                'subtitle' => esc_html__( 'Specify the menu font properties.', 'solida' ),
                'google'   => true,
                'font-backup' => true,                
                'all_styles'  => true,              
                'default'  => array(
                    'color'       => '#202427',                    
                    'font-family' => 'Fira Sans Condensed',
                    'google'      => true,
                    'font-size'   => '14px',                    
                    'font-weight' => '600',                    
                ),
            ),
            array(
                'id'          => 'opt-typography-h1',
                'type'        => 'typography',
                'title'       => esc_html__( 'Heading H1', 'solida' ),
                'font-backup' => true,                
                'all_styles'  => true,
                'units'       => 'px',
                'subtitle'    => esc_html__( 'Typography option with each property can be called individually.', 'solida' ),
                'default'     => array(
                    'color'       => '#2C163C',
                    'font-style'  => '700',
                    'font-family' => 'Fira Sans Condensed',
                    'google'      => true,
                    'font-size'   => '50px',
                    'line-height' => '60px'
                    
                    ),
                ),
            array(
                'id'          => 'opt-typography-h2',
                'type'        => 'typography',
                'title'       => esc_html__( 'Heading H2', 'solida' ),
                'font-backup' => true,                
                'all_styles'  => true,                 
                'units'       => 'px',
                // Defaults to px
                'subtitle'    => esc_html__( 'Typography option with each property can be called individually.', 'solida' ),
                'default'     => array(
                    'color'       => '#2C163C',
                    'font-style'  => '700',
                    'font-family' => 'Fira Sans Condensed',
                    'google'      => true,
                    'font-size'   => '40px',
                    'line-height' => '50px'
                    
                ),
                ),
            array(
                'id'          => 'opt-typography-h3',
                'type'        => 'typography',
                'title'       => esc_html__( 'Heading H3', 'solida' ),             
                'units'       => 'px',
                // Defaults to px
                'subtitle'    => esc_html__( 'Typography option with each property can be called individually.', 'solida' ),
                'default'     => array(
                    'color'       => '#2C163C',
                    'font-style'  => '700',
                    'font-family' => 'Fira Sans Condensed',
                    'google'      => true,
                    'font-size'   => '30px',
                    'line-height' => '40px'
                    
                    ),
                ),
            array(
                'id'          => 'opt-typography-h4',
                'type'        => 'typography',
                'title'       => esc_html__( 'Heading H4', 'solida' ),                
                'font-backup' => false,                
                'all_styles'  => true,               
                'units'       => 'px',
                // Defaults to px
                'subtitle'    => esc_html__( 'Typography option with each property can be called individually.', 'solida' ),
                'default'     => array(
                    'color'       => '#2C163C',
                    'font-style'  => '700',
                    'font-family' => 'Fira Sans Condensed',
                    'google'      => true,
                    'font-size'   => '20px',
                    'line-height' => '30px'
                    ),
                ),
            array(
                'id'          => 'opt-typography-h5',
                'type'        => 'typography',
                'title'       => esc_html__( 'Heading H5', 'solida' ),                
                'font-backup' => false,                
                'all_styles'  => true,                
                'units'       => 'px',
                // Defaults to px
                'subtitle'    => esc_html__( 'Typography option with each property can be called individually.', 'solida' ),
                'default'     => array(
                    'color'       => '#2C163C',
                    'font-style'  => '700',
                    'font-family' => 'Fira Sans Condensed',
                    'google'      => true,
                    'font-size'   => '18px',
                    'line-height' => '28px'
                    ),
                ),
            array(
                'id'          => 'opt-typography-6',
                'type'        => 'typography',
                'title'       => esc_html__( 'Heading H6', 'solida' ),
             
                'font-backup' => false,                
                'all_styles'  => true,                
                'units'       => 'px',
                // Defaults to px
                'subtitle'    => esc_html__( 'Typography option with each property can be called individually.', 'solida' ),
                'default'     => array(
                    'color'       => '#2C163C',
                    'font-style'  => '700',
                    'font-family' => 'Fira Sans Condensed',
                    'google'      => true,
                    'font-size'   => '16px',
                    'line-height' => '20px'
                ),
            ),
                
        )
    )                   
    );

    /*Blog Sections*/
    Redux::setSection( $opt_name, array(
        'title'            => esc_html__( 'Blog', 'solida' ),
        'id'               => 'blog',
        'customizer_width' => '450px',
        'icon' => 'el el-certificate',
        )
        );
        
    Redux::setSection( $opt_name, array(
        'title'            => esc_html__( 'Blog Settings', 'solida' ),
        'id'               => 'blog-settings',
        'subsection'       => true,
        'customizer_width' => '450px',      
        'fields'           => array(
        
                array(
                    'id'    => 'blog_banner_main', 
                    'url'   => true,     
                    'title' => esc_html__( 'Blog Page Banner', 'solida' ),                 
                    'type'  => 'media',                                  
                ),

                array(
                    'id'        => 'banner__top__gap',
                    'type'      => 'text',                       
                    'title'     => esc_html__('Banner Top Gap','solida'),   
                    'default'   => '',                             
                ),                        

                array(
                    'id'        => 'banner__btm__gap',
                    'type'      => 'text',                       
                    'title'     => esc_html__('Banner Bottom Gap','solida'),   
                    'default'   => '',                             
                ),  

                array(
                    'id'        => 'blog_bg_color',
                    'type'      => 'color',                           
                    'title'     => esc_html__('Body Backgroud Color','solida'),
                    'subtitle'  => esc_html__('Pick body background color', 'solida'),
                    'default'   => '#fff',
                    'validate'  => 'color',                        
                ),

                array(
                    'id'        => 'blog_bg_sidebar_color',
                    'type'      => 'color',                           
                    'title'     => esc_html__('Sidebar Backgroud Color','solida'),
                    'subtitle'  => esc_html__('Pick Sidebar background color', 'solida'),
                    'default'   => '',
                    'validate'  => 'color',                        
                ),

                array(
                    'id'        => 'blog_meta_color',
                    'type'      => 'color',                           
                    'title'     => esc_html__('Meta Color','solida'),
                    'subtitle'  => esc_html__('Pick Meta color', 'solida'),
                    'default'   => '',
                    'validate'  => 'color',                        
                ),

                array(
                    'id'        => 'breadcrumb__title_text_color',
                    'type'      => 'color',                       
                    'title'     => esc_html__('Title Color','solida'),
                    'subtitle'  => esc_html__('Pick color', 'solida'),    
                    'default'   => '',                        
                    'validate'  => 'color',                        
                ),
                
                array(
                    'id'       => 'blog_title',                               
                    'title'    => esc_html__( 'Blog  Title', 'solida' ),
                    'subtitle' => esc_html__( 'Enter Blog  Title Here', 'solida' ),
                    'type'     => 'text',                                   
                ),
                
                array(
                    'id'               => 'blog-layout',
                    'type'             => 'image_select',
                    'title'            => esc_html__('Select Blog Layout', 'solida'), 
                    'subtitle'         => esc_html__('Select your blog layout', 'solida'),
                    'options'          => array(
                    'full'             => array(
                    'alt'              => 'Blog Style 1', 
                    'img'              => get_template_directory_uri().'/libs/img/1c.png'                                      
                ),
                    '2right'           => array(
                    'alt'              => 'Blog Style 2', 
                    'img'              => get_template_directory_uri().'/libs/img/2cr.png'
                ),
                '2left'            => array(
                'alt'              => 'Blog Style 3', 
                'img'              => get_template_directory_uri().'/libs/img/2cl.png'
                ),                                  
                ),
                'default'          => '2right'
                ),                      
                
                array(
                    'id'               => 'blog-grid',
                    'type'             => 'select',
                    'title'            => esc_html__('Select Blog Gird', 'solida'),                   
                    'desc'             => esc_html__('Select your blog gird layout', 'solida'),
                //Must provide key => value pairs for select options
                'options'          => array(
                    '12'               => esc_html__('1 Column','solida'),                                   
                    '6'                => esc_html__('2 Column', 'solida'),                                         
                    '4'                => esc_html__('3 Column', 'solida'),
                    '3'                => esc_html__('4 Column', 'solida'),
                    ),
                    'default'          => '12',                                  
                ),  
                
                array(
                'id'               => 'blog-author-post',
                'type'             => 'select',
                'title'            => esc_html__('Show Author Info ', 'solida'),                   
                'desc'             => esc_html__('Select author info show or hide', 'solida'),
                //Must provide key => value pairs for select options
                'options'          => array(                                            
                'show'             => esc_html__('Show','solida'), 
                'hide'             => esc_html__('Hide', 'solida'),
                ),
                'default'          => 'show',
                
                ), 

                

                array(
                'id'               => 'blog-category',
                'type'             => 'select',
                'title'            => esc_html__('Show Category', 'solida'),                   
               
                //Must provide key => value pairs for select options
                'options'          => array(                                            
                'show'             => esc_html__('Show','solida'), 
                'hide'             => esc_html__('Hide', 'solida'),
                ),
                'default'          => 'show',
                
                ),  
                

                array(
                'id'               => 'blog-date',
                'type'             => 'select',
                'title'            => esc_html__('Show Date', 'solida'),                   
                'desc'             => esc_html__('Select Date show or hide', 'solida'),
                //Must provide key => value pairs for select options
                'options'          => array(                                            
                'show'             => esc_html__('Show','solida'), 
                'hide'             => esc_html__('Hide', 'solida'),
                ),
                'default'          => 'show',
                ), 
                array(
                    'id'               => 'blog_readmore',                               
                    'title'            => esc_html__( 'Blog  ReadMore Text', 'solida' ),
                    'subtitle'         => esc_html__( 'Enter Blog  ReadMore Here', 'solida' ),
                    'type'             => 'text',                                   
                ),
                
            )
        )       
    );
    
    
    /*Single Post Sections*/
    Redux::setSection( $opt_name, array(
        'title'            => esc_html__( 'Single Post', 'solida' ),
        'id'               => 'spost',
        'subsection'       => true,
        'customizer_width' => '450px',      
        'fields'           => array(                            
        
            array(
                    'id'       => 'blog_banner', 
                    'url'      => true,     
                    'title'    => esc_html__( 'Blog Single page banner', 'solida' ),                  
                    'type'     => 'media',
                    
            ),  
           
            array(
               'id'       => 'blog-meta-single',
               'type'     => 'switch', 
               'title'    => esc_html__('Show Meta? (just on this option)', 'solida'),
               'subtitle' => esc_html__('You can show or hide Meta', 'solida'),
               'default'  => false,
            ),   
           
            array(
               'id'       => 'blog-pagination',
               'type'     => 'switch', 
               'title'    => esc_html__('Single Post Pagination Show/Hide', 'solida'),
               'subtitle' => esc_html__('You can show or hide single post pagination', 'solida'),
               'default'  => false,
            ),     
        )
    ));

    /*Department Sections*/
    Redux::setSection( $opt_name, array(
        'title'            => esc_html__( 'Portfolio Section', 'solida' ),
        'id'               => 'Portfolio',
        'customizer_width' => '450px',
        'icon' => 'el el-certificate',
        'fields'           => array(
            array(
            'id'       => 'disable_portfoli_banner',
            'type'     => 'switch', 
            'title'    => esc_html__('Disable Portfolio Details Banner', 'solida'),
            'subtitle' => esc_html__('You can show or hide banner here', 'solida'),
            'default'  => true,
        ),
        
        array(
            'id'       => 'department_single_image', 
            'url'      => true,     
            'title'    => esc_html__( 'Portfolio Single page banner image', 'solida' ),                    
            'type'     => 'media',
            'required' => array(
                array(
                    'disable_portfoli_banner',
                    'equals',
                    1,
                ),
            ),    
        ),           


        array(
            'id'       => 'portfolio_slug',                               
            'title'    => esc_html__( 'Portfolio Slug', 'solida' ),
            'subtitle' => esc_html__( 'Enter Portfolio Slug Here', 'solida' ),
            'type'     => 'text',
            'default'  => 'portfolio', 
            'required' => array(
                array(
                    'disable_portfoli_banner',
                    'equals',
                    1,
                ),
            ), 
        ), 

        array(
            'id'       => 'portfolio_cat_slug',                               
            'title'    => esc_html__( 'Portfolio Category Slug', 'solida' ),
            'subtitle' => esc_html__( 'Enter Portfolio Cat Slug Here', 'solida' ),
            'type'     => 'text',
            'default'  => '',
            'required' => array(
                array(
                    'disable_portfoli_banner',
                    'equals',
                    1,
                ),
            ),                
        ), 

        array(
            'id'       => 'portfolio_level',                               
            'title'    => esc_html__( 'Portfolio Category Level', 'solida' ),
            'subtitle' => esc_html__( 'Enter Level Here Here', 'solida' ),
            'type'     => 'text',
            'default'  => 'Portfolio Categorires',
            'required' => array(
                array(
                    'disable_portfoli_banner',
                    'equals',
                    1,
                ),
            ),
        ), 
        )
    ) 
);


if ( class_exists( 'WooCommerce' ) ) {
    Redux::setSection( $opt_name, array(
        'title'  => esc_html__( 'Woocommerce', 'solida' ),    
        'icon'   => 'el el-certificate',    
        ) 
    ); 

    Redux::setSection( $opt_name, array(
        'title'            => esc_html__( 'Shop', 'solida' ),
        'id'               => 'tentaz-shop-layout',
        'customizer_width' => '450px',
        'subsection' =>true,      
        'fields'           => array(                      
            array(
                'id'       => 'shop_banner', 
                'url'      => true,     
                'title'    => esc_html__( 'Shop page banner', 'solida' ),                    
                'type'     => 'media',
            ), 
            array(
                    'id'       => 'tentaz-shop-layout',
                    'type'     => 'image_select',
                    'title'    => esc_html__('Select Shop Layout', 'solida'), 
                    'subtitle' => esc_html__('Select your shop layout', 'solida'),
                    'options'  => array(
                        'full'      => array(
                            'alt'   => 'Shop Style 1', 
                            'img'   => get_template_directory_uri().'/libs/img/1c.png'                                      
                        ),
                        'tentaz-right-col' => array(
                            'alt'   => 'Shop Style 2', 
                            'img'   => get_template_directory_uri().'/libs/img/2cr.png'
                        ),
                        'tentaz-left-col'  => array(
                            'alt'   => 'Shop Style 3', 
                            'img'   => get_template_directory_uri().'/libs/img/2cl.png'
                        ),                                  
                    ),
                    'default' => 'full'
                ),

                array(
                    'id'       => 'tentazwc_num_product',
                    'type'     => 'text',
                    'title'    => esc_html__( 'Number of Products Per Page', 'solida' ),
                    'default'  => '9',
                ),

                array(
                    'id'       => 'tentaz_wc_num_product_per_row',
                    'type'     => 'text',
                    'title'    => esc_html__( 'Number of Products Per Row', 'solida' ),
                    'default'  => '3',
                ),

                array(
                    'id'       => 'related_product_per_page',
                    'type'     => 'text',
                    'title'    => esc_html__( 'Related Products Per Page', 'solida' ),
                    'default'  => '3',
                ),
                array(
                'id'       => 'tentaz-disable-sidebar',
                'type'     => 'switch', 
                'title'    => esc_html__('Sidebar Disable For Single', 'solida'),                
                'default'  => true,
                ),                    
            )
        ) 
    );
}

    Redux::setSection( $opt_name, array(
        'title'  => esc_html__( 'Social Icons', 'solida' ),
        'desc'   => esc_html__( 'Add your social icon here', 'solida' ),
        'icon'   => 'el el-certificate',
         'submenu' => true, // Setting submenu to false on a given section will hide it from the WordPress sidebar menu!
        'fields' => array(
            array(
                'id'       => 'facebook',                               
                'title'    => esc_html__( 'Facebook Link', 'solida' ),
                'subtitle' => esc_html__( 'Enter Facebook Link', 'solida' ),
                'type'     => 'text',                     
            ),
                
             array(
                'id'       => 'twitter',                               
                'title'    => esc_html__( 'Twitter Link', 'solida' ),
                'subtitle' => esc_html__( 'Enter Twitter Link', 'solida' ),
                'type'     => 'text'
            ),
            
                array(
                'id'       => 'rss',                               
                'title'    => esc_html__( 'Rss Link', 'solida' ),
                'subtitle' => esc_html__( 'Enter Rss Link', 'solida' ),
                'type'     => 'text'
            ),
                    
            array(
                'id'       => 'pinterest',                               
                'title'    => esc_html__( 'Pinterest Link', 'solida' ),
                'subtitle' => esc_html__( 'Enter Pinterest Link', 'solida' ),
                'type'     => 'text'
            ),
            array(
                'id'       => 'linkedin',                               
                'title'    => esc_html__( 'Linkedin Link', 'solida' ),
                'subtitle' => esc_html__( 'Enter Linkedin Link', 'solida' ),
                'type'     => 'text',            
            ),

            array(
                'id'       => 'instagram',                               
                'title'    => esc_html__( 'Instagram Link', 'solida' ),
                'subtitle' => esc_html__( 'Enter Instagram Link', 'solida' ),
                'type'     => 'text',                       
            ),

             array(
                'id'       => 'youtube',                               
                'title'    => esc_html__( 'Youtube Link', 'solida' ),
                'subtitle' => esc_html__( 'Enter Youtube Link', 'solida' ),
                'type'     => 'text',                       
            ),

            array(
                'id'       => 'tumblr',                               
                'title'    => esc_html__( 'Tumblr Link', 'solida' ),
                'subtitle' => esc_html__( 'Enter Tumblr Link', 'solida' ),
                'type'     => 'text',                       
            ),

            array(
                'id'       => 'vimeo',                               
                'title'    => esc_html__( 'Vimeo Link', 'solida' ),
                'subtitle' => esc_html__( 'Enter Vimeo Link', 'solida' ),
                'type'     => 'text',                       
            ),  

            array(
                'id'       => 'telegram',                               
                'title'    => esc_html__( 'Telegram Link', 'solida' ),
                'subtitle' => esc_html__( 'Enter Telegram Link', 'solida' ),
                'type'     => 'text',                       
            ), 

            array(
                'id'       => 'whatsapp',                               
                'title'    => esc_html__( 'Whatsapp Link', 'solida' ),
                'subtitle' => esc_html__( 'Enter Whatsapp Link', 'solida' ),
                'type'     => 'text',                       
            ),

            array(
                'id'       => 'soundcloud',                               
                'title'    => esc_html__( 'Soundcloud Link', 'solida' ),
                'subtitle' => esc_html__( 'Enter Soundcloud Link', 'solida' ),
                'type'     => 'text',                       
            ),                          
            ) 
        ) 
    );

   
    Redux::setSection( $opt_name, array(
    'title'  => esc_html__( 'Footer Option', 'solida' ),
    'desc'   => esc_html__( 'Footer style here', 'solida' ),
    'icon'   => 'el el-certificate',   
    'fields' => array(

        array(
            'id'        => 'footer_bg_color',
            'type'      => 'color',
            'title'     => esc_html__('Footer Bg Color','solida'),
            'subtitle'  => esc_html__('Pick color.', 'solida'),
            'default'   => '',
            'validate'  => 'color',                        
        ),

        array(
            'id'       => 'footer_bg_image', 
            'url'      => true,     
            'title'    => esc_html__( 'Footer Background Image', 'solida' ),                 
            'type'     => 'media',                                  
        ),

        array(
            'id'               => 'header_grid2',
            'type'             => 'select',
            'title'            => esc_html__('Footer Area Width', 'solida'),             
           
            'options'          => array(                                     
            
                'container' => esc_html__('Container', 'solida'),
                'full'      => esc_html__('Container Fluid', 'solida')
            ),

            'default'          => 'container',            
        ),

        array(
            'id'       => 'footer_logo',
            'type'     => 'media',
            'title'    => esc_html__( 'Footer Logo', 'solida' ),
            'subtitle' => esc_html__( 'Upload your footer logo', 'solida' ),                  
        ), 

     
        array(
            'id'       => 'footer-logo-height',                               
            'title'    => esc_html__( 'Logo Height', 'solida' ),
            'subtitle' => esc_html__( 'Logo max height example(50px)', 'solida' ),
            'type'     => 'text',
            'default'  => ''                    
        ), 
        array(
            'id'        => 'foot_social_color',
            'type'      => 'color',
            'title'     => esc_html__('Social Icon Color','solida'),
            'subtitle'  => esc_html__('Pick color.', 'solida'),
            'default'   => '',
            'validate'  => 'color',                        
        ),                   

        array(
            'id'        => 'foot_social_border_color',
            'type'      => 'color',
            'title'     => esc_html__('Footer Social Border Color','solida'),
            'subtitle'  => esc_html__('Pick color.', 'solida'),
            'default'   => '',
            'validate'  => 'color',                        
        ),                   

        array(
            'id'        => 'foot_social_hover',
            'type'      => 'color',
            'title'     => esc_html__('Social Icon Hover','solida'),
            'subtitle'  => esc_html__('Pick color.', 'solida'),
            'default'   => '',
            'validate'  => 'color',                        
        ),   

        array(
            'id'        => 'footer_text_size',
            'type'      => 'text',                       
            'title'     => esc_html__('Footer Font Size','solida'),
            'subtitle'  => esc_html__('Font Size', 'solida'),    
            'default'   => '',                                            
        ),  

        array(
            'id'        => 'footer_h3_size',
            'type'      => 'text',                       
            'title'     => esc_html__('Footer Title Font Size','solida'),
            'subtitle'  => esc_html__('Font Size', 'solida'),    
            'default'   => '',                                            
        ),  

        array(
            'id'        => 'footer_link_size',
            'type'      => 'text',                       
            'title'     => esc_html__('Footer Link Font Size','solida'),
            'subtitle'  => esc_html__('Font Size', 'solida'),    
            'default'   => '',                                            
        ), 
        array(
            'id'        => 'footer_title_color',
            'type'      => 'color',
            'title'     => esc_html__('Footer Title Color','solida'),
            'subtitle'  => esc_html__('Pick color.', 'solida'),
            'default'   => '',
            'validate'  => 'color',                        
        ), 

        array(
            'id'        => 'footer_title_border_color',
            'type'      => 'color',
            'title'     => esc_html__('Footer Title Border Color','solida'),
            'subtitle'  => esc_html__('Pick color.', 'solida'),
            'default'   => '',
            'validate'  => 'color', 
            'output' => array(                 
            'background-color'            => '.tentaz-footer-here .tentaz-footer-top-here h3.footer-title:after'
            )                       
        ),   

        array(
            'id'        => 'footer_text_color',
            'type'      => 'color',
            'title'     => esc_html__('Footer Text Color','solida'),
            'subtitle'  => esc_html__('Pick color.', 'solida'),
            'default'   => '',
            'validate'  => 'color',                        
        ),

        array(
            'id'        => 'footer_icon_color',
            'type'      => 'color',
            'title'     => esc_html__('Footer Icon Color','solida'),
            'subtitle'  => esc_html__('Pick color.', 'solida'),
            'default'   => '',
            'validate'  => 'color', 
            'output' => array(                 
            'color'            => '.tentaz-footer-here .fa-ul li i, .tentaz-footer-here .recent-post-widget .show-featured .post-desc i'
            )                       
        ),   

        array(
            'id'        => 'footer_link_color',
            'type'      => 'color',
            'title'     => esc_html__('Footer Link Hover Color','solida'),
            'subtitle'  => esc_html__('Pick color.', 'solida'),
            'default'   => '',
            'validate'  => 'color',                        
        ),

        array(
            'id'        => 'footer_input_bg_color',
            'type'      => 'color',
            'title'     => esc_html__('Footer Input Bg Color','solida'),
            'subtitle'  => esc_html__('Pick color.', 'solida'),
            'default'   => '',
            'validate'  => 'color',                        
        ),    

        array(
            'id'        => 'footer_button_bg_color',
            'type'      => 'color',
            'title'     => esc_html__('Footer Button Bg Color','solida'),
            'subtitle'  => esc_html__('Pick color.', 'solida'),
            'default'   => '',
            'validate'  => 'color',                        
        ), 

        array(
            'id'        => 'footer_button_bg_hover_color',
            'type'      => 'color',
            'title'     => esc_html__('Footer Button Hover Bg Color','solida'),
            'subtitle'  => esc_html__('Pick color.', 'solida'),
            'default'   => '',
            'validate'  => 'color',                        
        ),

 

        array(
            'id'        => 'footer_button_text_color',
            'type'      => 'color',
            'title'     => esc_html__('Footer Button Text Color','solida'),
            'subtitle'  => esc_html__('Pick color.', 'solida'),
            'default'   => '',
            'validate'  => 'color',                        
        ),                  
                       
                
            array(
                'id'       => 'copyright',
                'type'     => 'textarea',
                'title'    => esc_html__( 'Footer CopyRight', 'solida' ),
                'subtitle' => esc_html__( 'Change your footer copyright text ?', 'solida' ),
                'default'  => esc_html__( '2023 All Rights Reserved', 'solida' ),
            ),  

            array(
                'id'       => 'copyright_bg',
                'type'     => 'color',
                'title'    => esc_html__( 'Copyright Background', 'solida' ),
                'subtitle' => esc_html__( 'Copyright Background Color', 'solida' ),      
                'default'  => '',            
            ),

            array(
                'id'        => 'copyright_borders',
                'type'      => 'color_rgba',                       
                'title'     => esc_html__('Copyright Border Color','solida'),
                'subtitle'  => esc_html__('Pick color', 'solida'),   
                  
                'default'  => array(
                    'color'     => '',
                    'alpha'     => 1                    
                ),
                'output' => array(                 
                    'border-color'            => '.footer-bottom .container, .footer-bottom .container-fluid'
                )
            ),

            array(
                'id'       => 'copyright_text_color',
                'type'     => 'color',
                'title'    => esc_html__( 'Copyright Text Color', 'solida' ),
                'subtitle' => esc_html__( 'Copyright Text Color', 'solida' ),      
                'default'  => '',            
            ), 

            array(
                'id'        => 'copyright_dots_color',
                'type'      => 'color',
                'title'     => esc_html__('Copyright Dots Color','solida'),
                'subtitle'  => esc_html__('Pick color.', 'solida'),
                'default'   => '',
                'validate'  => 'color', 
                'output' => array(                 
                'background-color'            => '.footer-bottom .copyright-widget .widget_nav_menu ul.menu li a:after'
                )                       
            ), 
        ) 
    ) 
    );
    
    Redux::setSection( $opt_name, array(
    'title'  => esc_html__( '404 Error Page', 'solida' ),
    'desc'   => esc_html__( '404 details  here', 'solida' ),
    'icon'   => 'el el-certificate',    
    'fields' => array(

                array(
                    'id'       => 'error__404_image',
                    'type'     => 'media',
                    'title'    => esc_html__( 'Upload Error Image', 'solida' ),
                    'subtitle' => esc_html__( 'Upload your image', 'solida' ),
                    'url'=> true,               
                ), 

                array(
                    'id'       => 'title_404',
                    'type'     => 'text',
                    'title'    => esc_html__( 'Title', 'solida' ),
                    'subtitle' => esc_html__( 'Enter title for 404 page', 'solida' ), 
                    'default'  => esc_html__('404', 'solida')                
                ),  
                
                array(
                    'id'       => 'text_404',
                    'type'     => 'text',
                    'title'    => esc_html__( 'Text', 'solida' ),
                    'subtitle' => esc_html__( 'Enter text for 404 page', 'solida' ),  
                    'default'  => esc_html__('Page Not Found', 'solida')             
                ),                      
                       
                
                array(
                    'id'       => 'tentaz_home',
                    'type'     => 'text',
                    'title'    => esc_html__( 'Back to Home Button Label', 'solida' ),
                    'subtitle' => esc_html__( 'Enter label for "Back to Home" button', 'solida' ),
                    'default'  => esc_html__('Back to Homepage', 'solida') 
                ),

                array(
                    'id'       => 'error_bg',
                    'type'     => 'media',
                    'title'    => esc_html__( 'Upload 404 Page Bg', 'solida' ),
                    'subtitle' => esc_html__( 'Upload your image', 'solida' ),
                    'url'=> true                
                ),                             
            ) 
        ) 
    ); 


    if ( ! function_exists( 'compiler_action' ) ) {
        function compiler_action( $options, $css, $changed_values ) {
            echo '<h1>The compiler hook has run!</h1>';
            echo "<pre>";
            print_r( $changed_values ); // Values that have changed since the last save
            echo "</pre>";           
        }
    }

    /**
     * Custom function for the callback validation referenced above
     * */
    if ( ! function_exists( 'redux_validate_calltentaz_function' ) ) {
        function redux_validate_calltentaz_function( $field, $value, $existing_value ) {
            $error   = false;
            $warning = false;

            //do your validation
            if ( $value == 1 ) {
                $error = true;
                $value = $existing_value;
            } elseif ( $value == 2 ) {
                $warning = true;
                $value   = $existing_value;
            }

            $return['value'] = $value;

            if ( $error == true ) {
                $field['msg']    = 'your custom error message';
                $return['error'] = $field;
            }

            if ( $warning == true ) {
                $field['msg']      = 'your custom warning message';
                $return['warning'] = $field;
            }

            return $return;
        }
    }

    /**
     * Custom function for the callback referenced above
     */
    if ( ! function_exists( 'redux_my_custom_field' ) ) {
        function redux_my_custom_field( $field, $value ) {
            print_r( $field );
            echo '<br/>';
            print_r( $value );
        }
    }

    /**
     * Custom function for filtering the sections array. Good for child themes to override or add to the sections.     
     * */
    if ( ! function_exists( 'dynamic_section' ) ) {
        function dynamic_section( $sections ) {
            //$sections = array();
            $sections[] = array(
                'title'  => esc_html__( 'Section via hook', 'solida' ),
                'desc'   => esc_html__( '<p class="description">This is a section created by adding a filter to the sections array. Can be used by child themes to add/remove sections from the options.</p>', 'solida' ),
                'icon'   => 'el el-paper-clip',              
                'fields' => array()
            );
            return $sections;
        }
    }

    /**
     * Filter hook for filtering the args. Good for child themes to override or add to the args array. Can also be used in other functions.
     * */
    if ( ! function_exists( 'change_arguments' ) ) {
        function change_arguments( $args ) {
            return $args;
        }
    }

    /**
     * Filter hook for filtering the default value of any given field. Very useful in development mode.
     * */
    if ( ! function_exists( 'change_defaults' ) ) {
        function change_defaults( $defaults ) {
            $defaults['str_replace'] = 'Testing filter hook!';
            return $defaults;
        }
    }

    /**
     * Removes the demo link and the notice of integrated demo from the redux-framework plugin
     */
    if ( ! function_exists( 'remove_demo' ) ) {
        function remove_demo() {
            // Used to hide the demo mode link from the plugin page. Only used when Redux is a plugin.
            if ( class_exists( 'ReduxFrameworkPlugin' ) ) {
                remove_action( 'plugin_row_meta', array(
                    ReduxFrameworkPlugin::instance(),
                    'plugin_metalinks'
                ), null, 2 );              
                remove_action( 'admin_notices', array( ReduxFrameworkPlugin::instance(), 'admin_notices' ) );
            }
        }
    }