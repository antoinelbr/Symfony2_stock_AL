<?php

/* add_product_form.html.twig */
class __TwigTemplate_ea1125fe551ac2b94ef0eca03d079765e0872084a3d0cf1dd11f58814f358b77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "add_product_form.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_01a5218bb4fef131ff455f8e354145cdecd68e723c44a53676a4af84381bcf9f = $this->env->getExtension("native_profiler");
        $__internal_01a5218bb4fef131ff455f8e354145cdecd68e723c44a53676a4af84381bcf9f->enter($__internal_01a5218bb4fef131ff455f8e354145cdecd68e723c44a53676a4af84381bcf9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "add_product_form.html.twig"));

        // line 3
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_horizontal_layout.html.twig"));
        // line 2
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01a5218bb4fef131ff455f8e354145cdecd68e723c44a53676a4af84381bcf9f->leave($__internal_01a5218bb4fef131ff455f8e354145cdecd68e723c44a53676a4af84381bcf9f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_cdc19d561bdf3b552ca9b019fa091a5eb17d54463ec5bfed56146cb8b68dcf3a = $this->env->getExtension("native_profiler");
        $__internal_cdc19d561bdf3b552ca9b019fa091a5eb17d54463ec5bfed56146cb8b68dcf3a->enter($__internal_cdc19d561bdf3b552ca9b019fa091a5eb17d54463ec5bfed56146cb8b68dcf3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Add a new Product";
        
        $__internal_cdc19d561bdf3b552ca9b019fa091a5eb17d54463ec5bfed56146cb8b68dcf3a->leave($__internal_cdc19d561bdf3b552ca9b019fa091a5eb17d54463ec5bfed56146cb8b68dcf3a_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_f7efffe0bc37e644df8a21de4b4bfb6b61fbce76f6b5d22195372afebb0f90d4 = $this->env->getExtension("native_profiler");
        $__internal_f7efffe0bc37e644df8a21de4b4bfb6b61fbce76f6b5d22195372afebb0f90d4->enter($__internal_f7efffe0bc37e644df8a21de4b4bfb6b61fbce76f6b5d22195372afebb0f90d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "my-form-class")));
        echo "
        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_f7efffe0bc37e644df8a21de4b4bfb6b61fbce76f6b5d22195372afebb0f90d4->leave($__internal_f7efffe0bc37e644df8a21de4b4bfb6b61fbce76f6b5d22195372afebb0f90d4_prof);

    }

    public function getTemplateName()
    {
        return "add_product_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 10,  61 => 9,  56 => 8,  50 => 7,  38 => 5,  31 => 2,  29 => 3,  11 => 2,);
    }
}
/* */
/* {% extends 'base.html.twig' %}*/
/* {% form_theme form 'bootstrap_3_horizontal_layout.html.twig' %}*/
/* */
/* {% block title %}Add a new Product{% endblock %}*/
/* */
/* {% block body %}*/
/*     {{ form_start(form, {'attr': {'class': 'my-form-class'} }) }}*/
/*         {{ form_widget(form) }}*/
/*     {{ form_end(form) }}*/
/* {% endblock %}*/
