<?php

/* @gantry-admin/modals/particle-picker.html.twig */
class __TwigTemplate_67a58b28e5335a6aa535382cbd023e8beafe49f2ff82e19e853742044be6b306 extends Twig_Template
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
        // line 1
        echo "<div data-mm-particle-stepone=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "route", array(0 => "menu/particle"), "method"), "html", null, true);
        echo "\" class=\"menu-editor-extras\">
    <div class=\"card settings-block\">
        <h4>
            ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_PICK_PARTICLE"), "html", null, true);
        echo "
        </h4>
        <div class=\"inner-params\">
            <div class=\"g5-lm-particles-picker menu-editor-particles\">
                <div class=\"search\">
                    <input type=\"text\" placeholder=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_SEARCH_ELI"), "html", null, true);
        echo "\" />
                    <i class=\"fa fa-search\"></i>
                </div>
                <ul>
                    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["particles"]) ? $context["particles"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["list"]) {
            // line 14
            echo "                        ";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $context["key"]), "html", null, true);
            echo "
                        <ul>
                            ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["list"]);
            foreach ($context['_seq'] as $context["type"] => $context["particle"]) {
                // line 17
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["particle"]);
                foreach ($context['_seq'] as $context["item_key"] => $context["item"]) {
                    // line 18
                    echo "                                    <li class=\"g5-lm-particle-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\"
                                        data-lm-nodrag
                                        data-mm-type=\"particle\"
                                        data-lm-blocktype=\"";
                    // line 21
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\"
                                        data-mm-filter=\"";
                    // line 22
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
                    echo "\"
                                        data-lm-subtype=\"";
                    // line 23
                    echo twig_escape_filter($this->env, $context["item_key"], "html", null, true);
                    echo "\">
                                        <span class=\"icon\"><i class=\"fa fa-fw ";
                    // line 24
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "icon", array()), "fa-cube")) : ("fa-cube")), "html", null, true);
                    echo "\"></i></span>
                                        <span class=\"title\">";
                    // line 25
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
                    echo "</span>
                                    </li>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['item_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 28
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['particle'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "                        </ul>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['list'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "                </ul>
            </div>
        </div>
    </div>
    <div class=\"g-modal-actions\">
        ";
        // line 37
        echo "        <button class=\"button button-primary\" type=\"submit\" data-mm-select=\"\" disabled=\"disabled\">
            ";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_SELECT"), "html", null, true);
        echo " <i class=\"fa fa-fw fa-chevron-right\"></i>
        </button>
        <button class=\"button g5-dialog-close\">
            ";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_CANCEL"), "html", null, true);
        echo "
        </button>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@gantry-admin/modals/particle-picker.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 41,  115 => 38,  112 => 37,  105 => 31,  98 => 29,  92 => 28,  83 => 25,  79 => 24,  75 => 23,  71 => 22,  67 => 21,  60 => 18,  55 => 17,  51 => 16,  45 => 14,  41 => 13,  34 => 9,  26 => 4,  19 => 1,);
    }
}
/* <div data-mm-particle-stepone="{{ gantry.route('menu/particle') }}" class="menu-editor-extras">*/
/*     <div class="card settings-block">*/
/*         <h4>*/
/*             {{ 'GANTRY5_PLATFORM_PICK_PARTICLE'|trans }}*/
/*         </h4>*/
/*         <div class="inner-params">*/
/*             <div class="g5-lm-particles-picker menu-editor-particles">*/
/*                 <div class="search">*/
/*                     <input type="text" placeholder="{{ 'GANTRY5_PLATFORM_SEARCH_ELI'|trans }}" />*/
/*                     <i class="fa fa-search"></i>*/
/*                 </div>*/
/*                 <ul>*/
/*                     {% for key, list in particles %}*/
/*                         {{ key|capitalize }}*/
/*                         <ul>*/
/*                             {% for type, particle in list %}*/
/*                                 {% for item_key, item in particle %}*/
/*                                     <li class="g5-lm-particle-{{ type }}"*/
/*                                         data-lm-nodrag*/
/*                                         data-mm-type="particle"*/
/*                                         data-lm-blocktype="{{ type }}"*/
/*                                         data-mm-filter="{{ item.name }}"*/
/*                                         data-lm-subtype="{{ item_key }}">*/
/*                                         <span class="icon"><i class="fa fa-fw {{ item.icon|default('fa-cube') }}"></i></span>*/
/*                                         <span class="title">{{ item.name }}</span>*/
/*                                     </li>*/
/*                                 {%  endfor %}*/
/*                             {% endfor %}*/
/*                         </ul>*/
/*                     {% endfor %}*/
/*                 </ul>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="g-modal-actions">*/
/*         {#<a class="button float-left">{{ 'GANTRY5_PLATFORM_DEFAULTS'|trans }}</a>#}*/
/*         <button class="button button-primary" type="submit" data-mm-select="" disabled="disabled">*/
/*             {{ 'GANTRY5_PLATFORM_SELECT'|trans }} <i class="fa fa-fw fa-chevron-right"></i>*/
/*         </button>*/
/*         <button class="button g5-dialog-close">*/
/*             {{ 'GANTRY5_PLATFORM_CANCEL'|trans }}*/
/*         </button>*/
/*     </div>*/
/* </div>*/
/* */
