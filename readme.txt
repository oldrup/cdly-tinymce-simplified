=== TinyMCE Simplified by Codeally ===
Contributors: oldrup
Tags: tinymce, pods, acf, editor, wysiwyg
Requires at least: 6.4
Tested up to: 7.1
Requires PHP: 8.2
Stable tag: 1.2.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Simplifies TinyMCE to help content creators focus on writing while maintaining consistent typography, clean HTML, and web accessibility.

== Description ==

TinyMCE Simplified by Codeally refines the WordPress rich-text editor into a clean, focused editing environment. By restricting the toolbar to core formatting – bold, italics, strikethrough, lists, links, undo/redo, and clear formatting – it creates an intuitive experience for day-to-day content creators.

This setup removes visual clutter and prevents accidental styling issues while preserving helpful copy-paste markup. Core inline elements (bold text, italics, links, lists, and images) survive pastes intact, while background colors, custom fonts, inline CSS, and heading tags are cleanly stripped.

= Key Highlights =
* **Focused Writing UI**: Provides essential inline styling options without toolbar clutter.
* **Smart Copy-Paste**: Preserves structural markup (`<strong>`, `<em>`, `<a>`, `<ul>`, `<ol>`, `<li>`, `<img>`) while stripping inline CSS styles, span tags, and class attributes.
* **WCAG Heading Protection**: Strips pasted `<h1>`–`<h6>` elements to prevent broken heading outlines in custom fields.
* **Flexible Media Support**: Accommodates standard `<img>` tags for flexible workflows, while keeping structured content clean.
* **Safe Text Fields**: Disables base64 image pastes while allowing standard uploaded images.
* **Zero Configuration**: Works automatically across all TinyMCE instances in the WordPress admin.

== Installation ==

1. Upload the `cdly-tinymce-simplified` folder to `/wp-content/plugins/`.
2. Activate the plugin via the **Plugins** menu in WordPress.
3. No further configuration required.

== Frequently Asked Questions ==

= Who is this plugin for? =
It is built for developers, agencies, and site owners who want to provide content creators with a safe, accessible, and user-friendly editing experience across custom rich-text fields.

= What formatting survives copy-pasting? =
* **Preserved**: Paragraphs, bold (`<strong>`/`<b>`), italics (`<em>`/`<i>`), strikethrough (`<del>`/`<s>`/`<strike>`), bulleted (`<ul>`) and numbered (`<ol>`) lists, hyperlinked text (`<a>`), and uploaded images (`<img>`).
* **Stripped**: Headings (`<h1>`–`<h6>`), custom inline CSS (`style="..."`), custom classes, background colors, font sizes, `<span>` tags, and base64 images.

= Why are heading tags (H1-H6) stripped on paste? =
To satisfy WCAG 2.1 (Success Criterion 1.3.1 Info and Relationships), document heading structures must follow a logical, sequential hierarchy (e.g., H1 followed by H2, then H3). Pasting arbitrary heading tags into custom field regions frequently disrupts the page's heading outline, creating barriers for screen readers and assistive technologies.

= Should I use WYSIWYG fields for images? =
While this plugin supports `<img>` tags (requiring media buttons to be enabled in Pods or ACF), best practice is to use dedicated Image or Gallery custom fields for media assets. Keeping images separate from body copy gives developers full control over responsive image sizes, markup rendering, and design consistency on the frontend, rather than embedding raw images directly inside text fields.

= How should I configure Pods Framework WYSIWYG fields? =
Under **WYSIWYG Options**, recommended settings include:
* **Enable Media Buttons**: Unchecked (or checked if image uploads are required)
* **Sanitize HTML**: Checked
* **Enable wpautop**: Checked
* **Allowed HTML Tags**: `p, strong, b, em, i, del, strike, s, ul, ol, li, a, img`

= How should I configure ACF WYSIWYG fields? =
Under the **Presentation** tab:
* **Tabs**: Visual Only
* **Toolbar**: Full (automatically streamlined by this plugin)
* **Show Media Upload Buttons**: Off (or On if image uploads are required)

= Does it work with other custom field plugins? =
Yes. It hooks into core WordPress TinyMCE initialization filters (`tiny_mce_before_init` and `mce_buttons`), ensuring any standard WP WYSIWYG field is automatically streamlined.

= What happens if I disable the plugin? =
Your saved content remains completely unchanged in the database. Disabling the plugin simply restores default TinyMCE toolbars for future editing sessions.

= What are the limitations? =
This plugin is designed for structured custom fields. It may not be suitable for long-form article editors that require complex block layouts, tables, or structural subheadings.

== Compatibility & Credits ==

* **Developed by**: Bjarne Oldrup ([oldrup.dk](https://oldrup.dk/))
* **Sponsored by**: [Codeally](https://codeally.dk/) – creating open-source tools to give back to the WordPress community.
* **Tested Compatibility**: Specifically tested with **Pods 3.3+** and **Advanced Custom Fields (ACF) 6.8+**. Built to work seamlessly with any plugin using standard WordPress TinyMCE fields (including Secure Custom Fields (SCF), Meta Box, and Toolset).
* **TinyMCE**: TinyMCE is an open-source rich-text editor component maintained by Tiny Technologies, Inc.

== Screenshots ==

1. Recommended Pods Framework field settings.
2. Streamlined TinyMCE editor interface in a Pods field.
3. Recommended ACF (Advanced Custom Fields) field settings.
4. Streamlined TinyMCE editor interface in an ACF field.

== Changelog ==

= 1.2.0 =
* Added support for `<img>` tags to accommodate media upload workflows.
* Updated branding to TinyMCE Simplified by Codeally.

= 1.1.0 =
* Improved paste handling: preserves essential markup (bold, italics, links, lists) while stripping inline CSS, spans, classes, and heading tags.

= 1.0.0 =
* Initial official release.