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
        // line 5
        if (($context["vacancesRecord"] ?? null)) {
            // line 6
            echo "
\t";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["vacancesRecord"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["vacances"]) {
                // line 8
                echo "\t
\t\t<h2>";
                // line 9
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vacances"], "titre", array()), "html", null, true);
                echo "</h2>
\t\t";
                // line 11
                echo "\t\t<div>";
                echo twig_get_attribute($this->env, $this->source, $context["vacances"], "description", array());
                echo "</div>

\t\t\t<table class=\"table table-striped table-hover \">
\t            <thead>
\t              <tr>
\t                <th>Période</th>
\t                <th>Début</th>
\t                <th>Fin</th>
\t                <th>Durée</th>
\t                <th>Remarques</th>
\t              </tr>
\t         </thead>\t
\t         \t<tbody>
\t\t\t\t\t";
                // line 24
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["vacances"], "vacancesdetail", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["vacancesPeriode"]) {
                    // line 25
                    echo "\t\t                  <tr class=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vacancesPeriode"], "status", array()), "html", null, true);
                    echo "\">
\t\t                    <td>";
                    // line 26
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vacancesPeriode"], "titre", array()), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t\t<td>";
                    // line 27
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, call_user_func_array($this->env->getFilter('strftime')->getCallable(), array(twig_get_attribute($this->env, $this->source, $context["vacancesPeriode"], "debut", array()), "%A"))), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_convert_encoding(call_user_func_array($this->env->getFilter('strftime')->getCallable(), array(twig_get_attribute($this->env, $this->source, $context["vacancesPeriode"], "debut", array()), "%e %B %Y")), "UTF-8", "ISO-8859-1"), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t\t<td>

\t\t\t\t\t\t\t\t";
                    // line 30
                    if (twig_get_attribute($this->env, $this->source, $context["vacancesPeriode"], "fin", array())) {
                        // line 31
                        echo "\t\t\t\t\t\t\t\t\t";
                        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, call_user_func_array($this->env->getFilter('strftime')->getCallable(), array(twig_get_attribute($this->env, $this->source, $context["vacancesPeriode"], "fin", array()), "%A"))), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, twig_convert_encoding(call_user_func_array($this->env->getFilter('strftime')->getCallable(), array(twig_get_attribute($this->env, $this->source, $context["vacancesPeriode"], "fin", array()), "%e %B %Y")), "UTF-8", "ISO-8859-1"), "html", null, true);
                        echo "
\t\t\t\t\t\t\t\t";
                    }
                    // line 33
                    echo "\t\t\t\t\t\t\t\t</td>
\t\t                    <td>";
                    // line 34
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vacancesPeriode"], "duree", array()), "html", null, true);
                    echo "</td>
\t\t                    <td>";
                    // line 35
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vacancesPeriode"], "description", array()), "html", null, true);
                    echo "</td>
\t\t                  </tr>
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vacancesPeriode'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                echo "\t\t\t</tbody>
        </table>

\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vacances'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 43
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
        return array (  120 => 43,  110 => 38,  101 => 35,  97 => 34,  94 => 33,  86 => 31,  84 => 30,  76 => 27,  72 => 26,  67 => 25,  63 => 24,  46 => 11,  42 => 9,  39 => 8,  35 => 7,  32 => 6,  30 => 5,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set vacancesRecord = __SELF__.vacances %}



{% if vacancesRecord %}

\t{% for vacances in vacancesRecord %}
\t
\t\t<h2>{{ vacances.titre }}</h2>
\t\t{# <div>{{ vacances.annee.titre }} | {{ vacances.structure.titre }}</div> #}
\t\t<div>{{ vacances.description|raw }}</div>

\t\t\t<table class=\"table table-striped table-hover \">
\t            <thead>
\t              <tr>
\t                <th>Période</th>
\t                <th>Début</th>
\t                <th>Fin</th>
\t                <th>Durée</th>
\t                <th>Remarques</th>
\t              </tr>
\t         </thead>\t
\t         \t<tbody>
\t\t\t\t\t{% for vacancesPeriode in vacances.vacancesdetail %}
\t\t                  <tr class=\"{{ vacancesPeriode.status }}\">
\t\t                    <td>{{ vacancesPeriode.titre }}</td>
\t\t\t\t\t\t\t<td>{{ vacancesPeriode.debut |strftime('%A')|capitalize }} {{ vacancesPeriode.debut | strftime('%e %B %Y') |  convert_encoding('UTF-8', 'ISO-8859-1') }}</td>
\t\t\t\t\t\t\t<td>

\t\t\t\t\t\t\t\t{% if vacancesPeriode.fin %}
\t\t\t\t\t\t\t\t\t{{ vacancesPeriode.fin |strftime('%A')|capitalize }} {{ vacancesPeriode.fin | strftime('%e %B %Y')|  convert_encoding('UTF-8', 'ISO-8859-1') }}
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</td>
\t\t                    <td>{{ (vacancesPeriode.duree)}}</td>
\t\t                    <td>{{ (vacancesPeriode.description)}}</td>
\t\t                  </tr>
\t\t\t{% endfor %}
\t\t\t</tbody>
        </table>

\t{% endfor %}
{% endif%}



\t
", "C:\\laragon\\www\\ecole/plugins/jan/ecole/components/vacanceslist/default.htm", "");
    }
}
