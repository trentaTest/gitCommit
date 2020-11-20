<?php
class vm_gitcommitdisplayModuleFrontController extends ModuleFrontController
{
    public function initContent()
    {
        parent::initContent();

        $this->setTemplate('module:vm_gitcommit/views/templates/front/display.tpl');
    }
}