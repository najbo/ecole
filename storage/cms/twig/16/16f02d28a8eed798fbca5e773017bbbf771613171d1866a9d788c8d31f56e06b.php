<?php

/* C:\laragon\www\ecole/themes/rainlab-bonjour/pages/404.htm */
class __TwigTemplate_b1554ee843adb109070ff49c65c2d35d3ab267d617a73cf4d7c4a4624817212b extends Twig_Template
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
        echo "<div class=\"jumbotron\">
    <div class=\"container\">
        <h1>Oooops</h1>
        <p>Désolé, la page que vous recherchez n'existe pas ou n'a pas été trouvée.</p>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\ecole/themes/rainlab-bonjour/pages/404.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"jumbotron\">
    <div class=\"container\">
        <h1>Oooops</h1>
        <p>Désolé, la page que vous recherchez n'existe pas ou n'a pas été trouvée.</p>
    </div>
</div>", "C:\\laragon\\www\\ecole/themes/rainlab-bonjour/pages/404.htm", "");
    }
}
