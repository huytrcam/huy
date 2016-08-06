<?php

/* @gantry-admin/pages/menu/menuitem.html.twig */
class __TwigTemplate_91ef65762d578adb82c153dda1354bc66c8249b6f0f4c32618547253d96ad068 extends Twig_Template
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
        return $this->loadTemplate(((((isset($context["ajax"]) ? $context["ajax"] : null) - (isset($context["suffix"]) ? $context["suffix"] : null))) ? ("@gantry-admin/partials/ajax.html.twig") : ("@gantry-admin/partials/base.html.twig")), "@gantry-admin/pages/menu/menuitem.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "route", array(0 => "menu/edit", 1 => (isset($context["id"]) ? $context["id"] : null), 2 => twig_urlencode_filter((isset($context["path"]) ? $context["path"] : null)), 3 => "validate"), "method"), "html", null, true);
        echo "\">
    <div class=\"card settings-block\">
        <h4>
            <span data-title-editable=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "title", array()), "html", null, true);
        echo "\" class=\"title\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "title", array()), "html", null, true);
        echo "</span>
            <i class=\"fa fa-pencil font-small\" tabindex=\"0\" aria-label=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_EDIT_TITLE", $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "title", array())), "html", null, true);
        echo "\" data-title-edit=\"\"></i>
            ";
        // line 9
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["blueprints"]) ? $context["blueprints"] : null), "form", array()), "fields", array()), "enabled", array())) {
            // line 10
            echo "            ";
            $this->loadTemplate("forms/fields/enable/enable.html.twig", "@gantry-admin/pages/menu/menuitem.html.twig", 10)->display(array_merge($context, array("default" => true, "name" => "enabled", "field" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["blueprints"]) ? $context["blueprints"] : null), "form", array()), "fields", array()), "enabled", array()), "value" => $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "enabled", array()))));
            // line 11
            echo "            ";
        }
        // line 12
        echo "            <span class=\"g-menuitem-path font-small\">/";
        echo twig_escape_filter($this->env, (isset($context["path"]) ? $context["path"] : null), "html", null, true);
        echo "</span>
        </h4>
        <div class=\"inner-params\">
            ";
        // line 15
        $this->loadTemplate("forms/fields.html.twig", "@gantry-admin/pages/menu/menuitem.html.twig", 15)->display(array_merge($context, array("skip" => array(0 => "enabled", 1 => "title", 2 => ((($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "level", array()) > 1)) ? ("dropdown") : ("-noitem-"))))));
        // line 16
        echo "        </div>
    </div>
    <div class=\"g-modal-actions\">
        ";
        // line 20
        echo "        <button class=\"button button-primary\" type=\"submit\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_APPLY"), "html", null, true);
        echo "</button>
        <button class=\"button button-primary\" data-apply-and-save=\"\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_APPLY_SAVE"), "html", null, true);
        echo "</button>
        <button class=\"button g5-dialog-close\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_CANCEL"), "html", null, true);
        echo "</button>
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "@gantry-admin/pages/menu/menuitem.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 22,  74 => 21,  69 => 20,  64 => 16,  62 => 15,  55 => 12,  52 => 11,  49 => 10,  47 => 9,  43 => 8,  37 => 7,  30 => 4,  27 => 3,  18 => 1,);
    }
}
/* {% extends ajax-suffix ? "@gantry-admin/partials/ajax.html.twig" : "@gantry-admin/partials/base.html.twig" %}*/
/* */
/* {% block gantry %}*/
/* <form method="post" action="{{ gantry.route('menu/edit', id, path|url_encode, 'validate') }}">*/
/*     <div class="card settings-block">*/
/*         <h4>*/
/*             <span data-title-editable="{{ data.title }}" class="title">{{ data.title }}</span>*/
/*             <i class="fa fa-pencil font-small" tabindex="0" aria-label="{{ 'GANTRY5_PLATFORM_EDIT_TITLE'|trans(data.title) }}" data-title-edit=""></i>*/
/*             {% if blueprints.form.fields.enabled %}*/
/*             {% include 'forms/fields/enable/enable.html.twig' with {'default': true, 'name': 'enabled', 'field': blueprints.form.fields.enabled, 'value': data.enabled} %}*/
/*             {% endif %}*/
/*             <span class="g-menuitem-path font-small">/{{ path }}</span>*/
/*         </h4>*/
/*         <div class="inner-params">*/
/*             {% include 'forms/fields.html.twig' with {'skip': ['enabled', 'title', data.level > 1 ? 'dropdown' : '-noitem-'] } %}*/
/*         </div>*/
/*     </div>*/
/*     <div class="g-modal-actions">*/
/*         {#<a class="button float-left">{{ 'GANTRY5_PLATFORM_DEFAULTS'|trans }}</a>#}*/
/*         <button class="button button-primary" type="submit">{{ 'GANTRY5_PLATFORM_APPLY'|trans }}</button>*/
/*         <button class="button button-primary" data-apply-and-save="">{{ 'GANTRY5_PLATFORM_APPLY_SAVE'|trans }}</button>*/
/*         <button class="button g5-dialog-close">{{ 'GANTRY5_PLATFORM_CANCEL'|trans }}</button>*/
/*     </div>*/
/* </form>*/
/* {% endblock %}*/
/* */
