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

/* extension/payment/mono.twig */
class __TwigTemplate_5be219a9500b9a7ba09f89827cd8ebe90f14c7f6964421b5c0da6ab50ed64cc6 extends \Twig\Template
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

<div id=\"content\" style=\"background-color:#f4f4f3 !important;\">
    <div class=\"row\">
        <div class=\"col-xs-4\"></div>
            <div class=\"col-xs-4\">
                <a href=\"https://monobank.ua/\" target=\"_blank\">
                    <img src=\"view/image/payment/monobank.svg\" alt=\"Monobank\" style=\"width:100%; margin-top:10%; margin-bottom: 10%;\"/>
                </a>
            </div>
            <div class=\"col-xs-4 text-right\">v";
        // line 11
        echo ($context["version"] ?? null);
        echo "</div>
        </div>
        <div class=\"row\">
            <div class=\"col-xs-1\"></div>
            <div class=\"col-xs-10\" style=\"padding: 50px; background-color:white; border: 1px solid #ccc; border-radius:24px;\">
                <form action=\"";
        // line 16
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form\">
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <label class=\"col-sm-4\" for=\"input-status\" style=\"position:absolute; margin-left: 6px; font-size: 14px; margin-top: 1px; font-weight:300;\">
                                <span data-toggle=\"tooltip\" title=\"\">";
        // line 20
        echo ($context["entry_status"] ?? null);
        echo "</span>
                            </label>
                            <select name=\"payment_mono_status\" id=\"input-status\" class=\"mono-select\">
                                ";
        // line 23
        if (($context["payment_mono_status"] ?? null)) {
            // line 24
            echo "                                    <option class=\"mono-option\" value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                    <option class=\"mono-option\" value=\"0\">";
            // line 25
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                ";
        } else {
            // line 27
            echo "                                    <option class=\"mono-option\" value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                    <option class=\"mono-option\" value=\"0\" selected=\"selected\">";
            // line 28
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                ";
        }
        // line 30
        echo "                            </select>
                        </div>
                        <div class=\"col-xs-12\">
                            <label class=\"col-sm-4\" for=\"input-merchant\" style=\"position:absolute; margin-left: 6px; font-size: 14px; margin-top: 1px; font-weight:300;\">
                                <span data-toggle=\"tooltip\" title=\"\">";
        // line 34
        echo ($context["entry_merchant"] ?? null);
        echo "</span>
                            </label>
                            <input style=\"margin-bottom:0%;\" type=\"text\" name=\"payment_mono_merchant\" value=\"";
        // line 36
        echo ($context["payment_mono_merchant"] ?? null);
        echo "\" id=\"input-merchant\" class=\"mono-select\" required/>
                                ";
        // line 37
        if (($context["error_merchant"] ?? null)) {
            // line 38
            echo "                                    <span class=\"error\">";
            echo ($context["error_merchant"] ?? null);
            echo "</span>
                                ";
        }
        // line 40
        echo "                            <p class=\"mono-text\">";
        echo ($context["mono_text"] ?? null);
        echo " <a href=\"https://web.monobank.ua/\" style=\"color:#EA5357;\" target=\"_blank\">web.monobank.ua</a></p>
                        </div>
                        <div class=\"col-xs-12\">
                            <label class=\"col-sm-4 control-label\" for=\"input-geo-zone\" style=\"position:absolute; margin-left: 6px; font-size: 14px; margin-top: 1px; font-weight:300;\">";
        // line 43
        echo ($context["entry_geo_zone"] ?? null);
        echo "
                            </label>
                            <select name=\"payment_mono_geo_zone_id\" id=\"input-geo-zone\" class=\"mono-select\">
                                <option value=\"0\">";
        // line 46
        echo ($context["text_all_zones"] ?? null);
        echo "</option>
                                    ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["geo_zones"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["geo_zone"]) {
            // line 48
            echo "                                        <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 48);
            echo "\"
                                    ";
            // line 49
            echo (((twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 49) == ($context["payment_mono_geo_zone_id"] ?? null))) ? ("selected") : (""));
            echo "
                                        >";
            // line 50
            echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "name", [], "any", false, false, false, 50);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['geo_zone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "                            </select>
                        </div>
                        <div class=\"col-xs-12\">
                            <label class=\"col-sm-4 control-label\" for=\"input-sort-order\" style=\"position:absolute; margin-left: 6px; font-size: 14px; margin-top: 1px; font-weight:300;\">";
        // line 55
        echo ($context["entry_sort_order"] ?? null);
        echo "
                            </label>
                            <input type=\"text\" name=\"payment_mono_sort_order\" value=\"";
        // line 57
        echo ($context["payment_mono_sort_order"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sort_order"] ?? null);
        echo "\" id=\"input-sort-order\" class=\"mono-select\" />
                        </div>
                        <div class=\"col-xs-12\">
                            <label class=\"col-sm-4 control-label\" for=\"input-order-status\"  style=\"position:absolute; margin-left: 6px; font-size: 14px; margin-top: 1px; font-weight:300;\">";
        // line 60
        echo ($context["entry_order_success_status"] ?? null);
        echo "</label>
                            <select name=\"payment_mono_order_success_status_id\" id=\"input-order-status\" class=\"mono-select\">
                                ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 63
            echo "                                    <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 63);
            echo "\"
                                ";
            // line 64
            echo (((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 64) == ($context["payment_mono_order_success_status_id"] ?? null))) ? ("selected") : (""));
            echo "
                                    >";
            // line 65
            echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 65);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "                            </select>
                        </div>
                        <div class=\"col-xs-12\">
                            <label class=\"col-sm-4 control-label\" for=\"input-order-status\" style=\"position:absolute; margin-left: 6px; font-size: 14px; margin-top: 1px; font-weight:300;\">";
        // line 70
        echo ($context["entry_order_cancelled_status"] ?? null);
        echo "</label>
                            <select name=\"payment_mono_order_cancelled_status_id\" id=\"input-order-status\" class=\"mono-select\">
                                ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 73
            echo "                                    <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 73);
            echo "\"
                                ";
            // line 74
            echo (((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 74) == ($context["payment_mono_order_cancelled_status_id"] ?? null))) ? ("selected") : (""));
            echo "
                                    >";
            // line 75
            echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 75);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "                            </select>
                        </div>
                        <div class=\"col-xs-12\">
                            <label class=\"col-sm-4 control-label\" for=\"input-order-status\" style=\"position:absolute; margin-left: 6px; font-size: 14px; margin-top: 1px; font-weight:300;\">";
        // line 80
        echo ($context["entry_order_process_status"] ?? null);
        echo "</label>
                            <select name=\"payment_mono_order_process_status_id\" id=\"input-order-status\" class=\"mono-select\">
                                ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 83
            echo "                                    <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 83);
            echo "\"
                                ";
            // line 84
            echo (((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 84) == ($context["payment_mono_order_process_status_id"] ?? null))) ? ("selected") : (""));
            echo "
                                    >";
            // line 85
            echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 85);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "                            </select>
                        </div>

                    <div class=\"col-xs-12\">
                            <label class=\"col-sm-4\" for=\"input-merchant\" style=\"position:absolute; margin-left: 6px; font-size: 14px; margin-top: 1px; font-weight:300;width: 100%;\">
                                <span data-toggle=\"tooltip\" title=\"\">";
        // line 92
        echo ($context["entry_redirect"] ?? null);
        echo "</span>
                            </label>
                            <input style=\"margin-bottom:0%;\" type=\"text\" name=\"payment_mono_redirect_url\" value=\"";
        // line 94
        echo ($context["payment_mono_redirect_url"] ?? null);
        echo "\" id=\"input-redirect\" class=\"mono-select\"/>
                            
                        </div>

                      <div class=\"col-xs-12\">
                            <label class=\"col-sm-4\" for=\"input-merchant\" style=\"position:absolute; margin-left: 6px; font-size: 14px; margin-top: 1px; font-weight:300;width: 100%;\">
                                <span data-toggle=\"tooltip\" title=\"\">";
        // line 100
        echo ($context["entry_destination"] ?? null);
        echo "</span>
                            </label>
                            <input style=\"margin-bottom:0%;\" type=\"text\" name=\"payment_mono_destination\" value=\"";
        // line 102
        echo ($context["payment_mono_destination"] ?? null);
        echo "\" id=\"input-destination\" class=\"mono-select\"/>
                            
                        </div>
                       
                        
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-10\">
                            <button type=\"submit\" form=\"form\" data-toggle=\"tooltip\" class=\"save-btn\">";
        // line 110
        echo ($context["save_btn"] ?? null);
        echo "</button>
                        </div>
                        <div class=\"col-xs-2\">
                            <img src=\"view/image/payment/cat.png\" alt=\"Monobank\" style=\"position:absolute;  margin-top:-25%; margin-left: -25%; width:200%;\"/>
                        </div>
                    </div>
                </form> 
            </div>
        </div>
    </div>


