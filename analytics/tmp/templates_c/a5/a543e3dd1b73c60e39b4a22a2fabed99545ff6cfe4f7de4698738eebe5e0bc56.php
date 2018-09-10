<?php

/* @ProfessionalServices/promoSearchKeywords.twig */
class __TwigTemplate_b87fb1206f05c10ab81932c497e46f8c0319989588293ab2314fa62a7f01c1aa extends Twig_Template
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
        echo "<p style=\"margin-top:3em;margin-bottom:3em\" class=\" alert-info alert\">Did you know?<br/>
    Use <a target=\"_blank\" rel=\"noreferrer\" href=\"https://matomo.org/recommends/search-keywords-performance/\">Search Keywords Performance</a>
    to see all keywords behind 'keyword not defined'.
    All keywords searched by your users on Google, Bing and other search engines will be listed
    and you can even monitor the SEO position of your website in their search results.
</p>";
    }

    public function getTemplateName()
    {
        return "@ProfessionalServices/promoSearchKeywords.twig";
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
        return new Twig_Source("<p style=\"margin-top:3em;margin-bottom:3em\" class=\" alert-info alert\">Did you know?<br/>
    Use <a target=\"_blank\" rel=\"noreferrer\" href=\"https://matomo.org/recommends/search-keywords-performance/\">Search Keywords Performance</a>
    to see all keywords behind 'keyword not defined'.
    All keywords searched by your users on Google, Bing and other search engines will be listed
    and you can even monitor the SEO position of your website in their search results.
</p>", "@ProfessionalServices/promoSearchKeywords.twig", "/www/analytics/plugins/ProfessionalServices/templates/promoSearchKeywords.twig");
    }
}
