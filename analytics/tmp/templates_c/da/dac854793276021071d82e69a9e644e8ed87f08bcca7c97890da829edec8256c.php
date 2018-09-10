<?php

/* @Widgetize/iframe.twig */
class __TwigTemplate_6c4238d4bc7cc90eda2347c1f02e024eac33c3b07c3e40c3af822206ccd2aeb2 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html id=\"ng-app\" ng-app=\"piwikApp\">
    <head>
        <meta charset=\"utf-8\">
        <meta name=\"robots\" content=\"noindex,nofollow\">
        ";
        // line 6
        $this->loadTemplate("_jsGlobalVariables.twig", "@Widgetize/iframe.twig", 6)->display($context);
        // line 7
        echo "        <!--[if lt IE 9]>
        <script language=\"javascript\" type=\"text/javascript\" src=\"libs/jqplot/excanvas.min.js\"></script>
        <![endif]-->
        ";
        // line 10
        $this->loadTemplate("_jsCssIncludes.twig", "@Widgetize/iframe.twig", 10)->display($context);
        // line 11
        echo "    </head>
    <body ng-app=\"app\" class=\"widgetized\">
        <div piwik-popover-handler></div>
        <div class=\"widget\">
            ";
        // line 15
        echo ($context["content"] ?? $this->getContext($context, "content"));
        echo "
        </div>
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "@Widgetize/iframe.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 15,  35 => 11,  33 => 10,  28 => 7,  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html id=\"ng-app\" ng-app=\"piwikApp\">
    <head>
        <meta charset=\"utf-8\">
        <meta name=\"robots\" content=\"noindex,nofollow\">
        {% include \"_jsGlobalVariables.twig\" %}
        <!--[if lt IE 9]>
        <script language=\"javascript\" type=\"text/javascript\" src=\"libs/jqplot/excanvas.min.js\"></script>
        <![endif]-->
        {% include \"_jsCssIncludes.twig\" %}
    </head>
    <body ng-app=\"app\" class=\"widgetized\">
        <div piwik-popover-handler></div>
        <div class=\"widget\">
            {{ content|raw }}
        </div>
    </body>
</html>
", "@Widgetize/iframe.twig", "/www/analytics/plugins/Widgetize/templates/iframe.twig");
    }
}
