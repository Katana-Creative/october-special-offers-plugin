<?php namespace Katana\SpecialOffers\Components;

use Cms\Classes\ComponentBase;
use Katana\SpecialOffers\Models\SpecialOffer;

class DisplaySpecialOffers extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'DisplaySpecialOffers Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRender()
    {
        $this->page["specialoffers"]  =SpecialOffer::all();
    }

}