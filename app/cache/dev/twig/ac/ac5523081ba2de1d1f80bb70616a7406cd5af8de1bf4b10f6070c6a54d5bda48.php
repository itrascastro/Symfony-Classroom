<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_bb7175e08ad8df3238338b3fcba5aa789d9d9e12159f1691e0b543d96d7b49b3 extends Twig_Template
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
        $__internal_d2c05461220dfcf5ef49aad9b00ba9bb74e37be92842927db2dd0e7848eaf221 = $this->env->getExtension("native_profiler");
        $__internal_d2c05461220dfcf5ef49aad9b00ba9bb74e37be92842927db2dd0e7848eaf221->enter($__internal_d2c05461220dfcf5ef49aad9b00ba9bb74e37be92842927db2dd0e7848eaf221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_d2c05461220dfcf5ef49aad9b00ba9bb74e37be92842927db2dd0e7848eaf221->leave($__internal_d2c05461220dfcf5ef49aad9b00ba9bb74e37be92842927db2dd0e7848eaf221_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
