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
        $__internal_8a1625473e45b11a653012e225db0cb0fe1a5ab2d4a6c33d7d5c60478a9e8fd9 = $this->env->getExtension("native_profiler");
        $__internal_8a1625473e45b11a653012e225db0cb0fe1a5ab2d4a6c33d7d5c60478a9e8fd9->enter($__internal_8a1625473e45b11a653012e225db0cb0fe1a5ab2d4a6c33d7d5c60478a9e8fd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "inventory_operation_form.html.twig"));

        // line 3
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_horizontal_layout.html.twig"));
        // line 2
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a1625473e45b11a653012e225db0cb0fe1a5ab2d4a6c33d7d5c60478a9e8fd9->leave($__internal_8a1625473e45b11a653012e225db0cb0fe1a5ab2d4a6c33d7d5c60478a9e8fd9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1771348a722442e117041e60b24f17ea253e5f97c2435f49887c7a3d858fc99d = $this->env->getExtension("native_profiler");
        $__internal_1771348a722442e117041e60b24f17ea253e5f97c2435f49887c7a3d858fc99d->enter($__internal_1771348a722442e117041e60b24f17ea253e5f97c2435f49887c7a3d858fc99d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Operation";
        
        $__internal_1771348a722442e117041e60b24f17ea253e5f97c2435f49887c7a3d858fc99d->leave($__internal_1771348a722442e117041e60b24f17ea253e5f97c2435f49887c7a3d858fc99d_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_22c10a254e288717427b910a84e016901885ceda7d516d3f7ac925468ce68dea = $this->env->getExtension("native_profiler");
        $__internal_22c10a254e288717427b910a84e016901885ceda7d516d3f7ac925468ce68dea->enter($__internal_22c10a254e288717427b910a84e016901885ceda7d516d3f7ac925468ce68dea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    
    ";
        // line 9
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "error"), "method")) {
            // line 10
            echo "        <div class=\"alert alert-danger\">
            ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "error"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 12
                echo "                ";
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "        </div>
    ";
        }
        // line 16
        echo "    
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <h1>";
        // line 19
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, (isset($context["operation"]) ? $context["operation"] : $this->getContext($context, "operation"))), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["inventory"]) ? $context["inventory"] : $this->getContext($context, "inventory")), "product", array()), "name", array()), "html", null, true);
        echo "</h1>
            <h2>Current Quantity: ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["inventory"]) ? $context["inventory"] : $this->getContext($context, "inventory")), "quantity", array()), "html", null, true);
        echo "</h2>
            <h2>Current Price: ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["inventory"]) ? $context["inventory"] : $this->getContext($context, "inventory")), "price", array()), "html", null, true);
        echo "</h2>
        </div>
    </div>
        
    <div class=\"row\">
        <div class=\"col-xs-6\">
            ";
        // line 27
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
                ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>
";
        
        $__internal_22c10a254e288717427b910a84e016901885ceda7d516d3f7ac925468ce68dea->leave($__internal_22c10a254e288717427b910a84e016901885ceda7d516d3f7ac925468ce68dea_prof);

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
        return array (  113 => 29,  109 => 28,  105 => 27,  96 => 21,  92 => 20,  86 => 19,  81 => 16,  77 => 14,  68 => 12,  64 => 11,  61 => 10,  59 => 9,  56 => 8,  50 => 7,  38 => 5,  31 => 2,  29 => 3,  11 => 2,);
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
/*     {% if app.session.flashBag.has('error') %}*/
/*         <div class="alert alert-danger">*/
/*             {% for msg in app.session.flashBag.get('error') %}*/
/*                 {{ msg }}*/
/*             {% endfor %}*/
/*         </div>*/
/*     {% endif %}*/
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
