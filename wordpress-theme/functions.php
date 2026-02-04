<?php
/**
 * SabLearn Agents Theme Functions
 *
 * @package SabLearn_Agents
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Theme Setup
 */
function sablearn_agents_setup() {
    // Add default posts and comments RSS feed links to head
    add_theme_support( 'automatic-feed-links' );

    // Let WordPress manage the document title
    add_theme_support( 'title-tag' );

    // Enable support for Post Thumbnails
    add_theme_support( 'post-thumbnails' );

    // Register navigation menus
    register_nav_menus( array(
        'primary' => esc_html__( 'Primary Menu', 'sablearn-agents' ),
        'footer'  => esc_html__( 'Footer Menu', 'sablearn-agents' ),
    ) );

    // HTML5 support
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ) );

    // Custom logo support
    add_theme_support( 'custom-logo', array(
        'height'      => 60,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ) );
}
add_action( 'after_setup_theme', 'sablearn_agents_setup' );

/**
 * Enqueue scripts and styles
 */
function sablearn_agents_scripts() {
    // Main stylesheet
    wp_enqueue_style( 'sablearn-agents-style', get_stylesheet_uri(), array(), '1.0.0' );
    
    // Google Fonts - Inter & Space Grotesk
    wp_enqueue_style( 'sablearn-agents-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Space+Grotesk:wght@500;600;700&display=swap', array(), null );
}
add_action( 'wp_enqueue_scripts', 'sablearn_agents_scripts' );

/**
 * Register widget areas
 */
function sablearn_agents_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Footer Widget 1', 'sablearn-agents' ),
        'id'            => 'footer-1',
        'description'   => esc_html__( 'Add widgets here.', 'sablearn-agents' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="footer-title">',
        'after_title'   => '</h4>',
    ) );
    
    register_sidebar( array(
        'name'          => esc_html__( 'Footer Widget 2', 'sablearn-agents' ),
        'id'            => 'footer-2',
        'description'   => esc_html__( 'Add widgets here.', 'sablearn-agents' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="footer-title">',
        'after_title'   => '</h4>',
    ) );
}
add_action( 'widgets_init', 'sablearn_agents_widgets_init' );
