<?php

/* TUserBundle:user:index.html.twig */
class __TwigTemplate_8360fa4816ef71574ff3c7bf32f245f1b1e4ce1a9c5aeb31022dbeff22ebb722 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "TUserBundle:user:index.html.twig", 1);
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
        $__internal_2b4a2d985e5e05defaf7bbe9b426d288ccb10d41dfca9dfeb7e6a6a9ea80cc24 = $this->env->getExtension("native_profiler");
        $__internal_2b4a2d985e5e05defaf7bbe9b426d288ccb10d41dfca9dfeb7e6a6a9ea80cc24->enter($__internal_2b4a2d985e5e05defaf7bbe9b426d288ccb10d41dfca9dfeb7e6a6a9ea80cc24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TUserBundle:user:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b4a2d985e5e05defaf7bbe9b426d288ccb10d41dfca9dfeb7e6a6a9ea80cc24->leave($__internal_2b4a2d985e5e05defaf7bbe9b426d288ccb10d41dfca9dfeb7e6a6a9ea80cc24_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2bc213dfe8699b9acbfbefaf4fe989dca309d45d6a26df2676c548216d597f22 = $this->env->getExtension("native_profiler");
        $__internal_2bc213dfe8699b9acbfbefaf4fe989dca309d45d6a26df2676c548216d597f22->enter($__internal_2bc213dfe8699b9acbfbefaf4fe989dca309d45d6a26df2676c548216d597f22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <table>
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 6
            echo "            <tr>
                <td>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "password", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 11
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "createdAt", array()), "d/m/Y H:i:s"), "html", null, true);
            echo "</td>
                <td>";
            // line 12
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "updatedAt", array()), "d/m/Y H:i:s"), "html", null, true);
            echo "</td>
                ";
            // line 13
            if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
                // line 14
                echo "                <td><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tuser_user_update", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                echo "\">update</a> </td>
                <td><a href=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tuser_user_remove", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                echo "\">remove</a> </td>
                ";
            }
            // line 17
            echo "            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    </table>
    <div style=\"margin-top: 10px\">
        <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("tuser_user_insert");
        echo "\">New user</a>
    </div>
";
        
        $__internal_2bc213dfe8699b9acbfbefaf4fe989dca309d45d6a26df2676c548216d597f22->leave($__internal_2bc213dfe8699b9acbfbefaf4fe989dca309d45d6a26df2676c548216d597f22_prof);

    }

    public function getTemplateName()
    {
        return "TUserBundle:user:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 21,  93 => 19,  86 => 17,  81 => 15,  76 => 14,  74 => 13,  70 => 12,  66 => 11,  62 => 10,  58 => 9,  54 => 8,  50 => 7,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <table>*/
/*         {% for user in users %}*/
/*             <tr>*/
/*                 <td>{{ user.id }}</td>*/
/*                 <td>{{ user.email }}</td>*/
/*                 <td>{{ user.password }}</td>*/
/*                 <td>{{ user.username }}</td>*/
/*                 <td>{{ user.createdAt|date("d/m/Y H:i:s") }}</td>*/
/*                 <td>{{ user.updatedAt|date("d/m/Y H:i:s") }}</td>*/
/*                 {% if app.user and is_granted('ROLE_ADMIN') %}*/
/*                 <td><a href="{{ path('tuser_user_update', {'id': user.id}) }}">update</a> </td>*/
/*                 <td><a href="{{ path('tuser_user_remove', {'id': user.id}) }}">remove</a> </td>*/
/*                 {% endif %}*/
/*             </tr>*/
/*         {% endfor %}*/
/*     </table>*/
/*     <div style="margin-top: 10px">*/
/*         <a href="{{ path('tuser_user_insert') }}">New user</a>*/
/*     </div>*/
/* {% endblock %}*/
