<?php

/* @Live/_visitorDetails.twig */
class __TwigTemplate_de03c2799ba1cade98aff9981347d402a546b3ac6439559629f597172c9400d3 extends Twig_Template
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
        echo "<strong class=\"visitor-log-datetime visitorLogTooltip\" title=\"";
        if (($this->getAttribute(($context["visitInfo"] ?? $this->getContext($context, "visitInfo")), "getColumn", array(0 => "visitorType"), "method") == "new")) {
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_NewVisitor")), "html", null, true);
        } else {
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_VisitorsLastVisit", $this->getAttribute(($context["visitInfo"] ?? $this->getContext($context, "visitInfo")), "getColumn", array(0 => "daysSinceLastVisit"), "method"))), "html", null, true);
        }
        echo "\">
    ";
        // line 2
        echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["visitInfo"] ?? $this->getContext($context, "visitInfo")), "getColumn", array(0 => "serverDatePrettyFirstAction"), "method"), "html", null, true);
        echo "
    ";
        // line 3
        if (($context["isWidget"] ?? $this->getContext($context, "isWidget"))) {
            echo "<br/>";
        } else {
            echo "-";
        }
        echo " ";
        echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["visitInfo"] ?? $this->getContext($context, "visitInfo")), "getColumn", array(0 => "serverTimePrettyFirstAction"), "method"), "html", null, true);
        echo "</strong>
";
        // line 4
        if ( !twig_test_empty($this->getAttribute(($context["visitInfo"] ?? $this->getContext($context, "visitInfo")), "getColumn", array(0 => "visitIp"), "method"))) {
            // line 5
            echo "<span class=\"visitor-log-ip-location visitorLogTooltip\" title=\"";
            if ( !twig_test_empty($this->getAttribute(($context["visitInfo"] ?? $this->getContext($context, "visitInfo")), "getColumn", array(0 => "userId"), "method"))) {
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_UserId")), "html", null, true);
                echo ": ";
                echo $this->getAttribute(($context["visitInfo"] ?? $this->getContext($context, "visitInfo")), "getColumn", array(0 => "userId"), "method");
                echo "
";
            }
            // line 6
            if ( !twig_test_empty($this->getAttribute(($context["visitInfo"] ?? $this->getContext($context, "visitInfo")), "getColumn", array(0 => "visitorId"), "method"))) {
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_VisitorID")), "html", null, true);
                echo ": ";
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["visitInfo"] ?? $this->getContext($context, "visitInfo")), "getColumn", array(0 => "visitorId"), "method"), "html", null, true);
                echo "
";
            }
            // line 7
            if ( !twig_test_empty($this->getAttribute(($context["visitInfo"] ?? $this->getContext($context, "visitInfo")), "getColumn", array(0 => "idVisit"), "method"))) {
                // line 8
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Visit")), "html", null, true);
                echo " ID: ";
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["visitInfo"] ?? $this->getContext($context, "visitInfo")), "getColumn", array(0 => "idVisit"), "method"), "html", null, true);
                echo "
";
            }
            // line 9
            if (($this->getAttribute(($context["visitInfo"] ?? $this->getContext($context, "visitInfo")), "getColumn", array(0 => "latitude"), "method") || $this->getAttribute(($context["visitInfo"] ?? $this->getContext($context, "visitInfo")), "getColumn", array(0 => "longitude"), "method"))) {
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["visitInfo"] ?? $this->getContext($context, "visitInfo")), "getColumn", array(0 => "location"), "method"), "html", null, true);
                echo "
