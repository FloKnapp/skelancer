<?php
/**
 * Class UserLoginHandler | UserLoginHandler.php
 * @package App\Form
 * @author  Florian Knapp <office@florianknapp.de>
 */
namespace App\Form;

use App\Entity\UserEntity;
use Faulancer\Form\AbstractFormHandler;
use Faulancer\Service\Authenticator;

/**
 * Class UserLoginHandler
 */
class UserLoginHandler extends AbstractFormHandler
{

    public function run()
    {
        if (!$this->getForm()->isValid()) {
            $this->redirect('/user/login');
        }

        $user           = new UserEntity();
        $user->login    = $this->getFormData('text/login');
        $user->password = $this->getFormData('text/password');

        /** @var Authenticator $authenticator */
        $authenticator = $this->getServiceLocator()->get(Authenticator::class);
        $authenticator->redirectAfterAuthentication('/');
        $loggedIn = $authenticator->loginUser($user);

        if ($loggedIn === false) {
            $this->redirect('/user/login');
        }


    }

}