<?php

/* @CoreUpdater/layout.twig */
class __TwigTemplate_487a82b430543a2e49154078fd6691ac5f6b8b71be4fc4eb3e0fec9344742c3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html id=\"ng-app\" ng-app=\"piwikApp\">
<head>
    <meta charset=\"utf-8\">
    <title>Matomo &rsaquo; ";
        // line 5
        echo \Piwik\piwik_escape_filter($this->env, ((array_key_exists("pageTitle", $context)) ? (_twig_default_filter(($context["pageTitle"] ?? $this->getContext($context, "pageTitle")), call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_UpdateTitle")))) : (call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_UpdateTitle")))), "html", null, true);
        echo "</title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=EDGE,chrome=1\"/>
    <meta name=\"viewport\" content=\"initial-scale=1.0\" />
    <meta name=\"robots\" content=\"noindex,nofollow\">

    <link rel=\"stylesheet\" type=\"text/css\" href=\"index.php?module=CoreUpdater&action=getUpdaterCss\"/>
    <script type=\"text/javascript\" src=\"index.php?module=CoreUpdater&action=getUpdaterJs\"></script>

    <script type=\"text/javascript\">";
        // line 13
        echo Piwik\Translate::getJavascriptTranslations();
        echo "</script>

    ";
        // line 15
        $this->loadTemplate("@CoreHome/_favicon.twig", "@CoreUpdater/layout.twig", 15)->display($context);
        // line 16
        echo "    ";
        $this->loadTemplate("@CoreHome/_applePinnedTabIcon.twig", "@CoreUpdater/layout.twig", 16)->display($context);
        // line 17
        echo "</head>
<body id=\"simple\" ng-app=\"app\">


<div class=\"logo\">
    ";
        // line 22
        if (($context["hasSVGLogo"] ?? $this->getContext($context, "hasSVGLogo"))) {
            // line 23
            echo "        <img src='";
            echo \Piwik\piwik_escape_filter($this->env, ($context["logoSVG"] ?? $this->getContext($context, "logoSVG")), "html", null, true);
            echo "' tabindex=\"3\"
             style=\"height: 40px;\"
             alt=\"";
            // line 25
            if (($context["isCustomLogo"] ?? $this->getContext($context, "isCustomLogo"))) {
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_PoweredBy")), "html", null, true);
                echo " ";
            }
            echo "Matomo\"
             class=\"";
            // line 26
            if ( !($context["isCustomLogo"] ?? $this->getContext($context, "isCustomLogo"))) {
                echo "default-piwik-logo";
            }
            echo "\" />
    ";
        } else {
            // line 28
            echo "        <img src='";
            echo \Piwik\piwik_escape_filter($this->env, ($context["logoHeader"] ?? $this->getContext($context, "logoHeader")), "html", null, true);
            echo "' alt=\"";
            if (($context["isCustomLogo"] ?? $this->getContext($context, "isCustomLogo"))) {
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_PoweredBy")), "html", null, true);
                echo " ";
            }
            echo "Matomo\" />
    ";
        }
        // line 30
        echo "</div>

<div class=\"box\">
    ";
        // line 33
        $this->displayBlock('content', $context, $blocks);
        // line 35
        echo "</div>

</body>
</html>
";
    }

    // line 33
    public function block_content($context, array $blocks = array())
    {
        // line 34
        echo "    ";
    }

    public function getTemplateName()
    {
        return "@CoreUpdater/layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 34,  102 => 33,  94 => 35,  92 => 33,  87 => 30,  76 => 28,  69 => 26,  62 => 25,  56 => 23,  54 => 22,  47 => 17,  44 => 16,  42 => 15,  37 => 13,  26 => 5,  20 => 1,);
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
    <title>Matomo &rsaquo; {{ pageTitle|default('CoreUpdater_UpdateTitle'|translate) }}</title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=EDGE,chrome=1\"/>
    <meta name=\"viewport\" content=\"initial-scale=1.0\" />
    <meta name=\"robots\" content=\"noindex,nofollow\">

    <link rel=\"stylesheet\" type=\"text/css\" href=\"index.php?module=CoreUpdater&action=getUpdaterCss\"/>
    <script type=\"text/javascript\" src=\"index.php?module=CoreUpdater&action=getUpdaterJs\"></script>

    <script type=\"text/javascript\">{{ getJavascriptTranslations()|raw }}</script>

    {% include \"@CoreHome/_favicon.twig\" %}
    {% include \"@CoreHome/_applePinnedTabIcon.twig\" %}
</head>
<body id=\"simple\" ng-app=\"app\">


<div class=\"logo\">
    {% if hasSVGLogo %}
        <img src='{{ logoSVG }}' tabindex=\"3\"
             style=\"height: 40px;\"
             alt=\"{% if isCustomLogo %}{{ 'General_PoweredBy'|translate }} {% endif %}Matomo\"
             class=\"{% if not isCustomLogo %}default-piwik-logo{% endif %}\" />
    {% else %}
        <img src='{{ logoHeader }}' alt=\"{% if isCustomLogo %}{{ 'General_PoweredBy'|translate }} {% endif %}Matomo\" />
    {% endif %}
</div>

<div class=\"box\">
    {% block content %}
    {% endblock %}
</div>

</body>
</html>
", "@CoreUpdater/layout.twig", "/www/analytics/plugins/CoreUpdater/templates/layout.twig");
    }
}
