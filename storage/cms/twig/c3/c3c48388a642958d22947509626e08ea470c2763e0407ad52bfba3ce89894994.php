<?php

/* C:\laragon\www\ecole/themes/simpleweb-alpha/partials/footer.htm */
class __TwigTemplate_b39808343b1399b8086eaf6a9b0c44926767f61087a43d57b7e0ac58397afa8f extends Twig_Template
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
        echo "<section class=\"footer-text\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12 col-md-6 col-lg-6\">
                <h3>BIENVENUE</h3>
                <p>Ce site collaboratif regroupe les écoles enfantines, l’école primaire et l’école secondaire de Tavannes qui disposent ainsi d’une plateforme d’échange et de partage pour les enseignants, les élèves et le monde scolaire. Nous vous souhaitons beaucoup de plaisir à le visiter et à l’enrichir.</p>
                <a class=\"btn btn-default margin-top transparent\" href=\"/elements\" role=\"button\">En savoir plus</a>
            </div>
            <div class=\"col-xs-12 col-md-3 col-lg-3\">
                <h3>NOUS CONTACTER</h3>
                <ul class=\"nav\">
\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-phone\"></i> 032 481 20 47 </a></li>
\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-envelope-o\"></i> direp@ecoletavannes.ch</a></li>
\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-question\"></i> FAQ</a></li>
\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-life-ring\"></i> Support</a></li>
\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-leanpub\"></i> Terms</a></li>
\t\t\t\t</ul>
            </div>
            <div class=\"col-xs-12 col-md-3 col-lg-3\">
                <h3>ADRESSE</h3>
                <ul class=\"nav mail-list\">
\t\t\t\t\t<li>Ecoles de Tavannes</li>
\t\t\t\t\t<li>Rue du Collège 2</li>
\t\t\t\t\t<li>CH-2710 Tavannes</li>

\t\t\t\t</ul>
            </div>
        </div>
    </div>
</section>
<section>
    <ul class=\"icons\">
        <li><a href=\"#\" class=\"icon fa fa-twitter\" target=\"_blank\"><span class=\"label\">Twitter</span></a></li>
        <li><a href=\"#\" class=\"icon fa fa-google-plus\" target=\"_blank\"><span class=\"label\">Google Plus</span></a></li>
        <li><a href=\"#\" class=\"icon fa fa-dribbble\" target=\"_blank\"><span class=\"label\">Dribbble</span></a></li>
        <li><a href=\"#\" class=\"icon fa fa-instagram\" target=\"_blank\"><span class=\"label\">Instagram</span></a></li>
    </ul>
    <ul class=\"copyright\">
        <li>Copyright &copy ";
        // line 39
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "; Ecoles Tavannes. Tous droits réservés.</li>
    </ul>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\ecole/themes/simpleweb-alpha/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 39,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"footer-text\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12 col-md-6 col-lg-6\">
                <h3>BIENVENUE</h3>
                <p>Ce site collaboratif regroupe les écoles enfantines, l’école primaire et l’école secondaire de Tavannes qui disposent ainsi d’une plateforme d’échange et de partage pour les enseignants, les élèves et le monde scolaire. Nous vous souhaitons beaucoup de plaisir à le visiter et à l’enrichir.</p>
                <a class=\"btn btn-default margin-top transparent\" href=\"/elements\" role=\"button\">En savoir plus</a>
            </div>
            <div class=\"col-xs-12 col-md-3 col-lg-3\">
                <h3>NOUS CONTACTER</h3>
                <ul class=\"nav\">
\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-phone\"></i> 032 481 20 47 </a></li>
\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-envelope-o\"></i> direp@ecoletavannes.ch</a></li>
\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-question\"></i> FAQ</a></li>
\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-life-ring\"></i> Support</a></li>
\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-leanpub\"></i> Terms</a></li>
\t\t\t\t</ul>
            </div>
            <div class=\"col-xs-12 col-md-3 col-lg-3\">
                <h3>ADRESSE</h3>
                <ul class=\"nav mail-list\">
\t\t\t\t\t<li>Ecoles de Tavannes</li>
\t\t\t\t\t<li>Rue du Collège 2</li>
\t\t\t\t\t<li>CH-2710 Tavannes</li>

\t\t\t\t</ul>
            </div>
        </div>
    </div>
</section>
<section>
    <ul class=\"icons\">
        <li><a href=\"#\" class=\"icon fa fa-twitter\" target=\"_blank\"><span class=\"label\">Twitter</span></a></li>
        <li><a href=\"#\" class=\"icon fa fa-google-plus\" target=\"_blank\"><span class=\"label\">Google Plus</span></a></li>
        <li><a href=\"#\" class=\"icon fa fa-dribbble\" target=\"_blank\"><span class=\"label\">Dribbble</span></a></li>
        <li><a href=\"#\" class=\"icon fa fa-instagram\" target=\"_blank\"><span class=\"label\">Instagram</span></a></li>
    </ul>
    <ul class=\"copyright\">
        <li>Copyright &copy {{ \"now\"|date(\"Y\") }}; Ecoles Tavannes. Tous droits réservés.</li>
    </ul>
</section>", "C:\\laragon\\www\\ecole/themes/simpleweb-alpha/partials/footer.htm", "");
    }
}
