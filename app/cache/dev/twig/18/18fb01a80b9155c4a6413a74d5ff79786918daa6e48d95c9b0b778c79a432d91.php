<?php

/* DoctrineBundle:Collector:explain.html.twig */
class __TwigTemplate_8c832ee49f461e3a73e0311c0ef65372f7f0715e3eaf26db9bc5534c8bc9fafa extends Twig_Template
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
        $__internal_1c1ec7ee0d85ece60e021de5ec86707278bb0e9fa12f1deb9187683586ff2a4d = $this->env->getExtension("native_profiler");
        $__internal_1c1ec7ee0d85ece60e021de5ec86707278bb0e9fa12f1deb9187683586ff2a4d->enter($__internal_1c1ec7ee0d85ece60e021de5ec86707278bb0e9fa12f1deb9187683586ff2a4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DoctrineBundle:Collector:explain.html.twig"));

        // line 1
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), 0, array(), "array")) > 1)) {
            // line 2
            echo "    ";
            // line 3
            echo "    <table style=\"margin: 5px 0;\">
        <thead>
            <tr>
                ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), 0, array(), "array")));
            foreach ($context['_seq'] as $context["_key"] => $context["label"]) {
                // line 7
                echo "                    <th>";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "</th>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "            </tr>
        </thead>
        <tbody>
            ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 13
                echo "            <tr>
                ";
                // line 14
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["row"]);
                foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                    // line 15
                    echo "                    <td>";
                    echo twig_escape_filter($this->env, twig_replace_filter($context["item"], array("," => ", ")), "html", null, true);
                    echo "</td>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 17
                echo "            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "        </tbody>
    </table>
";
        } else {
            // line 22
            echo "    ";
            // line 23
            echo "    <pre style=\"margin: 5px 0;\">";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 25
                echo twig_escape_filter($this->env, twig_first($this->env, $context["row"]), "html", null, true);
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "</pre>
";
        }
        
        $__internal_1c1ec7ee0d85ece60e021de5ec86707278bb0e9fa12f1deb9187683586ff2a4d->leave($__internal_1c1ec7ee0d85ece60e021de5ec86707278bb0e9fa12f1deb9187683586ff2a4d_prof);

    }

    public function getTemplateName()
    {
        return "DoctrineBundle:Collector:explain.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 27,  89 => 25,  85 => 24,  83 => 23,  81 => 22,  76 => 19,  69 => 17,  60 => 15,  56 => 14,  53 => 13,  49 => 12,  44 => 9,  35 => 7,  31 => 6,  26 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if data[0]|length > 1 %}*/
/*     {# The platform returns a table for the explanation (e.g. MySQL), display all columns #}*/
/*     <table style="margin: 5px 0;">*/
/*         <thead>*/
/*             <tr>*/
/*                 {% for label in data[0]|keys %}*/
/*                     <th>{{ label }}</th>*/
/*                 {% endfor %}*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*             {% for row in data %}*/
/*             <tr>*/
/*                 {% for key, item in row %}*/
/*                     <td>{{ item|replace({',': ', '}) }}</td>*/
/*                 {% endfor %}*/
/*             </tr>*/
/*             {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* {% else %}*/
/*     {# The Platform returns a single column for a textual explanation (e.g. PostgreSQL), display all lines #}*/
/*     <pre style="margin: 5px 0;">*/
/*         {%- for row in data -%}*/
/*             {{ row|first }}{{ "\n" }}*/
/*         {%- endfor -%}*/
/*     </pre>*/
/* {% endif %}*/
/* */
