<?php

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our theme. We will simply require it into the script here so that we
| don't have to worry about manually loading any of our classes later on.
|
*/

if (! file_exists($composer = __DIR__.'/vendor/autoload.php')) {
    wp_die(__('Error locating autoloader. Please run <code>composer install</code>.', 'sage'));
}

require $composer;

/*
|--------------------------------------------------------------------------
| Register The Bootloader
|--------------------------------------------------------------------------
|
| The first thing we will do is schedule a new Acorn application container
| to boot when WordPress is finished loading the theme. The application
| serves as the "glue" for all the components of Laravel and is
| the IoC container for the system binding all of the various parts.
|
*/

if (! function_exists('\Roots\bootloader')) {
    wp_die(
        __('You need to install Acorn to use this theme.', 'sage'),
        '',
        [
            'link_url' => 'https://roots.io/acorn/docs/installation/',
            'link_text' => __('Acorn Docs: Installation', 'sage'),
        ]
    );
}

\Roots\bootloader()->boot();

/*
|--------------------------------------------------------------------------
| Register Sage Theme Files
|--------------------------------------------------------------------------
|
| Out of the box, Sage ships with categorically named theme files
| containing common functionality and setup to be bootstrapped with your
| theme. Simply add (or remove) files from the array below to change what
| is registered alongside Sage.
|
*/

collect(['setup', 'filters'])
    ->each(function ($file) {
        if (! locate_template($file = "app/{$file}.php", true, true)) {
            wp_die(
                /* translators: %s is replaced with the relative file path */
                sprintf(__('Error locating <code>%s</code> for inclusion.', 'sage'), $file)
            );
        }
    });
    //Footer
    function qstrike_register_menus() {
        register_nav_menus(
            array(
                'footer_menu' => __('Footer Menu', 'qstrike-theme')
            )
        );
    }
    add_action('after_setup_theme', 'qstrike_register_menus');

    function enqueue_jquery() {
        wp_enqueue_script('jquery');
        wp_enqueue_style('aos-css', 'https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css');
        wp_enqueue_script('aos-js', 'https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js', ['jquery'], null, true);
        wp_enqueue_script('animation', get_template_directory_uri() . '/resources/scripts/main/animation.js', [], null, true);
        wp_enqueue_script('burger-menu', get_template_directory_uri() . '/resources/scripts/main/navigation.js', [], null, true);

         // Conditionally enqueue accordion script for specific pages
        if (is_page(['home'])) {
        wp_enqueue_script('hero-banner', get_template_directory_uri() . '/resources/scripts/main/herobanner.js', ['jquery'], null, true);
        }
        if (is_page(['our-team', 'careers'])) {
            wp_enqueue_script('accordion-dropdown', get_template_directory_uri() . '/resources/scripts/main/accordion.js', ['jquery'], null, true);
            }
    }
    add_action('wp_enqueue_scripts', 'enqueue_jquery');


    //Dashicons
    function enqueue_dashicons() {
        wp_enqueue_style('dashicons');
    }
    add_action('wp_enqueue_scripts', 'enqueue_dashicons');
