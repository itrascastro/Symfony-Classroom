<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_f1ad0ded02c467f7dc20284440b98d7a2456eaac95e805d34c09510dbff5ea31 extends Twig_Template
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
        $__internal_96e2fdd52fdb2d73b0732c33f1a1b0dba6ed6a65969eb7e15ab5f63cbf1bb6e8 = $this->env->getExtension("native_profiler");
        $__internal_96e2fdd52fdb2d73b0732c33f1a1b0dba6ed6a65969eb7e15ab5f63cbf1bb6e8->enter($__internal_96e2fdd52fdb2d73b0732c33f1a1b0dba6ed6a65969eb7e15ab5f63cbf1bb6e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_96e2fdd52fdb2d73b0732c33f1a1b0dba6ed6a65969eb7e15ab5f63cbf1bb6e8->leave($__internal_96e2fdd52fdb2d73b0732c33f1a1b0dba6ed6a65969eb7e15ab5f63cbf1bb6e8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
