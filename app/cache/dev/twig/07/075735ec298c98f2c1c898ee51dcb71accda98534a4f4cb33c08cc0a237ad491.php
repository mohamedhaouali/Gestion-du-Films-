<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_8f01a49775663d907e86ca51831fc2ce0e0ad87daef918b758ec4f846105b121 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FilmBundle::index.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'A' => array($this, 'block_A'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FilmBundle::index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a52741b63355b0872fdd938886c486f0c99329ea112cfd4bdffe492eaadfadd2 = $this->env->getExtension("native_profiler");
        $__internal_a52741b63355b0872fdd938886c486f0c99329ea112cfd4bdffe492eaadfadd2->enter($__internal_a52741b63355b0872fdd938886c486f0c99329ea112cfd4bdffe492eaadfadd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a52741b63355b0872fdd938886c486f0c99329ea112cfd4bdffe492eaadfadd2->leave($__internal_a52741b63355b0872fdd938886c486f0c99329ea112cfd4bdffe492eaadfadd2_prof);

    }

    // line 3
    public function block_A($context, array $blocks = array())
    {
        $__internal_f3fb849dca834cd241bfd65a8fe24155db73e6e5355ad9db57c6f25c1d125fb7 = $this->env->getExtension("native_profiler");
        $__internal_f3fb849dca834cd241bfd65a8fe24155db73e6e5355ad9db57c6f25c1d125fb7->enter($__internal_f3fb849dca834cd241bfd65a8fe24155db73e6e5355ad9db57c6f25c1d125fb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "A"));

        // line 4
        echo "
    <div class=\"row\">

        <div class=\"col-md-3\">
            <h1> Authentification </h1>

        </div>

        <div class=\"col-md-9\">
            ";
        // line 13
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 16
        echo "        </div>
    </div>    

";
        
        $__internal_f3fb849dca834cd241bfd65a8fe24155db73e6e5355ad9db57c6f25c1d125fb7->leave($__internal_f3fb849dca834cd241bfd65a8fe24155db73e6e5355ad9db57c6f25c1d125fb7_prof);

    }

    // line 13
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5b677c01efabdba7eac0e52a48b3b7a832e0adcfcd3c734229ef18b3817a3bcb = $this->env->getExtension("native_profiler");
        $__internal_5b677c01efabdba7eac0e52a48b3b7a832e0adcfcd3c734229ef18b3817a3bcb->enter($__internal_5b677c01efabdba7eac0e52a48b3b7a832e0adcfcd3c734229ef18b3817a3bcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 14
        echo "
            ";
        
        $__internal_5b677c01efabdba7eac0e52a48b3b7a832e0adcfcd3c734229ef18b3817a3bcb->leave($__internal_5b677c01efabdba7eac0e52a48b3b7a832e0adcfcd3c734229ef18b3817a3bcb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 14,  64 => 13,  54 => 16,  52 => 13,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "FilmBundle::index.html.twig" %}*/
/* */
/* {% block A %}*/
/* */
/*     <div class="row">*/
/* */
/*         <div class="col-md-3">*/
/*             <h1> Authentification </h1>*/
/* */
/*         </div>*/
/* */
/*         <div class="col-md-9">*/
/*             {% block fos_user_content %}*/
/* */
/*             {% endblock  %}*/
/*         </div>*/
/*     </div>    */
/* */
/* {% endblock %}  */
/* */
/* */
