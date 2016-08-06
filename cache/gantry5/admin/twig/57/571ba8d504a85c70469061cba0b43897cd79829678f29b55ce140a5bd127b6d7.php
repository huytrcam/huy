<?php

/* forms/fields/joomla/categories.html.twig */
class __TwigTemplate_4724f6854bdf73141f8d7ce5313251f56ce9b620e21b09eebe566c15dcf8a6b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/fields/input/selectize.html.twig", "forms/fields/joomla/categories.html.twig", 1);
        $this->blocks = array(
            'global_attributes' => array($this, 'block_global_attributes'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "forms/fields/input/selectize.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_global_attributes($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $context["categories"] = twig_array_merge((($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "options", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "options", array()), array())) : (array())), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "platform", array()), "finder", array(0 => "categories"), "method"), "find", array(), "method"));
        // line 5
        echo "    ";
        $context["Options"] = $this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "selectize", array()), "Options", array());
        // line 6
        echo "    ";
        $context["options"] = array();
        // line 7
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["category"]) {
            // line 8
            echo "        ";
            $context["options"] = twig_array_merge((isset($context["options"]) ? $context["options"] : null), array(0 => array("value" => $this->getAttribute($context["category"], "id", array()), "text" => ($this->env->getExtension('GantryTwig')->repeatFilter("- ", ($this->getAttribute($context["category"], "level", array()) - 1)) . $this->getAttribute($context["category"], "title", array())))));
            // line 9
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "    ";
        $context["field"] = twig_array_merge(twig_array_merge((isset($context["field"]) ? $context["field"] : null), (($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "selectize", array(), "any", false, true), "Options", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "selectize", array(), "any", false, true), "Options", array()), array())) : (array()))), array("selectize" => array("delimiter" => ",", "Options" => (isset($context["options"]) ? $context["options"] : null))));
        // line 11
        echo "
    data-selectize=\"";
        // line 12
        echo (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "selectize", array(), "any", true, true)) ? (twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "selectize", array())), "html_attr")) : (""));
        echo "\"
    ";
        // line 13
        $this->displayParentBlock("global_attributes", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "forms/fields/joomla/categories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 13,  60 => 12,  57 => 11,  54 => 10,  48 => 9,  45 => 8,  40 => 7,  37 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'forms/fields/input/selectize.html.twig' %}*/
/* */
/* {% block global_attributes %}*/
/*     {% set categories = field.options|default([])|merge(gantry.platform.finder('categories').find()) %}*/
/*     {% set Options = field.selectize.Options %}*/
/*     {% set options = [] %}*/
/*     {% for key,category in categories %}*/
/*         {% set options = options|merge([{value: category.id, text: '- '|repeat(category.level-1)|raw ~ category.title }])  %}*/
/*     {% endfor %}*/
/*     {% set field = field|merge(field.selectize.Options|default({}))|merge({selectize: { delimiter: ',', Options: options }}) %}*/
/* */
/*     data-selectize="{{ (field.selectize is defined ? field.selectize|json_encode()|e('html_attr') : '') }}"*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
