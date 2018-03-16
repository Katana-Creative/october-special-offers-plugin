<?php namespace Katana\SpecialOffers;

use Backend;
use System\Classes\PluginBase;

/**
 * SpecialOffers Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'SpecialOffers',
            'description' => 'No description provided yet...',
            'author'      => 'Katana',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {

        return [
            'Katana\SpecialOffers\Components\DisplaySpecialOffers' => 'DisplaySpecialOffers',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {


        return [
            'specialoffers' => [
                'label'       => 'SpecialOffers',
                'url'         => Backend::url('katana/specialoffers/specialoffers'),
                'icon'        => 'icon-money',
                'permissions' => ['katana.specialoffers.*'],
                'order'       => 500,
            ],
        ];
    }

}
