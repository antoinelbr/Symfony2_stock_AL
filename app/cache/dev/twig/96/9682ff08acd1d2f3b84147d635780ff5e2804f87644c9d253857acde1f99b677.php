<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_625fd42efa6984fbe42f53fc32b293963bbf67cc9406b5095e1f643d38f0facd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6333c7a70971acd1816db961923ceb9c4438606fa35e8a4252f5a268909d4bb5 = $this->env->getExtension("native_profiler");
        $__internal_6333c7a70971acd1816db961923ceb9c4438606fa35e8a4252f5a268909d4bb5->enter($__internal_6333c7a70971acd1816db961923ceb9c4438606fa35e8a4252f5a268909d4bb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6333c7a70971acd1816db961923ceb9c4438606fa35e8a4252f5a268909d4bb5->leave($__internal_6333c7a70971acd1816db961923ceb9c4438606fa35e8a4252f5a268909d4bb5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3e708ddbc301c95e5eb9ecb6778d3320b1e476063e7ea488c7f126171c83319b = $this->env->getExtension("native_profiler");
        $__internal_3e708ddbc301c95e5eb9ecb6778d3320b1e476063e7ea488c7f126171c83319b->enter($__internal_3e708ddbc301c95e5eb9ecb6778d3320b1e476063e7ea488c7f126171c83319b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3e708ddbc301c95e5eb9ecb6778d3320b1e476063e7ea488c7f126171c83319b->leave($__internal_3e708ddbc301c95e5eb9ecb6778d3320b1e476063e7ea488c7f126171c83319b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_19511e64e7e41e77e598e3f7adc6af080ac26b17d7fb1cfc1151babf1142ae34 = $this->env->getExtension("native_profiler");
        $__internal_19511e64e7e41e77e598e3f7adc6af080ac26b17d7fb1cfc1151babf1142ae34->enter($__internal_19511e64e7e41e77e598e3f7adc6af080ac26b17d7fb1cfc1151babf1142ae34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_19511e64e7e41e77e598e3f7adc6af080ac26b17d7fb1cfc1151babf1142ae34->leave($__internal_19511e64e7e41e77e598e3f7adc6af080ac26b17d7fb1cfc1151babf1142ae34_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8ad5d5952f1756678972937f5731158bd794bc170748cba364c5ce3b7b73a425 = $this->env->getExtension("native_profiler");
        $__internal_8ad5d5952f1756678972937f5731158bd794bc170748cba364c5ce3b7b73a425->enter($__internal_8ad5d5952f1756678972937f5731158bd794bc170748cba364c5ce3b7b73a425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_8ad5d5952f1756678972937f5731158bd794bc170748cba364c5ce3b7b73a425->leave($__internal_8ad5d5952f1756678972937f5731158bd794bc170748cba364c5ce3b7b73a425_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
