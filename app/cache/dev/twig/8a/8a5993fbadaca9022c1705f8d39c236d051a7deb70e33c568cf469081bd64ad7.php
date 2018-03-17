<?php

/* FilmBundle:Acteur:editeracteur.html.twig */
class __TwigTemplate_16fe034c2f0d16e39d76c7bac661246abfc30804d54c56c1fdca915682eaa34b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FilmBundle::index.html.twig", "FilmBundle:Acteur:editeracteur.html.twig", 1);
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
        $__internal_af7f6019647b50b215d37fac85702b6c41bab01d5cb32f2911f71a7b44dc383f = $this->env->getExtension("native_profiler");
        $__internal_af7f6019647b50b215d37fac85702b6c41bab01d5cb32f2911f71a7b44dc383f->enter($__internal_af7f6019647b50b215d37fac85702b6c41bab01d5cb32f2911f71a7b44dc383f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FilmBundle:Acteur:editeracteur.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af7f6019647b50b215d37fac85702b6c41bab01d5cb32f2911f71a7b44dc383f->leave($__internal_af7f6019647b50b215d37fac85702b6c41bab01d5cb32f2911f71a7b44dc383f_prof);

    }

    // line 2
    public function block_A($context, array $blocks = array())
    {
        $__internal_695b78836431d73bb8b7fd02ca645d2d599a914f1c7e59e9a273f54a21c0e8f8 = $this->env->getExtension("native_profiler");
        $__internal_695b78836431d73bb8b7fd02ca645d2d599a914f1c7e59e9a273f54a21c0e8f8->enter($__internal_695b78836431d73bb8b7fd02ca645d2d599a914f1c7e59e9a273f54a21c0e8f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "A"));

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
                <h2 align=\"center\">Editer Acteur</h2>
                <table class=\"table table-striped\">
    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 18
            echo "        <tr>    <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "id", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "nom", array()), "html", null, true);
            echo " </td>
            <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "prenom", array()), "html", null, true);
            echo "</td>
            
       
           <td><a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("acteur_modifer", array("id" => $this->getAttribute($context["a"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-info\"> <span class=\"glyphicon glyphicon-edit\"></span> modifier</a> </td>
           <td><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("acteur_supprimer", array("id" => $this->getAttribute($context["a"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger\"><span class=\"glyphicon glyphicon-trash\"></span> supprimer</a> </td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        
</table>
            </div>
     </div>
 ";
        
        $__internal_695b78836431d73bb8b7fd02ca645d2d599a914f1c7e59e9a273f54a21c0e8f8->leave($__internal_695b78836431d73bb8b7fd02ca645d2d599a914f1c7e59e9a273f54a21c0e8f8_prof);

    }

    public function getTemplateName()
    {
        return "FilmBundle:Acteur:editeracteur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 27,  88 => 24,  84 => 23,  78 => 20,  74 => 19,  69 => 18,  65 => 17,  55 => 10,  51 => 9,  47 => 8,  40 => 3,  34 => 2,  11 => 1,);
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
/*                 <h2 align="center">Editer Acteur</h2>*/
/*                 <table class="table table-striped">*/
/*     {% for a in act %}*/
/*         <tr>    <td>{{a.id}}</td>*/
/*         <td>{{a.nom}} </td>*/
/*             <td>{{a.prenom}}</td>*/
/*             */
/*        */
/*            <td><a href="{{path('acteur_modifer',{'id':a.id})}}" class="btn btn-info"> <span class="glyphicon glyphicon-edit"></span> modifier</a> </td>*/
/*            <td><a href="{{path('acteur_supprimer',{'id':a.id})}}" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> supprimer</a> </td>*/
/*         </tr>*/
/*         {% endfor %}*/
/*         */
/* </table>*/
/*             </div>*/
/*      </div>*/
/*  {% endblock %}*/
/* */
