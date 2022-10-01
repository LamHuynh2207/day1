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
class __TwigTemplate_6e1f0561d494f5f41618659ed2ef7803721560e398c9a23a995b9ecef0dac514 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "student/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "student/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "student/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Student index";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

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
                <th>Gender</th>
                <th>Dob</th>
                <th>PhoneNum</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["students"]) || array_key_exists("students", $context) ? $context["students"] : (function () { throw new RuntimeError('Variable "students" does not exist.', 33, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
            // line 34
            echo "            <tr>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "id", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "Name", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "Gender", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            ((twig_get_attribute($this->env, $this->source, $context["student"], "Dob", [], "any", false, false, false, 38)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "Dob", [], "any", false, false, false, 38), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "PhoneNum", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_student_show", ["id" => twig_get_attribute($this->env, $this->source, $context["student"], "id", [], "any", false, false, false, 41)]), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_student_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["student"], "id", [], "any", false, false, false, 42)]), "html", null, true);
            echo "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 46
            echo "            <tr>
                <td colspan=\"5\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "        </tbody>
    </table>
    <a class=\"btn btn-primary\" href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_student_new");
        echo "\" type=\"button\">Create new</a>
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  172 => 52,  168 => 50,  159 => 46,  150 => 42,  146 => 41,  141 => 39,  137 => 38,  133 => 37,  129 => 36,  125 => 35,  122 => 34,  117 => 33,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Student index{% endblock %}

{% block body %}
    <div class=\"container\">
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
                <th>Gender</th>
                <th>Dob</th>
                <th>PhoneNum</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for student in students %}
            <tr>
                <td>{{ student.id }}</td>
                <td>{{ student.Name }}</td>
                <td>{{ student.Gender }}</td>
                <td>{{ student.Dob ? student.Dob|date('Y-m-d') : '' }}</td>
                <td>{{ student.PhoneNum }}</td>
                <td>
                    <a href=\"{{ path('app_student_show', {'id': student.id}) }}\">show</a>
                    <a href=\"{{ path('app_student_edit', {'id': student.id}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"5\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    <a class=\"btn btn-primary\" href=\"{{ path('app_student_new') }}\" type=\"button\">Create new</a>
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

{% endblock %}
", "student/index.html.twig", "C:\\Users\\PC\\SymfonyDir\\day1\\templates\\student\\index.html.twig");
    }
}
