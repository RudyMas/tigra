<?php

namespace Controller\version;

use Tigra\Controller;
use Exception;

/**
 * Class VersionController
 * @package Controllers
 */
class VersionController extends Controller
{
    /**
     * To display the version status of Tigra and the website
     */
    public function version()
    {
        try {
            $this->render('version/version.twig', [], 'TWIG');
        } catch (Exception $e) {
            $this->checkArray($e->getMessage());
        }
    }
}
