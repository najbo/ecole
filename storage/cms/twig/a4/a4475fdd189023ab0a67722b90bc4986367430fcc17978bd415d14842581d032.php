<?php

/* C:\laragon\www\ecole/plugins/jan/ecole/components/vacanceslist/default.htm */
class __TwigTemplate_9a6ed5b405d793bc8acb848e2271a84612bc96ec76d65e066ff792400a6b7128 extends Twig_Template
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
        $context["vacancesRecord"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "vacances", array());
        // line 2
        echo "

";
        // line 4
        if ((twig_get_attribute($this->env, $this->source, ($context["vacancesRecord"] ?? null), "count", array()) > 0)) {
            // line 5
            echo "
\t";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["vacancesRecord"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["vacances"]) {
                // line 7
                echo "\t
\t\t";
                // line 8
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["vacances"], "vacancesdetail", array()), "count", array()) > 0)) {
                    // line 9
                    echo "

\t\t\t<h2>";
                    // line 11
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vacances"], "titre", array()), "html", null, true);
                    echo "</h2>
\t\t\t";
                    // line 13
                    echo "\t\t\t<div>";
                    echo twig_get_attribute($this->env, $this->source, $context["vacances"], "description", array());
                    echo "</div>

\t\t\t\t<table class=\"table table-striped table-hover \">
\t\t            <thead>
\t\t              <tr>
\t\t                <th>Période</th>
\t\t                <th>Début</th>
\t\t                <th>Fin</th>
\t\t                <th>Durée</th>
\t\t                <th>Remarques</th>
\t\t              </tr>
\t\t\t         </thead>\t
\t\t\t         \t<tbody>
\t\t\t\t\t\t\t";
                    // line 26
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["vacances"], "vacancesdetail", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["vacancesPeriode"]) {
                        // line 27
                        echo "\t\t\t\t                  <tr class=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vacancesPeriode"], "status", array()), "html", null, true);
                        echo "\">
\t\t\t\t                    <td>";
                        // line 28
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vacancesPeriode"], "titre", array()), "html", null, true);
                        echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
                        // line 29
                        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, call_user_func_array($this->env->getFilter('strftime')->getCallable(), array(twig_get_attribute($this->env, $this->source, $context["vacancesPeriode"], "debut", array()), "%A"))), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, twig_convert_encoding(call_user_func_array($this->env->getFilter('strftime')->getCallable(), array(twig_get_attribute($this->env, $this->source, $context["vacancesPeriode"], "debut", array()), "%e %B %Y")), "UTF-8", "ISO-8859-1"), "html", null, true);
                        echo "</td>
\t\t\t\t\t\t\t\t\t<td>

\t\t\t\t\t\t\t\t\t\t";
                        // line 32
                        if (twig_get_attribute($this->env, $this->source, $context["vacancesPeriode"], "fin", array())) {
                            // line 33
                            echo "\t\t\t\t\t\t\t\t\t\t\t";
                            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, call_user_func_array($this->env->getFilter('strftime')->getCallable(), array(twig_get_attribute($this->env, $this->source, $context["vacancesPeriode"], "fin", array()), "%A"))), "html", null, true);
                            echo " ";
                            echo twig_escape_filter($this->env, twig_convert_encoding(call_user_func_array($this->env->getFilter('strftime')->getCallable(), array(twig_get_attribute($this->env, $this->source, $context["vacancesPeriode"], "fin", array()), "%e %B %Y")), "UTF-8", "ISO-8859-1"), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 35
                        echo "\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t                    <td>";
                        // line 36
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vacancesPeriode"], "duree", array()), "html", null, true);
                        echo "</td>
\t\t\t\t                    <td>";
                        // line 37
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vacancesPeriode"], "description", array()), "html", null, true);
                        echo "</td>
\t\t\t\t                  </tr>
\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vacancesPeriode'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 40
                    echo "\t\t\t\t\t</tbody>
\t\t        </table>
\t\t    ";
                } else {
                    // line 43
                    echo "\t\t    \t<!-- <h5>Pas de vacances publiées pour le moment </h5> -->
\t\t    ";
                }
                // line 45
                echo "\t\t    
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vacances'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "
\t";
        } else {
            // line 49
            echo "\t\t<h5>Pas de vacances publiées pour le moment </h5>
";
        }
        // line 51
        echo "


\t
";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\ecole/plugins/jan/ecole/components/vacanceslist/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 51,  135 => 49,  131 => 47,  124 => 45,  120 => 43,  115 => 40,  106 => 37,  102 => 36,  99 => 35,  91 => 33,  89 => 32,  81 => 29,  77 => 28,  72 => 27,  68 => 26,  51 => 13,  47 => 11,  43 => 9,  41 => 8,  38 => 7,  34 => 6,  31 => 5,  29 => 4,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set vacancesRecord = __SELF__.vacances %}


{% if vacancesRecord.count > 0  %}

\t{% for vacances in vacancesRecord %}
\t
\t\t{% if vacances.vacancesdetail.count > 0  %}


\t\t\t<h2>{{ vacances.titre }}</h2>
\t\t\t{# <div>{{ vacances.annee.titre }} | {{ vacances.structure.titre }}</div> #}
\t\t\t<div>{{ vacances.description|raw }}</div>

\t\t\t\t<table class=\"table table-striped table-hover \">
\t\t            <thead>
\t\t              <tr>
\t\t                <th>Période</th>
\t\t                <th>Début</th>
\t\t                <th>Fin</th>
\t\t                <th>Durée</th>
\t\t                <th>Remarques</th>
\t\t              </tr>
\t\t\t         </thead>\t
\t\t\t         \t<tbody>
\t\t\t\t\t\t\t{% for vacancesPeriode in vacances.vacancesdetail %}
\t\t\t\t                  <tr class=\"{{ vacancesPeriode.status }}\">
\t\t\t\t                    <td>{{ vacancesPeriode.titre }}</td>
\t\t\t\t\t\t\t\t\t<td>{{ vacancesPeriode.debut |strftime('%A')|capitalize }} {{ vacancesPeriode.debut | strftime('%e %B %Y') |  convert_encoding('UTF-8', 'ISO-8859-1') }}</td>
\t\t\t\t\t\t\t\t\t<td>

\t\t\t\t\t\t\t\t\t\t{% if vacancesPeriode.fin %}
\t\t\t\t\t\t\t\t\t\t\t{{ vacancesPeriode.fin |strftime('%A')|capitalize }} {{ vacancesPeriode.fin | strftime('%e %B %Y')|  convert_encoding('UTF-8', 'ISO-8859-1') }}
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t                    <td>{{ (vacancesPeriode.duree)}}</td>
\t\t\t\t                    <td>{{ (vacancesPeriode.description)}}</td>
\t\t\t\t                  </tr>
\t\t\t\t\t{% endfor %}
\t\t\t\t\t</tbody>
\t\t        </table>
\t\t    {% else %}
\t\t    \t<!-- <h5>Pas de vacances publiées pour le moment </h5> -->
\t\t    {% endif %}
\t\t    
\t\t{% endfor %}

\t{% else\t %}
\t\t<h5>Pas de vacances publiées pour le moment </h5>
{% endif %}



\t
", "C:\\laragon\\www\\ecole/plugins/jan/ecole/components/vacanceslist/default.htm", "");
    }
}
