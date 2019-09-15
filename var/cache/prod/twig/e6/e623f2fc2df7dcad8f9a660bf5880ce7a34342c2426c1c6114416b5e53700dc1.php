<?php

/* @PrestaShop/Admin/Improve/International/Geolocation/Blocks/geolocation_options.html.twig */
class __TwigTemplate_1eee7c3ecd53f323a458738fde11475de07e3c8e70eb3d442d8b2596d9c8f452 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'geolocation_options' => array($this, 'block_geolocation_options'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 25
        echo "
";
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('geolocation_options', $context, $blocks);
    }

    public function block_geolocation_options($context, array $blocks = array())
    {
        // line 29
        echo "  <div class=\"card\">
    <h3 class=\"card-header\">
      ";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Options", array(), "Admin.Global"), "html", null, true);
        echo "
    </h3>
    <div class=\"card-block row\">
      <div class=\"card-text\">
        <div class=\"row\">
          <div class=\"col\">
            <div class=\"alert alert-info\" role=\"alert\">
              <span class=\"alert-text\">
                ";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The following features are only available if you enable the Geolocation by IP address feature.", array(), "Admin.International.Feature"), "html", null, true);
        echo "
              </span>
            </div>
          </div>
        </div>

        <div class=\"form-group row\">
          <label class=\"form-control-label\">
            ";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Geolocation behavior for restricted countries", array(), "Admin.International.Feature"), "html", null, true);
        echo "
          </label>
          <div class=\"col-sm\">
            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["geolocationOptionsForm"] ?? null), "geolocation_behaviour", array()), 'errors');
        echo "
            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["geolocationOptionsForm"] ?? null), "geolocation_behaviour", array()), 'widget');
        echo "
          </div>
        </div>

        <div class=\"form-group row\">
          <label class=\"form-control-label\">
            ";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Geolocation behavior for other countries", array(), "Admin.International.Feature"), "html", null, true);
        echo "
          </label>
          <div class=\"col-sm\">
            ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["geolocationOptionsForm"] ?? null), "geolocation_na_behaviour", array()), 'errors');
        echo "
            ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["geolocationOptionsForm"] ?? null), "geolocation_na_behaviour", array()), 'widget');
        echo "
          </div>
        </div>

        <div class=\"form-group row\">
          <label class=\"form-control-label\">
            ";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Select the countries from which your store is accessible", array(), "Admin.International.Feature"), "html", null, true);
        echo "
          </label>

          <div class=\"col-sm\">
            <div class=\"form-group\">
              ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["geolocationOptionsForm"] ?? null), "geolocation_countries", array()), 'errors');
        echo "
              ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["geolocationOptionsForm"] ?? null), "geolocation_countries", array()), 'widget');
        echo "
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class=\"card-footer\">
      <div class=\"d-flex justify-content-end\">
        <button class=\"btn btn-primary\">
          ";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", array(), "Admin.Actions"), "html", null, true);
        echo "
        </button>
      </div>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/International/Geolocation/Blocks/geolocation_options.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  120 => 82,  108 => 73,  104 => 72,  96 => 67,  87 => 61,  83 => 60,  77 => 57,  68 => 51,  64 => 50,  58 => 47,  47 => 39,  36 => 31,  32 => 29,  26 => 28,  23 => 27,  20 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@PrestaShop/Admin/Improve/International/Geolocation/Blocks/geolocation_options.html.twig", "/opt/lampp/htdocs/mon_ecom/src/PrestaShopBundle/Resources/views/Admin/Improve/International/Geolocation/Blocks/geolocation_options.html.twig");
    }
}
