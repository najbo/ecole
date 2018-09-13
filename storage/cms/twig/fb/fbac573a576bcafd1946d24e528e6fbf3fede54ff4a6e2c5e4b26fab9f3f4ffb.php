<?php

/* C:\laragon\www\ecole/plugins/jan/ecole/components/publicationdetail/default.htm */
class __TwigTemplate_f71f6a188438e6a50e88576a22409afa41d9727839ecdf4cc861fee884d5440a extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('styles'        );
        // line 2
        echo "\t<style>
\t      /* Set the size of the div element that contains the map */
\t      #map {
\t        height: 400px;  /* The height is 400 pixels */
\t        width: 100%;  /* The width is the width of the web page */
\t       }
    </style>
";
        // line 1
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 10
        echo "


";
        // line 13
        if (($context["record"] ?? null)) {
            // line 14
            echo "

    <h1>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "titre", array()), "html", null, true);
            echo "</h1>


    <!-- Date -->

    <h3>
    \t";
            // line 22
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, call_user_func_array($this->env->getFilter('strftime')->getCallable(), array(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "date_event", array()), "%A"))), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "date_event", array()), "d.m.y"), "html", null, true);
            echo " 
            ";
            // line 23
            if ((twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "is_showtime", array()) == 1)) {
                // line 24
                echo "            à ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "date_event", array()), "H:m"), "html", null, true);
                echo "
        \t";
            }
            // line 26
            echo "    </h3>


\t<!-- Banner Image -->
    <div>
    \t<figure class=\"figure\">
    \t\t<img src=\"";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "banner", array()), "path", array()), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "banner", array()), "title", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "banner", array()), "description", array()), "html", null, true);
            echo "\" class=\"figure-img img-fluid rounded img-responsive\">
    \t\t";
            // line 33
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "banner", array()), "title", array())) {
                // line 34
                echo "    \t\t\t<figcaption class=\"figure-caption text-left\"><small>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "banner", array()), "title", array()), "html", null, true);
                echo "</small></figcaption>
    \t\t";
            }
            // line 36
            echo "    \t</figure>
    </div>

\t<div style=\"margin-top: 20px; margin-bottom: 20px;\">
\t\t";
            // line 40
            echo twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "corps", array());
            echo "
\t</div>


\t<!-- Galerie d'images -->

\t";
            // line 46
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "galerie", array()), "count", array()) > 0)) {
                // line 47
                echo "\t\t<h3>Galerie d'images</h3>

\t\t<ul class=\"gallery clearfix\">
\t\t\t";
                // line 50
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "galerie", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 51
                    echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
                    // line 52
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "thumb", array(0 => 850, 1 => ($context["auto"] ?? null)), "method"), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "title", array()), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "description", array()), "html", null, true);
                    echo "\" data-fancybox=\"gallery\" data-caption=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "title", array()), "html", null, true);
                    echo "\">
\t\t\t\t\t\t<img src=\"";
                    // line 53
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "thumb", array(0 => 165, 1 => 165, 2 => array("mode" => "crop")), "method"), "html", null, true);
                    echo "\">
\t\t\t\t\t</a>
\t\t\t\t\t\t<!-- <div><small>";
                    // line 55
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "title", array()), "html", null, true);
                    echo "</small></div> -->
\t\t\t\t</li>
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 58
                echo "\t\t</ul>
\t";
            }
            // line 60
            echo "

\t<!-- Liste de douuments -->

\t<!-- ";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "documents", array()), "html", null, true);
            echo " -->

\t";
            // line 66
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "documents", array()), "count", array()) > 0)) {
                // line 67
                echo "\t\t<h3>Documents</h3>

\t\t\t<table class=\"table table-striped table-hover \">
\t            <thead>
\t              <tr>
\t                <th>Nom du fichier</th>
\t                <th>Description</th>
\t                <th>Type</th>
\t                <th>Taille</th>
\t                <th>Date</th>
\t              </tr>
\t         </thead>\t
\t         \t<tbody>
\t\t\t\t\t";
                // line 80
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "documents", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["document"]) {
                    // line 81
                    echo "\t\t                  <tr>
\t\t                    <td>
\t\t                    \t<a href=\"";
                    // line 83
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["document"], "path", array()), "html", null, true);
                    echo "\" target=\"_blank\">
\t\t                    \t\t";
                    // line 84
                    if (twig_get_attribute($this->env, $this->source, $context["document"], "title", array())) {
                        // line 85
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["document"], "title", array()), "html", null, true);
                        echo "
\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 87
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["document"], "file_name", array()), "html", null, true);
                        echo "
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 89
                    echo "\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>";
                    // line 91
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["document"], "description", array()), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t\t<td>";
                    // line 92
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["document"], "extension", array()), "html", null, true);
                    echo "</td>
