<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @BWActiveMenuItem/Demo/index.html.twig */
class __TwigTemplate_a00ad3df6064540e2c2919536f2fe2bd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@BWActiveMenuItem/Demo/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@BWActiveMenuItem/Demo/index.html.twig"));

        $this->parent = $this->loadTemplate("::base.html.twig", "@BWActiveMenuItem/Demo/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <style>
        .current.active > a {
            color: #148B14;
        }
        .active > a {
            color: #AD3737;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 14
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "    <h1>BWActiveMenuItemBundle</h1>
    <p>
        This is a demo page of <i>BWActiveMenuItemBundle</i> with simple example of usage. <br/>
        Do <b>not</b> include this router file in production!
    </p>

    <div>
        Code of this demo page in:
        <pre>BWActiveMenuItemBundle:Demo:index.html.twig</pre>
    </div>

    <h2>Demo Simple HTML Menu</h2>
    <ul>
        <li class=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['BW\ActiveMenuItemBundle\Twig\BWExtension']->isActiveFilter("bw_active_menu_item_index"), "html", null, true);
        echo "\">
            <a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bw_active_menu_item_index");
        echo "\">Home</a>
        </li>
        <li class=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['BW\ActiveMenuItemBundle\Twig\BWExtension']->isActiveFunction([0 => "bw_active_menu_item_video", 1 => "bw_active_menu_item_tragedy", 2 => "bw_active_menu_item_comedy", 3 => "bw_active_menu_item_tragicomedy", 4 => "bw_active_menu_item_audio"], "bw_active_menu_item_catalog"), "html", null, true);
        // line 37
        echo "\">
            <a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bw_active_menu_item_catalog");
        echo "\">Catalog</a>
            <ul>
                <li class=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['BW\ActiveMenuItemBundle\Twig\BWExtension']->isActiveFunction([0 => "bw_active_menu_item_tragedy", 1 => "bw_active_menu_item_comedy", 2 => "bw_active_menu_item_tragicomedy"], "bw_active_menu_item_video"), "html", null, true);
        // line 44
        echo "\">
                    <a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bw_active_menu_item_video");
        echo "\">Video</a>
                    <ul>
                        <li class=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['BW\ActiveMenuItemBundle\Twig\BWExtension']->isActiveFilter("bw_active_menu_item_tragedy"), "html", null, true);
        echo "\">
                            <a href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bw_active_menu_item_tragedy");
        echo "\">Tragedy</a>
                        </li>
                        <li class=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['BW\ActiveMenuItemBundle\Twig\BWExtension']->isActiveFilter("bw_active_menu_item_comedy"), "html", null, true);
        echo "\">
                            <a href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bw_active_menu_item_comedy");
        echo "\">Comedy</a>
                        </li>
                        <li class=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['BW\ActiveMenuItemBundle\Twig\BWExtension']->isActiveFilter("bw_active_menu_item_tragicomedy"), "html", null, true);
        echo "\">
                            <a href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bw_active_menu_item_tragicomedy");
        echo "\">Tragicomedy</a>
                        </li>
                    </ul>
                </li>
                <li class=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['BW\ActiveMenuItemBundle\Twig\BWExtension']->isActiveFilter("bw_active_menu_item_audio"), "html", null, true);
        echo "\">
                    <a href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bw_active_menu_item_audio");
        echo "\">Audio</a>
                </li>
            </ul>
        </li>
    </ul>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@BWActiveMenuItem/Demo/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 59,  170 => 58,  163 => 54,  159 => 53,  154 => 51,  150 => 50,  145 => 48,  141 => 47,  136 => 45,  133 => 44,  131 => 40,  126 => 38,  123 => 37,  121 => 31,  116 => 29,  112 => 28,  97 => 15,  87 => 14,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '::base.html.twig' %}

{% block stylesheets %}
    <style>
        .current.active > a {
            color: #148B14;
        }
        .active > a {
            color: #AD3737;
        }
    </style>
{% endblock %}

{% block body %}
    <h1>BWActiveMenuItemBundle</h1>
    <p>
        This is a demo page of <i>BWActiveMenuItemBundle</i> with simple example of usage. <br/>
        Do <b>not</b> include this router file in production!
    </p>

    <div>
        Code of this demo page in:
        <pre>BWActiveMenuItemBundle:Demo:index.html.twig</pre>
    </div>

    <h2>Demo Simple HTML Menu</h2>
    <ul>
        <li class=\"{{ 'bw_active_menu_item_index'|is_active }}\">
            <a href=\"{{ path('bw_active_menu_item_index') }}\">Home</a>
        </li>
        <li class=\"{{ is_active([
            'bw_active_menu_item_video',
            'bw_active_menu_item_tragedy',
            'bw_active_menu_item_comedy',
            'bw_active_menu_item_tragicomedy',
            'bw_active_menu_item_audio',
        ], 'bw_active_menu_item_catalog') }}\">
            <a href=\"{{ path('bw_active_menu_item_catalog') }}\">Catalog</a>
            <ul>
                <li class=\"{{ is_active([
                    'bw_active_menu_item_tragedy',
                    'bw_active_menu_item_comedy',
                    'bw_active_menu_item_tragicomedy',
                ], 'bw_active_menu_item_video') }}\">
                    <a href=\"{{ path('bw_active_menu_item_video') }}\">Video</a>
                    <ul>
                        <li class=\"{{ 'bw_active_menu_item_tragedy'|is_active }}\">
                            <a href=\"{{ path('bw_active_menu_item_tragedy') }}\">Tragedy</a>
                        </li>
                        <li class=\"{{ 'bw_active_menu_item_comedy'|is_active }}\">
                            <a href=\"{{ path('bw_active_menu_item_comedy') }}\">Comedy</a>
                        </li>
                        <li class=\"{{ 'bw_active_menu_item_tragicomedy'|is_active }}\">
                            <a href=\"{{ path('bw_active_menu_item_tragicomedy') }}\">Tragicomedy</a>
                        </li>
                    </ul>
                </li>
                <li class=\"{{ 'bw_active_menu_item_audio'|is_active }}\">
                    <a href=\"{{ path('bw_active_menu_item_audio') }}\">Audio</a>
                </li>
            </ul>
        </li>
    </ul>
{% endblock %}", "@BWActiveMenuItem/Demo/index.html.twig", "/var/www/vendor/bw/active-menu-item-bundle/src/Resources/views/Demo/index.html.twig");
    }
}
