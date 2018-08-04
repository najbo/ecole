<?php

/* C:\laragon\www\ecole/themes/rainlab-bonjour/layouts/default.htm */
class __TwigTemplate_c370f5a2b900ee68572dcc1381fe7cfd0d31f6c33d02db634b28f46a589970cf extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
    <head>
        ";
        // line 4
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/meta"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 5
        echo "    </head>
    <body>

        <!-- Header -->
        <header id=\"layout-header\">
        </header>

        <!-- Nav -->
        ";
        // line 13
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/nav"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 14
        echo "
        <!-- Content -->
        <section id=\"layout-content\">
            ";
        // line 17
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 18
        echo "        </section>

        <!-- Help Popups -->
        ";
        // line 21
        $context['__placeholder_help_default_contents'] = null;        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('help', $context['__placeholder_help_default_contents']);
        unset($context['__placeholder_help_default_contents']);        // line 22
        echo "
        <!-- Scripts -->
        ";
        // line 24
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/scripts"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 25
        echo "
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\ecole/themes/rainlab-bonjour/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 25,  64 => 24,  60 => 22,  58 => 21,  53 => 18,  51 => 17,  46 => 14,  42 => 13,  32 => 5,  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        {% partial 'site/meta' %}
    </head>
    <body>

        <!-- Header -->
        <header id=\"layout-header\">
        </header>

        <!-- Nav -->
        {% partial 'site/nav' %}

        <!-- Content -->
        <section id=\"layout-content\">
            {% page %}
        </section>

        <!-- Help Popups -->
        {% placeholder help %}

        <!-- Scripts -->
        {% partial 'site/scripts' %}

    </body>
</html>", "C:\\laragon\\www\\ecole/themes/rainlab-bonjour/layouts/default.htm", "");
    }
}
