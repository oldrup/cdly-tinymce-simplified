<?php
/**
 * Plugin Name: Codeally - TinyMCE Simplified
 * Plugin URI: https://github.com/oldrup/cdly-tinymce-simplified
 * Description: Limits TinyMCE formatting options to basic elements to maintain clean content semantics.
 * Version: 1.2.1
 * Author: Bjarne Oldrup
 * Author URI: https://oldrup.dk/
 * Text Domain: cdly-tinymce-simplified
 * License: GPLv2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Requires PHP: 8.2
 * Requires at least: 6.4
 */

declare(strict_types=1);

namespace Codeally\TinyMceSimplified;

if (!defined('ABSPATH')) {
    exit;
}

final class Plugin
{
    public static function init(): void
    {
        add_filter('mce_buttons', [self::class, 'primary_toolbar'], 10, 1);
        add_filter('mce_buttons_2', [self::class, 'secondary_toolbar'], 10, 1);
        add_filter('tiny_mce_before_init', [self::class, 'editor_settings'], 10, 1);
    }

    public static function primary_toolbar(array $buttons): array
    {
        return [
            'undo',
            'redo',
            'bold',
            'italic',
            'strikethrough',
            'bullist',
            'numlist',
            'link',
            'unlink',
            'removeformat',
        ];
    }

    public static function secondary_toolbar(array $buttons): array
    {
        return [];
    }

    public static function editor_settings(array $init): array
    {
        // Allow rich paste while stripping unwanted styles, spans, and inline attributes
        $init['paste_as_text']       = false;
        $init['paste_remove_styles'] = true;
        $init['paste_remove_spans']  = true;

        // Security & cleanup constraints (blocks base64 images while allowing uploaded images)
        $init['paste_data_images'] = false;
        $init['keep_styles']       = false;
        $init['invalid_styles']    = '*';

        // Allowed markup rules (preserves del, s, strike, and img with required WP attributes)
        $init['valid_elements'] = 'p,strong,b,em,i,del,s,strike,ul,ol,li,a[href|target|rel],img[src|alt|width|height|class]';

        return $init;
    }
}

Plugin::init();