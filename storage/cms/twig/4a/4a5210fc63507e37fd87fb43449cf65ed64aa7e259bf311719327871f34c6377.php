<?php

/* C:\laragon\www\ecole/themes/simpleweb-alpha/pages/detail-compte-rendu.htm */
class __TwigTemplate_1efb1c6d092091441f8f593b9467551156f6904eae695aabe8b577041aec534f extends Twig_Template
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
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("publicationdetail"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\ecole/themes/simpleweb-alpha/pages/detail-compte-rendu.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% component 'publicationdetail' %}", "C:\\laragon\\www\\ecole/themes/simpleweb-alpha/pages/detail-compte-rendu.htm", "");
    }
}
