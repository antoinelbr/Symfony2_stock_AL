<?php

/* inventory_operations.html.twig */
class __TwigTemplate_6353a00a4e0ec452f9f20ed0228d7ec786db9a9d107f55ebbdeb93c84acc2c37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "inventory_operations.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b62bf917e1e5f32ae38f4c10d533e68d7ca11a90bcf90794de0dd671718235c4 = $this->env->getExtension("native_profiler");
        $__internal_b62bf917e1e5f32ae38f4c10d533e68d7ca11a90bcf90794de0dd671718235c4->enter($__internal_b62bf917e1e5f32ae38f4c10d533e68d7ca11a90bcf90794de0dd671718235c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "inventory_operations.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b62bf917e1e5f32ae38f4c10d533e68d7ca11a90bcf90794de0dd671718235c4->leave($__internal_b62bf917e1e5f32ae38f4c10d533e68d7ca11a90bcf90794de0dd671718235c4_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_b77a01d2983c1095caa5c80806403c2e17e0272faf533f435cb1ac6111e01735 = $this->env->getExtension("native_profiler");
        $__internal_b77a01d2983c1095caa5c80806403c2e17e0272faf533f435cb1ac6111e01735->enter($__internal_b77a01d2983c1095caa5c80806403c2e17e0272faf533f435cb1ac6111e01735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Product List";
        
        $__internal_b77a01d2983c1095caa5c80806403c2e17e0272faf533f435cb1ac6111e01735->leave($__internal_b77a01d2983c1095caa5c80806403c2e17e0272faf533f435cb1ac6111e01735_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_9a7c0abb96d3f919ab01c6a37f97ebf4436d056501e465998441803a0cc360ad = $this->env->getExtension("native_profiler");
        $__internal_9a7c0abb96d3f919ab01c6a37f97ebf4436d056501e465998441803a0cc360ad->enter($__internal_9a7c0abb96d3f919ab01c6a37f97ebf4436d056501e465998441803a0cc360ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    
    <div class=\"row\">
        <div class=\"col-xs-12\">
            
        </div>
    </div>
    
    
    
    <table class=\"table table-striped\">
        <thead> 
            <tr> 
                <th>Op.</th> 
                <th>Product Name</th>
                <th>Quantity</th> 
                <th>Price</th>
                <th>Date</th>
                <th>Action</th>
            </tr> 
        </thead>
        <tbody> 
        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["operations"]) ? $context["operations"] : $this->getContext($context, "operations")));
        foreach ($context['_seq'] as $context["_key"] => $context["operation"]) {
            // line 29
            echo "            <tr >
                <th>
                    ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["operation"], "type", array()), "html", null, true);
            echo "
                </th>
                <td>
                    ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["operation"], "inventory", array()), "product", array()), "name", array()), "html", null, true);
            echo "
                </td>
                <td>
                    ";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["operation"], "quantity", array()), "html", null, true);
            echo "
                </td>
                <td>
                    ";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["operation"], "price", array()), "html", null, true);
            echo "
                </td>
                <td>
                    ";
            // line 43
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["operation"], "date", array()), "d-M-Y H:i"), "html", null, true);
            echo "
                </td>
                <td>
                    <a href=\"#\" data-href=\"/operation/delete/";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["operation"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-xs btn-danger delete-action\"
                       data-toggle=\"modal\" data-target=\"#confirm-delete\" data-id=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["operation"], "id", array()), "html", null, true);
            echo "\">Delete</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['operation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "        </tbody>
    </table>
        
        
    <div class=\"modal fade\" id=\"confirm-delete\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <strong>Delete</strong>
                </div>
                <div class=\"modal-body\">
                    Are you sure you want to delete this operation?
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancel</button>
                    <a href=\"#\" data-id=\"\" id=\"submit-delete\" class=\"btn btn-danger btn-ok\" >Delete</a>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_9a7c0abb96d3f919ab01c6a37f97ebf4436d056501e465998441803a0cc360ad->leave($__internal_9a7c0abb96d3f919ab01c6a37f97ebf4436d056501e465998441803a0cc360ad_prof);

    }

    // line 73
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5b96311a7a6bd1be213af0819c566d5e56c970aa336d8ffbafb10e5810a6e78b = $this->env->getExtension("native_profiler");
        $__internal_5b96311a7a6bd1be213af0819c566d5e56c970aa336d8ffbafb10e5810a6e78b->enter($__internal_5b96311a7a6bd1be213af0819c566d5e56c970aa336d8ffbafb10e5810a6e78b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 74
        echo "    <script>
        /*We need a confirmation Modal before deletion*/
        \$( \".delete-action\" ).on(\"click\", function(e) {
            e.preventDefault();
            /*I pass the Id of the operation to the modal*/
            \$(\"#submit-delete\").data(\"id\",\$(this).data(\"id\"));
            
            /*Show the modal */
";
        // line 83
        echo "            
        });
        
        /* Redirect to Right Url to delete the right product. GET for now */
        \$( \"#submit-delete\" ).on(\"click\", function(e) {
            e.preventDefault();
            var url = window.location.protocol + \"//\" + window.location.host+ \"/operation/delete/\" + \$(this).data(\"id\");
            console.log(url);
            window.location.href = url;
        });
    </script>
