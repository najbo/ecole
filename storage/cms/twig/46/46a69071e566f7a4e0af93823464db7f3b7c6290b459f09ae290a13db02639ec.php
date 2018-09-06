<?php

/* C:\laragon\www\ecole/themes/simpleweb-alpha/partials/header-static.htm */
class __TwigTemplate_5a676df19a9e866e90d67eb096e7cb92e9e3d5c9a4d726637f78e1a1dbf04d11 extends Twig_Template
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
        // line 22
        echo "


<nav class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\">

    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            
            <a class=\"navbar-brand\" href=\"";
        // line 35
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">Ecole primaire <span class=\"header-text\">de Tavannes</span></a>
            
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse navbar-main-collapse\">
            ";
        // line 39
        if (twig_get_attribute($this->env, $this->source, ($context["mainMenu"] ?? null), "menuItems", array())) {
            // line 40
            echo "                <ul class=\"nav navbar-nav\">
                    ";
            // line 41
            echo $context["nav"]->macro_render_menu(twig_get_attribute($this->env, $this->source, ($context["mainMenu"] ?? null), "menuItems", array()));
            echo "
                </ul>
            ";
        }
        // line 44
        echo "            <ul class=\"nav navbar-nav navbar-right\">
                <li>
                    <a href=\"javascript:toggleHelp('#localeHelp')\">
                        <i class=\"icon-question-sign hidden-xs\"></i>
                        <span class=\"visible-xs\">";
        // line 48
        echo "Help";
        echo "</span>
                    </a>
                </li>
            </ul>
            <form class=\"navbar-form navbar-right\">
                ";
        // line 53
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("localePicker"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 54
        echo "            </form>
        </div>
    </div>
</nav>











<nav class=\"navbar navbar-default navbar-fixed-top\">
    <div class=\"container\">
        <div class=\"navbar-header\">
        
        
            <!--/ Boutons à droite si écran trop petit -->
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            
            
            <a class=\"navbar-brand\" href=\"";
        // line 83
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">Ecole primaire <span class=\"header-text\">de Tavannes</span></a>
          </div>
          
          
          
          <div id=\"navbar\" class=\"collapse navbar-collapse\">
            <ul class=\"nav navbar-nav navbar\">
                <li class=\"active\"><a href=\"";
        // line 90
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">Accueil</a></li>
                <li><a href=\"";
        // line 91
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("elements");
        echo "\">Elements</a></li>
                <li><a href=\"";
        // line 92
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("generic");
        echo "\">Notre école</a></li>
                <li class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Dropdown <span class=\"caret\"></span></a>
                <ul class=\"dropdown-menu\">
                    <li><a href=\"#\">Dirigeants</a></li>
                    <li><a href=\"#\">Enseignants</a></li>
                    <li><a href=\"#\">Lorem Ipsum</a></li>
                    <li><a href=\"#\">Lorem Ipsum</a></li>
                    <li role=\"separator\" class=\"divider\"></li>
                    <li><a href=\"#\">Lorem Ipsum</a></li>
                    <li role=\"separator\" class=\"divider\"></li>
                    <li><a href=\"#\">Lorem Ipsum</a></li>
                </ul>
              </li>
              <li><a href=\"";
        // line 106
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("portfolio");
        echo "\">Portfolio</a></li>
              <li><a href=\"";
        // line 107
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\">Contact</a></li>
              
              
              
              
            </ul>
            
                              <ul class=\"nav navbar-nav navbar-right\">
                                <li><a href=\"#\">EP</a></li>
                                <li><a href=\"#\">ES</a></li>
                                <li><a href=\"#\">EJC</a></li>

                            </ul>
            
            
            
        </div><!--/.nav-collapse -->
        
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
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 6
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, $context["item"], "items", array())) {
                    // line 7
                    echo "            <li role=\"presentation\" class=\"dropdown ";
                    echo ((twig_get_attribute($this->env, $this->source, $context["item"], "isActive", array())) ? ("active") : (""));
                    echo " ";
                    echo ((twig_get_attribute($this->env, $this->source, $context["item"], "isChildActive", array())) ? ("child-active") : (""));
                    echo "\">
                <a href=\"";
                    // line 8
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "url", array()), "html", null, true);
                    echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                    ";
                    // line 9
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", array()), "html", null, true);
                    echo " <span class=\"caret\"></span>
                </a>
                <ul class=\"dropdown-menu\">
                    ";
                    // line 12
                    echo $context["nav"]->macro_render_menu(twig_get_attribute($this->env, $this->source, $context["item"], "items", array()));
                    echo "
                </ul>
            </li>
        ";
                } else {
                    // line 16
                    echo "            <li role=\"presentation\" class=\"";
                    echo ((twig_get_attribute($this->env, $this->source, $context["item"], "isActive", array())) ? ("active") : (""));
                    echo " ";
                    echo ((twig_get_attribute($this->env, $this->source, $context["item"], "isChildActive", array())) ? ("child-active") : (""));
                    echo "\">
                <a href=\"";
                    // line 17
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "url", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", array()), "html", null, true);
                    echo "</a>
            </li>
        ";
                }
                // line 20
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
        return "C:\\laragon\\www\\ecole/themes/simpleweb-alpha/partials/header-static.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 20,  228 => 17,  221 => 16,  214 => 12,  208 => 9,  204 => 8,  197 => 7,  194 => 6,  189 => 5,  186 => 4,  174 => 3,  149 => 107,  145 => 106,  128 => 92,  124 => 91,  120 => 90,  110 => 83,  79 => 54,  75 => 53,  67 => 48,  61 => 44,  55 => 41,  52 => 40,  50 => 39,  43 => 35,  28 => 22,  25 => 2,  23 => 1,);
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
            
            <a class=\"navbar-brand\" href=\"{{ 'home'|page }}\">Ecole primaire <span class=\"header-text\">de Tavannes</span></a>
            
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse navbar-main-collapse\">
            {% if mainMenu.menuItems %}
                <ul class=\"nav navbar-nav\">
                    {{ nav.render_menu(mainMenu.menuItems) }}
                </ul>
            {% endif %}
            <ul class=\"nav navbar-nav navbar-right\">
                <li>
                    <a href=\"javascript:toggleHelp('#localeHelp')\">
                        <i class=\"icon-question-sign hidden-xs\"></i>
                        <span class=\"visible-xs\">{{ 'Help' }}</span>
                    </a>
                </li>
            </ul>
            <form class=\"navbar-form navbar-right\">
                {% component 'localePicker' %}
            </form>
        </div>
    </div>
