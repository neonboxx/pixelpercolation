<?php

/* record.twig */
class __TwigTemplate_6ef9d37df8a4bc385ffa67aebac588723c59212ed4209ddbf3dd80ccfe2778e1 extends Twig_Template
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
        echo "

<!-- Main Page Content and Sidebar -->

    <!-- Main Blog Content -->
    <div class=\"large-8 columns\" role=\"content\">

        <article>

            <h2 data-bolt-field=\"title\">";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "title", array()), "html", null, true);
        echo "</h2>

            ";
        // line 12
        if ($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "subtitle", array())) {
            // line 13
            echo "                <h3 data-bolt-field=\"subtitle\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "subtitle", array()), "html", null, true);
            echo "</h3>
            ";
        }
        // line 15
        echo "
            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "values", array()));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            if (!twig_in_filter($context["key"], array(0 => "id", 1 => "slug", 2 => "datecreated", 3 => "datechanged", 4 => "datepublish", 5 => "datedepublish", 6 => "username", 7 => "status", 8 => "title", 9 => "subtitle", 10 => "ownerid", 11 => "templatefields"))) {
                // line 17
                echo "
                ";
                // line 18
                if ((($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "fieldtype", array(0 => $context["key"]), "method") == "image") && ($context["value"] != ""))) {
                    // line 19
                    echo "
                    ";
                    // line 20
                    if (($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "image", array()) != "")) {
                        // line 21
                        echo "                        <div class=\"large-4 imageholder\">
                            <a href=\"";
                        // line 22
                        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->image($context["value"]), "html", null, true);
                        echo "\">
                                <img src=\"";
                        // line 23
                        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->thumbnail($context["value"], 640, 480), "html", null, true);
                        echo "\">
                            </a>
                        </div>
                    ";
                    }
                    // line 27
                    echo "

                ";
                } elseif ((($this->getAttribute(                // line 29
(isset($context["record"]) ? $context["record"] : null), "fieldtype", array(0 => $context["key"]), "method") == "imagelist") &&  !twig_test_empty($this->getAttribute((isset($context["record"]) ? $context["record"] : null), $context["key"])))) {
                    // line 30
                    echo "
                    ";
                    // line 35
                    echo "
                    ";
                    // line 36
                    $context["list"] = $this->getAttribute((isset($context["record"]) ? $context["record"] : null), $context["key"]);
                    // line 37
                    echo "
                    ";
                    // line 38
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["list"]) ? $context["list"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 39
                        echo "                        <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->image($this->getAttribute($context["item"], "filename", array())), "html", null, true);
                        echo "\">
                            <img src=\"";
                        // line 40
                        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->thumbnail($this->getAttribute($context["item"], "filename", array()), 100, 100), "html", null, true);
                        echo "\" alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
                        echo "\">
                        </a>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 43
                    echo "
                ";
                } elseif ((($this->getAttribute(                // line 44
(isset($context["record"]) ? $context["record"] : null), "fieldtype", array(0 => $context["key"]), "method") == "video") && $this->getAttribute($context["value"], "responsive", array(), "any", true, true))) {
                    // line 45
                    echo "
                    ";
                    // line 46
                    echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "responsive", array()), "html", null, true);
                    echo "

                ";
                } elseif ((($this->getAttribute(                // line 48
(isset($context["record"]) ? $context["record"] : null), "fieldtype", array(0 => $context["key"]), "method") == "geolocation") &&  !twig_test_empty($this->getAttribute($context["value"], "latitude", array())))) {
                    // line 49
                    echo "
                    <div class=\"imageholder-wide\">
                        <img src=\"http://maps.googleapis.com/maps/api/staticmap?center=";
                    // line 51
                    echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "latitude", array()), "html", null, true);
                    echo ",";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "longitude", array()), "html", null, true);
                    echo "&amp;zoom=14&amp;size=617x300&amp;sensor=false&amp;markers=";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "latitude", array()), "html", null, true);
                    echo ",";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "longitude", array()), "html", null, true);
                    echo "\">
                    </div>
                    <p>";
                    // line 53
                    echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "formatted_address", array()), "html", null, true);
                    echo "</p>

                ";
                } elseif (twig_in_filter($this->getAttribute(                // line 55
(isset($context["record"]) ? $context["record"] : null), "fieldtype", array(0 => $context["key"]), "method"), array(0 => "html", 1 => "markdown", 2 => "textarea"))) {
                    // line 56
                    echo "
                    <div data-bolt-field=\"";
                    // line 57
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), $context["key"]), "html", null, true);
                    echo "</div>

                ";
                } elseif (($this->getAttribute(                // line 59
(isset($context["record"]) ? $context["record"] : null), "fieldtype", array(0 => $context["key"]), "method") == "select")) {
                    // line 60
                    echo "
                    ";
                    // line 62
                    echo "                    <p><strong>";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo ": </strong>
                        ";
                    // line 63
                    echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute((isset($context["record"]) ? $context["record"] : null), $context["key"]), ", "), "html", null, true);
                    echo "
                    </p>

                ";
                } elseif ((!twig_in_filter($this->getAttribute(                // line 66
(isset($context["record"]) ? $context["record"] : null), "fieldtype", array(0 => $context["key"]), "method"), array(0 => "templateselect")) &&  !twig_test_empty($this->getAttribute((isset($context["record"]) ? $context["record"] : null), $context["key"])))) {
                    // line 67
                    echo "
                    ";
                    // line 70
                    echo "                    <p><strong>";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo ": </strong>
                        ";
                    // line 71
                    if (twig_test_iterable($this->getAttribute((isset($context["record"]) ? $context["record"] : null), $context["key"]))) {
                        // line 72
                        echo "                            ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->printDump($this->getAttribute((isset($context["record"]) ? $context["record"] : null), $context["key"])), "html", null, true);
                        echo "
                        ";
                    } else {
                        // line 74
                        echo "                            ";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), $context["key"]), "html", null, true);
                        echo "
                        ";
                    }
                    // line 76
                    echo "                    </p>

                ";
                }
                // line 79
                echo "
            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "
            ";
        // line 85
        echo "

            <p class=\"meta\">
                ";
        // line 88
        $context["previous"] = $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "previous", array(0 => "id"), "method");
        // line 89
        echo "                ";
        if ((isset($context["previous"]) ? $context["previous"] : null)) {
            // line 90
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["previous"]) ? $context["previous"] : null), "link", array()), "html", null, true);
            echo "\">&laquo; ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["previous"]) ? $context["previous"] : null), "title", array()), "html", null, true);
            echo "</a>
                ";
        }
        // line 92
        echo "                -
                ";
        // line 93
        $context["next"] = $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "next", array(0 => "id"), "method");
        // line 94
        echo "                ";
        if ((isset($context["next"]) ? $context["next"] : null)) {
            // line 95
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["next"]) ? $context["next"] : null), "link", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["next"]) ? $context["next"] : null), "title", array()), "html", null, true);
            echo " &raquo;</a>
                ";
        }
        // line 97
        echo "            </p>

            ";
        // line 99
        $context["relatedrecords"] = $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "related", array(), "method");
        // line 100
        echo "            ";
        if ( !twig_test_empty((isset($context["relatedrecords"]) ? $context["relatedrecords"] : null))) {
            // line 101
            echo "                <p class=\"meta\">";
            echo $this->env->getExtension('Bolt')->trans("Related content:");
            echo "
                <ul>
                    ";
            // line 103
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["relatedrecords"]) ? $context["relatedrecords"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["related"]) {
                // line 104
                echo "                        <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["related"], "link", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["related"], "title", array()), "html", null, true);
                echo "</a></li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['related'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 106
            echo "                </ul>
                </p>
            ";
        }
        // line 109
        echo "
        </article>


    </div>



