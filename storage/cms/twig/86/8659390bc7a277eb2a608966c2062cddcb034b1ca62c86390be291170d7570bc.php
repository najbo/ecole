<?php

/* C:\laragon\www\ecole/themes/simpleweb-alpha/pages/404.htm */
class __TwigTemplate_850831f3de232948eebb09901b7cf695fc59fe10be138f29bdf65f513b391778 extends Twig_Template
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
        echo "<section class=\"container content-margin\">
    <div class=\"box\">
        <h1 class=\"text-center\">Ouch ! Pan dans les dents... erreur 404 !</h1>
        <hr class=\"intro-divider\">
        <p class=\"text-center\">Désolé, mais la page que vous cherchez n'exite pô.</p>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\ecole/themes/simpleweb-alpha/pages/404.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"container content-margin\">
    <div class=\"box\">
        <h1 class=\"text-center\">Ouch ! Pan dans les dents... erreur 404 !</h1>
        <hr class=\"intro-divider\">
        <p class=\"text-center\">Désolé, mais la page que vous cherchez n'exite pô.</p>
    </div>
</section>", "C:\\laragon\\www\\ecole/themes/simpleweb-alpha/pages/404.htm", "");
    }
}
