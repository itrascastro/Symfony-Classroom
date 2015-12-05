<?php

/* WebProfilerBundle:Collector:translation.html.twig */
class __TwigTemplate_607b6e9f8a1e919888d66ef8104d7e900ac17a1d95f25182d2b2a0f7a36f9af2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:translation.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
            'panelContent' => array($this, 'block_panelContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b39d1971e65bd6689854be3168e015df39512a6a4ac9fecfd7fe09bec8d7a447 = $this->env->getExtension("native_profiler");
        $__internal_b39d1971e65bd6689854be3168e015df39512a6a4ac9fecfd7fe09bec8d7a447->enter($__internal_b39d1971e65bd6689854be3168e015df39512a6a4ac9fecfd7fe09bec8d7a447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:translation.html.twig"));

        // line 3
        $context["translator"] = $this;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b39d1971e65bd6689854be3168e015df39512a6a4ac9fecfd7fe09bec8d7a447->leave($__internal_b39d1971e65bd6689854be3168e015df39512a6a4ac9fecfd7fe09bec8d7a447_prof);

    }

    // line 5
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b9cb1a890c1b016cc2b3cf9ed27411a0f38ac5f9b3013b4ace43dfdba434c3e6 = $this->env->getExtension("native_profiler");
        $__internal_b9cb1a890c1b016cc2b3cf9ed27411a0f38ac5f9b3013b4ace43dfdba434c3e6->enter($__internal_b9cb1a890c1b016cc2b3cf9ed27411a0f38ac5f9b3013b4ace43dfdba434c3e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 6
        echo "    ";
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "messages", array()))) {
            // line 7
            echo "        ";
            ob_start();
            // line 8
            echo "            <svg width=\"28\" height=\"28\" version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 417 300\" enable-background=\"new 0 0 417 300\" xml:space=\"preserve\"><g id=\"Layer_1_1_\"><g id=\"outline_1_\"><path fill=\"#B5B5B6\" d=\"M275.9,145c0,18.2-14.799,33-33,33H120.701l-36.3,42l-0.3-42H40c-18.2,0-33-14.8-33-33V44c0-18.2,14.8-33,33-33h202.9c18.199,0,33,14.8,33,33V145L275.9,145z\"/></g><g enable-background=\"new\"><path fill=\"#FFFFFF\" d=\"M194.501,146.962h-23.898l-9.5-24.715h-43.492l-8.98,24.715H85.326l42.379-108.805h23.23L194.501,146.962zM154.052,103.915L139.06,63.54l-14.695,40.375H154.052z\"/></g></g><g id=\"Layer_2_1_\"><g id=\"japanese\"><g id=\"outline\"><path fill=\"#414141\" d=\"M141.451,214c0,18.2,14.8,33,33,33h122.2l36.301,42l0.301-42h44.1c18.201,0,33-14.8,33-33V113c0-18.2-14.799-33-33-33H174.453c-18.201,0-33,14.8-33,33L141.451,214L141.451,214z\"/></g><g enable-background=\"new\"><path fill=\"#FFFFFF\" d=\"M312.158,143.327c-0.455,1.672-0.912,3.344-1.215,5.016c22.039,6.08,31.766,21.431,31.766,38.455c0,24.318-18.238,40.733-57.301,45.598c-1.217-3.952-5.016-11.248-7.904-15.352c27.359-3.04,45.295-12.159,45.295-29.791c0-5.016-1.672-16.871-18.088-22.19c-6.688,15.199-16.871,29.335-28.727,39.519c0.607,1.976,1.367,3.647,2.127,5.167l-15.654,10.032c-0.76-1.521-1.52-3.192-2.129-5.017c-7.6,4.256-15.959,6.992-24.471,6.992c-13.375,0-22.189-8.512-22.189-22.647c0-20.975,16.111-37.542,37.693-46.357c-0.305-6.536-0.305-13.223-0.305-20.215c-11.398,0.304-23.711,0.608-29.789,0.456l-0.912-17.783c6.99,0.152,19.758,0.152,31.006,0.152c0.305-6.536,0.457-14.135,0.76-20.519l23.863,1.824c-0.305,1.52-1.52,2.736-4.104,3.04c-0.457,4.408-0.76,10.184-1.217,15.047c16.568-0.76,37.391-2.736,54.262-6.384l1.672,18.391c-16.719,3.04-38.605,4.56-56.846,5.168c-0.15,5.319-0.303,10.487-0.303,15.503c6.383-1.52,15.654-2.432,22.799-1.976c0.607-2.28,1.063-4.56,1.215-6.84L312.158,143.327z M255.77,198.044c-1.672-8.056-2.736-17.479-3.496-27.814c-12.008,5.927-20.215,15.199-20.215,25.382c0,8.664,6.535,8.36,8.512,8.209C245.281,203.668,250.449,201.539,255.77,198.044zM286.473,162.021c-2.129-0.304-10.033,0.305-16.871,2.128c0.455,7.6,0.91,14.591,1.975,20.671C277.504,178.589,282.672,170.686,286.473,162.021z\"/></g></g></g></svg>
            ";
            // line 9
            if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countMissings", array())) {
                // line 10
                echo "                ";
                $context["status_color"] = "red";
                // line 11
                echo "            ";
            } elseif ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countFallbacks", array())) {
                // line 12
                echo "                ";
                $context["status_color"] = "yellow";
                // line 13
                echo "            ";
            }
            // line 14
            echo "            ";
            $context["error_count"] = ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countMissings", array()) + $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countFallbacks", array()));
            // line 15
            echo "            <span class=\"sf-toolbar-status";
            if (array_key_exists("status_color", $context)) {
                echo " sf-toolbar-status-";
                echo twig_escape_filter($this->env, (isset($context["status_color"]) ? $context["status_color"] : $this->getContext($context, "status_color")), "html", null, true);
            }
            echo "\">";
            echo twig_escape_filter($this->env, (((isset($context["error_count"]) ? $context["error_count"] : $this->getContext($context, "error_count"))) ? ((isset($context["error_count"]) ? $context["error_count"] : $this->getContext($context, "error_count"))) : ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countdefines", array()))), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 17
            echo "        ";
            ob_start();
            // line 18
            echo "            ";
            if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countMissings", array())) {
                // line 19
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Missing messages</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-red\">";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countMissings", array()), "html", null, true);
                echo "</span>
                </div>
            ";
            }
            // line 24
            echo "            ";
            if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countFallbacks", array())) {
                // line 25
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Fallback messages</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-yellow\">";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countFallbacks", array()), "html", null, true);
                echo "</span>
                </div>
            ";
            }
            // line 30
            echo "            ";
            if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countdefines", array())) {
                // line 31
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Defined messages</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-green\">";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countdefines", array()), "html", null, true);
                echo "</span>
                </div>
            ";
            }
            // line 36
            echo "        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 37
            echo "        ";
            $this->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig", "WebProfilerBundle:Collector:translation.html.twig", 37)->display(array_merge($context, array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")))));
            // line 38
            echo "    ";
        }
        
        $__internal_b9cb1a890c1b016cc2b3cf9ed27411a0f38ac5f9b3013b4ace43dfdba434c3e6->leave($__internal_b9cb1a890c1b016cc2b3cf9ed27411a0f38ac5f9b3013b4ace43dfdba434c3e6_prof);

    }

    // line 41
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1c9c953786401ced752c3d7072abbbd4e1e3987fe869c4f6ccbfaa621f1b13ce = $this->env->getExtension("native_profiler");
        $__internal_1c9c953786401ced752c3d7072abbbd4e1e3987fe869c4f6ccbfaa621f1b13ce->enter($__internal_1c9c953786401ced752c3d7072abbbd4e1e3987fe869c4f6ccbfaa621f1b13ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 42
        echo "<span class=\"label\">
    <span class=\"icon\"><svg width=\"35\" height=\"28\" version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 417 300\" enable-background=\"new 0 0 417 300\" xml:space=\"preserve\"><g id=\"Layer_1_1_\"><g id=\"outline_1_\"><path fill=\"#B5B5B6\" d=\"M275.9,145c0,18.2-14.799,33-33,33H120.701l-36.3,42l-0.3-42H40c-18.2,0-33-14.8-33-33V44c0-18.2,14.8-33,33-33h202.9c18.199,0,33,14.8,33,33V145L275.9,145z\"/></g><g enable-background=\"new\"><path fill=\"#FFFFFF\" d=\"M194.501,146.962h-23.898l-9.5-24.715h-43.492l-8.98,24.715H85.326l42.379-108.805h23.23L194.501,146.962zM154.052,103.915L139.06,63.54l-14.695,40.375H154.052z\"/></g></g><g id=\"Layer_2_1_\"><g id=\"japanese\"><g id=\"outline\"><path fill=\"#414141\" d=\"M141.451,214c0,18.2,14.8,33,33,33h122.2l36.301,42l0.301-42h44.1c18.201,0,33-14.8,33-33V113c0-18.2-14.799-33-33-33H174.453c-18.201,0-33,14.8-33,33L141.451,214L141.451,214z\"/></g><g enable-background=\"new\"><path fill=\"#FFFFFF\" d=\"M312.158,143.327c-0.455,1.672-0.912,3.344-1.215,5.016c22.039,6.08,31.766,21.431,31.766,38.455c0,24.318-18.238,40.733-57.301,45.598c-1.217-3.952-5.016-11.248-7.904-15.352c27.359-3.04,45.295-12.159,45.295-29.791c0-5.016-1.672-16.871-18.088-22.19c-6.688,15.199-16.871,29.335-28.727,39.519c0.607,1.976,1.367,3.647,2.127,5.167l-15.654,10.032c-0.76-1.521-1.52-3.192-2.129-5.017c-7.6,4.256-15.959,6.992-24.471,6.992c-13.375,0-22.189-8.512-22.189-22.647c0-20.975,16.111-37.542,37.693-46.357c-0.305-6.536-0.305-13.223-0.305-20.215c-11.398,0.304-23.711,0.608-29.789,0.456l-0.912-17.783c6.99,0.152,19.758,0.152,31.006,0.152c0.305-6.536,0.457-14.135,0.76-20.519l23.863,1.824c-0.305,1.52-1.52,2.736-4.104,3.04c-0.457,4.408-0.76,10.184-1.217,15.047c16.568-0.76,37.391-2.736,54.262-6.384l1.672,18.391c-16.719,3.04-38.605,4.56-56.846,5.168c-0.15,5.319-0.303,10.487-0.303,15.503c6.383-1.52,15.654-2.432,22.799-1.976c0.607-2.28,1.063-4.56,1.215-6.84L312.158,143.327z M255.77,198.044c-1.672-8.056-2.736-17.479-3.496-27.814c-12.008,5.927-20.215,15.199-20.215,25.382c0,8.664,6.535,8.36,8.512,8.209C245.281,203.668,250.449,201.539,255.77,198.044zM286.473,162.021c-2.129-0.304-10.033,0.305-16.871,2.128c0.455,7.6,0.91,14.591,1.975,20.671C277.504,178.589,282.672,170.686,286.473,162.021z\"/></g></g></g></svg></span>
    <strong>Translation</strong>
</span>
";
        
        $__internal_1c9c953786401ced752c3d7072abbbd4e1e3987fe869c4f6ccbfaa621f1b13ce->leave($__internal_1c9c953786401ced752c3d7072abbbd4e1e3987fe869c4f6ccbfaa621f1b13ce_prof);

    }

    // line 48
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8fff2a82114ae42152c00bb6a4bd62b48cbd2f77c451cda85864a25e2ee94d25 = $this->env->getExtension("native_profiler");
        $__internal_8fff2a82114ae42152c00bb6a4bd62b48cbd2f77c451cda85864a25e2ee94d25->enter($__internal_8fff2a82114ae42152c00bb6a4bd62b48cbd2f77c451cda85864a25e2ee94d25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 49
        echo "    ";
        if (twig_test_empty($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "messages", array()))) {
            // line 50
            echo "        <h2>Translations</h2>
        <p>
            <em>No translations have been called.</em>
        </p>
    ";
        } else {
            // line 55
            echo "        ";
            $this->displayBlock("panelContent", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_8fff2a82114ae42152c00bb6a4bd62b48cbd2f77c451cda85864a25e2ee94d25->leave($__internal_8fff2a82114ae42152c00bb6a4bd62b48cbd2f77c451cda85864a25e2ee94d25_prof);

    }

    // line 59
    public function block_panelContent($context, array $blocks = array())
    {
        $__internal_89ffebf9a174bb17d9934305affaac06bb3dae99198f2c613d247d27dcb9feab = $this->env->getExtension("native_profiler");
        $__internal_89ffebf9a174bb17d9934305affaac06bb3dae99198f2c613d247d27dcb9feab->enter($__internal_89ffebf9a174bb17d9934305affaac06bb3dae99198f2c613d247d27dcb9feab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panelContent"));

        // line 60
        echo "    <h2>Translation Stats</h2>
    <table>
        <tbody>
            <tr>
                <th>Defined messages</th>
                <td><pre>";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countdefines", array()), "html", null, true);
        echo "</pre></td>
            </tr>
            <tr>
                <th scope=\"col\" style=\"width: 30%\">Fallback messages</th>
                <td scope=\"col\" style=\"width: 60%\"><pre>";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countFallbacks", array()), "html", null, true);
        echo "</pre></td>
            </tr>
            <tr>
                <th>Missing messages</th>
                <td><pre>";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countMissings", array()), "html", null, true);
        echo "</pre></td>
            </tr>
        </tbody>
    </table>

    <table>
        <tr>
            <th>State</th>
            <th>Locale</th>
            <th>Domain</th>
            <th>Id</th>
            <th>Message Preview</th>
        </tr>
        ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "messages", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 87
            echo "            <tr>
                <td><code>";
            // line 88
            echo $context["translator"]->getstate($context["message"]);
            echo "</code></td>
                <td><code>";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "locale", array()), "html", null, true);
            echo "</code></td>
                <td><code>";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "domain", array()), "html", null, true);
            echo "</code></td>
                <td>
                    <code>";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "id", array()), "html", null, true);
            echo "</code>
                    ";
            // line 93
            if (($this->getAttribute($context["message"], "count", array()) > 1)) {
                echo "<br><small style=\"color: gray;\">(used ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "count", array()), "html", null, true);
                echo " times)</small>";
            }
            // line 94
            echo "                </td>
                <td><code>";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "translation", array()), "html", null, true);
            echo "</code></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "    </table>
