<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //
    protected $table = 'contact';
	protected $primaryKey = 'id_con';
	public $timestamps = false;

	protected $fillable = [
		'name_con',
		'email_con',
        'phone_con',
		'message_con',
		'company_con',
		'country_con'
	];

}
