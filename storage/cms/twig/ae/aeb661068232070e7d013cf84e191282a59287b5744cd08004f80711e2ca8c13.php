<?php

/* C:\laragon\www\ecole/themes/simpleweb-alpha/layouts/site.htm */
class __TwigTemplate_535afeb9def426b9e0336942b3a5c6f2625cc27f95315b1c237e6b7c748a21bf extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header"        , $context['__cms_partial_params']        , true        );
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


            <div class=\"page-header text-center\">
                <h1> ";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "</h1>
                <hr class=\"intro-divider\">
                <p>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "meta_description", array()), "html", null, true);
        echo "</p>
            </div>
        </section>
        
        <section class=\"container\">
             ";
        // line 39
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 40
        echo "        </section>

        <!-- Footer -->
        <footer id=\"footer\">
            ";
        // line 44
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 45
        echo "        </footer>

        <!-- FontAwesome -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css\">
        <!-- Scripts -->
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
        <script src=\"";
        // line 51
        echo $this->extensions['Cms\Twig\Extension']->themeFilter(array(0 => "assets/js/bootstrap.min.js", 1 => "assets/js/app.js"));
        // line 54
        echo "\"></script>
        ";
        // line 55
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
        // line 56
        echo "        ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 57
        echo "
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\ecole/themes/simpleweb-alpha/layouts/site.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 57,  133 => 56,  118 => 55,  115 => 54,  113 => 51,  105 => 45,  101 => 44,  95 => 40,  93 => 39,  85 => 34,  80 => 32,  74 => 28,  69 => 25,  64 => 24,  60 => 22,  58 => 21,  48 => 13,  44 => 12,  38 => 8,  36 => 7,  32 => 5,  28 => 4,  23 => 1,);
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
            
            {% partial \"header\" %}
            
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
                        


            <div class=\"page-header text-center\">
                <h1> {{ this.page.title}}</h1>
                <hr class=\"intro-divider\">
                <p>{{ this.page.meta_description }}</p>
            </div>
        </section>
        
        <section class=\"container\">
             {% page %}
        </section>

        <!-- Footer -->
        <footer id=\"footer\">
            {% partial \"footer\" %}
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
</html>", "C:\\laragon\\www\\ecole/themes/simpleweb-alpha/layouts/site.htm", "");
    }
}
