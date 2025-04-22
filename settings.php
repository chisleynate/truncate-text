<?php
function truncate_text_settings_menu() {
    add_options_page( 'Truncate Text Settings', 'Truncate Text', 'manage_options', 'truncate-text-settings', 'truncate_text_settings_page' );
}
add_action( 'admin_menu', 'truncate_text_settings_menu' );

function truncate_text_settings_page() {
    if ( !current_user_can( 'manage_options' ) ) {
        wp_die( 'You do not have sufficient permissions to access this page.' );
    }
    ?>
    <div class="wrap">
        <h1 style="display:none;"></h1>
        <div class="head-wrap" style="width:100%;text-align:left;padding-top:20px;">
            <img src="<?php echo esc_url( TRUNCATE_TEXT_URL . 'img/settings-head-01.png' ); ?>" alt="Truncate Text by WebPro" style="width:300px;" />
        </div>
        <h1><b>Shortcode Usage</b></h1>
        <ul style="list-style-type:square;padding-left:20px;">
            <li>Use the <b>[truncate-text]</b> shortcode in your post or page content to truncate the text. This is especially useful when displaying cryptocurrency blockchain wallet addresses.<br>
            <i>Example:</i> Wallet address is [truncate-text]0x8755B12f034ee7b2383fCF5E849201C71622CC44[/truncate-text]<br>
            <i>Output:</i> Wallet address is 0x8755...22CC44</li>
            <li>Use the <b>[truncate-shortcode]</b> shortcode in your post or page content to process other shortcodes in the content before truncating it.<br>
            <i>Example:</i> [truncate-shortcode][another-shortcode][/truncate-shortcode]<br>
            <i>Output:</i> This depends on what the internal shortcode is processing.</li>
        </ul>
        <h3>Optional Attributes</h3>
        <p>These optional attributes apply to both shortcodes.</p>
        <ul style="list-style-type:square;padding-left:20px;">
            <li><b>limit</b> - Specify the number of characters you want to display using the limit attribute. The default is 6.<br>
            <i>Example:</i> [truncate-text limit="8"]0x8755B12f034ee7b2383fCF5E849201C71622CC44[/truncate-text]<br>
            <i>Output:</i> 0x8755B1...1622CC44</li>
            <li><b>encoding</b> - Specify the encoding you would like to use by using the encoding attribute. The default is UTF-8.<br>
            <i>Example:</i> [truncate-text encoding="ISO-8859-1"]</li>
            <li><b>location</b> - Specify where to truncate the text. Options are "start", "middle" (default), or "end".<br>
            <i>Examples:</i><br>
            [truncate-text location="start"]0x8755B12f034ee7b2383fCF5E849201C71622CC44[/truncate-text] → ...1622CC44<br>
            [truncate-text location="middle"]0x8755B12f034ee7b2383fCF5E849201C71622CC44[/truncate-text] → 0x8755...22CC44<br>
            [truncate-text location="end"]0x8755B12f034ee7b2383fCF5E849201C71622CC44[/truncate-text] → 0x8755...</li>
            <li><b>dots</b> - Specify the number of dots to show in the truncated section. The default is 3.<br>
            <i>Examples:</i><br>
            [truncate-text location="end" dots="10"]0x8755B12f034ee7b2383fCF5E849201C71622CC44[/truncate-text] → 0x8755..........<br>
            [truncate-text location="middle" dots="5"]0x8755B12f034ee7b2383fCF5E849201C71622CC44[/truncate-text] → 0x8755.....22CC44</li>
        </ul>
        <h3>Links</h3>
        <ul style="list-style-type:square;padding-left:20px;">
            <li><a class="dashicons-before dashicons-translation" href="https://translate.wordpress.org/projects/wp-plugins/truncate-text" target="_blank" rel="nofollow noopener noreferrer" title="Translations">Translations</a>: Help us translate this plugin into your language.</li>
            <li><a class="dashicons-before dashicons-sos" href="https://wordpress.org/support/plugin/truncate-text" target="_blank" rel="nofollow noopener noreferrer" title="Support">Support</a>: Contact us if you need help or have a suggestion.</li>
            <li><a class="dashicons-before dashicons-thumbs-up" href="https://natechisley.com/donate" target="_blank" rel="nofollow noopener noreferrer" title="Donate">Donate</a>: Consider donating toward the devlopment of this plugin.</li>
        </ul>
    </div>
    <?php
}