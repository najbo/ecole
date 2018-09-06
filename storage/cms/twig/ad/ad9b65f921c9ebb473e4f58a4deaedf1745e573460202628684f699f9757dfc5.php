<?php

/* C:\laragon\www\ecole/themes/simpleweb-alpha/partials/publications/publications.htm */
class __TwigTemplate_99bb193b4107aa6ad06bec41bdb1c6bc5ddf49d9214e62eff37180724d789dca extends Twig_Template
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
        if ((twig_get_attribute($this->env, $this->source, ($context["publications"] ?? null), "count", array()) > 0)) {
            // line 2
            echo "    
    <h5>Il y a ";
            // line 3
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["publications"] ?? null), "count", array()), "html", null, true);
            echo " articles affichés
      ";
            // line 4
            if (RainLab\Pages\Classes\Page::url(($context["publicationAllPage"] ?? null))) {
                // line 5
                echo "        | <a href=\"";
                echo RainLab\Pages\Classes\Page::url(($context["publicationAllPage"] ?? null));
                echo "\">voir tous
      ";
            }
            // line 7
            echo "    </h5>

\t<div class=\"list-group\">
\t\t";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["publications"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["publication"]) {
                // line 11
                echo "
      <div class=\"list-group-item\" style=\"clear: left;\">

      <!--  <a href=\"";
                // line 14
                echo $this->extensions['System\Twig\Extension']->appFilter(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", array(0 => "publicationPage"), "method"));
                echo "/detail/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["publication"], "id", array()), "html", null, true);
                echo "\"> -->
      ";
                // line 15
                ob_start();
                echo "        
        <a href=\"";
                // line 16
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(($context["publicationPage"] ?? null), array(($context["detailsUrlParameter"] ?? null) => twig_get_attribute($this->env, $this->source, $context["publication"], ($context["detailsKeyColumn"] ?? null))));
                echo "\">

          \t<h4 class=\"\">";
                // line 18
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, call_user_func_array($this->env->getFilter('strftime')->getCallable(), array(twig_get_attribute($this->env, $this->source, $context["publication"], "date_event", array()), "%A"))), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["publication"], "date_event", array()), "d.m.y"), "html", null, true);
                echo " 
              ";
                // line 19
                if ((twig_get_attribute($this->env, $this->source, $context["publication"], "show_time", array()) == 1)) {
                    // line 20
                    echo "                à ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["publication"], "date_event", array()), "H:m"), "html", null, true);
                    echo "
              ";
                }
                // line 22
                echo "
            - ";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["publication"], "titre", array()), "html", null, true);
                echo "</h4>
          </a>
      ";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                // line 26
                echo "
          \t";
                // line 27
                if (twig_get_attribute($this->env, $this->source, $context["publication"], "banner", array())) {
                    // line 28
                    echo "              <div style=\"float: left; margin-bottom: 2px; margin-right: 15px;\"><img src=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["publication"], "banner", array()), "thumb", array(0 => 160, 1 => ($context["auto"] ?? null), 2 => array("mode" => "crop")), "method"), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["publication"], "banner", array()), "title", array()), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["publication"], "banner", array()), "description", array()), "html", null, true);
                    echo "\"></div>
          ";
                }
                // line 30
                echo "        
        \t
          <p class=\"\">";
                // line 32
                echo twig_get_attribute($this->env, $this->source, $context["publication"], "accroche", array());
                echo "</p>
          <p class=\"text-muted\"><small>Publié le ";
                // line 33
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["publication"], "updated_at", array()), "d.m.y"), "html", null, true);
                echo " à ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["publication"], "updated_at", array()), "H:m"), "html", null, true);
                echo "  par ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["publication"], "user", array()), "first_name", array()), "html", null, true);
                echo " </small></p>
      \t
\t
\t    \t</div>\t\t
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['publication'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "</div>

";
        } else {
            // line 41
            echo "    <h5 class=\"no-data\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", array(0 => "noPublicationMessage"), "method"), "html", null, true);
            echo "</h5>
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\ecole/themes/simpleweb-alpha/partials/publications/publications.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 41,  130 => 38,  115 => 33,  111 => 32,  107 => 30,  97 => 28,  95 => 27,  92 => 26,  86 => 23,  83 => 22,  77 => 20,  75 => 19,  69 => 18,  64 => 16,  60 => 15,  54 => 14,  49 => 11,  45 => 10,  40 => 7,  34 => 5,  32 => 4,  28 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if publications.count > 0 %}
    
    <h5>Il y a {{ publications.count }} articles affichés
      {% if publicationAllPage|staticPage %}
        | <a href=\"{{ publicationAllPage|staticPage }}\">voir tous
      {% endif %}
    </h5>

\t<div class=\"list-group\">
\t\t{% for publication in publications %}

      <div class=\"list-group-item\" style=\"clear: left;\">

      <!--  <a href=\"{{ __SELF__.property('publicationPage')|app }}/detail/{{ publication.id }}\"> -->
      {% spaceless %}        
        <a href=\"{{ publicationPage|page({ (detailsUrlParameter): attribute(publication, detailsKeyColumn) }) }}\">

          \t<h4 class=\"\">{{ publication.date_event |strftime('%A')|capitalize }} {{ publication.date_event | date('d.m.y') }} 
              {% if publication.show_time == 1 %}
                à {{ publication.date_event | date('H:m') }}
              {% endif %}

            - {{ publication.titre }}</h4>
          </a>
      {% endspaceless %}

          \t{% if publication.banner %}
              <div style=\"float: left; margin-bottom: 2px; margin-right: 15px;\"><img src=\"{{ publication.banner.thumb(160,auto,{'mode':'crop'}) }}\" title=\"{{ publication.banner.title }}\" alt=\"{{ publication.banner.description }}\"></div>
          {% endif %}
        
        \t
          <p class=\"\">{{ publication.accroche|raw }}</p>
          <p class=\"text-muted\"><small>Publié le {{ publication.updated_at | date('d.m.y') }} à {{ publication.updated_at | date('H:m') }}  par {{ publication.user.first_name }} </small></p>
      \t
\t
\t    \t</div>\t\t
\t\t{% endfor %}
</div>

{% else %}
    <h5 class=\"no-data\">{{ __SELF__.property('noPublicationMessage') }}</h5>
{% endif %}", "C:\\laragon\\www\\ecole/themes/simpleweb-alpha/partials/publications/publications.htm", "");
    }
}
