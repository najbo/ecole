<?php

/* C:\laragon\www\ecole/themes/simpleweb-alpha/partials/meta.htm */
class __TwigTemplate_9027f79a58e42ecb3d8dfd450edf223713d05f3f169b8a171b83baf96926dde5 extends Twig_Template
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
        echo "<meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo " | October CMS</title>
        <meta name=\"author\" content=\"Jan Boesch - digital-artisan.ch\">
        <meta name=\"keywords\" content=\"école, primaire, secondaire, écoles, Tavannes, Jura, bernois, formation, journée, continue, ejc, élèves, enseignement, cours, classe, volées, archives\">
        <meta name=\"description\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "meta_description", array()), "html", null, true);
        echo "\">
        <meta name=\"title\" content=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "meta_title", array()), "html", null, true);
        echo "\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/october.png");
        echo "\" />
        ";
        // line 11
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 12
        echo "        <link href=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter(array(0 => "assets/css/bootstrap.css", 1 => "assets/source/styles.less"));
        // line 15
        echo "\" rel=\"stylesheet\">

        <!-- http://fancyapps.com/fancybox/3/ -->
        <script src=\"//code.jquery.com/jquery-3.3.1.min.js\"></script>

        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.4.1/jquery.fancybox.min.css\" />
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.4.1/jquery.fancybox.min.js\"></script>";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\ecole/themes/simpleweb-alpha/partials/meta.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 15,  50 => 12,  47 => 11,  43 => 10,  39 => 9,  35 => 8,  29 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>{{ this.page.title }} | October CMS</title>
        <meta name=\"author\" content=\"Jan Boesch - digital-artisan.ch\">
        <meta name=\"keywords\" content=\"école, primaire, secondaire, écoles, Tavannes, Jura, bernois, formation, journée, continue, ejc, élèves, enseignement, cours, classe, volées, archives\">
        <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
        <meta name=\"title\" content=\"{{ this.page.meta_title }}\">
        <link rel=\"icon\" type=\"image/png\" href=\"{{ 'assets/images/october.png'|theme }}\" />
        {% styles %}
        <link href=\"{{ [
            'assets/css/bootstrap.css',
            'assets/source/styles.less'
        ]|theme }}\" rel=\"stylesheet\">

        <!-- http://fancyapps.com/fancybox/3/ -->
        <script src=\"//code.jquery.com/jquery-3.3.1.min.js\"></script>

        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.4.1/jquery.fancybox.min.css\" />
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.4.1/jquery.fancybox.min.js\"></script>", "C:\\laragon\\www\\ecole/themes/simpleweb-alpha/partials/meta.htm", "");
    }
}
