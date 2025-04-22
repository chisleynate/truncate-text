<?php
// Use the global main file path
global $truncate_main_file;

// Settings link
add_filter( 'plugin_action_links_' . plugin_basename($truncate_main_file), 'truncate_add_action_links' );
function truncate_add_action_links( $links ) {
    $custom_links = [
        '<a href="' . admin_url( 'options-general.php?page=truncate-text-settings' ) . '">Settings</a>',
    ];
    return array_merge( $custom_links, $links );
}

// Meta row links
add_filter( 'plugin_row_meta', 'truncate_add_meta_links', 10, 2 );
function truncate_add_meta_links( $links, $file ) {
    global $truncate_main_file;
    if ( plugin_basename($truncate_main_file) === $file ) {
        $extra_links = [
            '<a class="dashicons-before dashicons-translation" href="https://translate.wordpress.org/projects/wp-plugins/truncate-text" target="_blank" rel="nofollow noopener noreferrer" title="Translations">Translations</a>',
            '<a class="dashicons-before dashicons-sos" href="https://wordpress.org/support/plugin/truncate-text" target="_blank" rel="nofollow noopener noreferrer" title="Support">Support</a>',
            '<a class="dashicons-before dashicons-thumbs-up" href="https://natechisley.com/donate" target="_blank" rel="nofollow noopener noreferrer" title="Donate">Donate</a>',
        ];
        return array_merge( $links, $extra_links );
    }
    return $links;
}