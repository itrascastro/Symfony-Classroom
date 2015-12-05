<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_1fa602f71c77a92b77f488509a679da9a0578b84c9c9f13eaa941dab50bd7ee4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8693b07b577a8ee5d30413aec0a4bad94ee2138832e32512eb106affb2db0dde = $this->env->getExtension("native_profiler");
        $__internal_8693b07b577a8ee5d30413aec0a4bad94ee2138832e32512eb106affb2db0dde->enter($__internal_8693b07b577a8ee5d30413aec0a4bad94ee2138832e32512eb106affb2db0dde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8693b07b577a8ee5d30413aec0a4bad94ee2138832e32512eb106affb2db0dde->leave($__internal_8693b07b577a8ee5d30413aec0a4bad94ee2138832e32512eb106affb2db0dde_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_89f60e271654508d037c8ec5ca76c3bcd3ca1873275e0f43340bdf7680459ebc = $this->env->getExtension("native_profiler");
        $__internal_89f60e271654508d037c8ec5ca76c3bcd3ca1873275e0f43340bdf7680459ebc->enter($__internal_89f60e271654508d037c8ec5ca76c3bcd3ca1873275e0f43340bdf7680459ebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_89f60e271654508d037c8ec5ca76c3bcd3ca1873275e0f43340bdf7680459ebc->leave($__internal_89f60e271654508d037c8ec5ca76c3bcd3ca1873275e0f43340bdf7680459ebc_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_71a65e82c8b1ed2cd9dfdc04f756a81f2a2fd57268cce39810341142177feaea = $this->env->getExtension("native_profiler");
        $__internal_71a65e82c8b1ed2cd9dfdc04f756a81f2a2fd57268cce39810341142177feaea->enter($__internal_71a65e82c8b1ed2cd9dfdc04f756a81f2a2fd57268cce39810341142177feaea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_71a65e82c8b1ed2cd9dfdc04f756a81f2a2fd57268cce39810341142177feaea->leave($__internal_71a65e82c8b1ed2cd9dfdc04f756a81f2a2fd57268cce39810341142177feaea_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
