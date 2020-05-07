<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Suscriber extends Model
{
    //
    protected $table = 'suscriber';
	protected $primaryKey = 'id_sus';
    public $timestamps = false;
    protected $fillable = [
        'first_name_sus',
        'last_name_sus',
        'city_sus',
        'zip_code_sus',
        'email_sus',
        'phone_sus',
        'phone_whats_sus',
        'message_sus',
        'type_suscriber',
        'date_sus'
    ];
}
