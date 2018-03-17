<?php

/* film/show.html.twig */
class __TwigTemplate_38ef38b526bd1812eb44a0843bfb2c5e22fc3fe13a0d1f8bed1f184ad018701c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FilmBundle::index.html.twig", "film/show.html.twig", 1);
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
        $__internal_7c749051a78f81146100d27f41e746bdaf7db59da374d744ceb4769020be64e0 = $this->env->getExtension("native_profiler");
        $__internal_7c749051a78f81146100d27f41e746bdaf7db59da374d744ceb4769020be64e0->enter($__internal_7c749051a78f81146100d27f41e746bdaf7db59da374d744ceb4769020be64e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "film/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c749051a78f81146100d27f41e746bdaf7db59da374d744ceb4769020be64e0->leave($__internal_7c749051a78f81146100d27f41e746bdaf7db59da374d744ceb4769020be64e0_prof);

    }

    // line 3
    public function block_A($context, array $blocks = array())
    {
        $__internal_84b234389a92335674f49bd29805c146ca12a44c821bdf42311be43d104bc4a3 = $this->env->getExtension("native_profiler");
        $__internal_84b234389a92335674f49bd29805c146ca12a44c821bdf42311be43d104bc4a3->enter($__internal_84b234389a92335674f49bd29805c146ca12a44c821bdf42311be43d104bc4a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "A"));

        // line 4
        echo "    <div class=\"row\">

        <div class=\"col-md-3\">
            <p class=\"lead\">Listes Des Categories</p>
            <div class=\"list-group\">
                <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("film_new");
        echo "\" class=\"list-group-item\">Ajouter</a>
                <a href=\"#\"class=\"list-group-item\">editer</a>
                <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("film_index");
        echo "\" class=\"list-group-item\">afficher</a>
            </div>
        </div>

        <div class=\"col-md-9\">
            <h1>Film</h1>

            <table class =\"table table-striped\">
                <tbody>
                    <tr>
                        <th>Id</th>
                        <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "id", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Titre</th>
                        <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "titre", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "description", array()), "html", null, true);
        echo "</td>
                    </tr>

                </tbody>
            </table>

            <ul>
                <li>
                    ";
        // line 41
        echo "                </li>
            </ul>

        </div>    
    </div>
";
        
        $__internal_84b234389a92335674f49bd29805c146ca12a44c821bdf42311be43d104bc4a3->leave($__internal_84b234389a92335674f49bd29805c146ca12a44c821bdf42311be43d104bc4a3_prof);

    }

    public function getTemplateName()
    {
        return "film/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 41,  80 => 30,  73 => 26,  66 => 22,  52 => 11,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
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
/*                 <a href="{{path('film_new')}}" class="list-group-item">Ajouter</a>*/
/*                 <a href="#"class="list-group-item">editer</a>*/
/*                 <a href="{{path('film_index')}}" class="list-group-item">afficher</a>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="col-md-9">*/
/*             <h1>Film</h1>*/
/* */
/*             <table class ="table table-striped">*/
/*                 <tbody>*/
/*                     <tr>*/
/*                         <th>Id</th>*/
/*                         <td>{{ film.id }}</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <th>Titre</th>*/
/*                         <td>{{ film.titre }}</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <th>Description</th>*/
/*                         <td>{{ film.description }}</td>*/
/*                     </tr>*/
/* */
/*                 </tbody>*/
/*             </table>*/
/* */
/*             <ul>*/
/*                 <li>*/
/*                     {#{ form_start(delete_form) }}*/
/*                     <input type="submit" value="Delete">*/
/*                     {{ form_end(delete_form) }#}*/
/*                 </li>*/
/*             </ul>*/
/* */
/*         </div>    */
/*     </div>*/
/* {% endblock A %}*/
