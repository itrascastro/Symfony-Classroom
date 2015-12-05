<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_2ce1ca8980392a21c3b1b1635cfc903a1764164763b8b63a211aa06f7bb809fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4bacf79a4bddb128d10d5b7198212f21d39ea06eb42a62ea348bd1c707293236 = $this->env->getExtension("native_profiler");
        $__internal_4bacf79a4bddb128d10d5b7198212f21d39ea06eb42a62ea348bd1c707293236->enter($__internal_4bacf79a4bddb128d10d5b7198212f21d39ea06eb42a62ea348bd1c707293236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4bacf79a4bddb128d10d5b7198212f21d39ea06eb42a62ea348bd1c707293236->leave($__internal_4bacf79a4bddb128d10d5b7198212f21d39ea06eb42a62ea348bd1c707293236_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4a613da43f8201a805a9b05d3b28af92ca3e7d575cd688f7af7537209b28c8d0 = $this->env->getExtension("native_profiler");
        $__internal_4a613da43f8201a805a9b05d3b28af92ca3e7d575cd688f7af7537209b28c8d0->enter($__internal_4a613da43f8201a805a9b05d3b28af92ca3e7d575cd688f7af7537209b28c8d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_4a613da43f8201a805a9b05d3b28af92ca3e7d575cd688f7af7537209b28c8d0->leave($__internal_4a613da43f8201a805a9b05d3b28af92ca3e7d575cd688f7af7537209b28c8d0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4e923aa1e7e4cd83b72895ebfcc11dbbccd58beaefcb29103b6cd85318664ebc = $this->env->getExtension("native_profiler");
        $__internal_4e923aa1e7e4cd83b72895ebfcc11dbbccd58beaefcb29103b6cd85318664ebc->enter($__internal_4e923aa1e7e4cd83b72895ebfcc11dbbccd58beaefcb29103b6cd85318664ebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_4e923aa1e7e4cd83b72895ebfcc11dbbccd58beaefcb29103b6cd85318664ebc->leave($__internal_4e923aa1e7e4cd83b72895ebfcc11dbbccd58beaefcb29103b6cd85318664ebc_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_ec725ccf69ed5e580b106b265a1f0d9f90416011db839375dd2c7b10ec9b3252 = $this->env->getExtension("native_profiler");
        $__internal_ec725ccf69ed5e580b106b265a1f0d9f90416011db839375dd2c7b10ec9b3252->enter($__internal_ec725ccf69ed5e580b106b265a1f0d9f90416011db839375dd2c7b10ec9b3252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_ec725ccf69ed5e580b106b265a1f0d9f90416011db839375dd2c7b10ec9b3252->leave($__internal_ec725ccf69ed5e580b106b265a1f0d9f90416011db839375dd2c7b10ec9b3252_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_cd72a0ea36155359f6378a011c0eac9dfd55827ebadc9baa5c35c53aa9b9d17a = $this->env->getExtension("native_profiler");
        $__internal_cd72a0ea36155359f6378a011c0eac9dfd55827ebadc9baa5c35c53aa9b9d17a->enter($__internal_cd72a0ea36155359f6378a011c0eac9dfd55827ebadc9baa5c35c53aa9b9d17a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_cd72a0ea36155359f6378a011c0eac9dfd55827ebadc9baa5c35c53aa9b9d17a->leave($__internal_cd72a0ea36155359f6378a011c0eac9dfd55827ebadc9baa5c35c53aa9b9d17a_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "TwigBundle::layout.html.twig" %}*/
/* */
/* {% block head %}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}" />*/
/* {% endblock %}*/
/* */
/* {% block title 'Web Configurator Bundle' %}*/
/* */
/* {% block body %}*/
/*     <div class="block">*/
/*         {% block content %}{% endblock %}*/
/*     </div>*/
/*     <div class="version">Symfony Standard Edition v.{{ version }}</div>*/
/* {% endblock %}*/
/* */
