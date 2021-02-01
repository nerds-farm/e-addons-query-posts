<?php
namespace EAddonsQueryPosts\Modules\Query;

use EAddonsForElementor\Base\Module_Base;


if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

class Query extends Module_Base {

    public function __construct() {
        parent::__construct();
        add_action('elementor/editor/after_enqueue_scripts', [$this, 'enqueue_editor_assets']);        
        //add_action('elementor/frontend/before_enqueue_styles', [$this, 'register_libs']);
    }

    /**
     * Register libs in Frontend
     *
     * @access public
     */
    public function register_libs() {
        
    }

    /**
     * Enqueue admin styles in Editor
     *
     * @access public
     */
    public function enqueue_editor_assets() {
        wp_enqueue_style('e-addons-editor-query');
        wp_enqueue_script('e-addons-editor-query');
    }

}
