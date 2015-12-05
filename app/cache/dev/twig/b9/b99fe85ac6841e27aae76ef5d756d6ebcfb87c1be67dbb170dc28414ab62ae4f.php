<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_ba80337e07ed8648ad299ad666501029111d5c17eea4fd062434bba7df17ffb3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e3df81c9f26d25dd8a72815354ddaaf916b76a7ca555e3c14a0e97a9223ce5da = $this->env->getExtension("native_profiler");
        $__internal_e3df81c9f26d25dd8a72815354ddaaf916b76a7ca555e3c14a0e97a9223ce5da->enter($__internal_e3df81c9f26d25dd8a72815354ddaaf916b76a7ca555e3c14a0e97a9223ce5da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_e3df81c9f26d25dd8a72815354ddaaf916b76a7ca555e3c14a0e97a9223ce5da->leave($__internal_e3df81c9f26d25dd8a72815354ddaaf916b76a7ca555e3c14a0e97a9223ce5da_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include 'TwigBundle:Exception:exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
