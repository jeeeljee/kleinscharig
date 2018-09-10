<?php

/* @Goals/editGoals.twig */
class __TwigTemplate_8ce82a442c469420f5988b4c1bae8f87ac1f8e58ba8245334bc85b68b7a012bc extends Twig_Template
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
        if (($context["userCanEditGoals"] ?? $this->getContext($context, "userCanEditGoals"))) {
            // line 2
            echo "
    ";
            // line 3
            $this->loadTemplate("@Goals/_addEditGoal.twig", "@Goals/editGoals.twig", 3)->display($context);
            // line 4
            echo "
";
        } else {
            // line 6
            echo "
    <h2>";
            // line 7
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_ManageGoals")), "html", null, true);
            echo "</h2>
    <p>
        ";
            // line 9
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_NeedAccess"));
            echo "
    </p>

    ";
            // line 12
            $this->loadTemplate("@Goals/_addEditGoal.twig", "@Goals/editGoals.twig", 12)->display($context);
            // line 13
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "@Goals/editGoals.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 13,  44 => 12,  38 => 9,  33 => 7,  30 => 6,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if userCanEditGoals %}

    {% include \"@Goals/_addEditGoal.twig\" %}

{% else %}

    <h2>{{ 'Goals_ManageGoals'|translate }}</h2>
    <p>
        {{ 'Goals_NeedAccess'|translate|raw }}
    </p>

    {% include \"@Goals/_addEditGoal.twig\" %}

{% endif %}
", "@Goals/editGoals.twig", "/www/analytics/plugins/Goals/templates/editGoals.twig");
    }
}
