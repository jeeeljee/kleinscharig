<?php

/* @Live/indexVisitorLog.twig */
class __TwigTemplate_e980eb38930ffacc5fc7a2065c8c987bb8b569ffa04138afedc9c44959b0c6df extends Twig_Template
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
        echo "<div piwik-content-intro>
    <h2 piwik-enriched-headline>";
        // line 2
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_VisitorLog")), "html", null, true);
        echo "</h2>
</div>

";
        // line 5
        echo ($context["visitorLog"] ?? $this->getContext($context, "visitorLog"));
        echo "
";
    }

    public function getTemplateName()
    {
        return "@Live/indexVisitorLog.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 5,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div piwik-content-intro>
    <h2 piwik-enriched-headline>{{ 'Live_VisitorLog'|translate }}</h2>
</div>

{{ visitorLog|raw }}
", "@Live/indexVisitorLog.twig", "/www/analytics/plugins/Live/templates/indexVisitorLog.twig");
    }
}
