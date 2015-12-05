<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_3370f77e5713f1c0a9d885673445374253d3ea487d0243d0e6756ec1c01b7f6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ac4ab4c5d68c1bad6315d65818271ab9b1a44fb3c52d6ad61bdab57e73e07404 = $this->env->getExtension("native_profiler");
        $__internal_ac4ab4c5d68c1bad6315d65818271ab9b1a44fb3c52d6ad61bdab57e73e07404->enter($__internal_ac4ab4c5d68c1bad6315d65818271ab9b1a44fb3c52d6ad61bdab57e73e07404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_ac4ab4c5d68c1bad6315d65818271ab9b1a44fb3c52d6ad61bdab57e73e07404->leave($__internal_ac4ab4c5d68c1bad6315d65818271ab9b1a44fb3c52d6ad61bdab57e73e07404_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_96eaf07ff2e73c9fd5b2af1867f5517483200a14779669366774303b49ef1693 = $this->env->getExtension("native_profiler");
        $__internal_96eaf07ff2e73c9fd5b2af1867f5517483200a14779669366774303b49ef1693->enter($__internal_96eaf07ff2e73c9fd5b2af1867f5517483200a14779669366774303b49ef1693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_96eaf07ff2e73c9fd5b2af1867f5517483200a14779669366774303b49ef1693->leave($__internal_96eaf07ff2e73c9fd5b2af1867f5517483200a14779669366774303b49ef1693_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
