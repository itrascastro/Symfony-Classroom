<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Article;
use AppBundle\Entity\Tag;
use AppBundle\Form\ArticleType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class IndexController extends Controller
{
    /**
     * @Route("/articles", name="app_index_articles")
     */
    public function articlesAction()
    {
        $m = $this->getDoctrine()->getManager();

        $articleRepo = $m->getRepository('AppBundle:Article');

        $articles = $articleRepo->findAll();

        return $this->render(':index:articles.html.twig', [
            'articles' => $articles,
        ]);
    }

    /**
     * @Route("/tags", name="app_index_tags")
     */
    public function tagsAction()
    {
        $m = $this->getDoctrine()->getManager();

        $tagRepo = $m->getRepository('AppBundle:Tag');

        $tags = $tagRepo->findAll();

        return $this->render(':index:tags.html.twig', [
            'tags' => $tags,
        ]);
    }

    /**
     * @Route("/add-article", name="app_index_addArticle")
     */
    public function addArticleAction()
    {
        $a = new Article();
        $form = $this->createForm(new ArticleType(), $a, ['action' => $this->generateUrl('app_index_doAddArticle')]);

        return $this->render(':index:addArticle.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/do-add-article", name="app_index_doAddArticle")
     */
    public function doAddArticleAction(Request $request)
    {
        $a = new Article();
        $form = $this->createForm(new ArticleType(), $a);

        $form->handleRequest($request);

        if ($form->isValid()) {
            $m = $this->getDoctrine()->getManager();
            $tagRepo = $m->getRepository('AppBundle:Tag');
            $tagRepo->addTagsIfAreNew($a);
            $m->persist($a);
            $m->flush();

            return $this->redirectToRoute('app_index_articles');
        }

        return $this->render(':index:addArticle.html.twig', [
            'form' => $form->createView(),
        ]);

    }

}
