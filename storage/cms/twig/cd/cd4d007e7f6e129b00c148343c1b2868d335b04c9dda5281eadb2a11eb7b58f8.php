<?php

/* C:\laragon\www\ecole/themes/rainlab-bonjour/pages/404.htm */
class __TwigTemplate_3a984d701e863daf6290307f735e088c6562783fd16cafac862be867ddb331c0 extends Twig_Template
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
