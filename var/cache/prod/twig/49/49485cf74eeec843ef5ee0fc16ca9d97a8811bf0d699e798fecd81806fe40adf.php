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

/* lucky/welcome.html.twig */
class __TwigTemplate_174ab4ec53a8089897a9a6b47a43e23d70ad554dce8de41cab1591ebbc006741 extends Template
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
        echo "<h1>Welcome to ";
        echo twig_escape_filter($this->env, ($context["welcome_word"] ?? null), "html", null, true);
        echo "</h1>";
    }

    public function getTemplateName()
    {
        return "lucky/welcome.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "lucky/welcome.html.twig", "C:\\Users\\PC\\SymfonyDir\\day1\\templates\\lucky\\welcome.html.twig");
    }
}
