<?php

/* @Goals/conversionOverview.twig */
class __TwigTemplate_2fbce16b3cbb4312e9ca74c2328701fbf765dfb70c47983e72f88e3cad5d144b extends Twig_Template
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
        echo "<div piwik-content-block
     content-title=\"";
        // line 2
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_ConversionsOverview")), "html_attr");
        echo "\">
    <ul class=\"ulGoalTopElements\">
        ";
        // line 4
        if ($this->getAttribute(($context["topDimensions"] ?? null), "country", array(), "any", true, true)) {
            // line 5
            echo "            <li>";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_BestCountries")), "html", null, true);
            echo " ";
            $this->loadTemplate("@Goals/_listTopDimension.twig", "@Goals/conversionOverview.twig", 5)->display(array_merge($context, array("topDimension" => $this->getAttribute(($context["topDimensions"] ?? $this->getContext($context, "topDimensions")), "country", array()))));
            echo "</li>
        ";
        }
        // line 7
        echo "        ";
        if (($this->getAttribute(($context["topDimensions"] ?? null), "keyword", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute(($context["topDimensions"] ?? $this->getContext($context, "topDimensions")), "keyword", array())) > 0))) {
            // line 8
            echo "            <li>";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_BestKeywords")), "html", null, true);
            echo " ";
            $this->loadTemplate("@Goals/_listTopDimension.twig", "@Goals/conversionOverview.twig", 8)->display(array_merge($context, array("topDimension" => $this->getAttribute(($context["topDimensions"] ?? $this->getContext($context, "topDimensions")), "keyword", array()))));
            echo "</li>
        ";
        }
        // line 10
        echo "        ";
        if (($this->getAttribute(($context["topDimensions"] ?? null), "website", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute(($context["topDimensions"] ?? $this->getContext($context, "topDimensions")), "website", array())) > 0))) {
            // line 11
            echo "            <li>";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_BestReferrers")), "html", null, true);
            echo " ";
            $this->loadTemplate("@Goals/_listTopDimension.twig", "@Goals/conversionOverview.twig", 11)->display(array_merge($context, array("topDimension" => $this->getAttribute(($context["topDimensions"] ?? $this->getContext($context, "topDimensions")), "website", array()))));
            echo "</li>
        ";
        }
        // line 13
        echo "        <li>
            ";
        // line 14
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_ReturningVisitorsConversionRateIs", (("<strong>" . ($context["conversion_rate_returning"] ?? $this->getContext($context, "conversion_rate_returning"))) . "</strong>")));
        echo "
            , ";
        // line 15
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_NewVisitorsConversionRateIs", (("<strong>" . ($context["conversion_rate_new"] ?? $this->getContext($context, "conversion_rate_new"))) . "</strong>")));
        echo "
        </li>
    </ul>
<a href=\"javascript:;\" class=\"segmentedlog\" onclick=\"SegmentedVisitorLog.show('Goals.getMetrics', 'visitConvertedGoalId==";
        // line 18
        echo \Piwik\piwik_escape_filter($this->env, ($context["idGoal"] ?? $this->getContext($context, "idGoal")), "html", null, true);
        echo "', {})\">
    ";
        // line 19
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_RowActionTooltipWithDimension", call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Goal")))), "html", null, true);
        echo "
</a>
";
        // line 21
        echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), array("Template.afterGoalConversionOverviewReport"));
        echo "
<br style=\"clear:left\"/>

</div>";
    }

    public function getTemplateName()
    {
        return "@Goals/conversionOverview.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 21,  76 => 19,  72 => 18,  66 => 15,  62 => 14,  59 => 13,  51 => 11,  48 => 10,  40 => 8,  37 => 7,  29 => 5,  27 => 4,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div piwik-content-block
     content-title=\"{{ 'Goals_ConversionsOverview'|translate|e('html_attr') }}\">
    <ul class=\"ulGoalTopElements\">
        {% if topDimensions.country is defined %}
            <li>{{ 'Goals_BestCountries'|translate }} {% include '@Goals/_listTopDimension.twig' with {'topDimension':topDimensions.country} %}</li>
        {% endif %}
        {% if topDimensions.keyword is defined and topDimensions.keyword|length > 0 %}
            <li>{{ 'Goals_BestKeywords'|translate }} {% include '@Goals/_listTopDimension.twig' with {'topDimension':topDimensions.keyword} %}</li>
        {% endif %}
        {% if topDimensions.website is defined and topDimensions.website|length > 0 %}
            <li>{{ 'Goals_BestReferrers'|translate }} {% include '@Goals/_listTopDimension.twig' with {'topDimension':topDimensions.website} %}</li>
        {% endif %}
        <li>
            {{ 'Goals_ReturningVisitorsConversionRateIs'|translate(\"<strong>\"~conversion_rate_returning~\"</strong>\")|raw }}
            , {{ 'Goals_NewVisitorsConversionRateIs'|translate(\"<strong>\"~conversion_rate_new~\"</strong>\")|raw }}
        </li>
    </ul>
<a href=\"javascript:;\" class=\"segmentedlog\" onclick=\"SegmentedVisitorLog.show('Goals.getMetrics', 'visitConvertedGoalId=={{ idGoal }}', {})\">
    {{ 'Live_RowActionTooltipWithDimension'|translate('General_Goal'|translate) }}
</a>
{{ postEvent(\"Template.afterGoalConversionOverviewReport\") }}
<br style=\"clear:left\"/>

</div>", "@Goals/conversionOverview.twig", "/www/analytics/plugins/Goals/templates/conversionOverview.twig");
    }
}
