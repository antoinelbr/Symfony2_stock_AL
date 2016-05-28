<?php

/* inventory.html.twig */
class __TwigTemplate_613d049ff10bc82992e859add0a8836df7558aa017af9dfe62ec1992599ad059 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "inventory.html.twig", 2);
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
        $__internal_acac527d021c296323fe09f9535a51b863167bdd1de8c682ed80e5c49e8a6104 = $this->env->getExtension("native_profiler");
        $__internal_acac527d021c296323fe09f9535a51b863167bdd1de8c682ed80e5c49e8a6104->enter($__internal_acac527d021c296323fe09f9535a51b863167bdd1de8c682ed80e5c49e8a6104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "inventory.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_acac527d021c296323fe09f9535a51b863167bdd1de8c682ed80e5c49e8a6104->leave($__internal_acac527d021c296323fe09f9535a51b863167bdd1de8c682ed80e5c49e8a6104_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_e7513e42793c39c7817515d4e69895372b7930dd4af04fe38ed926526f2bd0b0 = $this->env->getExtension("native_profiler");
        $__internal_e7513e42793c39c7817515d4e69895372b7930dd4af04fe38ed926526f2bd0b0->enter($__internal_e7513e42793c39c7817515d4e69895372b7930dd4af04fe38ed926526f2bd0b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Inventory List";
        
        $__internal_e7513e42793c39c7817515d4e69895372b7930dd4af04fe38ed926526f2bd0b0->leave($__internal_e7513e42793c39c7817515d4e69895372b7930dd4af04fe38ed926526f2bd0b0_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_dfffa166dc15ef645d33bc07977b026093dc0fb0c35bd682a5283f61c2b0a059 = $this->env->getExtension("native_profiler");
        $__internal_dfffa166dc15ef645d33bc07977b026093dc0fb0c35bd682a5283f61c2b0a059->enter($__internal_dfffa166dc15ef645d33bc07977b026093dc0fb0c35bd682a5283f61c2b0a059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "  
    <table class=\"table table-striped\">
        <thead> 
            <tr> 
                <th>#</th> 
                <th>Product Name</th>
                <th>Desc.</th> 
                <th>Price</th> 
                <th>Quantity</th>
                <th>Action</th>
            </tr> 
        </thead>
        <tbody> 
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["inventories"]) ? $context["inventories"] : $this->getContext($context, "inventories")));
        foreach ($context['_seq'] as $context["_key"] => $context["inventory"]) {
            // line 20
            echo "            <tr>
                <th>
                    ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["inventory"], "id", array()), "html", null, true);
            echo "
                </th>
                <td>
                    ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inventory"], "product", array()), "name", array()), "html", null, true);
            echo "
                </td>
                <td>
                    ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inventory"], "product", array()), "description", array()), "html", null, true);
            echo "
                </td>
                <td>
                    ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["inventory"], "price", array()), "html", null, true);
            echo "
                </td>
                <td>
                    ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["inventory"], "quantity", array()), "html", null, true);
            echo "
                </td>
                <td>
                    <a href=\"/operation/in/";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["inventory"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-xs btn-default\">IN</a>
                    <a href=\"/operation/out/";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["inventory"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-xs btn-default\">OUT</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inventory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        </tbody>
    </table
";
        
        $__internal_dfffa166dc15ef645d33bc07977b026093dc0fb0c35bd682a5283f61c2b0a059->leave($__internal_dfffa166dc15ef645d33bc07977b026093dc0fb0c35bd682a5283f61c2b0a059_prof);

    }

    public function getTemplateName()
    {
        return "inventory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 42,  109 => 38,  105 => 37,  99 => 34,  93 => 31,  87 => 28,  81 => 25,  75 => 22,  71 => 20,  67 => 19,  47 => 6,  35 => 4,  11 => 2,);
    }
}
/* */
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %}Inventory List{% endblock %}*/
/* */
/* {% block body %}  */
/*     <table class="table table-striped">*/
/*         <thead> */
/*             <tr> */
/*                 <th>#</th> */
/*                 <th>Product Name</th>*/
/*                 <th>Desc.</th> */
/*                 <th>Price</th> */
/*                 <th>Quantity</th>*/
/*                 <th>Action</th>*/
/*             </tr> */
/*         </thead>*/
/*         <tbody> */
/*         {% for inventory in inventories %}*/
/*             <tr>*/
/*                 <th>*/
/*                     {{ inventory.id }}*/
/*                 </th>*/
/*                 <td>*/
/*                     {{ inventory.product.name }}*/
/*                 </td>*/
/*                 <td>*/
/*                     {{ inventory.product.description }}*/
/*                 </td>*/
/*                 <td>*/
/*                     {{ inventory.price }}*/
/*                 </td>*/
/*                 <td>*/
/*                     {{ inventory.quantity }}*/
/*                 </td>*/
/*                 <td>*/
/*                     <a href="/operation/in/{{inventory.id}}" class="btn btn-xs btn-default">IN</a>*/
/*                     <a href="/operation/out/{{inventory.id}}" class="btn btn-xs btn-default">OUT</a>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table*/
/* {% endblock %}*/
/*    */
/* */