<style>
.mono-text{
    margin-bottom:3%;
    margin-left:19px;
    margin-top:1%;
}
#content input[type=\"text\"] {
    padding-left: 19px;
    height: 57px !important;
    margin-bottom: 3% !important;
}
.save-btn{
    width:100%;
    background-color:#EA5357;
    color:white;
    font-weight:600;
    padding:14px 16px;
    grid-auto-flow: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    font-style: normal;
    font-size: 16px;
    line-height: 24px;
    border: 1px solid transparent;
    border-radius: 16px;
    cursor: pointer;
}
.mono-select{
    outline:none;
    width: 100%;
    font-size: 16px;
    padding: 0 30px 0 15px;
    margin-bottom: 3% !important;
    border-radius: 0;
    font-weight: 600;
    height:57px !important;
    border: 1px solid #e1e1e1;
}
.mono-select:focus-visible, .mono-select:hover, .mono-select:active, .mono-select:focus{
    border: 1px solid #e1e1e1;
}
option.selected{
    background-color:#Ea5357 !important;
}
</style>                
";
        // line 168
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/payment/mono.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  359 => 168,  298 => 110,  287 => 102,  282 => 100,  273 => 94,  268 => 92,  261 => 87,  253 => 85,  249 => 84,  244 => 83,  240 => 82,  235 => 80,  230 => 77,  222 => 75,  218 => 74,  213 => 73,  209 => 72,  204 => 70,  199 => 67,  191 => 65,  187 => 64,  182 => 63,  178 => 62,  173 => 60,  165 => 57,  160 => 55,  155 => 52,  147 => 50,  143 => 49,  138 => 48,  134 => 47,  130 => 46,  124 => 43,  117 => 40,  111 => 38,  109 => 37,  105 => 36,  100 => 34,  94 => 30,  89 => 28,  84 => 27,  79 => 25,  74 => 24,  72 => 23,  66 => 20,  59 => 16,  51 => 11,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/payment/mono.twig", "");
    }
}
