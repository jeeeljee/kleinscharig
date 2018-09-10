<?php

/* @Live/_actionGoal.twig */
class __TwigTemplate_12e8e480492e13397707689f1617cc2fb147325c05df288da036fcb778d36600 extends Twig_Template
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
        echo "<li class=\"action\"
    title=\"";
        // line 2
        echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), array("Live.renderActionTooltip", ($context["action"] ?? $this->getContext($context, "action")), ($context["visitInfo"] ?? $this->getContext($context, "visitInfo"))));
        echo "\">
    <div>
        ";
        // line 5
        echo "        <img src=\"";
        echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "icon", array()), "html", null, true);
        echo "\" class=\"action-list-action-icon\" />
        <strong>";
        // line 6
        echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "goalName", array()), "html", null, true);
        echo "</strong>
        ";
        // line 7
        if (($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "revenue", array()) > 0)) {
            echo ", ";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ColumnRevenue")), "html", null, true);
            echo ":
            <strong>";
            // line 8
            echo call_user_func_array($this->env->getFilter('money')->getCallable(), array($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "revenue", array()), $this->getAttribute(($context["visitInfo"] ?? $this->getContext($context, "visitInfo")), "idSite", array())));
            echo "</strong>
        ";
        }
        // line 10
        echo "    </div>
</li>";
    }

    public function getTemplateName()
    {
        return "@Live/_actionGoal.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 10,  42 => 8,  36 => 7,  32 => 6,  27 => 5,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<li class=\"action\"
    title=\"{{ postEvent('Live.renderActionTooltip', action, visitInfo) }}\">
    <div>
        {# Goal conversion #}
        <img src=\"{{ action.icon }}\" class=\"action-list-action-icon\" />
        <strong>{{ action.goalName }}</strong>
        {% if action.revenue > 0 %}, {{ 'General_ColumnRevenue'|translate }}:
            <strong>{{ action.revenue|money(visitInfo.idSite)|raw }}</strong>
        {% endif %}
    </div>
</li>", "@Live/_actionGoal.twig", "/www/analytics/plugins/Live/templates/_actionGoal.twig");
    }
}
