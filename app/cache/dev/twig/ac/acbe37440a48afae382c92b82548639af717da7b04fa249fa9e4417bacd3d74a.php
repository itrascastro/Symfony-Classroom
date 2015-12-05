<?php

/* :index:articles.html.twig */
class __TwigTemplate_ef49cdffbd0332e127086c97aab5d7e5a3b40196021bee2cd6c3a9f47a32ee15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", ":index:articles.html.twig", 1);
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
        $__internal_e920b30b116f6ecd625de14c68e11ef6a6f407222a0346d378cbee7e7fd4bf0c = $this->env->getExtension("native_profiler");
        $__internal_e920b30b116f6ecd625de14c68e11ef6a6f407222a0346d378cbee7e7fd4bf0c->enter($__internal_e920b30b116f6ecd625de14c68e11ef6a6f407222a0346d378cbee7e7fd4bf0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":index:articles.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e920b30b116f6ecd625de14c68e11ef6a6f407222a0346d378cbee7e7fd4bf0c->leave($__internal_e920b30b116f6ecd625de14c68e11ef6a6f407222a0346d378cbee7e7fd4bf0c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f19ec32eb6051cc213b92b03dea6216bf59ef5798df546478f4cd991ef199d3c = $this->env->getExtension("native_profiler");
        $__internal_f19ec32eb6051cc213b92b03dea6216bf59ef5798df546478f4cd991ef199d3c->enter($__internal_f19ec32eb6051cc213b92b03dea6216bf59ef5798df546478f4cd991ef199d3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 5
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
            echo "</div>
        <div>
            ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["article"], "tags", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 8
                echo "                ";
                echo twig_escape_filter($this->env, $context["tag"], "html", null, true);
                echo ",
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_f19ec32eb6051cc213b92b03dea6216bf59ef5798df546478f4cd991ef199d3c->leave($__internal_f19ec32eb6051cc213b92b03dea6216bf59ef5798df546478f4cd991ef199d3c_prof);

    }

    public function getTemplateName()
    {
        return ":index:articles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 10,  55 => 8,  51 => 7,  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     {% for article in articles %}*/
/*         <div>{{ article.title }}</div>*/
/*         <div>*/
/*             {% for tag in article.tags %}*/
/*                 {{ tag }},*/
/*             {% endfor %}*/
/*         </div>*/
/*     {% endfor %}*/
/* {% endblock %}*/
