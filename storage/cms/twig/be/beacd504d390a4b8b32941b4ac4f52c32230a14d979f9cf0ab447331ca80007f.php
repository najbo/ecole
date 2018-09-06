<?php

/* C:\laragon\www\ecole/plugins/jan/ecole/components/publications/default.htm */
class __TwigTemplate_323ec230b1463be05df2dd49041f6e0b05705cf81a585c7007975e0d54cef449 extends Twig_Template
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
        $context["publications"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "publications", array());
        // line 2
        $context["publicationPage"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", array(0 => "publicationPage"), "method");
        // line 3
        $context["publicationAllPage"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", array(0 => "publicationAllPage"), "method");
        // line 4
        $context["detailsUrlParameter"] = "id";
        // line 5
        $context["detailsKeyColumn"] = "id";
        // line 6
        echo "
<!-- ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", array(0 => "type"), "method"), "html", null, true);
        echo " -->

";
        // line 9
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['publications'] =         // line 10
($context["publications"] ?? null)        ;
        $context['__cms_partial_params']['publicationPage'] =         // line 11
($context["publicationPage"] ?? null)        ;
        $context['__cms_partial_params']['publicationAllPage'] =         // line 12
($context["publicationAllPage"] ?? null)        ;
        $context['__cms_partial_params']['detailsUrlParameter'] =         // line 13
($context["detailsUrlParameter"] ?? null)        ;
        $context['__cms_partial_params']['detailsKeyColumn'] =         // line 14
($context["detailsKeyColumn"] ?? null)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("publications/publications"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 16
        echo "


";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\ecole/plugins/jan/ecole/components/publications/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 16,  51 => 14,  49 => 13,  47 => 12,  45 => 11,  43 => 10,  41 => 9,  36 => 7,  33 => 6,  31 => 5,  29 => 4,  27 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set publications = __SELF__.publications %}
{% set publicationPage = __SELF__.property('publicationPage') %}
{% set publicationAllPage = __SELF__.property('publicationAllPage') %}
{% set detailsUrlParameter = 'id' %}
{% set detailsKeyColumn = 'id' %}

<!-- {{ __SELF__.property('type') }} -->

{% partial \"publications/publications\" 
                publications=publications
                publicationPage=publicationPage
                publicationAllPage=publicationAllPage
                detailsUrlParameter=detailsUrlParameter
                detailsKeyColumn=detailsKeyColumn
      %}



", "C:\\laragon\\www\\ecole/plugins/jan/ecole/components/publications/default.htm", "");
    }
}
