<?php

/* FilmBundle:Acteur:ajoutacteur.html.twig */
class __TwigTemplate_01136c61595d0200e1802c2eeafd910b57610e95de66abe9e2aaa303068b5dbe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FilmBundle::index.html.twig", "FilmBundle:Acteur:ajoutacteur.html.twig", 1);
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
        $__internal_7179554781941c2031ebb3f179025e0837c0600bcf15514d4765aba42288323a = $this->env->getExtension("native_profiler");
        $__internal_7179554781941c2031ebb3f179025e0837c0600bcf15514d4765aba42288323a->enter($__internal_7179554781941c2031ebb3f179025e0837c0600bcf15514d4765aba42288323a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FilmBundle:Acteur:ajoutacteur.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7179554781941c2031ebb3f179025e0837c0600bcf15514d4765aba42288323a->leave($__internal_7179554781941c2031ebb3f179025e0837c0600bcf15514d4765aba42288323a_prof);

    }

    // line 2
    public function block_A($context, array $blocks = array())
    {
        $__internal_64a16f70fab5872d4a295e3493e9db56f732fee96a3ab6f2fda19a1ef552ff56 = $this->env->getExtension("native_profiler");
        $__internal_64a16f70fab5872d4a295e3493e9db56f732fee96a3ab6f2fda19a1ef552ff56->enter($__internal_64a16f70fab5872d4a295e3493e9db56f732fee96a3ab6f2fda19a1ef552ff56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "A"));

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



";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
        echo "
<form method=\"post\">
    ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <input type='submit'class=\"btn btn-success\" value=\"ajouter\">
</form>
   </div>
     </div>
 ";
        
        $__internal_64a16f70fab5872d4a295e3493e9db56f732fee96a3ab6f2fda19a1ef552ff56->leave($__internal_64a16f70fab5872d4a295e3493e9db56f732fee96a3ab6f2fda19a1ef552ff56_prof);

    }

    public function getTemplateName()
    {
        return "FilmBundle:Acteur:ajoutacteur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 20,  66 => 18,  55 => 10,  51 => 9,  47 => 8,  40 => 3,  34 => 2,  11 => 1,);
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
/* */
/* */
/* */
/* {{message}}*/
/* <form method="post">*/
/*     {{form_widget(form)}}*/
/*     <input type='submit'class="btn btn-success" value="ajouter">*/
/* </form>*/
/*    </div>*/
/*      </div>*/
/*  {% endblock %}  */
