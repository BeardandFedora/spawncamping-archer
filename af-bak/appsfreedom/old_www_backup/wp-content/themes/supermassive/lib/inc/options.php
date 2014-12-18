<?php

// Get all the options from the database
global $options, $shortname;
$get_settings = get_option($shortname);
foreach ($options as $value) {
if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_settings( $value['id'] ); }
}

?>