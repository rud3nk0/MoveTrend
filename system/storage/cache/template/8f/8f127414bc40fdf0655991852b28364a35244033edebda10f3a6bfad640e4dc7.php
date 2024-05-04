<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* extension/module/proscroller.twig */
class __TwigTemplate_06d103f4ee717c9883459be06e5f1322169f8c64e211a9b92ab2e3fb177a4ff0 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo ($context["header"] ?? null);
        echo ($context["column_left"] ?? null);
        echo " 
<div id=\"content\">
   <div class=\"page-header\">
      <div class=\"container-fluid\">
         <div class=\"pull-right\">
            <button type=\"submit\" form=\"form-proscroller\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
            <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a>
         </div>
         <h1>";
        // line 9
        echo ($context["heading_title"] ?? null);
        echo "</h1>
         <ul class=\"breadcrumb\">
            ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            echo " 
            <li><a href=\"";
            // line 12
            echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["breadcrumb"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["href"] ?? null) : null);
            echo "\">";
            echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["breadcrumb"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["text"] ?? null) : null);
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo " 
         </ul>
      </div>
   </div>
   <div class=\"container-fluid\">
      ";
        // line 18
        if (($context["error_warning"] ?? null)) {
            echo " 
      <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            // line 19
            echo ($context["error_warning"] ?? null);
            echo " 
         <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
      ";
        }
        // line 22
        echo " 
      <div class=\"panel panel-default\">
         <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 25
        echo ($context["text_edit"] ?? null);
        echo "</h3>
         </div>
         <div class=\"panel-body\">
            <form action=\"";
        // line 28
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-proscroller\" class=\"form-horizontal\">
               <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 30
        echo ($context["entry_name"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                     <input type=\"text\" name=\"name\" value=\"";
        // line 32
        echo ($context["name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
                     ";
        // line 33
        if (($context["error_name"] ?? null)) {
            echo " 
                     <div class=\"text-danger\">";
            // line 34
            echo ($context["error_name"] ?? null);
            echo "</div>
                     ";
        }
        // line 35
        echo " 
                  </div>
               </div>
               <div class=\"tab-pane\">
                  <ul class=\"nav nav-tabs\" id=\"language\">
                     ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            echo " 
                     <li><a href=\"#language";
            // line 41
            echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["language"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["language_id"] ?? null) : null);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["language"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["code"] ?? null) : null);
            echo "/";
            echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["language"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["code"] ?? null) : null);
            echo ".png\" title=\"";
            echo (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["language"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["name"] ?? null) : null);
            echo "\" /> ";
            echo (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["language"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["name"] ?? null) : null);
            echo "</a></li>
                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo " 
                  </ul>
                  <div class=\"tab-content\">
                     ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            echo " 
                     <div class=\"tab-pane\" id=\"language";
            // line 46
            echo (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["language"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["language_id"] ?? null) : null);
            echo "\">
                        <div class=\"form-group\">
                           <label class=\"col-sm-2 control-label\" for=\"input-title";
            // line 48
            echo (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = $context["language"]) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["language_id"] ?? null) : null);
            echo "\">";
            echo ($context["entry_title"] ?? null);
            echo "</label>
                           <div class=\"col-sm-10\">
                              <input type=\"text\" name=\"module_description[";
            // line 50
            echo (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = $context["language"]) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["language_id"] ?? null) : null);
            echo "][title]\" id=\"input-heading";
            echo (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = $context["language"]) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["language_id"] ?? null) : null);
            echo "\" value=\"";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module_description"] ?? null), (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = $context["language"]) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["language_id"] ?? null) : null), [], "array", false, true, false, 50), "title", [], "array", true, true, false, 50)) ? ((($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["module_description"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40[(($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = $context["language"]) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f["language_id"] ?? null) : null)] ?? null) : null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["title"] ?? null) : null)) : (""));
            echo "\" class=\"form-control\" />
                           </div>
                        </div>
                     </div>
                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo " 
                  </div>
               </div>
               <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-title_link\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 58
        echo ($context["help_title_link"] ?? null);
        echo "\"></span> ";
        echo ($context["entry_title_link"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                     <input type=\"text\" name=\"title_link\" id=\"input-title_link\" value=\"";
        // line 60
        echo ($context["title_link"] ?? null);
        echo "\" class=\"form-control\" />
                  </div>
               </div>
               <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-category\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 64
        echo ($context["help_source"] ?? null);
        echo "\"></span> ";
        echo ($context["entry_source"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                     <select name=\"category_id\" id=\"input-category\" class=\"form-control\" onchange=\"showhide();\">
                        <option value=\"featured\" ";
        // line 67
        if ((($context["category_id"] ?? null) == "featured")) {
            echo "selected=\"selected\"";
        }
        echo ">";
        echo ($context["text_featured"] ?? null);
        echo "</option>
                        <option value=\"0\" ";
        // line 68
        if ((($context["category_id"] ?? null) == "0")) {
            echo "selected=\"selected\"";
        }
        echo ">";
        echo ($context["text_root"] ?? null);
        echo "</option>
                        ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rootcats"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["rootcat"]) {
            echo " 
                        ";
            // line 70
            if (((($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = $context["rootcat"]) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760["category_id"] ?? null) : null) == ($context["category_id"] ?? null))) {
                echo " 
                        <option value=\"";
                // line 71
                echo (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = $context["rootcat"]) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce["category_id"] ?? null) : null);
                echo "\" selected=\"selected\">";
                echo (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = $context["rootcat"]) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b["name"] ?? null) : null);
                echo "</option>
                        ";
            } else {
                // line 72
                echo " 
                        <option value=\"";
                // line 73
                echo (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = $context["rootcat"]) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c["category_id"] ?? null) : null);
                echo "\">";
                echo (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = $context["rootcat"]) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972["name"] ?? null) : null);
                echo "</option>
                        ";
            }
            // line 74
            echo " 
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rootcat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo " 
                     </select>
                  </div>
               </div>
               ";
        // line 79
        if ((($context["category_id"] ?? null) == "featured")) {
            echo " ";
            $context["featured_style"] = "block";
        } else {
            echo " ";
            $context["featured_style"] = "none";
        }
        // line 80
        echo "               <div class=\"form-group\" id=\"rowfeatured\" style=\"display:";
        echo ($context["featured_style"] ?? null);
        echo "\">
                  <label class=\"col-sm-2 control-label\" for=\"input-product\">";
        // line 81
        echo ($context["entry_product"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                     <input type=\"text\" name=\"product\" value=\"\" id=\"input-product\" class=\"form-control\" />
                     <div id=\"featured-product\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                        ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            echo " 
                        <div id=\"featured-product";
            // line 86
            echo (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = $context["product"]) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216["product_id"] ?? null) : null);
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo (($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = $context["product"]) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0["name"] ?? null) : null);
            echo " 
                           <input type=\"hidden\" name=\"product[]\" value=\"";
            // line 87
            echo (($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = $context["product"]) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c["product_id"] ?? null) : null);
            echo "\" />
                        </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo " 
                     </div>
                  </div>
               </div>
               ";
        // line 93
        if ((($context["category_id"] ?? null) == "featured")) {
            echo " ";
            $context["catonlyStyle"] = "none";
        } else {
            echo " ";
            $context["catonlyStyle"] = "block";
        }
        // line 94
        echo "               <div id=\"catonly\" style=\"display:";
        echo ($context["catonlyStyle"] ?? null);
        echo "\">
                  <div class=\"form-group\">
                     <label class=\"col-sm-2 control-label\" for=\"input-manufacturer\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 96
        echo ($context["help_manufacturer"] ?? null);
        echo "\"></span> ";
        echo ($context["entry_manufacturer"] ?? null);
        echo "</label>
                     <div class=\"col-sm-10\">
                        <select name=\"manufacturer_id\" id=\"input-manufacturer\" class=\"form-control\">
                           <option value=\"0\" ";
        // line 99
        if ((($context["manufacturer_id"] ?? null) == "0")) {
            echo "selected=\"selected\"";
        }
        echo ">";
        echo ($context["text_all_manufacturers"] ?? null);
        echo "</option>
                           ";
        // line 100
        if ((isset($context["manufacturers"]) || array_key_exists("manufacturers", $context))) {
            echo " 
                           ";
            // line 101
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["manufacturers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["manufacturer"]) {
                echo " 
                           ";
                // line 102
                if (((($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = $context["manufacturer"]) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f["manufacturer_id"] ?? null) : null) == ($context["manufacturer_id"] ?? null))) {
                    echo " 
                           <option value=\"";
                    // line 103
                    echo (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = $context["manufacturer"]) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc["manufacturer_id"] ?? null) : null);
                    echo "\" selected=\"selected\">";
                    echo (($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = $context["manufacturer"]) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55["name"] ?? null) : null);
                    echo "</option>
                           ";
                } else {
                    // line 104
                    echo " 
                           <option value=\"";
                    // line 105
                    echo (($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = $context["manufacturer"]) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba["manufacturer_id"] ?? null) : null);
                    echo "\">";
                    echo (($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = $context["manufacturer"]) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78["name"] ?? null) : null);
                    echo "</option>
                           ";
                }
                // line 106
                echo " 
                           ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manufacturer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 107
            echo " 
                           ";
        }
        // line 108
        echo " 
                        </select>
                     </div>
                  </div>
                  <div class=\"form-group\">
                     <label class=\"col-sm-2 control-label\" for=\"input-sort\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 113
        echo ($context["help_sort"] ?? null);
        echo "\"></span> ";
        echo ($context["entry_sort"] ?? null);
        echo "</label>
                     <div class=\"col-sm-10\">
                        <select name=\"sort\" id=\"input-sort\" class=\"form-control\">
                           ";
        // line 116
        if ((($context["sort"] ?? null) == "p.date_added")) {
            echo " 
                           <option value=\"p.date_added\" selected=\"selected\">";
            // line 117
            echo ($context["text_date_added"] ?? null);
            echo "</option>
                           ";
        } else {
            // line 118
            echo " 
                           <option value=\"p.date_added\">";
            // line 119
            echo ($context["text_date_added"] ?? null);
            echo "</option>
                           ";
        }
        // line 120
        echo " 
                           ";
        // line 121
        if ((($context["sort"] ?? null) == "topsellers")) {
            echo " 
                           <option value=\"topsellers\" selected=\"selected\">";
            // line 122
            echo ($context["text_topsellers"] ?? null);
            echo "</option>
                           ";
        } else {
            // line 123
            echo " 
                           <option value=\"topsellers\">";
            // line 124
            echo ($context["text_topsellers"] ?? null);
            echo "</option>
                           ";
        }
        // line 125
        echo " 
                           ";
        // line 126
        if ((($context["sort"] ?? null) == "special")) {
            echo " 
                           <option value=\"special\" selected=\"selected\">";
            // line 127
            echo ($context["text_special"] ?? null);
            echo "</option>
                           ";
        } else {
            // line 128
            echo " 
                           <option value=\"special\">";
            // line 129
            echo ($context["text_special"] ?? null);
            echo "</option>
                           ";
        }
        // line 130
        echo " 
                           ";
        // line 131
        if ((($context["sort"] ?? null) == "rating")) {
            echo " 
                           <option value=\"rating\" selected=\"selected\">";
            // line 132
            echo ($context["text_rating"] ?? null);
            echo "</option>
                           ";
        } else {
            // line 133
            echo " 
                           <option value=\"rating\">";
            // line 134
            echo ($context["text_rating"] ?? null);
            echo "</option>
                           ";
        }
        // line 135
        echo " 
                           ";
        // line 136
        if ((($context["sort"] ?? null) == "p.viewed")) {
            echo " 
                           <option value=\"p.viewed\" selected=\"selected\">";
            // line 137
            echo ($context["text_viewed"] ?? null);
            echo "</option>
                           ";
        } else {
            // line 138
            echo " 
                           <option value=\"p.viewed\">";
            // line 139
            echo ($context["text_viewed"] ?? null);
            echo "</option>
                           ";
        }
        // line 140
        echo " 
                           ";
        // line 141
        if ((($context["sort"] ?? null) == "p.sort_order")) {
            echo " 
                           <option value=\"p.sort_order\" selected=\"selected\">";
            // line 142
            echo ($context["text_sort_order"] ?? null);
            echo "</option>
                           ";
        } else {
            // line 143
            echo " 
                           <option value=\"p.sort_order\">";
            // line 144
            echo ($context["text_sort_order"] ?? null);
            echo "</option>
                           ";
        }
        // line 145
        echo " 
                        </select>
                     </div>
                  </div>
                  <div class=\"form-group\">
                     <label class=\"col-sm-2 control-label\" for=\"input-count\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 150
        echo ($context["help_count"] ?? null);
        echo "\"></span> ";
        echo ($context["entry_count"] ?? null);
        echo "</label>
                     <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"count\" value=\"";
        // line 152
        echo ($context["count"] ?? null);
        echo "\" id=\"input-count\" class=\"form-control\" />
                        ";
        // line 153
        if (($context["error_count"] ?? null)) {
            echo " 
                        <div class=\"text-danger\">";
            // line 154
            echo ($context["error_count"] ?? null);
            echo "</div>
                        ";
        }
        // line 155
        echo " 
                     </div>
                  </div>
               </div>
               <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-visible\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 160
        echo ($context["help_visible"] ?? null);
        echo "\"></span> ";
        echo ($context["entry_visible"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                     <input type=\"text\" name=\"visible\" value=\"";
        // line 162
        echo ($context["visible"] ?? null);
        echo "\" id=\"input-visible\" class=\"form-control\" />
                     ";
        // line 163
        if (($context["error_visible"] ?? null)) {
            echo " 
                     <div class=\"text-danger\">";
            // line 164
            echo ($context["error_visible"] ?? null);
            echo "</div>
                     ";
        }
        // line 165
        echo " 
                  </div>
               </div>
               <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-shownav\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 169
        echo ($context["help_shownav"] ?? null);
        echo "\"></span> ";
        echo ($context["entry_shownav"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
\t\t\t\t\t<label class=\"radio-inline\">\t\t  
                     <input id=\"input-yes_shownav\" type=\"radio\" name=\"shownav\" value=\"1\" ";
        // line 172
        if (( !(isset($context["shownav"]) || array_key_exists("shownav", $context)) || (($context["shownav"] ?? null) == "1"))) {
            echo " checked=\"checked\" ";
        }
        echo " >
                    ";
        // line 173
        echo ($context["text_yes"] ?? null);
        echo "
\t\t\t\t\t</label>
\t\t\t\t\t<label class=\"radio-inline\">
                     <input id=\"input-no_shownav\" type=\"radio\" name=\"shownav\" value=\"0\" ";
        // line 176
        if (((isset($context["shownav"]) || array_key_exists("shownav", $context)) && (($context["shownav"] ?? null) == "0"))) {
            echo " checked=\"checked\" ";
        }
        echo ">
                     ";
        // line 177
        echo ($context["text_no"] ?? null);
        echo "
\t\t\t\t\t</label>
                  </div>
               </div>
               <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-autoscroll\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 182
        echo ($context["help_autoscroll"] ?? null);
        echo "\"></span> ";
        echo ($context["entry_autoscroll"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                     <input type=\"text\" name=\"autoscroll\" value=\"";
        // line 184
        echo ($context["autoscroll"] ?? null);
        echo "\" id=\"input-autoscroll\" class=\"form-control\" size=\"3\" >
                  </div>
               </div>
               <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-animationspeed\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 188
        echo ($context["help_animationspeed"] ?? null);
        echo "\"></span> ";
        echo ($context["entry_animationspeed"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                     <input type=\"text\" name=\"animationspeed\" value=\"";
        // line 190
        echo ($context["animationspeed"] ?? null);
        echo "\" id=\"input-animationspeed\" class=\"form-control\" size=\"5\" >
                     ";
        // line 191
        if (($context["error_animationspeed"] ?? null)) {
            echo " 
                     <div class=\"text-danger\">";
            // line 192
            echo ($context["error_animationspeed"] ?? null);
            echo "</div>
                     ";
        }
        // line 193
        echo " 
                  </div>
               </div>
               <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-hoverpause\">";
        // line 197
        echo ($context["entry_hoverpause"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
\t\t\t\t\t <label class=\"radio-inline\">\t
                     <input id=\"input-yes_hoverpause\"  type=\"radio\" name=\"hoverpause\" value=\"1\" ";
        // line 200
        if (( !(isset($context["hoverpause"]) || array_key_exists("hoverpause", $context)) || (($context["hoverpause"] ?? null) == "1"))) {
            echo " checked=\"checked\" ";
        }
        echo ">
                     ";
        // line 201
        echo ($context["text_yes"] ?? null);
        echo "
\t\t\t\t\t </label>
\t\t\t\t\t <label class=\"radio-inline\">
                     <input id=\"input-no_hoverpause\"  type=\"radio\" name=\"hoverpause\" value=\"0\" ";
        // line 204
        if (((isset($context["hoverpause"]) || array_key_exists("hoverpause", $context)) && (($context["hoverpause"] ?? null) == "0"))) {
            echo " checked=\"checked\" ";
        }
        echo ">
                     ";
        // line 205
        echo ($context["text_no"] ?? null);
        echo "
\t\t\t\t\t </label>
                  </div>
               </div>
               <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-image_width\">";
        // line 210
        echo ($context["entry_image"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                     <input type=\"text\" name=\"image_width\" value=\"";
        // line 212
        echo ($context["image_width"] ?? null);
        echo "\" id=\"input-image_width\" size=\"3\" > x <input type=\"text\" name=\"image_height\" value=\"";
        echo ($context["image_height"] ?? null);
        echo "\"  id=\"input-image_height\" size=\"3\" >
                     ";
        // line 213
        if (($context["error_width"] ?? null)) {
            echo " 
                     <div class=\"text-danger\">";
            // line 214
            echo ($context["error_width"] ?? null);
            echo "</div>
                     ";
        }
        // line 215
        echo " 
                  </div>
               </div>
               <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-show_title\">";
        // line 219
        echo ($context["entry_show_title"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">\t
\t\t\t\t\t <label class=\"radio-inline\">\t  
                     <input id=\"input-yes_show_title\" type=\"radio\" name=\"show_title\" value=\"1\" ";
        // line 222
        if (( !(isset($context["show_title"]) || array_key_exists("show_title", $context)) || (($context["show_title"] ?? null) == "1"))) {
            echo " checked=\"checked\" ";
        }
        echo ">
                     ";
        // line 223
        echo ($context["text_yes"] ?? null);
        echo "
\t\t\t\t\t </label>
\t\t\t\t\t <label class=\"radio-inline\">
                     <input id=\"input-no_show_title\" type=\"radio\" name=\"show_title\" value=\"0\" ";
        // line 226
        if (((isset($context["show_title"]) || array_key_exists("show_title", $context)) && (($context["show_title"] ?? null) == "0"))) {
            echo " checked=\"checked\" ";
        }
        echo ">
                     ";
        // line 227
        echo ($context["text_no"] ?? null);
        echo "
\t\t\t\t\t </label>
                  </div>
               </div>
               <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-show_price\">";
        // line 232
        echo ($context["entry_show_price"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">\t
\t\t\t\t\t <label class=\"radio-inline\">\t  
                     <input id=\"input-yes_show_price\" type=\"radio\" name=\"show_price\" value=\"1\" ";
        // line 235
        if (( !(isset($context["show_price"]) || array_key_exists("show_price", $context)) || (($context["show_price"] ?? null) == "1"))) {
            echo " checked=\"checked\" ";
        }
        echo ">
                     ";
        // line 236
        echo ($context["text_yes"] ?? null);
        echo "
\t\t\t\t\t </label>
\t\t\t\t\t <label class=\"radio-inline\">
                     <input id=\"input-no_show_price\" type=\"radio\" name=\"show_price\" value=\"0\" ";
        // line 239
        if (((isset($context["show_price"]) || array_key_exists("show_price", $context)) && (($context["show_price"] ?? null) == "0"))) {
            echo " checked=\"checked\" ";
        }
        echo ">
                     ";
        // line 240
        echo ($context["text_no"] ?? null);
        echo "
\t\t\t\t\t </label>
                  </div>
               </div>
               <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-show_rate\">";
        // line 245
        echo ($context["entry_show_rate"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
\t\t\t\t\t <label class=\"radio-inline\">\t\t  
                     <input id=\"input-yes_show_rate\" type=\"radio\" name=\"show_rate\" value=\"1\" ";
        // line 248
        if (( !(isset($context["show_rate"]) || array_key_exists("show_rate", $context)) || (($context["show_rate"] ?? null) == "1"))) {
            echo " checked=\"checked\" ";
        }
        echo ">
                     ";
        // line 249
        echo ($context["text_yes"] ?? null);
        echo "
\t\t\t\t\t </label>
\t\t\t\t\t <label class=\"radio-inline\">
                     <input id=\"input-no_show_rate\" type=\"radio\" name=\"show_rate\" value=\"0\" ";
        // line 252
        if (((isset($context["show_rate"]) || array_key_exists("show_rate", $context)) && (($context["show_rate"] ?? null) == "0"))) {
            echo " checked=\"checked\" ";
        }
        echo ">
                     ";
        // line 253
        echo ($context["text_no"] ?? null);
        echo "</label>
                  </div>
               </div>
               <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-show_desc\">";
        // line 257
        echo ($context["entry_show_desc"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                  <div class=\"col-sm-2\">
\t\t\t\t\t <label class=\"radio-inline\">\t\t  
                     <input id=\"input-yes_show_desc\" type=\"radio\" name=\"show_desc\" value=\"1\" ";
        // line 261
        if (( !(isset($context["show_desc"]) || array_key_exists("show_desc", $context)) || (($context["show_desc"] ?? null) == "1"))) {
            echo " checked=\"checked\" ";
        }
        echo ">
                     ";
        // line 262
        echo ($context["text_yes"] ?? null);
        echo "</label>
\t\t\t\t\t <label class=\"radio-inline\">
                     <input id=\"input-no_show_desc\" type=\"radio\" name=\"show_desc\" value=\"0\" ";
        // line 264
        if (((isset($context["show_desc"]) || array_key_exists("show_desc", $context)) && (($context["show_desc"] ?? null) == "0"))) {
            echo " checked=\"checked\" ";
        }
        echo ">
                     ";
        // line 265
        echo ($context["text_no"] ?? null);
        echo "</label>
                  </div>
                  <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"desc_word\" value=\"";
        // line 268
        echo ($context["desc_word"] ?? null);
        echo "\" id=\"input-desc_word\" size=\"4\"><div style=\"padding: 20px; display: inline;\">";
        echo ($context["entry_desc_word"] ?? null);
        echo "</div>
                  </div>
                  </div>
               </div>
               <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-show_cart\">";
        // line 273
        echo ($context["entry_show_cart"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">\t
\t\t\t\t\t <label class=\"radio-inline\">\t  
                     <input id=\"input-yes_show_cart\" type=\"radio\" name=\"show_cart\" value=\"1\" ";
        // line 276
        if (( !(isset($context["show_cart"]) || array_key_exists("show_cart", $context)) || (($context["show_cart"] ?? null) == "1"))) {
            echo " checked=\"checked\" ";
        }
        echo ">
                     ";
        // line 277
        echo ($context["text_yes"] ?? null);
        echo "</label>
\t\t\t\t\t <label class=\"radio-inline\">
                     <input id=\"input-no_show_cart\" type=\"radio\" name=\"show_cart\" value=\"0\" ";
        // line 279
        if (((isset($context["show_cart"]) || array_key_exists("show_cart", $context)) && (($context["show_cart"] ?? null) == "0"))) {
            echo " checked=\"checked\" ";
        }
        echo ">
                     ";
        // line 280
        echo ($context["text_no"] ?? null);
        echo "</label>
                  </div>
               </div>
               <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-show_cart\">";
        // line 284
        echo ($context["entry_show_wish"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">\t
\t\t\t\t\t <label class=\"radio-inline\">\t  
                     <input id=\"input-yes_show_wish\" type=\"radio\" name=\"show_wish\" value=\"1\" ";
        // line 287
        if (( !(isset($context["show_wish"]) || array_key_exists("show_wish", $context)) || (($context["show_wish"] ?? null) == "1"))) {
            echo " checked=\"checked\" ";
        }
        echo ">
                     ";
        // line 288
        echo ($context["text_yes"] ?? null);
        echo "</label>
\t\t\t\t\t <label class=\"radio-inline\">
                     <input id=\"input-no_show_wish\" type=\"radio\" name=\"show_wish\" value=\"0\" ";
        // line 290
        if (((isset($context["show_wish"]) || array_key_exists("show_wish", $context)) && (($context["show_wish"] ?? null) == "0"))) {
            echo " checked=\"checked\" ";
        }
        echo ">
                     ";
        // line 291
        echo ($context["text_no"] ?? null);
        echo "</label>
                  </div>
               </div>
               <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-show_compare\">";
        // line 295
        echo ($context["entry_show_compare"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
\t\t\t\t\t <label class=\"radio-inline\">\t\t  
                     <input id=\"input-yes_show_compare\" type=\"radio\" name=\"show_compare\" value=\"1\" ";
        // line 298
        if (( !(isset($context["show_compare"]) || array_key_exists("show_compare", $context)) || (($context["show_compare"] ?? null) == "1"))) {
            echo " checked=\"checked\" ";
        }
        echo ">
                     ";
        // line 299
        echo ($context["text_yes"] ?? null);
        echo "</label>
\t\t\t\t\t <label class=\"radio-inline\">
                     <input id=\"input-no_show_compare\" type=\"radio\" name=\"show_compare\" value=\"0\" ";
        // line 301
        if (((isset($context["show_compare"]) || array_key_exists("show_compare", $context)) && (($context["show_compare"] ?? null) == "0"))) {
            echo " checked=\"checked\" ";
        }
        echo ">
                     ";
        // line 302
        echo ($context["text_no"] ?? null);
        echo "</label>
                  </div>
               </div>
               <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 306
        echo ($context["entry_status"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                     <select name=\"status\" id=\"input-status\" class=\"form-control\">
                        ";
        // line 309
        if (($context["status"] ?? null)) {
            echo " 
                        <option value=\"1\" selected=\"selected\">";
            // line 310
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                        <option value=\"0\">";
            // line 311
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                        ";
        } else {
            // line 312
            echo " 
                        <option value=\"1\">";
            // line 313
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                        <option value=\"0\" selected=\"selected\">";
            // line 314
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                        ";
        }
        // line 315
        echo " 
                     </select>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
   <script type=\"text/javascript\">
      function showhide() {
      \t//alert(\$(\"#select\"+ modid).val());
          var selectedValue = \$(\"#input-category\").val();
          //alert();
      \tif (selectedValue == \"featured\") {
      \t\$(\"#rowfeatured\").show();
      \t\$(\"#catonly\").hide();
      \t} else {
      \t\$(\"#rowfeatured\").hide();
      \t\$(\"#catonly\").show();
      \t}
      \t
         }
   </script>
   <script type=\"text/javascript\"><!--
      \$('#language a:first').tab('show');
      //-->
   </script>
</div>
<script type=\"text/javascript\"><!--
   \$('input[name=\\'product\\']').autocomplete({
   \tsource: function(request, response) {
   \t\t\$.ajax({
   \t\t\turl: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 347
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
   \t\t\tdataType: 'json',
   \t\t\tsuccess: function(json) {
   \t\t\t\tresponse(\$.map(json, function(item) {
   \t\t\t\t\treturn {
   \t\t\t\t\t\tlabel: item['name'],
   \t\t\t\t\t\tvalue: item['product_id']
   \t\t\t\t\t}
   \t\t\t\t}));
   \t\t\t}
   \t\t});
   \t},
   \tselect: function(item) {
   \t\t\$('input[name=\\'product\\']').val('');
   \t\t
   \t\t\$('#featured-product' + item['value']).remove();
   \t\t
   \t\t\$('#featured-product').append('<div id=\"featured-product' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product[]\" value=\"' + item['value'] + '\" /></div>');\t
   \t}
   });
   \t
   \$('#featured-product').delegate('.fa-minus-circle', 'click', function() {
   \t\$(this).parent().remove();
   });
   //-->
</script>
<style>
input {
    height: 36px;
    padding: 8px 13px;
    font-size: 13px;
    line-height: 1.42857;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 3px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
    -webkit-transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
    -o-transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
    transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
}
</style>
</div>
";
        // line 392
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/module/proscroller.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1062 => 392,  1014 => 347,  980 => 315,  975 => 314,  971 => 313,  968 => 312,  963 => 311,  959 => 310,  955 => 309,  949 => 306,  942 => 302,  936 => 301,  931 => 299,  925 => 298,  919 => 295,  912 => 291,  906 => 290,  901 => 288,  895 => 287,  889 => 284,  882 => 280,  876 => 279,  871 => 277,  865 => 276,  859 => 273,  849 => 268,  843 => 265,  837 => 264,  832 => 262,  826 => 261,  819 => 257,  812 => 253,  806 => 252,  800 => 249,  794 => 248,  788 => 245,  780 => 240,  774 => 239,  768 => 236,  762 => 235,  756 => 232,  748 => 227,  742 => 226,  736 => 223,  730 => 222,  724 => 219,  718 => 215,  713 => 214,  709 => 213,  703 => 212,  698 => 210,  690 => 205,  684 => 204,  678 => 201,  672 => 200,  666 => 197,  660 => 193,  655 => 192,  651 => 191,  647 => 190,  640 => 188,  633 => 184,  626 => 182,  618 => 177,  612 => 176,  606 => 173,  600 => 172,  592 => 169,  586 => 165,  581 => 164,  577 => 163,  573 => 162,  566 => 160,  559 => 155,  554 => 154,  550 => 153,  546 => 152,  539 => 150,  532 => 145,  527 => 144,  524 => 143,  519 => 142,  515 => 141,  512 => 140,  507 => 139,  504 => 138,  499 => 137,  495 => 136,  492 => 135,  487 => 134,  484 => 133,  479 => 132,  475 => 131,  472 => 130,  467 => 129,  464 => 128,  459 => 127,  455 => 126,  452 => 125,  447 => 124,  444 => 123,  439 => 122,  435 => 121,  432 => 120,  427 => 119,  424 => 118,  419 => 117,  415 => 116,  407 => 113,  400 => 108,  396 => 107,  389 => 106,  382 => 105,  379 => 104,  372 => 103,  368 => 102,  362 => 101,  358 => 100,  350 => 99,  342 => 96,  336 => 94,  328 => 93,  322 => 89,  313 => 87,  307 => 86,  301 => 85,  294 => 81,  289 => 80,  281 => 79,  275 => 75,  268 => 74,  261 => 73,  258 => 72,  251 => 71,  247 => 70,  241 => 69,  233 => 68,  225 => 67,  217 => 64,  210 => 60,  203 => 58,  197 => 54,  182 => 50,  175 => 48,  170 => 46,  164 => 45,  159 => 42,  143 => 41,  137 => 40,  130 => 35,  125 => 34,  121 => 33,  117 => 32,  112 => 30,  107 => 28,  101 => 25,  96 => 22,  89 => 19,  85 => 18,  78 => 13,  68 => 12,  62 => 11,  57 => 9,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/proscroller.twig", "");
    }
}
