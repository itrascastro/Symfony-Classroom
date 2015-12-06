<?php

/* TUserBundle:security:login.html.twig */
class __TwigTemplate_3e1de508b8d808e5b790ca0173bb4596df943c1644a9684a0c55442a183f75e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "TUserBundle:security:login.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_452cb3b6efc36df8623997dc37320d119c432ba305a7e9fe620770b0a9397ed6 = $this->env->getExtension("native_profiler");
        $__internal_452cb3b6efc36df8623997dc37320d119c432ba305a7e9fe620770b0a9397ed6->enter($__internal_452cb3b6efc36df8623997dc37320d119c432ba305a7e9fe620770b0a9397ed6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TUserBundle:security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_452cb3b6efc36df8623997dc37320d119c432ba305a7e9fe620770b0a9397ed6->leave($__internal_452cb3b6efc36df8623997dc37320d119c432ba305a7e9fe620770b0a9397ed6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_583fe5862c8cdd8d5f48e6d191e7a600696ea31d66a762593fd49a98fe906fdd = $this->env->getExtension("native_profiler");
        $__internal_583fe5862c8cdd8d5f48e6d191e7a600696ea31d66a762593fd49a98fe906fdd->enter($__internal_583fe5862c8cdd8d5f48e6d191e7a600696ea31d66a762593fd49a98fe906fdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 5
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 7
        echo "
    <form action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("tuser_security_check");
        echo "\" method=\"post\">
        <label for=\"username\">Username:</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

        <label for=\"password\">Password:</label>
        <input type=\"password\" id=\"password\" name=\"_password\" />

        ";
        // line 20
        echo "
        ";
        // line 22
        echo "        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">

        <button type=\"submit\">login</button>
    </form>
";
        
        $__internal_583fe5862c8cdd8d5f48e6d191e7a600696ea31d66a762593fd49a98fe906fdd->leave($__internal_583fe5862c8cdd8d5f48e6d191e7a600696ea31d66a762593fd49a98fe906fdd_prof);

    }

    public function getTemplateName()
    {
        return "TUserBundle:security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 22,  65 => 20,  57 => 10,  52 => 8,  49 => 7,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     {% if error %}*/
/*         <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/*     {% endif %}*/
/* */
/*     <form action="{{ path('tuser_security_check') }}" method="post">*/
/*         <label for="username">Username:</label>*/
/*         <input type="text" id="username" name="_username" value="{{ last_username }}" />*/
/* */
/*         <label for="password">Password:</label>*/
/*         <input type="password" id="password" name="_password" />*/
/* */
/*         {#*/
/*             If you want to control the URL the user*/
/*             is redirected to on success (more details below)*/
/*             <input type="hidden" name="_target_path" value="/account" />*/
/*         #}*/
/* */
/*         {# http://symfony.com/doc/current/cookbook/security/csrf_in_login_form.html #}*/
/*         <input type="hidden" name="_csrf_token" value="{{ csrf_token('authenticate') }}">*/
/* */
/*         <button type="submit">login</button>*/
/*     </form>*/
/* {% endblock %}*/
