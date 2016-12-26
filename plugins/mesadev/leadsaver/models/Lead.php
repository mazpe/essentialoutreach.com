<?php namespace MesaDev\LeadSaver\Models;

use Model;

/**
 * Model
 */
class Lead extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /*
     * Validation
     */
    public $rules = [
        'first_name' => 'required|min:3|max:255',
        'email' => 'required|email',
    ];

//    $validator = Validator::make(Input::all(), $rules);
//
//    if ($validator->fails()) {
//        return Redirect::to('register')->withErrors($validator);
//    }

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'mesadev_leadsaver_leads';

    protected $fillable = ['first_name', 'last_name', 'email', 'telephone', 'description', 'interest', 'source'];
}