<?php

/* :index:addArticle.html.twig */
class __TwigTemplate_1523c66a78ee410c9d20925d6caae2ca5459b7149a58a191e86201ae54aebb38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", ":index:addArticle.html.twig", 1);
        $this->blocks = array(
            'headTitle' => array($this, 'block_headTitle'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fe81eae0c8a7ed0ad3e90efc6577ff1fd3bcc72b6f0f919ba2f9181f979a8830 = $this->env->getExtension("native_profiler");
        $__internal_fe81eae0c8a7ed0ad3e90efc6577ff1fd3bcc72b6f0f919ba2f9181f979a8830->enter($__internal_fe81eae0c8a7ed0ad3e90efc6577ff1fd3bcc72b6f0f919ba2f9181f979a8830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":index:addArticle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe81eae0c8a7ed0ad3e90efc6577ff1fd3bcc72b6f0f919ba2f9181f979a8830->leave($__internal_fe81eae0c8a7ed0ad3e90efc6577ff1fd3bcc72b6f0f919ba2f9181f979a8830_prof);

    }

    // line 3
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_02560a3d9f2286eea45f1ab20be981e7522a1c266c35ec61b9c415332dafceda = $this->env->getExtension("native_profiler");
        $__internal_02560a3d9f2286eea45f1ab20be981e7522a1c266c35ec61b9c415332dafceda->enter($__internal_02560a3d9f2286eea45f1ab20be981e7522a1c266c35ec61b9c415332dafceda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo "New Article";
        
        $__internal_02560a3d9f2286eea45f1ab20be981e7522a1c266c35ec61b9c415332dafceda->leave($__internal_02560a3d9f2286eea45f1ab20be981e7522a1c266c35ec61b9c415332dafceda_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_efab2479d78d44a08039c96169ded22bc491b115399f5ef3544ebe0ac8dcd921 = $this->env->getExtension("native_profiler");
        $__internal_efab2479d78d44a08039c96169ded22bc491b115399f5ef3544ebe0ac8dcd921->enter($__internal_efab2479d78d44a08039c96169ded22bc491b115399f5ef3544ebe0ac8dcd921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
";
        
        $__internal_efab2479d78d44a08039c96169ded22bc491b115399f5ef3544ebe0ac8dcd921->leave($__internal_efab2479d78d44a08039c96169ded22bc491b115399f5ef3544ebe0ac8dcd921_prof);

    }

    public function getTemplateName()
    {
        return ":index:addArticle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block headTitle %}New Article{% endblock %}*/
/* */
/* {% block body %}*/
/*     {{ form(form) }}*/
/* {% endblock %}*/
