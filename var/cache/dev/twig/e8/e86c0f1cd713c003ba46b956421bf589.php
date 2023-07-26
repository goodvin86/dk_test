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

/* user/index.html.twig */
class __TwigTemplate_39b6f8cc4dd2cbbc6131151900f8076f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/index.html.twig", 1);
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

        echo "Пользователи";
        
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
        echo "
        <div class=\"h-content\">
            <div class=\"operations\">
                <a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_xlsx");
        echo "\">
                    <button class=\"button btn btn-sm\">Выгрузить в .xlsx</button>
                </a>
            </div>

            <div class=\"caption\">
                Пользователи
            </div>
            <div class=\"operations\">
                <a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_new");
        echo "\">
                    <button class=\"button btn btn-sm\">Добавить</button>
                </a>
            </div>
        </div>

        <div class=\"table_div\">
            <div class=\"thead_div\">
                <div class=\"row_div\">
                    <div class=\"cell_thead_div_id\">Id</div>
                    <div class=\"cell_thead_div\">Фамилия</div>
                    <div class=\"cell_thead_div\">Имя</div>
                    <div class=\"cell_thead_div\">Отчество</div>
                    <div class=\"cell_thead_div\">Дата рождения</div>
                    <div class=\"cell_thead_div\">Город</div>
                    <div class=\"cell_thead_div\">Погода в городе</div>
                    <div class=\"cell_thead_div\">Роль</div>
                    <div class=\"cell_thead_div_oper\">Операции</div>
                </div>
            </div>

            <div class=\"tbody_div\">
                ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 40, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 41
            echo "                    <div class=\"row_div\" id=\"row_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 41), "html", null, true);
            echo "\">
                        <div class=\"cell_thead_div_id\">";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 42), "html", null, true);
            echo "</div>
                        <div class=\"cell_thead_div\">";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "lastname", [], "any", false, false, false, 43), "html", null, true);
            echo "</div>
                        <div class=\"cell_thead_div\">";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "firstname", [], "any", false, false, false, 44), "html", null, true);
            echo "</div>
                        <div class=\"cell_thead_div\">";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "patronymic", [], "any", false, false, false, 45), "html", null, true);
            echo "</div>
                        <div class=\"cell_thead_div\">";
            // line 46
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "birthday", [], "any", false, false, false, 46), "d.m.Y"), "html", null, true);
            echo "</div>
                        <div class=\"cell_thead_div\">";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "city", [], "any", false, false, false, 47), "html", null, true);
            echo "</div>
                        <div class=\"cell_thead_div\">";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "weather", [], "any", false, false, false, 48), "html", null, true);
            echo "</div>
                        <div class=\"cell_thead_div\">";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "role", [], "any", false, false, false, 49), "html", null, true);
            echo "</div>
                        <div class=\"cell_div_oper\">
                            <div>
                                <a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 52)]), "html", null, true);
            echo "\">
                                    <button class=\"btn btn-secondary btn-sm button_edit\">Изменить</button>
                                </a>
                            </div>
                            <div ";
            // line 56
            echo $this->extensions['Symfony\UX\StimulusBundle\Twig\StimulusTwigExtension']->renderStimulusController("submit-confirm-jq", ["title" => "Удалить пользователя?", "text" => twig_get_attribute($this->env, $this->source,             // line 58
$context["user"], "lastname", [], "any", false, false, false, 58), "formUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_delete", ["id" => twig_get_attribute($this->env, $this->source,             // line 59
$context["user"], "id", [], "any", false, false, false, 59)])]);
            // line 60
            echo ">
                                <button
                                        class=\"btn btn-secondary btn-sm button_delete\"
                                        data-action=\"submit-confirm-jq#onSubmit\">
                                    Удалить
                                </button>
                            </div>
                        </div>
                    </div>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 70
            echo "                    <div class=\"row_empty\">
                        Записи не найдены
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "            </div>



        </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 74,  199 => 70,  185 => 60,  183 => 59,  182 => 58,  181 => 56,  174 => 52,  168 => 49,  164 => 48,  160 => 47,  156 => 46,  152 => 45,  148 => 44,  144 => 43,  140 => 42,  135 => 41,  130 => 40,  105 => 18,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Пользователи{% endblock %}

{% block body %}

        <div class=\"h-content\">
            <div class=\"operations\">
                <a href=\"{{ path('app_user_xlsx') }}\">
                    <button class=\"button btn btn-sm\">Выгрузить в .xlsx</button>
                </a>
            </div>

            <div class=\"caption\">
                Пользователи
            </div>
            <div class=\"operations\">
                <a href=\"{{ path('app_user_new') }}\">
                    <button class=\"button btn btn-sm\">Добавить</button>
                </a>
            </div>
        </div>

        <div class=\"table_div\">
            <div class=\"thead_div\">
                <div class=\"row_div\">
                    <div class=\"cell_thead_div_id\">Id</div>
                    <div class=\"cell_thead_div\">Фамилия</div>
                    <div class=\"cell_thead_div\">Имя</div>
                    <div class=\"cell_thead_div\">Отчество</div>
                    <div class=\"cell_thead_div\">Дата рождения</div>
                    <div class=\"cell_thead_div\">Город</div>
                    <div class=\"cell_thead_div\">Погода в городе</div>
                    <div class=\"cell_thead_div\">Роль</div>
                    <div class=\"cell_thead_div_oper\">Операции</div>
                </div>
            </div>

            <div class=\"tbody_div\">
                {% for user in users %}
                    <div class=\"row_div\" id=\"row_{{ user.id }}\">
                        <div class=\"cell_thead_div_id\">{{ user.id }}</div>
                        <div class=\"cell_thead_div\">{{ user.lastname }}</div>
                        <div class=\"cell_thead_div\">{{ user.firstname }}</div>
                        <div class=\"cell_thead_div\">{{ user.patronymic }}</div>
                        <div class=\"cell_thead_div\">{{ user.birthday|date('d.m.Y') }}</div>
                        <div class=\"cell_thead_div\">{{ user.city }}</div>
                        <div class=\"cell_thead_div\">{{ user.weather }}</div>
                        <div class=\"cell_thead_div\">{{ user.role }}</div>
                        <div class=\"cell_div_oper\">
                            <div>
                                <a href=\"{{ path('app_user_edit', {'id': user.id}) }}\">
                                    <button class=\"btn btn-secondary btn-sm button_edit\">Изменить</button>
                                </a>
                            </div>
                            <div {{ stimulus_controller('submit-confirm-jq', {
                                title: \"Удалить пользователя?\",
                                text: user.lastname,
                                formUrl: path('app_user_delete', {'id': user.id})
                            }) }}>
                                <button
                                        class=\"btn btn-secondary btn-sm button_delete\"
                                        data-action=\"submit-confirm-jq#onSubmit\">
                                    Удалить
                                </button>
                            </div>
                        </div>
                    </div>
                {% else %}
                    <div class=\"row_empty\">
                        Записи не найдены
                    </div>
                {% endfor %}
            </div>



        </div>

{% endblock %}
", "user/index.html.twig", "/var/www/templates/user/index.html.twig");
    }
}
