<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.localization.pack.import.importer' shared service.

return $this->services['prestashop.core.localization.pack.import.importer'] = new \PrestaShop\PrestaShop\Core\Localization\Pack\Import\LocalizationPackImporter(${($_ = isset($this->services['prestashop.core.localization.pack.loader.remote']) ? $this->services['prestashop.core.localization.pack.loader.remote'] : $this->load('getPrestashop_Core_Localization_Pack_Loader_RemoteService.php')) && false ?: '_'}, ${($_ = isset($this->services['prestashop.core.localization.pack.loader.local']) ? $this->services['prestashop.core.localization.pack.loader.local'] : $this->load('getPrestashop_Core_Localization_Pack_Loader_LocalService.php')) && false ?: '_'}, ${($_ = isset($this->services['prestashop.core.localozation.pack.factory.localization_pack']) ? $this->services['prestashop.core.localozation.pack.factory.localization_pack'] : $this->services['prestashop.core.localozation.pack.factory.localization_pack'] = new \PrestaShop\PrestaShop\Core\Localization\Pack\Factory\LocalizationPackFactory()) && false ?: '_'}, ${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.legacy.configuration']) ? $this->services['prestashop.adapter.legacy.configuration'] : $this->services['prestashop.adapter.legacy.configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration()) && false ?: '_'});
