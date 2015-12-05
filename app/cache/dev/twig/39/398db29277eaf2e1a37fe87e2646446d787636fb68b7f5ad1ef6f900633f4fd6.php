<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_d6fba67dc0fe57d6962ac8ecf0604b5b1b49fd6208ede7960623aa3a521fbbda extends Twig_Template
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
        $__internal_6481cb05bb38b96ef93febd6f5ff2e2aeacc3da3a87c568963f6767a03afe240 = $this->env->getExtension("native_profiler");
        $__internal_6481cb05bb38b96ef93febd6f5ff2e2aeacc3da3a87c568963f6767a03afe240->enter($__internal_6481cb05bb38b96ef93febd6f5ff2e2aeacc3da3a87c568963f6767a03afe240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_6481cb05bb38b96ef93febd6f5ff2e2aeacc3da3a87c568963f6767a03afe240->leave($__internal_6481cb05bb38b96ef93febd6f5ff2e2aeacc3da3a87c568963f6767a03afe240_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:error.xml.twig' %}*/
/* */
