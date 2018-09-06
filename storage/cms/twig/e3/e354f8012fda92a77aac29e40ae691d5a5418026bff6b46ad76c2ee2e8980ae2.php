<?php

/* C:\laragon\www\ecole/themes/simpleweb-alpha/layouts/ecole-primaire-2.htm */
class __TwigTemplate_5e83ce400ad06fe53c63f647b7ca60d6135fcccd0ee50fda88258e48eca7f0cd extends Twig_Template
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
<html lang=\"fr\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <title>";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "</title>

        <!-- Bootstrap core CSS -->
        <link 
            rel=\"stylesheet\" 
            href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">



<!--         <link 
            rel=\"stylesheet\" 
            href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\"
            > -->


        <!-- Theme CSS -->
        <link href=\"";
        // line 24
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/theme.css");
        echo "\" rel=\"stylesheet\">
    </head>

    <body>
        <div class=\"container\">
            <!-- Static navbar -->
            <div class=\"navbar navbar-default\" role=\"navigation\">
                <div class=\"container-fluid\">
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle collapsed\" 
                                data-toggle=\"collapse\" 
                                data-target=\".navbar-collapse\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        <a class=\"navbar-brand\" href=\"#\">Static Pages Demo</a>
                        
                    </div>
                    
                    
                    <div class=\"navbar-collapse collapse\">
                        ";
        // line 47
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['items'] = twig_get_attribute($this->env, $this->source, ($context["topMenuLeft"] ?? null), "menuItems", array())        ;
        $context['__cms_partial_params']['class'] = "nav navbar-nav"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("menu-items"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 48
        echo "                    </div><!--/.nav-collapse -->
                    
                    
                    
                    
                </div><!--/.container-fluid -->
            </div>
        </div> <!-- /container -->

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-8\">
                    <!-- 
                        We will place the page contents here
                    -->
                </div>

                <div class=\"col-sm-3 col-sm-offset-1\">
                    <div class=\"sidebar\">
                        <!-- 
                            The blog category list will be displayed here
                        -->
                    </div>
                </div>
            </div>
        </div>

        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\ecole/themes/simpleweb-alpha/layouts/ecole-primaire-2.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 48,  77 => 47,  51 => 24,  32 => 8,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <title>{{ this.page.title }}</title>

        <!-- Bootstrap core CSS -->
        <link 
            rel=\"stylesheet\" 
            href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">



<!--         <link 
            rel=\"stylesheet\" 
            href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\"
            > -->


        <!-- Theme CSS -->
        <link href=\"{{ 'assets/css/theme.css'|theme }}\" rel=\"stylesheet\">
    </head>

    <body>
        <div class=\"container\">
            <!-- Static navbar -->
            <div class=\"navbar navbar-default\" role=\"navigation\">
                <div class=\"container-fluid\">
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle collapsed\" 
                                data-toggle=\"collapse\" 
                                data-target=\".navbar-collapse\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        <a class=\"navbar-brand\" href=\"#\">Static Pages Demo</a>
                        
                    </div>
                    
                    
                    <div class=\"navbar-collapse collapse\">
                        {% partial 'menu-items' items=topMenuLeft.menuItems class='nav navbar-nav' %}
                    </div><!--/.nav-collapse -->
                    
                    
                    
                    
                </div><!--/.container-fluid -->
            </div>
        </div> <!-- /container -->

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-8\">
                    <!-- 
                        We will place the page contents here
                    -->
                </div>

                <div class=\"col-sm-3 col-sm-offset-1\">
                    <div class=\"sidebar\">
                        <!-- 
                            The blog category list will be displayed here
                        -->
                    </div>
                </div>
            </div>
        </div>

        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
    </body>
</html>", "C:\\laragon\\www\\ecole/themes/simpleweb-alpha/layouts/ecole-primaire-2.htm", "");
    }
}
