<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_003f5f78c1e2c19da5e1796889e2351a7ef19a4a3886a501efbdbb4a5aa99252 extends Twig_Template
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
        $__internal_06f54a49fbb0bee3d37fe9ef47281b68a8d3fcaae953e4890a91775cfba86fef = $this->env->getExtension("native_profiler");
        $__internal_06f54a49fbb0bee3d37fe9ef47281b68a8d3fcaae953e4890a91775cfba86fef->enter($__internal_06f54a49fbb0bee3d37fe9ef47281b68a8d3fcaae953e4890a91775cfba86fef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_06f54a49fbb0bee3d37fe9ef47281b68a8d3fcaae953e4890a91775cfba86fef->leave($__internal_06f54a49fbb0bee3d37fe9ef47281b68a8d3fcaae953e4890a91775cfba86fef_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
