== Truncate Text ==
Contributors: nchisley
Donate link: https://natechisley.com/donate
Tags: text truncation, shortcodes, content formatting, shorten text, truncate text
Requires at least: 5.0
Tested up to: 6.8
Stable tag: 1.0.3
License: GPLv2 or later (or compatible)
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Truncate Text is a simple WordPress plugin that allows you to truncate text in your posts and pages on your WordPress website.

== Description ==
Truncate Text is a simple WordPress plugin that allows you to truncate text in your posts and pages. Perfect for shortening usernames, cryptocurrency wallet addresses, or any lengthy content, this plugin provides flexible options to control how text is truncated.

== Installation ==
1. Log in to your WordPress site as an administrator.
2. Go to the "Plugins" section in the WordPress dashboard.
3. Click "Add New" and then click the "Upload Plugin" button.
4. Choose the `truncate-text.zip` file from your computer and click "Install Now."
5. After installation is complete, click the "Activate Plugin" button.

== Usage ==
- Use the `[truncate-text]` shortcode to truncate text in your post or page content.
- Use the `[truncate-shortcode]` shortcode to process nested shortcodes before truncating.

### Optional Attributes
These attributes work with both shortcodes:
- **`limit`**: Set the number of characters to display (default: 6).  
  Example: `[truncate-text limit="8"]0x8755B12f034ee7b2383fCF5E849201C71622CC44[/truncate-text]` → `0x8755B1...1622CC44`
- **`encoding`**: Specify the text encoding (default: UTF-8).  
  Example: `[truncate-text encoding="ISO-8859-1"]text[/truncate-text]`
- **`location`**: Choose where to truncate: "start", "middle" (default), or "end".  
  Examples:  
  - `[truncate-text location="start"]0x8755B12f034ee7b2383fCF5E849201C71622CC44[/truncate-text]` → `...1622CC44`  
  - `[truncate-text location="middle"]0x8755B12f034ee7b2383fCF5E849201C71622CC44[/truncate-text]` → `0x8755...22CC44`  
  - `[truncate-text location="end"]0x8755B12f034ee7b2383fCF5E849201C71622CC44[/truncate-text]` → `0x8755...`
- **`dots`**: Set the number of dots in the ellipsis (default: 3).  
  Examples:  
  - `[truncate-text location="end" dots="10"]0x8755B12f034ee7b2383fCF5E849201C71622CC44[/truncate-text]` → `0x8755..........`  
  - `[truncate-text location="middle" dots="5"]0x8755B12f034ee7b2383fCF5E849201C71622CC44[/truncate-text]` → `0x8755.....22CC44`

### Nested Shortcode Example
- `[truncate-shortcode limit="6" location="end" dots="4"][another-shortcode][/truncate-shortcode]`  
  Processes the inner shortcode first, then truncates the result.

== Support ==
If you have questions or issues, please reach out through our support channel at [NateChisley.com](https://natechisley.com). We’re happy to assist!

== Contributing ==
We welcome contributions! Please follow our guidelines for contributing at [NateChisley.com](https://natechisley.com).

== Screenshots ==
1-Truncate Text Example: Showing a truncated crypto wallet address.
2-Truncate Shortcode Example: Demonstrating nested shortcode processing.

== Changelog ==
= 1.0.3 =
- Restructured directory.
= 1.0.2 =
- Added important links to the plugin page listing and settings page.
- Brand/images update.
= 1.0.1 =
- New attributes added (limit, location, encoding, dots).
- Added support for nested shortcodes.
= 1.0.0 =
- Initial release with `[truncate-text]` and `[truncate-shortcode]` shortcodes.