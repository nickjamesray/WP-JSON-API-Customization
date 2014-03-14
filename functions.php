<?php 

function add_dmskills_controller($controllers){
 $controllers[] = 'dmskills';
 return $controllers;
}
add_filter('json_api_controllers','add_dmskills_controller');

function set_dmskills_controller_path(){
 //This references dmskills.php which MUST go inside your active theme file.
 return get_stylesheet_directory()."/dmskills.php"; 
}
add_filter('json_api_dmskills_controller_path','set_dmskills_controller_path');

?>
