<?php

/* @gantry-admin/pages/menu/particle.html.twig */
class __TwigTemplate_e25e61396f5d1ddbe68e92eb5567144806de30e74338edd69cc34075bd5d5012 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'gantry' => array($this, 'block_gantry'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((((isset($context["ajax"]) ? $context["ajax"] : null) - (isset($context["suffix"]) ? $context["suffix"] : null))) ? ("@gantry-admin/partials/ajax.html.twig") : ("@gantry-admin/partials/base.html.twig")), "@gantry-admin/pages/menu/particle.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_gantry($context, array $blocks = array())
    {
        // line 4
        echo "<form method=\"post\" action=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "route", array(0 => (isset($context["action"]) ? $context["action"] : null)), "method"), "html", null, true);
        echo "\">
    <div class=\"g-tabs\" role=\"tablist\">
        <ul>
            <li class=\"active\">
                <a href=\"#\" id=\"g-switcher-platforms-tab\" role=\"presentation\" aria-controls=\"g-switcher-platforms\" role=\"tab\" aria-expanded=\"true\">
                    ";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_PARTICLE"), "html", null, true);
        echo "
                </a>
            </li>
            <li>
                <a href=\"#\" id=\"g-settings-block-tab\" role=\"presentation\" aria-controls=\"g-settings-block\" role=\"tab\" aria-expanded=\"false\">
                    ";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_BLOCK"), "html", null, true);
        echo "
                </a>
            </li>
        </ul>
    </div>

    <div class=\"g-panes\">
        <div class=\"g-pane active\" role=\"tabpanel\" id=\"g-settings-particle\" aria-labelledby=\"g-settings-particle-tab\" aria-expanded=\"true\">
            <div class=\"card settings-block\">
                <h4>
                    <span data-title-editable=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title", array()), "html", null, true);
        echo "\" class=\"title\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title", array()), "html", null, true);
        echo "</span>
                    <i class=\"fa fa-pencil font-small\" tabindex=\"0\" aria-label=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_EDIT_TITLE", $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title", array())), "html", null, true);
        echo "\" data-title-edit=\"\"></i>
                    <span class=\"badge font-small\">";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "options", array()), "type", array()), "html", null, true);
        echo "</span>
                    ";
        // line 27
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "form", array()), "fields", array()), "enabled", array())) {
            // line 28
            echo "                    ";
            $this->loadTemplate("forms/fields/enable/enable.html.twig", "@gantry-admin/pages/menu/particle.html.twig", 28)->display(array_merge($context, array("name" => ((isset($context["prefix"]) ? $context["prefix"] : null) . "enabled"), "field" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "form", array()), "fields", array()), "enabled", array()), "value" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "options", array()), "particle", array()), "enabled", array()), "default" => 1)));
            // line 29
            echo "                    ";
        }
        // line 30
        echo "                </h4>

                <div class=\"inner-params\">
                    ";
        // line 33
        $this->loadTemplate("forms/fields.html.twig", "@gantry-admin/pages/menu/particle.html.twig", 33)->display(array_merge($context, array("blueprints" => $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "form", array()), "data" => (isset($context["data"]) ? $context["data"] : null), "prefix" => (isset($context["prefix"]) ? $context["prefix"] : null), "skip" => array(0 => "enabled"))));
        // line 34
        echo "                </div>
            </div>
        </div>

        <div class=\"g-pane\" role=\"tabpanel\" id=\"g-settings-block\" aria-labelledby=\"g-settings-block-tab\" aria-expanded=\"false\">
            <div class=\"card settings-block\">
                <h4>
                    ";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_BLOCK"), "html", null, true);
        echo "
                </h4>
                <div class=\"inner-params\">
                    ";
        // line 44
        $this->loadTemplate("forms/fields.html.twig", "@gantry-admin/pages/menu/particle.html.twig", 44)->display(array_merge($context, array("blueprints" => $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "form", array()), "data" => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "options", array()), "prefix" => "block.")));
        // line 45
        echo "                </div>
            </div>
        </div>
    </div>

    <div class=\"g-modal-actions\">
        <button class=\"button button-primary\" type=\"submit\">";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_APPLY"), "html", null, true);
        echo "</button>
        <button class=\"button button-primary\" data-apply-and-save=\"\">";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_APPLY_SAVE"), "html", null, true);
        echo "</button>
        <button class=\"button g5-dialog-close\">";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_CANCEL"), "html", null, true);
        echo "</button>
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "@gantry-admin/pages/menu/particle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 53,  118 => 52,  114 => 51,  106 => 45,  104 => 44,  98 => 41,  89 => 34,  87 => 33,  82 => 30,  79 => 29,  76 => 28,  74 => 27,  70 => 26,  66 => 25,  60 => 24,  47 => 14,  39 => 9,  30 => 4,  27 => 3,  18 => 1,);
    }
}
/* {% extends ajax-suffix ? "@gantry-admin/partials/ajax.html.twig" : "@gantry-admin/partials/base.html.twig" %}*/
/* */
/* {% block gantry %}*/
/* <form method="post" action="{{ gantry.route(action) }}">*/
/*     <div class="g-tabs" role="tablist">*/
/*         <ul>*/
/*             <li class="active">*/
/*                 <a href="#" id="g-switcher-platforms-tab" role="presentation" aria-controls="g-switcher-platforms" role="tab" aria-expanded="true">*/
/*                     {{ 'GANTRY5_PLATFORM_PARTICLE'|trans }}*/
/*                 </a>*/
/*             </li>*/
/*             <li>*/
/*                 <a href="#" id="g-settings-block-tab" role="presentation" aria-controls="g-settings-block" role="tab" aria-expanded="false">*/
/*                     {{ 'GANTRY5_PLATFORM_BLOCK'|trans }}*/
/*                 </a>*/
/*             </li>*/
/*         </ul>*/
/*     </div>*/
/* */
/*     <div class="g-panes">*/
/*         <div class="g-pane active" role="tabpanel" id="g-settings-particle" aria-labelledby="g-settings-particle-tab" aria-expanded="true">*/
/*             <div class="card settings-block">*/
/*                 <h4>*/
/*                     <span data-title-editable="{{ item.title }}" class="title">{{ item.title }}</span>*/
/*                     <i class="fa fa-pencil font-small" tabindex="0" aria-label="{{ 'GANTRY5_PLATFORM_EDIT_TITLE'|trans(item.title) }}" data-title-edit=""></i>*/
/*                     <span class="badge font-small">{{ item.options.type }}</span>*/
/*                     {% if particle.form.fields.enabled %}*/
/*                     {% include 'forms/fields/enable/enable.html.twig' with {'name': prefix ~ 'enabled', 'field': particle.form.fields.enabled, 'value': item.options.particle.enabled, 'default': 1} %}*/
/*                     {% endif %}*/
/*                 </h4>*/
/* */
/*                 <div class="inner-params">*/
/*                     {% include 'forms/fields.html.twig' with {'blueprints': particle.form, 'data': data, 'prefix': prefix, 'skip': ['enabled']} %}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="g-pane" role="tabpanel" id="g-settings-block" aria-labelledby="g-settings-block-tab" aria-expanded="false">*/
/*             <div class="card settings-block">*/
/*                 <h4>*/
/*                     {{ 'GANTRY5_PLATFORM_BLOCK'|trans }}*/
/*                 </h4>*/
/*                 <div class="inner-params">*/
/*                     {% include 'forms/fields.html.twig' with {'blueprints': block.form, 'data': item.options, 'prefix': 'block.'} %}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="g-modal-actions">*/
/*         <button class="button button-primary" type="submit">{{ 'GANTRY5_PLATFORM_APPLY'|trans }}</button>*/
/*         <button class="button button-primary" data-apply-and-save="">{{ 'GANTRY5_PLATFORM_APPLY_SAVE'|trans }}</button>*/
/*         <button class="button g5-dialog-close">{{ 'GANTRY5_PLATFORM_CANCEL'|trans }}</button>*/
/*     </div>*/
/* </form>*/
/* {% endblock %}*/
/* */