\t\t                    <td>";
                    // line 93
                    echo twig_escape_filter($this->env, twig_round((twig_get_attribute($this->env, $this->source, $context["document"], "file_size", array()) / 1000)), "html", null, true);
                    echo " Kb</td>
\t\t                    <td>";
                    // line 94
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["document"], "updated_at", array()), "d.m.y"), "html", null, true);
                    echo "</td>
\t\t                  </tr>
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['document'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 97
                echo "\t\t\t</tbody>
        </table>

\t";
            }
            // line 101
            echo "

\t";
            // line 103
            if (twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "coordonnees", array())) {
                // line 104
                echo "

   <h3>Emplacement</h3>
    <!--The div element for the map -->
    <div id=\"map\" style=\"margin-bottom: 20px;\"></div>
    \t<script>
\t\t\t// Initialize and add the map
\t\t\tfunction initMap() {
\t\t\t  // The location of Uluru
\t\t\t  var emplacement = { ";
                // line 113
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "coordonnees", array()), "html", null, true);
                echo " };
\t\t\t  // The map, centered at Uluru
\t\t\t  var map = new google.maps.Map(
\t\t\t      document.getElementById('map'), {
\t\t\t      \t\tzoom: 14, 
\t\t\t      \t\tcenter: emplacement,
\t\t\t\t\t\tmapTypeId: 'hybrid'
\t\t\t      \t\t});
\t\t\t  // The marker, positioned at Uluru
\t\t\t  var marker = new google.maps.Marker({position: emplacement, map: map});
\t\t\t}
\t\t</script>
\t\t\t    <!--Load the API from the specified URL
\t\t\t    * The async attribute allows the browser to render the page while the API loads
\t\t\t    * The key parameter will contain your own API key (which is not needed for this tutorial)
\t\t\t    * The callback parameter executes the initMap() function
\t\t\t    -->
\t\t<script async defer
\t\t\t src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBoc5JtaWapuYEjiwcvMrWXeDUMX2--aR0&callback=initMap&region=CH\"\">
\t\t</script>

 ";
            }
            // line 135
            echo "



\t<!-- Informations -->

\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<small>
\t\t\t\tPublié le ";
            // line 144
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "updated_at", array()), "d.m.y"), "html", null, true);
            echo " à ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "updated_at", array()), "H:m"), "html", null, true);
            echo "  par ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "user", array()), "first_name", array()), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "user", array()), "last_name", array()), "html", null, true);
            echo " | ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "structure", array()), "titre", array()), "html", null, true);
            echo " |  <span class=\"badge\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "publicationtype", array()), "titre", array()), "html", null, true);
            echo "</span>
\t\t\t</small>
\t\t</div>
\t</div>



\t<a href=\"javascript:history.back()\" class=\"btn btn-primary btn-sm\">Retour</a>




";
        } else {
            // line 157
            echo "\t<div>
    \t<h1>";
            // line 158
            echo twig_escape_filter($this->env, ($context["notFoundMessage"] ?? null), "html", null, true);
            echo "</h1>
    \t<a href=\"/\" class=\"btn btn-primary btn-sm\">Page d'accueil</a>
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\ecole/plugins/jan/ecole/components/publicationdetail/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  318 => 158,  315 => 157,  289 => 144,  278 => 135,  253 => 113,  242 => 104,  240 => 103,  236 => 101,  230 => 97,  221 => 94,  217 => 93,  213 => 92,  209 => 91,  205 => 89,  199 => 87,  193 => 85,  191 => 84,  187 => 83,  183 => 81,  179 => 80,  164 => 67,  162 => 66,  157 => 64,  151 => 60,  147 => 58,  138 => 55,  133 => 53,  123 => 52,  120 => 51,  116 => 50,  111 => 47,  109 => 46,  100 => 40,  94 => 36,  88 => 34,  86 => 33,  78 => 32,  70 => 26,  64 => 24,  62 => 23,  56 => 22,  47 => 16,  43 => 14,  41 => 13,  36 => 10,  34 => 1,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% put styles %}
\t<style>
\t      /* Set the size of the div element that contains the map */
\t      #map {
\t        height: 400px;  /* The height is 400 pixels */
\t        width: 100%;  /* The width is the width of the web page */
\t       }
    </style>
{% endput %}



{% if record %}


    <h1>{{ record.titre }}</h1>


    <!-- Date -->

    <h3>
    \t{{ record.date_event |strftime('%A')|capitalize }} {{ record.date_event | date('d.m.y') }} 
            {% if record.is_showtime == 1 %}
            à {{ record.date_event | date('H:m') }}
        \t{% endif %}
    </h3>


