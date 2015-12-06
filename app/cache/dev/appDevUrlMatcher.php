<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/css/compiled/app')) {
            // _assetic_ef04329
            if ($pathinfo === '/css/compiled/app.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'ef04329',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_ef04329',);
            }

            if (0 === strpos($pathinfo, '/css/compiled/app_')) {
                // _assetic_ef04329_0
                if ($pathinfo === '/css/compiled/app_bootstrap.min_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'ef04329',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_ef04329_0',);
                }

                // _assetic_ef04329_1
                if ($pathinfo === '/css/compiled/app_jumbotron_2.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'ef04329',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_ef04329_1',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js/compiled/app')) {
            // _assetic_73a6fe2
            if ($pathinfo === '/js/compiled/app.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '73a6fe2',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_73a6fe2',);
            }

            // _assetic_73a6fe2_0
            if ($pathinfo === '/js/compiled/app_bootstrap.min_1.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '73a6fe2',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_73a6fe2_0',);
            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/articles')) {
            // app_article_articles
            if (rtrim($pathinfo, '/') === '/articles') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'app_article_articles');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\ArticleController::articlesAction',  '_route' => 'app_article_articles',);
            }

            // app_article_addArticle
            if ($pathinfo === '/articles/add-article') {
                return array (  '_controller' => 'AppBundle\\Controller\\ArticleController::addArticleAction',  '_route' => 'app_article_addArticle',);
            }

            // app_article_doAddArticle
            if ($pathinfo === '/articles/do-add-article') {
                return array (  '_controller' => 'AppBundle\\Controller\\ArticleController::doAddArticleAction',  '_route' => 'app_article_doAddArticle',);
            }

        }

        // app_tags_tags
        if (rtrim($pathinfo, '/') === '/tags') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'app_tags_tags');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\TagController::tagsAction',  '_route' => 'app_tags_tags',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // tuser_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'Trascastro\\TUserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'tuser_security_login',);
                }

                // tuser_security_check
                if ($pathinfo === '/login_check') {
                    return array (  '_controller' => 'Trascastro\\TUserBundle\\Controller\\SecurityController::loginCheckAction',  '_route' => 'tuser_security_check',);
                }

            }

            // tuser_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'Trascastro\\TUserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'tuser_security_logout',);
            }

        }

        // tuser_user_menu
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'tuser_user_menu');
            }

            return array (  '_controller' => 'Trascastro\\TUserBundle\\Controller\\UserController::menuAction',  '_route' => 'tuser_user_menu',);
        }

        // tuser_user_index
        if ($pathinfo === '/index') {
            return array (  '_controller' => 'Trascastro\\TUserBundle\\Controller\\UserController::indexAction',  '_route' => 'tuser_user_index',);
        }

        // tuser_user_register
        if ($pathinfo === '/register') {
            return array (  '_controller' => 'Trascastro\\TUserBundle\\Controller\\UserController::registerAction',  '_route' => 'tuser_user_register',);
        }

        // tuser_user_doRegister
        if ($pathinfo === '/do-register') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_tuser_user_doRegister;
            }

            return array (  '_controller' => 'Trascastro\\TUserBundle\\Controller\\UserController::doRegisterAction',  '_route' => 'tuser_user_doRegister',);
        }
        not_tuser_user_doRegister:

        // tuser_user_insert
        if ($pathinfo === '/insert') {
            return array (  '_controller' => 'Trascastro\\TUserBundle\\Controller\\UserController::insertAction',  '_route' => 'tuser_user_insert',);
        }

        // tuser_user_doInsert
        if ($pathinfo === '/do-insert') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_tuser_user_doInsert;
            }

            return array (  '_controller' => 'Trascastro\\TUserBundle\\Controller\\UserController::doInsertAction',  '_route' => 'tuser_user_doInsert',);
        }
        not_tuser_user_doInsert:

        // tuser_user_update
        if (0 === strpos($pathinfo, '/update') && preg_match('#^/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tuser_user_update')), array (  '_controller' => 'Trascastro\\TUserBundle\\Controller\\UserController::updateAction',));
        }

        // tuser_user_doUpdate
        if (0 === strpos($pathinfo, '/do-update') && preg_match('#^/do\\-update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_tuser_user_doUpdate;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tuser_user_doUpdate')), array (  '_controller' => 'Trascastro\\TUserBundle\\Controller\\UserController::doUpdateAction',));
        }
        not_tuser_user_doUpdate:

        // tuser_user_remove
        if (0 === strpos($pathinfo, '/remove') && preg_match('#^/remove/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tuser_user_remove')), array (  '_controller' => 'Trascastro\\TUserBundle\\Controller\\UserController::removeAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
