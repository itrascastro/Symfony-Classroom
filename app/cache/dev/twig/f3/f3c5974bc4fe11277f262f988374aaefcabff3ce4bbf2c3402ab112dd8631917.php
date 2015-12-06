<?php

/* :article:articles.html.twig */
class __TwigTemplate_aa1650fd0a57cb83c17ddebdd29dcbc850155d0d97a30596ca6ecf17225a54a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", ":article:articles.html.twig", 1);
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
        $__internal_e2b148201dbe266f4e2bc70586fed0a72af5952c432f2e2f166df303f3623ddb = $this->env->getExtension("native_profiler");
        $__internal_e2b148201dbe266f4e2bc70586fed0a72af5952c432f2e2f166df303f3623ddb->enter($__internal_e2b148201dbe266f4e2bc70586fed0a72af5952c432f2e2f166df303f3623ddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:articles.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2b148201dbe266f4e2bc70586fed0a72af5952c432f2e2f166df303f3623ddb->leave($__internal_e2b148201dbe266f4e2bc70586fed0a72af5952c432f2e2f166df303f3623ddb_prof);

    }

    // line 3
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_ea929a713afb70c147d88a92a65dc3682e75f3a02237e385493fccdf5d579eac = $this->env->getExtension("native_profiler");
        $__internal_ea929a713afb70c147d88a92a65dc3682e75f3a02237e385493fccdf5d579eac->enter($__internal_ea929a713afb70c147d88a92a65dc3682e75f3a02237e385493fccdf5d579eac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo "Articles";
        
        $__internal_ea929a713afb70c147d88a92a65dc3682e75f3a02237e385493fccdf5d579eac->leave($__internal_ea929a713afb70c147d88a92a65dc3682e75f3a02237e385493fccdf5d579eac_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_aa2abdcac0aad7e19bad4bf1113d1d5566b5aa36beac158464055650375ad157 = $this->env->getExtension("native_profiler");
        $__internal_aa2abdcac0aad7e19bad4bf1113d1d5566b5aa36beac158464055650375ad157->enter($__internal_aa2abdcac0aad7e19bad4bf1113d1d5566b5aa36beac158464055650375ad157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 7
            echo "        <h1>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
            echo "</h1>
        <div style=\"padding: 5px 20px\">
            <strong>Tags:</strong>
            ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["article"], "tags", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 11
                echo "                ";
                echo twig_escape_filter($this->env, $context["tag"], "html", null, true);
                echo ",
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_aa2abdcac0aad7e19bad4bf1113d1d5566b5aa36beac158464055650375ad157->leave($__internal_aa2abdcac0aad7e19bad4bf1113d1d5566b5aa36beac158464055650375ad157_prof);

    }

    public function getTemplateName()
    {
        return ":article:articles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 13,  69 => 11,  65 => 10,  58 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block headTitle %}Articles{% endblock %}*/
/* */
/* {% block body %}*/
/*     {% for article in articles %}*/
/*         <h1>{{ article.title }}</h1>*/
/*         <div style="padding: 5px 20px">*/
/*             <strong>Tags:</strong>*/
/*             {% for tag in article.tags %}*/
/*                 {{ tag }},*/
/*             {% endfor %}*/
/*         </div>*/
/*     {% endfor %}*/
/* {% endblock %}*/
