<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use AppBundle\Form\UserType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class UserController extends Controller
{
    /**
     * @Route(
     *     path="/",
     *     name="app_user_menu"
     * )
     */
    public function menuAction()
    {
        return $this->render(':user:menu.html.twig');
    }

    /**
     * @Route(
     *     path="/index",
     *     name="app_user_index"
     * )
     * @Security("has_role('ROLE_USER')")
     */
    public function indexAction()
    {
        $m = $this->getDoctrine()->getManager();
        $repository = $m->getRepository('AppBundle:User');

        $users = $repository->findAll();

        return $this->render(':user:index.html.twig',
            [
                'users' => $users,
            ]
        );
    }

    /**
     * @Route(
     *     path="/register",
     *     name="app_user_register"
     * )
     */
    public function registerAction()
    {
        if ($this->isGranted('ROLE_USER')) {
            return $this->redirectToRoute('app_user_menu');
        }

        $user = new User();

        $form = $this->createForm(new UserType(), $user);
        $form->remove('roles');

        return $this->render(':user:form.html.twig',
            [
                'form'      => $form->createView(),
                'action'    => $this->generateUrl('app_user_doRegister'),
                'register'  => true,
            ]
        );
    }

    /**
     * @Route(
     *     path="/do-register",
     *     name="app_user_doRegister"
     * )
     * @Method(methods={"POST"})
     */
    public function doRegisterAction(Request $request)
    {
        $user = new User();
        $form = $this->createForm(new UserType(), $user);

        $form->handleRequest($request);

        if ($form->isValid()) {
            $m = $this->getDoctrine()->getManager();
            $m->persist($user);
            $m->flush();
            $this->addFlash('messages', 'Your account is now active');

            return $this->redirectToRoute('app_security_login');
        }

        $this->addFlash('messages', 'Review your form data');

        return $this->render(':user:form.html.twig',
            [
                'form'      => $form->createView(),
                'action'    => $this->generateUrl('app_user_doRegister'),
            ]
        );
    }

    /**
     * @Route(
     *     path="/insert",
     *     name="app_user_insert"
     * )
     */
    public function insertAction()
    {
        if (!$this->isGranted('ROLE_ADMIN')) {
            throw $this->createAccessDeniedException('Restricted area');
        }

        $user = new User();
        $form = $this->createForm(new UserType(), $user);
        return $this->render(':user:form.html.twig',
            [
                'form'      => $form->createView(),
                'action'    => $this->generateUrl('app_user_doInsert'),
                'register'  => false,
            ]
        );
    }

    /**
     * @Route(
     *     path="/do-insert",
     *     name="app_user_doInsert"
     * )
     * @Method(methods={"POST"})
     */
    public function doInsertAction(Request $request)
    {
        $user = new User();
        $form = $this->createForm(new UserType(), $user);

        $form->handleRequest($request);

        if ($form->isValid()) {
            $m = $this->getDoctrine()->getManager();
            $m->persist($user);
            $m->flush();

            $this->addFlash('messages', 'User added');

            return $this->redirectToRoute('app_user_index');
        }

        $this->addFlash('messages', 'Review your form data');

        return $this->render(':user:form.html.twig',
            [
                'form'      => $form->createView(),
                'action'    => $this->generateUrl('app_user_doInsert'),
                'register'  => false,
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
     * @Security("has_role('ROLE_ADMIN')")
     *
     */
    public function updateAction($id)
    {
        $m = $this->getDoctrine()->getManager();
        $repository = $m->getRepository('AppBundle:User');
        $user = $repository->find($id);
        $form = $this->createForm(new UserType(), $user);

        return $this->render(':user:form.html.twig',
            [
                'form'      => $form->createView(),
                'action'    => $this->generateUrl('app_user_doUpdate', ['id' => $id]),
                'register'  => false,
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
     * @Method(methods={"POST"})
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
        // user is updated with incoming data
        $form->handleRequest($request);

        if ($form->isValid()) {
            $m->flush();
            $this->addFlash('messages', 'User updated');
            return $this->redirectToRoute('app_user_index');
        }

        $this->addFlash('messages', 'Review your form');

        return $this->render(':user:form.html.twig',
            [
                'form'  => $form->createView(),
                'action'    => $this->generateUrl('app_user_doUpdate', ['id' => $id]),
                'register'  => false,
            ]
        );
    }

    /**
     * @Route(
     *     path="/remove/{id}",
     *     name="app_user_remove"
     * )
     *
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function removeAction($id)
    {
        $m = $this->getDoctrine()->getManager();
        $repository = $m->getRepository('AppBundle:User');
        $user = $repository->find($id);

        $m->remove($user);
        $m->flush();

        $this->addFlash('messages', 'User removed');

        return $this->redirectToRoute('app_user_index');
    }
}
