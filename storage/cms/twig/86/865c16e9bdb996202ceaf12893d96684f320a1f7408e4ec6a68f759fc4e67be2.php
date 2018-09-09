<?php

/* C:\laragon\www\ecole/plugins/jan/ecole/components/enseignants/default.htm */
class __TwigTemplate_571bd121edee62756f8217fe92fd213a93b243052de493e228564467e9431132 extends Twig_Template
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
        $context["supergroups"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "enseignants", array());
        // line 2
        echo "

\t";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["supergroups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["supergroup"]) {
            // line 5
            echo "\t\t<h2>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["supergroup"], "titre", array()), "html", null, true);
            echo "</h2>

\t\t\t";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["supergroup"], "etendue", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["etendues"]) {
                // line 8
                echo "
\t\t\t\t<p>";
                // line 9
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["etendues"], "teacher", array()), "first_name", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["etendues"], "teacher", array()), "last_name", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["etendues"], "fonction", array()), "html", null, true);
                echo "</p>

\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etendues'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['supergroup'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\ecole/plugins/jan/ecole/components/enseignants/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 12,  46 => 9,  43 => 8,  39 => 7,  33 => 5,  29 => 4,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set supergroups = __SELF__.enseignants %}


\t{% for supergroup in supergroups %}
\t\t<h2>{{ supergroup.titre }}</h2>

\t\t\t{% for etendues in supergroup.etendue %}

\t\t\t\t<p>{{ etendues.teacher.first_name }} {{ etendues.teacher.last_name }} {{ etendues.fonction }}</p>

\t\t{% endfor %}

\t{% endfor %}
", "C:\\laragon\\www\\ecole/plugins/jan/ecole/components/enseignants/default.htm", "");
    }
}
