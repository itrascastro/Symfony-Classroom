<?php

/* ::base.html.twig */
class __TwigTemplate_8f9e41188f740dda5da72f47eb286fdf7ea3ab92993fdf12f0cce25a0ad77bf6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'headTitle' => array($this, 'block_headTitle'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c9381aee5d6f90b78ac987369c36fd3b065913a22768a8d5fa5f502ac116dd0a = $this->env->getExtension("native_profiler");
        $__internal_c9381aee5d6f90b78ac987369c36fd3b065913a22768a8d5fa5f502ac116dd0a->enter($__internal_c9381aee5d6f90b78ac987369c36fd3b065913a22768a8d5fa5f502ac116dd0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 13
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "ef04329_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ef04329_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/compiled/app_bootstrap.min_1.css");
            // line 17
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
            // asset "ef04329_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ef04329_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/compiled/app_jumbotron_2.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        } else {
            // asset "ef04329"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ef04329") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/compiled/app.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        }
        unset($context["asset_url"]);
        // line 19
        echo "
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>

<body>

<nav class=\"navbar navbar-inverse navbar-fixed-top\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"#\">Symfony Classroom</a>
        </div>
    </div>
</nav>

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class=\"jumbotron\">
    <div class=\"container\">
        <h1>";
        // line 48
        $this->displayBlock('headTitle', $context, $blocks);
        echo "</h1>
    </div>
</div>

<div class=\"container\">
    <ul>
        ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "messages"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 55
            echo "            <li>";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "    </ul>
</div>

<div class=\"container\">
    ";
        // line 61
        $this->displayBlock('body', $context, $blocks);
        // line 81
        echo "    <hr>
    <footer>
        <p class=\"text-right\">&copy; 2015 Ismael Trascastro</p>
    </footer>
</div> <!-- /container -->

";
        // line 87
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "73a6fe2_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_73a6fe2_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/compiled/app_bootstrap.min_1.js");
            // line 90
            echo "<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "73a6fe2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_73a6fe2") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/compiled/app.js");
            echo "<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
        // line 92
        echo "
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
<script>window.jQuery || document.write('<script src=\"../../assets/js/vendor/jquery.min.js\"><\\/script>')</script>
</body>
</html>";
        
        $__internal_c9381aee5d6f90b78ac987369c36fd3b065913a22768a8d5fa5f502ac116dd0a->leave($__internal_c9381aee5d6f90b78ac987369c36fd3b065913a22768a8d5fa5f502ac116dd0a_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_cdcddb1bb36a1fa6c0b4045d9d1767d89b9caddb87384ebc7788e9b4c56ec13d = $this->env->getExtension("native_profiler");
        $__internal_cdcddb1bb36a1fa6c0b4045d9d1767d89b9caddb87384ebc7788e9b4c56ec13d->enter($__internal_cdcddb1bb36a1fa6c0b4045d9d1767d89b9caddb87384ebc7788e9b4c56ec13d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_cdcddb1bb36a1fa6c0b4045d9d1767d89b9caddb87384ebc7788e9b4c56ec13d->leave($__internal_cdcddb1bb36a1fa6c0b4045d9d1767d89b9caddb87384ebc7788e9b4c56ec13d_prof);

    }

    // line 48
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_8ef4f50910f0b9740d12630b1b1bd3687087910fc05f88b1fa2a9a4383dcf927 = $this->env->getExtension("native_profiler");
        $__internal_8ef4f50910f0b9740d12630b1b1bd3687087910fc05f88b1fa2a9a4383dcf927->enter($__internal_8ef4f50910f0b9740d12630b1b1bd3687087910fc05f88b1fa2a9a4383dcf927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo "Doctrine";
        
        $__internal_8ef4f50910f0b9740d12630b1b1bd3687087910fc05f88b1fa2a9a4383dcf927->leave($__internal_8ef4f50910f0b9740d12630b1b1bd3687087910fc05f88b1fa2a9a4383dcf927_prof);

    }

    // line 61
    public function block_body($context, array $blocks = array())
    {
        $__internal_4dcf7f92412c42de156effdb000190fa5b3500417bdf880ad86a82276015db19 = $this->env->getExtension("native_profiler");
        $__internal_4dcf7f92412c42de156effdb000190fa5b3500417bdf880ad86a82276015db19->enter($__internal_4dcf7f92412c42de156effdb000190fa5b3500417bdf880ad86a82276015db19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 62
        echo "        <!-- Example row of columns -->
        <div class=\"row\">
            <div class=\"col-md-4\">
                <h2>Heading</h2>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">View details &raquo;</a></p>
            </div>
            <div class=\"col-md-4\">
                <h2>Heading</h2>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">View details &raquo;</a></p>
            </div>
            <div class=\"col-md-4\">
                <h2>Heading</h2>
                <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">View details &raquo;</a></p>
            </div>
        </div>
    ";
        
        $__internal_4dcf7f92412c42de156effdb000190fa5b3500417bdf880ad86a82276015db19->leave($__internal_4dcf7f92412c42de156effdb000190fa5b3500417bdf880ad86a82276015db19_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 62,  193 => 61,  181 => 48,  170 => 11,  156 => 92,  142 => 90,  138 => 87,  130 => 81,  128 => 61,  122 => 57,  113 => 55,  109 => 54,  100 => 48,  69 => 20,  66 => 19,  46 => 17,  42 => 13,  37 => 11,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->*/
/*     <meta name="description" content="">*/
/*     <meta name="author" content="">*/
/* */
/*     <title>{% block title %}{% endblock %}</title>*/
/* */
/*     {% stylesheets*/
/*     'css/bootstrap.min.css'*/
/*     'css/jumbotron.css'*/
/*     filter='cssrewrite' output='css/compiled/app.css' %}*/
/*     <link rel="stylesheet" href="{{ asset_url }}" />*/
/*     {% endstylesheets %}*/
/* */
/*     <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* */
/*     <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->*/
/*     <!--[if lt IE 9]>*/
/*     <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>*/
/*     <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>*/
/*     <![endif]-->*/
/* </head>*/
/* */
/* <body>*/
/* */
/* <nav class="navbar navbar-inverse navbar-fixed-top">*/
/*     <div class="container">*/
/*         <div class="navbar-header">*/
/*             <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">*/
/*                 <span class="sr-only">Toggle navigation</span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*             </button>*/
/*             <a class="navbar-brand" href="#">Symfony Classroom</a>*/
/*         </div>*/
/*     </div>*/
/* </nav>*/
/* */
/* <!-- Main jumbotron for a primary marketing message or call to action -->*/
/* <div class="jumbotron">*/
/*     <div class="container">*/
/*         <h1>{% block headTitle %}Doctrine{% endblock %}</h1>*/
/*     </div>*/
/* </div>*/
/* */
/* <div class="container">*/
/*     <ul>*/
/*         {% for message in app.session.flashBag.get('messages') %}*/
/*             <li>{{ message }}</li>*/
/*         {% endfor %}*/
/*     </ul>*/
/* </div>*/
/* */
/* <div class="container">*/
/*     {% block body %}*/
/*         <!-- Example row of columns -->*/
/*         <div class="row">*/
/*             <div class="col-md-4">*/
/*                 <h2>Heading</h2>*/
/*                 <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>*/
/*                 <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>*/
/*             </div>*/
/*             <div class="col-md-4">*/
/*                 <h2>Heading</h2>*/
/*                 <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>*/
/*                 <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>*/
/*             </div>*/
/*             <div class="col-md-4">*/
/*                 <h2>Heading</h2>*/
/*                 <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>*/
/*                 <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>*/
/*             </div>*/
/*         </div>*/
/*     {% endblock %}*/
/*     <hr>*/
/*     <footer>*/
/*         <p class="text-right">&copy; 2015 Ismael Trascastro</p>*/
/*     </footer>*/
/* </div> <!-- /container -->*/
/* */
/* {% javascripts*/
/* 'js/bootstrap.min.js'*/
/* output='js/compiled/app.js' %}*/
/* <script src="{{ asset_url }}"></script>*/
/* {% endjavascripts %}*/
/* */
/* <!-- Bootstrap core JavaScript*/
/* ================================================== -->*/
/* <!-- Placed at the end of the document so the pages load faster -->*/
/* <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>*/
/* <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>*/
/* </body>*/
/* </html>*/
