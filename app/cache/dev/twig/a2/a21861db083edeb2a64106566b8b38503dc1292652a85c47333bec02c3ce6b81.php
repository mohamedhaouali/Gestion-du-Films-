<?php

/* FilmBundle:Acteur:modifierActeur.html.twig */
class __TwigTemplate_b5a4aa769c69b2267eb80dddfa9eb0d147300a0675e6388beffdd83bb560a680 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FilmBundle::index.html.twig", "FilmBundle:Acteur:modifierActeur.html.twig", 1);
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
        $__internal_2c43252af34202191890dd33dd3225ace6d4dcf0300cafd22121f91298a6102a = $this->env->getExtension("native_profiler");
        $__internal_2c43252af34202191890dd33dd3225ace6d4dcf0300cafd22121f91298a6102a->enter($__internal_2c43252af34202191890dd33dd3225ace6d4dcf0300cafd22121f91298a6102a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FilmBundle:Acteur:modifierActeur.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c43252af34202191890dd33dd3225ace6d4dcf0300cafd22121f91298a6102a->leave($__internal_2c43252af34202191890dd33dd3225ace6d4dcf0300cafd22121f91298a6102a_prof);

    }

    // line 2
    public function block_A($context, array $blocks = array())
    {
        $__internal_0fde5d2e62872843e9e9374cee8f707c5d482c9a36feb97dc54bb5dc1a15f878 = $this->env->getExtension("native_profiler");
        $__internal_0fde5d2e62872843e9e9374cee8f707c5d482c9a36feb97dc54bb5dc1a15f878->enter($__internal_0fde5d2e62872843e9e9374cee8f707c5d482c9a36feb97dc54bb5dc1a15f878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "A"));

        // line 3
        echo "     <div class=\"row\">

            <div class=\"col-md-3\">
                <p class=\"lead\">Listes Des Categories</p>
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
        // line 16
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
        echo "
<form method=\"post\">
    ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <input type='submit' value=\"modifier\">
</form>
    
  </div>
     </div>
 ";
        
        $__internal_0fde5d2e62872843e9e9374cee8f707c5d482c9a36feb97dc54bb5dc1a15f878->leave($__internal_0fde5d2e62872843e9e9374cee8f707c5d482c9a36feb97dc54bb5dc1a15f878_prof);

    }

    public function getTemplateName()
    {
        return "FilmBundle:Acteur:modifierActeur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 18,  64 => 16,  55 => 10,  51 => 9,  47 => 8,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "FilmBundle::index.html.twig" %}*/
/* {% block A %}*/
/*      <div class="row">*/
/* */
/*             <div class="col-md-3">*/
/*                 <p class="lead">Listes Des Categories</p>*/
/*                 <div class="list-group">*/
/*                     <a href="{{path('Acteur_ajout')}}" class="list-group-item">Ajouter</a>*/
/*                     <a href="{{path('acteur_editer')}}" class="list-group-item">Editer</a>*/
/*                     <a href="{{path('acteur_affiche')}}" class="list-group-item">Afficher</a>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="col-md-9">*/
/* */
/* {{message}}*/
/* <form method="post">*/
/*     {{form_widget(form)}}*/
/*     <input type='submit' value="modifier">*/
/* </form>*/
/*     */
/*   </div>*/
/*      </div>*/
/*  {% endblock %}   */
/*     */
