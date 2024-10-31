<?php
/*
Plugin Name: Postless
Plugin URI: https://wordpress.org/plugins/postless/
Description: Disable blogging feature of WordPress, hide all links related to Posts functionality.
Author: Nerijus Masikonis
Version: 1.2
Author URI: http://www.masikonis.lt/
License: GPLv2 or later
*/

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/

define( 'POSTLESS_VERSION', '1.2' );

// Load translation files if exist
load_plugin_textdomain( 'postless', false, 'postless/languages' );

// Load required include files
require_once( 'includes/functions.php' );

/* End of file postless.php */