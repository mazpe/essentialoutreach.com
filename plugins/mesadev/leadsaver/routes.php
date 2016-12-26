<?php

use MesaDev\LeadSaver\Models\Lead;
//use Illuminate\Contracts\Validation\Validator;

use Illuminate\Support\Facades\Validator;
//use Validator;

Route::post('/leadsaver', function() {

//use \October\Rain\Database\Traits\Validation;

    $rules = [
        'Lead.first_name' => 'required|min:3|max:255',
        'Lead.email' => 'required|email',
    ];

    $validator = Validator::make(Input::all(), $rules);

    if ($validator->fails()) {
        return Redirect::to('/contact')->withErrors($validator);
    }

    // These variables are available inside the message as Twig
    Lead::create(post('Lead'));

//    Mail::send('101', $vars, function($message) use ($vars) {
//        $message->from($vars['sender_email'], $vars['sender_name']);
//        $message->to($vars['recipient_email'], $vars['recipient_name']);
//    });

    return Redirect::to('/' )->with('message', 'Contact Information Saved');
});