<?php

namespace App\Form;

use Faulancer\Form\AbstractFormHandler;
use Faulancer\Http\Uri;
use Faulancer\Session\SessionManager;

/**
 * Class ContactHandler
 * @package App\Form
 */
class ContactHandler extends AbstractFormHandler
{

    public function run()
    {
        if (!$this->getForm()->isValid()) {
            $this->redirect('/contact');
        }

        // Logic to save to a database i.e...

        $this->redirect('/contact/confirm');
    }

}