<?php

namespace Controller\help;

use Tigra\Controller;

/**
 * Class TigraHelpController
 *
 * @package Controllers
 */
class TigraHelpController extends Controller
{
//    private $DB;
//    private $Login;
//    private $HttpRequest;
//    private $Email;
//    private $Menu;

    /**
     * TigraHelpController constructor.
     * @param array $args
     */
    public function __construct(array $args)
    {
        $Core = $args['Core'];
        /** Following modules can be loaded in the constructor
         *
         *  $this->DB = $Core->DB;
         *  $this->Login = $Core->Login;
         *  $this->HttpRequest = $Core->HttpRequest;
         *  $this->Email = $Core->Email;
         *  $this->Menu = $Core->Menu;
         *
         * Don't forget to uncomment the private variables for the modules you are going to use!
         */
    }
}
