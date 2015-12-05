<?php

/* :index:tags.html.twig */
class __TwigTemplate_6a97f9f39cc845dd9b37ccf6d7e33f2a3aa5eb2cfd7d652434dea4f9d1cb276e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", ":index:tags.html.twig", 1);
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
        $__internal_63f161963d5a570ad20a55930c051d1f62f9426249d625bb51b34e046fc0fb2e = $this->env->getExtension("native_profiler");
        $__internal_63f161963d5a570ad20a55930c051d1f62f9426249d625bb51b34e046fc0fb2e->enter($__internal_63f161963d5a570ad20a55930c051d1f62f9426249d625bb51b34e046fc0fb2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":index:tags.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63f161963d5a570ad20a55930c051d1f62f9426249d625bb51b34e046fc0fb2e->leave($__internal_63f161963d5a570ad20a55930c051d1f62f9426249d625bb51b34e046fc0fb2e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_18a5efb3295967c8a5d14f91540aa9e170e79b68b2b024977cc241ea0817b93b = $this->env->getExtension("native_profiler");
        $__internal_18a5efb3295967c8a5d14f91540aa9e170e79b68b2b024977cc241ea0817b93b->enter($__internal_18a5efb3295967c8a5d14f91540aa9e170e79b68b2b024977cc241ea0817b93b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tags"]) ? $context["tags"] : $this->getContext($context, "tags")));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 5
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "name", array()), "html", null, true);
            echo "</div>
        <div>
            ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["tag"], "articles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 8
                echo "                ";
                echo twig_escape_filter($this->env, $context["article"], "html", null, true);
                echo ",
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_18a5efb3295967c8a5d14f91540aa9e170e79b68b2b024977cc241ea0817b93b->leave($__internal_18a5efb3295967c8a5d14f91540aa9e170e79b68b2b024977cc241ea0817b93b_prof);

    }

    public function getTemplateName()
    {
        return ":index:tags.html.twig";
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
/*     {% for tag in tags %}*/
/*         <div>{{ tag.name }}</div>*/
/*         <div>*/
/*             {% for article in tag.articles %}*/
/*                 {{ article }},*/
/*             {% endfor %}*/
/*         </div>*/
/*     {% endfor %}*/
/* {% endblock %}*/
