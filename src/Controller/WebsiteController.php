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
     * @Route (path="/", method="GET", name="Homepage")
     * @return string
     */
    public function indexAction()
    {
        $this->setDefaultAssets();

        return $this->render('/site/landingpage.phtml');
    }

    /**
     * @Route (path="/test", method="GET", name="Homepage")
     * @return string
     */
    public function testAction()
    {
        $this->setDefaultAssets();

        return $this->render('/site/test.phtml');
    }

    /**
     * @Route (path="/contact", method="GET", name="Contact")
     * @return string
     */
    public function contactAction()
    {
        $this->setDefaultAssets();

        return $this->render('/site/contact/contact.phtml');
    }

    /**
     * @return void
     */
    private function setDefaultAssets()
    {
        $this->getView()->addStylesheet('/css/main.css');
    }

}