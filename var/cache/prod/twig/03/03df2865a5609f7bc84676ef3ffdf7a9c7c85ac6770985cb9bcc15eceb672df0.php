<?php

/* @PrestaShop/Admin/Improve/International/Geolocation/index.html.twig */
class __TwigTemplate_fffabd949ddffff2765af1932bc1e07ced8bcb932584f952eb5e83bca30c3f67 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 26
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Improve/International/Geolocation/index.html.twig", 26);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'geolocation_form_rest' => array($this, 'block_geolocation_form_rest'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 29
        list($context["geolocationByIpAddressForm"], $context["geolocationIpAddressWhitelistForm"], $context["geolocationOptionsForm"]) =         array($this->getAttribute(($context["geolocationForm"] ?? null), "geolocation_by_id_address", array()), $this->getAttribute(($context["geolocationForm"] ?? null), "geolocation_ip_address_whitelist", array()), $this->getAttribute(($context["geolocationForm"] ?? null), "geolocation_options", array()));
        // line 26
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 31
    public function block_content($context, array $blocks = array())
    {
        // line 32
        echo "  ";
        if ( !($context["geolocationDatabaseAvailable"] ?? null)) {
            // line 33
            echo "    <div class=\"row\">
      <div class=\"col\">
        <div class=\"alert alert-warning\" role=\"alert\">
          <span class=\"alert-text\">
            ";
            // line 37
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("In order to use Geolocation, please download [1]this file[/1] and extract it (using Winrar or Gzip) into the /app/Resources/geoip/ directory.", array("[1]" => "<a href=\"http://geolite.maxmind.com/download/geoip/database/GeoLite2-City.mmdb.gz\" target=\"_blank\">", "[/1]" => "<a/>"), "Admin.International.Feature");
            echo "
          </span>
        </div>
      </div>
    </div>
  ";
        }
        // line 43
        echo "
  ";
        // line 44
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["geolocationForm"] ?? null), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_geolocation_save_options")));
        echo "
    <div class=\"row justify-content-center\">
      <div class=\"col-xl-10\">
        ";
        // line 47
        $this->loadTemplate("@PrestaShop/Admin/Improve/International/Geolocation/Blocks/geolocation_by_ip_address.html.twig", "@PrestaShop/Admin/Improve/International/Geolocation/index.html.twig", 47)->display($context);
        // line 48
        echo "      </div>

      <div class=\"col-xl-10\">
        ";
        // line 51
        $this->loadTemplate("@PrestaShop/Admin/Improve/International/Geolocation/Blocks/geolocation_options.html.twig", "@PrestaShop/Admin/Improve/International/Geolocation/index.html.twig", 51)->display($context);
        // line 52
        echo "      </div>

      <div class=\"col-xl-10\">
        ";
        // line 55
        $this->loadTemplate("@PrestaShop/Admin/Improve/International/Geolocation/Blocks/geolocation_ip_address_whitelist.html.twig", "@PrestaShop/Admin/Improve/International/Geolocation/index.html.twig", 55)->display($context);
        // line 56
        echo "      </div>

      ";
        // line 58
        $this->displayBlock('geolocation_form_rest', $context, $blocks);
        // line 61
        echo "    </div>
  ";
        // line 62
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["geolocationForm"] ?? null), 'form_end');
        echo "
";
    }

    // line 58
    public function block_geolocation_form_rest($context, array $blocks = array())
    {
        // line 59
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["geolocationForm"] ?? null), 'rest');
        echo "
      ";
    }

    // line 65
    public function block_javascripts($context, array $blocks = array())
    {
        // line 66
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/geolocation.bundle.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/International/Geolocation/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 68,  107 => 66,  104 => 65,  97 => 59,  94 => 58,  88 => 62,  85 => 61,  83 => 58,  79 => 56,  77 => 55,  72 => 52,  70 => 51,  65 => 48,  63 => 47,  57 => 44,  54 => 43,  45 => 37,  39 => 33,  36 => 32,  33 => 31,  29 => 26,  27 => 29,  11 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@PrestaShop/Admin/Improve/International/Geolocation/index.html.twig", "/opt/lampp/htdocs/mon_ecom/src/PrestaShopBundle/Resources/views/Admin/Improve/International/Geolocation/index.html.twig");
    }
}