";
    }

    public function getTemplateName()
    {
        return "record.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  286 => 109,  281 => 106,  270 => 104,  266 => 103,  260 => 101,  257 => 100,  255 => 99,  251 => 97,  243 => 95,  240 => 94,  238 => 93,  235 => 92,  227 => 90,  224 => 89,  222 => 88,  217 => 85,  214 => 81,  206 => 79,  201 => 76,  195 => 74,  189 => 72,  187 => 71,  182 => 70,  179 => 67,  177 => 66,  171 => 63,  166 => 62,  163 => 60,  161 => 59,  154 => 57,  151 => 56,  149 => 55,  144 => 53,  133 => 51,  129 => 49,  127 => 48,  122 => 46,  119 => 45,  117 => 44,  114 => 43,  101 => 40,  96 => 39,  92 => 38,  89 => 37,  87 => 36,  84 => 35,  81 => 30,  79 => 29,  75 => 27,  68 => 23,  64 => 22,  61 => 21,  59 => 20,  56 => 19,  54 => 18,  51 => 17,  46 => 16,  43 => 15,  37 => 13,  35 => 12,  30 => 10,  19 => 1,);
    }
}
/* */
/* */
/* <!-- Main Page Content and Sidebar -->*/
/* */
/*     <!-- Main Blog Content -->*/
/*     <div class="large-8 columns" role="content">*/
/* */
/*         <article>*/
/* */
/*             <h2 data-bolt-field="title">{{ record.title }}</h2>*/
/* */
/*             {% if record.subtitle %}*/
/*                 <h3 data-bolt-field="subtitle">{{ record.subtitle }}</h3>*/
/*             {% endif %}*/
/* */
/*             {% for key,value in record.values if key not in ['id', 'slug', 'datecreated', 'datechanged', 'datepublish', 'datedepublish', 'username', 'status', 'title', 'subtitle', 'ownerid', 'templatefields'] %}*/
/* */
/*                 {% if record.fieldtype(key) == "image" and value != "" %}*/
/* */
/*                     {% if record.image!="" %}*/
/*                         <div class="large-4 imageholder">*/
/*                             <a href="{{ image(value) }}">*/
/*                                 <img src="{{ thumbnail(value, 640, 480) }}">*/
/*                             </a>*/
/*                         </div>*/
/*                     {% endif %}*/
/* */
/* */
/*                 {% elseif record.fieldtype(key) == "imagelist" and attribute(record, key) is not empty %}*/
/* */
/*                     {# We do something tricky here: we need to get value of the list in the proper*/
/*                        way, so the value in actually returned as a list. Using {{ record.key }}*/
/*                        won't work, because there is no value 'key'. In your own templates you*/
/*                        will be able to use {{ record.yourfieldname }}. #}*/
/* */
/*                     {% set list = attribute(record, key) %}*/
/* */
/*                     {% for item in list %}*/
/*                         <a href="{{ image(item.filename) }}">*/
/*                             <img src="{{ thumbnail(item.filename, 100,100) }}" alt="{{ item.title }}" title="{{ item.title }}">*/
/*                         </a>*/
/*                     {% endfor %}*/
/* */
/*                 {% elseif record.fieldtype(key) == "video" and value.responsive is defined %}*/
/* */
/*                     {{ value.responsive }}*/
/* */
/*                 {% elseif record.fieldtype(key) == "geolocation" and value.latitude is not empty %}*/
/* */
/*                     <div class="imageholder-wide">*/
/*                         <img src="http://maps.googleapis.com/maps/api/staticmap?center={{ value.latitude }},{{ value.longitude }}&amp;zoom=14&amp;size=617x300&amp;sensor=false&amp;markers={{ value.latitude }},{{ value.longitude }}">*/
/*                     </div>*/
/*                     <p>{{ value.formatted_address }}</p>*/
/* */
/*                 {% elseif record.fieldtype(key) in ['html', 'markdown', 'textarea'] %}*/
/* */
/*                     <div data-bolt-field="{{ key }}">{{ attribute(record, key) }}</div>*/
/* */
/*                 {% elseif record.fieldtype(key) == "select" %}*/
/* */
/*                     {# special case for 'select' fields.. If it's a multiple select, the value is an array. #}*/
/*                     <p><strong>{{ key }}: </strong>*/
/*                         {{ attribute(record, key)|join(", ") }}*/
/*                     </p>*/
/* */
/*                 {% elseif record.fieldtype(key) not in ['templateselect'] and attribute(record, key) is not empty %}*/
/* */
/*                     {# No special case defined for this type of field. We just output it, if it's*/
/*                        a simple scalar, and 'dump' it otherwise. #}*/
/*                     <p><strong>{{ key }}: </strong>*/
/*                         {% if attribute(record, key) is iterable %}*/
/*                             {{ dump(attribute(record, key)) }}*/
/*                         {% else %}*/
/*                             {{ attribute(record, key) }}*/
/*                         {% endif %}*/
/*                     </p>*/
/* */
/*                 {%  endif %}*/
/* */
/*             {% endfor %}*/
/* */
/*             {# Uncomment this if you wish to dump the entire record to the client, for debugging purposes.*/
/*             {{ print(record) }}*/
/*             #}*/
/* */
/* */
/*             <p class="meta">*/
/*                 {% set previous = record.previous('id') %}*/
/*                 {% if previous %}*/
/*                     <a href="{{ previous.link }}">&laquo; {{ previous.title }}</a>*/
/*                 {% endif %}*/
/*                 -*/
/*                 {% set next = record.next('id') %}*/
/*                 {% if next %}*/
/*                     <a href="{{ next.link }}">{{ next.title }} &raquo;</a>*/
/*                 {% endif %}*/
/*             </p>*/
/* */
/*             {% set relatedrecords = record.related() %}*/
/*             {% if relatedrecords is not empty %}*/
/*                 <p class="meta">{{ __('Related content:') }}*/
/*                 <ul>*/
/*                     {% for related in relatedrecords %}*/
/*                         <li><a href="{{ related.link }}">{{ related.title }}</a></li>*/
/*                     {%  endfor %}*/
/*                 </ul>*/
/*                 </p>*/
/*             {% endif %}*/
/* */
/*         </article>*/
/* */
/* */
/*     </div>*/
/* */
/* */
/* */
/* */
