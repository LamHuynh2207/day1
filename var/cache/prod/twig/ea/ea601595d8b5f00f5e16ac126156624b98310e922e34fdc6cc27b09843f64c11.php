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

/* student/show.html.twig */
class __TwigTemplate_a944aded7db030286135a2c7523207384fb4840b75659f9f0c2a69b8bc73d8db extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "student/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Student";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    ";
        if ((0 === twig_compare(($context["student"] ?? null), null))) {
            // line 7
            echo "    <p>Object is not found.<p>
    ";
        } else {
            // line 9
            echo "    <h1>Student</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["student"] ?? null), "id", [], "any", false, false, false, 15), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["student"] ?? null), "Name", [], "any", false, false, false, 19), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Dob</th>
                <td>";
            // line 23
            ((twig_get_attribute($this->env, $this->source, ($context["student"] ?? null), "Dob", [], "any", false, false, false, 23)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["student"] ?? null), "Dob", [], "any", false, false, false, 23), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
            </tr>
            <tr>
                <th>PhoneNum</th>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["student"] ?? null), "PhoneNum", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
            </tr>
        </tbody>
    </table>
    ";
        }
        // line 32
        echo "
    <a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_student_index");
        echo "\">back to list</a>

";
    }

    public function getTemplateName()
    {
        return "student/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 33,  102 => 32,  94 => 27,  87 => 23,  80 => 19,  73 => 15,  65 => 9,  61 => 7,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "student/show.html.twig", "C:\\Users\\PC\\SymfonyDir\\day1\\templates\\student\\show.html.twig");
    }
}
