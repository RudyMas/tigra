<?php
/**
 * This file is used to config the develop-, alpha-, beta- & production-servers.
 * Set these parameters to reflect your environment in which you work.
 *
 * SERVER_DEVELOP is used for the test server you use. On this server the file 'config.local.php' & 'database.local.php' will be used.
 * SERVER_ALPHA is used for the alpha server you use. ('config.alpha.php' & 'database.alpha.php').
 * SERVER_BETA is used for the beta server you use. ('config.beta.php' & 'database.beta.php').
 * SERVER_PRODUCTION is used for the live/production server you use. ('config.php' & 'database.php').
 *
 * If needed for any of these, add the :<port> to it when needed.
 *
 * @version 1.0.0.0
 */
const SERVER_DEVELOP = 'localhost';
const SERVER_ALPHA = 'localhost';
const SERVER_BETA = 'localhost';
const SERVER_PRODUCTION = 'example.com';

/**
 * Set this to true if you want extra information provided by the server when an error occurs
 */
const TIGER_DEBUG = false;

/**
 * Define the time_zone the server should work on
 *
 * More information about timezones can be found at: http://php.net/manual/en/timezones.php
 */
const TIME_ZONE = 'Europe/Brussels';