";
        
        $__internal_5b96311a7a6bd1be213af0819c566d5e56c970aa336d8ffbafb10e5810a6e78b->leave($__internal_5b96311a7a6bd1be213af0819c566d5e56c970aa336d8ffbafb10e5810a6e78b_prof);

    }

    public function getTemplateName()
    {
        return "inventory_operations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 83,  162 => 74,  156 => 73,  129 => 51,  119 => 47,  115 => 46,  109 => 43,  103 => 40,  97 => 37,  91 => 34,  85 => 31,  81 => 29,  77 => 28,  54 => 7,  48 => 6,  36 => 4,  11 => 2,);
    }
}
/* */
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %}Product List{% endblock %}*/
/* */
/* {% block body %}*/
/*     */
/*     <div class="row">*/
/*         <div class="col-xs-12">*/
/*             */
/*         </div>*/
/*     </div>*/
/*     */
/*     */
/*     */
/*     <table class="table table-striped">*/
/*         <thead> */
/*             <tr> */
/*                 <th>Op.</th> */
/*                 <th>Product Name</th>*/
/*                 <th>Quantity</th> */
/*                 <th>Price</th>*/
/*                 <th>Date</th>*/
/*                 <th>Action</th>*/
/*             </tr> */
/*         </thead>*/
/*         <tbody> */
/*         {% for operation in operations %}*/
/*             <tr >*/
/*                 <th>*/
/*                     {{ operation.type }}*/
/*                 </th>*/
/*                 <td>*/
/*                     {{ operation.inventory.product.name }}*/
/*                 </td>*/
/*                 <td>*/
/*                     {{ operation.quantity }}*/
/*                 </td>*/
/*                 <td>*/
/*                     {{ operation.price }}*/
/*                 </td>*/
/*                 <td>*/
/*                     {{ operation.date|date("d-M-Y H:i") }}*/
/*                 </td>*/
/*                 <td>*/
/*                     <a href="#" data-href="/operation/delete/{{operation.id}}" class="btn btn-xs btn-danger delete-action"*/
/*                        data-toggle="modal" data-target="#confirm-delete" data-id="{{operation.id}}">Delete</a>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/*         */
/*         */
/*     <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">*/
/*         <div class="modal-dialog">*/
/*             <div class="modal-content">*/
/*                 <div class="modal-header">*/
/*                     <strong>Delete</strong>*/
/*                 </div>*/
/*                 <div class="modal-body">*/
/*                     Are you sure you want to delete this operation?*/
/*                 </div>*/
/*                 <div class="modal-footer">*/
/*                     <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>*/
/*                     <a href="#" data-id="" id="submit-delete" class="btn btn-danger btn-ok" >Delete</a>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     <script>*/
/*         /*We need a confirmation Modal before deletion*//* */
/*         $( ".delete-action" ).on("click", function(e) {*/
/*             e.preventDefault();*/
/*             /*I pass the Id of the operation to the modal*//* */
/*             $("#submit-delete").data("id",$(this).data("id"));*/
/*             */
/*             /*Show the modal *//* */
/* {#            $('#confirm-delete').modal('show');#}*/
/*             */
/*         });*/
/*         */
/*         /* Redirect to Right Url to delete the right product. GET for now *//* */
/*         $( "#submit-delete" ).on("click", function(e) {*/
/*             e.preventDefault();*/
/*             var url = window.location.protocol + "//" + window.location.host+ "/operation/delete/" + $(this).data("id");*/
/*             console.log(url);*/
/*             window.location.href = url;*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
/*         */
/*    */
/* */