\t<!-- Banner Image -->
    <div>
    \t<figure class=\"figure\">
    \t\t<img src=\"{{ record.banner.path }}\" title=\"{{ record.banner.title }}\" alt=\"{{ record.banner.description }}\" class=\"figure-img img-fluid rounded img-responsive\">
    \t\t{% if record.banner.title %}
    \t\t\t<figcaption class=\"figure-caption text-left\"><small>{{ record.banner.title }}</small></figcaption>
    \t\t{% endif %}
    \t</figure>
    </div>

\t<div style=\"margin-top: 20px; margin-bottom: 20px;\">
\t\t{{ record.corps|raw }}
\t</div>


\t<!-- Galerie d'images -->

\t{% if record.galerie.count > 0 %}
\t\t<h3>Galerie d'images</h3>

\t\t<ul class=\"gallery clearfix\">
\t\t\t{% for image in record.galerie %}
\t\t\t\t<li>
\t\t\t\t\t<a href=\"{{ image.thumb(850,auto) }}\" title=\"{{ image.title }}\" alt=\"{{ image.description }}\" data-fancybox=\"gallery\" data-caption=\"{{ image.title}}\">
\t\t\t\t\t\t<img src=\"{{ image.thumb(165,165, {'mode':'crop'}) }}\">
\t\t\t\t\t</a>
\t\t\t\t\t\t<!-- <div><small>{{ image.title }}</small></div> -->
\t\t\t\t</li>
\t\t\t{% endfor %}
\t\t</ul>
\t{% endif %}


\t<!-- Liste de douuments -->

\t<!-- {{record.documents}} -->

\t{% if record.documents.count > 0 %}
\t\t<h3>Documents</h3>

\t\t\t<table class=\"table table-striped table-hover \">
\t            <thead>
\t              <tr>
\t                <th>Nom du fichier</th>
\t                <th>Description</th>
\t                <th>Type</th>
\t                <th>Taille</th>
\t                <th>Date</th>
\t              </tr>
\t         </thead>\t
\t         \t<tbody>
\t\t\t\t\t{% for document in record.documents %}
\t\t                  <tr>
\t\t                    <td>
\t\t                    \t<a href=\"{{ document.path }}\" target=\"_blank\">
\t\t                    \t\t{% if document.title %}
\t\t\t\t\t\t\t\t\t\t{{ document.title }}
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t{{ document.file_name }}
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>{{ document.description }}</td>
\t\t\t\t\t\t\t<td>{{ document.extension }}</td>
\t\t                    <td>{{ (document.file_size / 1000)|round }} Kb</td>
\t\t                    <td>{{ document.updated_at | date('d.m.y') }}</td>
\t\t                  </tr>
\t\t\t{% endfor %}
\t\t\t</tbody>
        </table>

\t{% endif %}


\t{% if record.coordonnees %}


   <h3>Emplacement</h3>
    <!--The div element for the map -->
    <div id=\"map\" style=\"margin-bottom: 20px;\"></div>
    \t<script>
\t\t\t// Initialize and add the map
\t\t\tfunction initMap() {
\t\t\t  // The location of Uluru
\t\t\t  var emplacement = { {{ record.coordonnees }} };
\t\t\t  // The map, centered at Uluru
\t\t\t  var map = new google.maps.Map(
\t\t\t      document.getElementById('map'), {
\t\t\t      \t\tzoom: 14, 
\t\t\t      \t\tcenter: emplacement,
\t\t\t\t\t\tmapTypeId: 'hybrid'
\t\t\t      \t\t});
\t\t\t  // The marker, positioned at Uluru
\t\t\t  var marker = new google.maps.Marker({position: emplacement, map: map});
\t\t\t}
\t\t</script>
\t\t\t    <!--Load the API from the specified URL
\t\t\t    * The async attribute allows the browser to render the page while the API loads
\t\t\t    * The key parameter will contain your own API key (which is not needed for this tutorial)
\t\t\t    * The callback parameter executes the initMap() function
\t\t\t    -->
\t\t<script async defer
\t\t\t src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBoc5JtaWapuYEjiwcvMrWXeDUMX2--aR0&callback=initMap&region=CH\"\">
\t\t</script>

 {% endif %}




\t<!-- Informations -->

\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<small>
\t\t\t\tPublié le {{ record.updated_at | date('d.m.y') }} à {{ record.updated_at | date('H:m') }}  par {{ record.user.first_name }}  {{ record.user.last_name }} | {{ record.structure.titre }} |  <span class=\"badge\">{{ record.publicationtype.titre }}</span>
\t\t\t</small>
\t\t</div>
\t</div>



\t<a href=\"javascript:history.back()\" class=\"btn btn-primary btn-sm\">Retour</a>




{% else %}
\t<div>
    \t<h1>{{ notFoundMessage }}</h1>
    \t<a href=\"/\" class=\"btn btn-primary btn-sm\">Page d'accueil</a>
\t</div>
{% endif %}", "C:\\laragon\\www\\ecole/plugins/jan/ecole/components/publicationdetail/default.htm", "");
    }
}
