<?php
/*
 Plugin Name: Show Hooks
 Plugin URI: http://www.github.com/benallfree
 Description: Show WordPress hooks 
 Author: Ben Allfree
 Version: 1.0.0
 Author URI: http://www.benallfree.com
 Text Domain: feeds
 License: GPL
 Copyright 2011 Ben Allfree
 */

$d = dirname(__FILE__);
$func_name = create_function('', "Click::register('$d');");
add_action('click', $func_name);

