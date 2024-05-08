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

/* default/template/extension/module/proscroller.twig */
class __TwigTemplate_43f564a702cfd4e1fd5ad32bdbcc58543cfcf9680aa0969f96076f89ad068eed extends \Twig\Template
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
        echo "<h3>
";
        // line 2
        if (($context["title_link"] ?? null)) {
            // line 3
            echo "\t";
            echo (((("<a href =\"" . ($context["title_link"] ?? null)) . "\">") . ($context["heading_title"] ?? null)) . "</a>");
            echo "
";
        } else {
            // line 4
            echo " 
\t";
            // line 5
            echo ($context["heading_title"] ?? null);
            echo "
";
        }
        // line 6
        echo " 
</h3>\t\t\t\t\t
  <div id=\"scroller";
        // line 8
        echo ($context["module"] ?? null);
        echo "\" class=\"swiper-container\">
\t\t<div class=\"swiper-wrapper\">
\t\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            echo " 
\t\t\t<div class=\"swiper-slide text-center\">
\t\t\t\t <div class=\"product-thumb transition\">
\t\t\t\t\t";
            // line 13
            if ((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["product"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["thumb"] ?? null) : null)) {
                echo " 
\t\t\t\t\t\t<div class=\"image\"><a href=\"";
                // line 14
                echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["product"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["href"] ?? null) : null);
                echo "\"><img src=\"";
                echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["product"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["thumb"] ?? null) : null);
                echo "\" alt=\"";
                echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["product"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["name"] ?? null) : null);
                echo "\" /></a></div>
\t\t\t\t\t";
            }
            // line 15
            echo " 
\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t";
            // line 17
            if ((($context["show_title"] ?? null) == "1")) {
                echo " 
\t\t\t\t\t\t\t<div class=\"name\">
\t\t\t\t\t\t\t<h4 class=\"caption_name\"><a href=\"";
                // line 19
                echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["product"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["href"] ?? null) : null);
                echo "\">";
                echo (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["product"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["name"] ?? null) : null);
                echo "</a></h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 21
            echo " 
\t\t\t\t\t\t";
            // line 22
            if ((($context["show_desc"] ?? null) == "1")) {
                echo " 
\t\t\t\t\t\t\t<p>";
                // line 23
                echo (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["product"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["desc"] ?? null) : null);
                echo "</p>
\t\t\t\t\t\t";
            }
            // line 24
            echo " 
\t\t\t\t\t\t";
            // line 25
            if ((($context["show_price"] ?? null) == "1")) {
                echo " 
\t\t\t\t\t\t\t";
                // line 26
                if ((($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["product"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["price"] ?? null) : null)) {
                    echo " 
\t\t\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t\t";
                    // line 28
                    if ( !(($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = $context["product"]) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["special"] ?? null) : null)) {
                        echo " 
\t\t\t\t\t\t\t\t\t";
                        // line 29
                        echo (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = $context["product"]) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["price"] ?? null) : null);
                        echo " 
\t\t\t\t\t\t\t\t";
                    } else {
                        // line 30
                        echo " 
\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        // line 31
                        echo (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = $context["product"]) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["special"] ?? null) : null);
                        echo "</span> <span class=\"price-old\">";
                        echo (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = $context["product"]) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["price"] ?? null) : null);
                        echo "</span>
\t\t\t\t\t\t\t\t";
                    }
                    // line 32
                    echo " 
\t\t\t\t\t\t\t\t ";
                    // line 36
                    echo "\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t";
                }
                // line 37
                echo " 
\t\t\t\t\t\t";
            }
            // line 38
            echo " 
\t\t\t\t\t\t";
            // line 39
            if (((($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = $context["product"]) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["rating"] ?? null) : null) && (($context["show_rate"] ?? null) == "1"))) {
                echo " 
\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t  ";
                // line 41
                $context["i"] = 1;
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range($context["i"], 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    echo " 
\t\t\t\t\t\t\t  ";
                    // line 42
                    if (((($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = $context["product"]) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40["rating"] ?? null) : null) < $context["i"])) {
                        echo " 
\t\t\t\t\t\t\t  <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t  ";
                    } else {
                        // line 44
                        echo " 
\t\t\t\t\t\t\t  <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t  ";
                    }
                    // line 46
                    echo " 
\t\t\t\t\t\t\t  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 49
            echo " 
\t\t\t\t\t</div>
\t\t\t\t\t";
            // line 51
            if ((($context["butCount"] ?? null) > 0)) {
                // line 52
                echo "\t\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t\t";
                // line 53
                if ((($context["show_cart"] ?? null) == "1")) {
                    echo " 
\t\t\t\t\t\t\t<button style=\"width: ";
                    // line 54
                    echo ($context["butWidth"] ?? null);
                    echo "% !important\" type=\"button\" onclick=\"cart.add('";
                    echo (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = $context["product"]) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f["product_id"] ?? null) : null);
                    echo "');\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">
\t\t\t\t\t\t";
                    // line 55
                    if ((($context["butCount"] ?? null) < 3)) {
                        echo " ";
                        echo ($context["button_cart"] ?? null);
                    }
                    echo " 
\t\t\t\t\t\t</span></button>";
                }
                // line 56
                echo " 
