<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_2a9bac61da459437e7bee3a7318465dc1c55ab01dc247ef9f6dcd92c0a9b8caf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'checkbox_radio_row' => array($this, 'block_checkbox_radio_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3f0777f6975dda5c2867f82bbecfac1b4d8b008e59da00656b2ecfc24e550404 = $this->env->getExtension("native_profiler");
        $__internal_3f0777f6975dda5c2867f82bbecfac1b4d8b008e59da00656b2ecfc24e550404->enter($__internal_3f0777f6975dda5c2867f82bbecfac1b4d8b008e59da00656b2ecfc24e550404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 24
        echo "
";
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('form_row', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('radio_row', $context, $blocks);
        // line 44
        echo "
";
        // line 45
        $this->displayBlock('checkbox_radio_row', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('submit_row', $context, $blocks);
        // line 67
        echo "
";
        // line 68
        $this->displayBlock('form_group_class', $context, $blocks);
        
        $__internal_3f0777f6975dda5c2867f82bbecfac1b4d8b008e59da00656b2ecfc24e550404->leave($__internal_3f0777f6975dda5c2867f82bbecfac1b4d8b008e59da00656b2ecfc24e550404_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_37b979bdd48a3b4da0640d92d696d2861f22b9ecf108d34b5d966170a1150e39 = $this->env->getExtension("native_profiler");
        $__internal_37b979bdd48a3b4da0640d92d696d2861f22b9ecf108d34b5d966170a1150e39->enter($__internal_37b979bdd48a3b4da0640d92d696d2861f22b9ecf108d34b5d966170a1150e39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_37b979bdd48a3b4da0640d92d696d2861f22b9ecf108d34b5d966170a1150e39->leave($__internal_37b979bdd48a3b4da0640d92d696d2861f22b9ecf108d34b5d966170a1150e39_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_2ebecde8ec84a3730c563f89f1daa3bc9223ada894331791ee0199eda85f657b = $this->env->getExtension("native_profiler");
        $__internal_2ebecde8ec84a3730c563f89f1daa3bc9223ada894331791ee0199eda85f657b->enter($__internal_2ebecde8ec84a3730c563f89f1daa3bc9223ada894331791ee0199eda85f657b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        ob_start();
        // line 12
        echo "    ";
        if (((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
            // line 13
            echo "        <div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>
    ";
        } else {
            // line 15
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " ") . $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 16
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_2ebecde8ec84a3730c563f89f1daa3bc9223ada894331791ee0199eda85f657b->leave($__internal_2ebecde8ec84a3730c563f89f1daa3bc9223ada894331791ee0199eda85f657b_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_c47a1ac862a2671fd284682a1f5151569874e1cb3d857e194e94df219e7925c3 = $this->env->getExtension("native_profiler");
        $__internal_c47a1ac862a2671fd284682a1f5151569874e1cb3d857e194e94df219e7925c3->enter($__internal_c47a1ac862a2671fd284682a1f5151569874e1cb3d857e194e94df219e7925c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 22
        echo "col-sm-2";
        
        $__internal_c47a1ac862a2671fd284682a1f5151569874e1cb3d857e194e94df219e7925c3->leave($__internal_c47a1ac862a2671fd284682a1f5151569874e1cb3d857e194e94df219e7925c3_prof);

    }

    // line 27
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_b523378494c86196936c50a22af57c2f66d36fadce366e4127d9d9f697668214 = $this->env->getExtension("native_profiler");
        $__internal_b523378494c86196936c50a22af57c2f66d36fadce366e4127d9d9f697668214->enter($__internal_b523378494c86196936c50a22af57c2f66d36fadce366e4127d9d9f697668214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 28
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) ? $context["force_error"] : $this->getContext($context, "force_error")), false)) : (false))) &&  !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 30
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 33
        echo "</div>
";
        // line 34
        echo "</div>";
        
        $__internal_b523378494c86196936c50a22af57c2f66d36fadce366e4127d9d9f697668214->leave($__internal_b523378494c86196936c50a22af57c2f66d36fadce366e4127d9d9f697668214_prof);

    }

    // line 37
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_0cc67e6c7d30ab61f3cc7c4934bfa1408d108fbb3fa11fa4a9e7bdbf9c323627 = $this->env->getExtension("native_profiler");
        $__internal_0cc67e6c7d30ab61f3cc7c4934bfa1408d108fbb3fa11fa4a9e7bdbf9c323627->enter($__internal_0cc67e6c7d30ab61f3cc7c4934bfa1408d108fbb3fa11fa4a9e7bdbf9c323627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 38
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_0cc67e6c7d30ab61f3cc7c4934bfa1408d108fbb3fa11fa4a9e7bdbf9c323627->leave($__internal_0cc67e6c7d30ab61f3cc7c4934bfa1408d108fbb3fa11fa4a9e7bdbf9c323627_prof);

    }

    // line 41
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_db207aea31fd669e0dcc5710505d40c2d020f4b767baffe6716b00c100296fb9 = $this->env->getExtension("native_profiler");
        $__internal_db207aea31fd669e0dcc5710505d40c2d020f4b767baffe6716b00c100296fb9->enter($__internal_db207aea31fd669e0dcc5710505d40c2d020f4b767baffe6716b00c100296fb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 42
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_db207aea31fd669e0dcc5710505d40c2d020f4b767baffe6716b00c100296fb9->leave($__internal_db207aea31fd669e0dcc5710505d40c2d020f4b767baffe6716b00c100296fb9_prof);

    }

    // line 45
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_44d4dbec0330d122b0dcdfb316cc32b856c9bbcfbc7d2be54bd34b12a370be05 = $this->env->getExtension("native_profiler");
        $__internal_44d4dbec0330d122b0dcdfb316cc32b856c9bbcfbc7d2be54bd34b12a370be05->enter($__internal_44d4dbec0330d122b0dcdfb316cc32b856c9bbcfbc7d2be54bd34b12a370be05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        // line 46
        ob_start();
        // line 47
        echo "    <div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">
        <div class=\"";
        // line 48
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 49
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_44d4dbec0330d122b0dcdfb316cc32b856c9bbcfbc7d2be54bd34b12a370be05->leave($__internal_44d4dbec0330d122b0dcdfb316cc32b856c9bbcfbc7d2be54bd34b12a370be05_prof);

    }

    // line 57
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_e4e4576b91a6a002a6fc4b2b292a0f201f573f55d8c8dfe6a477dff5ab425a01 = $this->env->getExtension("native_profiler");
        $__internal_e4e4576b91a6a002a6fc4b2b292a0f201f573f55d8c8dfe6a477dff5ab425a01->enter($__internal_e4e4576b91a6a002a6fc4b2b292a0f201f573f55d8c8dfe6a477dff5ab425a01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 58
        ob_start();
        // line 59
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 60
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 61
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_e4e4576b91a6a002a6fc4b2b292a0f201f573f55d8c8dfe6a477dff5ab425a01->leave($__internal_e4e4576b91a6a002a6fc4b2b292a0f201f573f55d8c8dfe6a477dff5ab425a01_prof);

    }

    // line 68
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_c0dd2a19ad13ec1c1b6f4df58aeab04b96782f22050c3e9b90d0bf04f45b7343 = $this->env->getExtension("native_profiler");
        $__internal_c0dd2a19ad13ec1c1b6f4df58aeab04b96782f22050c3e9b90d0bf04f45b7343->enter($__internal_c0dd2a19ad13ec1c1b6f4df58aeab04b96782f22050c3e9b90d0bf04f45b7343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 69
        echo "col-sm-10";
        
        $__internal_c0dd2a19ad13ec1c1b6f4df58aeab04b96782f22050c3e9b90d0bf04f45b7343->leave($__internal_c0dd2a19ad13ec1c1b6f4df58aeab04b96782f22050c3e9b90d0bf04f45b7343_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  290 => 69,  284 => 68,  272 => 62,  268 => 61,  264 => 60,  261 => 59,  259 => 58,  253 => 57,  241 => 51,  237 => 50,  233 => 49,  229 => 48,  222 => 47,  220 => 46,  214 => 45,  207 => 42,  201 => 41,  194 => 38,  188 => 37,  181 => 34,  178 => 33,  176 => 32,  174 => 31,  170 => 30,  168 => 29,  162 => 28,  156 => 27,  149 => 22,  143 => 21,  134 => 16,  131 => 15,  125 => 13,  122 => 12,  120 => 11,  114 => 10,  107 => 5,  105 => 4,  99 => 3,  92 => 68,  89 => 67,  87 => 57,  84 => 56,  82 => 45,  79 => 44,  77 => 41,  74 => 40,  72 => 37,  69 => 36,  67 => 27,  64 => 26,  61 => 24,  59 => 21,  56 => 20,  54 => 10,  51 => 9,  48 => 7,  46 => 3,  43 => 2,  14 => 1,);
    }
}
/* {% use "bootstrap_3_layout.html.twig" %}*/
/* */
/* {% block form_start -%}*/
/*     {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}*/
/*     {{- parent() -}}*/
/* {%- endblock form_start %}*/
/* */
/* {# Labels #}*/
/* */
/* {% block form_label -%}*/
/* {% spaceless %}*/
/*     {% if label is same as(false) %}*/
/*         <div class="{{ block('form_label_class') }}"></div>*/
/*     {% else %}*/
/*         {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) %}*/
/*         {{- parent() -}}*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {%- endblock form_label %}*/
/* */
/* {% block form_label_class -%}*/
/* col-sm-2*/
/* {%- endblock form_label_class %}*/
/* */
/* {# Rows #}*/
/* */
/* {% block form_row -%}*/
/*     <div class="form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}">*/
/*         {{- form_label(form) -}}*/
/*         <div class="{{ block('form_group_class') }}">*/
/*             {{- form_widget(form) -}}*/
/*             {{- form_errors(form) -}}*/
/*         </div>*/
/* {##}</div>*/
/* {%- endblock form_row %}*/
/* */
/* {% block checkbox_row -%}*/
/*     {{- block('checkbox_radio_row') -}}*/
/* {%- endblock checkbox_row %}*/
/* */
/* {% block radio_row -%}*/
/*     {{- block('checkbox_radio_row') -}}*/
/* {%- endblock radio_row %}*/
/* */
/* {% block checkbox_radio_row -%}*/
/* {% spaceless %}*/
/*     <div class="form-group{% if not valid %} has-error{% endif %}">*/
/*         <div class="{{ block('form_label_class') }}"></div>*/
/*         <div class="{{ block('form_group_class') }}">*/
/*             {{ form_widget(form) }}*/
/*             {{ form_errors(form) }}*/
/*         </div>*/
/*     </div>*/
/* {% endspaceless %}*/
/* {%- endblock checkbox_radio_row %}*/
/* */
/* {% block submit_row -%}*/
/* {% spaceless %}*/
/*     <div class="form-group">*/
/*         <div class="{{ block('form_label_class') }}"></div>*/
/*         <div class="{{ block('form_group_class') }}">*/
/*             {{ form_widget(form) }}*/
/*         </div>*/
/*     </div>*/
/* {% endspaceless %}*/
/* {% endblock submit_row %}*/
/* */
/* {% block form_group_class -%}*/
/* col-sm-10*/
/* {%- endblock form_group_class %}*/
/* */
