<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class UserController extends Controller
{
    /**
     * indexAction
     *
     * @Route(
     *     path="/",
     *     name="app_user_index"
     * )
     *
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        $m = $this->getDoctrine()->getManager();

        /*
        $user1 = new User();
        $user1
            ->setEmail('user1@email.com')
            ->setPassword('1234')
            ->setUsername('user1')
        ;
        $m->persist($user1);

        $user2 = new User();
        $user2->setEmail('user2@email.com');
        $user2->setPassword('1234');
        $user2->setUsername('user2');
        $m->persist($user2);


        $user3 = new User();
        $user3->setEmail('user3@email.com');
        $user3->setPassword('1234');
        $user3->setUsername('user3');
        $m->persist($user3);*/

        $m->flush();

        $repository = $m->getRepository('AppBundle:User');

        /**
         * @var User $user
         */
        //$user = $repository->findOneByUsername('user2');

        //$user->setEmail('nuevo@email.com');

        //$m->remove($user);

        $users = $repository->findAll();



        return $this->render(':user:index.html.twig',
            [
                'users' => $users,
            ]
        );
    }

    /**
     * updateAction
     *
     * @Route(
     *     path="/update/{id}",
     *     name="app_user_update"
     * )
     *
     */
    public function updateAction($id)
    {
        $m = $this->getDoctrine()->getManager();
        $repository = $m->getRepository('AppBundle:User');

        $user = $repository->find($id);

        return $this->render(':user:update.html.twig',
            [
                'user'  => $user,
            ]
        );
    }

    /**
     * doUpdateAction
     *
     * @Route(
     *     path="/do-update",
     *     name="app_user_doUpdate"
     * )
     *
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function doUpdateAction(Request $request)
    {
        $m          = $this->getDoctrine()->getManager();
        $repository = $m->getRepository('AppBundle:User');

        $id         = $request->request->get('id');
        $email      = $request->request->get('email');
        $password   = $request->request->get('password');
        $username   = $request->request->get('username');

        $user = $repository->find($id);

        $user->setEmail($email);
        $user->setPassword($password);
        $user->setUsername($username);

        $m->flush();

        $this->addFlash('messages', 'User updated');

        return $this->redirectToRoute('app_user_index');
    }

    /**
     * @Route(
     *     path="/insert",
     *     name="app_user_insert"
     * )
     */
    public function insertAction()
    {
        return $this->render(':user:insert.html.twig');
    }

    /**
     * @Route(
     *     path="/do-insert",
     *     name="app_user_doInsert"
     * )
     */
    public function doInsertAction(Request $request)
    {
        $user = new User();

        $user->setEmail($request->request->get('email'));
        $user->setUsername($request->request->get('username'));
        $user->setPassword($request->request->get('password'));

        $m = $this->getDoctrine()->getManager();
        $m->persist($user);
        $m->flush();

        $this->addFlash('messages', 'New user created');

        return $this->redirectToRoute('app_user_index');
    }

    /**
     * @Route(
     *     path="/remove/{id}",
     *     name="app_user_remove"
     * )
     */
    public function removeAction($id)
    {
        $m = $this->getDoctrine()->getManager();
        $repository = $m->getRepository('AppBundle:User');

        $user = $repository->find($id);
        $m->remove($user);
        $m->flush();

        $this->addFlash('messages', 'User has been removed');

        return $this->redirectToRoute('app_user_index');
    }
}
