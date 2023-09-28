<?php
if (!defined('_PS_VERSION_')) {
    exit;
}

class Testmodule extends Module
{
    public function __construct()
    {
        $this->name = 'testmodule';
        $this->tab = 'others';
        $this->version = '1.0.0';
        $this->author = 'Test';
        $this->need_instance = 0;
        $this->ps_versions_compliancy = [
            'min' => '1.7.0.0',
            'max' => _PS_VERSION_,
        ];
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('Testmodule');
        $this->description = $this->l('Description Testmodule.');

        $this->confirmUninstall = $this->l('Are you sure you want to uninstall?');
    }

    public function install()
    {
        return parent::install();
    }

    public function uninstall()
    {
        return parent::uninstall();
    }
}
