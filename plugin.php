<?php
/*
 Plugin Name: Plugin
 Plugin URI: http://www.github.com/benallfree
 Description: New Plugin
 Author: Ben Allfree
 Version: 1.0.0
 Author URI: http://www.benallfree.com
 Text Domain: feeds
 License: GPL
 Copyright 2011 Ben Allfree
 */
 
$func_name = create_function(null, "Click::register(dirname(__FILE__));");
add_action('click', $func_name);