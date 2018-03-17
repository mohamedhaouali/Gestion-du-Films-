<?php

/* FilmBundle:Acteur:afficheacteur.html.twig */
class __TwigTemplate_e8ba1b709fe0a03e4bfa805d292e119f0b222e5ca8c71843461c498f08b62ab9 extends Twig_Template
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
        $__internal_0a01afb73633be41beec8270efa58e55ce59598945b7b25dc65ec26711c598a1 = $this->env->getExtension("native_profiler");
        $__internal_0a01afb73633be41beec8270efa58e55ce59598945b7b25dc65ec26711c598a1->enter($__internal_0a01afb73633be41beec8270efa58e55ce59598945b7b25dc65ec26711c598a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FilmBundle:Acteur:afficheacteur.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a01afb73633be41beec8270efa58e55ce59598945b7b25dc65ec26711c598a1->leave($__internal_0a01afb73633be41beec8270efa58e55ce59598945b7b25dc65ec26711c598a1_prof);

    }

    // line 2
    public function block_A($context, array $blocks = array())
    {
        $__internal_ba578f92a368bf7cfb84b791c58f0d91d4820f20f0c81cfb44d86c71883c96b0 = $this->env->getExtension("native_profiler");
        $__internal_ba578f92a368bf7cfb84b791c58f0d91d4820f20f0c81cfb44d86c71883c96b0->enter($__internal_ba578f92a368bf7cfb84b791c58f0d91d4820f20f0c81cfb44d86c71883c96b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "A"));

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
        
        $__internal_ba578f92a368bf7cfb84b791c58f0d91d4820f20f0c81cfb44d86c71883c96b0->leave($__internal_ba578f92a368bf7cfb84b791c58f0d91d4820f20f0c81cfb44d86c71883c96b0_prof);

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
