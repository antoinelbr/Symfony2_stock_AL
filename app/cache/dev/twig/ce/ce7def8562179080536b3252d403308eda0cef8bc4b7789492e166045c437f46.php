<?php

/* inventory_operation_form.html.twig */
class __TwigTemplate_2bb4a7d3fe60edac4fe2d4fb703329bf9b0dba6dd2dfaf349b09fdde2ca5640f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "inventory_operation_form.html.twig", 2);
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
        $__internal_d8d11cf4a7881e99c5bbd5b071f6e95795f0a7c7eaf60bd2cdb9200eea225516 = $this->env->getExtension("native_profiler");
        $__internal_d8d11cf4a7881e99c5bbd5b071f6e95795f0a7c7eaf60bd2cdb9200eea225516->enter($__internal_d8d11cf4a7881e99c5bbd5b071f6e95795f0a7c7eaf60bd2cdb9200eea225516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "inventory_operation_form.html.twig"));

        // line 3
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_horizontal_layout.html.twig"));
        // line 2
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8d11cf4a7881e99c5bbd5b071f6e95795f0a7c7eaf60bd2cdb9200eea225516->leave($__internal_d8d11cf4a7881e99c5bbd5b071f6e95795f0a7c7eaf60bd2cdb9200eea225516_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d1fc7c4b43fa6306060bdd256548d1c564195b80a4bbd7da42c25428f9d2d8c9 = $this->env->getExtension("native_profiler");
        $__internal_d1fc7c4b43fa6306060bdd256548d1c564195b80a4bbd7da42c25428f9d2d8c9->enter($__internal_d1fc7c4b43fa6306060bdd256548d1c564195b80a4bbd7da42c25428f9d2d8c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Operation";
        
        $__internal_d1fc7c4b43fa6306060bdd256548d1c564195b80a4bbd7da42c25428f9d2d8c9->leave($__internal_d1fc7c4b43fa6306060bdd256548d1c564195b80a4bbd7da42c25428f9d2d8c9_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_d6ca71a5a01d3f8e0b52ae433eb6828e7d4d339ef0f8e7b8e99c78a598731876 = $this->env->getExtension("native_profiler");
        $__internal_d6ca71a5a01d3f8e0b52ae433eb6828e7d4d339ef0f8e7b8e99c78a598731876->enter($__internal_d6ca71a5a01d3f8e0b52ae433eb6828e7d4d339ef0f8e7b8e99c78a598731876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <h1>";
        // line 11
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, (isset($context["operation"]) ? $context["operation"] : $this->getContext($context, "operation"))), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["inventory"]) ? $context["inventory"] : $this->getContext($context, "inventory")), "product", array()), "name", array()), "html", null, true);
        echo "</h1>
            <h2>Current Quantity: ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["inventory"]) ? $context["inventory"] : $this->getContext($context, "inventory")), "quantity", array()), "html", null, true);
        echo "</h2>
            <h2>Current Price: ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["inventory"]) ? $context["inventory"] : $this->getContext($context, "inventory")), "price", array()), "html", null, true);
        echo "</h2>
        </div>
    </div>
        
    <div class=\"row\">
        <div class=\"col-xs-6\">
            ";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
                ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 21
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>
";
        
        $__internal_d6ca71a5a01d3f8e0b52ae433eb6828e7d4d339ef0f8e7b8e99c78a598731876->leave($__internal_d6ca71a5a01d3f8e0b52ae433eb6828e7d4d339ef0f8e7b8e99c78a598731876_prof);

    }

    public function getTemplateName()
    {
        return "inventory_operation_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 21,  84 => 20,  80 => 19,  71 => 13,  67 => 12,  61 => 11,  56 => 8,  50 => 7,  38 => 5,  31 => 2,  29 => 3,  11 => 2,);
    }
}
/* */
/* {% extends 'base.html.twig' %}*/
/* {% form_theme form 'bootstrap_3_horizontal_layout.html.twig' %}*/
/* */
/* {% block title %}Operation{% endblock %}*/
/* */
/* {% block body %}*/
/*     */
/*     <div class="row">*/
/*         <div class="col-xs-12">*/
/*             <h1>{{operation|upper}}: {{inventory.product.name}}</h1>*/
/*             <h2>Current Quantity: {{inventory.quantity}}</h2>*/
/*             <h2>Current Price: {{inventory.price}}</h2>*/
/*         </div>*/
/*     </div>*/
/*         */
/*     <div class="row">*/
/*         <div class="col-xs-6">*/
/*             {{ form_start(form, {'attr': {'class': 'form-horizontal'} }) }}*/
/*                 {{ form_widget(form) }}*/
/*             {{ form_end(form) }}*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
