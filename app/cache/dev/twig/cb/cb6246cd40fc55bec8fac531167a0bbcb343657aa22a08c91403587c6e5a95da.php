<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_57992d56194a52b90d57c8fd11be272b9d45ec2c4b20263b9c484ef315565242 extends Twig_Template
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
        $__internal_328008ade5e695714fee53c1034203d9962ab59a0f125937b1be3e0b23fec218 = $this->env->getExtension("native_profiler");
        $__internal_328008ade5e695714fee53c1034203d9962ab59a0f125937b1be3e0b23fec218->enter($__internal_328008ade5e695714fee53c1034203d9962ab59a0f125937b1be3e0b23fec218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_328008ade5e695714fee53c1034203d9962ab59a0f125937b1be3e0b23fec218->leave($__internal_328008ade5e695714fee53c1034203d9962ab59a0f125937b1be3e0b23fec218_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f94e667dd717aef4cffcf09ad6a46ee2a79468d21aae97f64ab2cfcdb5fbc97a = $this->env->getExtension("native_profiler");
        $__internal_f94e667dd717aef4cffcf09ad6a46ee2a79468d21aae97f64ab2cfcdb5fbc97a->enter($__internal_f94e667dd717aef4cffcf09ad6a46ee2a79468d21aae97f64ab2cfcdb5fbc97a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f94e667dd717aef4cffcf09ad6a46ee2a79468d21aae97f64ab2cfcdb5fbc97a->leave($__internal_f94e667dd717aef4cffcf09ad6a46ee2a79468d21aae97f64ab2cfcdb5fbc97a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d363594a50b1b4b8dbd4b440c20f60ef4c74a393d5402314069d1196cfdfafa2 = $this->env->getExtension("native_profiler");
        $__internal_d363594a50b1b4b8dbd4b440c20f60ef4c74a393d5402314069d1196cfdfafa2->enter($__internal_d363594a50b1b4b8dbd4b440c20f60ef4c74a393d5402314069d1196cfdfafa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d363594a50b1b4b8dbd4b440c20f60ef4c74a393d5402314069d1196cfdfafa2->leave($__internal_d363594a50b1b4b8dbd4b440c20f60ef4c74a393d5402314069d1196cfdfafa2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_11ef904aac6b78bb613dab27c6b2caa34aa1cd38707943ac25aae6b7514b70c1 = $this->env->getExtension("native_profiler");
        $__internal_11ef904aac6b78bb613dab27c6b2caa34aa1cd38707943ac25aae6b7514b70c1->enter($__internal_11ef904aac6b78bb613dab27c6b2caa34aa1cd38707943ac25aae6b7514b70c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_11ef904aac6b78bb613dab27c6b2caa34aa1cd38707943ac25aae6b7514b70c1->leave($__internal_11ef904aac6b78bb613dab27c6b2caa34aa1cd38707943ac25aae6b7514b70c1_prof);

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
