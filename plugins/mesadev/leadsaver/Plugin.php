<?php namespace MesaDev\LeadSaver;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'MesaDev\Leadsaver\Components\Submit' => 'Submit'
        ];

    }

    public function registerSettings()
    {
    }
}
