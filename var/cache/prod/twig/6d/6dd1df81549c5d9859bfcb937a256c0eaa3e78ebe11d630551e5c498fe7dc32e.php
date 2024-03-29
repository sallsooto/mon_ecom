<?php

/* @PrestaShop/Admin/Module/Includes/dropdown_categories_catalog.html.twig */
class __TwigTemplate_354a36d6af0877dec37088ac96e460fe60683b7f96d694bc327f8060ed8e2390 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 25
        echo "<div class=\"ps-dropdown dropdown btn-group bordered mb-1\">
  ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["topMenuData"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 27
            echo "    ";
            $context["refMenu"] = $this->getAttribute($context["menu"], "refMenu", array());
            // line 28
            echo "    <div id=\"";
            echo twig_escape_filter($this->env, ($context["refMenu"] ?? null), "html", null, true);
            echo "\" class=\"dropdown-label\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
      <span class=\"js-selected-item selected-item module-category-selector-label\">
        ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "name", array()), "html", null, true);
            echo "
      </span>
      <i class=\"material-icons arrow-down float-right\">keyboard_arrow_down</i>
    </div>

    <div class=\"ps-dropdown-menu dropdown-menu module-category-selector\" aria-labelledby=\"";
            // line 35
            echo twig_escape_filter($this->env, ($context["refMenu"] ?? null), "html", null, true);
            echo "\">
      <ul class=\"items-list js-items-list\">
        <li class=\"module-category-reset\">
          <a class=\"dropdown-item\" href=\"#\">
            ";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("All Categories", array(), "Admin.Modules.Feature"), "html", null, true);
            echo "
          </a>
        </li>
        ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["menu"], "subMenu", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["subMenu"]) {
                // line 43
                echo "          <li class=\"module-category-menu\"
            ";
                // line 44
                if ($this->getAttribute($context["subMenu"], "tab", array())) {
                    echo "data-category-tab=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["subMenu"], "tab", array()), "html", null, true);
                    echo "\"";
                }
                // line 45
                echo "            data-category-ref=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["subMenu"], "refMenu", array()), "html", null, true);
                echo "\"
            data-category-display-name=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($context["subMenu"], "name", array()), "html", null, true);
                echo "\"
          >
            <a  class=\"dropdown-item\" href=\"#\">
              ";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($context["subMenu"], "name", array()), "html", null, true);
                echo "<span class=\"float-right\">";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["subMenu"], "modules", array())), "html", null, true);
                echo "</span>
            </a>
          </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subMenu'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "      </ul>
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Module/Includes/dropdown_categories_catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 56,  92 => 53,  80 => 49,  74 => 46,  69 => 45,  63 => 44,  60 => 43,  56 => 42,  50 => 39,  43 => 35,  35 => 30,  29 => 28,  26 => 27,  22 => 26,  19 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@PrestaShop/Admin/Module/Includes/dropdown_categories_catalog.html.twig", "/opt/lampp/htdocs/mon_ecom/src/PrestaShopBundle/Resources/views/Admin/Module/Includes/dropdown_categories_catalog.html.twig");
    }
}
