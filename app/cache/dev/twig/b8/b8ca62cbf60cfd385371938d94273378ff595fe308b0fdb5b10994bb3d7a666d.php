<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_bc1a071ecdd23ec87effe8fbda8894aec4538974868c0995db318f699b82d962 extends Twig_Template
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
        $__internal_cb44f64d1fdc0abce3726a3b2d9f92e4a317d580477ac3a38b5a98136908cfbc = $this->env->getExtension("native_profiler");
        $__internal_cb44f64d1fdc0abce3726a3b2d9f92e4a317d580477ac3a38b5a98136908cfbc->enter($__internal_cb44f64d1fdc0abce3726a3b2d9f92e4a317d580477ac3a38b5a98136908cfbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_cb44f64d1fdc0abce3726a3b2d9f92e4a317d580477ac3a38b5a98136908cfbc->leave($__internal_cb44f64d1fdc0abce3726a3b2d9f92e4a317d580477ac3a38b5a98136908cfbc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:exception.xml.twig' with { 'exception': exception } %}*/
/* */
