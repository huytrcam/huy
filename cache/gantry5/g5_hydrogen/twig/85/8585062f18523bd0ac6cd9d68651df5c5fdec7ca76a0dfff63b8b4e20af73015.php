<?php

/* @particles/copyright.html.twig */
class __TwigTemplate_c7527ed073f472ea6ab4341c6639370b3101cb3d4cba8792b7cd6ff27324e6d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/copyright.html.twig", 1);
        $this->blocks = array(
            'particle' => array($this, 'block_particle'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@nucleus/partials/particle.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["start_date"] = ((twig_in_filter(trim($this->getAttribute($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "date", array()), "start", array())), array(0 => "now", 1 => ""))) ? (twig_date_format_filter($this->env, "now", "Y")) : (twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "date", array()), "start", array()))));
        // line 4
        $context["end_date"] = ((twig_in_filter(trim($this->getAttribute($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "date", array()), "end", array())), array(0 => "now", 1 => ""))) ? (twig_date_format_filter($this->env, "now", "Y")) : (twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "date", array()), "end", array()))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_particle($context, array $blocks = array())
    {
        // line 7
        echo $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "owner", array());
        echo " &copy;
";
        // line 8
        if (((isset($context["start_date"]) ? $context["start_date"] : null) != (isset($context["end_date"]) ? $context["end_date"] : null))) {
            echo twig_escape_filter($this->env, (isset($context["start_date"]) ? $context["start_date"] : null));
            echo " - ";
        }
        // line 9
        echo twig_escape_filter($this->env, (isset($context["end_date"]) ? $context["end_date"] : null));
        echo "
";
    }

    public function getTemplateName()
    {
        return "@particles/copyright.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 9,  40 => 8,  36 => 7,  33 => 6,  29 => 1,  27 => 4,  25 => 3,  11 => 1,);
    }
}
/* {% extends '@nucleus/partials/particle.html.twig' %}*/
/* */
/* {% set start_date = particle.date.start|trim in ['now', ''] ? 'now'|date('Y') : particle.date.start|e %}*/
/* {% set end_date = particle.date.end|trim in ['now', ''] ? 'now'|date('Y') : particle.date.end|e %}*/
/* */
/* {% block particle %}*/
/* {{ particle.owner|raw }} &copy;*/
/* {% if (start_date != end_date) %}{{ start_date|e }} - {% endif %}*/
/* {{ end_date|e }}*/
/* {% endblock %}*/
/* */
