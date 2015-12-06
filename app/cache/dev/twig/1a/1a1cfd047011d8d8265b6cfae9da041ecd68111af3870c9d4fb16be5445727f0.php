<?php

/* TUserBundle:user:menu.html.twig */
class __TwigTemplate_247a5353e480c0d77d77aca075d85fdd086573e3045e0e44db506f07ccb19c49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "TUserBundle:user:menu.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_713ba7efc2374c6d8cf677377ed6fec5c00a7780f008ef76f8226f37d9060802 = $this->env->getExtension("native_profiler");
        $__internal_713ba7efc2374c6d8cf677377ed6fec5c00a7780f008ef76f8226f37d9060802->enter($__internal_713ba7efc2374c6d8cf677377ed6fec5c00a7780f008ef76f8226f37d9060802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TUserBundle:user:menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_713ba7efc2374c6d8cf677377ed6fec5c00a7780f008ef76f8226f37d9060802->leave($__internal_713ba7efc2374c6d8cf677377ed6fec5c00a7780f008ef76f8226f37d9060802_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_746dc669bce9565587e103b6596df6440ec7a5e954189d782c1540e82583734f = $this->env->getExtension("native_profiler");
        $__internal_746dc669bce9565587e103b6596df6440ec7a5e954189d782c1540e82583734f->enter($__internal_746dc669bce9565587e103b6596df6440ec7a5e954189d782c1540e82583734f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div>
        <ul>
            <li><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("tuser_user_menu");
        echo "\">Menu</a></li>
            <li><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("tuser_user_index");
        echo "\">List Users</a></li>
        </ul>
        <div>
            ";
        // line 10
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 11
            echo "                Welcome ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " | <a href=\"";
            echo $this->env->getExtension('routing')->getPath("tuser_security_logout");
            echo "\">Logout</a>
            ";
        } elseif ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_ANONYMOUSLY")) {
            // line 13
            echo "                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("tuser_security_login");
            echo "\">Sign in</a>
                <a href=\"";
            // line 14
            echo $this->env->getExtension('routing')->getPath("tuser_user_register");
            echo "\">Sign up</a>
            ";
        }
        // line 16
        echo "        </div>
    </div>
";
        
        $__internal_746dc669bce9565587e103b6596df6440ec7a5e954189d782c1540e82583734f->leave($__internal_746dc669bce9565587e103b6596df6440ec7a5e954189d782c1540e82583734f_prof);

    }

    public function getTemplateName()
    {
        return "TUserBundle:user:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 16,  69 => 14,  64 => 13,  56 => 11,  54 => 10,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div>*/
/*         <ul>*/
/*             <li><a href="{{ path('tuser_user_menu') }}">Menu</a></li>*/
/*             <li><a href="{{ path('tuser_user_index') }}">List Users</a></li>*/
/*         </ul>*/
/*         <div>*/
/*             {% if is_granted('IS_AUTHENTICATED_REMEMBERED') %}*/
/*                 Welcome {{ app.user.username }} | <a href="{{ path('tuser_security_logout') }}">Logout</a>*/
/*             {% elseif is_granted('IS_AUTHENTICATED_ANONYMOUSLY') %}*/
/*                 <a href="{{ path('tuser_security_login') }}">Sign in</a>*/
/*                 <a href="{{ path('tuser_user_register') }}">Sign up</a>*/
/*             {% endif %}*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
