<?php namespace Katana\SpecialOffers\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Special Offers Back-end Controller
 */
class SpecialOffers extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Katana.SpecialOffers', 'specialoffers', 'specialoffers');
    }
}