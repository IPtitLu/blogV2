<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* /index.html.twig */
class __TwigTemplate_decf106bb4188f38c4f7cc26f13b46d90c3c580b8d6252740a3663dbb540c1b2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello Controller!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
<main role=\"main\">

      <section class=\"jumbotron text-center\" >
        <div class=\"container\" style=\"background-image:url('/img/banniere/banniereSneakers.png')!important; height:550px!important;background-repeat: no-repeat!important; background-size: cover!important; align-items:center!important;\">
          <h1 class=\"jumbotron-heading\">Boutique e-commerce</h1>
          </br>
          <p class=\"lead text-muted\">Achat et vente de vêtements, sneakers, etc. Dans l'univers du cinéma, anime, jeux vidéos ..</p>
          <p>
            <a href=\"#\" class=\"btn btn-primary my-2\">Nous contacter</a>
          </p>
        </div>
      </section>

    </br>
    <section class=\"text-center\">
            <div class=\"container\">
                <h1>Nouveautés</h1>
            </div>
    </section>
    </br></br>

      </div>

      <div class=\"container\">
      
        <div class=\"row\">
            ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 34, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 35
            echo "                <div class=\"col-md-4\" >
                    <img src=\"/img/";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "image", [], "any", false, false, false, 36), "html", null, true);
            echo "\" class=\"card-img-top\" alt=\"...\">
                    <div class=\"card-body\">
                            <h5 class=\"card-title\">";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "titre", [], "any", false, false, false, 38), "html", null, true);
            echo "</h5>
                            <p class=\"card-text\">";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "contenu", [], "any", false, false, false, 39), "html", null, true);
            echo "</p>
                            <p class=\"card-text\" style=\"\">";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 40), "html", null, true);
            echo " \$</p>
                            <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produitCarte", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 41)]), "html", null, true);
            echo "\" class=\"btn btn-dark my-2\">Voir</a>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "        
        </div>
    </div>
        
            

</main>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 45,  141 => 41,  137 => 40,  133 => 39,  129 => 38,  124 => 36,  121 => 35,  117 => 34,  88 => 7,  78 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello Controller!{% endblock %}


{% block body %}

<main role=\"main\">

      <section class=\"jumbotron text-center\" >
        <div class=\"container\" style=\"background-image:url('/img/banniere/banniereSneakers.png')!important; height:550px!important;background-repeat: no-repeat!important; background-size: cover!important; align-items:center!important;\">
          <h1 class=\"jumbotron-heading\">Boutique e-commerce</h1>
          </br>
          <p class=\"lead text-muted\">Achat et vente de vêtements, sneakers, etc. Dans l'univers du cinéma, anime, jeux vidéos ..</p>
          <p>
            <a href=\"#\" class=\"btn btn-primary my-2\">Nous contacter</a>
          </p>
        </div>
      </section>

    </br>
    <section class=\"text-center\">
            <div class=\"container\">
                <h1>Nouveautés</h1>
            </div>
    </section>
    </br></br>

      </div>

      <div class=\"container\">
      
        <div class=\"row\">
            {% for produit in produits %}
                <div class=\"col-md-4\" >
                    <img src=\"/img/{{ produit.image }}\" class=\"card-img-top\" alt=\"...\">
                    <div class=\"card-body\">
                            <h5 class=\"card-title\">{{ produit.titre }}</h5>
                            <p class=\"card-text\">{{ produit.contenu }}</p>
                            <p class=\"card-text\" style=\"\">{{ produit.prix }} \$</p>
                            <a href=\"{{ path('produitCarte', {'id': produit.id}) }}\" class=\"btn btn-dark my-2\">Voir</a>
                    </div>
                </div>
            {% endfor %}
        
        </div>
    </div>
        
            

</main>
{% endblock %}
", "/index.html.twig", "/Users/lucasprz/Desktop/myproject/github/blogV2/templates/index.html.twig");
    }
}
