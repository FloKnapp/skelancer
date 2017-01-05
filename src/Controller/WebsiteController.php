<?php

namespace App\Controller;

use Faulancer\Controller\Controller;

/**
 * Class WebsiteController
 * @package App\Controller
 */
class WebsiteController extends Controller
{

    /**
     * @Route(path="/", method="GET", name="Homepage")
     */
    public function indexAction()
    {
        return $this->render('/content.phtml');
    }

    /**
     * @Route(path="/test", method="GET", name="Homepage")
     */
    public function testAction()
    {
        echo "Hallo";
    }

}