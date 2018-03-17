<?php

/* film/new.html.twig */
class __TwigTemplate_e8a9b61d91ee272607742d864e8a28c00b9c3adc224ff7b2219632563135a3c2 extends Twig_Template
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
        $__internal_5de68ad4fc43923d890fa3e063fe3f73050ae23dff7ddd68b0539569413801aa = $this->env->getExtension("native_profiler");
        $__internal_5de68ad4fc43923d890fa3e063fe3f73050ae23dff7ddd68b0539569413801aa->enter($__internal_5de68ad4fc43923d890fa3e063fe3f73050ae23dff7ddd68b0539569413801aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "film/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5de68ad4fc43923d890fa3e063fe3f73050ae23dff7ddd68b0539569413801aa->leave($__internal_5de68ad4fc43923d890fa3e063fe3f73050ae23dff7ddd68b0539569413801aa_prof);

    }

    // line 3
    public function block_A($context, array $blocks = array())
    {
        $__internal_0cd1aaccd3d9362d5bba368cb9b216810d2fa6a1aa55a3eb4ee7a3126067b9ad = $this->env->getExtension("native_profiler");
        $__internal_0cd1aaccd3d9362d5bba368cb9b216810d2fa6a1aa55a3eb4ee7a3126067b9ad->enter($__internal_0cd1aaccd3d9362d5bba368cb9b216810d2fa6a1aa55a3eb4ee7a3126067b9ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "A"));

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
        
        $__internal_0cd1aaccd3d9362d5bba368cb9b216810d2fa6a1aa55a3eb4ee7a3126067b9ad->leave($__internal_0cd1aaccd3d9362d5bba368cb9b216810d2fa6a1aa55a3eb4ee7a3126067b9ad_prof);

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