";
        
        $__internal_89ffebf9a174bb17d9934305affaac06bb3dae99198f2c613d247d27dcb9feab->leave($__internal_89ffebf9a174bb17d9934305affaac06bb3dae99198f2c613d247d27dcb9feab_prof);

    }

    // line 101
    public function getstate($__translation__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "translation" => $__translation__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_fc4a4af5d02c453b2888dfb3aa83c44b3eaf1ce1a3c3c68e597946b87dd5d9cd = $this->env->getExtension("native_profiler");
            $__internal_fc4a4af5d02c453b2888dfb3aa83c44b3eaf1ce1a3c3c68e597946b87dd5d9cd->enter($__internal_fc4a4af5d02c453b2888dfb3aa83c44b3eaf1ce1a3c3c68e597946b87dd5d9cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "state"));

            // line 102
            echo "    ";
            if (($this->getAttribute((isset($context["translation"]) ? $context["translation"] : $this->getContext($context, "translation")), "state", array()) == twig_constant("Symfony\\Component\\Translation\\DataCollectorTranslator::MESSAGE_EQUALS_FALLBACK"))) {
                // line 103
                echo "        same as fallback
    ";
            } elseif (($this->getAttribute(            // line 104
(isset($context["translation"]) ? $context["translation"] : $this->getContext($context, "translation")), "state", array()) == twig_constant("Symfony\\Component\\Translation\\DataCollectorTranslator::MESSAGE_MISSING"))) {
                // line 105
                echo "        missing
    ";
            }
            
            $__internal_fc4a4af5d02c453b2888dfb3aa83c44b3eaf1ce1a3c3c68e597946b87dd5d9cd->leave($__internal_fc4a4af5d02c453b2888dfb3aa83c44b3eaf1ce1a3c3c68e597946b87dd5d9cd_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:translation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  299 => 105,  297 => 104,  294 => 103,  291 => 102,  276 => 101,  268 => 98,  259 => 95,  256 => 94,  250 => 93,  246 => 92,  241 => 90,  237 => 89,  233 => 88,  230 => 87,  226 => 86,  210 => 73,  203 => 69,  196 => 65,  189 => 60,  183 => 59,  172 => 55,  165 => 50,  162 => 49,  156 => 48,  145 => 42,  139 => 41,  131 => 38,  128 => 37,  125 => 36,  119 => 33,  115 => 31,  112 => 30,  106 => 27,  102 => 25,  99 => 24,  93 => 21,  89 => 19,  86 => 18,  83 => 17,  72 => 15,  69 => 14,  66 => 13,  63 => 12,  60 => 11,  57 => 10,  55 => 9,  52 => 8,  49 => 7,  46 => 6,  40 => 5,  33 => 1,  31 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% import _self as translator %}*/
