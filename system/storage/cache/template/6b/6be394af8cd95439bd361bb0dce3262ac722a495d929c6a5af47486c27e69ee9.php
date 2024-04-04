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

/* journal3/template/journal3/category_grid.twig */
class __TwigTemplate_e40f2c6f59e7eb9be3dd25c2d7f748f1d32abe7dc4872fd86715638ac4e7eb5a extends \Twig\Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 2
            echo "  <div class=\"category-layout ";
            echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "classes", [0 => twig_get_attribute($this->env, $this->source, $context["category"], "classes", [], "any", false, false, false, 2)], "method", false, false, false, 2);
            echo "\">
    <div class=\"category-thumb\">
      <div class=\"image\">
        <a href=\"";
            // line 5
            echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 5);
            echo "\">
          ";
            // line 6
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 6), "get", [0 => "performanceLazyLoadImagesStatus"], "method", false, false, false, 6)) {
                // line 7
                echo "            <img src=\"";
                echo ($context["dummy_image"] ?? null);
                echo "\" data-src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "thumb", [], "any", false, false, false, 7);
                echo "\" ";
                if (twig_get_attribute($this->env, $this->source, $context["category"], "thumb2x", [], "any", false, false, false, 7)) {
                    echo "data-srcset=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "thumb", [], "any", false, false, false, 7);
                    echo " 1x, ";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "thumb2x", [], "any", false, false, false, 7);
                    echo " 2x\" ";
                }
                echo " width=\"";
                echo ($context["image_width"] ?? null);
                echo "\" height=\"";
                echo ($context["image_height"] ?? null);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 7);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 7);
                echo "\" class=\"img-responsive lazyload\"/>
          ";
            } else {
                // line 9
                echo "            <img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "thumb", [], "any", false, false, false, 9);
                echo "\" ";
                if (twig_get_attribute($this->env, $this->source, $context["category"], "thumb2x", [], "any", false, false, false, 9)) {
                    echo "srcset=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "thumb", [], "any", false, false, false, 9);
                    echo " 1x, ";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "thumb2x", [], "any", false, false, false, 9);
                    echo " 2x\" ";
                }
                echo " width=\"";
                echo ($context["image_width"] ?? null);
                echo "\" height=\"";
                echo ($context["image_height"] ?? null);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 9);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 9);
                echo "\" class=\"img-responsive\"/>
          ";
            }
            // line 11
            echo "        </a>
      </div>

      <div class=\"caption\">
        <div class=\"name\"><a href=\"";
            // line 15
            echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 15);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 15);
            echo "</a></div>

        <div class=\"description\">";
            // line 17
            echo twig_get_attribute($this->env, $this->source, $context["category"], "description", [], "any", false, false, false, 17);
            echo "</div>

        <div class=\"button-group\">
          <a class=\"btn btn-view-more\" href=\"";
            // line 20
            echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 20);
            echo "\" ";
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 20), "getIn", [0 => "CategoryButtonDisplay", 1 => $context], "method", false, false, false, 20) == "icon") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 20), "getIn", [0 => "CategoryButtonTooltipStatus", 1 => $context], "method", false, false, false, 20))) {
                echo " data-toggle=\"tooltip\" data-tooltip-class=\"";
                echo ((($context["module_id"] ?? null)) ? ((("module-categories-" . ($context["module_id"] ?? null)) . " module-categories-grid")) : ("category-grid"));
                echo " view-more-tooltip\" data-placement=\"";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 20), "getIn", [0 => "CategoryButtonTooltipPosition", 1 => $context], "method", false, false, false, 20);
                echo "\" title=\"";
                echo ($context["viewMoreText"] ?? null);
                echo "\" ";
            }
            echo ">
            <span class=\"btn-text\">";
            // line 21
            echo ($context["viewMoreText"] ?? null);
            echo "</span>
          </a>
        </div>
      </div>
    </div>
  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/category_grid.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 21,  119 => 20,  113 => 17,  106 => 15,  100 => 11,  78 => 9,  54 => 7,  52 => 6,  48 => 5,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/journal3/category_grid.twig", "C:\\OSPanel\\domains\\E-Comerce-Sneackers\\catalog\\view\\theme\\journal3\\template\\journal3\\category_grid.twig");
    }
}
