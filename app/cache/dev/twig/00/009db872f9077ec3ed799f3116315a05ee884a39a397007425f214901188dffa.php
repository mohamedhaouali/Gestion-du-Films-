<?php

/* film/index.html.twig */
class __TwigTemplate_17b34d076b99558d46302205f33166cd48d7c6638c1823908ec7491fc6ca0e38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FilmBundle::index.html.twig", "film/index.html.twig", 1);
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
        $__internal_0a805814e7067dc7618ba068d40adce21355f14149c9fedd81d252ad46720922 = $this->env->getExtension("native_profiler");
        $__internal_0a805814e7067dc7618ba068d40adce21355f14149c9fedd81d252ad46720922->enter($__internal_0a805814e7067dc7618ba068d40adce21355f14149c9fedd81d252ad46720922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "film/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a805814e7067dc7618ba068d40adce21355f14149c9fedd81d252ad46720922->leave($__internal_0a805814e7067dc7618ba068d40adce21355f14149c9fedd81d252ad46720922_prof);

    }

    // line 3
    public function block_A($context, array $blocks = array())
    {
        $__internal_dc5c176cd919015870fc59738a08532a5edaedf1b2e2dfb84369051ac95b477a = $this->env->getExtension("native_profiler");
        $__internal_dc5c176cd919015870fc59738a08532a5edaedf1b2e2dfb84369051ac95b477a->enter($__internal_dc5c176cd919015870fc59738a08532a5edaedf1b2e2dfb84369051ac95b477a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "A"));

        // line 4
        echo "    <div class=\"row\">

        <div class=\"col-md-3\">
            <p class=\"lead\">Listes Des Categories</p>
            <div class=\"list-group\">
                <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("film_new");
        echo "\"class=\"list-group-item\">Ajouter</a>
                <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("film_modifier");
        echo "\"class=\"list-group-item\">editer</a>
                <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("film_index");
        echo "\" class=\"list-group-item\">afficher</a>
            </div>
        </div>

        <div class=\"col-md-9\">
            <table class =\"table table-striped\">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Titre</th>
                        <th>Description</th>
                        <th>Acteurs</th>
                         <th>Categorie</th>

                    </tr>
                </thead>
                <tbody>
                    ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["films"]) ? $context["films"] : $this->getContext($context, "films")));
        foreach ($context['_seq'] as $context["_key"] => $context["film"]) {
            // line 29
            echo "                        <tr>
                            <td><a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("film_show", array("id" => $this->getAttribute($context["film"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "id", array()), "html", null, true);
            echo "</a></td>
                            <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "titre", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "description", array()), "html", null, true);
            echo "</td>
                            <td> ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["film"], "acteur", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["act"]) {
                // line 34
                echo "                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["act"], "nom", array()), "html", null, true);
                echo " <br> 
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['act'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "                        </td>
                         <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["film"], "categorie", array()), "nom", array()), "html", null, true);
            echo "</td>

                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['film'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                    </tbody>
                </table>



            </div>    
        </div>
        ";
        
        $__internal_dc5c176cd919015870fc59738a08532a5edaedf1b2e2dfb84369051ac95b477a->leave($__internal_dc5c176cd919015870fc59738a08532a5edaedf1b2e2dfb84369051ac95b477a_prof);

    }

    public function getTemplateName()
    {
        return "film/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 41,  112 => 37,  109 => 36,  100 => 34,  96 => 33,  92 => 32,  88 => 31,  82 => 30,  79 => 29,  75 => 28,  55 => 11,  51 => 10,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FilmBundle::index.html.twig" %}*/
/* */
/* {% block A %}*/
/*     <div class="row">*/
/* */
/*         <div class="col-md-3">*/
/*             <p class="lead">Listes Des Categories</p>*/
/*             <div class="list-group">*/
/*                 <a href="{{path('film_new')}}"class="list-group-item">Ajouter</a>*/
/*                 <a href="{{path('film_modifier')}}"class="list-group-item">editer</a>*/
/*                 <a href="{{path('film_index')}}" class="list-group-item">afficher</a>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="col-md-9">*/
/*             <table class ="table table-striped">*/
/*                 <thead>*/
/*                     <tr>*/
/*                         <th>Id</th>*/
/*                         <th>Titre</th>*/
/*                         <th>Description</th>*/
/*                         <th>Acteurs</th>*/
/*                          <th>Categorie</th>*/
/* */
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                     {% for film in films %}*/
/*                         <tr>*/
/*                             <td><a href="{{ path('film_show', { 'id': film.id }) }}">{{ film.id }}</a></td>*/
/*                             <td>{{ film.titre }}</td>*/
/*                             <td>{{ film.description }}</td>*/
/*                             <td> {% for act in film.acteur %}*/
/*                                 {{ act.nom}} <br> */
/*                             {% endfor %}*/
/*                         </td>*/
/*                          <td>{{ film.categorie.nom }}</td>*/
/* */
/*                     </tr>*/
/*                     {% endfor %}*/
/*                     </tbody>*/
/*                 </table>*/
/* */
/* */
/* */
/*             </div>    */
/*         </div>*/
/*         {% endblock A %}*/
