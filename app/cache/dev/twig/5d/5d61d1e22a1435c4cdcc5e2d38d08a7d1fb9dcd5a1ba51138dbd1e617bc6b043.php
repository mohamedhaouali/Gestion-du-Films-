<?php

/* FilmBundle:Acteur:afficheacteur.html.twig */
class __TwigTemplate_793febb21f6df1d47410e7407dcd0da31339607b8cb2733110110c01602c9e25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FilmBundle::index.html.twig", "FilmBundle:Acteur:afficheacteur.html.twig", 1);
        $this->blocks = array(
            'A' => array($this, 'block_A'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FilmBundle::index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b4d7b3d594173dafe092390bde246a02bf7430494476dc905f0a4aa79abdfa9d = $this->env->getExtension("native_profiler");
        $__internal_b4d7b3d594173dafe092390bde246a02bf7430494476dc905f0a4aa79abdfa9d->enter($__internal_b4d7b3d594173dafe092390bde246a02bf7430494476dc905f0a4aa79abdfa9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FilmBundle:Acteur:afficheacteur.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4d7b3d594173dafe092390bde246a02bf7430494476dc905f0a4aa79abdfa9d->leave($__internal_b4d7b3d594173dafe092390bde246a02bf7430494476dc905f0a4aa79abdfa9d_prof);

    }

    // line 2
    public function block_A($context, array $blocks = array())
    {
        $__internal_6cbcb961a31a9f2549b6d041f9409eefe158dea28b1efd721176887f98f1b767 = $this->env->getExtension("native_profiler");
        $__internal_6cbcb961a31a9f2549b6d041f9409eefe158dea28b1efd721176887f98f1b767->enter($__internal_6cbcb961a31a9f2549b6d041f9409eefe158dea28b1efd721176887f98f1b767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "A"));

        // line 3
        echo "     <div class=\"row\">

            <div class=\"col-md-3\">
                <p class=\"lead\"></p>
                <div class=\"list-group\">
                    <a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("Acteur_ajout");
        echo "\" class=\"list-group-item\">Ajouter</a>
                    <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("acteur_editer");
        echo "\" class=\"list-group-item\">Editer</a>
                    <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("acteur_affiche");
        echo "\" class=\"list-group-item\">Afficher</a>
                </div>
            </div>

            <div class=\"col-md-9\">
                <h2 align=\"center\">Afficher Acteur</h2>
                <table class=\"table table-striped\">
    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 18
            echo "        <tr><td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "nom", array()), "html", null, true);
            echo " </td>
            <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "prenom", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["a"], "date", array()), "d-M-Y"), "html", null, true);
            echo "</td>
           <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "sexe", array()), "html", null, true);
            echo "</td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "        
</table>
            </div>
     </div>
 ";
        
        $__internal_6cbcb961a31a9f2549b6d041f9409eefe158dea28b1efd721176887f98f1b767->leave($__internal_6cbcb961a31a9f2549b6d041f9409eefe158dea28b1efd721176887f98f1b767_prof);

    }

    public function getTemplateName()
    {
        return "FilmBundle:Acteur:afficheacteur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 24,  82 => 21,  78 => 20,  74 => 19,  69 => 18,  65 => 17,  55 => 10,  51 => 9,  47 => 8,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "FilmBundle::index.html.twig" %}*/
/* {% block A %}*/
/*      <div class="row">*/
/* */
/*             <div class="col-md-3">*/
/*                 <p class="lead"></p>*/
/*                 <div class="list-group">*/
/*                     <a href="{{path('Acteur_ajout')}}" class="list-group-item">Ajouter</a>*/
/*                     <a href="{{path('acteur_editer')}}" class="list-group-item">Editer</a>*/
/*                     <a href="{{path('acteur_affiche')}}" class="list-group-item">Afficher</a>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="col-md-9">*/
/*                 <h2 align="center">Afficher Acteur</h2>*/
/*                 <table class="table table-striped">*/
/*     {% for a in act %}*/
/*         <tr><td>{{a.nom}} </td>*/
/*             <td>{{a.prenom}}</td>*/
/*             <td>{{a.date|date('d-M-Y')}}</td>*/
/*            <td>{{a.sexe}}</td>*/
/*         </tr>*/
/*         {% endfor %}*/
/*         */
/* </table>*/
/*             </div>*/
/*      </div>*/
/*  {% endblock %}*/
