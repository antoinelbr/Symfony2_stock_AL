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
        $__internal_e527372e42511d48b729e92ec9328b68388d5758c19b44b92fdec02adc9132a7 = $this->env->getExtension("native_profiler");
        $__internal_e527372e42511d48b729e92ec9328b68388d5758c19b44b92fdec02adc9132a7->enter($__internal_e527372e42511d48b729e92ec9328b68388d5758c19b44b92fdec02adc9132a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "inventory_operations.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e527372e42511d48b729e92ec9328b68388d5758c19b44b92fdec02adc9132a7->leave($__internal_e527372e42511d48b729e92ec9328b68388d5758c19b44b92fdec02adc9132a7_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_9aedee7a6a6ce4314f08e74a95a8a219faf3bc0ca30c9cc5bf5d02f41f988162 = $this->env->getExtension("native_profiler");
        $__internal_9aedee7a6a6ce4314f08e74a95a8a219faf3bc0ca30c9cc5bf5d02f41f988162->enter($__internal_9aedee7a6a6ce4314f08e74a95a8a219faf3bc0ca30c9cc5bf5d02f41f988162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Product List";
        
        $__internal_9aedee7a6a6ce4314f08e74a95a8a219faf3bc0ca30c9cc5bf5d02f41f988162->leave($__internal_9aedee7a6a6ce4314f08e74a95a8a219faf3bc0ca30c9cc5bf5d02f41f988162_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_f2fb28a1940944f4245bd979a2e9ec61ace6aae0d115464a24f563f5e417c183 = $this->env->getExtension("native_profiler");
        $__internal_f2fb28a1940944f4245bd979a2e9ec61ace6aae0d115464a24f563f5e417c183->enter($__internal_f2fb28a1940944f4245bd979a2e9ec61ace6aae0d115464a24f563f5e417c183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            if (($this->getAttribute($context["operation"], "quantity", array()) < 0)) {
                // line 32
                echo "                        OUT
                    ";
            } else {
                // line 33
                echo "    
                        IN
                    ";
            }
            // line 36
            echo "                </th>
                <td>
                    ";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["operation"], "inventory", array()), "product", array()), "name", array()), "html", null, true);
            echo "
                </td>
                <td>
                    ";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["operation"], "quantity", array()), "html", null, true);
            echo "
                </td>
                <td>
                    ";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["operation"], "price", array()), "html", null, true);
            echo "
                </td>
                <td>
                    ";
            // line 47
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["operation"], "date", array()), "d-M-Y H:i"), "html", null, true);
            echo "
                </td>
                <td>
                    <a href=\"#\" data-href=\"/operation/delete/";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["operation"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-xs btn-danger delete-action\"
                       data-toggle=\"modal\" data-target=\"#confirm-delete\" data-id=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["operation"], "id", array()), "html", null, true);
            echo "\">Delete</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['operation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
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
        
        $__internal_f2fb28a1940944f4245bd979a2e9ec61ace6aae0d115464a24f563f5e417c183->leave($__internal_f2fb28a1940944f4245bd979a2e9ec61ace6aae0d115464a24f563f5e417c183_prof);

    }

    // line 77
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_17f52682a03811b32135891080eb174c463432d5a8411b005923e7b30e937841 = $this->env->getExtension("native_profiler");
        $__internal_17f52682a03811b32135891080eb174c463432d5a8411b005923e7b30e937841->enter($__internal_17f52682a03811b32135891080eb174c463432d5a8411b005923e7b30e937841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 78
        echo "    <script>
        /*We need a confirmation Modal before deletion*/
        \$( \".delete-action\" ).on(\"click\", function(e) {
            e.preventDefault();
            /*I pass the Id of the operation to the modal*/
            \$(\"#submit-delete\").data(\"id\",\$(this).data(\"id\"));
            
            /*Show the modal */
";
        // line 87
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
        
        $__internal_17f52682a03811b32135891080eb174c463432d5a8411b005923e7b30e937841->leave($__internal_17f52682a03811b32135891080eb174c463432d5a8411b005923e7b30e937841_prof);

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
        return array (  181 => 87,  171 => 78,  165 => 77,  138 => 55,  128 => 51,  124 => 50,  118 => 47,  112 => 44,  106 => 41,  100 => 38,  96 => 36,  91 => 33,  87 => 32,  85 => 31,  81 => 29,  77 => 28,  54 => 7,  48 => 6,  36 => 4,  11 => 2,);
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
/*                     {% if operation.quantity < 0 %}*/
/*                         OUT*/
/*                     {% else %}    */
/*                         IN*/
/*                     {% endif %}*/
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
