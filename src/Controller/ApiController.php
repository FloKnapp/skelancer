<?php
/**
 * Class ApiController | ApiController.php
 * @package App\Controller
 * @author  Florian Knapp <office@florianknapp.de>
 */
namespace App\Controller;

use Faulancer\Controller\RestfulController;

/**
 * Class ApiController
 */
class ApiController extends RestfulController
{

    public function get()
    {
        echo "Hallo";
    }

    public function delete()
    {
        echo "Delete";
    }

}