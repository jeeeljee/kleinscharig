<?php

/* @ProfessionalServices/promoFunnel.twig */
class __TwigTemplate_6dfb84950bed116978fbff7c929e50e7881abec40465f425a8cad180d2ba673c extends Twig_Template
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
        echo "<p style=\"margin-top:3em;margin-bottom:3em\" class=\"alert-info alert\">Did you know?
    A Funnel defines a series of actions that you expect your visitors to take on their way to converting a goal.
    <br/>With <a target=\"_blank\" rel=\"noreferrer\" href=\"https://matomo.org/recommends/conversion-funnel/\">Funnels for Matomo</a>,
    you can easily determine your funnel and see where your visitors drop off and how to focus efforts to increase your conversions.
</p>";
    }

    public function getTemplateName()
    {
        return "@ProfessionalServices/promoFunnel.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<p style=\"margin-top:3em;margin-bottom:3em\" class=\"alert-info alert\">Did you know?
    A Funnel defines a series of actions that you expect your visitors to take on their way to converting a goal.
    <br/>With <a target=\"_blank\" rel=\"noreferrer\" href=\"https://matomo.org/recommends/conversion-funnel/\">Funnels for Matomo</a>,
    you can easily determine your funnel and see where your visitors drop off and how to focus efforts to increase your conversions.
</p>", "@ProfessionalServices/promoFunnel.twig", "/www/analytics/plugins/ProfessionalServices/templates/promoFunnel.twig");
    }
}
