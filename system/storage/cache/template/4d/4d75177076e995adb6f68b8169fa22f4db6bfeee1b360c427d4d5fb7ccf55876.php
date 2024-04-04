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

/* mail/forgotten.twig */
class __TwigTemplate_a1aeda035384d0ca1c386c2c7ee09881ee41f95f3a8a7ab08c47d006505d9059 extends \Twig\Template
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
        echo ($context["text_greeting"] ?? null);
        echo "

";
        // line 3
        echo ($context["text_change"] ?? null);
        echo "

";
        // line 5
        echo ($context["reset"] ?? null);
        echo "

";
        // line 7
        echo ($context["text_ip"] ?? null);
        echo " 

";
        // line 9
        echo ($context["ip"] ?? null);
    }

    public function getTemplateName()
    {
        return "mail/forgotten.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 9,  52 => 7,  47 => 5,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mail/forgotten.twig", "");
    }
}
