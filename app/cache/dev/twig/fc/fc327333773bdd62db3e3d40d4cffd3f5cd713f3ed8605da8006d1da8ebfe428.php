<?php

/* products.html.twig */
class __TwigTemplate_3204b8c3031ecd3648c04d264de22b83ca4b50773a50083b8346fcacf5ac12fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "products.html.twig", 2);
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
        $__internal_99d8020e2ed6a727ed104d9901130fe4f66869a8b86c73897a1ca5f9e5a7c58d = $this->env->getExtension("native_profiler");
        $__internal_99d8020e2ed6a727ed104d9901130fe4f66869a8b86c73897a1ca5f9e5a7c58d->enter($__internal_99d8020e2ed6a727ed104d9901130fe4f66869a8b86c73897a1ca5f9e5a7c58d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "products.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99d8020e2ed6a727ed104d9901130fe4f66869a8b86c73897a1ca5f9e5a7c58d->leave($__internal_99d8020e2ed6a727ed104d9901130fe4f66869a8b86c73897a1ca5f9e5a7c58d_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_8b017d283512a48758cf114986b8c66cfaf7243651bec17c9832a85aed8b50d3 = $this->env->getExtension("native_profiler");
        $__internal_8b017d283512a48758cf114986b8c66cfaf7243651bec17c9832a85aed8b50d3->enter($__internal_8b017d283512a48758cf114986b8c66cfaf7243651bec17c9832a85aed8b50d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Product List";
        
        $__internal_8b017d283512a48758cf114986b8c66cfaf7243651bec17c9832a85aed8b50d3->leave($__internal_8b017d283512a48758cf114986b8c66cfaf7243651bec17c9832a85aed8b50d3_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_a3202b7e8f3c2cf03b568e27d4a4682475dd6fe8c5ddf4829537cacbdb14e3c9 = $this->env->getExtension("native_profiler");
        $__internal_a3202b7e8f3c2cf03b568e27d4a4682475dd6fe8c5ddf4829537cacbdb14e3c9->enter($__internal_a3202b7e8f3c2cf03b568e27d4a4682475dd6fe8c5ddf4829537cacbdb14e3c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <a href=\"/product/add\" class=\"btn btn-lg btn-primary\" style=\"float:right;\">
                Add a Product
            </a>
        </div>
    </div>
    
    
    
    <table class=\"table table-striped\">
        <thead> 
            <tr> 
                <th>#</th> 
                <th>Product Name</th>
                <th>Desc.</th> 
                <th>Action</th>
            </tr> 
        </thead>
        <tbody> 
        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 29
            echo "            <tr>
                <th>
                    ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
            echo "
                </th>
                <td>
                    ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
            echo "
                </td>
                <td>
                    ";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "description", array()), "html", null, true);
            echo "
                </td>
                <td>
                    <a href=\"/product/edit/";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-xs btn-primary\">Edit</a>
                    
                    <a href=\"#\" data-href=\"/product/delete/";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-xs btn-danger delete-action\"
                       data-toggle=\"modal\" data-target=\"#confirm-delete\" data-id=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
            echo "\" data-name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
            echo "\">Delete</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "        </tbody>
    </table>
        
        
    <div class=\"modal fade\" id=\"confirm-delete\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <strong>Delete</strong>
                </div>
                <div class=\"modal-body\">
                    Deleting the product <strong><span id=\"product-name-modal\"></span></strong> will 
                    permanently delete it's information and inventory.
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancel</button>
                    <a href=\"#\" data-id=\"\" id=\"submit-delete\" class=\"btn btn-danger btn-ok\" >Delete</a>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_a3202b7e8f3c2cf03b568e27d4a4682475dd6fe8c5ddf4829537cacbdb14e3c9->leave($__internal_a3202b7e8f3c2cf03b568e27d4a4682475dd6fe8c5ddf4829537cacbdb14e3c9_prof);

    }

    // line 70
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_15c348a93541f09ad997e60485f3cf5baadfcffb9d0e94e268bd62a9e4e60ae7 = $this->env->getExtension("native_profiler");
        $__internal_15c348a93541f09ad997e60485f3cf5baadfcffb9d0e94e268bd62a9e4e60ae7->enter($__internal_15c348a93541f09ad997e60485f3cf5baadfcffb9d0e94e268bd62a9e4e60ae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 71
        echo "    <script>
        /*We need a confirmation Modal before deletion*/
        \$( \".delete-action\" ).on(\"click\", function(e) {
            e.preventDefault();
            var productName = \$(this).data(\"name\");
            /* When we click on Delete button we pass the Product name to the Modal  */
            \$(\"#product-name-modal\").empty().append(productName);
            
            /*I pass the Id of the product to the modal*/
            \$(\"#submit-delete\").data(\"id\",\$(this).data(\"id\"));
            
            /*Show the modal */
";
        // line 84
        echo "            
        });
        
        /* Redirect to Right Url to delete the right product. GET for now */
        \$( \"#submit-delete\" ).on(\"click\", function(e) {
            e.preventDefault();
            var url = window.location.protocol + \"//\" + window.location.host+ \"/product/delete/\" + \$(this).data(\"id\");
            console.log(url);
            window.location.href = url;
        });
    </script>
";
        
        $__internal_15c348a93541f09ad997e60485f3cf5baadfcffb9d0e94e268bd62a9e4e60ae7->leave($__internal_15c348a93541f09ad997e60485f3cf5baadfcffb9d0e94e268bd62a9e4e60ae7_prof);

    }

    public function getTemplateName()
    {
        return "products.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 84,  158 => 71,  152 => 70,  124 => 47,  112 => 43,  108 => 42,  103 => 40,  97 => 37,  91 => 34,  85 => 31,  81 => 29,  77 => 28,  54 => 7,  48 => 6,  36 => 4,  11 => 2,);
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
/*             <a href="/product/add" class="btn btn-lg btn-primary" style="float:right;">*/
/*                 Add a Product*/
/*             </a>*/
/*         </div>*/
/*     </div>*/
/*     */
/*     */
/*     */
/*     <table class="table table-striped">*/
/*         <thead> */
/*             <tr> */
/*                 <th>#</th> */
/*                 <th>Product Name</th>*/
/*                 <th>Desc.</th> */
/*                 <th>Action</th>*/
/*             </tr> */
/*         </thead>*/
/*         <tbody> */
/*         {% for product in products %}*/
/*             <tr>*/
/*                 <th>*/
/*                     {{ product.id }}*/
/*                 </th>*/
/*                 <td>*/
/*                     {{ product.name }}*/
/*                 </td>*/
/*                 <td>*/
/*                     {{ product.description }}*/
/*                 </td>*/
/*                 <td>*/
/*                     <a href="/product/edit/{{product.id}}" class="btn btn-xs btn-primary">Edit</a>*/
/*                     */
/*                     <a href="#" data-href="/product/delete/{{product.id}}" class="btn btn-xs btn-danger delete-action"*/
/*                        data-toggle="modal" data-target="#confirm-delete" data-id="{{product.id}}" data-name="{{product.name}}">Delete</a>*/
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
/*                     Deleting the product <strong><span id="product-name-modal"></span></strong> will */
/*                     permanently delete it's information and inventory.*/
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
/*             var productName = $(this).data("name");*/
/*             /* When we click on Delete button we pass the Product name to the Modal  *//* */
/*             $("#product-name-modal").empty().append(productName);*/
/*             */
/*             /*I pass the Id of the product to the modal*//* */
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
/*             var url = window.location.protocol + "//" + window.location.host+ "/product/delete/" + $(this).data("id");*/
/*             console.log(url);*/
/*             window.location.href = url;*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
/*         */
/*    */
/* */
