<?php
/**
 * Groups configuration for default Minify implementation
 * @package Minify
 */

/**
 * You may wish to use the Minify URI Builder app to suggest
 * changes. http://yourdomain/min/builder/
 *
 * See http://code.google.com/p/minify/wiki/CustomSource for other ideas
 **/

return array(
    'common_js' => array(
                '//js/jquery-ui-1.8.21.custom.min.js',
                '//js/jquery-1.7.2.js',
            ),
    'index_js' => array(
                '//js/tooltip.js',
                '//js/slideshow.js',
                '//js/jq_test_ajax.js'
            ),
    // http://code.google.com/p/minify/wiki/CustomSource#Non-File_Sources
    // plz see this page for remote js hosting
    'book_js' => array(
                '//js/tooltip.js',
                '//js/slideshow.js',
                '//js/dropdown.js'
            ),
    'home_js' => array(
                '//js/tooltip.js',
                '//js/slideshow.js',
                '//js/jq_test_ajax.js'
            ),
    'js' => array(
                '//js/tooltip.js',
                '//js/slideshow.js',
                '//js/jq_test_ajax.js'
            ),
    'css' => array(
                '//css/file1.css',
                '//css/file2.css'
            ),
);
