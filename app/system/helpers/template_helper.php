<?php

/**
 * Template helper functions
 */

if (!function_exists('get_partial')) {
    /**
     * Render a theme partial area with components view
     * @deprecated since 2.2 use component() instead
     *
     * @param string $partial
     * @param string $class
     *
     * @return string
     */
    function get_partial($partial = '', $class = null)
    {
        return $partial;
    }
}

if (!function_exists('page')) {
    /**
     * Get the page content
     * @return string
     */
    function page()
    {
        return controller()->renderPage();
    }
}

if (!function_exists('partial_area')) {
    /**
     * Render a theme partial area with its components view
     *
     * @param string $area
     * @param string $class
     *
     * @return string
     */
    function partial_area($area = '', $class = '')
    {
        $params = !is_array($class) ? ['class' => $class] : $class;

        return controller()->renderPartialArea($area, $params);
    }
}

if (!function_exists('partial')) {
    /**
     * Load a partial view file
     *
     * @param string $partial
     * @param array $data
     *
     * @return string
     */
    function partial($partial = '', $data = [])
    {
        return controller()->renderPartial($partial, $data);
    }
}

if (!function_exists('has_components')) {
    /**
     * Check if Partial Area has rendered components
     *
     * @param string $partialArea
     *
     * @return string
     */
    function has_components($partialArea = '')
    {
        return controller()->hasPartialComponents($partialArea);
    }
}

if (!function_exists('component')) {
    /**
     * Check if Partial Area has rendered components
     *
     * @param string $component
     * @param $params
     *
     * @return string
     */
    function component($component = '', $params = [])
    {
        return controller()->renderComponent($component, $params);
    }
}

if (!function_exists('get_title')) {
    /**
     * Get page title html tag
     * @return    string
     */
    function get_title()
    {
        return controller()->getPage()->title;
    }
}

if (!function_exists('get_heading')) {
    /**
     * Get page heading
     * @return    string
     */
    function get_heading()
    {
        return controller()->getPage()->heading;
    }
}

if (!function_exists('get_breadcrumbs')) {
    /**
     * Get page breadcrumbs
     * @return    string
     */
    function get_breadcrumbs()
    {
        return Template::getBreadcrumb();
    }
}

if (!function_exists('get_active_styles')) {
    /**
     * Get the active theme custom stylesheet html tag,
     * generated by customizer
     * @return    string
     */
    function get_active_styles()
    {
        return Assets::getActiveStyle();
    }
}

if (!function_exists('get_theme_options')) {
    /**
     * Get the active theme options set in theme customizer
     *
     * @param string $item
     *
     * @return mixed
     */
    function get_theme_options($item = '', $default = null)
    {
        return Assets::getActiveThemeOptions($item, $default);
    }
}
