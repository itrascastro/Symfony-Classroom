<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_7afb1a2f5ada0195cc8bc4d840de4af2ddd28729f47e2a43764d10e5dee31aef extends Twig_Template
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
        $__internal_fd6ce6142d66bf3817e07494247c3368760861e9a447081004aaf669237a4897 = $this->env->getExtension("native_profiler");
        $__internal_fd6ce6142d66bf3817e07494247c3368760861e9a447081004aaf669237a4897->enter($__internal_fd6ce6142d66bf3817e07494247c3368760861e9a447081004aaf669237a4897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_fd6ce6142d66bf3817e07494247c3368760861e9a447081004aaf669237a4897->leave($__internal_fd6ce6142d66bf3817e07494247c3368760861e9a447081004aaf669237a4897_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
