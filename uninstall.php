<?php
// if uninstall.php is not called by WordPress, die

if (!defined('WP_UNINSTALL_PLUGIN')) {
    die;
}

$option_to_delete = 'pb_lazybg_settings';

delete_option($option_to_delete);

// for site options in Multisite
delete_site_option($option_to_delete);
