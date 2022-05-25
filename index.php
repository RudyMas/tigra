<?php
/**
 * Tiger (PHP version 8.1)
 * An easy to use MVC PHP Framework with Mobile App Support.
 *
 * @author      Rudy Mas <rudy.mas@rmsoft.be>
 * @copyright   2022, rmsoft.be. (http://www.rmsoft.be/)
 * @license     https://opensource.org/licenses/GPL-3.0 GNU General Public License, version 3 (GPL-3.0)
 * @version     0.0.0.1
 */

use Tiger\Core;

session_start();
require_once('vendor/autoload.php');


define('TIGER_VERSION', '0.0.0.1');
$Core = new Core();
