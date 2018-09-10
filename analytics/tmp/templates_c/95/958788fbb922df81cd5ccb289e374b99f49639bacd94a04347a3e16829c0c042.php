<?php

/* @Live/_actionCommon.twig */
class __TwigTemplate_383f2f03afbb48ca39efc0e23e119769a502eb73e6ff613d0b1e198ee13818ac extends Twig_Template
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
        echo "<li class=\"";
        if ($this->getAttribute(($context["action"] ?? null), "goalName", array(), "any", true, true)) {
            echo "goal";
        } else {
            echo "action";
        }
        echo "\"
    title=\"";
        // line 2
        echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), array("Live.renderActionTooltip", ($context["action"] ?? $this->getContext($context, "action")), ($context["visitInfo"] ?? $this->getContext($context, "visitInfo"))));
        echo "\">
    <div>
        ";
        // line 5
        echo "        ";
        if ( !twig_test_empty((($this->getAttribute(($context["action"] ?? null), "pageTitle", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["action"] ?? null), "pageTitle", array()), false)) : (false)))) {
            // line 6
            echo "            <span class=\"truncated-text-line\">";
            echo call_user_func_array($this->env->getFilter('rawSafeDecoded')->getCallable(), array($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "pageTitle", array())));
            echo "</span>
        ";
        }
        // line 8
        echo "        ";
        if ($this->getAttribute(($context["action"] ?? null), "siteSearchKeyword", array(), "any", true, true)) {
            // line 9
            echo "            ";
            if (($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "type", array()) == "search")) {
                // line 10
                echo "                <img src='";
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "icon", array()), "html", null, true);
                echo "' title='";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Actions_SubmenuSitesearch")), "html", null, true);
                echo "'
                     class=\"action-list-action-icon search\">
            ";
            }
            // line 13
            echo "            <span class=\"truncated-text-line\">";
            echo call_user_func_array($this->env->getFilter('rawSafeDecoded')->getCallable(), array($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "siteSearchKeyword", array())));
            echo "</span>
        ";
        }
        // line 15
        echo "        ";
        if ( !twig_test_empty($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "url", array()))) {
            // line 16
            echo "            ";
            if ((($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "type", array()) == "action") &&  !twig_test_empty((($this->getAttribute(($context["action"] ?? null), "pageTitle", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["action"] ?? null), "pageTitle", array()), false)) : (false))))) {
                echo "<p>";
            }
            // line 17
            echo "            ";
            if ((($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "type", array()) == "download") || ($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "type", array()) == "outlink"))) {
                // line 18
                echo "                <img src='";
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "icon", array()), "html", null, true);
                echo "' class=\"action-list-action-icon ";
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "type", array()), "html", null, true);
                echo "\">
            ";
            }
            // line 20
            echo "
            ";
            // line 21
            if ((((is_string($__internal_f7930d940907c9870612ba3f3be9214cdf4f6392b8a69bac87ee0d19b8446a52 = twig_lower_filter($this->env, twig_trim_filter($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "url", array())))) && is_string($__internal_7296c160352b650ec12fdc57505c06bdd174c38a435417c2fdd0093e9b2daac9 = "javascript:") && ('' === $__internal_7296c160352b650ec12fdc57505c06bdd174c38a435417c2fdd0093e9b2daac9 || 0 === strpos($__internal_f7930d940907c9870612ba3f3be9214cdf4f6392b8a69bac87ee0d19b8446a52, $__internal_7296c160352b650ec12fdc57505c06bdd174c38a435417c2fdd0093e9b2daac9))) || (is_string($__internal_b8fe95de10b0216a47d73161b541c226ddf144b5c0b737c9482d3636495f803c = twig_lower_filter($this->env, twig_trim_filter($this->getAttribute(            // line 22
($context["action"] ?? $this->getContext($context, "action")), "url", array())))) && is_string($__internal_e9a6c212cc82e21546296a0c9f253b1361bb2978d3e030fb56103ba2738c4e98 = "vbscript:") && ('' === $__internal_e9a6c212cc82e21546296a0c9f253b1361bb2978d3e030fb56103ba2738c4e98 || 0 === strpos($__internal_b8fe95de10b0216a47d73161b541c226ddf144b5c0b737c9482d3636495f803c, $__internal_e9a6c212cc82e21546296a0c9f253b1361bb2978d3e030fb56103ba2738c4e98)))) || (is_string($__internal_0b486de3313fe5d13233c03ba2662445082ade55bf2abbd7aa0b87067bb8f1ed = twig_lower_filter($this->env, twig_trim_filter($this->getAttribute(            // line 23
($context["action"] ?? $this->getContext($context, "action")), "url", array())))) && is_string($__internal_63ffae7779a9c55162b91a1ce69618a5e79c66c7d65cad3023b0a6622c6cd3f1 = "data:") && ('' === $__internal_63ffae7779a9c55162b91a1ce69618a5e79c66c7d65cad3023b0a6622c6cd3f1 || 0 === strpos($__internal_0b486de3313fe5d13233c03ba2662445082ade55bf2abbd7aa0b87067bb8f1ed, $__internal_63ffae7779a9c55162b91a1ce69618a5e79c66c7d65cad3023b0a6622c6cd3f1))))) {
                // line 24
                echo "                ";
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "url", array()), "html", null, true);
                echo "
            ";
            } else {
                // line 26
                echo "                <a href=\"";
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "url", array()), "html", null, true);
                echo "\" rel=\"noreferrer\" target=\"_blank\"
                   class=\"action-list-url truncated-text-line\">
                    ";
                // line 28
                echo \Piwik\piwik_escape_filter($this->env, twig_replace_filter($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "url", array()), array("http://" => "", "https://" => "")), "html", null, true);
                echo "
                </a>
            ";
            }
            // line 31
            echo "            ";
            if ((($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "type", array()) == "action") &&  !twig_test_empty((($this->getAttribute(($context["action"] ?? null), "pageTitle", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["action"] ?? null), "pageTitle", array()), false)) : (false))))) {
                echo "</p>";
            }
            // line 32
            echo "        ";
        } elseif (($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "type", array()) != "search")) {
            // line 33
            echo "            <p>
                <span>";
            // line 34
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_NotDefined", call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Actions_ColumnPageURL")))), "html", null, true);
            echo "</span>
            </p>
        ";
        }
        // line 37
        echo "    </div>
