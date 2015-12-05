<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_53e47411725e9472842538052e1820be75ffe0f0b2b334f8b044a4fa98b6ae6c extends Twig_Template
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
        $__internal_e19eea87f906d3d6ed9a21e288aa280fc6d95e93ff32a243daebbcfee5cb870f = $this->env->getExtension("native_profiler");
        $__internal_e19eea87f906d3d6ed9a21e288aa280fc6d95e93ff32a243daebbcfee5cb870f->enter($__internal_e19eea87f906d3d6ed9a21e288aa280fc6d95e93ff32a243daebbcfee5cb870f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_e19eea87f906d3d6ed9a21e288aa280fc6d95e93ff32a243daebbcfee5cb870f->leave($__internal_e19eea87f906d3d6ed9a21e288aa280fc6d95e93ff32a243daebbcfee5cb870f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
