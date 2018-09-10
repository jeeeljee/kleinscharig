<?php

/* @Goals/_listTopDimension.twig */
class __TwigTemplate_cc5d9fd03578018639193110ab71b588276ac6b65afb8c5675dc340e684fabc2 extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["topDimension"] ?? $this->getContext($context, "topDimension")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 2
            echo "    ";
            $context["goal_nb_conversion"] = $this->getAttribute($context["element"], "nb_conversions", array());
            // line 3
            echo "    ";
            $context["goal_conversion_rate"] = $this->getAttribute($context["element"], "conversion_rate", array());
            // line 4
            echo "    <span class='goalTopElement' title='";
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_Conversions", (("<b>" . call_user_func_array($this->env->getFilter('number')->getCallable(), array(($context["goal_nb_conversion"] ?? $this->getContext($context, "goal_nb_conversion"))))) . "</b>")));
            echo ",
\t\t";
            // line 5
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_ConversionRate", (("<b>" . call_user_func_array($this->env->getFilter('number')->getCallable(), array(($context["goal_conversion_rate"] ?? $this->getContext($context, "goal_conversion_rate"))))) . "</b>")));
            echo "'>
\t    ";
            // line 6
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["element"], "name", array()), "html", null, true);
            echo "
    </span>

    ";
            // line 9
            $context["piwik"] = $this->loadTemplate("macros.twig", "@Goals/_listTopDimension.twig", 9);
            // line 10
            echo "    ";
            echo $context["piwik"]->getlogoHtml($this->getAttribute($context["element"], "metadata", array()), $this->getAttribute($context["element"], "name", array()));
            echo "
    ";
            // line 11
            if (($this->getAttribute($context["loop"], "index", array()) == ($this->getAttribute($context["loop"], "length", array()) - 1))) {
                // line 12
                echo "        and
    ";
            } elseif (($this->getAttribute(            // line 13
$context["loop"], "index", array()) < ($this->getAttribute($context["loop"], "length", array()) - 1))) {
                // line 14
                echo "        ,
    ";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "@Goals/_listTopDimension.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 14,  69 => 13,  66 => 12,  64 => 11,  59 => 10,  57 => 9,  51 => 6,  47 => 5,  42 => 4,  39 => 3,  36 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for element in topDimension %}
    {% set goal_nb_conversion=element.nb_conversions %}
    {% set goal_conversion_rate=element.conversion_rate %}
    <span class='goalTopElement' title='{{ 'Goals_Conversions'|translate(\"<b>\"~goal_nb_conversion|number~\"</b>\")|raw }},
\t\t{{ 'Goals_ConversionRate'|translate(\"<b>\"~goal_conversion_rate|number~\"</b>\")|raw }}'>
\t    {{ element.name }}
    </span>

    {% import 'macros.twig' as piwik %}
    {{ piwik.logoHtml(element.metadata, element.name) }}
    {% if loop.index == loop.length-1 %}
        and
    {% elseif loop.index < loop.length-1 %}
        ,
    {% endif %}
{% endfor %}
", "@Goals/_listTopDimension.twig", "/www/analytics/plugins/Goals/templates/_listTopDimension.twig");
    }
}