</li>
";
    }

    public function getTemplateName()
    {
        return "@Live/_actionCommon.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 37,  118 => 34,  115 => 33,  112 => 32,  107 => 31,  101 => 28,  95 => 26,  89 => 24,  87 => 23,  86 => 22,  85 => 21,  82 => 20,  74 => 18,  71 => 17,  66 => 16,  63 => 15,  57 => 13,  48 => 10,  45 => 9,  42 => 8,  36 => 6,  33 => 5,  28 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<li class=\"{% if action.goalName is defined %}goal{% else %}action{% endif %}\"
    title=\"{{ postEvent('Live.renderActionTooltip', action, visitInfo) }}\">
    <div>
        {# Page view / Download / Outlink #}
        {% if action.pageTitle|default(false) is not empty %}
            <span class=\"truncated-text-line\">{{ action.pageTitle|rawSafeDecoded }}</span>
        {% endif %}
        {% if action.siteSearchKeyword is defined %}
            {% if action.type == 'search' %}
                <img src='{{ action.icon }}' title='{{ 'Actions_SubmenuSitesearch'|translate }}'
                     class=\"action-list-action-icon search\">
            {% endif %}
            <span class=\"truncated-text-line\">{{ action.siteSearchKeyword|rawSafeDecoded }}</span>
        {% endif %}
        {% if action.url is not empty %}
            {% if action.type == 'action' and action.pageTitle|default(false) is not empty %}<p>{% endif %}
            {% if action.type == 'download' or action.type == 'outlink' %}
                <img src='{{ action.icon }}' class=\"action-list-action-icon {{ action.type }}\">
            {% endif %}

            {% if action.url|trim|lower starts with 'javascript:' or
            action.url|trim|lower starts with 'vbscript:' or
            action.url|trim|lower starts with 'data:' %}
                {{ action.url }}
            {% else %}
                <a href=\"{{ action.url }}\" rel=\"noreferrer\" target=\"_blank\"
                   class=\"action-list-url truncated-text-line\">
                    {{ action.url|replace({'http://': '', 'https://': ''}) }}
                </a>
            {% endif %}
            {% if action.type == 'action' and action.pageTitle|default(false) is not empty %}</p>{% endif %}
        {% elseif action.type != 'search' %}
            <p>
                <span>{{ 'General_NotDefined'|translate('Actions_ColumnPageURL'|translate) }}</span>
            </p>
        {% endif %}
    </div>
</li>
", "@Live/_actionCommon.twig", "/www/analytics/plugins/Live/templates/_actionCommon.twig");
    }
}
