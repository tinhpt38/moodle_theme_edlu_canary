<?php

defined('MOODLE_INTERNAL') || die;
if ($ADMIN->fulltree) {

    $settings = new theme_boost_admin_settingspage_tabs('themesettingcanary', get_string('configtitle', 'theme_canary'));
    $page = new admin_settingpage('theme_canary_general', get_string('generalsettings', 'theme_boost'));

    // $name = 'theme_canary/navbardark';
    // $title = get_string('navbardark', 'theme_canary');
    // $description = get_string('navbardarkdesc', 'theme_canary');
    // $setting = new admin_setting_configcheckbox($name, $title, $description, 0);
    // $setting->set_updatedcallback('theme_reset_all_caches');
    // $page->add($setting);

    // Preset.
    // $name = 'theme_canary/preset';
    // $title = get_string('preset', 'theme_canary');
    // $description = get_string('preset_desc', 'theme_canary');
    // $default = 'default.scss';

    // $context = context_system::instance();
    // $fs = get_file_storage();
    // $files = $fs->get_area_files($context->id, 'theme_canary', 'preset', 0, 'itemid, filepath, filename', false);

    // $choices = [];
    // foreach ($files as $file) {
    //     $choices[$file->get_filename()] = $file->get_filename();
    // }

    // // These are the built in presets.
    // $choices['default.scss'] = 'default.scss';
    // $choices['plain.scss'] = 'plain.scss';

    // $setting = new admin_setting_configthemepreset($name, $title, $description, $default, $choices, 'canary');
    // $setting->set_updatedcallback('theme_reset_all_caches');
    // $page->add($setting);

    // // Preset files setting.
    // $name = 'theme_canary/background';
    // $title = get_string('background', 'theme_canary');
    // $description = get_string('presetfiles_desc', 'theme_canary');

    // $setting = new admin_setting_configstoredfile($name, $title, $description, 'preset', 0,
    //     array('maxfiles' => 20, 'accepted_types' => array('.scss')));
    // $page->add($setting);

    // Background image setting.
    $name = 'theme_canary/backgroundimage';
    $title = get_string('backgroundimage', 'theme_boost');
    $description = get_string('backgroundimage_desc', 'theme_boost');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'backgroundimage');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_canary/fontpageimage';
    $title = 'Frontpage Image';
    $description = 'Image will dipslay in fontpage when user is not login yet!';
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'fontpageimage');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // // Variable $body-color.
    // // We use an empty default value because the default colour should come from the preset.
    // $name = 'theme_canary/brandcolor';
    // $title = get_string('brandcolor', 'theme_boost');
    // $description = get_string('brandcolor_desc', 'theme_boost');
    // $setting = new admin_setting_configcolourpicker($name, $title, $description, '');
    // $setting->set_updatedcallback('theme_reset_all_caches');
    // $page->add($setting);

    // // Must add the page after definiting all the settings!
    $settings->add($page);

    // Advanced settings.
    $page = new admin_settingpage('theme_canary_advanced', get_string('advancedsettings', 'theme_boost'));

    // Raw SCSS to include before the content.
    $setting = new admin_setting_scsscode('theme_canary/scsspre',
        get_string('rawscsspre', 'theme_boost'), get_string('rawscsspre_desc', 'theme_boost'), '', PARAM_RAW);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Raw SCSS to include after the content.
    $setting = new admin_setting_scsscode('theme_canary/scss', get_string('rawscss', 'theme_boost'),
        get_string('rawscss_desc', 'theme_boost'), '', PARAM_RAW);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $settings->add($page);
}
