<?php

/* WebProfilerBundle:Router:panel.html.twig */
class __TwigTemplate_e7a7f28126680b5fe433e630a1b199edb73e4bd343019e9aa42d01166f42062f extends Twig_Template
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
        $__internal_04a81eb300de901d555984786e1fd5b3d0f990106129caa138d116e1b9d242b7 = $this->env->getExtension("native_profiler");
        $__internal_04a81eb300de901d555984786e1fd5b3d0f990106129caa138d116e1b9d242b7->enter($__internal_04a81eb300de901d555984786e1fd5b3d0f990106129caa138d116e1b9d242b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Router:panel.html.twig"));

        // line 1
        echo "<h2>Routing for \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "pathinfo", array()), "html", null, true);
        echo "\"</h2>

<ul>
    <li>
        <strong>Route:&nbsp;</strong>
        ";
        // line 6
        if ($this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "route", array())) {
            // line 7
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "route", array()), "html", null, true);
            echo "
        ";
        } else {
            // line 9
            echo "            <em>No matching route</em>
        ";
        }
        // line 11
        echo "    </li>
    <li>
        <strong>Route parameters:&nbsp;</strong>
        ";
        // line 14
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "routeParams", array()))) {
            // line 15
            echo "            ";
            $this->loadTemplate("@WebProfiler/Profiler/table.html.twig", "WebProfilerBundle:Router:panel.html.twig", 15)->display(array("data" => $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "routeParams", array()), "class" => "inline"));
            // line 16
            echo "        ";
        } else {
            // line 17
            echo "            <em>No parameters</em>
        ";
        }
        // line 19
        echo "    </li>
    ";
        // line 20
        if ($this->getAttribute((isset($context["router"]) ? $context["router"] : $this->getContext($context, "router")), "redirect", array())) {
            // line 21
            echo "    <li>
        <strong>Redirecting to:&nbsp;</strong> \"";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["router"]) ? $context["router"] : $this->getContext($context, "router")), "targetUrl", array()), "html", null, true);
            echo "\" ";
            if ($this->getAttribute((isset($context["router"]) ? $context["router"] : $this->getContext($context, "router")), "targetRoute", array())) {
                echo "(route: \"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["router"]) ? $context["router"] : $this->getContext($context, "router")), "targetRoute", array()), "html", null, true);
                echo "\")";
            }
            // line 23
            echo "    <li>
    ";
        }
        // line 25
        echo "    <li>
        <strong>Route matching logs</strong>
        <table class=\"routing inline\">
            <tr>
                <th>Route name</th>
                <th>Pattern</th>
                <th>Log</th>
            </tr>
            ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["traces"]) ? $context["traces"] : $this->getContext($context, "traces")));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 34
            echo "                <tr class=\"";
            echo (((1 == $this->getAttribute($context["trace"], "level", array()))) ? ("almost") : ((((2 == $this->getAttribute($context["trace"], "level", array()))) ? ("matches") : (""))));
            echo "\">
                    <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["trace"], "name", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["trace"], "path", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["trace"], "log", array()), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        </table>
        <em><small>Note: The above matching is based on the configuration for the current router which might differ from
        the configuration used while routing this request.</small></em>
    </li>
</ul>
";
        
        $__internal_04a81eb300de901d555984786e1fd5b3d0f990106129caa138d116e1b9d242b7->leave($__internal_04a81eb300de901d555984786e1fd5b3d0f990106129caa138d116e1b9d242b7_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Router:panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 40,  107 => 37,  103 => 36,  99 => 35,  94 => 34,  90 => 33,  80 => 25,  76 => 23,  68 => 22,  65 => 21,  63 => 20,  60 => 19,  56 => 17,  53 => 16,  50 => 15,  48 => 14,  43 => 11,  39 => 9,  33 => 7,  31 => 6,  22 => 1,);
    }
}
/* <h2>Routing for "{{ request.pathinfo }}"</h2>*/
/* */
/* <ul>*/
/*     <li>*/
/*         <strong>Route:&nbsp;</strong>*/
/*         {% if request.route %}*/
/*             {{ request.route }}*/
/*         {% else %}*/
/*             <em>No matching route</em>*/
/*         {% endif %}*/
/*     </li>*/
/*     <li>*/
/*         <strong>Route parameters:&nbsp;</strong>*/
/*         {% if request.routeParams|length %}*/
/*             {% include '@WebProfiler/Profiler/table.html.twig' with { 'data': request.routeParams, 'class': 'inline' } only %}*/
/*         {% else %}*/
/*             <em>No parameters</em>*/
/*         {% endif %}*/
/*     </li>*/
/*     {% if router.redirect %}*/
/*     <li>*/
/*         <strong>Redirecting to:&nbsp;</strong> "{{ router.targetUrl }}" {% if router.targetRoute %}(route: "{{ router.targetRoute }}"){% endif %}*/
/*     <li>*/
/*     {% endif %}*/
/*     <li>*/
/*         <strong>Route matching logs</strong>*/
/*         <table class="routing inline">*/
/*             <tr>*/
/*                 <th>Route name</th>*/
/*                 <th>Pattern</th>*/
/*                 <th>Log</th>*/
/*             </tr>*/
/*             {% for trace in traces %}*/
/*                 <tr class="{{ 1 == trace.level ? 'almost' : 2 == trace.level ? 'matches' : '' }}">*/
/*                     <td>{{ trace.name }}</td>*/
/*                     <td>{{ trace.path }}</td>*/
/*                     <td>{{ trace.log }}</td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*         </table>*/
/*         <em><small>Note: The above matching is based on the configuration for the current router which might differ from*/
/*         the configuration used while routing this request.</small></em>*/
/*     </li>*/
/* </ul>*/
/* */
