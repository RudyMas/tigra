<?php
/**
 * Tiger (PHP version 7.4)
 * An easy to use MVC PHP Framework with Mobile App Support.
 *
 * @author      Rudy Mas <rudy.mas@rmsoft.be>
 * @copyright   2022, rmsoft.be. (http://www.rmsoft.be/)
 * @license     https://opensource.org/licenses/GPL-3.0 GNU General Public License, version 3 (GPL-3.0)
 * @version     7.4.1.0
 */

use Tiger\Core;

session_start();
require_once('vendor/autoload.php');


const TIGER_VERSION = '7.4.1.0';
$Core = new Core();
