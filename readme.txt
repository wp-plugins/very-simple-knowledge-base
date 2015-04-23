=== Very Simple Knowledge Base ===
Contributors: Guido07111975
Version: 1.5
License: GNU General Public License v3 or later
License URI: http://www.gnu.org/licenses/gpl-3.0.html
Requires at least: 3.7
Tested up to: 4.2
Stable tag: trunk
Tags: simple, responsive, knowledge, base, knowledgebase, bulletin, board, bulletinboard, faq, wiki, portal


== Changelog ==
Version 1.5
- relocated shortcode from file vskb to files three_columns and four_columns
- files four_columns and vskb_style: changed div vskb into vskb-four
- hide subcategory name in list (post name will be displayed under parent category name)

Version 1.4
- reordered file vskb_style
- added fix to remove border bottom from links in Twenty Fifteen

Version 1.3
- now also shortcode for 3 columns: [knowledgebase-three]
- adjusted file vskb.php and file vskb_style.css
- added file three_columns.php and file four_columns.php
- updated language files

Version 1.2
- adjusted the shortcode
- removed background color and link color from stylesheet

Version 1.1
- forgot pot file and Dutch translation files in version 1.0
- small css adjustments

Version 1.0
- first stable release


== DESCRIPTION ==
This is a very simple plugin to create a responsive Knowledge Base, Bulletin Board, FAQ, Wiki or Weblink Portal. 

It uses the default WP categories and posts. 

Use shortcode [knowledgebase-three] or [knowledgebase] to display your categories and posts in 3 or 4 columns on a page. In mobile screens 2 columns.

Because I used css selector 'nth-of-type' it might not display 100% in IE8 and older.

= Translation =
Dutch translation included. Only things that can be translated are dashboard name and plugin description. More translations are very welcome! Please contact me via my website.

= CREDITS =
Without the WordPress codex and help from the WordPress community I was not able to develop this plugin, so: thank you!

A special thank you to Niels van Renselaar for helping me with the shortcode.

Enjoy,
Guido


== INSTALLATION == 
After installation create a page and add shortcode [knowledgebase-three] or [knowledgebase]. 

Now this page will display your categories and posts in 3 or 4 columns. In mobile screens 2 columns.

That's all!


== Frequently Asked Questions ==
= Why are the subcategory names not displayed? =
The subcategory name is hidden so post name will be displayed under parent category name.
You can change this in files three_columns and four_columns by removing this: parent=0&

= Other question or comment? =
Please open a topic in plugin forum or send me a message via my website.


== Screenshots == 
1. Very Simple Knowledge Base (3 or 4 columns) in Twenty Fifteen theme.