<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_dc2f13cbd5088b0be610e2a94536ffe482bed1e7be6a750c8d9ebd8117f87ce9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_000a30fd24d1d3af801e6e2ab66cc7e68a1fd4ddc8aea88018a745b599fde1f7 = $this->env->getExtension("native_profiler");
        $__internal_000a30fd24d1d3af801e6e2ab66cc7e68a1fd4ddc8aea88018a745b599fde1f7->enter($__internal_000a30fd24d1d3af801e6e2ab66cc7e68a1fd4ddc8aea88018a745b599fde1f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_000a30fd24d1d3af801e6e2ab66cc7e68a1fd4ddc8aea88018a745b599fde1f7->leave($__internal_000a30fd24d1d3af801e6e2ab66cc7e68a1fd4ddc8aea88018a745b599fde1f7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_edcfcd2e13e41ff4d6a0c09f12174977fad714522ad3bf4df0b3d4d88786b28f = $this->env->getExtension("native_profiler");
        $__internal_edcfcd2e13e41ff4d6a0c09f12174977fad714522ad3bf4df0b3d4d88786b28f->enter($__internal_edcfcd2e13e41ff4d6a0c09f12174977fad714522ad3bf4df0b3d4d88786b28f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_edcfcd2e13e41ff4d6a0c09f12174977fad714522ad3bf4df0b3d4d88786b28f->leave($__internal_edcfcd2e13e41ff4d6a0c09f12174977fad714522ad3bf4df0b3d4d88786b28f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