</nav>











<nav class=\"navbar navbar-default navbar-fixed-top\">
    <div class=\"container\">
        <div class=\"navbar-header\">
        
        
            <!--/ Boutons à droite si écran trop petit -->
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            
            
            <a class=\"navbar-brand\" href=\"{{ 'home'|page }}\">Ecole primaire <span class=\"header-text\">de Tavannes</span></a>
          </div>
          
          
          
          <div id=\"navbar\" class=\"collapse navbar-collapse\">
            <ul class=\"nav navbar-nav navbar\">
                <li class=\"active\"><a href=\"{{ 'home'|page }}\">Accueil</a></li>
                <li><a href=\"{{ 'elements'|page }}\">Elements</a></li>
                <li><a href=\"{{ 'generic'|page }}\">Notre école</a></li>
                <li class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Dropdown <span class=\"caret\"></span></a>
                <ul class=\"dropdown-menu\">
                    <li><a href=\"#\">Dirigeants</a></li>
                    <li><a href=\"#\">Enseignants</a></li>
                    <li><a href=\"#\">Lorem Ipsum</a></li>
                    <li><a href=\"#\">Lorem Ipsum</a></li>
                    <li role=\"separator\" class=\"divider\"></li>
                    <li><a href=\"#\">Lorem Ipsum</a></li>
                    <li role=\"separator\" class=\"divider\"></li>
                    <li><a href=\"#\">Lorem Ipsum</a></li>
                </ul>
              </li>
              <li><a href=\"{{ 'portfolio'|page }}\">Portfolio</a></li>
              <li><a href=\"{{ 'contact'|page }}\">Contact</a></li>
              
              
              
              
            </ul>
            
                              <ul class=\"nav navbar-nav navbar-right\">
                                <li><a href=\"#\">EP</a></li>
                                <li><a href=\"#\">ES</a></li>
                                <li><a href=\"#\">EJC</a></li>

                            </ul>
            
            
            
        </div><!--/.nav-collapse -->
        
    </div>

</nav>", "C:\\laragon\\www\\ecole/themes/simpleweb-alpha/partials/header-static.htm", "");
    }
}
