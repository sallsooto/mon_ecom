<?php

/* @PrestaShop/Admin/Improve/International/Geolocation/Blocks/geolocation_ip_address_whitelist.html.twig */
class __TwigTemplate_264327d7f2961c6ce6cd538991c990b906826586f22c69dac070886adc4b7ea4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'geolocation_ip_address_whitelist' => array($this, 'block_geolocation_ip_address_whitelist'),
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
        $this->displayBlock('geolocation_ip_address_whitelist', $context, $blocks);
    }

    public function block_geolocation_ip_address_whitelist($context, array $blocks = array())
    {
        // line 29
        echo "  <div class=\"card\">
    <h3 class=\"card-header\">
      ";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("IP address whitelist", array(), "Admin.International.Feature"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You can add IP addresses that will always be allowed to access your shop (e.g. Google bots' IP).", array(), "Admin.International.Help"), "html", null, true);
        echo "
              </span>
            </div>
          </div>
        </div>

        <div class=\"form-group row\">
          <label class=\"form-control-label\">
            ";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Whitelisted IP addresses", array(), "Admin.International.Feature"), "html", null, true);
        echo "
          </label>
          <div class=\"col-sm\">
            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["geolocationIpAddressWhitelistForm"] ?? null), "geolocation_whitelist", array()), 'errors');
        echo "
            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["geolocationIpAddressWhitelistForm"] ?? null), "geolocation_whitelist", array()), 'widget');
        echo "
          </div>
        </div>
      </div>
    </div>
    <div class=\"card-footer\">
      <div class=\"d-flex justify-content-end\">
        <button class=\"btn btn-primary\">
          ";
        // line 59
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
        return "@PrestaShop/Admin/Improve/International/Geolocation/Blocks/geolocation_ip_address_whitelist.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  79 => 59,  68 => 51,  64 => 50,  58 => 47,  47 => 39,  36 => 31,  32 => 29,  26 => 28,  23 => 27,  20 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@PrestaShop/Admin/Improve/International/Geolocation/Blocks/geolocation_ip_address_whitelist.html.twig", "/opt/lampp/htdocs/mon_ecom/src/PrestaShopBundle/Resources/views/Admin/Improve/International/Geolocation/Blocks/geolocation_ip_address_whitelist.html.twig");
    }
}
