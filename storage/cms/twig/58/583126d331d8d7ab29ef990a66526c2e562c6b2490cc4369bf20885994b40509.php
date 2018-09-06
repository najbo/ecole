<?php

/* C:\laragon\www\ecole/themes/simpleweb-alpha/partials/menu-items.htm */
class __TwigTemplate_8506514e13b7acab1867e8f5bfd42b0f658c5a7a33d789bd534ab93331c79212 extends Twig_Template
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
        echo "<ul class=\"";
        echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
        echo "\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 3
            echo "        <li 
            class=\"";
            // line 4
            echo (((twig_get_attribute($this->env, $this->source, $context["item"], "isActive", array()) || twig_get_attribute($this->env, $this->source, $context["item"], "isChildActive", array()))) ? ("active") : (""));
            echo " 
            ";
            // line 5
            echo ((twig_get_attribute($this->env, $this->source, $context["item"], "items", array())) ? ("dropdown") : (""));
            echo "\"
        >
            <a 
                ";
            // line 8
            if (twig_get_attribute($this->env, $this->source, $context["item"], "items", array())) {
                echo "class=\"dropdown-toggle\" data-toggle=\"dropdown\"";
            }
            echo " 
                href=\"";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "url", array()), "html", null, true);
            echo "\"
            >
                ";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", array()), "html", null, true);
            echo "

                ";
            // line 13
            if (twig_get_attribute($this->env, $this->source, $context["item"], "items", array())) {
                echo "<span class=\"caret\"></span>";
            }
            // line 14
            echo "            </a>

            ";
            // line 16
            if (twig_get_attribute($this->env, $this->source, $context["item"], "items", array())) {
                // line 17
                echo "                ";
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['items'] = twig_get_attribute($this->env, $this->source, $context["item"], "items", array())                ;
                $context['__cms_partial_params']['class'] = "dropdown-menu"                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("menu-items"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 18
                echo "            ";
            }
            // line 19
            echo "        </li>
                        
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\ecole/themes/simpleweb-alpha/partials/menu-items.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 22,  81 => 19,  78 => 18,  71 => 17,  69 => 16,  65 => 14,  61 => 13,  56 => 11,  51 => 9,  45 => 8,  39 => 5,  35 => 4,  32 => 3,  28 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ul class=\"{{ class }}\">
    {% for item in items %}
        <li 
            class=\"{{ item.isActive or item.isChildActive ? 'active' : '' }} 
            {{ item.items ? 'dropdown' : '' }}\"
        >
            <a 
                {% if item.items %}class=\"dropdown-toggle\" data-toggle=\"dropdown\"{% endif %} 
                href=\"{{ item.url }}\"
            >
                {{ item.title }}

                {% if item.items %}<span class=\"caret\"></span>{% endif %}
            </a>

            {% if item.items %}
                {% partial 'menu-items' items=item.items class='dropdown-menu' %}
            {% endif %}
        </li>
                        
    {% endfor %}
</ul>", "C:\\laragon\\www\\ecole/themes/simpleweb-alpha/partials/menu-items.htm", "");
    }
}
