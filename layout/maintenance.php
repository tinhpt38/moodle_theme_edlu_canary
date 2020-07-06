<?php


defined('MOODLE_INTERNAL') || die();

$templatecontext = [
    // We cannot pass the context to format_string, this layout can be used during
    // installation. At that stage database tables do not exist yet.
    'sitename' => format_string($SITE->shortname, true, ["escape" => false]),
    'output' => $OUTPUT
];

echo $OUTPUT->render_from_template('theme_boost/maintenance', $templatecontext);
