<?php namespace LZaplata\Pricelists\Controllers;

use Backend;
use BackendMenu;
use Backend\Classes\Controller;

class Pricelists extends Controller
{
    public $implement = [
        \Backend\Behaviors\FormController::class,
        \Backend\Behaviors\ListController::class
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public $requiredPermissions = [
        'lzaplata.pricelists.default' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('LZaplata.Pricelists', 'main-menu-item');
    }

}
