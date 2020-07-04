<?php


defined('MOODLE_INTERNAL') ||die();

if ($ADMIN->fulltree) {

$page = new admin_settingpage('theme_canary_advanced', get_string('advancedsettings', 'theme_canary'));

// Raw SCSS to include before the content.
$setting = new admin_setting_scsscode('theme_canary/scsspre',
    get_string('rawscsspre', 'theme_canary'), get_string('rawscsspre_desc', 'theme_canary'), '', PARAM_RAW);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Raw SCSS to include after the content.
$setting = new admin_setting_scsscode('theme_canary/scss', get_string('rawscss', 'theme_canary'),
    get_string('rawscss_desc', 'theme_canary'), '', PARAM_RAW);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$settings->add($page);

}