<?php

/* C:\laragon\www\ecole/themes/simpleweb-alpha/partials/subnav.htm */
class __TwigTemplate_5ce9742fcca22484caf031c896e5609e4d2a655c3f57ba8d377582883e16cb02 extends Twig_Template
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
        // line 2
        echo "
";
        // line 3
        $context["parentOrSelf"] = ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "parent", array())) ? (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "parent", array())) : (($context["page"] ?? null)));
        // line 4
        $context["childPages"] = twig_get_attribute($this->env, $this->source, ($context["parentOrSelf"] ?? null), "children", array());
        // line 5
        echo "
<!--  <nav class=\"navbar-default\"> -->

<div class=\"row\">
    <div class=\"col-sm-2 subnav-ep\">
        <h5 class=\"head-link ";
        // line 10
        echo (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "url", array()) == twig_get_attribute($this->env, $this->source, ($context["parentOrSelf"] ?? null), "url", array()))) ? ("active") : (""));
        echo "\">
            ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["parentOrSelf"] ?? null), "title", array()), "html", null, true);
        echo "
        </h5>
    </div>
    <div class=\"col-sm-10\">
        <ul class=\"nav nav-pills pull-right\">
            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["childPages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["childPage"]) {
            if ( !twig_get_attribute($this->env, $this->source, $context["childPage"], "navigation_hidden", array())) {
                // line 17
                echo "                <li class=\"";
                echo (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "url", array()) == twig_get_attribute($this->env, $this->source, $context["childPage"], "url", array()))) ? ("active") : (""));
                echo "\">
                    <a href=\"";
                // line 18
                echo $this->extensions['System\Twig\Extension']->appFilter(twig_get_attribute($this->env, $this->source, $context["childPage"], "url", array()));
                echo "\">
                        ";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["childPage"], "title", array()), "html", null, true);
                echo "
                    </a>
                </li>
            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['childPage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "        </ul>
    </div>
</div>

<!-- </nav> -->";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\ecole/themes/simpleweb-alpha/partials/subnav.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 23,  63 => 19,  59 => 18,  54 => 17,  49 => 16,  41 => 11,  37 => 10,  30 => 5,  28 => 4,  26 => 3,  23 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Renders a menu with any child static pages #}

{% set parentOrSelf = page.parent ?: page %}
{% set childPages = parentOrSelf.children %}

<!--  <nav class=\"navbar-default\"> -->

<div class=\"row\">
    <div class=\"col-sm-2 subnav-ep\">
        <h5 class=\"head-link {{ page.url == parentOrSelf.url ? 'active' }}\">
            {{ parentOrSelf.title }}
        </h5>
    </div>
    <div class=\"col-sm-10\">
        <ul class=\"nav nav-pills pull-right\">
            {% for childPage in childPages if not childPage.navigation_hidden %}
                <li class=\"{{ page.url == childPage.url ? 'active' }}\">
                    <a href=\"{{ childPage.url|app }}\">
                        {{ childPage.title }}
                    </a>
                </li>
            {% endfor %}
        </ul>
    </div>
</div>

<!-- </nav> -->", "C:\\laragon\\www\\ecole/themes/simpleweb-alpha/partials/subnav.htm", "");
    }
}
