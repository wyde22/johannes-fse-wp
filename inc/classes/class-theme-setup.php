<?php

	namespace JohannesFSEWP;

	class ThemeSetup
{
    public function registerHooks(): void
    {
        add_action('wp_enqueue_scripts', [$this, 'registerAssets']);
        add_filter('upload_mimes', [$this, 'allowMimeTypes']);
        add_filter('wp_check_filetype_and_ext', [$this, 'allowFileTypes'], 10, 4);
        add_filter('sanitize_file_name', 'remove_accents');

        $this->setupFeatures();
    }

    # Charger les styles et les scripts
    public function registerAssets(): void
    {
        wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/style.css', [], wp_get_theme()->get('Version'));
    }

    # Autoriser les SVG et le WebP
    public function allowMimeTypes($mimes): array
    {
        $mimes['svg'] = 'image/svg+xml';
        $mimes['webp'] = 'image/webp';

        return $mimes;
    }

    # Autoriser les SVG et WebP
    public function allowFileTypes($types, $file, $filename, $mimes): array
    {
        if (false !== strpos($filename, '.webp')) {
            $types['ext'] = 'webp';
            $types['type'] = 'image/webp';
        }

        if (false !== strpos($filename, '.svg')) {
            $types['ext'] = 'svg';
            $types['type'] = 'image/svg+xml';
        }

        return $types;
    }

    # Activer et désactiver des fonctionnalités
    public function setupFeatures(): void
    {
        # Retirer le pattern directory et la suggestion de blocs
        remove_action('enqueue_block_editor_assets', 'wp_enqueue_editor_block_directory_assets');
        remove_theme_support('core-block-patterns');

        # Ajouter des fonctionnalités
        add_theme_support("editor-styles");

        # Désactiver l'ancienne API XML RPC
        add_filter('xmlrpc_enabled', '__return_false');

        # Retirer les scripts des Emojis
        remove_action('admin_print_styles', 'print_emoji_styles');
        remove_action('wp_head', 'print_emoji_detection_script', 7);
        remove_action('admin_print_scripts', 'print_emoji_detection_script');
        remove_action('wp_print_styles', 'print_emoji_styles');
        remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
        remove_filter('the_content_feed', 'wp_staticize_emoji');
        remove_filter('comment_text_rss', 'wp_staticize_emoji');
    }
}