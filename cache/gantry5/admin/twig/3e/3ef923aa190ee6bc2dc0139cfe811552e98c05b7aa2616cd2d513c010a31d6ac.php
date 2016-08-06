<?php

/* forms/fields/collection/list.html.twig */
class __TwigTemplate_22ec969b6638f06f8fb7028b0a6357210a8d318daf03a8222af67e605a2eb329 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'contents' => array($this, 'block_contents'),
            'label' => array($this, 'block_label'),
            'input' => array($this, 'block_input'),
            'collection_fields' => array($this, 'block_collection_fields'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((("forms/" . ((array_key_exists("layout", $context)) ? (_twig_default_filter((isset($context["layout"]) ? $context["layout"] : null), "field")) : ("field"))) . ".html.twig"), "forms/fields/collection/list.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["value"] = (((( !$this->getAttribute((isset($context["field"]) ? $context["field"] : null), "key", array()) && twig_test_iterable((isset($context["value"]) ? $context["value"] : null))) && twig_length_filter($this->env, (isset($context["value"]) ? $context["value"] : null)))) ? ($this->env->getExtension('GantryTwig')->valuesFilter((isset($context["value"]) ? $context["value"] : null))) : (((array_key_exists("value", $context)) ? (_twig_default_filter((isset($context["value"]) ? $context["value"] : null), $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "default", array()))) : ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "default", array())))));
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_field($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "is_current", array())) {
            // line 7
            echo "        <div class=\"g-grid\">
            ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : null));
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
            foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                // line 9
                echo "                ";
                $context["title"] = ((($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array()) == $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "key", array()))) ? ($context["key"]) : ($this->getAttribute($context["val"], $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array()), array(), "array")));
                // line 10
                echo "                <div class=\"card settings-block\">
                    <h4>
                        <span data-title-editable=\"";
                // line 12
                echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
                echo "\" data-collection-key=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->fieldNameFilter((((((isset($context["scope"]) ? $context["scope"] : null) . ".") . $context["key"]) . ".") . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array()))), "html", null, true);
                echo "\" class=\"title\">";
                echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
                echo "</span>
                        <i class=\"fa fa-pencil font-small\"  tabindex=\"0\" aria-label=\"";
                // line 13
                echo twig_escape_filter($this->env, twig_replace_filter($this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_EDIT_TITLE"), array("%s" => (isset($context["title"]) ? $context["title"] : null))), "html", null, true);
                echo "\" data-title-edit=\"\"></i>
                    </h4>
                    <div class=\"inner-params\">
                        ";
                // line 16
                $this->displayBlock("collection_fields", $context, $blocks);
                echo "
                    </div>
                </div>
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
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "        </div>
    ";
        } else {
            // line 22
            echo "        ";
            $context["can_reorder"] = (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "reorder", array(), "any", true, true)) ? ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "reorder", array())) : (true));
            // line 23
            echo "        ";
            $context["can_remove"] = (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "deletion", array(), "any", true, true)) ? ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "deletion", array())) : (true));
            // line 24
            echo "        ";
            $context["can_addnew"] = (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "add_new", array(), "any", true, true)) ? ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "add_new", array())) : (true));
            // line 25
            echo "        <div class=\"settings-param ";
            echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "type", array()), ".", "-"));
            echo "\">
            ";
            // line 26
            if ((((isset($context["overrideable"]) ? $context["overrideable"] : null) && ( !$this->getAttribute((isset($context["field"]) ? $context["field"] : null), "overridable", array(), "any", true, true) || ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "overridable", array()) == true))) && ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "type", array()) != "container.set"))) {
                // line 27
                echo "                <input type=\"checkbox\" class=\"settings-param-toggle\" id=\"of-";
                echo twig_escape_filter($this->env, ((isset($context["scope"]) ? $context["scope"] : null) . (isset($context["name"]) ? $context["name"] : null)));
                echo "\"";
                echo ((((isset($context["value"]) ? $context["value"] : null) != (isset($context["default_value"]) ? $context["default_value"] : null))) ? (" checked=\"checked\"") : (""));
                echo " />
                <label class=\"settings-param-override\" for=\"of-";
                // line 28
                echo twig_escape_filter($this->env, ((isset($context["scope"]) ? $context["scope"] : null) . (isset($context["name"]) ? $context["name"] : null)));
                echo "\"></label>
            ";
            }
            // line 30
            echo "            ";
            $this->displayBlock('contents', $context, $blocks);
            // line 106
            echo "        </div>
    ";
        }
    }

    // line 30
    public function block_contents($context, array $blocks = array())
    {
        // line 31
        echo "                ";
        $context["field_route"] = twig_replace_filter((((((isset($context["route"]) ? $context["route"] : null) . ".") . (isset($context["prefix"]) ? $context["prefix"] : null)) . ".") . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array())), ".", "/");
        // line 32
        echo "                <span class=\"settings-param-title float-left\">
                    ";
        // line 33
        $this->displayBlock('label', $context, $blocks);
        // line 41
        echo "                </span>
                <div class=\"settings-param-field\" data-field-name=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array()));
        echo "\">
                    ";
        // line 43
        $this->displayBlock('input', $context, $blocks);
        // line 104
        echo "                </div>
            ";
    }

    // line 33
    public function block_label($context, array $blocks = array())
    {
        // line 34
        echo "                        ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "description", array())) {
            // line 35
            echo "                            <span aria-label=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "description", array()));
            echo "\" data-tip=\"";
            echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "description", array());
            echo "\" data-tip-place=\"top-right\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array()));
            echo "</span>
                        ";
        } else {
            // line 37
            echo "                            ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array()));
            echo "
                        ";
        }
        // line 39
        echo "                        ";
        echo ((twig_in_filter($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "required", array()), array(0 => "on", 1 => "true", 2 => 1))) ? ("<span class=\"required\">*</span>") : (""));
        echo "
                    ";
    }

    // line 43
    public function block_input($context, array $blocks = array())
    {
        // line 44
        echo "<div class=\"g5-collection-wrapper\">
                        <ul>";
        // line 46
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "fields", array())) {
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : null));
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
            foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                // line 48
                echo "                                    ";
                if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "ajax", array()) == true)) {
                    // line 49
                    echo "                                        <li data-collection-item=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array()));
                    echo "\">
                                            ";
                    // line 50
                    $context["itemValue"] = ((($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array()) == $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "key", array()))) ? ($context["key"]) : ($this->getAttribute($context["val"], $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array()), array(), "array")));
                    // line 51
                    echo "                                            ";
                    if ((isset($context["can_reorder"]) ? $context["can_reorder"] : null)) {
                        echo "<i class=\"fa fa-reorder font-small item-reorder\"></i>";
                    }
                    // line 52
                    echo "                                            <a class=\"config-cog\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "route", array(0 => (((isset($context["field_route"]) ? $context["field_route"] : null) . "/") . $context["key"])), "method"));
                    echo "\"><span data-title-editable=\"";
                    echo twig_escape_filter($this->env, (isset($context["itemValue"]) ? $context["itemValue"] : null));
                    echo "\" class=\"title\">";
                    echo twig_escape_filter($this->env, (isset($context["itemValue"]) ? $context["itemValue"] : null));
                    echo "</span></a>
                                            ";
                    // line 53
                    if ((isset($context["can_remove"]) ? $context["can_remove"] : null)) {
                        echo "<i class=\"fa fa-fw fa-trash font-small\" data-collection-remove=\"\"></i>";
                    }
                    // line 54
                    echo "                                            ";
                    if ((isset($context["can_addnew"]) ? $context["can_addnew"] : null)) {
                        echo "<i class=\"fa fa-files-o font-small\" data-collection-duplicate=\"\"></i>";
                    }
                    // line 55
                    echo "                                            <i class=\"fa fa-fw fa-pencil font-small\" tabindex=\"0\" aria-label=\"";
                    echo twig_escape_filter($this->env, twig_replace_filter($this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_EDIT_TITLE"), array("%s" => twig_escape_filter($this->env, (isset($context["itemValue"]) ? $context["itemValue"] : null)))), "html", null, true);
                    echo "\" data-title-edit=\"\"></i>
                                        </li>
                                    ";
                } else {
                    // line 58
                    echo "                                        ";
                    $this->displayBlock('collection_fields', $context, $blocks);
                    // line 84
                    echo "                                    ";
                }
                // line 85
                echo "                                ";
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
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 87
        echo "</ul>
                    </div>
                    <div>
                        <ul style=\"display: none\">
                            <li data-collection-nosort data-collection-template=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array()));
        echo "\" style=\"display: none;\">
                                ";
        // line 92
        if ((isset($context["can_reorder"]) ? $context["can_reorder"] : null)) {
            echo "<i class=\"fa fa-reorder font-small item-reorder\"></i>";
        }
        // line 93
        echo "                                <a class=\"config-cog\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "route", array(0 => ((isset($context["field_route"]) ? $context["field_route"] : null) . "/%id%")), "method"));
        echo "\"><span data-title-editable=\"New item\" class=\"title\">New item</span></a>
                                ";
        // line 94
        if ((isset($context["can_remove"]) ? $context["can_remove"] : null)) {
            echo "<i class=\"fa fa-fw fa-trash font-small\" data-collection-remove=\"\"></i>";
        }
        // line 95
        echo "                                ";
        if ((isset($context["can_addnew"]) ? $context["can_addnew"] : null)) {
            echo "<i class=\"fa fa-files-o font-small\" data-collection-duplicate=\"\"></i>";
        }
        // line 96
        echo "                                <i class=\"fa fa-fw fa-pencil font-small\" data-title-edit=\"\"></i>
                            </li>
                        </ul>
                        ";
        // line 99
        if ((isset($context["can_addnew"]) ? $context["can_addnew"] : null)) {
            echo "<span class=\"collection-addnew button button-simple\" data-collection-addnew=\"\" title=\"Add new item\"><i class=\"fa fa-plus font-small\"></i></span>";
        }
        // line 100
        echo "                        <a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "route", array(0 => (isset($context["field_route"]) ? $context["field_route"] : null)), "method"));
        echo "\" class=\"collection-editall button button-simple\" data-collection-editall=\"\" title=\"Edit all items\" ";
        if ((twig_length_filter($this->env, (isset($context["value"]) ? $context["value"] : null)) <= 1)) {
            echo "style=\"display: none;\"";
        }
        echo "><i class=\"fa fa-th-large font-small\"></i></a>
                    </div>
                    <input data-collection-data=\"\" name=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->fieldNameFilter((((isset($context["scope"]) ? $context["scope"] : null) . (isset($context["name"]) ? $context["name"] : null)) . "._json")));
        echo "\" type=\"hidden\" value=\"";
        echo twig_escape_filter($this->env, twig_jsonencode_filter(((array_key_exists("value", $context)) ? (_twig_default_filter((isset($context["value"]) ? $context["value"] : null), array())) : (array())), twig_constant("JSON_UNESCAPED_SLASHES")), "html_attr");
        echo "\"/>
                    ";
    }

    // line 58
    public function block_collection_fields($context, array $blocks = array())
    {
        // line 59
        echo "                                            <div data-g5-collections=\"\">
                                                ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "fields", array()));
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
        foreach ($context['_seq'] as $context["childName"] => $context["child"]) {
            // line 61
            echo "                                                    ";
            if ((is_string($__internal_8ade4fa64fc77e3255d4f7e0bd5205ecd860186c58a091852d192860676682c7 = $context["childName"]) && is_string($__internal_eacdc399e0e7d3ef020049acf20dbcb6e042d5dcf27b22e365ce676b39d0458d = ".") && ('' === $__internal_eacdc399e0e7d3ef020049acf20dbcb6e042d5dcf27b22e365ce676b39d0458d || 0 === strpos($__internal_8ade4fa64fc77e3255d4f7e0bd5205ecd860186c58a091852d192860676682c7, $__internal_eacdc399e0e7d3ef020049acf20dbcb6e042d5dcf27b22e365ce676b39d0458d)))) {
                // line 62
                echo "                                                        ";
                $context["childKey"] = trim($context["childName"], ".");
                // line 63
                echo "                                                        ";
                $context["childValue"] = $this->getAttribute((isset($context["val"]) ? $context["val"] : null), twig_slice($this->env, $context["childName"], 1, null), array(), "array");
                // line 64
                echo "                                                        ";
                $context["childDefault"] = $this->getAttribute((isset($context["default_value"]) ? $context["default_value"] : null), twig_slice($this->env, $context["childName"], 1, null), array(), "array");
                // line 65
                echo "                                                        ";
                $context["childName"] = ((((isset($context["name"]) ? $context["name"] : null) . ".") . (isset($context["key"]) ? $context["key"] : null)) . $context["childName"]);
                // line 66
                echo "                                                    ";
            } else {
                // line 67
                echo "                                                        ";
                $context["childKey"] = $context["childName"];
                // line 68
                echo "                                                        ";
                $context["childValue"] = $this->env->getExtension('GantryTwig')->nestedFunc((isset($context["data"]) ? $context["data"] : null), ((isset($context["scope"]) ? $context["scope"] : null) . $context["childName"]));
                // line 69
                echo "                                                        ";
                $context["childDefault"] = $this->env->getExtension('GantryTwig')->nestedFunc((isset($context["defaults"]) ? $context["defaults"] : null), ((isset($context["scope"]) ? $context["scope"] : null) . $context["childName"]));
                // line 70
                echo "                                                        ";
                $context["childName"] = twig_replace_filter($context["childName"], array("*" => (isset($context["key"]) ? $context["key"] : null)));
                // line 71
                echo "                                                    ";
            }
            // line 72
            echo "                                                    ";
            if (((!twig_in_filter($context["childName"], (isset($context["skip"]) ? $context["skip"] : null)) &&  !$this->getAttribute($context["child"], "skip", array())) && ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array()) != (isset($context["childKey"]) ? $context["childKey"] : null)))) {
                // line 73
                echo "                                                         ";
                if (($this->getAttribute($context["child"], "type", array()) == "key")) {
                    // line 74
                    echo "                                                             ";
                    $this->loadTemplate("forms/fields/key/key.html.twig", "forms/fields/collection/list.html.twig", 74)->display(array_merge($context, array("name" =>                     // line 75
$context["childName"], "field" => $context["child"], "value" => (isset($context["key"]) ? $context["key"] : null))));
                    // line 76
                    echo "                                                         ";
                } elseif ($this->getAttribute($context["child"], "type", array())) {
                    // line 77
                    echo "                                                             ";
                    $this->loadTemplate(array(0 => (("forms/fields/" . twig_replace_filter($this->getAttribute($context["child"], "type", array()), ".", "/")) . ".html.twig"), 1 => "forms/fields/unknown/unknown.html.twig"), "forms/fields/collection/list.html.twig", 77)->display(array_merge($context, array("name" =>                     // line 78
$context["childName"], "field" => $context["child"], "value" => (isset($context["childValue"]) ? $context["childValue"] : null), "default_value" => (isset($context["childDefault"]) ? $context["childDefault"] : null), "prefix" => ((((isset($context["prefix"]) ? $context["prefix"] : null)) ? (((isset($context["prefix"]) ? $context["prefix"] : null) . ".")) : ("")) . $context["childName"]))));
                    // line 79
                    echo "                                                        ";
                }
                // line 80
                echo "                                                    ";
            }
            // line 81
            echo "                                                ";
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
        unset($context['_seq'], $context['_iterated'], $context['childName'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "                                            </div>
                                        ";
    }

    public function getTemplateName()
    {
        return "forms/fields/collection/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  428 => 82,  414 => 81,  411 => 80,  408 => 79,  406 => 78,  404 => 77,  401 => 76,  399 => 75,  397 => 74,  394 => 73,  391 => 72,  388 => 71,  385 => 70,  382 => 69,  379 => 68,  376 => 67,  373 => 66,  370 => 65,  367 => 64,  364 => 63,  361 => 62,  358 => 61,  341 => 60,  338 => 59,  335 => 58,  327 => 102,  317 => 100,  313 => 99,  308 => 96,  303 => 95,  299 => 94,  294 => 93,  290 => 92,  286 => 91,  280 => 87,  265 => 85,  262 => 84,  259 => 58,  252 => 55,  247 => 54,  243 => 53,  234 => 52,  229 => 51,  227 => 50,  222 => 49,  219 => 48,  202 => 47,  200 => 46,  197 => 44,  194 => 43,  187 => 39,  181 => 37,  171 => 35,  168 => 34,  165 => 33,  160 => 104,  158 => 43,  154 => 42,  151 => 41,  149 => 33,  146 => 32,  143 => 31,  140 => 30,  134 => 106,  131 => 30,  126 => 28,  119 => 27,  117 => 26,  112 => 25,  109 => 24,  106 => 23,  103 => 22,  99 => 20,  81 => 16,  75 => 13,  67 => 12,  63 => 10,  60 => 9,  43 => 8,  40 => 7,  37 => 6,  34 => 5,  30 => 1,  28 => 3,  22 => 1,);
    }
}
/* {% extends 'forms/' ~ layout|default('field') ~ '.html.twig' %}*/
/* {# If values contains a plain list of items, we need to reindex them. #}*/
/* {% set value = not field.key and value is iterable and value|length ? value|values : value|default(field.default) %}*/
/* */
/* {% block field %}*/
/*     {% if field.is_current %}*/
/*         <div class="g-grid">*/
/*             {% for key, val in value %}*/
/*                 {% set title = (field.value == field.key ? key : val[field.value]) %}*/
/*                 <div class="card settings-block">*/
/*                     <h4>*/
/*                         <span data-title-editable="{{ title }}" data-collection-key="{{ (scope ~ '.' ~ key ~ '.' ~ field.value)|fieldName }}" class="title">{{ title }}</span>*/
/*                         <i class="fa fa-pencil font-small"  tabindex="0" aria-label="{{ 'GANTRY5_PLATFORM_EDIT_TITLE'|trans|replace({'%s': title}) }}" data-title-edit=""></i>*/
/*                     </h4>*/
/*                     <div class="inner-params">*/
/*                         {{ block('collection_fields') }}*/
/*                     </div>*/
/*                 </div>*/
/*             {% endfor %}*/
/*         </div>*/
/*     {% else %}*/
/*         {% set can_reorder = field.reorder is defined ? field.reorder : true %}*/
/*         {% set can_remove = field.deletion is defined ? field.deletion : true %}*/
/*         {% set can_addnew = field.add_new is defined ? field.add_new : true %}*/
/*         <div class="settings-param {{ field.type|replace('.', '-')|e }}">*/
/*             {% if overrideable and (field.overridable is not defined or field.overridable == true) and field.type != 'container.set' %}*/
/*                 <input type="checkbox" class="settings-param-toggle" id="of-{{ (scope ~ name)|e }}"{{ value != default_value ? ' checked="checked"' }} />*/
/*                 <label class="settings-param-override" for="of-{{ (scope ~ name)|e }}"></label>*/
/*             {% endif %}*/
/*             {% block contents %}*/
/*                 {% set field_route = (route ~ '.' ~ prefix ~ '.' ~ field.name)|replace('.', '/') %}*/
/*                 <span class="settings-param-title float-left">*/
/*                     {% block label %}*/
/*                         {% if field.description %}*/
/*                             <span aria-label="{{ field.description|e }}" data-tip="{{ field.description|raw }}" data-tip-place="top-right">{{ field.label|e }}</span>*/
/*                         {% else %}*/
/*                             {{ field.label|e }}*/
/*                         {% endif %}*/
/*                         {{ field.validate.required in ['on', 'true', 1] ? '<span class="required">*</span>' }}*/
/*                     {% endblock %}*/
/*                 </span>*/
/*                 <div class="settings-param-field" data-field-name="{{ field.name|e }}">*/
/*                     {% block input -%}*/
/*                         <div class="g5-collection-wrapper">*/
/*                         <ul>*/
/*                         {%- if field.fields -%}*/
/*                                 {% for key, val in value %}*/
/*                                     {% if (field.ajax == true) %}*/
/*                                         <li data-collection-item="{{ field.value|e }}">*/
/*                                             {% set itemValue = field.value == field.key ? key : val[field.value] %}*/
/*                                             {% if can_reorder %}<i class="fa fa-reorder font-small item-reorder"></i>{% endif %}*/
/*                                             <a class="config-cog" href="{{ gantry.route(field_route ~ '/' ~ key)|e }}"><span data-title-editable="{{ itemValue|e }}" class="title">{{ itemValue|e }}</span></a>*/
/*                                             {% if can_remove %}<i class="fa fa-fw fa-trash font-small" data-collection-remove=""></i>{% endif %}*/
/*                                             {% if can_addnew %}<i class="fa fa-files-o font-small" data-collection-duplicate=""></i>{% endif %}*/
/*                                             <i class="fa fa-fw fa-pencil font-small" tabindex="0" aria-label="{{ 'GANTRY5_PLATFORM_EDIT_TITLE'|trans|replace({'%s': itemValue|e}) }}" data-title-edit=""></i>*/
/*                                         </li>*/
/*                                     {% else %}*/
/*                                         {% block collection_fields %}*/
/*                                             <div data-g5-collections="">*/
/*                                                 {% for childName, child in field.fields %}*/
/*                                                     {% if childName starts with '.' %}*/
/*                                                         {% set childKey = childName|trim('.') %}*/
/*                                                         {% set childValue = val[childName[1:]] %}*/
/*                                                         {% set childDefault = default_value[childName[1:]] %}*/
/*                                                         {% set childName = name ~ '.' ~ key ~ childName %}*/
/*                                                     {% else %}*/
/*                                                         {% set childKey = childName %}*/
/*                                                         {% set childValue = nested(data, scope ~ childName) %}*/
/*                                                         {% set childDefault = nested(defaults, scope ~ childName) %}*/
/*                                                         {% set childName = childName|replace({'*': key}) %}*/
/*                                                     {% endif %}*/
/*                                                     {% if childName not in skip and not child.skip and field.value != childKey %}*/
/*                                                          {% if child.type == 'key' %}*/
/*                                                              {% include 'forms/fields/key/key.html.twig'*/
/*                                                              with {name: childName, field: child, value: key} %}*/
/*                                                          {% elseif child.type %}*/
/*                                                              {% include ["forms/fields/" ~ child.type|replace('.', '/') ~ ".html.twig", 'forms/fields/unknown/unknown.html.twig']*/
/*                                                              with {name: childName, field: child, value: childValue, default_value: childDefault, prefix: (prefix ? prefix ~ '.' : '') ~ childName} %}*/
/*                                                         {% endif %}*/
/*                                                     {% endif %}*/
/*                                                 {% endfor %}*/
/*                                             </div>*/
/*                                         {% endblock %}*/
/*                                     {% endif %}*/
/*                                 {% endfor %}*/
/*                         {%- endif -%}*/
/*                     </ul>*/
/*                     </div>*/
/*                     <div>*/
/*                         <ul style="display: none">*/
/*                             <li data-collection-nosort data-collection-template="{{ field.value|e }}" style="display: none;">*/
/*                                 {% if can_reorder %}<i class="fa fa-reorder font-small item-reorder"></i>{% endif %}*/
/*                                 <a class="config-cog" href="{{ gantry.route(field_route ~ '/%id%')|e }}"><span data-title-editable="New item" class="title">New item</span></a>*/
/*                                 {% if can_remove %}<i class="fa fa-fw fa-trash font-small" data-collection-remove=""></i>{% endif %}*/
/*                                 {% if can_addnew %}<i class="fa fa-files-o font-small" data-collection-duplicate=""></i>{% endif %}*/
/*                                 <i class="fa fa-fw fa-pencil font-small" data-title-edit=""></i>*/
/*                             </li>*/
/*                         </ul>*/
/*                         {% if can_addnew %}<span class="collection-addnew button button-simple" data-collection-addnew="" title="Add new item"><i class="fa fa-plus font-small"></i></span>{% endif %}*/
/*                         <a href="{{ gantry.route(field_route)|e }}" class="collection-editall button button-simple" data-collection-editall="" title="Edit all items" {% if value|length <= 1 %}style="display: none;"{% endif %}><i class="fa fa-th-large font-small"></i></a>*/
/*                     </div>*/
/*                     <input data-collection-data="" name="{{ (scope ~ name ~ '._json')|fieldName|e }}" type="hidden" value="{{ value|default({})|json_encode(constant('JSON_UNESCAPED_SLASHES'))|e('html_attr') }}"/>*/
/*                     {% endblock %}*/
/*                 </div>*/
/*             {% endblock %}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
