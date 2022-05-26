<?php
/**
 * This file is used to configure all the routes of your website
 *
 * You can add routes like this:
 *
 * $Router->addRoute('HTTP method',
 *                   'Route to use',
 *                   'Controller[:Function]',
 *                   'Array of Classes to inject',
 *                   'Array of Repositories to inject'
 *                   'Mobile Detection')
 *
 * - HTTP method: Can be anything, but in most cases, it will be GET, POST or PUT
 * - Route to use:
 *      - /something/anything -> This is the route to follow (case-insensitive)
 *      - /{textSomething} -> This will create a variable 'textSomething' for you. (case-sensitive)
 *      => You can use anything as a route, for example: /users/get/{userId}/city/{city}
 *          -> <URL>/users/get/1/city/Hasselt will create the variables $var['userId'] = 1 $var['city'] = 'Hasselt'
 * - Controller[:Function]:
 *      - 'Controller' -> This will load the class Controller
 *                     The Controller will receive 'Array of Classes, Array of Repositories, $var[], $html_body (JSON/XML/...)'
 *      - 'Controller:Function' -> This will load the class Controller and the Function inside the class
 *                              The Controller will receive 'Array of Classes'
 *                              The Function will receive 'Repository1, Repository2, RepositoryX, ..., $var[], $html_body (JSON/XML/...)'
 * - Array of Classes to inject: (OPTIONAL)
 *      This can be any class you want to pass on to the controller
 *      You can use the following syntax:
 *          ['SomeClass' => new SomeClass(), 'OtherClass' => new OtherClass(), ...]
 * - Array of Repositories to inject: (OPTIONAL)
 *      This can be any repository you have created
 *          ['User', 'submap\Something', ...]
 *              'User' will inject the UserRepository into the Controller/Function
 *              'submap\Something' will inject the SomethingRepository into the Controller/Function located in the
 *                  folder submap under src/repository
 * - Mobile Detection: ('auto', 'web', 'api', 'mobile') (OPTIONAL) (DEFAULT = auto)
 *      'auto' : Every call to the website will be checked. If a mobile device is detected, the mobile app will start
 *      'web|api' : Every call to the website will always be handled by the website. (Website or API)
 *      'mobile' : Every call to the website will always be handled by the mobile app (URL info will be transferred to the App)
 */

/*
 * You can delete the following three routes.
 *
 * These are used to demonstrate the mobile capabilities of the framework.
 */
$Router->addRoute(
    'GET',
    '/mobile',
    '',
    [],
    [],
    'mobile'
);
$Router->addRoute(
    'GET',
    '/dashboard',
    '',
    [],
    [],
    'mobile'
);
$Router->addRoute(
    'GET',
    '/heroes',
    '',
    [],
    [],
    'mobile'
);

$Router->addRoute(
    'GET',
    '/version',
    'version\Version:version'
);
$Router->setDefault('/version');

/*
 * Set it to false or comment/remove the following line if you don't provide a separate Mobile App (Angular, REACT, ...)
 */
$Router->setMobileDetection(true);

/*
 * Uncomment the next line is you have a special URL for your Mobile App. Default: http(s)://example.org/m/
 */
// $Router->setDefaultMobileApp('http://m.example.org');

/*
 * You can remove the following line if you want to disable the internal help for Tigra
 */
include('router_tigra_help.php');
