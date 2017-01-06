<?php

namespace App\Form;

use Faulancer\Form\AbstractFormHandler;
use Faulancer\Http\Uri;

/**
 * Class ContactHandler
 * @package App\Form
 */
class ContactHandler extends AbstractFormHandler
{

    public function run()
    {
        $uri = new Uri();

        $this->setSuccessUrl('/contact/confirm');
        $this->setErrorUrl('/contact');

        if (!$this->getForm()->isValid()) {
            $uri->redirect($this->getErrorUrl());
        }

        // Logic to save to a database i.e...

        $uri->redirect($this->getSuccessUrl());
    }

}