GPS (lat/long): ";
                // line 10
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["visitInfo"] ?? $this->getContext($context, "visitInfo")), "getColumn", array(0 => "latitude"), "method"), "html", null, true);
                echo ",";
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["visitInfo"] ?? $this->getContext($context, "visitInfo")), "getColumn", array(0 => "longitude"), "method"), "html", null, true);
            }
            if ($this->getAttribute(($context["visitInfo"] ?? $this->getContext($context, "visitInfo")), "getColumn", array(0 => "providerName"), "method")) {
                // line 11
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Provider_ColumnProvider")), "html", null, true);
                echo ": ";
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["visitInfo"] ?? $this->getContext($context, "visitInfo")), "getColumn", array(0 => "providerName"), "method"), "html", null, true);
            }
            echo "\">
    IP: ";
            // line 12
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["visitInfo"] ?? $this->getContext($context, "visitInfo")), "getColumn", array(0 => "visitIp"), "method"), "html", null, true);
            echo "
    <br />
    ";
            // line 14
            if (($this->getAttribute(($context["visitInfo"] ?? $this->getContext($context, "visitInfo")), "getColumn", array(0 => "location"), "method") != call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Unknown")))) {
                echo "<span><img width=\"16\" class=\"flag\" src=\"";
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["visitInfo"] ?? $this->getContext($context, "visitInfo")), "getColumn", array(0 => "countryFlag"), "method"), "html", null, true);
                echo "\"/>&nbsp;
    ";
                // line 15
                if ( !twig_test_empty($this->getAttribute(($context["visitInfo"] ?? $this->getContext($context, "visitInfo")), "getColumn", array(0 => "city"), "method"))) {
                    echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["visitInfo"] ?? $this->getContext($context, "visitInfo")), "getColumn", array(0 => "city"), "method"), "html", null, true);
                } else {
                    echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["visitInfo"] ?? $this->getContext($context, "visitInfo")), "getColumn", array(0 => "country"), "method"), "html", null, true);
                }
                echo "</span>";
            }
            // line 16
            echo "
    ";
            // line 17
            if ( !twig_test_empty($this->getAttribute(($context["visitInfo"] ?? $this->getContext($context, "visitInfo")), "getColumn", array(0 => "userId"), "method"))) {
                echo "<br/><br/>";
                echo $this->getAttribute(($context["visitInfo"] ?? $this->getContext($context, "visitInfo")), "getColumn", array(0 => "userId"), "method");
            }
            // line 18
            echo "</span>";
        }
        // line 19
        if (($context["isWidget"] ?? $this->getContext($context, "isWidget"))) {
            // line 20
            echo "    <br />
    ";
            // line 21
            echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), array("Live.renderVisitorIcons", ($context["visitInfo"] ?? $this->getContext($context, "visitInfo"))));
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "@Live/_visitorDetails.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 21,  120 => 20,  118 => 19,  115 => 18,  110 => 17,  107 => 16,  99 => 15,  93 => 14,  88 => 12,  81 => 11,  75 => 10,  70 => 9,  63 => 8,  61 => 7,  53 => 6,  44 => 5,  42 => 4,  32 => 3,  28 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<strong class=\"visitor-log-datetime visitorLogTooltip\" title=\"{% if visitInfo.getColumn('visitorType')=='new' %}{{ 'General_NewVisitor'|translate }}{% else %}{{ 'Live_VisitorsLastVisit'|translate(visitInfo.getColumn('daysSinceLastVisit')) }}{% endif %}\">
    {{ visitInfo.getColumn('serverDatePrettyFirstAction') }}
    {% if isWidget %}<br/>{% else %}-{% endif %} {{ visitInfo.getColumn('serverTimePrettyFirstAction') }}</strong>
{% if visitInfo.getColumn('visitIp') is not empty %}
<span class=\"visitor-log-ip-location visitorLogTooltip\" title=\"{% if visitInfo.getColumn('userId') is not empty %}{{ 'General_UserId'|translate }}: {{ visitInfo.getColumn('userId')|raw }}
{% endif %}{% if visitInfo.getColumn('visitorId') is not empty %}{{ 'General_VisitorID'|translate }}: {{ visitInfo.getColumn('visitorId') }}
{% endif %}{% if visitInfo.getColumn('idVisit') is not empty %}
{{ 'General_Visit'|translate }} ID: {{ visitInfo.getColumn('idVisit') }}
{% endif %}{% if visitInfo.getColumn('latitude') or visitInfo.getColumn('longitude') %}{{ visitInfo.getColumn('location') }}
GPS (lat/long): {{ visitInfo.getColumn('latitude') }},{{ visitInfo.getColumn('longitude') }}{% endif %}{% if visitInfo.getColumn('providerName') %}
{{ 'Provider_ColumnProvider'|translate }}: {{ visitInfo.getColumn('providerName') }}{% endif %}\">
    IP: {{ visitInfo.getColumn('visitIp') }}
    <br />
    {% if visitInfo.getColumn('location') != 'General_Unknown'|translate %}<span><img width=\"16\" class=\"flag\" src=\"{{ visitInfo.getColumn('countryFlag') }}\"/>&nbsp;
    {% if visitInfo.getColumn('city') is not empty %}{{ visitInfo.getColumn('city') }}{% else %}{{ visitInfo.getColumn('country') }}{% endif %}</span>{% endif %}

    {% if visitInfo.getColumn('userId') is not empty %}<br/><br/>{{ visitInfo.getColumn('userId')|raw }}{% endif %}
</span>{% endif %}
{% if isWidget %}
    <br />
    {{ postEvent('Live.renderVisitorIcons', visitInfo) }}
{% endif %}
", "@Live/_visitorDetails.twig", "/www/analytics/plugins/Live/templates/_visitorDetails.twig");
    }
}
