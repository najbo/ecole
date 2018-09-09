<?php

/* C:\laragon\www\ecole/themes/simpleweb-alpha/layouts/ecole-primaire.htm */
class __TwigTemplate_393af3feb87fa7a6a71d49dfd299416da4c9cf0cb9317b1858926685bcece374 extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("meta"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 5
        echo "    </head>
    <body>
        ";
        // line 7
        $context["hasChildren"] = twig_get_attribute($this->env, $this->source, ((twig_get_attribute($this->env, $this->source, ($context["staticPage"] ?? null), "parent", array())) ? (twig_get_attribute($this->env, $this->source, ($context["staticPage"] ?? null), "parent", array())) : (twig_get_attribute($this->env, $this->source, ($context["staticPage"] ?? null), "page", array()))), "children", array());
        // line 8
        echo "
        <!-- Header -->
        <header id=\"main-header\">
            
            ";
        // line 12
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("ep/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 13
        echo "            
        </header>

        <!-- Content -->
        
        <section class=\"container content-margin\">


        ";
        // line 21
        if (($context["hasChildren"] ?? null)) {
            // line 22
            echo "            <div id=\"layout-subnav\">
                <div class=\"container\">
                    ";
            // line 24
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['page'] = twig_get_attribute($this->env, $this->source, ($context["staticPage"] ?? null), "page", array())            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("subnav"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 25
            echo "                </div>
            </div>
        ";
        }
        // line 28
        echo "                        


            <div class=\"page-header text-center\" style=\"margin-bottom:0px; padding-bottom: 0px;\">
                <h1> ";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "</h1>
                <hr class=\"intro-divider\">
                ";
        // line 34
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "meta_description", array())) {
            // line 35
            echo "                    <div>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "meta_description", array()), "html", null, true);
            echo "</div>
                ";
        }
        // line 37
        echo "            </div>
        </section>
        
        <section class=\"container\" style=\"padding-bottom: 35px;\">
        
        <div class=\"box\">
             ";
        // line 43
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 44
        echo "        </div>
        </section>

        <!-- Footer -->
        <footer id=\"footer\">
            ";
        // line 49
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("ep/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 50
        echo "        </footer>

        <!-- FontAwesome -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css\">
        <!-- Scripts -->
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
        <script src=\"";
        // line 56
        echo $this->extensions['Cms\Twig\Extension']->themeFilter(array(0 => "assets/js/bootstrap.min.js", 1 => "assets/js/app.js"));
        // line 59
        echo "\"></script>
        ";
        // line 60
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 61
        echo "        ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 62
        echo "
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\ecole/themes/simpleweb-alpha/layouts/ecole-primaire.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 62,  142 => 61,  127 => 60,  124 => 59,  122 => 56,  114 => 50,  110 => 49,  103 => 44,  101 => 43,  93 => 37,  87 => 35,  85 => 34,  80 => 32,  74 => 28,  69 => 25,  64 => 24,  60 => 22,  58 => 21,  48 => 13,  44 => 12,  38 => 8,  36 => 7,  32 => 5,  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        {% partial \"meta\" %}
    </head>
    <body>
        {% set hasChildren = (staticPage.parent ?: staticPage.page).children %}

        <!-- Header -->
        <header id=\"main-header\">
            
            {% partial \"ep/header\" %}
            
        </header>

        <!-- Content -->
        
        <section class=\"container content-margin\">


        {% if hasChildren %}
            <div id=\"layout-subnav\">
                <div class=\"container\">
                    {% partial 'subnav' page=staticPage.page %}
                </div>
            </div>
        {% endif %}
                        


            <div class=\"page-header text-center\" style=\"margin-bottom:0px; padding-bottom: 0px;\">
                <h1> {{ this.page.title}}</h1>
                <hr class=\"intro-divider\">
                {% if this.page.meta_description %}
                    <div>{{ this.page.meta_description }}</div>
                {% endif %}
            </div>
        </section>
        
        <section class=\"container\" style=\"padding-bottom: 35px;\">
        
        <div class=\"box\">
             {% page %}
        </div>
        </section>

        <!-- Footer -->
        <footer id=\"footer\">
            {% partial \"ep/footer\" %}
        </footer>

        <!-- FontAwesome -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css\">
        <!-- Scripts -->
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
        <script src=\"{{ [
            'assets/js/bootstrap.min.js',
            'assets/js/app.js'
        ]|theme }}\"></script>
        {% framework extras %}
        {% scripts %}

    </body>
</html>", "C:\\laragon\\www\\ecole/themes/simpleweb-alpha/layouts/ecole-primaire.htm", "");
    }
}
