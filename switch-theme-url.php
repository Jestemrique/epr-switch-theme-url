<?php
/* 
Plugin Name: URL Theme switcher
Plugin URI: https://www.jestemrique.net/ 
Description: Plugin to switch theme using URL query
Version: 1.0 
*/

//Helpers.
//Print string to console.
function debug_to_console($data) {
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}

$MyNewTheme = '';
if( isset( $_GET['template'] ) ){
  $MyNewTheme = $_GET['template'];
  debug_to_console( $MyNewTheme);
  switch_theme( $MyNewTheme);
}

