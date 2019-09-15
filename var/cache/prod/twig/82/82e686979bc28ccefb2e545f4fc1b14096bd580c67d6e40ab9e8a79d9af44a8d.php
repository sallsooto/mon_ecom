<?php

/* @PrestaShop/Admin/Improve/International/Geolocation/Blocks/geolocation_by_ip_address.html.twig */
class __TwigTemplate_04bcbe2037eb19aeadb37b521f8e37614259176effcee708108029cd990d9804 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'geolocation_by_ip_address' => array($this, 'block_geolocation_by_ip_address'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 25
        echo "
";
        // line 27
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Improve/International/Geolocation/Blocks/geolocation_by_ip_address.html.twig", 27);
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('geolocation_by_ip_address', $context, $blocks);
    }

    public function block_geolocation_by_ip_address($context, array $blocks = array())
    {
        // line 30
        echo "  <div class=\"card\">
    <h3 class=\"card-header\">
      ";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Geolocation by IP address", array(), "Admin.International.Feature"), "html", null, true);
        echo "
    </h3>
    <div class=\"card-block row\">
      <div class=\"card-text\">
        <div class=\"form-group row\">
          ";
        // line 37
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Geolocation by IP address", array(), "Admin.International.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This option allows you, among other things, to restrict access to your shop for certain countries. See below.", array(), "Admin.International.Help"));
        echo "
          <div class=\"col-sm\">
            ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["geolocationByIpAddressForm"] ?? null), "geolocation_enabled", array()), 'errors');
        echo "
            ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["geolocationByIpAddressForm"] ?? null), "geolocation_enabled", array()), 'widget');
        echo "
          </div>
        </div>
      </div>
    </div>
    <div class=\"card-footer\">
      <div class=\"d-flex justify-content-end\">
        <button class=\"btn btn-primary\">
          ";
        // line 48
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
        return "@PrestaShop/Admin/Improve/International/Geolocation/Blocks/geolocation_by_ip_address.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 48,  55 => 40,  51 => 39,  46 => 37,  38 => 32,  34 => 30,  28 => 29,  25 => 28,  23 => 27,  20 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@PrestaShop/Admin/Improve/International/Geolocation/Blocks/geolocation_by_ip_address.html.twig", "/opt/lampp/htdocs/mon_ecom/src/PrestaShopBundle/Resources/views/Admin/Improve/International/Geolocation/Blocks/geolocation_by_ip_address.html.twig");
    }
}
