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
        $__internal_cf7e6b1edf930d612afa5e76572051d300972e027423f1aed2ae8e603f81e316 = $this->env->getExtension("native_profiler");
        $__internal_cf7e6b1edf930d612afa5e76572051d300972e027423f1aed2ae8e603f81e316->enter($__internal_cf7e6b1edf930d612afa5e76572051d300972e027423f1aed2ae8e603f81e316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf7e6b1edf930d612afa5e76572051d300972e027423f1aed2ae8e603f81e316->leave($__internal_cf7e6b1edf930d612afa5e76572051d300972e027423f1aed2ae8e603f81e316_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ca3f4bf8b3cd3e42e69551833af0735596fcac1e5696ef34d6f568cd616b0526 = $this->env->getExtension("native_profiler");
        $__internal_ca3f4bf8b3cd3e42e69551833af0735596fcac1e5696ef34d6f568cd616b0526->enter($__internal_ca3f4bf8b3cd3e42e69551833af0735596fcac1e5696ef34d6f568cd616b0526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ca3f4bf8b3cd3e42e69551833af0735596fcac1e5696ef34d6f568cd616b0526->leave($__internal_ca3f4bf8b3cd3e42e69551833af0735596fcac1e5696ef34d6f568cd616b0526_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_86e13577198b5ab55596dad5c057cafc9d12938a56aedcd5d5d527a0c4cb003d = $this->env->getExtension("native_profiler");
        $__internal_86e13577198b5ab55596dad5c057cafc9d12938a56aedcd5d5d527a0c4cb003d->enter($__internal_86e13577198b5ab55596dad5c057cafc9d12938a56aedcd5d5d527a0c4cb003d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_86e13577198b5ab55596dad5c057cafc9d12938a56aedcd5d5d527a0c4cb003d->leave($__internal_86e13577198b5ab55596dad5c057cafc9d12938a56aedcd5d5d527a0c4cb003d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4e9e86a67538ef26da3864b6e8e7f7fc668b420d2b801846a899299d58089cce = $this->env->getExtension("native_profiler");
        $__internal_4e9e86a67538ef26da3864b6e8e7f7fc668b420d2b801846a899299d58089cce->enter($__internal_4e9e86a67538ef26da3864b6e8e7f7fc668b420d2b801846a899299d58089cce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_4e9e86a67538ef26da3864b6e8e7f7fc668b420d2b801846a899299d58089cce->leave($__internal_4e9e86a67538ef26da3864b6e8e7f7fc668b420d2b801846a899299d58089cce_prof);

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
