<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'ps_checkout.provider.funding_source' shared service.

return $this->services['ps_checkout.provider.funding_source'] = new \PrestaShop\Module\PrestashopCheckout\FundingSourceProvider(${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->load('getPsCheckout_ModuleService.php')) && false ?: '_'});
