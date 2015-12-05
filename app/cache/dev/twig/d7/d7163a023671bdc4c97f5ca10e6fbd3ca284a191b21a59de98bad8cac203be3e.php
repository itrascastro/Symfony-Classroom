<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_329497a6f2b359b21aa9eeccb155bb4abef9837604a7976211bf287ea7c26418 extends Twig_Template
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
        $__internal_6e4b02e7082c3a0dfa75aebc3dd7ad20fc563b764bd72101c58999f207595cf2 = $this->env->getExtension("native_profiler");
        $__internal_6e4b02e7082c3a0dfa75aebc3dd7ad20fc563b764bd72101c58999f207595cf2->enter($__internal_6e4b02e7082c3a0dfa75aebc3dd7ad20fc563b764bd72101c58999f207595cf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_6e4b02e7082c3a0dfa75aebc3dd7ad20fc563b764bd72101c58999f207595cf2->leave($__internal_6e4b02e7082c3a0dfa75aebc3dd7ad20fc563b764bd72101c58999f207595cf2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:error.xml.twig' %}*/
/* */
