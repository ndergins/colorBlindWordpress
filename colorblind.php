<?php
/**
 * colorBlind
 *
 * @package       COLORBLIND
 * @author        Gabriel Allison, Nicholas Dergins
 * @license       gplv2
 * @version       1.0.0
 *
 * @wordpress-plugin
 * Plugin Name:   colorBlind
 * Description:   The colorBlind Wordpress plugin that makes elements in your site colorblind compatible
 * Version:       1.0.0
 * Requires at least: 6.1.1
 * Requires PHP:  8.1.9
 * Author:        Gabriel Allison, Nicholas Dergins
 * Text Domain:   colorblind
 * Domain Path:   /languages
 * License:       GPLv2
 * License URI:   https://www.gnu.org/licenses/gpl-2.0.html
 *
 * You should have received a copy of the GNU General Public License
 * along with colorExtract. If not, see <https://www.gnu.org/licenses/gpl-2.0.html/>.
 */

 /*
colorExtract is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

colorExtract is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with colorExtract. If not, see https://www.gnu.org/licenses/gpl-2.0.html.
*/

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) exit;

// Include your custom code here.

register_activation_hook(
	__FILE__,
	'pluginprefix_function_to_run'
);

register_deactivation_hook(
	__FILE__,
	'pluginprefix_function_to_run'
);
