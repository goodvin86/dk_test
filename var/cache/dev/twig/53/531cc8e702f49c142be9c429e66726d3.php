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

/* user/form.html.twig */
class __TwigTemplate_23ce55580df27c0b3e962e5db7237e02 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/form.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/form.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Пользователь";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"h-content h-content-form\">
        <div class=\"caption\">
            ";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "
        </div>
    </div>
    <div class=\"edit-content\">
        <div class=\"form\">
            ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), 'form_start');
        echo "
            <div class=\"form-row\">
                <div class=\"input-label-form\">Фамилия</div>
                <div class=\"input-form\"> ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "lastname", [], "any", false, false, false, 16), 'row', ["label" => " "]);
        echo "</div>
            </div>
            <div class=\"form-row\">
                <div class=\"input-label-form\">Имя</div>
                <div class=\"input-form\"> ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "firstname", [], "any", false, false, false, 20), 'row', ["label" => " "]);
        echo "</div>
            </div>
            <div class=\"form-row\">
                <div class=\"input-label-form\">Отчество</div>
                <div class=\"input-form \"> ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "patronymic", [], "any", false, false, false, 24), 'row', ["label" => " "]);
        echo "</div>
            </div>
            <div class=\"form-row\">
                <div class=\"input-label-form\">Дата рождения</div>
                <div class=\"input-form \"> ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "birthday", [], "any", false, false, false, 28), 'row', ["label" => " "]);
        echo "</div>
            </div>
            <div class=\"form-row\">
                <div class=\"input-label-form\">Город</div>
                <div class=\"input-form \"> ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "city", [], "any", false, false, false, 32), 'row', ["label" => " "]);
        echo "</div>
            </div>
            <div class=\"form-row\">
                <div class=\"input-label-form\">Роль</div>
                <div class=\"input-form \"> ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "role", [], "any", false, false, false, 36), 'row', ["label" => " "]);
        echo "</div>
            </div>

            <div class=\"form-row-button\">
                <button type=\"submit\" class=\"btn btn-sm button-save\">Сохранить</button>
                 <a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user");
        echo "\">
                    <button type=\"button\" class=\"btn btn-sm button-cancel\">Отмена</button>
                 </a>
            ";
        // line 44
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), 'form_end');
        echo "
            </div>
        </div>
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "user/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 44,  149 => 41,  141 => 36,  134 => 32,  127 => 28,  120 => 24,  113 => 20,  106 => 16,  100 => 13,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Пользователь{% endblock %}

{% block body %}
    <div class=\"h-content h-content-form\">
        <div class=\"caption\">
            {{ title }}
        </div>
    </div>
    <div class=\"edit-content\">
        <div class=\"form\">
            {{ form_start(form) }}
            <div class=\"form-row\">
                <div class=\"input-label-form\">Фамилия</div>
                <div class=\"input-form\"> {{ form_row(form.lastname, {'label': ' '}) }}</div>
            </div>
            <div class=\"form-row\">
                <div class=\"input-label-form\">Имя</div>
                <div class=\"input-form\"> {{ form_row(form.firstname, {'label': ' '}) }}</div>
            </div>
            <div class=\"form-row\">
                <div class=\"input-label-form\">Отчество</div>
                <div class=\"input-form \"> {{ form_row(form.patronymic, {'label': ' '}) }}</div>
            </div>
            <div class=\"form-row\">
                <div class=\"input-label-form\">Дата рождения</div>
                <div class=\"input-form \"> {{ form_row(form.birthday, {'label': ' '}) }}</div>
            </div>
            <div class=\"form-row\">
                <div class=\"input-label-form\">Город</div>
                <div class=\"input-form \"> {{ form_row(form.city, {'label': ' '}) }}</div>
            </div>
            <div class=\"form-row\">
                <div class=\"input-label-form\">Роль</div>
                <div class=\"input-form \"> {{ form_row(form.role, {'label': ' '}) }}</div>
            </div>

            <div class=\"form-row-button\">
                <button type=\"submit\" class=\"btn btn-sm button-save\">Сохранить</button>
                 <a href=\"{{ path('app_user')}}\">
                    <button type=\"button\" class=\"btn btn-sm button-cancel\">Отмена</button>
                 </a>
            {{ form_end(form) }}
            </div>
        </div>
    </div>

{% endblock %}", "user/form.html.twig", "/var/www/templates/user/form.html.twig");
    }
}