\t\t\t\t\t\t";
                // line 57
                if ((($context["show_wish"] ?? null) == "1")) {
                    echo " 
\t\t\t\t\t\t<button style=\"width: ";
                    // line 58
                    echo ($context["butWidth"] ?? null);
                    echo "% !important\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_wishlist"] ?? null);
                    echo "\" onclick=\"wishlist.add('";
                    echo (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = $context["product"]) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760["product_id"] ?? null) : null);
                    echo "');\"><i class=\"fa fa-heart\"></i></button>";
                }
                echo " 
\t\t\t\t\t\t";
                // line 59
                if ((($context["show_compare"] ?? null) == "1")) {
                    echo " 
\t\t\t\t\t\t<button style=\"width: ";
                    // line 60
                    echo ($context["butWidth"] ?? null);
                    echo "% !important\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_compare"] ?? null);
                    echo "\" onclick=\"compare.add('";
                    echo (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = $context["product"]) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce["product_id"] ?? null) : null);
                    echo "');\"><i class=\"fa fa-exchange\"></i></button>";
                }
                echo " 
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 62
            echo " 
\t\t\t\t</div>\t\t\t
\t\t\t</div>\t\t\t
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo " 
</div>
  <div class=\"swiper-pagination scroller";
        // line 67
        echo ($context["module"] ?? null);
        echo "\"></div>
  <div class=\"swiper-pager\">
    <div class=\"swiper-button-next\"></div>
    <div class=\"swiper-button-prev\"></div>
  </div>
</div>

<script type=\"text/javascript\"><!--
\$('#scroller";
        // line 75
        echo ($context["module"] ?? null);
        echo "').swiper({
\tmode: 'horizontal',
\t// Default parameters
\tslidesPerView: ";
        // line 78
        echo ($context["visible"] ?? null);
        echo ",
\tspaceBetween: 40,
\t// Responsive breakpoints
\tbreakpoints: {
    // when window width is <= 320px
    320: {
      slidesPerView: 1,
      spaceBetween: 10
    },
    // when window width is <= 480px
    480: {
      slidesPerView: 1,
      spaceBetween: 20
    },
    // when window width is <= 768px
    768: {
      slidesPerView: 2,
      spaceBetween: 30
    }
  },
";
        // line 98
        if ((($context["shownav"] ?? null) != 0)) {
            // line 99
            echo "\tpagination: '.scroller";
            echo ($context["module"] ?? null);
            echo "',
";
        }
        // line 101
        if ((($context["shownav"] ?? null) == 0)) {
            // line 102
            echo "\tpaginationClickable: false,
";
        } else {
            // line 103
            echo " 
\tpaginationClickable: true,
";
        }
        // line 106
        if ((($context["hoverpause"] ?? null) == 0)) {
            // line 107
            echo "\tgrabCursor: false,
";
        } else {
            // line 108
            echo " 
\tgrabCursor: true,
";
        }
        // line 110
        echo " 
\tnextButton: '.swiper-button-next',
\tprevButton: '.swiper-button-prev',
";
        // line 113
        if (($context["autoscroll"] ?? null)) {
            // line 114
            echo "\tautoplay: {
     delay: ";
            // line 115
            echo ($context["autoscroll"] ?? null);
            echo ",
    },
";
        }
        // line 117
        echo " 
\tspeed: ";
        // line 118
        echo ($context["animationspeed"] ?? null);
        echo ",
\tloop: true
});
--></script>";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/proscroller.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  357 => 118,  354 => 117,  348 => 115,  345 => 114,  343 => 113,  338 => 110,  333 => 108,  329 => 107,  327 => 106,  322 => 103,  318 => 102,  316 => 101,  310 => 99,  308 => 98,  285 => 78,  279 => 75,  268 => 67,  264 => 65,  255 => 62,  243 => 60,  239 => 59,  229 => 58,  225 => 57,  222 => 56,  214 => 55,  208 => 54,  204 => 53,  201 => 52,  199 => 51,  195 => 49,  190 => 47,  183 => 46,  178 => 44,  172 => 42,  165 => 41,  160 => 39,  157 => 38,  153 => 37,  149 => 36,  146 => 32,  139 => 31,  136 => 30,  131 => 29,  127 => 28,  122 => 26,  118 => 25,  115 => 24,  110 => 23,  106 => 22,  103 => 21,  95 => 19,  90 => 17,  86 => 15,  77 => 14,  73 => 13,  65 => 10,  60 => 8,  56 => 6,  51 => 5,  48 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/proscroller.twig", "");
    }
}
