<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_ec78b09626eef77675e63e205986a342b0737e77da84be4d06523faffe04eba0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ffe91a5f17e999f5475eb4113103b14c5b41376fe9aa537aa0290382268db3fe = $this->env->getExtension("native_profiler");
        $__internal_ffe91a5f17e999f5475eb4113103b14c5b41376fe9aa537aa0290382268db3fe->enter($__internal_ffe91a5f17e999f5475eb4113103b14c5b41376fe9aa537aa0290382268db3fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ffe91a5f17e999f5475eb4113103b14c5b41376fe9aa537aa0290382268db3fe->leave($__internal_ffe91a5f17e999f5475eb4113103b14c5b41376fe9aa537aa0290382268db3fe_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0943ba3d99ecf4d87b0337cd3d814989a1755b6e8bb982ecf2d1f1e1471dde47 = $this->env->getExtension("native_profiler");
        $__internal_0943ba3d99ecf4d87b0337cd3d814989a1755b6e8bb982ecf2d1f1e1471dde47->enter($__internal_0943ba3d99ecf4d87b0337cd3d814989a1755b6e8bb982ecf2d1f1e1471dde47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0943ba3d99ecf4d87b0337cd3d814989a1755b6e8bb982ecf2d1f1e1471dde47->leave($__internal_0943ba3d99ecf4d87b0337cd3d814989a1755b6e8bb982ecf2d1f1e1471dde47_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f3e6203f609474abe7a4845991bafe8e403c7fce15f1b1d61b74327ff2f47d3a = $this->env->getExtension("native_profiler");
        $__internal_f3e6203f609474abe7a4845991bafe8e403c7fce15f1b1d61b74327ff2f47d3a->enter($__internal_f3e6203f609474abe7a4845991bafe8e403c7fce15f1b1d61b74327ff2f47d3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f3e6203f609474abe7a4845991bafe8e403c7fce15f1b1d61b74327ff2f47d3a->leave($__internal_f3e6203f609474abe7a4845991bafe8e403c7fce15f1b1d61b74327ff2f47d3a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8b1f4746037d848d0f104ea5c5d5afce380f30a2aceac5e730aeb56f54e7915d = $this->env->getExtension("native_profiler");
        $__internal_8b1f4746037d848d0f104ea5c5d5afce380f30a2aceac5e730aeb56f54e7915d->enter($__internal_8b1f4746037d848d0f104ea5c5d5afce380f30a2aceac5e730aeb56f54e7915d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_8b1f4746037d848d0f104ea5c5d5afce380f30a2aceac5e730aeb56f54e7915d->leave($__internal_8b1f4746037d848d0f104ea5c5d5afce380f30a2aceac5e730aeb56f54e7915d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
