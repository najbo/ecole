<?php

/* C:\laragon\www\ecole/themes/simpleweb-alpha/partials/header.htm */
class __TwigTemplate_84be53cb7559e18330be951ec86f9fe2d6ae1213623ae992b6919a14f42506ff extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["nav"] = $this;
        // line 2
        echo "
";
        // line 23
        echo "

<nav class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">

            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>

            <a class=\"navbar-brand\" href=\"/ep\">Ecoles <span class=\"header-text\">de Tavannes</span></a>
        </div>

        <div class=\"collapse navbar-collapse navbar-main-collapse\">
            ";
        // line 39
        if (twig_get_attribute($this->env, $this->source, ($context["mainMenu"] ?? null), "menuItems", array())) {
            // line 40
            echo "                <ul class=\"nav navbar-nav navbar-right\">
                    ";
            // line 41
            echo $context["nav"]->macro_render_menu(twig_get_attribute($this->env, $this->source, ($context["mainMenu"] ?? null), "menuItems", array()));
            echo "
                </ul>
            ";
        }
        // line 44
        echo "



<!--             <form class=\"navbar-form navbar-right\">
                ";
        // line 49
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("localePicker"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 50
        echo "            </form> -->
        </div>
    </div>
</nav>";
    }

    // line 3
    public function macro_render_menu($__items__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "items" => $__items__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 4
            echo "    ";
            $context["nav"] = $this;
            // line 5
            echo "
    ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 7
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, $context["item"], "items", array())) {
                    // line 8
                    echo "            <li role=\"presentation\" class=\"dropdown ";
                    echo ((twig_get_attribute($this->env, $this->source, $context["item"], "isActive", array())) ? ("active") : (""));
                    echo " ";
                    echo ((twig_get_attribute($this->env, $this->source, $context["item"], "isChildActive", array())) ? ("child-active") : (""));
                    echo "\">
                <a href=\"";
                    // line 9
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "url", array()), "html", null, true);
                    echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                    ";
                    // line 10
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", array()), "html", null, true);
                    echo " <span class=\"caret\"></span>
                </a>
                <ul class=\"dropdown-menu\">
                    ";
                    // line 13
                    echo $context["nav"]->macro_render_menu(twig_get_attribute($this->env, $this->source, $context["item"], "items", array()));
                    echo "
                </ul>
            </li>
        ";
                } else {
                    // line 17
                    echo "            <li role=\"presentation\" class=\"";
                    echo ((twig_get_attribute($this->env, $this->source, $context["item"], "isActive", array())) ? ("active") : (""));
                    echo " ";
                    echo ((twig_get_attribute($this->env, $this->source, $context["item"], "isChildActive", array())) ? ("child-active") : (""));
                    echo "\">
                <a href=\"";
                    // line 18
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "url", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", array()), "html", null, true);
                    echo "</a>
            </li>
        ";
                }
                // line 21
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\ecole/themes/simpleweb-alpha/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 21,  131 => 18,  124 => 17,  117 => 13,  111 => 10,  107 => 9,  100 => 8,  97 => 7,  93 => 6,  90 => 5,  87 => 4,  75 => 3,  68 => 50,  64 => 49,  57 => 44,  51 => 41,  48 => 40,  46 => 39,  28 => 23,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import _self as nav %}

{% macro render_menu(items) %}
    {% import _self as nav %}

    {% for item in items %}
        {% if item.items %}
            <li role=\"presentation\" class=\"dropdown {{ item.isActive ? 'active' }} {{ item.isChildActive ? 'child-active' }}\">
                <a href=\"{{ item.url }}\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                    {{ item.title }} <span class=\"caret\"></span>
                </a>
                <ul class=\"dropdown-menu\">
                    {{ nav.render_menu(item.items) }}
                </ul>
            </li>
        {% else %}
            <li role=\"presentation\" class=\"{{ item.isActive ? 'active' }} {{ item.isChildActive ? 'child-active' }}\">
                <a href=\"{{ item.url }}\">{{ item.title }}</a>
            </li>
        {% endif %}
    {% endfor %}
{% endmacro %}


<nav class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">

            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>

            <a class=\"navbar-brand\" href=\"/ep\">Ecoles <span class=\"header-text\">de Tavannes</span></a>
        </div>

        <div class=\"collapse navbar-collapse navbar-main-collapse\">
            {% if mainMenu.menuItems %}
                <ul class=\"nav navbar-nav navbar-right\">
                    {{ nav.render_menu(mainMenu.menuItems) }}
                </ul>
            {% endif %}




<!--             <form class=\"navbar-form navbar-right\">
                {% component 'localePicker' %}
            </form> -->
        </div>
    </div>
</nav>", "C:\\laragon\\www\\ecole/themes/simpleweb-alpha/partials/header.htm", "");
    }
}
