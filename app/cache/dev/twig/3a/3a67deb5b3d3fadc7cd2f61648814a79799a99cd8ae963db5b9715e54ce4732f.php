<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_669d64a49881f365137ae66709465da009b40410fd7ecbc1fef3ed109b4c9693 extends Twig_Template
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
        $__internal_b13f485f19aab0d264272e0b60f2ab4ba2f71d7cd4338036d590bfa3648145c0 = $this->env->getExtension("native_profiler");
        $__internal_b13f485f19aab0d264272e0b60f2ab4ba2f71d7cd4338036d590bfa3648145c0->enter($__internal_b13f485f19aab0d264272e0b60f2ab4ba2f71d7cd4338036d590bfa3648145c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_b13f485f19aab0d264272e0b60f2ab4ba2f71d7cd4338036d590bfa3648145c0->leave($__internal_b13f485f19aab0d264272e0b60f2ab4ba2f71d7cd4338036d590bfa3648145c0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
