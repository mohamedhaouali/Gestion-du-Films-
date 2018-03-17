<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_9d59b6728e501527968552a79baefe9308371c085485b0638e934fec917c7d6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a44d1705c1860ae43fca5a85d22210bdbbebe90b3f09510a8d7fcda5c06a8069 = $this->env->getExtension("native_profiler");
        $__internal_a44d1705c1860ae43fca5a85d22210bdbbebe90b3f09510a8d7fcda5c06a8069->enter($__internal_a44d1705c1860ae43fca5a85d22210bdbbebe90b3f09510a8d7fcda5c06a8069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a44d1705c1860ae43fca5a85d22210bdbbebe90b3f09510a8d7fcda5c06a8069->leave($__internal_a44d1705c1860ae43fca5a85d22210bdbbebe90b3f09510a8d7fcda5c06a8069_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c753e36588baf6a31ea7ed7e6db644e427f7596cdc71cfc70a560c9065a8a66a = $this->env->getExtension("native_profiler");
        $__internal_c753e36588baf6a31ea7ed7e6db644e427f7596cdc71cfc70a560c9065a8a66a->enter($__internal_c753e36588baf6a31ea7ed7e6db644e427f7596cdc71cfc70a560c9065a8a66a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c753e36588baf6a31ea7ed7e6db644e427f7596cdc71cfc70a560c9065a8a66a->leave($__internal_c753e36588baf6a31ea7ed7e6db644e427f7596cdc71cfc70a560c9065a8a66a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8e99a24fe88b62a004ed57164b39a6c4b8cb088554d258fbeeb5c003057d3e15 = $this->env->getExtension("native_profiler");
        $__internal_8e99a24fe88b62a004ed57164b39a6c4b8cb088554d258fbeeb5c003057d3e15->enter($__internal_8e99a24fe88b62a004ed57164b39a6c4b8cb088554d258fbeeb5c003057d3e15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8e99a24fe88b62a004ed57164b39a6c4b8cb088554d258fbeeb5c003057d3e15->leave($__internal_8e99a24fe88b62a004ed57164b39a6c4b8cb088554d258fbeeb5c003057d3e15_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6f0a27271af7d97648c0f75216aecef8e8ccd0a5e4c852b127cd21357c0dc10a = $this->env->getExtension("native_profiler");
        $__internal_6f0a27271af7d97648c0f75216aecef8e8ccd0a5e4c852b127cd21357c0dc10a->enter($__internal_6f0a27271af7d97648c0f75216aecef8e8ccd0a5e4c852b127cd21357c0dc10a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6f0a27271af7d97648c0f75216aecef8e8ccd0a5e4c852b127cd21357c0dc10a->leave($__internal_6f0a27271af7d97648c0f75216aecef8e8ccd0a5e4c852b127cd21357c0dc10a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
