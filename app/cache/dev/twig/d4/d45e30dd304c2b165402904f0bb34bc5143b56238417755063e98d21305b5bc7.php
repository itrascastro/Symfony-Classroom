<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_95329f0ac787122a62f531ab6864839b2e84316aad6365e5f373a6e26424f03f extends Twig_Template
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
        $__internal_b7793914c620d761eb4ff489db4c67f7c2d96cbbf9542c7dee3b54ecaf3446fe = $this->env->getExtension("native_profiler");
        $__internal_b7793914c620d761eb4ff489db4c67f7c2d96cbbf9542c7dee3b54ecaf3446fe->enter($__internal_b7793914c620d761eb4ff489db4c67f7c2d96cbbf9542c7dee3b54ecaf3446fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_b7793914c620d761eb4ff489db4c67f7c2d96cbbf9542c7dee3b54ecaf3446fe->leave($__internal_b7793914c620d761eb4ff489db4c67f7c2d96cbbf9542c7dee3b54ecaf3446fe_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
