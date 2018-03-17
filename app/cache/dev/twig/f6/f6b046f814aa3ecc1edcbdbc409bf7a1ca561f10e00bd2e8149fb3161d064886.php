<?php

/* film/edit.html.twig */
class __TwigTemplate_60df1c0176d6704fea3c1922a448d0d51c5fe514ae2dad576a9cef87c86b16ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FilmBundle::index.html.twig", "film/edit.html.twig", 1);
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
        $__internal_aaa68fd2b0d4f50aa57c27ae45c3c8c1ca3a97572a2f5c58f51419187ab3709f = $this->env->getExtension("native_profiler");
        $__internal_aaa68fd2b0d4f50aa57c27ae45c3c8c1ca3a97572a2f5c58f51419187ab3709f->enter($__internal_aaa68fd2b0d4f50aa57c27ae45c3c8c1ca3a97572a2f5c58f51419187ab3709f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "film/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aaa68fd2b0d4f50aa57c27ae45c3c8c1ca3a97572a2f5c58f51419187ab3709f->leave($__internal_aaa68fd2b0d4f50aa57c27ae45c3c8c1ca3a97572a2f5c58f51419187ab3709f_prof);

    }

    // line 3
    public function block_A($context, array $blocks = array())
    {
        $__internal_8b31ffd247dda3567c5f79f02a37a6588a738c5d8da17a2336ab81c163d04bb6 = $this->env->getExtension("native_profiler");
        $__internal_8b31ffd247dda3567c5f79f02a37a6588a738c5d8da17a2336ab81c163d04bb6->enter($__internal_8b31ffd247dda3567c5f79f02a37a6588a738c5d8da17a2336ab81c163d04bb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "A"));

        // line 4
        echo "    <div class=\"row\">

        <div class=\"col-md-3\">
            <p class=\"lead\">Listes Des Categories</p>
            <div class=\"list-group\">
                <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("film_index");
        echo "\" class=\"list-group-item\">Ajouter</a>
                <a href=\"#\"class=\"list-group-item\">editer</a>
                <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("film_index");
        echo "\" class=\"list-group-item\">afficher</a>
            </div>
        </div>

        <div class=\"col-md-9\">
            <h1>Film edit</h1>

            ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
            ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
            <input type=\"submit\" value=\"Edit\" />
            ";
        // line 21
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

            <ul>
                <li>
                    <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("film_index");
        echo "\">Back to the list</a>
                </li>
                <li>
                    ";
        // line 28
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                    <input type=\"submit\" value=\"Delete\">
                    ";
        // line 30
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
                </li>
            </ul>
        </div>    
    </div>
";
        
        $__internal_8b31ffd247dda3567c5f79f02a37a6588a738c5d8da17a2336ab81c163d04bb6->leave($__internal_8b31ffd247dda3567c5f79f02a37a6588a738c5d8da17a2336ab81c163d04bb6_prof);

    }

    public function getTemplateName()
    {
        return "film/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 30,  84 => 28,  78 => 25,  71 => 21,  66 => 19,  62 => 18,  52 => 11,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
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
/*                 <a href="{{path('film_index')}}" class="list-group-item">Ajouter</a>*/
/*                 <a href="#"class="list-group-item">editer</a>*/
/*                 <a href="{{path('film_index')}}" class="list-group-item">afficher</a>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="col-md-9">*/
/*             <h1>Film edit</h1>*/
/* */
/*             {{ form_start(edit_form) }}*/
/*             {{ form_widget(edit_form) }}*/
/*             <input type="submit" value="Edit" />*/
/*             {{ form_end(edit_form) }}*/
/* */
/*             <ul>*/
/*                 <li>*/
/*                     <a href="{{ path('film_index') }}">Back to the list</a>*/
/*                 </li>*/
/*                 <li>*/
/*                     {{ form_start(delete_form) }}*/
/*                     <input type="submit" value="Delete">*/
/*                     {{ form_end(delete_form) }}*/
/*                 </li>*/
/*             </ul>*/
/*         </div>    */
/*     </div>*/
/* {% endblock A %}*/
