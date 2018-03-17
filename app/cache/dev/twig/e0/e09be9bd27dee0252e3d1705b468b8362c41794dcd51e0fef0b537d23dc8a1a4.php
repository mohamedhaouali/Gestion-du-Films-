<?php

/* FilmBundle:Default:affiche.html.twig */
class __TwigTemplate_de8c6fff5c92323d93973521d05e841261aaab924d2e61df10811388dc913a6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2699e6a7e3fe5ff8ebda83cb63b049a008ce3559dfd2514f40eb0073c7ae92f4 = $this->env->getExtension("native_profiler");
        $__internal_2699e6a7e3fe5ff8ebda83cb63b049a008ce3559dfd2514f40eb0073c7ae92f4->enter($__internal_2699e6a7e3fe5ff8ebda83cb63b049a008ce3559dfd2514f40eb0073c7ae92f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FilmBundle:Default:affiche.html.twig"));

        // line 1
        echo "<table border=\"1\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categ"]) ? $context["categ"] : $this->getContext($context, "categ")));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 3
            echo "        <tr><td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "id", array()), "html", null, true);
            echo " </td>
            <td>";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "nom", array()), "html", null, true);
            echo "</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "</table>
";
        
        $__internal_2699e6a7e3fe5ff8ebda83cb63b049a008ce3559dfd2514f40eb0073c7ae92f4->leave($__internal_2699e6a7e3fe5ff8ebda83cb63b049a008ce3559dfd2514f40eb0073c7ae92f4_prof);

    }

    public function getTemplateName()
    {
        return "FilmBundle:Default:affiche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 6,  34 => 4,  29 => 3,  25 => 2,  22 => 1,);
    }
}
/* <table border="1">*/
/*     {%for c in categ %}*/
/*         <tr><td>{{c.id}} </td>*/
/*             <td>{{c.nom}}</td></tr>*/
/*         {%endfor%}*/
/* </table>*/
/* */
