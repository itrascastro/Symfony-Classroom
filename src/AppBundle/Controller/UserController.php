<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use AppBundle\Form\UserType;
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
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        $m = $this->getDoctrine()->getManager();

        /*
        $user1 = new User();
        $user1->setEmail('user1@email.com');
        $user1->setPassword('1234');
        $user1->setUsername('user1');
        $m->persist($user1);

        $user2 = new User();
        $user2->setEmail('user2@email.com');
        $user2->setPassword('1234');
        $user2->setUsername('user2');
        $m->persist($user2);
        */

        /*$user3 = new User();
        $user3->setEmail('user3@email.com');
        $user3->setPassword('1234');
        $user3->setUsername('user3');
        $m->persist($user3);

        $m->flush();*/

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

        $form = $this->createForm(new UserType(), $user);

        return $this->render(':user:update.html.twig',
            [
                'form'  => $form->createView(),
            ]
        );
    }

    /**
     * doUpdateAction
     *
     * You cannot create a new User and pass it to the form because it will not pass the unique entity constraint
     * because the user is new. So first of all you have to ask your DB for the user. This is the reason because
     * we need the $id as an argument for the action
     *
     * @Route(
     *     path="/do-update/{id}",
     *     name="app_user_doUpdate"
     * )
     *
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function doUpdateAction($id, Request $request)
    {
        $m          = $this->getDoctrine()->getManager();
        $repository = $m->getRepository('AppBundle:User');
        $user       = $repository->find($id);
        $form       = $this->createForm(new UserType(), $user);

        $form->handleRequest($request);

        if ($form->isValid()) {
            $m->flush();
            $this->addFlash('messages', 'User updated');

            return $this->redirectToRoute('app_user_index');
        }

        $this->addFlash('messages', 'Review your form');

        return $this->render(':user:update.html.twig',
            [
                'form'  => $form->createView(),
            ]
        );
    }
}
