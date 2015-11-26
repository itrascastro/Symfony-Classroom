<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class TranslatorController extends Controller
{
    /**
     * @Route(
     *     path="/",
     *     name="app_translator_index",
     * )
     */
    public function indexAction(Request $request)
    {
        return $this->render(':translator:index.html.twig');
    }

    /**
     * @Route(
     *     path="/test1",
     *     name="app_translator_test1"
     * )
     */
    public function test1Action()
    {
        return $this->render(':translator:test1.html.twig');
    }

    /**
     * @Route(
     *     path="/test2",
     *     name="app_translator_test2"
     * )
     */
    public function test2Action()
    {
        return $this->render(':translator:test2.html.twig');
    }
}
