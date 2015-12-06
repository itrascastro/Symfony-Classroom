<?php

namespace Trascastro\TUserBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SecurityController extends Controller
{
    /**
     * @Route(
     *     path="/login",
     *     name="tuser_security_login"
     * )
     */
    public function loginAction()
    {
        $authenticationUtils = $this->get('security.authentication_utils');

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render(
            'TUserBundle:security:login.html.twig',
            array(
                // last username entered by the user
                'last_username' => $lastUsername,
                'error'         => $error,
            )
        );
    }

    /**
     * @Route(
     *     path="/login_check",
     *     name="tuser_security_check"
     * )
     */
    public function loginCheckAction()
    {

    }

    /**
     * @Route(
     *     path="/logout",
     *     name="tuser_security_logout"
     * )
     */
    public function logoutAction()
    {

    }
}