/* */
/* {% block toolbar %}*/
/*     {% if collector.messages|length %}*/
/*         {% set icon %}*/
/*             <svg width="28" height="28" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 417 300" enable-background="new 0 0 417 300" xml:space="preserve"><g id="Layer_1_1_"><g id="outline_1_"><path fill="#B5B5B6" d="M275.9,145c0,18.2-14.799,33-33,33H120.701l-36.3,42l-0.3-42H40c-18.2,0-33-14.8-33-33V44c0-18.2,14.8-33,33-33h202.9c18.199,0,33,14.8,33,33V145L275.9,145z"/></g><g enable-background="new"><path fill="#FFFFFF" d="M194.501,146.962h-23.898l-9.5-24.715h-43.492l-8.98,24.715H85.326l42.379-108.805h23.23L194.501,146.962zM154.052,103.915L139.06,63.54l-14.695,40.375H154.052z"/></g></g><g id="Layer_2_1_"><g id="japanese"><g id="outline"><path fill="#414141" d="M141.451,214c0,18.2,14.8,33,33,33h122.2l36.301,42l0.301-42h44.1c18.201,0,33-14.8,33-33V113c0-18.2-14.799-33-33-33H174.453c-18.201,0-33,14.8-33,33L141.451,214L141.451,214z"/></g><g enable-background="new"><path fill="#FFFFFF" d="M312.158,143.327c-0.455,1.672-0.912,3.344-1.215,5.016c22.039,6.08,31.766,21.431,31.766,38.455c0,24.318-18.238,40.733-57.301,45.598c-1.217-3.952-5.016-11.248-7.904-15.352c27.359-3.04,45.295-12.159,45.295-29.791c0-5.016-1.672-16.871-18.088-22.19c-6.688,15.199-16.871,29.335-28.727,39.519c0.607,1.976,1.367,3.647,2.127,5.167l-15.654,10.032c-0.76-1.521-1.52-3.192-2.129-5.017c-7.6,4.256-15.959,6.992-24.471,6.992c-13.375,0-22.189-8.512-22.189-22.647c0-20.975,16.111-37.542,37.693-46.357c-0.305-6.536-0.305-13.223-0.305-20.215c-11.398,0.304-23.711,0.608-29.789,0.456l-0.912-17.783c6.99,0.152,19.758,0.152,31.006,0.152c0.305-6.536,0.457-14.135,0.76-20.519l23.863,1.824c-0.305,1.52-1.52,2.736-4.104,3.04c-0.457,4.408-0.76,10.184-1.217,15.047c16.568-0.76,37.391-2.736,54.262-6.384l1.672,18.391c-16.719,3.04-38.605,4.56-56.846,5.168c-0.15,5.319-0.303,10.487-0.303,15.503c6.383-1.52,15.654-2.432,22.799-1.976c0.607-2.28,1.063-4.56,1.215-6.84L312.158,143.327z M255.77,198.044c-1.672-8.056-2.736-17.479-3.496-27.814c-12.008,5.927-20.215,15.199-20.215,25.382c0,8.664,6.535,8.36,8.512,8.209C245.281,203.668,250.449,201.539,255.77,198.044zM286.473,162.021c-2.129-0.304-10.033,0.305-16.871,2.128c0.455,7.6,0.91,14.591,1.975,20.671C277.504,178.589,282.672,170.686,286.473,162.021z"/></g></g></g></svg>*/
/*             {% if collector.countMissings %}*/
/*                 {% set status_color = "red" %}*/
/*             {% elseif collector.countFallbacks %}*/
/*                 {% set status_color = "yellow" %}*/
/*             {% endif %}*/
/*             {% set error_count = collector.countMissings + collector.countFallbacks %}*/
/*             <span class="sf-toolbar-status{% if status_color is defined %} sf-toolbar-status-{{ status_color }}{% endif %}">{{ error_count ?: collector.countdefines }}</span>*/
/*         {% endset %}*/
/*         {% set text %}*/
/*             {% if collector.countMissings %}*/
/*                 <div class="sf-toolbar-info-piece">*/
/*                     <b>Missing messages</b>*/
/*                     <span class="sf-toolbar-status sf-toolbar-status-red">{{ collector.countMissings }}</span>*/
/*                 </div>*/
/*             {% endif %}*/
/*             {% if collector.countFallbacks %}*/
/*                 <div class="sf-toolbar-info-piece">*/
/*                     <b>Fallback messages</b>*/
/*                     <span class="sf-toolbar-status sf-toolbar-status-yellow">{{ collector.countFallbacks }}</span>*/
/*                 </div>*/
/*             {% endif %}*/
/*             {% if collector.countdefines %}*/
/*                 <div class="sf-toolbar-info-piece">*/
/*                     <b>Defined messages</b>*/
/*                     <span class="sf-toolbar-status sf-toolbar-status-green">{{ collector.countdefines }}</span>*/
/*                 </div>*/
/*             {% endif %}*/
/*         {% endset %}*/
/*         {% include '@WebProfiler/Profiler/toolbar_item.html.twig' with { 'link': profiler_url } %}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon"><svg width="35" height="28" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 417 300" enable-background="new 0 0 417 300" xml:space="preserve"><g id="Layer_1_1_"><g id="outline_1_"><path fill="#B5B5B6" d="M275.9,145c0,18.2-14.799,33-33,33H120.701l-36.3,42l-0.3-42H40c-18.2,0-33-14.8-33-33V44c0-18.2,14.8-33,33-33h202.9c18.199,0,33,14.8,33,33V145L275.9,145z"/></g><g enable-background="new"><path fill="#FFFFFF" d="M194.501,146.962h-23.898l-9.5-24.715h-43.492l-8.98,24.715H85.326l42.379-108.805h23.23L194.501,146.962zM154.052,103.915L139.06,63.54l-14.695,40.375H154.052z"/></g></g><g id="Layer_2_1_"><g id="japanese"><g id="outline"><path fill="#414141" d="M141.451,214c0,18.2,14.8,33,33,33h122.2l36.301,42l0.301-42h44.1c18.201,0,33-14.8,33-33V113c0-18.2-14.799-33-33-33H174.453c-18.201,0-33,14.8-33,33L141.451,214L141.451,214z"/></g><g enable-background="new"><path fill="#FFFFFF" d="M312.158,143.327c-0.455,1.672-0.912,3.344-1.215,5.016c22.039,6.08,31.766,21.431,31.766,38.455c0,24.318-18.238,40.733-57.301,45.598c-1.217-3.952-5.016-11.248-7.904-15.352c27.359-3.04,45.295-12.159,45.295-29.791c0-5.016-1.672-16.871-18.088-22.19c-6.688,15.199-16.871,29.335-28.727,39.519c0.607,1.976,1.367,3.647,2.127,5.167l-15.654,10.032c-0.76-1.521-1.52-3.192-2.129-5.017c-7.6,4.256-15.959,6.992-24.471,6.992c-13.375,0-22.189-8.512-22.189-22.647c0-20.975,16.111-37.542,37.693-46.357c-0.305-6.536-0.305-13.223-0.305-20.215c-11.398,0.304-23.711,0.608-29.789,0.456l-0.912-17.783c6.99,0.152,19.758,0.152,31.006,0.152c0.305-6.536,0.457-14.135,0.76-20.519l23.863,1.824c-0.305,1.52-1.52,2.736-4.104,3.04c-0.457,4.408-0.76,10.184-1.217,15.047c16.568-0.76,37.391-2.736,54.262-6.384l1.672,18.391c-16.719,3.04-38.605,4.56-56.846,5.168c-0.15,5.319-0.303,10.487-0.303,15.503c6.383-1.52,15.654-2.432,22.799-1.976c0.607-2.28,1.063-4.56,1.215-6.84L312.158,143.327z M255.77,198.044c-1.672-8.056-2.736-17.479-3.496-27.814c-12.008,5.927-20.215,15.199-20.215,25.382c0,8.664,6.535,8.36,8.512,8.209C245.281,203.668,250.449,201.539,255.77,198.044zM286.473,162.021c-2.129-0.304-10.033,0.305-16.871,2.128c0.455,7.6,0.91,14.591,1.975,20.671C277.504,178.589,282.672,170.686,286.473,162.021z"/></g></g></g></svg></span>*/
/*     <strong>Translation</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {% if collector.messages is empty %}*/
/*         <h2>Translations</h2>*/
/*         <p>*/
/*             <em>No translations have been called.</em>*/
/*         </p>*/
/*     {% else %}*/
/*         {{ block('panelContent') }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block panelContent %}*/
/*     <h2>Translation Stats</h2>*/
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Defined messages</th>*/
/*                 <td><pre>{{ collector.countdefines }}</pre></td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th scope="col" style="width: 30%">Fallback messages</th>*/
/*                 <td scope="col" style="width: 60%"><pre>{{ collector.countFallbacks }}</pre></td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Missing messages</th>*/
/*                 <td><pre>{{ collector.countMissings }}</pre></td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <table>*/
/*         <tr>*/
/*             <th>State</th>*/
/*             <th>Locale</th>*/
/*             <th>Domain</th>*/
/*             <th>Id</th>*/
/*             <th>Message Preview</th>*/
/*         </tr>*/
/*         {% for message in collector.messages %}*/
/*             <tr>*/
/*                 <td><code>{{ translator.state(message) }}</code></td>*/
/*                 <td><code>{{ message.locale }}</code></td>*/
/*                 <td><code>{{ message.domain }}</code></td>*/
/*                 <td>*/
/*                     <code>{{ message.id }}</code>*/
/*                     {% if message.count > 1 %}<br><small style="color: gray;">(used {{ message.count }} times)</small>{% endif %}*/
/*                 </td>*/
/*                 <td><code>{{ message.translation }}</code></td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*     </table>*/
/* {% endblock %}*/
/* */
/* {% macro state(translation) %}*/
/*     {% if translation.state == constant('Symfony\\Component\\Translation\\DataCollectorTranslator::MESSAGE_EQUALS_FALLBACK') %}*/
/*         same as fallback*/
/*     {% elseif translation.state == constant('Symfony\\Component\\Translation\\DataCollectorTranslator::MESSAGE_MISSING') %}*/
/*         missing*/
/*     {% endif %}*/
/* {% endmacro %}*/
/* */
