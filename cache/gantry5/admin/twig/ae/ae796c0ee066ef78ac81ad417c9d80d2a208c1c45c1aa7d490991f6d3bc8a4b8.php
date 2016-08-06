<?php

/* menu/base.html.twig */
class __TwigTemplate_936fd9034363329d985fc2825b6ef7ceb4ad46f360abd73429134d0dcdd2e5c9 extends Twig_Template
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
        echo "<section";
        // line 2
        if ($this->getAttribute($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "css", array()), "id", array())) {
            echo " id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "css", array()), "id", array()), "html", null, true);
            echo "\"";
        }
        echo " class=\"menu-selector-bar";
        if ($this->getAttribute($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "css", array()), "class", array())) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "css", array()), "class", array()), "html", null, true);
        }
        echo "\" role=\"navigation\">
    <ul class=\"g-grid g-toplevel menu-selector\" data-mm-id=\"\" data-mm-base=\"\" data-mm-base-level=\"1\">
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["item"]) ? $context["item"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 5
            echo "            ";
            $context["active"] = (((twig_first($this->env, twig_split_filter($this->env, $this->getAttribute($context["child"], "path", array()), "/")) == twig_first($this->env, twig_split_filter($this->env, (isset($context["path"]) ? $context["path"] : null), "/")))) ? (" active") : (""));
            // line 6
            echo "            <li data-mm-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "path", array()), "html", null, true);
            echo "\"
                data-mm-level=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "level", array()), "html", null, true);
            echo "\"
                ";
            // line 8
            if ((($this->getAttribute($context["child"], "type", array()) == "particle") || ($this->getAttribute($context["child"], "type", array()) == "module"))) {
                // line 9
                echo "                class=\"g-menu-item-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "type", array()), "html", null, true);
                echo twig_escape_filter($this->env, (isset($context["active"]) ? $context["active"] : null), "html", null, true);
                echo "\"
                data-mm-original-type=\"";
                // line 10
                echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "type", array()), "html", null, true);
                echo "\"
                ";
            } else {
                // line 12
                echo "                class=\"";
                echo twig_escape_filter($this->env, (isset($context["active"]) ? $context["active"] : null), "html", null, true);
                echo "\"
                ";
            }
            // line 14
            echo "            >
                ";
            // line 15
            $this->loadTemplate("menu/item.html.twig", "menu/base.html.twig", 15)->display(array_merge($context, array("item" => $context["child"], "target" => "columns")));
            // line 16
            echo "            </li>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "    </ul>
    ";
        // line 19
        if ($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "authorize", array(0 => "menu.edit"), "method")) {
            // line 20
            echo "    <a class=\"global-menu-settings\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "route", array(0 => "menu/edit", 1 => (isset($context["id"]) ? $context["id"] : null)), "method"), "html", null, true);
            echo "\">
        <i aria-label=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_MENU_GLOBAL_SETTINGS"), "html", null, true);
            echo "\" class=\"fa fa-cog\"></i>
    </a>
    ";
        }
        // line 24
        echo "</section>
<div class=\"column-container\" data-g5-menu-columns=\"\">
    ";
        // line 26
        if ((isset($context["columns"]) ? $context["columns"] : null)) {
            // line 27
            echo "        ";
            $this->loadTemplate("menu/columns.html.twig", "menu/base.html.twig", 27)->display(array_merge($context, array("item" => (isset($context["columns"]) ? $context["columns"] : null))));
            // line 28
            echo "    ";
        }
        // line 29
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "menu/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 29,  128 => 28,  125 => 27,  123 => 26,  119 => 24,  113 => 21,  108 => 20,  106 => 19,  103 => 18,  88 => 16,  86 => 15,  83 => 14,  77 => 12,  72 => 10,  66 => 9,  64 => 8,  60 => 7,  55 => 6,  52 => 5,  35 => 4,  21 => 2,  19 => 1,);
    }
}
/* <section*/
/*     {%- if particle.css.id %} id="{{ particle.css.id }}"{% endif %} class="menu-selector-bar{%- if particle.css.class %} {{ particle.css.class }}{% endif %}" role="navigation">*/
/*     <ul class="g-grid g-toplevel menu-selector" data-mm-id="" data-mm-base="" data-mm-base-level="1">*/
/*         {% for child in item %}*/
/*             {% set active = (child.path|split('/')|first) == (path|split('/')|first) ? ' active' : '' %}*/
/*             <li data-mm-id="{{ child.path }}"*/
/*                 data-mm-level="{{ child.level }}"*/
/*                 {% if child.type == 'particle' or child.type == 'module' %}*/
/*                 class="g-menu-item-{{ child.type }}{{ active }}"*/
/*                 data-mm-original-type="{{ child.type }}"*/
/*                 {% else %}*/
/*                 class="{{ active }}"*/
/*                 {% endif %}*/
/*             >*/
/*                 {% include 'menu/item.html.twig' with {'item': child, 'target': 'columns' } %}*/
/*             </li>*/
/*         {% endfor %}*/
/*     </ul>*/
/*     {% if gantry.authorize('menu.edit') %}*/
/*     <a class="global-menu-settings" href="{{ gantry.route('menu/edit', id) }}">*/
/*         <i aria-label="{{ 'GANTRY5_PLATFORM_MENU_GLOBAL_SETTINGS'|trans }}" class="fa fa-cog"></i>*/
/*     </a>*/
/*     {% endif %}*/
/* </section>*/
/* <div class="column-container" data-g5-menu-columns="">*/
/*     {% if columns %}*/
/*         {% include 'menu/columns.html.twig' with {'item': columns } %}*/
/*     {% endif %}*/
/* </div>*/
/* */
