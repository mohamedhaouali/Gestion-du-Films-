<?php

/* film/new.html.twig */
class __TwigTemplate_66b337820792bef236edd4366ff2a951c5c3bfc62c2296c87866532a974571ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FilmBundle::index.html.twig", "film/new.html.twig", 1);
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
        $__internal_de01f179447550457f1fde68b1d440a3ae85594a59a4204705837c64618a10da = $this->env->getExtension("native_profiler");
        $__internal_de01f179447550457f1fde68b1d440a3ae85594a59a4204705837c64618a10da->enter($__internal_de01f179447550457f1fde68b1d440a3ae85594a59a4204705837c64618a10da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "film/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de01f179447550457f1fde68b1d440a3ae85594a59a4204705837c64618a10da->leave($__internal_de01f179447550457f1fde68b1d440a3ae85594a59a4204705837c64618a10da_prof);

    }

    // line 3
    public function block_A($context, array $blocks = array())
    {
        $__internal_fbc063684f3962b1b1fcfdf697a16caf220311d1ba2780f758f939615f0694fb = $this->env->getExtension("native_profiler");
        $__internal_fbc063684f3962b1b1fcfdf697a16caf220311d1ba2780f758f939615f0694fb->enter($__internal_fbc063684f3962b1b1fcfdf697a16caf220311d1ba2780f758f939615f0694fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "A"));

        // line 4
        echo "    <div class=\"row\">

        <div class=\"col-md-3\">
            <p class=\"lead\">Listes Des Categories</p>
            <div class=\"list-group\">
                <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("film_new");
        echo "\" class=\"list-group-item\">Ajouter</a>
                <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("film_index");
        echo "\"class=\"list-group-item\">editer</a>
                <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("film_index");
        echo "\" class=\"list-group-item\">afficher</a>
            </div>
        </div>

        <div class=\"col-md-9\">
            <h1>Film creation</h1>

            ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
            ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            <input type=\"submit\" value=\"Create\" />
            ";
        // line 21
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "



        </div>    
    </div>
";
        
        $__internal_fbc063684f3962b1b1fcfdf697a16caf220311d1ba2780f758f939615f0694fb->leave($__internal_fbc063684f3962b1b1fcfdf697a16caf220311d1ba2780f758f939615f0694fb_prof);

    }

    public function getTemplateName()
    {
        return "film/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 21,  69 => 19,  65 => 18,  55 => 11,  51 => 10,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
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
/*                 <a href="{{path('film_index')}}"class="list-group-item">editer</a>*/
/*                 <a href="{{path('film_index')}}" class="list-group-item">afficher</a>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="col-md-9">*/
/*             <h1>Film creation</h1>*/
/* */
/*             {{ form_start(form) }}*/
/*             {{ form_widget(form) }}*/
/*             <input type="submit" value="Create" />*/
/*             {{ form_end(form) }}*/
/* */
/* */
/* */
/*         </div>    */
/*     </div>*/
/* {% endblock A %}*/
/* */
