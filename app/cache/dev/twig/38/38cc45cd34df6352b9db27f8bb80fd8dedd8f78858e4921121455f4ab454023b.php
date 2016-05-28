<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_2005ad2b2df2ef600769ca7da8dbdb368bfeeae8499baeea13fdaf1515ff86cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_723aa4f31e341a8afb09102f5cc72d66eb62938968d98bce3a4fea2b402b8f66 = $this->env->getExtension("native_profiler");
        $__internal_723aa4f31e341a8afb09102f5cc72d66eb62938968d98bce3a4fea2b402b8f66->enter($__internal_723aa4f31e341a8afb09102f5cc72d66eb62938968d98bce3a4fea2b402b8f66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_723aa4f31e341a8afb09102f5cc72d66eb62938968d98bce3a4fea2b402b8f66->leave($__internal_723aa4f31e341a8afb09102f5cc72d66eb62938968d98bce3a4fea2b402b8f66_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f10be8d5066d871b53c4f632c6860d53b907873db552ea942108b423abbeb1bf = $this->env->getExtension("native_profiler");
        $__internal_f10be8d5066d871b53c4f632c6860d53b907873db552ea942108b423abbeb1bf->enter($__internal_f10be8d5066d871b53c4f632c6860d53b907873db552ea942108b423abbeb1bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f10be8d5066d871b53c4f632c6860d53b907873db552ea942108b423abbeb1bf->leave($__internal_f10be8d5066d871b53c4f632c6860d53b907873db552ea942108b423abbeb1bf_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ea7d62745eea13dd6a3668acddc5d1b0c6fcc3b94703f27c7110e8fdf13aba56 = $this->env->getExtension("native_profiler");
        $__internal_ea7d62745eea13dd6a3668acddc5d1b0c6fcc3b94703f27c7110e8fdf13aba56->enter($__internal_ea7d62745eea13dd6a3668acddc5d1b0c6fcc3b94703f27c7110e8fdf13aba56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ea7d62745eea13dd6a3668acddc5d1b0c6fcc3b94703f27c7110e8fdf13aba56->leave($__internal_ea7d62745eea13dd6a3668acddc5d1b0c6fcc3b94703f27c7110e8fdf13aba56_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4304ce54757e4f663561dc62a155bf604fee8563e56c43a676d60473fbc853ec = $this->env->getExtension("native_profiler");
        $__internal_4304ce54757e4f663561dc62a155bf604fee8563e56c43a676d60473fbc853ec->enter($__internal_4304ce54757e4f663561dc62a155bf604fee8563e56c43a676d60473fbc853ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4304ce54757e4f663561dc62a155bf604fee8563e56c43a676d60473fbc853ec->leave($__internal_4304ce54757e4f663561dc62a155bf604fee8563e56c43a676d60473fbc853ec_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
