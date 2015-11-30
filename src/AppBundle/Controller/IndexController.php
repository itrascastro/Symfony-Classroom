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
        /*$user_manager = $this->get('fos_user.user_manager');
        $users = $user_manager->findUsers();
        var_dump($users);die;*/
        $m = $this->getDoctrine()->getManager();
        $userRepository = $m->getRepository('UserBundle:User');
        var_dump($userRepository->myFindOneByUsernameOrEmail('i.trascastro@gmail.com'));die;
        return $this->render(':index:index.html.twig');
    }

    /**
     * @Route(
     *     path="/send-email",
     *     name="app_index_sendEmail"
     * )
     */
    public function sendEmailAction()
    {
        $message = \Swift_Message::newInstance()
            ->setSubject('dsfs')
            ->setFrom('symfonyclassroom@gmail.com')
            ->setTo('i.trascastro@gmail.com')
            ->setBody('test');

        $mailer = $this->get('mailer');
        $mailer->send($message);die;
    }
}
