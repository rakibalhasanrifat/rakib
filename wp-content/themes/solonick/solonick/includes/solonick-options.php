<?php
    /**
     * ReduxFramework Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }


    // This is your option name where all the Redux data is stored.
    $opt_name = "solonick";

    // This line is only for altering the demo. Can be easily removed.
    $opt_name = apply_filters( 'solonick/opt_name', $opt_name );

    /*
     *
     * --> Used within different fields. Simply examples. Search for ACTUAL DECLARATION for field examples
     *
     */

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        // TYPICAL -> Change these values as you need/desire
        'opt_name'             => $opt_name,
		'class'                => 'admin-color-pimax',
        // This is where your data is stored in the database and also becomes your global variable name.
        'display_name'         => $theme->get( 'Name' ),
        // Name that appears at the top of your panel
        'display_version'      => $theme->get( 'Version' ),
        // Version that appears at the top of your panel
        'menu_type'            => 'menu',
        //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
        'allow_sub_menu'       => true,
        // Show the sections below the admin menu item or not
        'menu_title'           => esc_html__( 'Solonick Options', 'solonick' ),
        'page_title'           => esc_html__( 'Solonick Options', 'solonick' ),
        // You will need to generate a Google API key to use this feature.
        // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
        'google_api_key'       => 'AIzaSyCN8bSGZHdbSOXu0HbhXf8j0SnswTmbCNw',
        // Set it you want google fonts to update weekly. A google_api_key value is required.
        'google_update_weekly' => true,
        // Must be defined to add google fonts to the typography module
        'async_typography'     => false,
        // Use a asynchronous font on the front end or font string
        //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
        'admin_bar'            => true,
        // Show the panel pages on the admin bar
        'admin_bar_icon'       => 'dashicons-portfolio',
        // Choose an icon for the admin bar menu
        'admin_bar_priority'   => 50,
        // Choose an priority for the admin bar menu
        'global_variable'      => '',
        // Set a different name for your global variable other than the opt_name
        'dev_mode'             => false,
		'async_typography' => false,
        // Show the time the page took to load, etc
        'update_notice'        => false,
        // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
        'customizer'           => true,
        // Enable basic customizer support
        //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
        //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

        // OPTIONAL -> Give you extra features
        'page_priority'        => null,
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
        // Global shut-off for dynamic CSS output by the solonick. Will also disable google fonts output
        'output_tag'           => true,
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
                    'solonick'   => 'slide',
                    'duration' => '500',
                    'event'    => 'mouseover',
                ),
                'hide' => array(
                    'solonick'   => 'slide',
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
        $args['intro_text'] = sprintf( esc_html__( '', 'solonick' ), $v );
    } else {
        $args['intro_text'] = esc_html__( '', 'solonick' );
    }

    // Add content after the form.
    $args['footer_text'] = esc_html__( '', 'solonick' );

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */


    /*
     * ---> START HELP TABS
     */

    $tabs = array(
        array(
            'id'      => 'redux-help-tab-1',
            'title'   => esc_html__( 'Support', 'solonick' ),
            'content' => esc_html__( 'Send us a mail by using our item support form.', 'solonick' )
        ),
        
    );
    Redux::setHelpTab( $opt_name, $tabs );

    // Set the help sidebar
    $content = esc_html__( 'Send us a mail by using our item support form.', 'solonick' );
    Redux::setHelpSidebar( $opt_name, $content );


    /*
     * <--- END HELP TABS
     */


    /*
     *
     * ---> START SECTIONS
     *
     */

    /*

        As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for


     */

    // ACTUAL DECLARATION OF SECTIONS
                Redux::setSection( $opt_name, array(
                    'title'  => esc_html__( 'General Settings', 'solonick' ),
                    'desc'   => esc_html__( '', 'solonick' ),
                    'icon'   => 'el-icon-home-alt',
                    // 'submenu' => false, // Setting submenu to false on a given section will hide it from the WordPress sidebar menu!
                    'fields' => array(

                     array(
							'id' => 'smalllogo',
							'type' => 'button_set',
							'title' => esc_html__('Small Logo', 'solonick'),
							'subtitle' => esc_html__('', 'solonick'),
							'desc' => '',
							'options' => array(
									'st1'=> esc_html__('Disable', 'solonick'),
									'st2' => esc_html__('Enable', 'solonick'),
									
							),
							'default'  => 'st1'
					),
					
					array(
							'id' => 'logopicsmall',
							'type' => 'media',
							'compiler' => 'true',
							'title' => esc_html__('Upload  Logo', 'solonick'),
							'subtitle' => esc_html__('', 'solonick'),
							'required' => array('smalllogo', '=' , 'st2')
					),
					
					$fields = array(
					'id'       => 'opt_small_logo_dimensions',
					'type'     => 'dimensions',
					'units'    => array('em','px','%'),
					'output' => array('.logo-holder img'),
					'title'    => __('Small Logo Size', 'solonick'),
					'subtitle' => __('.', 'solonick'),
					'desc'     => __('Optional', 'solonick'),
					'default'  => array(
						'Width'   => '30', 
						'Height'  => '35'
					),
					'required' => array('smalllogo', '=' , 'st2')
				),
					 
					
					array(
							'id' => 'textlogo',
							'type' => 'button_set',
							'title' => esc_html__('Select Logo Format', 'solonick'),
							'subtitle' => esc_html__('', 'solonick'),
							'desc' => '',
							'options' => array(
									'st1'=> esc_html__('Text Logo', 'solonick'),
									'st2' => esc_html__('Image Logo', 'solonick'),
									
							),
							'default'  => 'st1'
					),
					 
					array(
							'id' => 'logopic',
							'type' => 'media',
							'compiler' => 'true',
							'title' => esc_html__('Upload  Logo', 'solonick'),
							'subtitle' => esc_html__('', 'solonick'),
							'required' => array('textlogo', '=' , 'st2')
					),
					
					$fields = array(
					'id'       => 'opt_logo_dimensions',
					'type'     => 'dimensions',
					'units'    => array('em','px','%'),
					'output' => array('.header-logo img'),
					'title'    => __('Logo Size', 'solonick'),
					'subtitle' => __('.', 'solonick'),
					'desc'     => __('Optional', 'solonick'),
					'default'  => array(
						'Width'   => '140', 
						'Height'  => '64'
					),
					'required' => array('textlogo', '=' , 'st2')
				),
					
									
					
					array(
							'id' => 'logotext',
							'type' => 'text',
							'title' => esc_html__('Logo Text ', 'solonick'),
							'subtitle' => esc_html__('', 'solonick'),
							'required' => array('textlogo', '=' , 'st1')
					
					),
					
					
					array(
			                'id' => 'notice_loading_option',
			                'type' => 'info',
			                'notice' => true,
			                'style' => 'success',
			                'title' => esc_html__('Preloader Options', 'solonick'),
			                'desc' => esc_html__('Preloader options of your site.', 'solonick')
			            ),
						
						array(
							'id' => 'preloader_enable_opt',
							'type' => 'button_set',
							'title' => esc_html__('Site Preloader', 'solonick'),
							'subtitle' => esc_html__('Enable/ Disable site preloader.', 'solonick'),
							'desc' => '',
							'options' => array(
									'st1'=> esc_html__('Enable', 'solonick'),
									'st2' => esc_html__('Disable', 'solonick'),
									
							),
							'default'  => 'st1'
						),
						
						$fields = array(
						'id'       => 'opt_loader_dimensions',
						'type'     => 'dimensions',
						'units'    => array('em','px','%'),
						'output' => array('.pin'),
						'title'    => __('Loading Section Width.', 'solonick'),
						'subtitle' => __('.', 'solonick'),
						'desc'     => __('Use this field, if site title  overlapping the loading text. Default width 200px.', 'solonick'),
						'default'  => array(
							'Width'   => '200', 
							'Height'  => '40'
						),
						'required' => array('preloader_enable_opt', '=' , 'st1')
						
					),
					
						
					array(
							'id' => 'loading_site_title',
							'type' => 'text',
							'compiler' => 'true',
							'title' => esc_html__('Site Title', 'solonick'),
							'subtitle' => esc_html__('E.X: Solonick', 'solonick'),
							'required' => array('preloader_enable_opt', '=' , 'st1')
							
					),
					
					array(
							'id' => 'loading_translet_title',
							'type' => 'text',
							'compiler' => 'true',
							'title' => esc_html__('Loading', 'solonick'),
							'subtitle' => esc_html__('Translet Option.', 'solonick'),
							'required' => array('preloader_enable_opt', '=' , 'st1')
							
					),
					
				  )
               ) );
			   
			   
			   
			   Redux::setSection( $opt_name, array(
                    'icon'   => 'el-icon-idea',
                    'title'  => esc_html__( 'Header Options', 'solonick' ),
                    'fields' => array(
					
					array(
			                'id' => 'notice_one_menu_scroll',
			                'type' => 'info',
			                'notice' => true,
			                'style' => 'success',
			                'title' => esc_html__('Scroll Down Section', 'solonick'),
			                'desc' => esc_html__('Scroll down section of one page scrolling menu. ', 'solonick')
			            ),
						
					array(
							'id' => 'scroll_down_opt',
							'type' => 'button_set',
							'title' => esc_html__('Scroll Down Sections', 'solonick'),
							'subtitle' => esc_html__('', 'solonick'),
							'desc' => '',
							'options' => array(
									'st1'=> esc_html__('Disable', 'solonick'),
									'st2' => esc_html__('Enable', 'solonick'),
									
							),
							'default'  => 'st1'
					),
					
					array(
			                'id' => 'notice_header_menu',
			                'type' => 'info',
			                'notice' => true,
			                'style' => 'success',
			                'title' => esc_html__('Menu Options', 'solonick'),
			                'desc' => esc_html__('Menu options of your site header.', 'solonick')
			            ),
						
					array(
							'id' => 'menu_st_title',
							'type' => 'text',
							'compiler' => 'true',
							'title' => esc_html__('Menu Section Title', 'solonick'),
							'subtitle' => esc_html__('E.X: Menu', 'solonick'),
							
					),
					
					array(
							'id' => 'menu_hover_effect',
							'type' => 'button_set',
							'title' => esc_html__('Menu Item Hover Effect', 'solonick'),
							'subtitle' => esc_html__('', 'solonick'),
							'desc' => '',
							'options' => array(
									'st1'=> esc_html__('Enable', 'solonick'),
									'st2' => esc_html__('Disable', 'solonick'),
									
							),
							'default'  => 'st1'
					),
					
					array(
			                'id' => 'notice_header_share',
			                'type' => 'info',
			                'notice' => true,
			                'style' => 'success',
			                'title' => esc_html__('Share Options', 'solonick'),
			                'desc' => esc_html__('Share options of your site header.', 'solonick')
			            ),
					
					array(
							'id' => 'headershare_opt',
							'type' => 'button_set',
							'title' => esc_html__('Share Option', 'solonick'),
							'subtitle' => esc_html__('', 'solonick'),
							'desc' => '',
							'options' => array(
									'st1'=> esc_html__('Disable', 'solonick'),
									'st2' => esc_html__('Enable', 'solonick'),
									
									
							),
							'default'  => 'st1'
					),
					
					array(
							'id' => 'headershare_mob_opt',
							'type' => 'button_set',
							'title' => esc_html__('Share Option for Small Device', 'solonick'),
							'subtitle' => esc_html__('', 'solonick'),
							'desc' => '',
							'options' => array(
									'st1'=> esc_html__('Enable', 'solonick'),
									'st2' => esc_html__('Disable', 'solonick'),
									
									
							),
							'default'  => 'st1',
							'required' => array('headershare_opt', '=' , 'st2')
					),
					
					array(
			                'id' => 'notice_header_share_translation',
			                'type' => 'info',
			                'notice' => true,
			                'style' => 'success',
			                'title' => esc_html__('Share Section Translation Options', 'solonick'),
			                'desc' => esc_html__('Share Section Text Translation Options', 'solonick'),
							'required' => array('headershare_opt', '=' , 'st2')
			            ),
					
					
					array(
							'id' => 'share_bt_title',
							'type' => 'text',
							'compiler' => 'true',
							'title' => esc_html__('Text 1', 'solonick'),
							'subtitle' => esc_html__('E.X: Share This', 'solonick'),
							'required' => array('headershare_opt', '=' , 'st2')
					),
					
					array(
							'id' => 'share_bt_title2',
							'type' => 'text',
							'compiler' => 'true',
							'title' => esc_html__('Text 2', 'solonick'),
							'subtitle' => esc_html__('E.X: Share', 'solonick'),
							'required' => array('headershare_opt', '=' , 'st2')
					),
					
					array(
							'id' => 'share_bt_title3',
							'type' => 'text',
							'compiler' => 'true',
							'title' => esc_html__('Text 3', 'solonick'),
							'subtitle' => esc_html__('E.X: Close', 'solonick'),
							'required' => array('headershare_opt', '=' , 'st2')
					),
					
					
					
					
					
					array(
			                'id' => 'notice_header_contact',
			                'type' => 'info',
			                'notice' => true,
			                'style' => 'success',
			                'title' => esc_html__('Contact Page Options', 'solonick'),
			                'desc' => esc_html__('Contact Page options of your site header.', 'solonick')
			            ),
					
					array(
							'id' => 'headercontact_opt',
							'type' => 'button_set',
							'title' => esc_html__('Contact Page Option', 'solonick'),
							'subtitle' => esc_html__('', 'solonick'),
							'desc' => '',
							'options' => array(
									'st1'=> esc_html__('Disable', 'solonick'),
									'st2' => esc_html__('Enable', 'solonick'),
									
									
							),
							'default'  => 'st1'
					),
					
					array(
							'id' => 'contact_bt_title',
							'type' => 'text',
							'compiler' => 'true',
							'title' => esc_html__('Button Title', 'solonick'),
							'subtitle' => esc_html__('E.X: Get in Touch', 'solonick'),
							'required' => array('headercontact_opt', '=' , 'st2')
					),
					
					array(
							'id' => 'con_p_url',
							'type' => 'text',
							'compiler' => 'true',
							'title' => esc_html__('Contact Page URL', 'solonick'),
							'subtitle' => esc_html__('', 'solonick'),
							'required' => array('headercontact_opt', '=' , 'st2')
					),
					
					
					
					
                    )
                ) );
				
				if (class_exists('WooCommerce')) {
				Redux::setSection( $opt_name, array(
                    'icon'   => 'el el-shopping-cart-sign',
                    'title'  => esc_attr__( 'Shop Options', 'solonick' ),
                    'fields' => array(
					
					array(
							'id' => 'wr-shop-opt',
							'type' => 'info',
		                    'notice' => true,
		                    'style' => 'info',
							'title' => esc_attr__('Shop Header Options', 'solonick'),
							'desc' => esc_attr__(' ', 'solonick')
							
					  ),

					array(
							'id' => 'shopheaderimg',
							'type' => 'media',
							'compiler' => 'true',
							'title' => esc_attr__('Upload Shop Page Header Image', 'solonick'),
							'subtitle' => esc_attr__('', 'solonick'),
							
					),
					
					array(
							'id' => 'shopsubtitle',
							'type' => 'textarea',
							'title' => esc_attr__('Sub Title ', 'solonick'),
							'subtitle' => esc_attr__('Shop page sub title', 'solonick'),
							
					),
					
					
					array(
			                'id' => 'notice_shop_allto',
			                'type' => 'info',
			                'notice' => true,
			                'style' => 'success',
			                'title' => esc_html__('Call To Action Options', 'solonick'),
			                'desc' => esc_html__('', 'solonick')
			            ),
						
					array(
							'id' => 'shop_call_to_title',
							'type' => 'text',
							'title' => esc_attr__('Title ', 'solonick'),
							'subtitle' => esc_attr__('Call To Action Title', 'solonick'),
							
					),
					
					array(
							'id' => 'shop_call_to_buttontxt',
							'type' => 'text',
							'title' => esc_attr__('Button Text', 'solonick'),
							'subtitle' => esc_attr__('', 'solonick'),
							
					),
					
					array(
							'id' => 'shop_call_to_buttonurl',
							'type' => 'text',
							'title' => esc_attr__('Button URL', 'solonick'),
							'subtitle' => esc_attr__('', 'solonick'),
							
					),
					
					
					
					
                    )
                ) );
				}
				
				Redux::setSection( $opt_name, array(
                    'icon'   => 'el-icon-bullhorn',
                    'title'  => esc_html__( '404 Page Options', 'solonick' ),
                    'fields' => array(
					
					array(
							'id' => '404back',
							'type' => 'media',
							'compiler' => 'true',
							'title' => esc_html__('Upload  404 Page Background Image', 'solonick'),
							'subtitle' => esc_html__('', 'solonick'),
							
					),
					
					array(
			                'id' => 'notice_404_opt',
			                'type' => 'info',
			                'notice' => true,
			                'style' => 'info',
			                'title' => esc_html__('Call To Action', 'solonick'),
			                'desc' => esc_html__('404 Page Footer Call To Action Section Options', 'solonick')
			        ),
					
					array(
							'id' => '404subscribe',
							'type' => 'button_set',
							'title' => esc_html__('Call To Action', 'solonick'),
							'subtitle' => esc_html__('', 'solonick'),
							'desc' => '',
							'options' => array(
									'st1'=> esc_html__('Disable', 'solonick'),
									'st2' => esc_html__('Enable', 'solonick'),
									
									
							),
							'default'  => 'st1'
					),
					
					
					
					array(
							'id' => '40_call_to_title',
							'type' => 'text',
							'title' => esc_html__('Title ', 'solonick'),
							'subtitle' => esc_html__('', 'solonick'),
							'required' => array('404subscribe', '=' , 'st2')
							
					),
					
					array(
							'id' => '40_call_to_bt_text',
							'type' => 'text',
							'title' => esc_html__('Button Text ', 'solonick'),
							'subtitle' => esc_html__('', 'solonick'),
							'required' => array('404subscribe', '=' , 'st2')
							
					),
					
					array(
							'id' => '40_call_to_bt_url',
							'type' => 'text',
							'title' => esc_html__('Button url ', 'solonick'),
							'subtitle' => esc_html__('', 'solonick'),
							'required' => array('404subscribe', '=' , 'st2')
							
					),
					
					
					
                    )
                ) );
				
			
				
				Redux::setSection( $opt_name, array(
                    'icon'   => 'el-icon-bullhorn',
                    'title'  => esc_html__( 'Blog & Others Post Type Options', 'solonick' ),
                    'fields' => array(
					
					array(
							'id' => 'blogtyle',
							'type' => 'button_set',
							'title' => esc_html__('Select Blog Layout', 'solonick'),
							'subtitle' => esc_html__('', 'solonick'),
							'desc' => '',
							'options' => array(
									'st1'=> esc_html__('Right Sidebar', 'solonick'),
									'st2' => esc_html__('Left Sidebar', 'solonick'),
									
									
							),
							'default'  => 'st1'
					),
					
					
					
					array(
							'id' => 'blogtitle',
							'type' => 'text',
							'title' => esc_html__('Index Title ', 'solonick'),
							'subtitle' => esc_html__('', 'solonick'),
						
					),
					
					
					
					array(
							'id' => 'blog_details_user',
							'type' => 'button_set',
							'title' => esc_html__('User Information', 'solonick'),
							'subtitle' => esc_html__('User information on Blog details page.', 'solonick'),
							'desc' => '',
							'options' => array(
									'st1'=> esc_html__('Disable', 'solonick'),
									'st2' => esc_html__('Enable', 'solonick'),
									
									
							),
							'default'  => 'st1'
					),
					
					array(
							'id' => 'blog_page_url',
							'type' => 'text',
							'title' => esc_html__('Blog Page URL', 'solonick'),
							'subtitle' => esc_html__('', 'solonick'),
							
					),
					
					array(
			                'id' => 'notice_port_opt',
			                'type' => 'info',
			                'notice' => true,
			                'style' => 'success',
			                'title' => esc_html__('Portfolio Page Option', 'solonick'),
			                'desc' => esc_html__('', 'solonick')
			        ),
					
					array(
							'id' => 'port_page_url',
							'type' => 'text',
							'title' => esc_html__('Portfolio Page URL', 'solonick'),
							'subtitle' => esc_html__('', 'solonick'),
							
					),
					
					array(
			                'id' => 'notice_music_opt',
			                'type' => 'info',
			                'notice' => true,
			                'style' => 'success',
			                'title' => esc_html__('Music Page Option', 'solonick'),
			                'desc' => esc_html__('', 'solonick')
			        ),
					
					array(
							'id' => 'music_page_url',
							'type' => 'text',
							'title' => esc_html__('Music Page URL', 'solonick'),
							'subtitle' => esc_html__('', 'solonick'),
							
					),
					
					array(
			                'id' => 'notice_team_opt',
			                'type' => 'info',
			                'notice' => true,
			                'style' => 'success',
			                'title' => esc_html__('Team Page Option', 'solonick'),
			                'desc' => esc_html__('', 'solonick')
			        ),
					
					array(
							'id' => 'team_page_url',
							'type' => 'text',
							'title' => esc_html__('Team Page URL', 'solonick'),
							'subtitle' => esc_html__('', 'solonick'),
							
					),
					
					
                    )
                ) );
				
				Redux::setSection( $opt_name, array(
                    'icon'   => 'el-icon-cog',
                    'title'  => __( 'Translation Options', 'solonick' ),
                    'fields' => array(
					
					array(
							'id' => 'wr-blog-opt2',
							'type' => 'info',
		                    'notice' => true,
		                    'style' => 'info',
							'title' => esc_html__('Translate Text', 'solonick'),
							'desc' => esc_html__(' ', 'solonick')
							
					  ),

					array(
							'id' => 'translet_opt_1',
							'type' => 'text',
							'title' => esc_html__('Close Menu', 'solonick'),
							'subtitle' => esc_html__('', 'solonick'),
					),
					
					array(
							'id' => 'translet_opt_2',
							'type' => 'text',
							'title' => esc_html__('Scroll Down', 'solonick'),
							'subtitle' => esc_html__('', 'solonick'),
					),
					
					array(
							'id' => 'translet_opt_3',
							'type' => 'text',
							'title' => esc_html__('Back to home', 'solonick'),
							'subtitle' => esc_html__('', 'solonick'),
					),
					
					array(
							'id' => 'translet_opt_4',
							'type' => 'text',
							'title' => esc_html__('Lets Start', 'solonick'),
							'subtitle' => esc_html__('', 'solonick'),
					),
					
					array(
							'id' => 'translet_opt_5',
							'type' => 'text',
							'title' => esc_html__('Search...', 'solonick'),
							'subtitle' => esc_html__('', 'solonick'),
					),
					
					array(
							'id' => 'translet_opt_6',
							'type' => 'text',
							'title' => esc_html__('Tags', 'solonick'),
							'subtitle' => esc_html__('', 'solonick'),
					),
					
					array(
							'id' => 'translet_opt_7',
							'type' => 'text',
							'title' => esc_html__('Categories', 'solonick'),
							'subtitle' => esc_html__('', 'solonick'),
					),
					
					array(
							'id' => 'translet_opt_8',
							'type' => 'text',
							'title' => esc_html__('Category', 'solonick'),
							'subtitle' => esc_html__('', 'solonick'),
					),
					
					array(
							'id' => 'translet_opt_9',
							'type' => 'text',
							'title' => esc_html__('Read More', 'solonick'),
							'subtitle' => esc_html__('', 'solonick'),
					),
					
					array(
							'id' => 'translet_opt_10',
							'type' => 'text',
							'title' => esc_html__('Info', 'solonick'),
							'subtitle' => esc_html__('', 'solonick'),
					),
					
					array(
							'id' => 'translet_opt_11',
							'type' => 'text',
							'title' => esc_html__('All Projects', 'solonick'),
							'subtitle' => esc_html__('', 'solonick'),
					),
					
					array(
							'id' => 'translet_opt_12',
							'type' => 'text',
							'title' => esc_html__('All Members', 'solonick'),
							'subtitle' => esc_html__('', 'solonick'),
					),
					
					array(
							'id' => 'translet_opt_13',
							'type' => 'text',
							'title' => esc_html__('All Albums', 'solonick'),
							'subtitle' => esc_html__('', 'solonick'),
					),
					
					array(
							'id' => 'translet_opt_13_p',
							'type' => 'text',
							'title' => esc_html__('All Posts', 'solonick'),
							'subtitle' => esc_html__('', 'solonick'),
					),
					
					array(
							'id' => 'translet_opt_14',
							'type' => 'text',
							'title' => esc_html__('404', 'solonick'),
							'subtitle' => esc_html__('', 'solonick'),
					),
					
					array(
							'id' => 'translet_opt_15',
							'type' => 'text',
							'title' => esc_html__('Were sorry, but the Page you were looking for, couldnt be found.', 'solonick'),
							'subtitle' => esc_html__('', 'solonick'),
					),
					
					array(
							'id' => 'translet_opt_16',
							'type' => 'text',
							'title' => esc_html__('or', 'solonick'),
							'subtitle' => esc_html__('', 'solonick'),
					),
					
					array(
							'id' => 'translet_opt_17',
							'type' => 'text',
							'title' => esc_html__('Previous Page', 'solonick'),
							'subtitle' => esc_html__('', 'solonick'),
					),
					
					array(
							'id' => 'translet_opt_18',
							'type' => 'text',
							'title' => esc_html__('Next Page', 'solonick'),
							'subtitle' => esc_html__('', 'solonick'),
					),
					
					array(
							'id' => 'translet_opt_19',
							'type' => 'text',
							'title' => esc_html__('One thought on', 'theside'),
							'subtitle' => esc_html__('Post Comment Section.', 'theside'),
					),
					
					array(
							'id' => 'translet_opt_20',
							'type' => 'text',
							'title' => esc_html__('thought on', 'theside'),
							'subtitle' => esc_html__('Post Comment Section.', 'theside'),
					),
					
					array(
							'id' => 'translet_opt_21',
							'type' => 'text',
							'title' => esc_html__('thoughts on', 'theside'),
							'subtitle' => esc_html__('Post Comment Section.', 'theside'),
					),
					
					array(
							'id' => 'translet_opt_22',
							'type' => 'text',
							'title' => esc_html__('Your Name*', 'theside'),
							'subtitle' => esc_html__('Post Comment Section Form.', 'theside'),
					),
					
					array(
							'id' => 'translet_opt_23',
							'type' => 'text',
							'title' => esc_html__('Your Email*', 'theside'),
							'subtitle' => esc_html__('Post Comment Section Form.', 'theside'),
					),
					
					array(
							'id' => 'translet_opt_24',
							'type' => 'text',
							'title' => esc_html__('Your Comment*', 'theside'),
							'subtitle' => esc_html__('Post Comment Section Form.', 'theside'),
					),
					
					array(
							'id' => 'translet_opt_25',
							'type' => 'text',
							'title' => esc_html__('Submit Comment', 'theside'),
							'subtitle' => esc_html__('Post Comment Section Form.', 'theside'),
					),
					
					array(
							'id' => 'translet_opt_26',
							'type' => 'text',
							'title' => esc_html__('Comment', 'theside'),
							'subtitle' => esc_html__('Post Meta.', 'theside'),
					),
					
					array(
							'id' => 'translet_opt_27',
							'type' => 'text',
							'title' => esc_html__('Comments', 'theside'),
							'subtitle' => esc_html__('Post Meta.', 'theside'),
					),
					
					array(
							'id' => 'translet_opt_28',
							'type' => 'text',
							'title' => esc_html__('Next', 'theside'),
							'subtitle' => esc_html__('Post & Portfolio Pagination.', 'theside'),
					),
					
					array(
							'id' => 'translet_opt_29',
							'type' => 'text',
							'title' => esc_html__('Prev', 'theside'),
							'subtitle' => esc_html__('Post & Portfolio Pagination.', 'theside'),
					),
					
                    )
                ) );
				
				Redux::setSection( $opt_name, array(
                    'icon'   => 'el-icon-leaf',
                    'title'  => esc_html__( 'Social Options', 'solonick' ),
                    'fields' => array(
					
					
					array(
							'id' => 'social_show_hide_opt_head',
							'type' => 'button_set',
							'title' => esc_html__('Header Social Option', 'solonick'),
							'subtitle' => esc_html__('', 'solonick'),
							'desc' => '',
							'options' => array(
									'st1'=> esc_html__('Disable', 'solonick'),
									'st2' => esc_html__('Enable', 'solonick'),
									
									
							),
							'default'  => 'st1'
					),
					
					array(
							'id' => 'social_show_hide_opt_footer',
							'type' => 'button_set',
							'title' => esc_html__('Footer Social Option', 'solonick'),
							'subtitle' => esc_html__('', 'solonick'),
							'desc' => 'Footer Social Area Will Be Disable If You Disable Footer Content Section.',
							'options' => array(
									'st1'=> esc_html__('Disable', 'solonick'),
									'st2' => esc_html__('Enable', 'solonick'),
									
									
							),
							'default'  => 'st1'
					),
					
					array(
							'id' => 'facebook',
							'type' => 'text',
							'title' => esc_html__('Facebook URL ', 'solonick'),
							'subtitle' => esc_html__('Write Social URL', 'solonick'),
					),
					
					array(
							'id' => 'twitter',
							'type' => 'text',
							'title' => esc_html__('Twitter URL ', 'solonick'),
							'subtitle' => esc_html__('Write Social URL', 'solonick'),
					),
					
					array(
							'id' => 'pinterest',
							'type' => 'text',
							'title' => esc_html__('Pinterest URL ', 'solonick'),
							'subtitle' => esc_html__('Write Social URL', 'solonick'),
					),
					
					
					
					array(
							'id' => 'behance',
							'type' => 'text',
							'title' => esc_html__('Behance URL ', 'solonick'),
							'subtitle' => esc_html__('Write Social URL', 'solonick'),
					),
					
					array(
							'id' => 'dribbble',
							'type' => 'text',
							'title' => esc_html__('Dribbble URL ', 'solonick'),
							'subtitle' => esc_html__('Write Social URL', 'solonick'),
					),
					
					array(
							'id' => 'gplus',
							'type' => 'text',
							'title' => esc_html__('Google URL ', 'solonick'),
							'subtitle' => esc_html__('Write Social URL', 'solonick'),
					),
					
					array(
							'id' => 'linkedin',
							'type' => 'text',
							'title' => esc_html__('Linkedin URL ', 'solonick'),
							'subtitle' => esc_html__('Write Social URL', 'solonick'),
					),
					
					array(
							'id' => 'youtube',
							'type' => 'text',
							'title' => esc_html__('Youtube URL ', 'solonick'),
							'subtitle' => esc_html__('Write Social URL', 'solonick'),
						
					),
					
					array(
							'id' => 'vimeo',
							'type' => 'text',
							'title' => esc_html__('Vimeo URL ', 'solonick'),
							'subtitle' => esc_html__('Write Social URL', 'solonick'),
							
					),
					
					array(
							'id' => 'slack',
							'type' => 'text',
							'title' => esc_html__('Slack ', 'solonick'),
							'subtitle' => esc_html__('Write Social URL', 'solonick'),
							
					),
					
					array(
							'id' => 'instagram',
							'type' => 'text',
							'title' => esc_html__('Instagram URL ', 'solonick'),
							'subtitle' => esc_html__('Write Social URL', 'solonick'),
							
					),
					
					array(
							'id' => 'tumblr',
							'type' => 'text',
							'title' => esc_html__('Tumblr URL ', 'solonick'),
							'subtitle' => esc_html__('Write Social URL', 'solonick'),
							
					),
					array(
							'id'       => 'opt_add_more_social',
							'type'     => 'multi_text',
							'title'    => esc_html__( 'Add More Social Icons.', 'solonick' ),
							'subtitle' => esc_html__( '', 'solonick' ),
							'desc'     => __( 'e.x: &lt;li&gt;&lt;a target="_blank" href="#"&gt;&lt;i class="fab fa-facebook-f"&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;<br>Use <a href="https://fontawesome.com/icons?d=listing" target="_blank">Fontawesome</a> Icon Class', 'solonick' ),
					),
					
                    )
                ) );
				
				Redux::setSection( $opt_name, array(
                    'icon'   => 'el-icon-text-width',
                    'title'  => esc_attr__( 'Typography', 'solonick' ),
                    'fields' => array(     

						array(
			                'id' => 'notice_critical11',
			                'type' => 'info',
			                'notice' => true,
			                'style' => 'success',
			                'title' => esc_attr__('Entry Headings', 'solonick'),
			                'desc' => esc_attr__('Entry Headings in posts/pages', 'solonick')
			            ),
						
						array(
                            'id'          => 'typo_body',
                            'type'        => 'typography', 
                            'title'       => __('Body', 'solonick'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('body, .review-owner'),
                            'units'       =>'px',
							'line-height'       =>false,
                            'subtitle'    => esc_attr__('Specify the Body Text font properties.', 'solonick'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),
						),
						
						array(
                            'id'          => 'typo_p',
                            'type'        => 'typography', 
                            'title'       => __('P', 'solonick'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('p, .main-about p, .main-about'),
                            'units'       =>'px',
							'line-height'       =>false,
                            'subtitle'    => esc_attr__('Specify the P Text font properties.', 'solonick'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),
						),
						
						array(
                            'id'          => 'typo_a',
                            'type'        => 'typography', 
                            'title'       => __('a', 'solonick'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('a, .widget-posts-descr a'),
                            'units'       =>'px',
							'line-height'       =>false,
                            'subtitle'    => esc_attr__('Specify the a Text font properties.', 'solonick'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),
						),
						
						array(
                            'id'          => 'typography-all-button',
                            'type'        => 'typography', 
                            'title'       => esc_html__('Button', 'solonick'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.btn, .vc-section button, .wpcf7 input[type=submit], .comment-form input[type=submit], .wpb_wrapper input[type=submit], .subcribe-form .mc4wp-form input[type="submit"]'),
                            'units'       =>'px',
							'line-height'       =>false,
                            'subtitle'    => esc_html__('Specify the  button  font properties.', 'solonick'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),
						),

						
                        array(
                            'id'          => 'typography-h1',
                            'type'        => 'typography', 
                            'title'       => __('H1', 'solonick'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('h1'),
                            'units'       =>'px',
							'line-height'       =>false,
                            'subtitle'    => esc_attr__('Specify the Heading font properties.', 'solonick'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),
						),

						array(
                            'id'          => 'typography-h2',
                            'type'        => 'typography', 
                            'title'       => __('H2', 'solonick'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('h2, .section-title h2, .fw-post h2, .masonry-post h2'),
                            'units'       =>'px',
							'line-height'       =>false,
                            'subtitle'    => esc_attr__('Specify the Heading font properties.', 'solonick'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),
						),
						
						array(
                            'id'          => 'typography-h3',
                            'type'        => 'typography', 
                            'title'       => __('H3', 'solonick'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('h3, .pr-title h3, .fet_pr-carousel-title-item h3'),
                            'units'       =>'px',
							'line-height'       =>false,
                            'subtitle'    => esc_attr__('Specify the Heading font properties.', 'solonick'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),
						),
						
						array(
                            'id'          => 'typography-h4',
                            'type'        => 'typography', 
                            'title'       => __('H4', 'solonick'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('h4'),
                            'units'       =>'px',
							'line-height'       =>false,
                            'subtitle'    => esc_attr__('Specify the Heading font properties.', 'solonick'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),
						),
						
						array(
                            'id'          => 'typography-h5',
                            'type'        => 'typography', 
                            'title'       => __('H5', 'solonick'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('h5'),
                            'units'       =>'px',
							'line-height'       =>false,
                            'subtitle'    => esc_attr__('Specify the Heading font properties.', 'solonick'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),
						),
						
						array(
                            'id'          => 'typography-h6',
                            'type'        => 'typography', 
                            'title'       => __('H6', 'solonick'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('h6'),
                            'units'       =>'px',
							'line-height'       =>false,
                            'subtitle'    => esc_attr__('Specify the Heading font properties.', 'solonick'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),
						),
						
						
						
						array(
			                'id' => 'notice_critical11',
			                'type' => 'info',
			                'notice' => true,
			                'style' => 'success',
			                'title' => esc_html__('Entry Headings', 'solonick'),
			                'desc' => esc_html__('Entry Headings in Header/ Menu/ Text Logo/ Share Text.', 'solonick')
			            ),
						
						array(
                            'id'          => 'logotextwr1',
                            'type'        => 'typography', 
                            'title'       => __('Text Logo', 'solonick'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.header-logo h1'),
                            'units'       =>'px',
							'line-height'       =>false,
                            'subtitle'    => esc_attr__('Specify the Logo Text font properties.', 'solonick'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),
						),
						
						array(
                            'id'          => 'typo_header_entry',
                            'type'        => 'typography', 
                            'title'       => esc_html__('Header Menu Button', 'solonick'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.menu-button-text, .scroll-down-wrap span, .single-page-fixed-row-link span'),
                            'units'       =>'px',
							'line-height'       =>false,
                            'subtitle'    => esc_html__('Specify the Menu Button Text font properties. e.x: Menu, Scroll Down', 'solonick'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),
						),
						
						array(
                            'id'          => 'typo_header_share_entry',
                            'type'        => 'typography', 
                            'title'       => esc_html__('Share & Contcat Button', 'solonick'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.show-share span, .contact-btn span'),
                            'units'       =>'px',
							'line-height'       =>false,
                            'subtitle'    => esc_html__('Specify the Header Share & Contcat Button Text font properties. e.x: Menu, Scroll Down', 'solonick'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),
						),
						
						array(
                            'id'          => 'typo_menu__section_title',
                            'type'        => 'typography', 
                            'title'       => esc_html__('Left Menu & Share Section Title', 'solonick'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.nav-title span, .share-title span'),
                            'units'       =>'px',
							'line-height'       =>false,
                            'subtitle'    => esc_html__('Specify the Menu Item & Share Section Title Text font properties.', 'solonick'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),
						),
						
						array(
                            'id'          => 'typo_menu_share_item_title',
                            'type'        => 'typography', 
                            'title'       => esc_html__('Share Item', 'solonick'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.share-container .share-icon'),
                            'units'       =>'px',
							'line-height'       =>false,
                            'subtitle'    => esc_html__('Specify the Share Item Text font properties.', 'solonick'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),
						),
						
						
						array(
                            'id'          => 'typo_menu_iten',
                            'type'        => 'typography', 
                            'title'       => esc_html__('Left Menu Item', 'solonick'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.sliding-menu a'),
                            'units'       =>'px',
							'line-height'       =>false,
                            'subtitle'    => esc_html__('Specify the Menu Item Text font properties.', 'solonick'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),
						),
						
						array(
                            'id'          => 'typo_menu_iten_hover',
                            'type'        => 'typography', 
                            'title'       => esc_html__('Left Menu Item Hover', 'solonick'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.sliding-menu a:hover'),
                            'units'       =>'px',
							'line-height'       =>false,
                            'subtitle'    => esc_html__('Specify the Menu Item Text font properties.', 'solonick'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),
						),
						
						array(
                            'id'          => 'typo_menu_iten_active',
                            'type'        => 'typography', 
                            'title'       => esc_html__('Left Menu Item Active', 'solonick'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.current-menu-parent > a, .current-menu-item > a'),
                            'units'       =>'px',
							'line-height'       =>false,
                            'subtitle'    => esc_html__('Specify the Menu Item Text font properties.', 'solonick'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),
						),
						
						
						array(
                            'id'          => 'typo_scroll_menu_iten',
                            'type'        => 'typography', 
                            'title'       => esc_html__('Scroll Menu Item', 'solonick'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.scroll-nav li a'),
                            'units'       =>'px',
							'line-height'       =>false,
                            'subtitle'    => esc_html__('Specify the Menu Item Text font properties.', 'solonick'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),
						),
						
						array(
                            'id'          => 'typo_scroll__menu_iten_hover',
                            'type'        => 'typography', 
                            'title'       => esc_html__('Scroll Menu Item Hover', 'solonick'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.scroll-nav li a:hover'),
                            'units'       =>'px',
							'line-height'       =>false,
                            'subtitle'    => esc_html__('Specify the Menu Item Text font properties.', 'solonick'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),
						),
						
						array(
                            'id'          => 'typo_scroll_menu_iten_active',
                            'type'        => 'typography', 
                            'title'       => esc_html__('Scroll Menu Item Active', 'solonick'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.scroll-nav a.act-scrlink'),
                            'units'       =>'px',
							'line-height'       =>false,
                            'subtitle'    => esc_html__('Specify the Menu Item Text font properties.', 'solonick'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),
						),
						
						array(
			                'id' => 'notice_critical12',
			                'type' => 'info',
			                'notice' => true,
			                'style' => 'success',
			                'title' => esc_html__('Entry Headings', 'solonick'),
			                'desc' => esc_html__('Entry Headings in Home Page Template.', 'solonick')
			            ),
						
						array(
                            'id'          => 'typography-home-slider',
                            'type'        => 'typography', 
                            'title'       => __('Intro Section Title', 'solonick'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.half-hero-wrap h1'),
                            'units'       =>'px',
							'line-height'       =>false,
                            'subtitle'    => esc_attr__('Specify the Intro Section Title font properties.', 'solonick'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),
						),
						
						array(
                            'id'          => 'typography-con-slider',
                            'type'        => 'typography', 
                            'title'       => esc_html__('Intro Section Sub Title', 'solonick'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.half-hero-wrap h4'),
                            'units'       =>'px',
							'line-height'       =>false,
                            'subtitle'    => esc_html__('Specify the Intro Section Sub Title font properties.', 'solonick'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),
						),
						
						array(
                            'id'          => 'typography-conextra-slider',
                            'type'        => 'typography', 
                            'title'       => esc_html__('Intro Section Text Slider & Hover Content', 'solonick'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.hero-decor-numb span, .hero-decor-numb-tooltip, .hero-decor-let'),
                            'units'       =>'px',
							'line-height'       =>false,
                            'subtitle'    => esc_html__('Specify the Intro Section Text Slider & Hover Content font properties.', 'solonick'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),
						),
						
						
						array(
                            'id'          => 'typography_car_slider_title',
                            'type'        => 'typography', 
                            'title'       => esc_html__('Carousel Slider Title', 'solonick'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.fs-carousel-title h3, .fs-carousel-title h3 a '),
                            'units'       =>'px',
							'line-height'       =>false,
                            'subtitle'    => esc_html__('Specify the all Carousel slider title font properties.', 'solonick'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),
						),
						
						array(
                            'id'          => 'typography-car-slider-con',
                            'type'        => 'typography', 
                            'title'       => esc_html__('Carousel Slider Category', 'solonick'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.fs-carousel-titlecat'),
                            'units'       =>'px',
							'line-height'       =>false,
                            'subtitle'    => esc_html__('Specify the Carousel slider category font properties.', 'solonick'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),
						),
						
						array(
                            'id'          => 'typography-car-slider-button',
                            'type'        => 'typography', 
                            'title'       => esc_html__('Carousel Slider Button', 'solonick'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.fs-carousel-link'),
                            'units'       =>'px',
							'line-height'       =>false,
                            'subtitle'    => esc_html__('Specify the Carousel slider button font properties.', 'solonick'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),
						),
						
						array(
			                'id' => 'notice_critical13',
			                'type' => 'info',
			                'notice' => true,
			                'style' => 'success',
			                'title' => esc_html__('Entry Headings', 'solonick'),
			                'desc' => esc_html__('Entry Headings in Default Page Template & WPBakery Element.', 'solonick')
			            ),
						
						array(
                            'id'          => 'typography-page-right-title',
                            'type'        => 'typography', 
                            'title'       => esc_html__('Page Title/ Section Ttile', 'solonick'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.section-title h2'),
                            'units'       =>'px',
							'line-height'       =>false,
                            'subtitle'    => esc_html__('Specify the page/ section title font properties.', 'solonick'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),
						),
						
						array(
                            'id'          => 'typography-page-right-con',
                            'type'        => 'typography', 
                            'title'       => esc_html__('Page Sub Title', 'solonick'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('section .section-title p, section.parallax-section .section-title p'),
                            'units'       =>'px',
							'line-height'       =>false,
                            'subtitle'    => esc_html__('Specify the page sub title font properties.', 'solonick'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),
						),
						
						
						array(
                            'id'          => 'typography-page-right-scroll-button',
                            'type'        => 'typography', 
                            'title'       => esc_html__('Scroll Button', 'solonick'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.carnival, .column-wrap-media_btn'),
                            'units'       =>'px',
							'line-height'       =>false,
                            'subtitle'    => esc_html__('Specify the page scroll button font properties.', 'solonick'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),
						),
						
						array(
                            'id'          => 'typography-page-vc-row-counter-title',
                            'type'        => 'typography', 
                            'title'       => esc_html__('Counter Title', 'solonick'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.inline-facts-wrap h6'),
                            'units'       =>'px',
							'line-height'       =>false,
                            'subtitle'    => esc_html__('Specify the counter title font properties.', 'solonick'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),
						),
						
						array(
                            'id'          => 'typography-page-vc-row-counter-number',
                            'type'        => 'typography', 
                            'title'       => esc_html__('Counter Number', 'solonick'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.inline-facts-wrap .num'),
                            'units'       =>'px',
							'line-height'       =>false,
                            'subtitle'    => esc_html__('Specify the counter number font properties.', 'solonick'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),
						),
						
						
						array(
                            'id'          => 'typography-page-vc-row-team-title',
                            'type'        => 'typography', 
                            'title'       => esc_html__('Team Title', 'solonick'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.team-info h3'),
                            'units'       =>'px',
							'line-height'       =>false,
                            'subtitle'    => esc_html__('Specify the team title font properties.', 'solonick'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),
						),
						
						array(
                            'id'          => 'typography-page-vc-row-team-designation',
                            'type'        => 'typography', 
                            'title'       => esc_html__('Team Designation', 'solonick'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.team-info h4'),
                            'units'       =>'px',
							'line-height'       =>false,
                            'subtitle'    => esc_html__('Specify the team designation font properties.', 'solonick'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),
						),
						
						array(
                            'id'          => 'typography-page-vc-row-team-content',
                            'type'        => 'typography', 
                            'title'       => esc_html__('Team Description', 'solonick'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.team-info p'),
                            'units'       =>'px',
							'line-height'       =>false,
                            'subtitle'    => esc_html__('Specify the team dscription font properties.', 'solonick'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),
						),
						
						array(
                            'id'          => 'typography-page-vc-row-testimonial-title',
                            'type'        => 'typography', 
                            'title'       => esc_html__('Testimonial Title', 'solonick'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.testi-item h3'),
                            'units'       =>'px',
							'line-height'       =>false,
                            'subtitle'    => esc_html__('Specify the testimonial title font properties.', 'solonick'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),
						),
						
						array(
                            'id'          => 'typography-page-vc-row-testimonial-content',
                            'type'        => 'typography', 
                            'title'       => esc_html__('Testimonial content', 'solonick'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.testi-item p'),
                            'units'       =>'px',
							'line-height'       =>false,
                            'subtitle'    => esc_html__('Specify the testimonial content font properties.', 'solonick'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),
						),
						
						array(
                            'id'          => 'typography-page-vc-row-testimonial-button',
                            'type'        => 'typography', 
                            'title'       => esc_html__('Testimonial Button', 'solonick'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.teti-link'),
                            'units'       =>'px',
							'line-height'       =>false,
                            'subtitle'    => esc_html__('Specify the testimonial button font properties.', 'solonick'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),
						),
						
						array(
                            'id'          => 'typography-page-vc-row-biography-title',
                            'type'        => 'typography', 
                            'title'       => esc_html__('Biography Title', 'solonick'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.pr-subtitle'),
                            'units'       =>'px',
							'line-height'       =>false,
                            'subtitle'    => esc_html__('Specify the biography title font properties.', 'solonick'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),
						),
						
						array(
                            'id'          => 'typography-page-vc-row-biography-content',
                            'type'        => 'typography', 
                            'title'       => esc_html__('Biography Content', 'solonick'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.biography-text p'),
                            'units'       =>'px',
							'line-height'       =>false,
                            'subtitle'    => esc_html__('Specify the biography content font properties.', 'solonick'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),
						),
						
						array(
                            'id'          => 'typography-page-vc-row-biography-button',
                            'type'        => 'typography', 
                            'title'       => esc_html__('Biography Button', 'solonick'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.pr-view'),
                            'units'       =>'px',
							'line-height'       =>false,
                            'subtitle'    => esc_html__('Specify the biography button font properties.', 'solonick'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),
						),
						
						array(
                            'id'          => 'typography-page-vc-row-biography-list',
                            'type'        => 'typography', 
                            'title'       => esc_html__('Biography List Item', 'solonick'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.pr-list li, .cont-det-wrap li, .serv-price-wrap'),
                            'units'       =>'px',
							'line-height'       =>false,
                            'subtitle'    => esc_html__('Specify the biography list item font properties.', 'solonick'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),
						),
						
						array(
                            'id'          => 'typography-page-vc-row-skill-bar-title',
                            'type'        => 'typography', 
                            'title'       => esc_html__('Skill Bar Title', 'solonick'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.custom-skillbar-title span, .skill-bar-percent'),
                            'units'       =>'px',
							'line-height'       =>false,
                            'subtitle'    => esc_html__('Specify the skill bar title font properties.', 'solonick'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),
						),
						
						array(
			                'id' => 'notice_critical15',
			                'type' => 'info',
			                'notice' => true,
			                'style' => 'success',
			                'title' => esc_html__('Entry Headings', 'solonick'),
			                'desc' => esc_html__('Entry Headings in Blog Page.', 'solonick')
			            ),
						
						array(
                            'id'          => 'typography-blog-post-title',
                            'type'        => 'typography', 
                            'title'       => esc_html__('Post Title', 'solonick'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.post .split-sceen-content_title h3'),
                            'units'       =>'px',
							'line-height'       =>false,
                            'subtitle'    => esc_html__('Specify the post title font properties.', 'solonick'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),
						),
						
						array(
                            'id'          => 'typography-blog-post-meta-top',
                            'type'        => 'typography', 
                            'title'       => esc_html__('Post Date/ Category', 'solonick'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.parallax-header span, .parallax-header a'),
                            'units'       =>'px',
							'line-height'       =>false,
                            'subtitle'    => esc_html__('Specify the post date/ category font properties.', 'solonick'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),
						),
						
						array(
                            'id'          => 'typography-blog-post-meta-bottom',
                            'type'        => 'typography', 
                            'title'       => esc_html__('Post Admin/ Comment', 'solonick'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.post-opt li'),
                            'units'       =>'px',
							'line-height'       =>false,
                            'subtitle'    => esc_html__('Specify the post admin/ comment font properties.', 'solonick'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),
						),
						
						array(
                            'id'          => 'typography-blog-post-content',
                            'type'        => 'typography', 
                            'title'       => esc_html__('Post Content', 'solonick'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.post p'),
                            'units'       =>'px',
							'line-height'       =>false,
                            'subtitle'    => esc_html__('Specify the post content font properties.', 'solonick'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),
						),
						
						array(
                            'id'          => 'typography-blog-post-button',
                            'type'        => 'typography', 
                            'title'       => esc_html__('Read More Button', 'solonick'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.post .pr-view'),
                            'units'       =>'px',
							'line-height'       =>false,
                            'subtitle'    => esc_html__('Specify the post read more button font properties.', 'solonick'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),
						),
						
						array(
                            'id'          => 'typography-blog-post-widget',
                            'type'        => 'typography', 
                            'title'       => esc_html__('Widget List Item', 'solonick'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.widget li a, .widget li '),
                            'units'       =>'px',
							'line-height'       =>false,
                            'subtitle'    => esc_html__('Specify the widget list item/ li font properties.', 'solonick'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),
						),
						
						array(
			                'id' => 'notice_critical16',
			                'type' => 'info',
			                'notice' => true,
			                'style' => 'success',
			                'title' => esc_html__('Entry Headings', 'solonick'),
			                'desc' => esc_html__('Entry Portfolio Details Page.', 'solonick')
			            ),
						
						array(
                            'id'          => 'typography-portfolio-post-tab-name',
                            'type'        => 'typography', 
                            'title'       => esc_html__('Tab Name', 'solonick'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.tabs-menu li a'),
                            'units'       =>'px',
							'line-height'       =>false,
                            'subtitle'    => esc_html__('Specify the portfolio tab name font properties.', 'solonick'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),
						),
						
						array(
                            'id'          => 'typography-portfolio-post-tab-section-title',
                            'type'        => 'typography', 
                            'title'       => esc_html__('Tab Section Title', 'solonick'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.tab-content .pr-subtitle'),
                            'units'       =>'px',
							'line-height'       =>false,
                            'subtitle'    => esc_html__('Specify the portfolio tab section title font properties.', 'solonick'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),
						),
						
						array(
                            'id'          => 'typography-portfolio-post-tab-content',
                            'type'        => 'typography', 
                            'title'       => esc_html__('Tab Content/ Accordion Content', 'solonick'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.det-wrap p'),
                            'units'       =>'px',
							'line-height'       =>false,
                            'subtitle'    => esc_html__('Specify the portfolio tab content/ accordion Content font properties.', 'solonick'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),
						),
						
						
						
						array(
                            'id'          => 'typography-portfolio-post-accordion-title',
                            'type'        => 'typography', 
                            'title'       => esc_html__('Accordion Title', 'solonick'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.accordion a.toggle'),
                            'units'       =>'px',
							'line-height'       =>false,
                            'subtitle'    => esc_html__('Specify the portfolio accordion title font properties.', 'solonick'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),
						),
						
						array(
                            'id'          => 'typography-portfolio-post-projectinfo',
                            'type'        => 'typography', 
                            'title'       => esc_html__('Poject Information Title', 'solonick'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.pr-title'),
                            'units'       =>'px',
							'line-height'       =>false,
                            'subtitle'    => esc_html__('Specify the portfolio project information title font properties.', 'solonick'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),
						),
						
						array(
                            'id'          => 'typography-portfolio-post-projectinfo-con',
                            'type'        => 'typography', 
                            'title'       => esc_html__('Poject Information Content', 'solonick'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.pr-title span'),
                            'units'       =>'px',
							'line-height'       =>false,
                            'subtitle'    => esc_html__('Specify the portfolio project information content font properties.', 'solonick'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),
						),
						
						array(
                            'id'          => 'typography-portfolio-post-projectinfo-con-list',
                            'type'        => 'typography', 
                            'title'       => esc_html__('Post Pagination', 'solonick'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.content-nav li a.ln, .content-nav li a.rn'),
                            'units'       =>'px',
							'line-height'       =>false,
                            'subtitle'    => esc_html__('Specify the post pagination list item font properties.', 'solonick'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),
						),
						
						
                        
                    )
                ) );	
				
				Redux::setSection( $opt_name, array(
                    'icon'   => 'el-icon-brush',
                    'title'  => esc_html__( 'Styling', 'solonick' ),
                    'fields' => array(
					
					array(
                            'id'       => 'opt-theme-style',
                            'type'     => 'color',
                            'title'    => esc_html__( 'Theme Color Option', 'solonick' ),
                            'subtitle' => esc_html__( 'Only color validation can be done on this field type', 'solonick' ),
                            'desc'     => esc_html__( 'Change all global color.', 'solonick' ),
                            //'regular'   => false, // Disable Regular Color
                            //'hover'     => false, // Disable Hover Color
                            //'active'    => false, // Disable Active Color
                            //'visited'   => true,  // Enable Visited Color
                            
                        ),
						
					

                    )
                ) );
				
				
				
				
				 Redux::setSection( $opt_name, array(
                    'icon'   => 'el-icon-th-large',
                    'title'  => esc_html__( 'Footer Options', 'solonick' ),
                    'fields' => array(
					
					array(
			                'id' => 'notice_footer_wi_opt',
			                'type' => 'info',
			                'notice' => true,
			                'style' => 'success',
			                'title' => esc_html__('Footer Section', 'solonick'),
			                'desc' => esc_html__('Show/ Hide Site Footer Content Section. Footer Widget Area Will Be Enable If You Disable Footer Content Section.', 'solonick')
			            ),
						
					array(
							'id' => 'so_wid_foo_st_opt',
							'type' => 'button_set',
							'title' => esc_html__('Fixed Footer', 'solonick'),
							'subtitle' => esc_html__('', 'solonick'),
							'desc' => '',
							'options' => array(
									'st1'=> esc_html__('Enable', 'solonick'),
									'st2' => esc_html__('Disable', 'solonick'),
							),
							'default'  => 'st1'
					),
					
					array(
							'id' => 'so_wid_foo_opt',
							'type' => 'button_set',
							'title' => esc_html__('Footer Content', 'solonick'),
							'subtitle' => esc_html__('', 'solonick'),
							'desc' => '',
							'options' => array(
									'st1'=> esc_html__('Disable', 'solonick'),
									'st2' => esc_html__('Enable', 'solonick'),
							),
							'default'  => 'st1'
					),
					
					array(
							'id' => 'so_wid_foo_effect_opt',
							'type' => 'button_set',
							'title' => esc_html__('Footer Partcile Effect', 'solonick'),
							'subtitle' => esc_html__('', 'solonick'),
							'desc' => '',
							'options' => array(
									'st1'=> esc_html__('Enable', 'solonick'),
									'st2' => esc_html__('Disable', 'solonick'),
									
									
							),
							'default'  => 'st1',
							
					),
					
					
					array(
			                'id' => 'notice_header_twitter',
			                'type' => 'info',
			                'notice' => true,
			                'style' => 'success',
			                'title' => esc_html__('Twitter Options', 'solonick'),
			                'desc' => esc_html__('Twitter options of your site Footer.', 'solonick'),
							'required' => array('so_wid_foo_opt', '=' , 'st2')
			            ),
					
					array(
							'id' => 'headertwitter_opt',
							'type' => 'button_set',
							'title' => esc_html__('Twitter Option', 'solonick'),
							'subtitle' => esc_html__('', 'solonick'),
							'desc' => '',
							'options' => array(
									'st1'=> esc_html__('Disable', 'solonick'),
									'st2' => esc_html__('Enable', 'solonick'),
									
									
							),
							'required' => array('so_wid_foo_opt', '=' , 'st2'),
							'default'  => 'st1'
					),
					
					
						
					array(
							'id' => 'twitter_hd_title',
							'type' => 'text',
							'compiler' => 'true',
							'title' => esc_html__('Section Title', 'solonick'),
							'subtitle' => esc_html__('E.X: [span]01.[/span]Last Twitts', 'solonick'),
							'required' => array('headertwitter_opt', '=' , 'st2'),
							
					),
					
					array(
							'id' => 'twitter_user',
							'type' => 'text',
							'compiler' => 'true',
							'title' => esc_html__('User Name', 'solonick'),
							'subtitle' => esc_html__('E.X: webredox', 'solonick'),
							'required' => array('headertwitter_opt', '=' , 'st2')
					),
					
					
					array(
							'id' => 'twitter_bt_title',
							'type' => 'text',
							'compiler' => 'true',
							'title' => esc_html__('Button Title', 'solonick'),
							'subtitle' => esc_html__('E.X: Our Twitter', 'solonick'),
							'required' => array('headertwitter_opt', '=' , 'st2')
					),
					
					array(
							'id' => 'twitter_follow_bt_title',
							'type' => 'text',
							'compiler' => 'true',
							'title' => esc_html__('Follow Button Title', 'solonick'),
							'subtitle' => esc_html__('E.X: Follow Us', 'solonick'),
							'required' => array('headertwitter_opt', '=' , 'st2')
					),
					
					
					
					
					array(
			                'id' => 'notice_footer_contact',
			                'type' => 'info',
			                'notice' => true,
			                'style' => 'info',
			                'title' => esc_html__('Footer Contact Information', 'solonick'),
			                'desc' => esc_html__('Enable/ Disable Footer Contact Section.', 'solonick'),
							'required' => array('so_wid_foo_opt', '=' , 'st2')
			            ),
						
					array(
							'id' => 'footer_contact_opt',
							'type' => 'button_set',
							'title' => esc_html__('Contact Section', 'solonick'),
							'subtitle' => esc_html__('', 'solonick'),
							'desc' => '',
							'options' => array(
									'st1'=> esc_html__('Disable', 'solonick'),
									'st2' => esc_html__('Enable', 'solonick'),
									
									
							),
							'required' => array('so_wid_foo_opt', '=' , 'st2'),
							'default'  => 'st1'
					),
					
					array(
							'id' => 'contact_st_phn_title',
							'type' => 'text',
							'compiler' => 'true',
							'title' => esc_html__('Data Title', 'solonick'),
							'subtitle' => esc_html__('e.x: Phone', 'solonick'),
							'required' => array('footer_contact_opt', '=' , 'st2')
							
					),
					
					array(
							'id' => 'contact_st_phn',
							'type' => 'text',
							'compiler' => 'true',
							'title' => esc_html__('Phone Number', 'solonick'),
							'subtitle' => esc_html__('', 'solonick'),
							'required' => array('footer_contact_opt', '=' , 'st2')
							
					),
					
					array(
							'id' => 'contact_st_email_title',
							'type' => 'text',
							'compiler' => 'true',
							'title' => esc_html__('Data Title', 'solonick'),
							'subtitle' => esc_html__('e.x: Email', 'solonick'),
							'required' => array('footer_contact_opt', '=' , 'st2')
							
					),
					
					array(
							'id' => 'contact_st_email',
							'type' => 'text',
							'compiler' => 'true',
							'title' => esc_html__('Email Address', 'solonick'),
							'subtitle' => esc_html__('', 'solonick'),
							'required' => array('footer_contact_opt', '=' , 'st2')
							
					),
					
					array(
							'id' => 'contact_st_address_title',
							'type' => 'text',
							'compiler' => 'true',
							'title' => esc_html__('Data Title', 'solonick'),
							'subtitle' => esc_html__('e.x: Address', 'solonick'),
							'required' => array('footer_contact_opt', '=' , 'st2')
							
					),  
					
					array(
							'id' => 'contact_st_address',
							'type' => 'text',
							'compiler' => 'true',
							'title' => esc_html__('Address', 'solonick'),
							'subtitle' => esc_html__('', 'solonick'),
							'required' => array('footer_contact_opt', '=' , 'st2')
							
					),  
					
					array(
							'id' => 'theme-footer-widget-opt',
							'type' => 'info',
		                    'notice' => true,
		                    'style' => 'info',
							'title' => esc_html__('Footer Subscribe', 'solonick'),
							'desc' => esc_html__('Option For Enable/Disable Footer Subscribe Area.', 'solonick'),
							'required' => array('so_wid_foo_opt', '=' , 'st2')
							
					  ),
					  
					
					array(
							'id' => 'theme-footer-widget-opt-main',
							'type' => 'button_set',
							'title' => esc_html__('Footer Subscribe', 'solonick'),
							'subtitle' => esc_html__('', 'solonick'),
							'desc' => '',
							'options' => array(
									'st1'=> esc_html__('Disable', 'solonick'),
									'st2' => esc_html__('Enable', 'solonick'),
									
									
							),
							'required' => array('so_wid_foo_opt', '=' , 'st2'),
							'default'  => 'st1'
					),
					
					array(
							'id' => 'subscribe_hd_link',
							'type' => 'text',
							'compiler' => 'true',
							'title' => esc_html__('MailChimp Form Shortcode', 'solonick'),
							'subtitle' => esc_html__('ex: [mc4wp_form id="264"]', 'solonick'),
							'required' => array('theme-footer-widget-opt-main', '=' , 'st2')
					),
					
					array(
							'id' => 'subscribe_hd_title',
							'type' => 'text',
							'compiler' => 'true',
							'title' => esc_html__('Section Title', 'solonick'),
							'subtitle' => __('[span]02.[/span] Subscribe / Contacts', 'solonick'),
							'required' => array('theme-footer-widget-opt-main', '=' , 'st2')
					),
					
					array(
							'id' => 'subscribe_hd_con',
							'type' => 'textarea',
							'compiler' => 'true',
							'title' => esc_html__('Section Content', 'solonick'),
							'subtitle' => esc_html__('', 'solonick'),
							'required' => array('theme-footer-widget-opt-main', '=' , 'st2')
					),
					
					
					array(
							'id' => 'theme-cus-copy',
							'type' => 'info',
		                    'notice' => true,
		                    'style' => 'info',
							'title' => esc_html__('Copy right Text', 'solonick'),
							'desc' => esc_html__('Footer copy right Text', 'solonick')
							
					  ),
					
					array(
							'id' => 'copyright',
							'type' => 'editor',
							'wpautop'=>true,
							'compiler' => 'true',
							'title' => esc_html__('Copyright text of the WebSite', 'solonick'),
							'subtitle' => esc_html__('Write a Copyright text of your WebSite', 'solonick'),
							'default'          => '<span>&#169; Solonick 2020  /  All rights reserved. </span>',
							'args'   => array(
								'teeny'            => true,
								'textarea_rows'    => 10
							)
					),
					
					
					
					
					
					
					)
                ) );
				
				Redux::setSection( $opt_name, array(
                    'icon'   => 'el-icon-key',
                    'title'  => esc_html__( 'Documentation', 'berly' ),
                    'fields' => array(					
					
					array(
							'id' => 'docs',
							'type' => 'info',
		                    'notice' => true,
		                    'style' => 'info',
							'title' => esc_html__('Solonick Theme Documentation', 'berly'),
							'desc' => __('<a href="http://solonick.webredox.net/doc" target="_blank">Click Here</a> To get the theme documentation.', 'berly')
							
					),	

			
			
					)
                ));
				
				
    /*
     * <--- END SECTIONS
     */


    /*
     *
     * YOU MUST PREFIX THE FUNCTIONS BELOW AND ACTION FUNCTION CALLS OR ANY OTHER CONFIG MAY OVERRIDE YOUR CODE.
     *
     */

    /*
    *
    * --> Action hook examples
    *
    */

    // If Redux is running as a plugin, this will remove the demo notice and links
    //add_action( 'redux/loaded', 'remove_demo' );

    // Function to test the compiler hook and demo CSS output.
    // Above 10 is a priority, but 2 in necessary to include the dynamically generated CSS to be sent to the function.
    //add_filter('redux/options/' . $opt_name . '/compiler', 'compiler_action', 10, 3);

    // Change the arguments after they've been declared, but before the panel is created
    //add_filter('redux/options/' . $opt_name . '/args', 'change_arguments' );

    // Change the default value of a field after it's been set, but before it's been useds
    //add_filter('redux/options/' . $opt_name . '/defaults', 'change_defaults' );

    // Dynamically add a section. Can be also used to modify sections/fields
    //add_filter('redux/options/' . $opt_name . '/sections', 'dynamic_section');

    /**
     * This is a test function that will let you see when the compiler hook occurs.
     * It only runs if a field    set with compiler=>true is changed.
     * */
    if ( ! function_exists( 'compiler_action' ) ) {
        function compiler_action( $options, $css, $changed_values ) {
            echo '<h1>The compiler hook has run!</h1>';
            echo "<pre>";
            print_r( $changed_values ); // Values that have changed since the last save
            echo "</pre>";
            //print_r($options); //Option values
            //print_r($css); // Compiler selector CSS values  compiler => array( CSS SELECTORS )
        }
    }

    /**
     * Custom function for the callback validation referenced above
     * */
    if ( ! function_exists( 'redux_validate_callback_function' ) ) {
        function redux_validate_callback_function( $field, $value, $existing_value ) {
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
                $return['error'] = $field;
                $field['msg']    = 'your custom error message';
            }

            if ( $warning == true ) {
                $return['warning'] = $field;
                $field['msg']      = 'your custom warning message';
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
     * Simply include this function in the child themes functions.php file.
     * NOTE: the defined constants for URLs, and directories will NOT be available at this point in a child theme,
     * so you must use get_template_directory_uri() if you want to use any of the built in icons
     * */
    if ( ! function_exists( 'dynamic_section' ) ) {
        function dynamic_section( $sections ) {
            //$sections = array();
            $sections[] = array(
                'title'  => esc_html__( 'Section via hook', 'solonick' ),
                'desc'   => esc_html__( '<p class="description">This is a section created by adding a filter to the sections array. Can be used by child themes to add/remove sections from the options.</p>', 'solonick' ),
                'icon'   => 'el el-paper-clip',
                // Leave this as a blank section, no options just some intro text set above.
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
            //$args['dev_mode'] = true;

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
     * Removes the demo link and the notice of integrated demo from the redux-solonick plugin
     */
    if ( ! function_exists( 'remove_demo' ) ) {
        function remove_demo() {
            // Used to hide the demo mode link from the plugin page. Only used when Redux is a plugin.
            if ( class_exists( 'ReduxFrameworkPlugin' ) ) {
                remove_filter( 'plugin_row_meta', array(
                    ReduxFrameworkPlugin::instance(),
                    'plugin_metalinks'
                ), null, 2 );

                // Used to hide the activation notice informing users of the demo panel. Only used when Redux is a plugin.
                remove_action( 'admin_notices', array( ReduxFrameworkPlugin::instance(), 'admin_notices' ) );
            }
        }
    }

