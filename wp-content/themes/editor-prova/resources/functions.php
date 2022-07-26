<?php

/**
 * Do not edit anything in this file unless you know what you're doing
 */

use Roots\Sage\Config;
use Roots\Sage\Container;

/**
 * Helper function for prettying up errors
 * @param string $message
 * @param string $subtitle
 * @param string $title
 */
$sage_error = function ($message, $subtitle = '', $title = '') {
    $title = $title ?: __('Sage &rsaquo; Error', 'sage');
    $footer = '<a href="https://roots.io/sage/docs/">roots.io/sage/docs/</a>';
    $message = "<h1>{$title}<br><small>{$subtitle}</small></h1><p>{$message}</p><p>{$footer}</p>";
    wp_die($message, $title);
};

/**
 * Ensure compatible version of PHP is used
 */
if (version_compare('7.1', phpversion(), '>=')) {
    $sage_error(__('You must be using PHP 7.1 or greater.', 'sage'), __('Invalid PHP version', 'sage'));
}

/**
 * Ensure compatible version of WordPress is used
 */
if (version_compare('4.7.0', get_bloginfo('version'), '>=')) {
    $sage_error(__('You must be using WordPress 4.7.0 or greater.', 'sage'), __('Invalid WordPress version', 'sage'));
}

/**
 * Ensure dependencies are loaded
 */
if (!class_exists('Roots\\Sage\\Container')) {
    if (!file_exists($composer = __DIR__.'/../vendor/autoload.php')) {
        $sage_error(
            __('You must run <code>composer install</code> from the Sage directory.', 'sage'),
            __('Autoloader not found.', 'sage')
        );
    }
    require_once $composer;
}

/**
 * Sage required files
 *
 * The mapped array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 */
array_map(function ($file) use ($sage_error) {
    $file = "../app/{$file}.php";
    if (!locate_template($file, true, true)) {
        $sage_error(sprintf(__('Error locating <code>%s</code> for inclusion.', 'sage'), $file), 'File not found');
    }
}, ['helpers', 'setup', 'filters', 'admin']);

/**
 * Here's what's happening with these hooks:
 * 1. WordPress initially detects theme in themes/sage/resources
 * 2. Upon activation, we tell WordPress that the theme is actually in themes/sage/resources/views
 * 3. When we call get_template_directory() or get_template_directory_uri(), we point it back to themes/sage/resources
 *
 * We do this so that the Template Hierarchy will look in themes/sage/resources/views for core WordPress themes
 * But functions.php, style.css, and index.php are all still located in themes/sage/resources
 *
 * This is not compatible with the WordPress Customizer theme preview prior to theme activation
 *
 * get_template_directory()   -> /srv/www/example.com/current/web/app/themes/sage/resources
 * get_stylesheet_directory() -> /srv/www/example.com/current/web/app/themes/sage/resources
 * locate_template()
 * ├── STYLESHEETPATH         -> /srv/www/example.com/current/web/app/themes/sage/resources/views
 * └── TEMPLATEPATH           -> /srv/www/example.com/current/web/app/themes/sage/resources
 */
array_map(
    'add_filter',
    ['theme_file_path', 'theme_file_uri', 'parent_theme_file_path', 'parent_theme_file_uri'],
    array_fill(0, 4, 'dirname')
);
Container::getInstance()
    ->bindIf('config', function () {
        return new Config([
            'assets' => require dirname(__DIR__).'/config/assets.php',
            'theme' => require dirname(__DIR__).'/config/theme.php',
            'view' => require dirname(__DIR__).'/config/view.php',
        ]);
    }, true);

    //carica i file .css 
function load_stylesheets()
{
    wp_enqueue_style('bootstrap_css', "https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css", array(), '5.1.3', 'all');
    wp_enqueue_style('datatables_css', "https://cdn.datatables.net/v/bs5/dt-1.12.1/r-2.3.0/datatables.min.css", array(), '1.12.1', 'all');
    wp_enqueue_style('colreorder_css', "https://cdn.datatables.net/colreorder/1.5.6/css/colReorder.bootstrap5.min.css", array(), '1.5.6', 'all');
    wp_enqueue_style('buttons_css', "https://cdn.datatables.net/buttons/2.2.3/css/buttons.bootstrap5.min.css", array(), '2.2.3', 'all');
    wp_enqueue_style('select_css', "https://cdn.datatables.net/select/1.4.0/css/select.bootstrap5.min.css", array(), '1.4.0', 'all');
    wp_enqueue_style('datetime_css', "https://cdn.datatables.net/datetime/1.0.3/css/dataTables.dateTime.min.css", array(), '1.0.3', 'all');
    //da non aggiungere insieme a editor_bootstrap_css
    //wp_enqueue_style('editor_css', "/Editor/css/editor.dataTables.min.css", array(), '2.0.8', 'all');
    wp_enqueue_style('editor_bootstrap_css', "/Editor/css/editor.bootstrap5.min.css", array(), '2.0.8', 'all');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');
    
//carica correttamente i file .js
function load_js()
{   
    wp_enqueue_script('bootstrap_js', "https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/js/bootstrap.bundle.min.js", array(), '5.1.3', true);
    wp_enqueue_script('datatables_js', "https://cdn.datatables.net/v/bs5/dt-1.12.1/r-2.3.0/datatables.min.js", array(), '1.12.1', true);
    wp_enqueue_script('colreorder_js', "https://cdn.datatables.net/colreorder/1.5.6/js/dataTables.colReorder.min.js", array(), '1.5.6', true);
    wp_enqueue_script('buttons_js', "https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js", array(), '2.2.3', true);
    wp_enqueue_script('buttons_bootstrap_js', "https://cdn.datatables.net/buttons/1.7.0/js/buttons.bootstrap5.min.js", array(), '2.2.3', true);
    wp_enqueue_script('select_js', "https://cdn.datatables.net/select/1.4.0/js/dataTables.select.min.js", array(), '1.4.0', true);
    wp_enqueue_script('datetime_js', "https://cdn.datatables.net/datetime/1.0.3/js/dataTables.dateTime.min.js", array(), '1.0.3', true);
    wp_enqueue_script('print_js', "https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js", array(), '2.2.3', true);
    wp_enqueue_script('editor_js', "/Editor/js/dataTables.editor.min.js", array(), '2.0.8', true);
    wp_enqueue_script('editor_bootstrap_js', "/Editor/js/editor.bootstrap5.min.js", array(), '2.0.8', true);
}
add_action('wp_enqueue_scripts', 'load_js');