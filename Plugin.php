<?php namespace LZaplata\Pricelists;

use Lzaplata\Pricelists\Components\Pricelist;
use System\Classes\PluginBase;

/**
 * Plugin class
 */
class Plugin extends PluginBase
{
    /**
     * register method, called when the plugin is first registered.
     */
    public function register()
    {
    }

    /**
     * boot method, called right before the request route.
     */
    public function boot()
    {
    }

    /**
     * registerComponents used by the frontend.
     */
    public function registerComponents()
    {
        return [
            Pricelist::class => "pricelist",
        ];
    }

    /**
     * registerPageSnippets used by the frontend.
     */
    public function registerPageSnippets()
    {
        return [
            Pricelist::class => "pricelist",
        ];
    }

    /**
     * registerSettings used by the backend.
     */
    public function registerSettings()
    {
    }
}
