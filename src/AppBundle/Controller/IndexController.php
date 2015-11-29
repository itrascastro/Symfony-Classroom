<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IndexController extends Controller
{
    /**
     * @Route(
     *     path="/",
     *     name="app_index_index"
     * )
     */
    public function indexAction()
    {
        $user_manager = $this->get('fos_user.user_manager');
        $users = $user_manager->findUsers();
        var_dump($users);die;
        return $this->render(':index:index.html.twig');
    }
}
