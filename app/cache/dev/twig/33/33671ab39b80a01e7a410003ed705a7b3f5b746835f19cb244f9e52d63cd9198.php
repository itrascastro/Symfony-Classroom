<?php

/* WebProfilerBundle:Profiler:search.html.twig */
class __TwigTemplate_e12cbb1ffd9cb0731e1457aaff4b7f506f4cd5a4ff257e466d7857e7aa02311e extends Twig_Template
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
        $__internal_dfab611f2c4a9eb525e5ba26d84e89e5366fee018b76749b2a66bff8a3dfa13e = $this->env->getExtension("native_profiler");
        $__internal_dfab611f2c4a9eb525e5ba26d84e89e5366fee018b76749b2a66bff8a3dfa13e->enter($__internal_dfab611f2c4a9eb525e5ba26d84e89e5366fee018b76749b2a66bff8a3dfa13e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:search.html.twig"));

        // line 1
        echo "<div class=\"search clearfix\" id=\"searchBar\">
    <h3>
        <img style=\"margin: 0 5px 0 0; vertical-align: middle;\" width=\"16\" height=\"16\" alt=\"Search\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAC2ElEQVR42u3XvUtbYRQG8JcggSxSiqlQoXUQUfEDnDoIEkK30ulKh0REFEOkitaIaBUU4gchQ8BBGyKGIC79B7rVxaGlm+JooYtQCq2U0oq9OX0eOBeCRXrf69DFwI9z73nPeTlJbrxXIyL/1e0AfyWueTVAEgrwGt5qLGge675e1gPUQaqxsfEgmUyerq6uft3e3v61v78vjDxnnuusYz3WTI0bDXAnHA6/Gh0d/bS7u+vu7e3JdbjOOtazDzmjAg9QF41Gy+vr6+eVSkX8Yj372I9zA8EGiEQi6bW1tfNyuSyK7/II0YEmMBodzYuHfezXmkADNAwNDX3c2dkRKpVKl4hZCIO5SvNZ1LleD/uxzz0c2w/Q0tLyAheYWywWRT0H4wPrhNjf1taWYd56gOHh4XdbW1tC+Xz+CNH4pfVCuo/9AAsLC182NzeFVlZWUojGL60X0n3sB8BFdFEoFISWlpYeIhq/tF5I97EfIJfLufgohZqbm+8jGr+0Xkj3sR9geXn5x8bGhlBHR8czROOX1gvpPvYDzM3NnWSzWaFYLPYG0fil9UK6j/0As7OzWVxMQul0+ht6nuDY/AvrWO/16j7WA/BCerC4uHiJKNTX13eid7wQzs1VzHOddV4P+n9zHwj0l5BfQ35+fl4Ix248Hj8NhUIlLPXDXeQNI8+Z5zrrvJ6BgYEzrMVxHGgAfg3hmZmZD4jiwd3ue3d393F9ff0hnwcYec4812tlMplqb2/vMepigW/H09PTUXgPEsTU1FS1p6dHhwj4QDI5ORmBHFyAXEfXK+DW5icmJqpdXV21Q9g/ko2Pj1MTvIQDOAPReKD5Jq1zwAVR/CVVOzs7OUR/oAFSqZQtB1wQz9jYWLW9vf0I2z2yHgAXWRAOuCCekZGRamtr66HtALw9B+WAC+JJJBI/rQfA081NOOCCEJ6gP1sPMDg4eFNP4Uw9vv3X7HaAq/4AszA5PJFqlwgAAAAASUVORK5CYII=\">
        Search
    </h3>
    <form action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("_profiler_search");
        echo "\" method=\"get\">
        <label for=\"ip\">IP</label>
        <input type=\"text\" name=\"ip\" id=\"ip\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["ip"]) ? $context["ip"] : $this->getContext($context, "ip")), "html", null, true);
        echo "\">
        <div class=\"clear-fix\"></div>
        <label for=\"method\">Method</label>
        <select name=\"method\" id=\"method\">
            <option value=\"\"";
        // line 12
        echo ((("" == (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")))) ? (" selected=\"selected\"") : (""));
        echo ">&nbsp;</option>
            ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => "DELETE", 1 => "GET", 2 => "HEAD", 3 => "PATCH", 4 => "POST", 5 => "PUT"));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 14
            echo "                <option";
            echo ((($context["m"] == (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")))) ? (" selected=\"selected\"") : (""));
            echo ">";
            echo twig_escape_filter($this->env, $context["m"], "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "        </select>
        <div class=\"clear-fix\"></div>
        <label for=\"url\">URL</label>
        <input type=\"text\" name=\"url\" id=\"url\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "\">
        <div class=\"clear-fix\"></div>
        <label for=\"token\">Token</label>
        <input type=\"text\" name=\"token\" id=\"token\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "\">
        <div class=\"clear-fix\"></div>
        <label for=\"start\">From</label>
        <input type=\"date\" name=\"start\" id=\"start\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["start"]) ? $context["start"] : $this->getContext($context, "start")), "html", null, true);
        echo "\">
        <div class=\"clear-fix\"></div>
        <label for=\"end\">Until</label>
        <input type=\"date\" name=\"end\" id=\"end\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["end"]) ? $context["end"] : $this->getContext($context, "end")), "html", null, true);
        echo "\">
        <div class=\"clear-fix\"></div>
        <label for=\"limit\">Limit</label>
        <select name=\"limit\" id=\"limit\">
            ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => 10, 1 => 50, 2 => 100));
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            // line 33
            echo "                <option";
            echo ((($context["l"] == (isset($context["limit"]) ? $context["limit"] : $this->getContext($context, "limit")))) ? (" selected=\"selected\"") : (""));
            echo ">";
            echo twig_escape_filter($this->env, $context["l"], "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </select>

        <button type=\"submit\" class=\"sf-button\">
            <span class=\"border-l\">
                <span class=\"border-r\">
                    <span class=\"btn-bg\">SEARCH</span>
                </span>
            </span>
        </button>
        <div class=\"clear-fix\"></div>
    </form>
</div>
";
        
        $__internal_dfab611f2c4a9eb525e5ba26d84e89e5366fee018b76749b2a66bff8a3dfa13e->leave($__internal_dfab611f2c4a9eb525e5ba26d84e89e5366fee018b76749b2a66bff8a3dfa13e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 35,  94 => 33,  90 => 32,  83 => 28,  77 => 25,  71 => 22,  65 => 19,  60 => 16,  49 => 14,  45 => 13,  41 => 12,  34 => 8,  29 => 6,  22 => 1,);
    }
}
/* <div class="search clearfix" id="searchBar">*/
/*     <h3>*/
/*         <img style="margin: 0 5px 0 0; vertical-align: middle;" width="16" height="16" alt="Search" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAC2ElEQVR42u3XvUtbYRQG8JcggSxSiqlQoXUQUfEDnDoIEkK30ulKh0REFEOkitaIaBUU4gchQ8BBGyKGIC79B7rVxaGlm+JooYtQCq2U0oq9OX0eOBeCRXrf69DFwI9z73nPeTlJbrxXIyL/1e0AfyWueTVAEgrwGt5qLGge675e1gPUQaqxsfEgmUyerq6uft3e3v61v78vjDxnnuusYz3WTI0bDXAnHA6/Gh0d/bS7u+vu7e3JdbjOOtazDzmjAg9QF41Gy+vr6+eVSkX8Yj372I9zA8EGiEQi6bW1tfNyuSyK7/II0YEmMBodzYuHfezXmkADNAwNDX3c2dkRKpVKl4hZCIO5SvNZ1LleD/uxzz0c2w/Q0tLyAheYWywWRT0H4wPrhNjf1taWYd56gOHh4XdbW1tC+Xz+CNH4pfVCuo/9AAsLC182NzeFVlZWUojGL60X0n3sB8BFdFEoFISWlpYeIhq/tF5I97EfIJfLufgohZqbm+8jGr+0Xkj3sR9geXn5x8bGhlBHR8czROOX1gvpPvYDzM3NnWSzWaFYLPYG0fil9UK6j/0As7OzWVxMQul0+ht6nuDY/AvrWO/16j7WA/BCerC4uHiJKNTX13eid7wQzs1VzHOddV4P+n9zHwj0l5BfQ35+fl4Ix248Hj8NhUIlLPXDXeQNI8+Z5zrrvJ6BgYEzrMVxHGgAfg3hmZmZD4jiwd3ue3d393F9ff0hnwcYec4812tlMplqb2/vMepigW/H09PTUXgPEsTU1FS1p6dHhwj4QDI5ORmBHFyAXEfXK+DW5icmJqpdXV21Q9g/ko2Pj1MTvIQDOAPReKD5Jq1zwAVR/CVVOzs7OUR/oAFSqZQtB1wQz9jYWLW9vf0I2z2yHgAXWRAOuCCekZGRamtr66HtALw9B+WAC+JJJBI/rQfA081NOOCCEJ6gP1sPMDg4eFNP4Uw9vv3X7HaAq/4AszA5PJFqlwgAAAAASUVORK5CYII=">*/
/*         Search*/
/*     </h3>*/
/*     <form action="{{ path('_profiler_search') }}" method="get">*/
/*         <label for="ip">IP</label>*/
/*         <input type="text" name="ip" id="ip" value="{{ ip }}">*/
/*         <div class="clear-fix"></div>*/
/*         <label for="method">Method</label>*/
/*         <select name="method" id="method">*/
/*             <option value=""{{ '' == method ? ' selected="selected"' : '' }}>&nbsp;</option>*/
/*             {% for m in ['DELETE', 'GET', 'HEAD', 'PATCH', 'POST', 'PUT'] %}*/
/*                 <option{{ m == method ? ' selected="selected"' : '' }}>{{ m }}</option>*/
/*             {% endfor %}*/
/*         </select>*/
/*         <div class="clear-fix"></div>*/
/*         <label for="url">URL</label>*/
/*         <input type="text" name="url" id="url" value="{{ url }}">*/
/*         <div class="clear-fix"></div>*/
/*         <label for="token">Token</label>*/
/*         <input type="text" name="token" id="token" value="{{ token }}">*/
/*         <div class="clear-fix"></div>*/
/*         <label for="start">From</label>*/
/*         <input type="date" name="start" id="start" value="{{ start }}">*/
/*         <div class="clear-fix"></div>*/
/*         <label for="end">Until</label>*/
/*         <input type="date" name="end" id="end" value="{{ end }}">*/
/*         <div class="clear-fix"></div>*/
/*         <label for="limit">Limit</label>*/
/*         <select name="limit" id="limit">*/
/*             {% for l in [10, 50, 100] %}*/
/*                 <option{{ l == limit ? ' selected="selected"' : '' }}>{{ l }}</option>*/
/*             {% endfor %}*/
/*         </select>*/
/* */
/*         <button type="submit" class="sf-button">*/
/*             <span class="border-l">*/
/*                 <span class="border-r">*/
/*                     <span class="btn-bg">SEARCH</span>*/
/*                 </span>*/
/*             </span>*/
/*         </button>*/
/*         <div class="clear-fix"></div>*/
/*     </form>*/
/* </div>*/
/* */
