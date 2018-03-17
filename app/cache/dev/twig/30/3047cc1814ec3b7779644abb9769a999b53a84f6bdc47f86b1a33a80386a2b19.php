<?php

/* film/modifier.html.twig */
class __TwigTemplate_26791502ff15faad7361969774b2bf575cd02af46132c37475fbb50e9e23c846 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FilmBundle::index.html.twig", "film/modifier.html.twig", 1);
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
        $__internal_91869b2e1e3e583effbd2c375a40deaf38b9b4e429cdc11f7d26750396ec2bc8 = $this->env->getExtension("native_profiler");
        $__internal_91869b2e1e3e583effbd2c375a40deaf38b9b4e429cdc11f7d26750396ec2bc8->enter($__internal_91869b2e1e3e583effbd2c375a40deaf38b9b4e429cdc11f7d26750396ec2bc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "film/modifier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91869b2e1e3e583effbd2c375a40deaf38b9b4e429cdc11f7d26750396ec2bc8->leave($__internal_91869b2e1e3e583effbd2c375a40deaf38b9b4e429cdc11f7d26750396ec2bc8_prof);

    }

    // line 3
    public function block_A($context, array $blocks = array())
    {
        $__internal_e92d7382d7e93bf51c704a3c7d5dd12b0790c9e9951bf9b75b4f44c30be7a612 = $this->env->getExtension("native_profiler");
        $__internal_e92d7382d7e93bf51c704a3c7d5dd12b0790c9e9951bf9b75b4f44c30be7a612->enter($__internal_e92d7382d7e93bf51c704a3c7d5dd12b0790c9e9951bf9b75b4f44c30be7a612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "A"));

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
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["films"]) ? $context["films"] : $this->getContext($context, "films")));
        foreach ($context['_seq'] as $context["_key"] => $context["film"]) {
            // line 27
            echo "                        <tr>
                            <td><a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("film_show", array("id" => $this->getAttribute($context["film"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "id", array()), "html", null, true);
            echo "</a></td>
                            <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "titre", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "description", array()), "html", null, true);
            echo "</td>
                            <td>
                                <ul>
                                    <li>
                                        <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("film_edit", array("id" => $this->getAttribute($context["film"], "id", array()))), "html", null, true);
            echo "\">modifier</a>
                                    </li>
                                    <li>
                                        <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("film_delete", array("id" => $this->getAttribute($context["film"], "id", array()))), "html", null, true);
            echo "\">supprimer</a>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['film'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "                </tbody>
            </table>



        </div>    
    </div>
";
        
        $__internal_e92d7382d7e93bf51c704a3c7d5dd12b0790c9e9951bf9b75b4f44c30be7a612->leave($__internal_e92d7382d7e93bf51c704a3c7d5dd12b0790c9e9951bf9b75b4f44c30be7a612_prof);

    }

    public function getTemplateName()
    {
        return "film/modifier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 43,  103 => 37,  97 => 34,  90 => 30,  86 => 29,  80 => 28,  77 => 27,  73 => 26,  55 => 11,  51 => 10,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
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
/*                         <th>Actions</th>*/
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                     {% for film in films %}*/
/*                         <tr>*/
/*                             <td><a href="{{ path('film_show', { 'id': film.id }) }}">{{ film.id }}</a></td>*/
/*                             <td>{{ film.titre }}</td>*/
/*                             <td>{{ film.description }}</td>*/
/*                             <td>*/
/*                                 <ul>*/
/*                                     <li>*/
/*                                         <a href="{{ path('film_edit', { 'id': film.id }) }}">modifier</a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="{{ path('film_delete', { 'id': film.id }) }}">supprimer</a>*/
/*                                     </li>*/
/*                                 </ul>*/
/*                             </td>*/
/*                         </tr>*/
/*                     {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/* */
/* */
/* */
/*         </div>    */
/*     </div>*/
/* {% endblock A %}*/
