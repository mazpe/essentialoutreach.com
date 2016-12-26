<?php namespace Mesadev\Leadsaver\Components;

use Cms\Classes\ComponentBase;
use MesaDev\LeadSaver\Controllers\Leads as LeadController;
use MesaDev\LeadSaver\Models\Lead;

class Submit extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Submit Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        // Build a back-end form with the context of ‘frontend’
        $formController = new LeadController();
        $formController->create('frontend');

        // Append the formController to the page
        $this->page['form'] = $formController;

        // Append the missing style file so that our front-end forms would look
        // just like back-end
        $this->addCss('/modules/backend/assets/css/controls.css', 'core');
    }

    public function onSave()
    {
        return ['error' => Lead::create(post('Lead'))];
    }
}
