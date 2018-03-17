<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_b3f26a33472fd36eda19cf08135ee41c789afd94ee0994ce173d6bc7386019dd extends Twig_Template
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
        $__internal_f7e4b94fff567865b5e895b4b5862ae41bcd9b44f127cc47fa31279419ef1ff0 = $this->env->getExtension("native_profiler");
        $__internal_f7e4b94fff567865b5e895b4b5862ae41bcd9b44f127cc47fa31279419ef1ff0->enter($__internal_f7e4b94fff567865b5e895b4b5862ae41bcd9b44f127cc47fa31279419ef1ff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7e4b94fff567865b5e895b4b5862ae41bcd9b44f127cc47fa31279419ef1ff0->leave($__internal_f7e4b94fff567865b5e895b4b5862ae41bcd9b44f127cc47fa31279419ef1ff0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_28a4d4ead158a5c14d979e72107b9b6549107e5b78bd29570cfd168213e05f12 = $this->env->getExtension("native_profiler");
        $__internal_28a4d4ead158a5c14d979e72107b9b6549107e5b78bd29570cfd168213e05f12->enter($__internal_28a4d4ead158a5c14d979e72107b9b6549107e5b78bd29570cfd168213e05f12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_28a4d4ead158a5c14d979e72107b9b6549107e5b78bd29570cfd168213e05f12->leave($__internal_28a4d4ead158a5c14d979e72107b9b6549107e5b78bd29570cfd168213e05f12_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_153917cd43bf24e03d01316f0a7361e8f6a10d32a85a289b1fb98b655bd6e004 = $this->env->getExtension("native_profiler");
        $__internal_153917cd43bf24e03d01316f0a7361e8f6a10d32a85a289b1fb98b655bd6e004->enter($__internal_153917cd43bf24e03d01316f0a7361e8f6a10d32a85a289b1fb98b655bd6e004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_153917cd43bf24e03d01316f0a7361e8f6a10d32a85a289b1fb98b655bd6e004->leave($__internal_153917cd43bf24e03d01316f0a7361e8f6a10d32a85a289b1fb98b655bd6e004_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e949233dbfffb8f9066f05d094835e1d7ec853d4cf459ef3b32ed467eac522e6 = $this->env->getExtension("native_profiler");
        $__internal_e949233dbfffb8f9066f05d094835e1d7ec853d4cf459ef3b32ed467eac522e6->enter($__internal_e949233dbfffb8f9066f05d094835e1d7ec853d4cf459ef3b32ed467eac522e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_e949233dbfffb8f9066f05d094835e1d7ec853d4cf459ef3b32ed467eac522e6->leave($__internal_e949233dbfffb8f9066f05d094835e1d7ec853d4cf459ef3b32ed467eac522e6_prof);

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
