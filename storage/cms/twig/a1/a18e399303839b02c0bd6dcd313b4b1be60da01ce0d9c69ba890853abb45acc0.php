<?php

/* C:\laragon\www\ecole/themes/simpleweb-alpha/partials/ep/header.htm */
class __TwigTemplate_25af29cf5c50217b79a6e889541bdae8dc5b832c72c20de52864cb31c67d2c4b extends Twig_Template
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

            <a href=\"/ep\" class=\"navbar-brand hidden-xs\">
                <img class=\"\" src=\"";
        // line 36
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/site/logo_blanc.png");
        echo "\" alt=\"\" style=\"margin-top: -5px; padding-bottom: 10px; height: 40px;\" />
            </a>
            <a class=\"navbar-brand\" style=\"padding-right: 45px;\" href=\"/ep\">Ecole primaire <span class=\"header-text\">de Tavannes</span></a>
        </div>

        <div class=\"collapse navbar-collapse navbar-main-collapse\">
            ";
        // line 42
        if (twig_get_attribute($this->env, $this->source, ($context["mainMenu"] ?? null), "menuItems", array())) {
            // line 43
            echo "                <ul class=\"nav navbar-nav\">
                    ";
            // line 44
            echo $context["nav"]->macro_render_menu(twig_get_attribute($this->env, $this->source, ($context["mainMenu"] ?? null), "menuItems", array()));
            echo "
                </ul>
            ";
        }
        // line 47
        echo "

            <ul class=\"nav navbar-nav navbar-right\">
                <li ";
        // line 50
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "layout", array()) == "ecole-primaire")) {
            echo "class=\"active-structure-ep\"";
        }
        echo "><a href=\"/ep/\">EP</a></li>
                <li ";
        // line 51
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "layout", array()) == "ecole-secondaire")) {
            echo "class=\"active\"";
        }
        echo "><a class=\"isDisabled\" href=\"/es/\">ES</a></li>
                <li ";
        // line 52
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "layout", array()) == "ecole-jc")) {
            echo "class=\"active\"";
        }
        echo "><a class=\"isDisabled\" href=\"/ejc/\">EJC</a></li>

            </ul>

<!--             <form class=\"navbar-form navbar-right\">
                ";
        // line 57
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("localePicker"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 58
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
                    echo ((twig_get_attribute($this->env, $this->source, $context["item"], "isChildActive", array())) ? ("active") : (""));
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
                    echo ((twig_get_attribute($this->env, $this->source, $context["item"], "isChildActive", array())) ? ("active") : (""));
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
        return "C:\\laragon\\www\\ecole/themes/simpleweb-alpha/partials/ep/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 21,  157 => 18,  150 => 17,  143 => 13,  137 => 10,  133 => 9,  126 => 8,  123 => 7,  119 => 6,  116 => 5,  113 => 4,  101 => 3,  94 => 58,  90 => 57,  80 => 52,  74 => 51,  68 => 50,  63 => 47,  57 => 44,  54 => 43,  52 => 42,  43 => 36,  28 => 23,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import _self as nav %}

{% macro render_menu(items) %}
    {% import _self as nav %}

    {% for item in items %}
        {% if item.items %}
            <li role=\"presentation\" class=\"dropdown {{ item.isActive ? 'active' }} {{ item.isChildActive ? 'active' }}\">
                <a href=\"{{ item.url }}\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                    {{ item.title }} <span class=\"caret\"></span>
                </a>
                <ul class=\"dropdown-menu\">
                    {{ nav.render_menu(item.items) }}
                </ul>
            </li>
        {% else %}
            <li role=\"presentation\" class=\"{{ item.isActive ? 'active' }} {{ item.isChildActive ? 'active' }}\">
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

            <a href=\"/ep\" class=\"navbar-brand hidden-xs\">
                <img class=\"\" src=\"{{ 'assets/images/site/logo_blanc.png'|theme }}\" alt=\"\" style=\"margin-top: -5px; padding-bottom: 10px; height: 40px;\" />
            </a>
            <a class=\"navbar-brand\" style=\"padding-right: 45px;\" href=\"/ep\">Ecole primaire <span class=\"header-text\">de Tavannes</span></a>
        </div>

        <div class=\"collapse navbar-collapse navbar-main-collapse\">
            {% if mainMenu.menuItems %}
                <ul class=\"nav navbar-nav\">
                    {{ nav.render_menu(mainMenu.menuItems) }}
                </ul>
            {% endif %}


            <ul class=\"nav navbar-nav navbar-right\">
                <li {% if this.page.layout == 'ecole-primaire' %}class=\"active-structure-ep\"{% endif %}><a href=\"/ep/\">EP</a></li>
                <li {% if this.page.layout == 'ecole-secondaire' %}class=\"active\"{% endif %}><a class=\"isDisabled\" href=\"/es/\">ES</a></li>
                <li {% if this.page.layout == 'ecole-jc' %}class=\"active\"{% endif %}><a class=\"isDisabled\" href=\"/ejc/\">EJC</a></li>

            </ul>

<!--             <form class=\"navbar-form navbar-right\">
                {% component 'localePicker' %}
            </form> -->
        </div>
    </div>
</nav>", "C:\\laragon\\www\\ecole/themes/simpleweb-alpha/partials/ep/header.htm", "");
    }
}
