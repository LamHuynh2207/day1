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

/* student/index.html.twig */
class __TwigTemplate_8859714129accddb0de7215eb179ed1dbfd444d079febc2fa581fbd1ac31ed36 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "student/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Student index";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <div class=\"container\">
        <header class=\"d-flex justify-content-center py-3\">
        <ul class=\"nav nav-pills\">
            <li class=\"nav-item\"><a href=\"#\" class=\"nav-link active\" aria-current=\"page\">Home</a></li>
            <li class=\"nav-item\"><a href=\"#\" class=\"nav-link\">Features</a></li>
            <li class=\"nav-item\"><a href=\"#\" class=\"nav-link\">Pricing</a></li>
            <li class=\"nav-item\"><a href=\"#\" class=\"nav-link\">FAQs</a></li>
            <li class=\"nav-item\"><a href=\"#\" class=\"nav-link\">About</a></li>
        </ul>
        </header>
    </div>

    <div class=\"container\">
    <h1>Student index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Dob</th>
                <th>PhoneNum</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["students"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
            // line 33
            echo "            <tr>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "id", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "Name", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            ((twig_get_attribute($this->env, $this->source, $context["student"], "Dob", [], "any", false, false, false, 36)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "Dob", [], "any", false, false, false, 36), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "PhoneNum", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_student_show", ["id" => twig_get_attribute($this->env, $this->source, $context["student"], "id", [], "any", false, false, false, 39)]), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_student_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["student"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 44
            echo "            <tr>
                <td colspan=\"5\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "        </tbody>
    </table>
    <button class=\"btn btn-primary\" href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_student_new");
        echo "\" type=\"button\">Create new</button>
    </div>
    
    <div class=\"container\">
  <footer class=\"py-5\">
    <div class=\"row\">
      <div class=\"col-6 col-md-2 mb-3\">
        <h5>Section</h5>
        <ul class=\"nav flex-column\">
          <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0 text-muted\">Home</a></li>
          <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0 text-muted\">Features</a></li>
          <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0 text-muted\">Pricing</a></li>
          <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0 text-muted\">FAQs</a></li>
          <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0 text-muted\">About</a></li>
        </ul>
      </div>

      <div class=\"col-6 col-md-2 mb-3\">
        <h5>Section</h5>
        <ul class=\"nav flex-column\">
          <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0 text-muted\">Home</a></li>
          <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0 text-muted\">Features</a></li>
          <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0 text-muted\">Pricing</a></li>
          <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0 text-muted\">FAQs</a></li>
          <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0 text-muted\">About</a></li>
        </ul>
      </div>

      <div class=\"col-6 col-md-2 mb-3\">
        <h5>Section</h5>
        <ul class=\"nav flex-column\">
          <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0 text-muted\">Home</a></li>
          <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0 text-muted\">Features</a></li>
          <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0 text-muted\">Pricing</a></li>
          <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0 text-muted\">FAQs</a></li>
          <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0 text-muted\">About</a></li>
        </ul>
      </div>

      <div class=\"col-md-5 offset-md-1 mb-3\">
        <form>
          <h5>Subscribe to our newsletter</h5>
          <p>Monthly digest of what's new and exciting from us.</p>
          <div class=\"d-flex flex-column flex-sm-row w-100 gap-2\">
            <label for=\"newsletter1\" class=\"visually-hidden\">Email address</label>
            <input id=\"newsletter1\" type=\"text\" class=\"form-control\" placeholder=\"Email address\">
            <button class=\"btn btn-primary\" type=\"button\">Subscribe</button>
          </div>
        </form>
      </div>
    </div>

    <div class=\"d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top\">
      <p>© 2022 Company, Inc. All rights reserved.</p>
      <ul class=\"list-unstyled d-flex\">
        <li class=\"ms-3\"><a class=\"link-dark\" href=\"#\"><svg class=\"bi\" width=\"24\" height=\"24\"><use xlink:href=\"#twitter\"></use></svg></a></li>
        <li class=\"ms-3\"><a class=\"link-dark\" href=\"#\"><svg class=\"bi\" width=\"24\" height=\"24\"><use xlink:href=\"#instagram\"></use></svg></a></li>
        <li class=\"ms-3\"><a class=\"link-dark\" href=\"#\"><svg class=\"bi\" width=\"24\" height=\"24\"><use xlink:href=\"#facebook\"></use></svg></a></li>
      </ul>
    </div>
  </footer>
</div>

";
    }

    public function getTemplateName()
    {
        return "student/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 50,  133 => 48,  124 => 44,  115 => 40,  111 => 39,  106 => 37,  102 => 36,  98 => 35,  94 => 34,  91 => 33,  86 => 32,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "student/index.html.twig", "C:\\Users\\PC\\SymfonyDir\\day1\\templates\\student\\index.html.twig");
    }
}
