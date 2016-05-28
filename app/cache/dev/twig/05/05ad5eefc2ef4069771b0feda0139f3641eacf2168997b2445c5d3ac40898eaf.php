<?php

/* base.html.twig */
class __TwigTemplate_9d59d8e7a4d9978cd932138dc25f0ffa34c65fcd0f05f76c9ba36199504f21f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_54f6f91f41d00bd630e4c7250d814a1de96d0aaa0f2390838add15f0f2f19035 = $this->env->getExtension("native_profiler");
        $__internal_54f6f91f41d00bd630e4c7250d814a1de96d0aaa0f2390838add15f0f2f19035->enter($__internal_54f6f91f41d00bd630e4c7250d814a1de96d0aaa0f2390838add15f0f2f19035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        
        <nav class=\"navbar\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"/inventory\">AL</a>
                </div>
                <div id=\"navbar\" class=\"collapse navbar-collapse\">
                    <ul class=\"nav navbar-nav\">
                        <li class=\"active\"><a href=\"/inventory\">Inventory</a></li>
                        <li class=\"active\"><a href=\"/products\">Products</a></li>
                        <li class=\"active\"><a href=\"/operations\">Operations</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>

        <div class=\"container\">

            ";
        // line 36
        $this->displayBlock('body', $context, $blocks);
        // line 38
        echo "
        </div>
        
        <script src=\"https://code.jquery.com/jquery-2.2.4.min.js\" integrity=\"sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=\" crossorigin=\"anonymous\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 43
        $this->displayBlock('javascripts', $context, $blocks);
        // line 45
        echo "    </body>
</html>
";
        
        $__internal_54f6f91f41d00bd630e4c7250d814a1de96d0aaa0f2390838add15f0f2f19035->leave($__internal_54f6f91f41d00bd630e4c7250d814a1de96d0aaa0f2390838add15f0f2f19035_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1696bfa276dd25d2649b52df6d80ca5ceb2e67e717d8d379c79afda85a95324d = $this->env->getExtension("native_profiler");
        $__internal_1696bfa276dd25d2649b52df6d80ca5ceb2e67e717d8d379c79afda85a95324d->enter($__internal_1696bfa276dd25d2649b52df6d80ca5ceb2e67e717d8d379c79afda85a95324d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1696bfa276dd25d2649b52df6d80ca5ceb2e67e717d8d379c79afda85a95324d->leave($__internal_1696bfa276dd25d2649b52df6d80ca5ceb2e67e717d8d379c79afda85a95324d_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9ae00fb0478012ac66fca53c44aea619cab157384ffaf44e966ab31e5859f9b1 = $this->env->getExtension("native_profiler");
        $__internal_9ae00fb0478012ac66fca53c44aea619cab157384ffaf44e966ab31e5859f9b1->enter($__internal_9ae00fb0478012ac66fca53c44aea619cab157384ffaf44e966ab31e5859f9b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "        ";
        
        $__internal_9ae00fb0478012ac66fca53c44aea619cab157384ffaf44e966ab31e5859f9b1->leave($__internal_9ae00fb0478012ac66fca53c44aea619cab157384ffaf44e966ab31e5859f9b1_prof);

    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        $__internal_4dc109f9b590b392e0d94dde3f9b33468ad090edc51180f73b51b339b68f5762 = $this->env->getExtension("native_profiler");
        $__internal_4dc109f9b590b392e0d94dde3f9b33468ad090edc51180f73b51b339b68f5762->enter($__internal_4dc109f9b590b392e0d94dde3f9b33468ad090edc51180f73b51b339b68f5762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 37
        echo "            ";
        
        $__internal_4dc109f9b590b392e0d94dde3f9b33468ad090edc51180f73b51b339b68f5762->leave($__internal_4dc109f9b590b392e0d94dde3f9b33468ad090edc51180f73b51b339b68f5762_prof);

    }

    // line 43
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b8c9e7e3c6d96fedcdc6b7019fdc233c0dd9c350d3bddb4d7114c2f59683d357 = $this->env->getExtension("native_profiler");
        $__internal_b8c9e7e3c6d96fedcdc6b7019fdc233c0dd9c350d3bddb4d7114c2f59683d357->enter($__internal_b8c9e7e3c6d96fedcdc6b7019fdc233c0dd9c350d3bddb4d7114c2f59683d357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 44
        echo "        ";
        
        $__internal_b8c9e7e3c6d96fedcdc6b7019fdc233c0dd9c350d3bddb4d7114c2f59683d357->leave($__internal_b8c9e7e3c6d96fedcdc6b7019fdc233c0dd9c350d3bddb4d7114c2f59683d357_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 44,  134 => 43,  127 => 37,  121 => 36,  114 => 8,  108 => 7,  96 => 5,  87 => 45,  85 => 43,  81 => 42,  75 => 38,  73 => 36,  42 => 9,  40 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">*/
/*         {% block stylesheets %}*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         */
/*         <nav class="navbar">*/
/*             <div class="container">*/
/*                 <div class="navbar-header">*/
/*                     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">*/
/*                     <span class="sr-only">Toggle navigation</span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                     </button>*/
/*                     <a class="navbar-brand" href="/inventory">AL</a>*/
/*                 </div>*/
/*                 <div id="navbar" class="collapse navbar-collapse">*/
/*                     <ul class="nav navbar-nav">*/
/*                         <li class="active"><a href="/inventory">Inventory</a></li>*/
/*                         <li class="active"><a href="/products">Products</a></li>*/
/*                         <li class="active"><a href="/operations">Operations</a></li>*/
/*                     </ul>*/
/*                 </div><!--/.nav-collapse -->*/
/*             </div>*/
/*         </nav>*/
/* */
/*         <div class="container">*/
/* */
/*             {% block body %}*/
/*             {% endblock %}*/
/* */
/*         </div>*/
/*         */
/*         <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>*/
/*         <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>*/
/*         {% block javascripts %}*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
