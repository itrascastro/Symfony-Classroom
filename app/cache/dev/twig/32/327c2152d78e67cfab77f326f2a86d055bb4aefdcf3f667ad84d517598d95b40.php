<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_7e7259f64831a81c98d990c35cb88773d82af963d8f715a2147c315c87f3e202 extends Twig_Template
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
        $__internal_006ad68809e6e3fb49716c37d5fc59269636a11d98cd741b3a1566f6b031aedf = $this->env->getExtension("native_profiler");
        $__internal_006ad68809e6e3fb49716c37d5fc59269636a11d98cd741b3a1566f6b031aedf->enter($__internal_006ad68809e6e3fb49716c37d5fc59269636a11d98cd741b3a1566f6b031aedf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_006ad68809e6e3fb49716c37d5fc59269636a11d98cd741b3a1566f6b031aedf->leave($__internal_006ad68809e6e3fb49716c37d5fc59269636a11d98cd741b3a1566f6b031aedf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
