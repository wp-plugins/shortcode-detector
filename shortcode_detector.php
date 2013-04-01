<?php

    /**
    * Plugin Name: Shortcode Detector
    * Plugin URI: http://apocalypseboy.com/
    * Description: Detects shortcodes before wp_head() call to allow selective enqueuing of scripts and styles (i.e. js and css files) that are specifically used for shortcode.
    * Version: 1.0.0
    * Author: ApocalypseBoy
    * Author URI: http://apocalypseboy.com/
    */
    
    class ABY_Shortcode_Detector {  
        function __construct() {   
            add_action( 'wp', array( $this, 'detect_shortcodes' ) );
        }       
        
        function detect_shortcodes() { 
            global $posts;
            
            $pattern = get_shortcode_regex();
            $shortcode_matches = array();
            
            foreach ( (array) $posts as $p ) {
                if ( preg_match_all( '/' . $pattern . '/s', $p->post_content, $matches ) ) {
                    $shortcode_matches = array_merge( $shortcode_matches, $matches[2] );
                }
            }
            
            $shortcode_matches = array_unique( $shortcode_matches );
            
            foreach ( $shortcode_matches as $sc )
                do_action( 'shortcode_detected_' . $sc );
        }   
    }  

    $ABY_Shortcode_Detector = new ABY_Shortcode_Detector();