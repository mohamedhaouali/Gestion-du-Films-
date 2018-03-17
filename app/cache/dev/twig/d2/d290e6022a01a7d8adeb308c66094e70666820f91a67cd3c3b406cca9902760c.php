<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_d3bce72bfce3cf2d6595daf3e8cf6a9fd0da040d9284aeafce2a89c3064a9f58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f5590376ece20a5ab3ea96092990e25fc244f47069054a6fc5fc3db0c7c665dc = $this->env->getExtension("native_profiler");
        $__internal_f5590376ece20a5ab3ea96092990e25fc244f47069054a6fc5fc3db0c7c665dc->enter($__internal_f5590376ece20a5ab3ea96092990e25fc244f47069054a6fc5fc3db0c7c665dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5590376ece20a5ab3ea96092990e25fc244f47069054a6fc5fc3db0c7c665dc->leave($__internal_f5590376ece20a5ab3ea96092990e25fc244f47069054a6fc5fc3db0c7c665dc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c41499b6b0c4182e2eb24665baa9468040e9139d8b9c60912b670afdf4a24386 = $this->env->getExtension("native_profiler");
        $__internal_c41499b6b0c4182e2eb24665baa9468040e9139d8b9c60912b670afdf4a24386->enter($__internal_c41499b6b0c4182e2eb24665baa9468040e9139d8b9c60912b670afdf4a24386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c41499b6b0c4182e2eb24665baa9468040e9139d8b9c60912b670afdf4a24386->leave($__internal_c41499b6b0c4182e2eb24665baa9468040e9139d8b9c60912b670afdf4a24386_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_933f41a7d63d68f12b3cd6bfe1ebb350e7dc0dd55106f2b7827282618eae00c4 = $this->env->getExtension("native_profiler");
        $__internal_933f41a7d63d68f12b3cd6bfe1ebb350e7dc0dd55106f2b7827282618eae00c4->enter($__internal_933f41a7d63d68f12b3cd6bfe1ebb350e7dc0dd55106f2b7827282618eae00c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_933f41a7d63d68f12b3cd6bfe1ebb350e7dc0dd55106f2b7827282618eae00c4->leave($__internal_933f41a7d63d68f12b3cd6bfe1ebb350e7dc0dd55106f2b7827282618eae00c4_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4e1e6c0ad654cea43d5d350bbd4329c485367eff694c93b15f33ac192f59a1b7 = $this->env->getExtension("native_profiler");
        $__internal_4e1e6c0ad654cea43d5d350bbd4329c485367eff694c93b15f33ac192f59a1b7->enter($__internal_4e1e6c0ad654cea43d5d350bbd4329c485367eff694c93b15f33ac192f59a1b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_4e1e6c0ad654cea43d5d350bbd4329c485367eff694c93b15f33ac192f59a1b7->leave($__internal_4e1e6c0ad654cea43d5d350bbd4329c485367eff694c93b15f33ac192f59a1b7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
