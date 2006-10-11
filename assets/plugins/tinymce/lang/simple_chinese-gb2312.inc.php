<?php
/**
 * Filename:       assets/plugins/tinymce/lang/simple_chinese.inc.php
 * Function:       Simple Chinese language file for TinyMCE.  Needs to be translated and re-encoded!
 * Encoding:       ISO-Latin-1
 * Author:         Jeff Whitfield
 * Date:           2006/04/07
 * Version:        2.0.5.1
 * MODx version:   0.9.2
**/

include_once(dirname(__FILE__).'/english.inc.php'); // fallback for missing defaults or new additions

$_lang['tinymce_editor_theme_title'] = "Theme:";
$_lang['tinymce_editor_theme_message'] = "Here you can select which theme or skin to use with the editor.  Choose default or the advance theme.";
$_lang['tinymce_editor_css_selectors_title'] = "CSS selectors:";
$_lang['tinymce_editor_css_selectors_message'] = "Here you can enter a list of selectors that should be available in the editor. Enter them as follows:<br />'displayName=selectorName;displayName2=selectorName2'<br />For instance, say you have <b>.mono</b> and <b>.smallText</b> selectors in your CSS file, you could add them here as:<br />'Monospaced text=mono;Small text=smallText'<br />Note that the last entry should not have a semi-colon after it.";
$_lang['tinymce_editor_relative_urls_title'] = "Path Options:";
$_lang['tinymce_editor_relative_urls_message'] = "This setting tells TinyMCE how to handle the paths for internal links. Note: Document relative links may not work right with friendly alias paths. Also, links might need to be changed if you move your site to a different domain or subdirectory if links are root relative or full path.";
$_lang['tinymce_settings'] = "TinyMCE Settings";
?>