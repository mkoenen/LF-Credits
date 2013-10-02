<?php
/*
Plugin Name: LoudFeed Credits Plugin
Plugin URI: http://loudfeed.tv
Description: This plugin adds links to loudfeed.tv to the footer.
Author: Margarete Koenen
Version: 1.0
Author URI: http://loudfeed.tv

Copyright 2013  Margarete Koenen

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
//make sure the user is running a recent version of WordPress
global $wp_version;

if (!version_compare($wp_version, "3.0", ">=")) {
    die("You need at least version 3.0 of WordPress to use this plugin.");
}


add_action( 'wp_footer', 'mk_lf_footer_credits', 100 );

function mk_lf_footer_credits() { 
	echo '<a href="http://loudfeed.tv" title="visit our website"><img src=" ' . plugins_url('images/lf-logo.png', __File__) . '"></a>';
    echo 'Created by <a href="http://loudfeed.tv" title="visit our website">LoudFeed</a>';

}

?>